<?php
namespace app\extensions\action;


class Identification extends \lithium\action\Controller {

	public function set($address=null)
	{
	if ( $address == "" ){return;}
	$secret = IBWT_SECRET;
			$opts = array(
			  'http'=> array(
					'method'=> "GET",
					'user_agent'=> "MozillaXYZ/1.0"));
			$context = stream_context_create($opts);
			$json = file_get_contents('http://hitarth.org/verify/addaddress/'.$secret.'/'.$address, false, $context);
			print_r($json);
			$jdec = json_decode($json);
			print_r($jdec);

			return (array)$jdec;
	}


}
?>