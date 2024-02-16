<?php

add_action('hook_name', 'function_name');
add_filter('filter_name', 'function_name_1');

$name = "Aleksandar";
$number = 5;
$number2 = 10;
$students = array(
    'name1' => 'Aleksandar',
    'name2' => 'Ilija',
    'name3' => 'Ruzica'
);

$studentNumber = 12262;

if( $number > $number2 ):
    echo $number . ' is bigger than' . $number2;
else:
    echo $number . ' is smaller than ' . $number2;

endif;

echo '<br/><br/>';

foreach( $students as $key => $students ):
    echo $students . ' ';
endforeach;