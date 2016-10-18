<?php

Namespace Junmartin\Test_lvl;
class Purchase{
	protected $doc_no;

	public function __construct($value='')
	{
		$this->doc_no = $value;
	}
	public function get_doc_no()
	{
		//return $this->$doc_no."_123";
		return "0123";
	}
}