<?php

// Create a class that represents a phone

declare(strict_types=1);

// ... your class here

// create three phones
$iPhone = new Phone("Apple", "iPhone XS");
$galaxy = new Phone("Samsung", "Galaxy");
$retro = new Phone("Nokia", "3210");

// use methods to find out model/make
var_dump($iPhone->model()); // string(9) "iPhone XS"
var_dump($retro->make()); // string(5) "Nokia"
var_dump($galaxy->make()); // string(7) "Samsung"
var_dump($iPhone->make()); // string(5) "Apple"