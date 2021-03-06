<?php

require_once 'ICommand.php';
require_once 'FileSystem.php';

class MakeDirectoryCommand implements ICommand {

	private $file_system = null;

	public function __construct(FileSystem $file_system) {
		$this->file_system = $file_system;
	}

	public function exec() {
		$this->file_system->makeDirectory();
	}

	public function undo() {
		$this->file_system->removeDirctory();
	}

}
