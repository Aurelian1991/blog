<?php
namespace Aure\Tools;

use GuzzleHttp\Client;
use Overtrue\Pinyin\Pinyin;

class BaiduTranslate
{
    private $APP_ID = "20180201000120193";
    private $SEC_KEY = "R_RoqZnXQitfPrEtBXqj";
    private $request_url = "http://api.fanyi.baidu.com/api/trans/vip/translate?";

    protected $language = [
        "auto", 'zh', "en", "yue", "wyw", "jp", "kor", "fra", "spa", "th", "ara", "ru", "pt", "de", "it", "el", "nl", "pl", "bu", "est", "dan", "fin", "cs", "rom",
        "slo", "swe", "hu", "cht", "vie"
    ];
    public function translate($query, $from = 'auto', $to = 'en')
    {
        if(!$query){
            return false;
        }
        $client = new client;
        $salt = rand(10000, 99999);
        $sign = md5($this->APP_ID . $query . $salt . $this->SEC_KEY);
        $params = [
            'q' => $query,
            'from' => $from,
            'to' => $to,
            'appid' => $this->APP_ID,
            'salt' => $salt,
            'sign' => $sign,
            'salt' => $salt,
        ];
        $post_data = http_build_query($params);
        $url = $this->request_url . $post_data;
        $res = $client->request('GET', $url);
        $res=json_decode(($res->getBody()),true);
        if(!empty($res['trans_result'][0]['dst'])){
            return str_slug($res['trans_result'][0]['dst']);
        }else{
            return $this->pinyin($query);
        }
    }
    public function pinyin($str){
        return str_slug(app(Pinyin::class)->permalink($str));        
    }

}