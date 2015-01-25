<?php

class Gallery extends Application {
	public function index()
	{
		$pics = $this->images->all();
		
		foreach( $pics as $pic )
			$cells[] = $this->parser->parse( '_cell', (array)$pic, true );
		
		$this->load->library('table');
		$params = array(
			'table_open' => '<table class="gallery">',
			'cell_start' => '<td class="oneimage">',
			'cell_alt_start' => '<td class="oneimage">'
		);
		
		$this->table->set_template($params);
		
		$rows = $this->table->make_columns($cells, 3);
		$this->data['theTable'] = $this->table->generate($rows);
		$this->data['pagebody'] = 'gallery';
		$this->render();
	}
}