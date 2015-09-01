<?php

class Metars {

    // ICAO validation
    public function icaoValidate($icao) {
        if (empty($icao)) {
            $error = '<p class="text text-danger">Please enter an ICAO</p>';

        } elseif (strlen($icao) != 4) {
            $error = '<p class="text text-danger">ICAO\'s can only be four digits</p>';

        } elseif (preg_match("/[0-9]/", $icao)) {
            $error = '<p class="text text-danger">ICAO\'s can\'t contain numbers!</p>';

        } else {
            $error = null;
        }

        return $error;
    }

    // Find the info from the JSON data
    public function dataRetrieve($icao, $type) {
        // JSON airport info
        $JSONdatas = file_get_contents('../assets/city_airport_codes.json');
        $ARRAYdatas = json_decode($JSONdatas);

        // Parse the JSON data to be usable
        $json = array_filter($ARRAYdatas, function($item) use(&$icao) {
            return isset($item->icao_code) && $item->icao_code == $icao;
        });

        $info = array_pop($json);

        return $result = $info ? $info->$type : '';
    }

    public function urlExist($url){
        $agent = "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)";$ch=curl_init();
        curl_setopt ($ch, CURLOPT_URL,$url );
        curl_setopt($ch, CURLOPT_USERAGENT, $agent);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch,CURLOPT_VERBOSE,false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 6);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch,CURLOPT_SSLVERSION,3);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, FALSE);
        $page=curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if($httpcode>=200 && $httpcode<300) {
            return true;
        } else {
            return false;
        }
    }

}