<?php
class Engine
{
    private $cylindersArray;

    public function __construct()
    {
        $this->cylindersArray = array(4);
        for ($i = 0; $i < 4; $i++) {
            $this->cylindersArray[$i] = new Cylinder($i);
        }

    }

    public function startEngine()
    {
        while (true) {
            foreach ($this->cylindersArray as $value) {
                $value->executeFirstStep();
            }
            foreach ($this->cylindersArray as $value) {
                $value->executeSecondStep();
            }
            foreach ($this->cylindersArray as $value) {
                $value->executeThirdStep();
            }
            foreach ($this->cylindersArray as $value) {
                $value->executeFourthStep();
            }
        }
    }
}
