<?php

interface ICommand {

	public function exec();

	public function undo();

}
