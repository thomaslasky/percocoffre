<?php
	
	namespace App;
	
	use Config;
	
	abstract class Manager {
	
		protected $db;
		protected $table;
		
		public function __construct() {
			
			$settings = new Config\bddManager();
			$this->db = $settings->configPDO();
			
		}
	}