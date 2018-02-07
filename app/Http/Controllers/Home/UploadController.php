<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\OSS;

class UploadController extends Controller
{
    private $config = [
        'public' => [
            'disk' => 'public',
            'path' => 'img',
            'show_root' => '/storage/',
            'real_root' => '/storage/app/public/',
            'drive' => 'oss',
        ],
    ];

    public function getConfig($key){
        $config = $this->config[$key];
        if(isset( $config['real_root'] )){
            $config['real_root'] = base_path().$config['real_root'];
        }
        return $config;
    }

    //上传单个图片
    public function once_image(Request $request){
        $result = [];
        $config_key = $request->get('config','public');
        $config = $this->getConfig($config_key);

        foreach($request->file() as $key => $File ){
            $file_path = $File->store(
                $config['path']  , $config['disk']
            );
            $result[] = [
                'name'=>$key.time(),
                'src' => $config['show_root'].$file_path
            ];
            break;
        }

        switch(isset( $config['drive'] )){
            case 'oss':
                    $result[0]['url'] = "http://".$this->oss($file_path,$config['real_root'].$file_path);
                break;
        }
        $res['data']=$result;
        return response()->json($res,201);
    }

    protected function oss($remote_path,$local_path,$delete_local_file=false){

        $result = \App\Services\OSS::publicUpload(env('OSS_BUCKET'), $remote_path,$local_path);
        if( $delete_local_file ){
            \Illuminate\Support\Facades\Storage::delete($local_path);

        }
        return env('OSS_HOST').'/'.$remote_path;

    }
}
