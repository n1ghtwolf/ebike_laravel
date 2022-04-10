<?php
Class helper implements helpers {

    public static function debug($data)
    {
       self::var_dump($data);
    }

    public static function var_dump($data)
    {
        self::getOpenPre();
        var_dump($data);
        self::getClosedPre();
    }

    public static function print_r($data)
    {
        self::getOpenPre();
        print_r($data);
        self::getClosedPre();
    }

    public static function echo($data)
    {
        self::getOpenPre();
        echo $data;
        self::getClosedPre();
    }

    public static function getOpenPre()
    {
        echo '<pre>';
    }

    public static function getClosedPre()
    {
        echo '</pre>';
    }
}