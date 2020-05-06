<?php

// Create a class that validates emails and postcodes.

declare(strict_types=1);

class Validator 
{
    public function email(string $str) : bool
    {
        preg_replace('/(^\s)|(\s$)/', "", $str);
        return filter_var($str, FILTER_VALIDATE_EMAIL) === $str;
    }

    public function postcode(string $str)
    {
        return preg_match('/^[a-z]{1,2}\d[a-z0-9]?\s\d[a-z]{2}$/i', $str) === 1; // group is only useful if you are looking for multiple things i.e. multiple letters 
    }
}

$validator = new Validator();

// it validates email addresses
echo "Email\n";
var_dump($validator->email("alfonso@example.com")); // bool(true)
var_dump($validator->email("wombat+12@spoons.plumbing")); // bool(true)
var_dump($validator->email("blah blah blah! alfonso@example.com")); // bool(false)
var_dump($validator->email("wombat@spoonsplumbing")); // bool(false)
var_dump($validator->email("wombatspoons")); // bool(false)
var_dump($validator->email("@wombatspoons")); // bool(false)

// it validates postcodes
echo "\nPostcode\n";
var_dump($validator->postcode("BS4 3UH")); // bool(true)
var_dump($validator->postcode("S10 4GR")); // bool(true)
var_dump($validator->postcode("BS14 9DI")); // bool(true)
var_dump($validator->postcode("SW1A 1AA")); // bool(true)
var_dump($validator->postcode("12B DI9")); // bool(false)
var_dump($validator->postcode("EST4 DD29")); // bool(false)
var_dump($validator->postcode("blah blah BS5 8RJ blah blah")); // bool(false)
// You might want to use Regexr to test any regexes. Make sure you set it to use the PCRE engine.

// Here's the list of postcode test data:

// BS4 3UH
// S10 4GR
// BS14 9DI
// SW1A 1AA
// 12B DI9
// EST4 DD29
// blah blah BS5 8RJ blah blah