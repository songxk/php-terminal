<?php
class Progress {

    /**
    * 终端显示进度条
    * @param $percent 进度(百分数)
    * @param $particleSize 刷新粒度，默认是1
    */
    public static function showProgressBar($percent, $particleSize = 1) {
        static $lastPercent = 0;
        if ((($percent - $lastPercent) > $particleSize) || $percent >= 100) {
            $lastPercent = $percent;
            system("tput clear");
            echo self::_buildLine($percent) . PHP_EOL;
        }
    }

    private static function _buildLine($percent) {
        $done = ($percent > 0) ? str_repeat('■', $percent) : '';
        $left = (100 - $percent > 0) ? str_repeat(' ', 100 - $percent) : '';
        $buffer = sprintf("[{$done}{$left}]");
        if ($percent !== 100) {
            $percentString = sprintf("[%-6s]", $percent . '%');
        } else {
            $percentString = sprintf("[%-5s]", 'OK');;
        }
        return $percentString . $buffer . PHP_EOL;
    }
}
