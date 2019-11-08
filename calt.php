<?php 
   session_start();

   class calculator{
      public $num1;
      public $num2;
      public $cal;

      function __construct($num1, $num2, $cal) {      
         $this->num1 = $num1;
         $this->num2 = $num2;
         $this->cal  = $cal;
      }

      function calMethod(){
         switch ($this->cal) {
            case 'add':
               $result=$this->num1 + $this->num2;
               break;
            
            case 'sub':
               $result=$this->num1 - $this->num2;
               break;

            case 'mul':
               $result=$this->num1 * $this->num2;
               break;
   
            case 'div':
               if (!$this->num2=='0') {
                  $result=$this->num1 / $this->num2;      
               }else{
                  $result ='2nd field will > zero(0)';
               }               
               break;

            default:
               $result='Error';
               break;
         }
         return $result;
      }
   }

   $num1=$_POST['num1'];
   $num2=$_POST['num2'];
   $cal=$_POST['option'];

   $calculator =new calculator($num1, $num2, $cal); 

   $_SESSION['result'] = $calculator->calMethod();
   header('Location: index.php');

 ?>