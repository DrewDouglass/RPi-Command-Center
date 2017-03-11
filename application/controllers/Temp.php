<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temp extends CI_Controller {
	
	public function __constructor() {
		parent::__constructor();
	}

	public function index() {
		$user_agent = getenv("HTTP_USER_AGENT");

		//Developing on a mac deploying on Rpi, fake it on mac
		//use linux command on Rpi
		if(strpos($user_agent, "Mac") !== FALSE) {
			echo rand(40, 90);
		}
		else {
			$temp = shell_exec("cat /sys/class/thermal/thermal_zone0/temp");
			$temp = substr($temp, 0, 2);
			echo $temp;
		}
	}

}