<?php
/*

I have this multidimensional array:

$data = array(
    'user' => array(
        'email'   => 'user@example.com',
        'name'    => 'Super User',
        'address' => array(
            'billing' => 'Street 1',
            'delivery' => 'Street 2'
        )
    ),
    'post' => 'Hello, World!'
);
I want it flatten, transformed into:

$data = array(
    'user.email' => 'user@example.com',
    'user.name'  => 'Super User',
    'user.address.billing'  => 'Street 1',
    'user.address.delivery' => 'Street 2',
    'post'       => 'Hello, World!'
);

*/

$array = array(
    'user' => array(
        'email'   => 'user@example.com',
        'name'    => 'Super User',
        'address' => array(
            'billing' => 'Street 1',
            'delivery' => 'Street 2'
        )
    ),
    'post' => 'Hello, World!'
);

function flattenArray($array, $prefix = '') {

	$result = [];

	foreach ($array as $key => $value) {

		if (is_array($value)) {

			$result += flattenArray($value, $prefix . $key . '.');
		
		} else {

			$result[$prefix . $key] = $value;
		
		}

	}

	return $result;
 
}	

var_dump(flattenArray($array));
/*
(array) [5 elements]
user.email: (string) user@example.com
user.name: (string) Super User
user.address.billing: (string) Street 1
user.address.delivery: (string) Street 2
post: (string) Hello, World!
*/

//Success	#stdin #stdout 0.02s 23812KB