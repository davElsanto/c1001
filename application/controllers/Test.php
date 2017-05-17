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

      public function insertdata(){
        $data = array(
          'roll_no' => '1',
          'name' => 'test1'
        );
        $this->db->insert('stud', $data);
      }

      public function insertdata2(){
        $this->load->database();
         $data = array(
          'roll_no' => '2',
          'name' => 'test2'
        );
        echo $this->db->insert('stud', $data);
        echo $this->db->close();
      }
   } 
?>
