<?php

// Create a class that represents a light switch

declare(strict_types=1);

class LightSwitch
{
    private $isOn = false;

    public function isOn() 
    {
        return $this->isOn;
    }

    public function turnOn() 
    {
        $this->isOn = true;
        return $this;
    }

    public function turnOff() 
    {
        $this->isOn = false;
        return $this;
    }
}

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
var_dump($lightSwitch->isOn()); // bool(false)

// you can turn it on
$lightSwitch->turnOn();
var_dump($lightSwitch->isOn()); // bool(true)

// you can turn it off
$lightSwitch->turnOff();
var_dump($lightSwitch->isOn()); // bool(false)