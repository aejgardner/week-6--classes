<?php

// Create a class that performs a series of transformations on a string. You can use the get() method to get the final result.

declare(strict_types=1);

class StringyRedux
{
    private $string;

    public function __construct(string $str)
    {
        $this->string = $str;
    }

    public function lower() 
    {
        $this->string = strtolower($this->string);
        return $this;
    }

    public function upper() 
    {
        $this->string = strtoupper($this->string);
        return $this;
    }

    public function append(string $str) 
    {
        $this->string .= $str;
        return $this;
    }

    public function repeat(int $multiplier)
    {
        $this->string = str_repeat($this->string, $multiplier); 
        return $this;
    }

    public function get() 
    {
        return $this->string;
    }
}

$string1 = new StringyRedux("Oop");
var_dump($string1->lower()->repeat(2)->get()); // string(6) "oopoop"

$string2 = new StringyRedux("Spoon");
var_dump($string2->repeat(2)->upper()->append("!")->get()); // string(11) "SPOONSPOON!"

$string3 = new StringyRedux("Na");
var_dump($string3->repeat(2)->append(" ")->repeat(8)->append(" ")->append("Batman!")->get()); // string(48) "NaNa NaNa NaNa NaNa NaNa NaNa NaNa NaNa  Batman!"