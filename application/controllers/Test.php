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

      //los métodos de aca en adelante deben moverse a directorio models pues se debe respetar el modelo MVC
      public function insertdata(){
        $data = array(
          'roll_no' => '3',
          'name' => 'test3'
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

      public function updatedata(){
        $data = array(
          'roll_no' => 1,
          'name' => 'Updated value3'
        );
        $this->db->set($data)
        ->where('roll_no', '1')
        ->update('stud', $data);
        //$this->db->where('roll_no', '1');
        //$this->db->update('stud', $data);
      }

      public function deletedata(){
        echo $this->db->delete('stud', 'roll_no = 1');
      }

      public function getdata(){
        $data = $this->db->get('stud');
        foreach($data->result() as $row ){
          echo $row->name;
        }
      }
   } 
?>
