<?php


namespace TaylorNetwork\Shell\Contracts;


interface ShellCommand
{
    public function __construct(string $command, bool $defer);

    public function execute();
}