<?php


namespace TaylorNetwork\Shell;

use TaylorNetwork\Shell\Contracts\Shell as ShellContract;

class Shell implements ShellContract
{
    public static function execute(string $command)
    {
        return static::command($command)->output;
    }

    public static function command(string $command): ShellCommand
    {
        return new ShellCommand($command);
    }
}