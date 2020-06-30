<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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
        $this->load->model('Login_model');

    }
    public function index()
    {
        $this->load->view('index');
    }
    public function view($page = 'login')
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
    function aksi_login()
    {
        $email = $this->input->post('email_user');
        $password = $this->input->post('password_user');
        $where = array(
            'email' => $email,
            'password' => md5($password)
        );
        $cek = $this->Login_model->cek_login("user", $where)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'nama' => $email,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url(""));

        } else {
            echo "Username dan password salah !";
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}