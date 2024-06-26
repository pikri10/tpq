<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){
		if($this->session->userdata('email')){
			redirect(('dashboard'));
		}
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Yayasan Sabilul Huda | Login';
            $this->load->view('admin/login_header', $data);
            $this->load->view('login');
            $this->load->view('admin/login_footer');
        }else{
            //validasi success
            $this->_login();
        }
	}

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

		if($user){
			if($user['is_active'] == 1){
				if(password_verify($password, $user['password'])){
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('dashboard');
					}else{
						redirect('dashboard');
					}
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
			redirect('login');
				}
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not activated!</div>');
			redirect('login');
			}

		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
			redirect('login');
		}
    }


	public function register(){
		if($this->session->userdata('email')){
			redirect(('siswa'));
		}
		
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]', [
			'matches' => "Password doesn't match!",
			'min_length' => "Password too short!"
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		

		if ($this->form_validation->run() == false) {
			$data['title'] = 'User Registration';
			$this->load->view('admin/login_header', $data);
			$this->load->view('register');
			$this->load->view('admin/login_footer');
		}
		else{
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()
			];

			$this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulations! Your account has been created.</div>');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
		redirect('login');
	}
	public function blocked()
	{
		$this->load->view('blocked');
	}
}
