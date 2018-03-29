<?php 

class CamUyen{
	private $non_static_member = 1;
	private static $static_member = 2;

	function __construct(){
		echo $this->non_static_member.' '
			.self::$static_member.' ';

		echo ($this->non_static_member+1).' ';
		echo (self::$static_member+1).' ';
	}
}

new CamUyen;

?>