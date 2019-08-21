<?php


class helperModel
{
    public static function isAjax()
    {
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest')
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}