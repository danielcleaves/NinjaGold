<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function index()
	{
		if($this->session->userdata('gold') == 0)
		{
			$this->session->set_userdata('gold', 0);
		}
		
		$this->load->view('index');
		
	}

	public function process_money()
	{
		$bldg = $this->input->post('building');
		$rand = 0;
		$messages = array();

		if($bldg == 'farm')
		{
			$rand = rand(10,20);
		}
		elseif ($bldg == 'cave') 
		{
			$rand= rand(5,10);
		}
		elseif ($bldg == 'house')
		{
			$rand = rand(2,5);
		}
		elseif ($bldg == "casino") 
		{
			$odds = rand(1,10);
				if($odds > 3)
				{
					$rand = rand(-50,0);
					$message = "Entered a casino and lost "	;			
				}
				else 
				{
					$rand = rand(0,50);
					$message = "Entered casino and gained ";
				}
				
		}

		$num = $this->session->userdata('gold');
		$num += $rand;
		$this->session->set_userdata('gold', $num);
		$messages = $this->session->userdata('messages');
		$time = time();
		$date = date('F jS Y g:i:a ', $time);
		if($bldg == "casino")
		{
			$message .=  $rand . " gold . - " . $date ;
		}
		else
		{
			$message = "Earned " . $rand . " golds from the " . $bldg . "!" . "(" . $date . ")" ;
		}
		$messages[] = $message;
		$this->session->set_userdata('messages', $messages);
		redirect('/');
	}


	

}









/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */