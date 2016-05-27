<?php

namespace Wrcx\Losquery;

class Config
{
    /**
     * Package configuration
     * @return array
     */
    public static function config()
    {
        return [
            'builder' => function () {
                return new \Wrcx\Losquery\Builder\SqlQueryBuilder(Config::getConfig('select'));
            },
            'common' => function () {
                return new \Aura\SqlQuery\Quoter('"', '"');
            },
            'select' => function () {
                return new \Aura\SqlQuery\Sqlite\Select(\Wrcx\Losquery\Config::getConfig('common'));
            },
            'symfonyProcess' => function () {
                return new \Symfony\Component\Process\Process("echo");
            },
            'process' => function () {
                return new \Wrcx\Losquery\Process\SymfonyProcess(\Wrcx\Losquery\Config::getConfig('symfonyProcess'));
            }
        ];
    }

    /**
     * @param string $config
     *
     * @return object
     */
    public static function getConfig(string $config)
    {
        return self::config()[$config]();
    }
}