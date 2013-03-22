<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Streamate extends MX_Controller {
	public function index()
	{	
		echo 'streamate api';
	}//index
	
	public function create_user_test()
	{
		$this->load->library('unit_test');		
		
		try{		
		
		$this->netbilling_user_model->set_action('join');
		$this->unit->run($this->netbilling_user_model->get_action(), 'join', 'test action');
		
		$this->netbilling_user_model->set_bill_name1('Tom');		
		$this->unit->run($this->netbilling_user_model->get_bill_name1(), 'Tom', 'test bill_name1');
		
		$this->netbilling_user_model->set_bill_name2('Jones');
		$this->unit->run($this->netbilling_user_model->get_bill_name2(), 'Jones', 'test bill_name2');
		
		$this->netbilling_user_model->set_bill_street('123 Main St');
		$this->unit->run($this->netbilling_user_model->get_bill_street(), '123 Main St', 'test bill_street');
		
		$this->netbilling_user_model->set_bill_city('Seattle');
		$this->netbilling_user_model->set_bill_state('WA');
		$this->netbilling_user_model->set_bill_zip('12345');
		$this->netbilling_user_model->set_bill_country('US');
		$this->netbilling_user_model->set_cust_ip('127.0.0.1');
		$this->netbilling_user_model->set_cust_email('foo@example.com');
		$this->netbilling_user_model->set_cust_password('foobar');
		$this->netbilling_user_model->set_cust_nick('superman');
		$this->netbilling_user_model->set_trans_id('1212121212');
		$this->netbilling_user_model->set_card_last4('9999');
		$this->netbilling_user_model->set_referrerid('146');
		$this->netbilling_user_model->set_account_id('4545875487');
		$this->netbilling_user_model->set_tracking_id('123');
		$this->netbilling_user_model->set_tracking_key('banner-54321');
		$this->netbilling_user_model->set_pselector('INT/PG#1');
		
		} catch(Exception $e) {
			echo 'ERROR:'.$e->getMessage();
		}//catch
		
		echo $this->unit->report();
	}//create user
}

/* End of file jquery.php */
/* Location: ./application/controllers/jquery.php */