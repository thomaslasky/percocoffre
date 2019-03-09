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
		
		public function AcBlockManager(SiteActiveBlock &$activeBlock) {
			
			if($this->isSetAcBlock()) {
				
				$sql = "INSERT INTO site_active_block (block_pres_1, block_pres_2, block_pres_3) VALUE (:block1 ,:block2 ,:block3)";
				
				$req = $this->db->prepare($sql);
				
				$req->bindValue('block1', $activeBlock->getBlockPres1(), \PDO::PARAM_BOOL);
				$req->bindValue('block2', $activeBlock->getBlockPres2(), \PDO::PARAM_BOOL);
				$req->bindValue('block3', $activeBlock->getBlockPres3(), \PDO::PARAM_BOOL);
				
				if($req->execute()) {
					return true;
				}
				
				return false;
			} elseif($this->isSetAcBlock() === false) {
				
				$sql = "UPDATE {$this->table} SET block_pres_1 = :block1, block_pres_2 = :block2, block_pres_3 = :block3";
				
				$req = $this->db->prepare($sql);
				
				$req->bindValue('block1', $activeBlock->getBlockPres1(), \PDO::PARAM_BOOL);
				$req->bindValue('block2', $activeBlock->getBlockPres2(), \PDO::PARAM_BOOL);
				$req->bindValue('block3', $activeBlock->getBlockPres3(), \PDO::PARAM_BOOL);
				
				if($req->execute()) {
					return true;
				}
				
				return false;
			} else {
				return false;
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