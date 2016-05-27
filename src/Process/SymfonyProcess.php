<?php

namespace Wrcx\Losquery\Process;

use Symfony\Component\Process\Process;
use Wrcx\Losquery\Process\ProcessInterface;

class SymfonyProcess implements ProcessInterface
{
    protected $process;

    public function __construct(Process $process)
    {
        $this->process = $process;
    }
    
    /**
     * @param string        $command
     * @param callable|null $onData
     * @param callable|null $onError
     *
     * @return $this
     */
    public function run(string $command, callable $onData = null, callable $onError = null)
    {
        $this->process->setCommandLine($command);
        $this->process->run(function ($type, $buffer) use ($onData, $onError) {
            $this->processResponse($type, $buffer, $onData, $onError);
        });
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getOutput()
    {
        return $this->process->getOutput();
    }
    
    /**
     * @param               $type
     * @param               $buffer
     * @param callable|null $onData
     * @param callable|null $onError
     */
    protected function processResponse($type, $buffer, callable $onData = null, callable $onError = null)
    {
        if ($type === "err") {
            if ($onError !== null) {
                echo 'ERR > '.$buffer;
            }
        } else {
            if ($onData !== null) {
                echo 'ERR > '.$buffer;
            }
        }
    }
}
