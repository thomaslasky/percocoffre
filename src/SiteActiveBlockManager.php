<?php
	/**
	 * Created by PhpStorm.
	 * User: Thomas Tartas
	 * Date: 09/03/2019
	 * Time: 14:54
	 */
	
	namespace App;
	
	
	class SiteActiveBlockManager extends Manager {
		
		public function __construct() {
			parent::__construct();
			$this->table = "site_active_block";
		}
		
		public function AcBlockManager() {
			
			if($this->isSetAcBlock()) {
				
			}
		}
		
		public function getAllAcBlock() {
			$sql = "SELECT * FROM {$this->table}";
			
			$req = $this->db->prepare($sql);
			$req->execute();
			
			$results = $req->fetchAll("FETCH_ASSOC");
			
			if(!empty($results)) {
				
				$tab = [];
				
				foreach($results as $result) {
					$tab[] = new SiteActiveBlock($result);
				}
				
				return $tab;
			}
			
			return false;
		}
		
		private function isSetAcBlock() {
			$sql = "SELECT COUNT(*) FROM {$this->table}";
			
			$req = $this->db->prepare($sql);
			$req->execute();
			
			$results = $req->fetchAll("FETCH_ASSOC");
			
			if($results === 0) {
				return true;
			}
			
			return false;
		}
	}