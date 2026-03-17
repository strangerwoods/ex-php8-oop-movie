<?php

	trait OnSale {
		protected $discount_percentage;

		public function setDiscountPercentage($discount_percentage) {
			$this->discount_percentage = $discount_percentage;
		}

		public function getDiscountPercentage() {
			return $this->discount_percentage;
		}
	}

?>