<?php
class Migration_Article_Comment extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'article_id' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
			),
			'comment' => array(
				'type' => 'TEXT',
			),
			'posted' => array(
				'type' => 'DATETIME',
			),
			'website' => array(
				'type' => 'VARCHAR',
				'constraint'=>'50',
			),
			'about' => array(
				'type' => 'VARCHAR',
				'constraint'=>'50',
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('article_comment');
	}

	public function down()
	{
		$this->dbforge->drop_table('article_comment');
	}
}