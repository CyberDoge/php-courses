<?php
class Engine{
    private $cylindersArray;
    public function __construct(array $cylindersArray)
    {
        $this->cylindersArray=$cylindersArray;
    }

    public function executeFirstTact(Driver $driver)
    {
        $driver.execute();
    }
}