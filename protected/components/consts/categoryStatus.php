<?php
class categoryStatus{
    const PUBLISHED = 1;
    const NOT_PUBLISHED = 0;

    public static function getText($kod){
        $_return = "";
        switch($kod){
            case 0:
                $_return = "Pasif";
                break;
            case 1:
                $_return = "Yayında";
                break;
            default:
                $_return = "Belirtilmedi";
                break;
        }
        return $_return;
    }
}