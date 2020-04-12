<?php


namespace TaylorNetwork\Shell\Contracts;


interface Shell
{
    public static function execute(string $command);

    public static function command(string $command);
}