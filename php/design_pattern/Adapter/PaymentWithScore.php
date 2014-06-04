<?php

require_once 'Payment.php';
require_once 'Cart.php';
require_once 'Score.php';

class PaymentWithScore extends Payment {

	private $score = null;

	public function __construct(Score $score) {
		$this->score = $score;
	}

	public function pay(Cart $cart) {
		$result = parent::pay($cart);
		$this->score->add(floor($cart->getTotalPrice() / 100));

		return sprintf('%s : ポイントは %s になりました。', $result, $this->score->getUserPoint());
	}
}
