<?php

class db_object{
    protected static $table_name="user";
public static function get_all($condtion) {
    if($condtion===0){
        return static:: query_process("SELECT * from ".static::$table_name." ");}
    else{
        return static:: query_process("SELECT * from ".static::$table_name." where $condtion" );
    }} 
        
public static function get_all_by_id($condition) {
   $single_user_data= static:: query_process("SELECT * from ".static::$table_name." where $condition LIMIT 1");
   return !empty($single_user_data)?array_shift($single_user_data):false;}
      
public static function query_process($sql) {
    global $database;
    $result= $database->query($sql);
    $all_data_in_database=array();
    while ($row=mysqli_fetch_array($result)) {
    $all_data_in_database[]=static::instant($row);}
   return $all_data_in_database;}  
   
public static function instant($columns){
   $userclass=new static;
   foreach ($columns as $property => $value) {
    if($userclass->has_property($property)){
        $userclass->$property=$value;
        }
    }
    return $userclass;}

       
public function properties(){
     $pro=array();
     global $database;
     foreach(static::$columns as $column){
         if(property_exists($this,$column)){
             $pro[$column]="'". $database->secure($this->$column) ."'";
        }
    }
  
    return $pro ;
 } 
    

private function has_property($property){
     $class_property=get_object_vars($this);
     return array_key_exists($property,$class_property);}          


public function create(){
   $prop=$this->properties();
    global $database;
    $execute=$database->query("INSERT INTO ".static::$table_name."(".implode(",",array_keys($prop)).") VALUES (".implode(",",array_values($prop)).")");
    if($execute){return true;}
    else{return false;}
}

public function update(){
    $pro= $this->properties();
    global $database;
    $property_update=array();
    foreach ($pro as $key => $value) {
        $property_update[]="{$key}={$value}";
    }
    $id=$database->secure($this->id);
    $execute=$database->query("UPDATE ".static::$table_name." SET ".implode(",",$property_update)." WHERE id='$id' ");
    if($execute){return true;}
    else{return false;}
 }
public function delete($condition){
    global $database;
    // $id=$database->secure($this->id);
    $execute=$database->query("DELETE FROM ".static::$table_name." WHERE $condition");
    if($execute){return true;}
    else{return false;}
 }


 
 
 
 
}



?>