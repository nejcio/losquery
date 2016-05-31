<?php

namespace Wrcx\Losquery;

use Wrcx\Losquery\Process\ProcessFactory;

class Losrunner
{
    protected $factory;

    public function __construct()
    {
        $processFactory = new ProcessFactory(Config::getConfig('process'));
        $this->factory = $processFactory->newInstance();
    }

    /**
     * @param      $query
     * @param null $output
     *
     * @return mixed
     */
    public function run($query, $output = null)
    {
        $command = $this->getCommand($this->getQuery($query), $output);
        $process = $this->factory->run($command);

        return $process->getOutput();
    }

    /**
     * @return Process\ProcessFactory
     */
    public function getFactory()
    {
        return $this->factory;
    }

    /**
     * @param $query
     *
     * @return mixed
     */
    protected function getQuery(string $query)
    {
        $query    = trim((string) $query);
        $replaced = preg_replace("#\\s+#", " ", $query);

        return $replaced;
    }

    /**
     * @param $query
     * @param $output
     *
     * @return string
     */
    protected function getCommand(string $query, $output)
    {
        $command = "echo '{$query};' | osqueryi --" . $output;

        return $command;
    }
}
