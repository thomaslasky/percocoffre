<?php
	
	namespace App;
	
	class SiteContainText extends Entity {
		
		private $title;
		private $text_pres_1;
		private $text_pres_2;
		private $text_pres_3;
		private $contact_us;
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
		public function getTextPres1() {
			return $this->text_pres_1;
		}
		
		/**
		 * @param mixed $text_pres_1
		 */
		public function setTextPres1($text_pres_1) {
			$this->text_pres_1 = $text_pres_1;
		}
		
		/**
		 * @return mixed
		 */
		public function getTextPres2() {
			return $this->text_pres_2;
		}
		
		/**
		 * @param mixed $text_pres_2
		 */
		public function setTextPres2($text_pres_2) {
			$this->text_pres_2 = $text_pres_2;
		}
		
		/**
		 * @return mixed
		 */
		public function getTextPres3() {
			return $this->text_pres_3;
		}
		
		/**
		 * @param mixed $text_pres_3
		 */
		public function setTextPres3($text_pres_3) {
			$this->text_pres_3 = $text_pres_3;
		}
		
		/**
		 * @return mixed
		 */
		public function getContactUs() {
			return $this->contact_us;
		}
		
		/**
		 * @param mixed $contact_us
		 */
		public function setContactUs($contact_us) {
			$this->contact_us = $contact_us;
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