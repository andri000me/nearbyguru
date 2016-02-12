<?php

Class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        //buat include template
        $this->load->view('include/header');
        $this->load->view('admin-dashboard');
        $this->load->view('include/footer');
        //--------------------------------------------
    }

}

?>
