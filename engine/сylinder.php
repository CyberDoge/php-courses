<?php
class Cylinder{
    private $starterValve;
    private $disactivatorValve;
    private $lamp;
    function executeFirstStep(){
        $this->starterValve.startUpGas();
    }

    function executeSecondStep(){
    }

    function executeThirdStep(){
        $this->lamp.light();
    }

    function executeFourthStep(){
        $this->disactivatorValve.releaseGas();
    }
}
