<?php
class Valve
{
    public function startUpGas()
    {
        echo "\033[32mвпускаем газ\033[0m\n";
    }
    public function releaseGas()
    {
        echo "\033[31mвыпускаем выхлопные газы\033[0m\n";
    }
}
