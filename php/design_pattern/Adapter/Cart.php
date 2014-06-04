<?php

class Cart {

	private $order_goods = [];

	public function getTotalPrice() {
		$total_price = 0;
		foreach ($this->order_goods as $goods) {
			$total_price += $goods['price'];
		}

		return floor($total_price * 1.08);
	}

	public function addOrderGoods($goods, $price) {
		$this->order_goods[] = [
			'name' => $goods,
			'price' => $price
		];
	}
}
