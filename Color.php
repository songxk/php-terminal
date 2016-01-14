<?php
/**
 * @title: Color.php
 * @description: PHP终端输出彩色
 * @author: songxinkai@gmail.com
 * @date: 2016-01-14
 * @copyright  Copyright (c) 2015-2016 www.songxinkai.com
 */
class Color {
    const BLACK         = '30';
    const RED           = '31';
    const GREEN         = '32';
    const YELLOW        = '33';
    const BLUE          = '34';
    const MAGENTA       = '35';
    const CYAN          = '36';
    const LIGHT_GRAY    = '37';
    const DARK_GRAY     = '90';
    const LIGHT_RED     = '91';
    const LIGHT_GREEN   = '92';
    const LIGHT_YELLOW  = '93';
    const LIGHT_BLUE    = '94';
    const LIGHT_MAGENTA = '95';
    const LIGHT_CYAN    = '96';
    const WHITE         = '97';

    const BOLD       = '1';
    const DIM        = '2';
    const UNDERLINED = '4';
    const REVERSE    = '7';
    const HIDDEN     = '8';

    public static function format($string, $color, $style = array()) {
        return "\033[".implode(';', array_merge($style, array($color))).'m'.$string."\033[0m";
    }
}