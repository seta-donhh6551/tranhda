<?php
   class User extends MY_Controller{
	   public function __construct(){
		   parent::__construct();
		   $this->load->helper("url");
		   $this->load->helper("form");
		   $this->load->library("form_validation");
		   $this->load->library('session');
		   $this->load->model("muser");
		   
	   }
	   public function register(){	   
		   $data['listnews'] = $this->listnews();
		   $data['menu'] = $this->menu();	
		   $data['doc'] = $this->documents();
		   $data['project'] = $this->projectabc();	
		   $data['title'] = "Đăng ký thành viên";
		   if($this->input->post("ok") != ""){
			   $this->form_validation->set_rules("user","Tên tài khoản","alpha_numeric|min_length[5]|calback_check");
			   $this->form_validation->set_rules("pass","Mật khẩu","alpha_numeric|min_length[5]");
			   if($this->form_validation->run() == FALSE){
				   $this->load->view("user/layout",$data);
			   }else{
				   $ses = $this->session->userdata['security_code'];
				   $code = $this->input->post("captcha");
				   $user = $this->input->post("user");
				   $email = $this->input->post("email");
				   $u = $this->muser->check_user($user);
				   $e = $this->muser->check_email($email);
				   if($code != $ses){
					   $data['error'] = "Mã xác nhận không chính xác";
					   $this->load->view("user/layout",$data);
				   }else{
					   if($u == FALSE || $e == FALSE){
					  		$data['error'] = "Người dùng này đã tồn tại";
					   		$this->load->view("user/layout",$data);
						}else{
							$db = array(
								"username" => $this->input->post("user"),
								"password" => md5($this->input->post("pass")),
								"name" => $this->input->post("name"),
								"gender" => $this->input->post("gender"),
								"phone" => $this->input->post("phone"),
								"adress" => $this->input->post("adress"),
								"email" => $this->input->post("email"),
								"level" => "2"	
							);
							$this->muser->add_user($db);
							$sesion = array(
											"ses_user" => $this->input->post("user"),
											"ses_level" => "2"
										);
							$this->session->set_userdata($sesion);
							redirect(base_url());
						}
				   }
			   }
		   }else{
		 	  $this->load->view("user/layout",$data);
		   }
	   }
	   public function forgot(){
		   $this->load->library("email");
		   $this->load->library("my_email");
		   $data = $this->menu();
		   $data['menu'] = $this->menu_top();
		   $data['support'] = $this->support();
		   $data['title'] = "Quên mật khẩu";
		   $data['access'] = $this->access();
		   $data['online'] = $this->online();
		   if($this->input->post("ok")){
			   $this->form_validation->set_rules("email","Email","required|min_length[5]|valid_emails");
			   $this->form_validation->set_rules("captcha","Mã xác nhận","required|min_length[4]");
			   if($this->form_validation->run() == FALSE){
				  $this->load->view("user/forgot/layout",$data); 
			   }else{
				   $ses = $this->session->userdata['security_code'];
				   $code = $this->input->post("captcha");
				   $email = $this->input->post("email");
				   if($code != $ses){
					   $data['error'] = "Mã xác nhận không chính xác";
					   $this->load->view("user/forgot/layout",$data);
				   }else{
					   if($this->muser->check_email($email) == TRUE){
						  	$data['error'] = "Không tìm thấy email của bạn trong cơ sở dữ liệu";
					   		$this->load->view("user/forgot/layout",$data); 
					   }else{
						   	$rand = rand(0,999);
							$pass = md5($rand);
							$profile = $this->muser->get_forgot($email);
						    $message  = "Chúng tôi nhận được yêu cầu lấy lại mật khẩu của bạn từ http://vinhphucit.org/ <br />";
							$message .= "Tài khoản của bạn : ".$profile['username']. "<br />";
							$message .= "Mật khẩu mới của bạn : ".$rand;
							$mail = array(
	                            "to_receiver"   => $email,
	                            "message"       => $message,
	                        	);	
							$pa = array("password"=>"$pass");			                
							$this->muser->forgot($email,$pa);
							$this->load->library("my_email");
				            $this->my_email->config($mail);
				            $this->my_email->sendmail();
							$data['error'] = "Một tin nhắn đã gửi đến email của bạn,vui lòng check email để lấy lại mật khẩu !";
							$this->load->view("user/forgot/layout",$data);
						}
				   }
			   }
		   }else{
		   		$this->load->view("user/forgot/layout",$data);
		   }
	   }
   }