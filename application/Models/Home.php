<?php

class Home extends ActiveRecord\Model{
   # explicit table name since our table is not "books" 
   static $table_name = 'cuentas';
 
   # explicit pk since our pk is not "id" 
   static $primary_key = 'id';
 
   # explicit connection name since we always want our test db with this model
   static $connection = 'development';
}

?>