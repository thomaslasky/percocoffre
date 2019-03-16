<?php
	
	namespace App;
	
	class SiteContainText extends Entity {
		
		private $title;
		private $titlepres1;
		private $titlepres2;
		private $titlepres3;
		private $textpres1;
		private $textpres2;
		private $textpres3;
		private $contactus;
		private $bio;
		
		public function __construct($values) {
			parent::__construct($values);
		}
		
		/**
		 * @return mixed
		 */
		public function getTitle() {
			return $this->title;
		}
		
		/**
		 * @param mixed $title
		 */
		public function setTitle($title) {
			$this->title = $title;
		}
		
		/**
		 * @return mixed
		 */
		public function getTitlepres1() {
			return $this->titlepres1;
		}
		
		/**
		 * @param mixed $titlepres1
		 */
		public function setTitlepres1($titlepres1) {
			$this->titlepres1 = $titlepres1;
		}
		
		/**
		 * @return mixed
		 */
		public function getTitlepres2() {
			return $this->titlepres2;
		}
		
		/**
		 * @param mixed $titlepres2
		 */
		public function setTitlepres2($titlepres2) {
			$this->titlepres2 = $titlepres2;
		}
		
		/**
		 * @return mixed
		 */
		public function getTitlepres3() {
			return $this->titlepres3;
		}
		
		/**
		 * @param mixed $titlepres3
		 */
		public function setTitlepres3($titlepres3) {
			$this->titlepres3 = $titlepres3;
		}
		
		/**
		 * @return mixed
		 */
		public function getTextpres1() {
			return $this->textpres1;
		}
		
		/**
		 * @param mixed $textpres1
		 */
		public function setTextpres1($textpres1) {
			$this->textpres1 = $textpres1;
		}
		
		/**
		 * @return mixed
		 */
		public function getTextpres2() {
			return $this->textpres2;
		}
		
		/**
		 * @param mixed $textpres2
		 */
		public function setTextpres2($textpres2) {
			$this->textpres2 = $textpres2;
		}
		
		/**
		 * @return mixed
		 */
		public function getTextpres3() {
			return $this->textpres3;
		}
		
		/**
		 * @param mixed $textpres3
		 */
		public function setTextpres3($textpres3) {
			$this->textpres3 = $textpres3;
		}
		
		/**
		 * @return mixed
		 */
		public function getContactus() {
			return $this->contactus;
		}
		
		/**
		 * @param mixed $contactus
		 */
		public function setContactus($contactus) {
			$this->contactus = $contactus;
		}
		
		/**
		 * @return mixed
		 */
		public function getBio() {
			return $this->bio;
		}
		
		/**
		 * @param mixed $bio
		 */
		public function setBio($bio) {
			$this->bio = $bio;
		}
	}