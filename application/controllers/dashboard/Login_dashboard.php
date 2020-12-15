<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
        $this->load->model('main_model');
	}

	function index()
	{
		$this->load->view('dashboard/login');
	}

    function register()
    {
        $this->load->view('dashboard/register');
    }
    
    function forgotpassword()
    {
        $this->load->view('dashboard/forgot_password');
    }

    function send_register(){
        $this->form_validation->set_rules('inputNama','input Nama Lengkap', 'required');
        $this->form_validation->set_rules('inputUsername','input Username', 'required');
        $this->form_validation->set_rules('inputEmail', 'input Email', 'valid_email|required');
        $this->form_validation->set_rules('inputTelepon','input Telepon', 'required');
        $this->form_validation->set_rules('inputPassword', 'input Password', 'required|min_length[7]|max_length[30]');
        $this->form_validation->set_rules('confirmPassword', 'confirm Password', 'required|matches[inputPassword]');
 
        if ($this->form_validation->run() == FALSE) { 
            echo '<script language="javascript">alert("Akun tidak dapat di daftarkan"); document.location="register";</script>';
        }
        else{
            //get user inputs
            $inputNama = $this->input->post('inputNama');
            $inputTelepon = $this->input->post('inputTelepon');
            $inputUsername = $this->input->post('inputUsername');
            $inputEmail = $this->input->post('inputEmail');
            $inputPassword = $this->input->post('inputPassword');
            $password = md5($inputPassword);
            
            $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code = substr(str_shuffle($set), 0, 12);

            $setuju = $this->input->post('setuju');
            if($setuju == "setuju"){
                $cekdata = $this->login_model->select_login($inputEmail,$inputUsername);
                if($cekdata->num_rows() <= 0){
              //       $this->load->library('email');
        		    // $config = array();
        		    // $config['charset'] = 'utf-8';
        		    // $config['useragent'] = 'Codeigniter';
        		    // $config['protocol']= "smtp";
        		    // $config['mailtype']= "html";
        		    // $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
        		    // $config['smtp_port']= "465";
        		    // $config['smtp_timeout']= "400";
        		    // $config['smtp_user']= "training.management.systems.uthm@gmail.com"; // isi dengan email kamu
        		    // $config['smtp_pass']= "tmsuthmprakteklapang"; // isi dengan password kamu
        		    // $config['crlf']="\r\n"; 
        		    // $config['newline']="\r\n"; 
        		    // $config['wordwrap'] = TRUE;
        		    
        		    // $this->email->initialize($config);
        		    // $this->email->from($config['smtp_user']);
        		    // $this->email->to($inputEmail);
        		    // $this->email->subject("Verified Account");
        		    // $this->email->message(
        		    //     "<b><h2>Identity</h2></b><br>
        		    //     ==============================================<br>
        		    //     Nama Lengkap : $name<br>
        		    //     Email : $inputEmail<br>
        		    //     Username : $inputUsername<br>
        		    //     Kata Sandi : $inputPassword<br>
        		    //     Kode Verifikasi : $code<br>
        		    //     Terimakasih, Anda telah mendaftarkan diri anda di web ini, silahkan klik link di bawah ini untuk verifikasi akun.<br><br>".
        		    //     site_url("verifiedadmin/$code")
        		    // );
        		  
        		    // if($this->email->send())
        		    // {
        		        $dashboard['nama'] = $inputNama;
                        $dashboard['email'] = $inputEmail;
                        $dashboard['telp'] = $inputTelepon;
                        $dashboard['username'] = $inputUsername;
                        $dashboard['password'] = $password;
                        $dashboard['password'] = $password;
                        $dashboard['level'] = "3";
                        $dashboard['code'] = $code;
                        $dashboard['status'] = "1";
                        $success = $this->login_model->insert($dashboard);
        		        if($success){
                            echo '<script language="javascript">alert("Akun sudah didaftarkan !!!"); document.location="login";</script>';
                        }else{
                            echo '<script language="javascript">alert("Akun tidak dapat didaftarkan, cek lagi data anda !!!"); document.location="register";</script>';
                        }
                    // }else{
                    //     echo '<script language="javascript">alert("Akun tidak dapat didaftarkan, cek lagi data anda !!!"); document.location="register";</script>';
                    // }
    		    }else{
    		        echo '<script language="javascript">alert("Akun tidak dapat didaftarkan, cek lagi data anda !!!"); document.location="register";</script>';
    		    }
            }else{
                echo '<script language="javascript">alert("Akun tidak dapat didaftarkan, cek lagi data anda !!!"); document.location="register";</script>';
            }    
        }
    }

	function auth(){
        $inputEmailUsername=htmlspecialchars($this->input->post('inputEmailUsername',TRUE),ENT_QUOTES);
        $inputPassword=htmlspecialchars($this->input->post('inputPassword',TRUE),ENT_QUOTES);
        $cekauth=$this->login_model->auth($inputEmailUsername,$inputPassword);
        if($cekauth->num_rows() > 0){
        	$data=$cekauth->row_array();
        	$this->session->set_userdata('masuk',TRUE);
            $this->session->set_userdata('ses_idadmin',$data['id_admin']);
        	$this->session->set_userdata('ses_name',$data['nama']);
            $this->session->set_userdata('ses_username',$data['username']);
            $this->session->set_userdata('ses_email',$data['email']);
            echo '<script language="javascript">alert("Selamat Datang '.$data['nama'].' di Panel Administrator"); document.location="dashboard";</script>';
        }else{
			echo $this->session->set_flashdata('msg','Username Atau Password Salah');
			// redirect('login');
			echo '<script language="javascript">alert("Tidak bisa masuk Panel Administrator, mungkin ada kesalahan saat menginput data !!!"); document.location="login";</script>';
        }
    }

    function logout(){
        $this->session->sess_destroy();
        // redirect('loginadmin');
        echo '<script language="javascript">alert("Selamat Tinggal, Anda sudah keluar dari Panel Administrator !!!"); document.location="login";</script>';
    }
    
    function verifieddashboard()
    {
        $code = $this->uri->segment(2);
        $verified['status'] = "active";
        $success = $this->main_model->update_verifiedaccount_dashboard($verified,$code);
        if($success){
            echo '<script language="javascript">alert("Akun anda berhasil di verifikasi silahkan login kembali, Terimakasih !!!"); document.location="../login";</script>';
        }else{
            echo '<script language="javascript">alert("Akun anda gagal di verifikasi silahkan daftar kembali, Terimakasih !!!"); document.location="../register";</script>';
        }
    }
    
    function formforgotpass(){
        $this->form_validation->set_rules('inputEmailUsername', 'input Email / Username', 'required');
 
        if ($this->form_validation->run() == FALSE) { 
            echo '<script language="javascript">alert("Email / Username salah, coba cek data anda !!!"); document.location="forgotpassword";</script>';
        }
        else{
            //get user inputs
            $inputEmailUsername = $this->input->post('inputEmailUsername');

            $cek_dashboard = $this->db->query("SELECT * FROM tbl_admin WHERE email='$inputEmailUsername' OR username='$inputEmailUsername'");
            $admin = $cek_dashboard->result();
            foreach ($admin as $hasil) {
                $id_admin = $hasil->id_admin;
            }
            $password = md5('12345678');
			if($cek_dashboard->num_rows() >= 1){
                $dashboard['password'] = $password;
                $success = $this->login_model->update($dashboard,$id_admin);
                if($success){
		          echo '<script language="javascript">alert("Kata sandi berhasil di reset menjadi 12345678 !!!"); document.location="login";</script>';
    		    }else{
    		        echo '<script language="javascript">alert("Kata sandi gagal di reset !!!"); document.location="forgotpassword";</script>';
    		    }
            }else{
                echo '<script language="javascript">alert("Data tidak di temukan !!!"); document.location="forgotpassword";</script>';
            }    
        }
    }
}
