<?php

/*

    * ERRORS
        * Unexpected result that can't be handled by the program itself
    
    * I.E : Infinite Loop : Fight the computer for control
        * Failure imminent, take brick, git commit, git push
            * brick the pc
    * Handle errors (custom)
*/

// * using if statements

/*

    * You can use a custom function which is called 
    * each time an error happens in your code

*/

function custom_error($error_no, $error_msg)
{
    echo 'Something went wrong <br>';
    echo 'Error code : ' . $error_no . '<br>';
    echo 'Error message : ' . $error_msg . '<br>';
}

set_error_handler('custom_error');
$nb = 0;
echo 15 / $nb;
