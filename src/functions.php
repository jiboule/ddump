<?php

if (!function_exists('ddump')) {
    /**
     * @param $var
     */
    function ddump(...$var)
    {
        dump(...$var);
        exit();
    }
}
