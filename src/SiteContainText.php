<?php
	
	namespace App;
	
	class SiteContainText extends Entity {
		
		private $title;
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