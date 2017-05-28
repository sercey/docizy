<?php
/**
 * @author Serkan Ceylan
 * @license GPL
 * @version 1.1
 */

class stringProcess extends CApplicationComponent
{
    public function sifreUret($length = 10){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

    public function slugOlustur($metin){
        $tr_words   = array(' ','ç','ğ','ı','ö','ş','ü','A','B','C','Ç','D','E','F','G','Ğ','H','I','İ','J','K','L','M','N','O','Ö','P','R','S','Ş','T','U','Ü','V','Y','Z','W','Q','X',",","'",".",'"',"/","!","%","&","\\","(", ")", "=", "?", "*", "+",">","<");
        $utf_words  = array('-','c','g','i','o','s','u','a','b','c','c','d','e','f','g','g','h','i','i','j','k','l','m','n','o','o','p','r','s','s','t','u','u','v','y','z','w','q','x',"-","", "", "", "-","", "", "", "", "",  "",  "-", "",  "", "-","","","");

        return str_replace($tr_words, $utf_words, $metin);
    }
}

?>