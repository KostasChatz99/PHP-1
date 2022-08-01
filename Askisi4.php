<?php

$person = [ 
    'age' => 23,
    'hair' => 'brown',
    'career' => 'web developer'
] ;

$person['name'] = 'Kostas';

unset($person['age']);

require 'Askisi4.view.php';