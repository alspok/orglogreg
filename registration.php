<?php

require('mysqliconn.php');
$regData = $_POST;
$tblName = 'tbl_reg';

if(regValidation($regData)){
    insertDB($regData, $tblName);
}

//Function block
function regValidation($regData)
{
    if(isset($regData['reg-user']) && isset($regData['reg-email']) && isset($regData['reg-password']) && isset($regData['reg-org']) && isset($regData['submit'])){
        return TRUE;
        } 
        else echo 'Enter all registration fields please.';
}



