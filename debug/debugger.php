<?php

function printInfo($message)
{
    file_put_contents(__DIR__.'/debugger.log',$message);
}