<?php


namespace DesignPatterns\Logger\LoggerFactory;

interface LoggerFactory
{
    public function createLogger(): Logger;
}
