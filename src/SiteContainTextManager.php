<?php
	
	namespace App;
	
	class SiteContainTextManager extends Manager {
		
		public function __construct() {
			parent::__construct();
			$this->table = "site_contain_text";
		}
		
		public function AcBlockManager(SiteContainText &$containText) {
			
			if($this->isSetContainText()) {
				
				$sql = "INSERT INTO {$this->table} (title,titlepres1, titlepres2, titlepres3,textpres1, textpres2, textpres3, contact_us, bio) VALUE (:title, :tpres1, :tpres2, :tpres3, :pres1, :pres2, :pres3, :contact, :bio)";
				
				$req = $this->db->prepare($sql);
				
				$req->bindValue('title', $containText->getTitle(), \PDO::PARAM_STR);
				$req->bindValue('tpres1', $containText->getTitlepres1(), \PDO::PARAM_STR);
				$req->bindValue('tpres2', $containText->getTitlepres2(), \PDO::PARAM_STR);
				$req->bindValue('tpres3', $containText->getTitlepres3(), \PDO::PARAM_STR);
				$req->bindValue('pres1', $containText->getTextPres1(), \PDO::PARAM_STR);
				$req->bindValue('pres2', $containText->getTextPres2(), \PDO::PARAM_STR);
				$req->bindValue('pres3', $containText->getTextPres3(), \PDO::PARAM_STR);
				$req->bindValue('contact', $containText->getContactUs(), \PDO::PARAM_STR);
				$req->bindValue('bio', $containText->getBio(), \PDO::PARAM_STR);
				
				if($req->execute()) {
					return true;
				}
				
				return false;
			} elseif($this->isSetContainText() === false) {
				
				$sql = "UPDATE {$this->table} SET title = :title, titlepres1 = :tpres1, titlepres2 = :tpres2, titlepres3 = :tpres3, textpres1 = :pres1, textpres2 = :pres2, textpres3 = :pres3, contactus = :contact, bio = :bio";
				
				$req = $this->db->prepare($sql);
				
				$req->bindValue('title', $containText->getTitle(), \PDO::PARAM_STR);
				$req->bindValue('tpres1', $containText->getTitlepres1(), \PDO::PARAM_STR);
				$req->bindValue('tpres2', $containText->getTitlepres2(), \PDO::PARAM_STR);
				$req->bindValue('tpres3', $containText->getTitlepres3(), \PDO::PARAM_STR);
				$req->bindValue('pres1', $containText->getTextPres1(), \PDO::PARAM_STR);
				$req->bindValue('pres2', $containText->getTextPres2(), \PDO::PARAM_STR);
				$req->bindValue('pres3', $containText->getTextPres3(), \PDO::PARAM_STR);
				$req->bindValue('contact', $containText->getContactUs(), \PDO::PARAM_STR);
				$req->bindValue('bio', $containText->getBio(), \PDO::PARAM_STR);
				
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
			
			$results = $req->fetch();
			
			if(!empty($results)) {
				
				$tab = new SiteContainText($results);
				
				return $tab;
			}
			
			return false;
		}
		
		private function isSetContainText() {
			$sql = "SELECT COUNT(*) FROM {$this->table}";
			
			$req = $this->db->prepare($sql);
			$req->execute();
			
			$results = $req->fetch();
			
			if($results === 0) {
				return true;
			}
			
			return false;
		}
	}