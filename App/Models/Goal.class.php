<?php

	include_once $_SERVER["DOCUMENT_ROOT"].'/config.php';
	include_once ROOT_PATH.'/App/Models/Database.class.php';

class Goal
	{
	
		public $title = '';
		public $description = '';
        public $creator = '';
		public $startDate = '';
		public $endDate = '';

		public function __construct( $title, $description, $creator, $startDate, $endDate )
		{
				$this->title = $title;
				$this->description = $description;
				$this->creator = $creator;
				$this->startDate = $startDate;	
				$this->endDate = $endDate;	

		}
	
		protected function validate_input($input)
		{
			
			
			
		}
	
	}



?>