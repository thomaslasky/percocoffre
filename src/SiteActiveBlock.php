<?php
	
	namespace App;
	
	
	class SiteActiveBlock extends Entity {
		
		private $block_pres_1;
		private $block_pres_2;
		private $block_pres_3;
		
		public function __construct($values) {
			parent::__construct($values);
		}
		
		/**
		 * @return mixed
		 */
		public function getBlockPres1() {
			return $this->block_pres_1;
		}
		
		/**
		 * @param mixed $block_pres_1
		 */
		public function setBlockPres1($block_pres_1) {
			$this->block_pres_1 = $block_pres_1;
		}
		
		/**
		 * @return mixed
		 */
		public function getBlockPres2() {
			return $this->block_pres_2;
		}
		
		/**
		 * @param mixed $block_pres_2
		 */
		public function setBlockPres2($block_pres_2) {
			$this->block_pres_2 = $block_pres_2;
		}
		
		/**
		 * @return mixed
		 */
		public function getBlockPres3() {
			return $this->block_pres_3;
		}
		
		/**
		 * @param mixed $block_pres_3
		 */
		public function setBlockPres3($block_pres_3) {
			$this->block_pres_3 = $block_pres_3;
		}
	}