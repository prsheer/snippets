<?php

/*

Convert this:

	$string = "@[item_1][door] @[mozart][grass] = yes @[mozart][green] = no @[mozart][human] @[blue][movie]=yes @[item_1][beat] = yes @[item_1][music] = no ";

to this:


Array
(
    [item_1] => Array
        (
            [door] => Array
                (
                    [mozart] => Array
                        (
                            [grass] => yes
                            [green] => no
                            [human] => Array
                                (
                                    [blue] => Array
                                        (
                                            [movie] => yes
                                        )
                                )
                        )
                )
            [beat] => yes
            [music] => no
        )
)

*/


//FIRST WE GET THE STRING INTO EASIER TO WORK WITH CHUNKS
$original_string = "@[item_1][door] @[mozart][grass] = yes @[mozart][green] = no @[mozart][human] @[blue][movie]=yes @[item_1][beat] = yes @[item_1][music] = no ";
$cleaned_string = str_replace('] @[','][',$original_string);
/* This results in clusters of keys that equal a value:
@[item_1][door][mozart][grass] = yes @[mozart][green] = no @[mozart][human][blue][movie]=yes @[item_1][beat] = yes @[item_1][music] = no 

OR (with line breaks for clarity):

@[item_1][door][mozart][grass] = yes 
@[mozart][green] = no 
@[mozart][human][blue][movie]=yes 
@[item_1][beat] = yes 
@[item_1][music] = no */

//break it up into an array:
$elements = explode('@',$cleaned_string);

//create a variable to compare the last string to
$last_keys = "";
//and another that will serve as our final array
$array_of_arrays = array();
//now loop through each [item_1][door][mozart][grass] = yes,[mozart][green] = no, etc
foreach($elements as $element){
    if ($element==""){continue;} //skip the first empty item

    //break the string into [0] = group of keys and [1] the value that terminates the string 
    //so [item_1][door][mozart][grass] = yes BECOMES [item_1][door][mozart][grass], AND yes
    $pieces = explode('=',str_replace(array('[',']'),array("['","']"),trim($element))); 
    //now compare this set of keys to the last set of keys, and if they overlap merge them into a single key string
    $clean_keys = combine_key_strings($pieces[0],$last_keys);
    //set the new key string the value for the next comparison
    $last_keys = $clean_keys;
    //and (ugly, I know) we use an eval to convert "[item_1][door][mozart][grass]='yes'" into a properly keyed array
    eval("\$array_of_arrays".$clean_keys." = '".trim($pieces[1])."';");
}

//now dump the contents
var_dump($array_of_arrays);


//THIS FUNCTION COMPA
function combine_key_strings($new,$old){
    //get the key that starts the newer string
    $new_keys = explode('][',$new);
    $first_key = $new_keys[0].']';

    //see if it appears in the last string
    $last_occurance = strrpos ($old,$first_key);
    //if so, merge the two strings to create the full array keystring
    if (is_int($last_occurance)){
        return substr($old,0,$last_occurance).$new;
    }
    return $new;
}