<?php
class Cl_DBclass
{
	/**
	 * @var $con will hold database connection
	 */
	public $con;
	
	/**
	 * This will create Database connection
	 */
	public function __construct()
	{
		$this->con = mysqli_connect('localhost','root','' ,'user_login');
		if( mysqli_connect_error()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
}