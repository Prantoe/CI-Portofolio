<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Front_M");
        $this->load->helper('download');	
    }

    public function index()
    {
        
        $data["design"] = $this->Front_M->getDesignForHome();
        $this->load->view("front/overview_front",$data);
        
    }




    
    public function download(){				
		force_download('/opt/lampp/htdocs/portofolio/assets/front/img/cvpranto.pdf',NULL);
	}	
}