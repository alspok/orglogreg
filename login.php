<?php

require('mysqliconn.php');
$logData = $_POST;
$tblName = 'tbl_log';

if(logValidation($logData)){
    logDB($logData, $tblName);
}

//Function block
function logValidation($logData)
{
    if(isset($logData['log-user']) && isset($logData['log-email']) && isset($logData['log-password']) &&  isset($regData['submit'])){
        return TRUE;
    }
    else echo 'Enter all log fields please.';
}