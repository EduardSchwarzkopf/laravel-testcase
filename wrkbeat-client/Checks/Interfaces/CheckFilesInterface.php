<?php


interface CheckFilesInterface
{

    static public function Run(int $threshold,  string $pattern = null): bool;
}
