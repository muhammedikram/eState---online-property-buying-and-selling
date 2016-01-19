<?php

namespace File;

class JavaScript extends File
{
	public function minify()
	{
		$jsMin = new \Phalcon\Assets\Filters\JSMin();
		
		
		
		$code = $this->read();
		
		$minifiedCode = trim($jsMin->filter($code));
		
		return $minifiedCode;
	}
}