<?php
//includes db connection from 2 folders back
include '../../php/db-connection.php';

function dateTimeConvertion($date)
{
    return date('M d, Y, h:i A', strtotime($date));
}