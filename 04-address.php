<?php

// Create a class that represents an address - use different properties for each part of the address. It should have a fullAddress method, which will return the full address as a nicely formatted string.

// Hint: PHP has an implode() function, which is similar to join() in JS

declare(strict_types=1);

class Address 
{
    private $street;
    private $postcode;
    private $town;

    public function __construct(string $street, string $postcode, string $town) 
    {
        $this->street = $street;
        $this->postcode = $postcode;
        $this->town = $town;
    }

    public function fullAddress() : string
    {
        $parts = [
            $this->street,
            $this->postcode,
            $this->town
        ];
        return implode(', ', $parts);
    }

    public function setStreet(string $street) 
    {
        $this->street = $street;
        return $this;
    }

    public function setPostcode(string $postcode) 
    {
        $this->postcode = $postcode;
        return $this;
    }

    public function setTown(string $town) 
    {
        $this->town = $town;
        return $this;
    }
}

$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

// logs the full address neatly
var_dump($address->fullAddress()); // string(34) "1 Made Up Street, Bristol, BS4 8TR"

// can update the street, postcode, and town
// using chaining
$address->setStreet("12 Cantelope Way")
        ->setPostcode("SW5 8RQ")
        ->setTown("Swansea");

// logs the new full address neatly
var_dump($address->fullAddress()); // string(34) "12 Cantelope Way, SW5 8RQ, Swansea"