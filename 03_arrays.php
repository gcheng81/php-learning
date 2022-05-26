<?php

$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 'pear');

//var_dump($numbers);
//echo $fruits[1];

// associate arrays
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

//echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '0f0',
    'green' => '#00f'
];
//echo $hex['blue'];

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'aa@gmail.com'
];

// echo $person['first_name'];

$people = [
    ['first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'aa@gmail.com'],
    ['first_name' => 'John',
    'last_name' => 'Do',
    'email' => 'jj@gmail.com']

];

//echo $people[1]['first_name'];
var_dump(json_encode(($people)));