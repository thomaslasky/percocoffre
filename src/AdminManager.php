<?php
	/**
	 * Created by PhpStorm.
	 * User: Thomas Tartas
	 * Date: 09/03/2019
	 * Time: 14:05
	 */
	
	namespace App;
	
	
	class AdminManager extends Manager {
		
		public function __construct() {
			parent::__construct();
			$this->table = "admin";
		}
		
		public function addAdmin(Admin &$admin) {
			$sql = "INSERT INTO {$this->table} (password, url_img, pseudo) VALUE (:password, :url, :pseudo)";
			$req = $this->db->prepare($sql);
			
			$req->bindValue('url', $admin->getUrlImg(), \PDO::PARAM_STR);
			$req->bindValue('password', $admin->getPassword(), \PDO::PARAM_STR);
			$req->bindValue('pseudo', $admin->getPseudo(), \PDO::PARAM_STR);
			
			if($req->execute()) {
				return true;
			}
			
			return false;
		}
		
		public function deleteAdmin($id) {
			$sql = "DELETE FROM {$this->table} WHERE id = {$id}";
			
			$req = $this->db->prepare($sql);
			
			if($req->execute()) {
				return true;
			}
			
			return false;
		}
		
		public function readAdmin($id) {
			
			$sql = "SELECT * FROM " . $this->table . " WHERE id = :id";
			$req = $this->db->prepare($sql);
			
			$req->bindValue('id', $id, \PDO::PARAM_INT);
			
			$req->execute();
			
			$result = $req->fetch();
			
			return new Membres($result);
		}
		
		public function readAllAdmin() {
			$sql = "SELECT * FROM {$this->table}";
			
			$req = $this->db->prepare($sql);
			$req->execute();
			
			$results = $req->fetchAll("FETCH_ASSOC");
			
			if(!empty($results)) {
				
				$tab = [];
				
				foreach($results as $result) {
					$tab[] = new Admin($result);
				}
				
				return $tab;
			}
			
			return false;
		}
	}