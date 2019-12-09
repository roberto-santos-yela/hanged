<?php

class Helper
{
    public static function show($var_to_dump)
    {
        echo '<pre>';
        var_dump($var_to_dump);
        echo '</pre>';
        exit;
    }
}