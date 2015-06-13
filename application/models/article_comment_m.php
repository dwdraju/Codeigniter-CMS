<?php
class Article_Comment_m  extends MY_Model{
protected $_primary_key = 'article_id';
	protected $_table_name = 'article_comment';
	//protected $_order_by = 'pubdate desc';
	protected $_timestamps = TRUE;
	public $c_rules = array(
		
		'name' => array(
			'field' => 'name', 
			'label' => 'Name', 
			'rules' => 'trim|required|max_length[100]|xss_clean'
		), 
		'email' => array(
			'field' => 'email', 
			'label' => 'Email', 
			'rules' => 'trim|required|valid_email|xss_clean'
		), 
		'comment' => array(
			'field' => 'comment', 
			'label' => 'comment', 
			'rules' => 'trim|required'
		),
		'website'=>array(
			'field'=>'website',
			'label'=>'website',
			'rules'=>'trim'
			)
	);

	public function save_comment($data){	
			$this->db->insert('article_comment',$data);
			$id = $this->db->insert_id();
			
	}
	public function get_comment($id){
	//$filter = $this->_primary_filter;
			$id = intval($id);
			$this->db->where($this->_primary_key, $id);
			$method = 'result';
			return $this->db->get($this->_table_name)->$method();
	}
}