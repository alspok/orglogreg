<?php

$regData = $_POST;

function registrationValidation($regData)
{
    if(isset($regData['reg-user'] && isset($regData['reg-email']) &&
       isset($regData['reg-password']) && isset($regData['reg-org']) && isset($regData['submit'])){
        
       } 
       else echo 'Please enter all fields.'

}

