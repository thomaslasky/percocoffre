<?php
	
	namespace App;
	
	
	class Admin extends Entity {
		
		private $id;
		private $password;
		private $pseudo;
		private $url_img;
		
		public function __construct($values) {
			parent::__construct($values);
		}
		
		/**
		 * @return mixed
		 */
		public function getId() {
			return $this->id;
		}
		
		/**
		 * @param mixed $id
		 */
		public function setId($id) {
			$this->id = $id;
		}
		
		/**
		 * @return mixed
		 */
		public function getPassword() {
			return $this->password;
		}
		
		/**
		 * @param mixed $password
		 */
		public function setPassword($password) {
			$this->password = md5($password);
		}
		
		/**
		 * @return mixed
		 */
		public function getPseudo() {
			return $this->pseudo;
		}
		
		/**
		 * @param mixed $pseudo
		 */
		public function setPseudo($pseudo) {
			$this->pseudo = $pseudo;
		}
		
		/**
		 * @return mixed
		 */
		public function getUrlImg() {
			return $this->url_img;
		}
		
		/**
		 * @param mixed $url_img
		 */
		public function setUrlImg($url_img) {
			$this->url_img = $url_img;
		}
	}