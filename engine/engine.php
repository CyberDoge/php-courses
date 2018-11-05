<?php
class Engine
{
    private $cylindersArray;

    function __construct()
    {
        $this->cylindersArray = array(4);
        for ($i = 0; $i < 4; $i++) {
            $this->cylindersArray[$i] = new Cylinder($i);
        }

    }

    function startEngine()
    {
        $this->cylindersArray[0] -> executeFirstStep();
        $this->cylindersArray[1] -> executeSecondStep();
        $this->cylindersArray[2] -> executeThirdStep();
        $this->cylindersArray[3] -> executeFourthStep();
    }
}
