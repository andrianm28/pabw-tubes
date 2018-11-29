<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    function __construct()
    {
        parent::__construct();
        $this->load->model('Register_model');
        $this->load->helper('url');

    }
    function index()
    {
        $data['user'] = $this->Register_model->tampil_data()->result();
        $this->load->view('register', $data);
    }

    public function view($page = 'register')
    {
        if (!file_exists(APPPATH . "views/" . $page . '.php')) {
			# code...
            show_404();
        }

        $data['judul'] = $page;
        $this->load->view('header', $data);
        $this->load->view($page);
        $this->load->view('footer');
    }

    function tambah()
    {
        $this->load->view('register');
    }

    function tambah_aksi()
    {
        $username = $this->input->post('username');
        $email_user = $this->input->post('email_user');
        $password_user = $this->input->post('password_user');

        $data = array(
            'username' => $username,
            'email' => $email_user,
            'password' => md5($password_user)
        );
        $this->Register_model->input_data($data, 'tbl_users');
        redirect('');
    }
}
