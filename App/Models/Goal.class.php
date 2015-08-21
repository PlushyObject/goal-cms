<?php

	include_once '../config.php';
	include_once 'Database.class.php';

class Goal
	{
	
		public $title = '';
		public $description = '';
		public $startDate = '';
		public $endDate = '';

		public function __construct( $title, $description, $startDate, $endDate )
		{
				$this->title = $title;
				$this->description = $description;
				$this->startDate = $startDate;	
				$this->endDate = $endDate;	

		}
	
		protected function validate_input($input)
		{
			
			
			
		}
	
	}



?>