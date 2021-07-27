<?php

namespace App\Controllers;

class Page extends BaseController
{
	function index(){
        //Allowing akses to admin only
          if($this->session->userdata('level')==='prodi'){
              $this->load->view('layout');
          }else{
              echo "Access Denied";
          }
    
      }
    
      function staff(){
        //Allowing akses to staff only
        if($this->session->userdata('level')==='unit'){
          $this->load->view('dashboard_view');
        }else{
            echo "Access Denied";
        }
      }
    
      function author(){
        //Allowing akses to author only
        if($this->session->userdata('level')==='admin'){
          $this->load->view('dashboard_view');
        }else{
            echo "Access Denied";
        }
      }
}
