<?php
	
	namespace App;
	
	class SiteContainImgManager extends Manager {
		
		public function __construct() {
			parent::__construct();
			$this->table = "site_contain_img";
		}
		
		public function AcBlockManager(SiteContainImg &$containImg) {
			
			if($this->isSetContainText()) {
				
				$sql = "INSERT INTO site_contain_img (parallax_1, parallax_2, parallax_3, logo, icon_pres_1, icon_pres_2, icon_pres_3) VALUE (:para1, :para2, :para3, :logo, :pres1, :pres2, :pres3)";
				
				$req = $this->db->prepare($sql);
				
				$req->bindValue('para1', $containImg->getParallax1(), \PDO::PARAM_STR);
				$req->bindValue('para2', $containImg->getParallax2(), \PDO::PARAM_STR);
				$req->bindValue('para3', $containImg->getParallax3(), \PDO::PARAM_STR);
				$req->bindValue('logo', $containImg->getLogo(), \PDO::PARAM_STR);
				$req->bindValue('pres1', $containImg->getIconPres1(), \PDO::PARAM_STR);
				$req->bindValue('pres2', $containImg->getIconPres2(), \PDO::PARAM_STR);
				$req->bindValue('pres3', $containImg->getIconPres3(), \PDO::PARAM_STR);
				
				if($req->execute()) {
					return true;
				}
				
				return false;
			} elseif($this->isSetContainText() === false) {
				
				$sql = "UPDATE {$this->table} SET parallax_1 = :para1, parallax_2 = :para2, parallax_3 = :para3, logo = :logo, icon_pres_1 = :pres1, icon_pres_2 = :pres2, icon_pres_3 = :pres3";
				
				$req = $this->db->prepare($sql);
				
				$req->bindValue('para1', $containImg->getParallax1(), \PDO::PARAM_STR);
				$req->bindValue('para2', $containImg->getParallax2(), \PDO::PARAM_STR);
				$req->bindValue('para3', $containImg->getParallax3(), \PDO::PARAM_STR);
				$req->bindValue('logo', $containImg->getLogo(), \PDO::PARAM_STR);
				$req->bindValue('pres1', $containImg->getIconPres1(), \PDO::PARAM_STR);
				$req->bindValue('pres2', $containImg->getIconPres2(), \PDO::PARAM_STR);
				$req->bindValue('pres3', $containImg->getIconPres3(), \PDO::PARAM_STR);
				
				if($req->execute()) {
					return true;
				}
				
				return false;
			} else {
				return false;
			}
		}
		
		public function getAllText() {
			$sql = "SELECT * FROM {$this->table}";
			
			$req = $this->db->prepare($sql);
			$req->execute();
			
			$results = $req->fetchAll("FETCH_ASSOC");
			
			if(!empty($results)) {
				
				$tab = [];
				
				foreach($results as $result) {
					$tab[] = new SiteContainImg($result);
				}
				
				return $tab;
			}
			
			return false;
		}
		
		private function isSetContainText() {
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