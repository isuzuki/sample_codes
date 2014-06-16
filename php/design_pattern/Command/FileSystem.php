<?php

class FileSystem {

	private $path = null;

	public function __construct($path) {
		$this->path = $path;
	}

	public function changeDirectory() {
		return `cd $this->path`;
	}

	public function makeDirectory() {
		return `mkdir $this->path`;
	}

	public function removeDirctory() {
		return `rm -r $this->path`;
	}

	public function createFile() {
		return `touch $this->path`;
	}

}
