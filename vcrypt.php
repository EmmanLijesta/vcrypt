<?php
# By Engr. Emman Lijesta, ECE
# www.kiddyyep.com
# Vcrypt is an unbreakable encryption method,
# as long as the key is not discovered for decoding it
# used for encoding/decoding/compress/decompress string data
# use in private messaging, cookies and more...

class Vcrypt {
	# change the default k or key with a 64-char Hex, DO NOT change this key once in production
	function __construct( $t, $k = "f0971dbfe2ca3c75b4dac60f087670f2caa19781057abb432a24daee6c915e93" ) {
		$this->t = $t;
		$this->k = $k;
		$this->l = strlen($k);
	}

	protected function ver() {
		# optimized Vernam cipher algorithm
		$this->t = str_split($this->t);
		foreach( $this->t as $k=>$v ) {
			$this->t[$k] = $v ^ $this->k[$k % $this->l];
		}
		return join($this->t);
	}

	function enc() {
		# sanitizes input text, compress and encrypt using Vernam cipher
		$this->t = gzdeflate(htmlspecialchars(stripslashes(trim($this->t))), 9);
		return $this->ver();
	}

	function dec() {
		# decrypt the data and uncompress it
		$this->t = $this->ver();
		return gzinflate($this->t);
	}
}
?>
