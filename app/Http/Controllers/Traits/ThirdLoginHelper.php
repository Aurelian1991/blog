<?php
namespace App\Http\Controllers\Traits;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/11
 * Time: 16:53
 */
 use Illuminate\Http\Request;
 use Auth;
 use Socialite;
 use App\Models\Openid;
 use App\Models\User;
trait ThirdLoginHelper
{
    //第三方登录
    public function oauth(Request $request)
    {
        $driver = $request->input('driver');
        $driver = !isset($this->oauthDrivers[$driver]) ? 'github' : $this->oauthDrivers[$driver];
        if (Auth::check() && Auth::user()->driver== $driver) {
            return redirect('/');
        }
        return Socialite::driver($driver)->redirect();
    }
    public function handleProviderCallback(Request $request,User $userModel)
    {
        $driver = $request->input('driver') ?? 'github';
        $oauthUser = Socialite::driver($driver)->user();
        $user = $userModel->getByDriver($driver, $oauthUser->id);
        if (Auth::check()) {
            redirect(url('/'));
        } else {
            if($user){
                if ($user->is_banned == 'yes') {
                    return session()->flash('status','您已被禁言');
                };
              $user->access_token=$oauthUser->token;
              $user->last_login_ip=ip2long($request->getClientIp());
              $user->login_times=$user->login_times+1;
              $user->save();
              Auth::login($user, true);
              session()->put('UID',$user->id);
              session()->put('user',$user);
                return redirect(url('/'));
            }
            $oauthData['name']=$oauthUser['nickname']??$oauthUser['username'];
            $oauthData['email']=$oauthUser['email'];
            $oauthData['image_url']=$oauthUser['avatar'];
            $oauthData['driver']=$driver;
            $oauthData['access_token']=$oauthUser->token->access_token;
            $oauthData['openid']=$oauthUser->id;
            if($member=$this->UserCreate($oauthData)){
                Openid::create([
                    'driver'=>$driver,
                    'openid'=>$oauthUser->id,
                    'uid'=>$member['id']
                ]);
            }
            $oauthData['id']=$member['id'];
            session()->put('UID',$member['id']);
            session()->put('user',$oauthData);
            Auth::login($user, true);
            redirect(url('/'));
        }
    }

}