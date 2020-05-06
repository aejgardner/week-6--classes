<?php

// Create a class that lets you do things with a string.

// Hint: you might want to look at the PHP string functions

declare(strict_types=1);

class Stringy 
{
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function lower() 
    {
        return strtolower($this->string);
    }

    public function upper() 
    {
        return strtoupper($this->string);
    }

    public function append(string $str) 
    {
        return $this->string . $str;
    }

    public function repeat(int $multiplier) : string
    {
        return str_repeat($this->string, $multiplier); 
    }
}

$string = new Stringy("Na");

// it can lowercase a string
var_dump($string->lower()); // string(2) "na"

// it can uppercase a string
var_dump($string->upper()); // string(2) "NA"

// it can concatenate
var_dump($string->append("blah")); // string(6) "Nablah"

// it can repeat a string
var_dump($string->repeat(5)); // string(10) "NaNaNaNaNa"