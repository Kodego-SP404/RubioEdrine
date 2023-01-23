<?php
//  ------------------------ Arrays ------------------------
/* 
Array hold multiple values. Each value in an array is called "element"; 
 */
//Simple array of numbers
$numbers = [1,2,3,4,5];
$fruits = ['apple','orange','banana'];

// echo $numbers[0];
// var_dump($numbers);
// echo $fruits[1];
// echo $numbers[2] + $numbers[3];

//Associative Arrays
/* 
Associative arrays allows us to use keys to identify values
 */
// $colors = [
//     1=> 'red',
//     2 => 'green',
//     3 => 'blue',
//     4 => 'yellow',
// ];

// echo $colors[4];

// Strings as keys
// $hex = [
//     'red' => '#f00',
//     'green' => '#0f0',
//     'blue' => '#00f',
// ];

// // echo $hex['red'];
// var_dump($hex);

/* 
Multi-dimensional arrays are often used to store data in a table format.
 */

 // Single Person
 $person = [
    'first_name' => 'Edrine',
    'last_name' => 'Rubio',
    'email' => 'erubio@gmail.com'
 ];

//  echo $person['first_name'];

 //Multi-dimentional array
 $people = [
    [
    'first_name' => 'Edrine',
    'last_name' => 'Rubio',
    'email' => 'erubio@gmail.com'
    ],
    [
        'first_name' => 'Juan',
        'last_name' => 'Dela Cruz',
        'email' => 'jdelacruz@gmail.com'
        ],
        [
            'first_name' => 'Maria',
            'last_name' => 'Clara',
            'email' => 'mclara@gmail.com'
            ],
 ];

// echo $people[2]['last_name'];

//Encode to JSON
// var_dump(json_encode($people));

//Decode to JSON
$jsonobj = '{"first_name":"Edrine","last_name":"Rubio","email":"erubio@gmail.com"}';
var_dump(json_decode($jsonobj));