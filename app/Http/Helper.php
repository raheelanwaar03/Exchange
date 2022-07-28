<?php

// generating 6 digit unique transaction id

function transcation_id()
{
    $transcation_id = rand(100000,999999);
    $transcation_id = str_pad($transcation_id,6,'0',STR_PAD_LEFT);
    return $transcation_id;
}
