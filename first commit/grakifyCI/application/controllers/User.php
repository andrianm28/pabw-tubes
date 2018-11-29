<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');

	}
	public function index()
	{
        $data['user'] = $this->user_model->get_user();
        $data['tittle'] = 'Data User';
        $this->load->view('templates/header',$data);
        $this->load->view('user/index',$data);
		$this->load->view('templates/footer',$data);
    }
    public function view()
	{
        $data['user'] = $this->user_model->get_user();
        $data['tittle'] = 'Data User';
        $this->load->view('templates/header',$data);
        $this->load->view('user/index',$data);
		$this->load->view('templates/footer',$data);
    }
}
