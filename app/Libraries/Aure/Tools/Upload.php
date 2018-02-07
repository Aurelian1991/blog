<?php
namespace Aure\Tools;
use Illuminate\Http\Request;
class Upload{
    private $config = [
        'public' => [
            'disk' => 'public',
            'path' => 'img',
            'show_root' => '/storage/',
            'real_root' => '/storage/app/public/',
            'drive' => 'oss',
        ],
    ];
    public static function picture(Request $request){
        foreach ($request->file() as $key => $File) {
            $file_path = $File->store(
                "img",
                "public"
            );
            $result[] = [
                'name' => $key . time(),
                'src' => '/storage/' . $file_path
            ];
        }
        foreach ($result as $k => $v) {
            $result[$k]['url']= self::oss($file_path, base_path(). '/storage/app/public/'.$file_path);
        }
        if(count($result)==1){
            return $result[0];
        }
        return $result;
    }
    protected static function oss($remote_path, $local_path, $delete_local_file = false)
    {

        if(env("APP_ENV")=="local"){//本地环境
            $result = \App\Services\OSS::publicUpload(env('OSS_BUCKET'), $remote_path, $local_path);
        }else{//线上
            $result = \App\Services\OSS::privateUpload(env('OSS_BUCKET'), $remote_path, $local_path);
        }
        if ($delete_local_file) {
            \Illuminate\Support\Facades\Storage::delete($local_path);

        }
        return env('OSS_HOST') . '/' . $remote_path;

    }
}