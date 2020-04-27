<?php

function error_handler($code, $message, $file, $name)
{
    echo json_encode(array(
        "code"      => $code,
        "message"   => $message, 
        "file"      => $file,
        "name"      => $name
    ));
}

set_error_handler("error_handler");

echo 100/0;