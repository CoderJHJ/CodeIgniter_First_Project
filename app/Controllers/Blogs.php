<?php

namespace App\Controllers;

class Blogs extends BaseController
{
public function  index()

{
    $parser = service('parser');
    $data = [
        'name'=>"jahid hossain jewel",
        'desc'=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, nihil"
    ];
    $parser->setData($data);
    return $parser-> render('BlogView');
   //echo view('inc/header',$data);
   //echo view('BlogView',$data);
   //echo view('inc/footer');
   //jokhon parser call kora hoy thokn uporer code gulo lage na
   //retur echo same kotha
   //array k loop er maddome receive korte hoy
   //codigniter a error thake writable folder er logs a 
}
public function  abc()
{
    echo"This our First controller";
}

}



?>