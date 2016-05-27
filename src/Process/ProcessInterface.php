<?php

namespace Wrcx\Losquery\Process;

interface ProcessInterface
{
    /**
     * @param string        $command
     * @param callable|null $onData
     * @param callable|null $onError
     *
     * @return mixed
     */
    public function run(string $command, callable $onData = null, callable $onError = null);
}
