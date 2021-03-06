<?php

namespace Bad_Example {

	final class Basket
	{
		private $products;

		public function addProduct($product)
		{
			if (3 == count($this->products)) {
				throw new \Exception("Max 3 products allowed");
			}
			$this->products[] = $product;
		}
	}

	final class Shipment
	{
		private $products;

		public function addProduct($product)
		{
			if (3 == count($this->products)) {
				throw new \Exception("Max 3 products allowed");
			}
			$this->products[] = $product;
		}
	}
}

namespace Good_Example {

	abstract class ProductContainer
	{
		protected $products;

		public function addProduct($product)
		{
			if (3 == count($this->products)) {
				throw new \Exception("Max 3 products allowed");
			}
			$this->products[] = $product;
		}
	}

	final class Basket extends ProductContainer {}

	final class Shipment extends ProductContainer {}
}