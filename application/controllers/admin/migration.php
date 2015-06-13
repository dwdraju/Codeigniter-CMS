<?php
//to load migration, disable autoload session on config/autoload.php
class Migration extends CI_Controller
{

	public function __construct ()
	{
		parent::__construct();
	}

	public function index ()
	{
		$this->load->library('migration');
		//$this->migrate->current();
		//$this->migration->version(2);
		if (! $this->migration->current()) {
			show_error($this->migration->error_string());
		}
		else {
			echo 'Migration worked!';
		}
	 
	}

}