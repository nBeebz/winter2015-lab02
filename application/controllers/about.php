<?php

class About extends Application {
	public function index()
	{
		$this->data['pagebody'] = 'about';
		$this->render();
	}
}