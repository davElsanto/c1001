<?php 
   class Test extends CI_Controller {
  
      public function index() { 
         echo "Hello World!"; 
      }
      public function hellow(){
        echo "test en hellow";
      }

      public function viewtest(){
        $this->load->view('viewtest');
      }
   } 
?>
