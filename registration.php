<?php

require('mysqliconn.php');
$regData = $_POST;
$tblName = 'tbl_reg';

if(regValidation($regData)){
    insertDB($regData);
}

//Function block
function regValidation($regData)
{
    if(isset($regData['reg-user']) && isset($regData['reg-email']) && isset($regData['reg-password']) && isset($regData['reg-org']) && isset($regData['submit'])){
        return TRUE;
        } 
        else echo 'Enter all fields please.';
}

function insertDB($regData)
{
    $conn = mySqliConnection();
    $queryString = 'INSERT INTO  ' . $tblName . ' (user, email, password, org) VALUES (????)';
    $stmt = $conn->prepare($queryString);
    $stmt->bind_param('ssss', $regData['reg-user'], $regData['reg-email'], $regData['reg-password'], $regData['reg-org']);
    $stmt->execute();
    $stmt->close();
}



