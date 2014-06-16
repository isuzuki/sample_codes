<?php

interface ISubject {

	public function add(IObserver $observer);

	public function notify($e);

}
