<?php
require 'connection.php';
class Contacts extends illuminate\Database\Eloquent\Model {
    public $timestamps = false;
}

/* 
#Getting All Contacts
#Retrieving All Models
$contacts=Contacts::all();
var_dump($contacts);
*/


/*
#Find Single row with id
#Retrieving A Record By Primary Key

$contacts=Contacts::find(38);
//var_dump($contacts);
*/

