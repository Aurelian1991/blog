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
use Route;

trait ThirdLoginHelper
{
    //第三方登录
    public function oauth(Request $request)
    {
        $driver = $request->input('driver');
        $driver = !isset($this->oauthDrivers[$driver]) ? 'github' : $this->oauthDrivers[$driver];
        if (Auth::check() && Auth::user()->driver == $driver) {
            return redirect('/');
        }
        return Socialite::driver($driver)->redirect();
    }
    public function handleProviderCallback(Request $request, User $userModel, $driver = 'github')
    {

        $oauthUser = Socialite::driver($driver)->user();
        $user = $userModel->getByDriver($driver, $oauthUser->id);
        if (Auth::check()) {
            return redirect(url('/'));
        } else {

            if (!$user) {
                $oauthData['name'] = $oauthUser['nickname'] ?? $oauthUser['username'];
                $oauthData['email'] = $oauthUser['email'];
                $oauthData['image_url'] = $oauthUser['avatar'];
                $oauthData['driver'] = $driver;
                $oauthData['access_token'] = $oauthUser->token->access_token;
                $oauthData['openid'] = $oauthUser->id;
                if ($user = $this->UserCreate($oauthData)) {
                    Openid::create([
                        'driver' => $driver,
                        'openid' => $oauthUser->id,
                        'uid' => $user['id'],
                    ]);
                }
            }
            if ($user->is_banned == '1') {
                return session()->flash('status', '您已被禁言');
            };
            $user->access_token = $oauthUser->token;
            $user->last_login_ip = ip2long($request->getClientIp());
            $user->login_times = $user->login_times + 1;
            $user->save();
            Auth::login($user, true);
            session()->put('UID', $user->id);
            session()->put('user', $user);
            return redirect(url('/'));
        }
    }

}