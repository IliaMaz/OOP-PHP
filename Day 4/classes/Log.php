<?php

class Log
{

    public static function logIt($content)
    {
        if (file_exists('log.txt')) {
            $fileToLog = fopen('log.txt', 'a');
            fwrite($fileToLog, $content);
            fclose($fileToLog);
        }
    }
}
