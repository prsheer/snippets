<?php


namespace DesignPatterns\Logger\FileLoggerFactory;

use DesignPatterns\Logger\FileLogger\FileLogger;

class FileLoggerFactory implements LoggerFactory
{
    private $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}
