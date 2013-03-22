<?php
class Netbilling_user_model extends CI_Model {
	private $action = '';
	private $bill_name1 = '';
	private $bill_name2 = '';
	private $bill_street = '';
	private $bill_city = '';
	private $bill_state = '';
	private $bill_zip = '';
	private $bill_country = '';
	private $cust_ip = '';
	private $cust_email = '';
	private $cust_password = '';	
	private $cust_nick = '';
	private $trans_id = '';
	private $card_last4 = '';
	private $referrerid = '';
	private $account_id = '';
	private $tracking_id = '';
	private $tracking_key = '';
	private $pselector = '';
	private $new_email = '';
	
    function __construct()
    {
        parent::__construct();
    }
	
	function set_action($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=10)
				$this->action = $value;
			else
				throw new Exception("action parameter can't be longer than 10 characters:".$value);
		}
		else
			throw new Exception("action cannot be empty when creating a new user");
	}//set action
	
	function get_action(){return $this->action;}
	
	function set_bill_name1($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=100)
				$this->bill_name1 = $value;
			else
				throw new Exception("bill_name1 parameter can't be longer than 100 characters:".$value);
		}
		else
			throw new Exception("firstname cannot be empty when creating a new user");
			
	}//set firstname	
	
	function get_bill_name1(){return $this->bill_name1;}
	
	
	function set_bill_name2($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=100)
				$this->bill_name2 = $value;
			else
				throw new Exception("bill_name2 parameter can't be longer than 100 characters:".$value);
		}
		else
			throw new Exception("billname2 cannot be empty when creating a new user");
			
	}//set lastname	
	
	function get_bill_name2(){return $this->bill_name2;}
	
	
	function set_bill_street($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=100)
				$this->bill_street = $value;
			else
				throw new Exception("bill_street parameter can't be longer than 100 characters:".$value);
		}			
	}//set street address	
	
	function get_bill_street(){return $this->bill_street;}
	
	function set_bill_city($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=100)
				$this->bill_city = $value;
			else
				throw new Exception("bill_city parameter can't be longer than 100 characters:".$value);
		}			
	}//set bill city	
	
	function get_bill_city(){return $this->bill_city;}
	
	function set_bill_state($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=2)
				$this->bill_state = $value;
			else
				throw new Exception("bill_state parameter can't be longer than 2 characters:".$value);
		}			
	}//set bill state	
	
	function get_bill_state(){return $this->bill_state;}
	
	function set_bill_zip($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=50)
				$this->bill_zip = $value;
			else
				throw new Exception("bill_zip parameter can't be longer than 50 characters:".$value);
		}
		else
			throw new Exception("bill_zip cannot be empty when creating a new user");
	}//set bill zip	
	
	function get_bill_zip(){return $this->bill_zip;}
	
	function set_bill_country($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=2)
				$this->bill_country = $value;
			else
				throw new Exception("bill_country parameter can't be longer than 2 characters:".$value);
		}
		else
			throw new Exception("bill_country cannot be empty when creating a new user");
	}//set bill country	
	
	function get_bill_country(){return $this->bill_country;}		
	
	function set_cust_ip($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=16)
				$this->cust_ip = $value;
			else
				throw new Exception("cust_ip parameter can't be longer than 16 characters:".$value);
		}
		else
			throw new Exception("cust_ip cannot be empty when creating a new user");
	}//set cust ip
	
	function get_cust_ip(){return $this->cust_ip;}	
	
	function set_cust_email($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=100)
				$this->cust_email = $value;
			else
				throw new Exception("cust_email parameter can't be longer than 100 characters:".$value);
		}
		else
			throw new Exception("cust_email cannot be empty when creating a new user");
	}//set cust email
	
	function get_cust_email(){return $this->cust_email;}
	
	function set_cust_password($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=30)
				$this->cust_password = $value;
			else
				throw new Exception("cust_password parameter can't be longer than 30 characters:".$value);
		}
		else
			throw new Exception("cust_password cannot be empty when creating a new user");
	}//set cust password
	
	function get_cust_password(){return $this->cust_password;}
	
	function set_cust_nick($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=32)
				$this->cust_nick = $value;
			else
				throw new Exception("cust_nick parameter can't be longer than 32 characters:".$value);
		}		
	}//set cust nick
	
	function get_cust_nick(){return $this->cust_nick;}
	
	function set_trans_id($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=12)
				$this->trans_id = $value;
			else
				throw new Exception("trans_id parameter can't be longer than 12 characters:".$value);
		}
		else
			throw new Exception("trans_id cannot be empty when creating a new user");		
	}//set trans id
	
	function get_trans_id(){return $this->trans_id;}
		
	function set_card_last4($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=4)
				$this->card_last4 = $value;
			else
				throw new Exception("card_last4 parameter can't be longer than 4 characters:".$value);
		}
		else
			throw new Exception("card_last4 cannot be empty when creating a new user");		
	}//set trans id
	
	function get_card_last4(){return $this->card_last4;}
	
	function set_referrerid($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=3)
				$this->referrerid = $value;
			else
				throw new Exception("referrerid parameter can't be longer than 3 characters:".$value);
		}
		else
			throw new Exception("referrerid cannot be empty when creating a new user");		
	}//set referrerid
	
	function get_referrerid(){return $this->referrerid;}
	
	function set_account_id($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=20)
				$this->account_id = $value;
			else
				throw new Exception("account_id parameter can't be longer than 20 characters:".$value);
		}
		else
			throw new Exception("account_id cannot be empty when creating a new user");		
	}//set account id
	
	function get_account_id(){return $this->account_id;}
	
	function set_tracking_id($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=10)
				$this->tracking_id = $value;
			else
				throw new Exception("tracking_id parameter can't be longer than 10 characters:".$value);
		}		
	}//set tracking id
	
	function get_tracking_id(){return $this->tracking_id;}
	
	function set_tracking_key($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=100)
				$this->tracking_key = $value;
			else
				throw new Exception("tracking_key parameter can't be longer than 100 characters:".$value);
		}		
	}//set tracking key
	
	function get_tracking_key(){return $this->tracking_key;}
	
	function set_pselector($value)
	{
		if(strlen($value)>0)
		{
			if(strlen($value)<=20)
				$this->pselector = $value;
			else
				throw new Exception("pselector parameter can't be longer than 20 characters:".$value);
		}		
	}//set pselector
	
	function get_pselector(){return $this->pselector;}
	
}//end of class
?>