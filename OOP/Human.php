<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$count=0;
class A
{
    //instance attribute
    
    function __construct()
    {
        $count+=1;
    }
}
$obj1=new A();//count=0
$obj2=new A();//count=0
// class A
// {
//     // private $att21,$attr2;
//     // function __set($attrname,$newvalue)
//     // {
//     //     // $attrname=attr1,attr2
//     //     if($attrname=='attr1')
//     //     {
//     //         if($newvalue!=NULL)
//     //         $this->$attrname=newvalue;
//     //     else
//     //         echo 'attribute must have value';
//     //     }
        
//     // }
//     // function __get($attrname)
//     // {
//     //     return $this->$attrname;
//     // }
//     // // function getattr1()
//     // // {return $this->attr1;}
//     // // function getattr()
//     // {return $this->attr1;}
//     // // function __construct($attr1)
//     // {

//     //     $this->att1=$attr1;
//     //     echo 'class A constr<br>';}
//     function oper1()
//     {
//         echo 'operation 1 in classs A<br>';
//     }
// }
// // class B extends A
// // {
// //     // function __construct($a2,$a1=0)
// //     // {
// //     //     $this->att2=$a2;
// //     //     A::__construct($a1);
// //     //     echo 'class B constr<br>';}
 
// //         public $att2;
// //     function oper2()
// //     {
// //         echo 'operation 2 in classs B';
// //     }  
// // }
// // $ob1=new A();//call construct A
// // $ob1->__set('attr1',10);
// // $ob1->__set('attr2','');
// // // $ob1->att1=10;
// // // echo $ob1->att1;
// // // $ob1->oper1();
// // // $bob=new B(1,3);//call constr B (not found)
// // // $bob=new B(1);
// // // var_dump($ob1);
// // // var_dump($bob);
// // // // $bob->att1=10;
// // // // $bob->att2=10;
// // // echo $bob->att1,' ===>'.$bob->att2;
// //  // class Human
// // // {
// // //     private $id;

// //     function __get($name)
// //     {return $this->id;}
// //     function __set($name,$newvalue)
// //     {
// //         var_dump($this);
// //         $this->id=$newvalue;
// //     }
// // }
// // $obj1=new Human();
// // $obj1->__set('id',10);
// // echo $obj1->__get('id');
//     // class Human
// // {

// //     private $id;
        
// //     function __construct()
// //     {
// //         echo 'iam human construct';
// //     }
// //     function test()
//     {
//         $this->id=10;
//         echo $this->id;
//     }
// }


// $obj1=new Human();
// $obj1->id=1;
// echo $obj1->id;



// $obj1->$name='aya';
// var_dump($obj1);
// $obj1=new Human();
// var_dump($obj1);
?>