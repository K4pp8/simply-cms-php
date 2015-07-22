<?php

/**
* Classe che, da in pasto un file ritorna tutte le varie configurazioni
*/
class Config 
{
	
	protected $data;
	protected $default = null;

	public function load( $file )
	{
		$this->data = require $file;
	}

	public function get( $key , $default = null ){
		
		$this->default = $default; 
		
		$segments = explode('.', $key);
		$valore = $this->data;

		foreach ($segments as $segment ) {
			if (isset($valore[$segment])) {
				$valore = $valore[$segment];
			}else{
				$valore = $this->default;
				break;
			}
		}

		return $valore;
	}

	public function esiste($key){
		return $this->get($key) !== $this->default;
	}

}