<?php
class Cylinder
{
    private $starterValve;
    private $disactivatorValve;
    private $lamp;
    private $number;
    public function __construct($number)
    {
        $this->number = $number;
        $this->starterValve = new Valve();
        $this->disactivatorValve = new Valve();
        $this->lamp = new Lamp();
    }

    private function printInfo(){
        echo "\n\033[34mcylinder with $this->number works:\033[0m \n";
    }

    public function executeFirstStep()
    {
        $this->printInfo();
        echo "первый такт ";
        $this->starterValve -> startUpGas();
        echo "поршень движется вниз, образуется разрежение, ";
    }

    public function executeSecondStep()
    {
        $this->printInfo();
        echo "второй такт ";
        echo "Поршень движется к ВМТ, заряд сжимается поршнем до давления степени сжатия ";
    }

    public function executeThirdStep()
    {
        $this->printInfo();
        echo "третий такт ";
        $this->lamp -> light();
        echo "движение поршня в сторону нижней мёртвой точки под давлением горячих газов ";

    }

    public function executeFourthStep()
    {
        $this->printInfo();
        echo "четвертый такт ";
        $this->disactivatorValve -> releaseGas();
        echo ("очистка цилиндра от отработавшей смеси. Выпускной клапан открыт, поршень движется в сторону верхней мёртвой точки, вытесняя выхлопные газы ");
    }
    
}
