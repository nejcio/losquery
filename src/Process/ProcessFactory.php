<?php

namespace Wrcx\Losquery\Process;

use Wrcx\Losquery\Process\ProcessInterface;

class ProcessFactory
{
    protected $process;

    public function __construct(ProcessInterface $process )
    {
        $this->process = $process;
    }

    /**
     *
     */
    public function getProcess()
    {
        return $this->process;
    }

    /**
     * @return Process
     */
    public function newInstance()
    {
        return $this->process;
    }
}
