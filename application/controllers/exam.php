<?php 

class Exam extends CI_controller{
	
public	function index(){
		$this->load->view('exam_main_view');
	}

public function register(){
	$this->load->view('exam_register');
}	

public	function form_validation(){
	$this->load->library('form_validation');
	$this->form_validation->set_rules('username', 'Username', 'trim|required');
	$this->form_validation->set_rules('user_password', 'Password', 'required');

	if($this->form_validation->run()){
		$data = array(
			'name' => $this->input->post('username'),
			'pass' => $this->input->post('user_password')

		);

	}else{
		$this->index();
	}


}







}




 ?>