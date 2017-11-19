<?php 
class Security_model extends CI_Model{
    public function is_logged_in(){
        if($this->session->userdata('logined'))
        {
            return true;
        }
        else
        {
            redirect('Home');
       }
      }
    }
?>