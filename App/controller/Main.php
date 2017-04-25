<?php
namespace App\Controller;

class Main extends \System\Controller {

	protected function renderView($view) {
		$this->view('layout/header');
		$this->view($view);
		$this->view('layout/footer');
	}

}
