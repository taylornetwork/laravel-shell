<?php


namespace TaylorNetwork\Shell;

use TaylorNetwork\Shell\Contracts\ShellCommand as ShellCommandContract;

class ShellCommand implements ShellCommandContract
{
    public $command;

    public $exec;

    public $output;

    public $exitCode;

    public function __construct(string $command, bool $defer = false)
    {
        $this->command = $command;

        if(!$defer) {
            $this->execute();
        }
    }

    public function execute()
    {
        $this->exec = exec($this->command, $this->output, $this->exitCode);

        return $this->output;
    }

}