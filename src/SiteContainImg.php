<?php
	
	namespace App;
	
	class SiteContainImg extends Entity {
		
		private $parallax_1;
		private $parallax_2;
		private $parallax_3;
		private $logo;
		private $icon_pres_1;
		private $icon_pres_2;
		private $icon_pres_3;
		
		public function __construct($values) {
			parent::__construct($values);
		}
		
		/**
		 * @return mixed
		 */
		public function getParallax1() {
			return $this->parallax_1;
		}
		
		/**
		 * @param mixed $parallax_1
		 */
		public function setParallax1($parallax_1) {
			$this->parallax_1 = $parallax_1;
		}
		
		/**
		 * @return mixed
		 */
		public function getParallax2() {
			return $this->parallax_2;
		}
		
		/**
		 * @param mixed $parallax_2
		 */
		public function setParallax2($parallax_2) {
			$this->parallax_2 = $parallax_2;
		}
		
		/**
		 * @return mixed
		 */
		public function getParallax3() {
			return $this->parallax_3;
		}
		
		/**
		 * @param mixed $parallax_3
		 */
		public function setParallax3($parallax_3) {
			$this->parallax_3 = $parallax_3;
		}
		
		/**
		 * @return mixed
		 */
		public function getLogo() {
			return $this->logo;
		}
		
		/**
		 * @param mixed $logo
		 */
		public function setLogo($logo) {
			$this->logo = $logo;
		}
		
		/**
		 * @return mixed
		 */
		public function getIconPres1() {
			return $this->icon_pres_1;
		}
		
		/**
		 * @param mixed $icon_pres_1
		 */
		public function setIconPres1($icon_pres_1) {
			$this->icon_pres_1 = $icon_pres_1;
		}
		
		/**
		 * @return mixed
		 */
		public function getIconPres2() {
			return $this->icon_pres_2;
		}
		
		/**
		 * @param mixed $icon_pres_2
		 */
		public function setIconPres2($icon_pres_2) {
			$this->icon_pres_2 = $icon_pres_2;
		}
		
		/**
		 * @return mixed
		 */
		public function getIconPres3() {
			return $this->icon_pres_3;
		}
		
		/**
		 * @param mixed $icon_pres_3
		 */
		public function setIconPres3($icon_pres_3) {
			$this->icon_pres_3 = $icon_pres_3;
		}
	}