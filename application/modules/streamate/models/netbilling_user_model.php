<?php
class Netbilling_user_model extends CI_Model {
	private action = '';
	private bill_name1 = '';
	private bill_name2 = '';
	private bill_street = '';
	private bill_city = '';
	private bill_state = '';
	private bill_zip = '';
	private bill_country = '';
	private cust_ip = '';
	private cust_email = '';
	private cust_password = '';	
	private cust_nick = '';
	private trans_id = '';
	private card_last4 = '';
	private cust_nick = '';
	
    function __construct()
    {
        parent::__construct();
    }
	
	function get_recent_entries($post_count = 10)
	{
		$this->db->order_by("date", "DESC");
		$q = $this->db->get('blog', $post_count, 0);
		return $q;
	}
}
?>