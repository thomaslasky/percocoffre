<?php
	
	namespace App;
	
	class SiteContainTextManager extends Manager {
		
		public function __construct() {
			parent::__construct();
			$this->table = "site_contain_text";
		}
		
		public function AcBlockManager(SiteContainText &$containText) {
			
			if($this->isSetContainText()) {
				
				$sql = "INSERT INTO {$this->table} (title, text_pres_1, text_pres_2, text_pres_3, contact_us, bio) VALUE (:title, :pres1, :pres2, :pres3, :contact, :bio)";
				
				$req = $this->db->prepare($sql);
				
				$req->bindValue('title', $containText->getTitle(), \PDO::PARAM_STR);
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
				
				$sql = "UPDATE {$this->table} SET title = :title, text_pres_1 = :pres1, text_pres_2 = :pres2, text_pres_3 = :pres3, contact_us = :contact, bio = :bio";
				
				$req = $this->db->prepare($sql);
				
				$req->bindValue('title', $containText->getTitle(), \PDO::PARAM_STR);
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
			
			$results = $req->fetchAll("FETCH_ASSOC");
			
			if($results === 0) {
				return true;
			}
			
			return false;
		}
	}