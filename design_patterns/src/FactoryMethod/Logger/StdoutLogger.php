<?php


namespace DesignPatterns\Logger\StdoutLogger;

class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo $message;
    }
}
