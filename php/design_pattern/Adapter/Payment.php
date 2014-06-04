<?php

require_once 'Cart.php';

class Payment {

	public function pay(Cart $cart) {
		$total_price = $cart->getTotalPrice();
		return sprintf('合計金額 %s円 の決済が完了しました。', $total_price);
	}
}
