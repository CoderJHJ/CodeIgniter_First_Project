<?php
namespace App\Controllers;
class Mycon extends BaseController{

public function index()
{
    echo "My first controller";
}
public function test()
{
     echo 'Test Function';
}
public function _remap($method)
{
   if(method_exists($this,$method)){
       return $this->$method();
   }
   else{
       echo view("error");
   }

}








}




?>