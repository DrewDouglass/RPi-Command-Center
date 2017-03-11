<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uptime extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$user_agent = getenv("HTTP_USER_AGENT");

		//Developing on a mac deploying on Rpi, fake it on mac
		//use linux command on Rpi
		if(strpos($user_agent, "Mac") !== FALSE) {
			exec("uptime", $system); // get the uptime stats 
			$string = $system[0]; // this might not be necessary 
			$uptime = explode(" ", $string); 
			$hours_mins = explode(":", $uptime[6]);
			$hours = $hours_mins[0];
			$minutes = $hours_mins[1];
			$message = "Pi has been up %d days, %d hours, and %d minutes";

			echo sprintf($message, $uptime[3], $hours, $minutes);
		}
		else {
			exec("uptime", $system); // get the uptime stats 
			$string = $system[0]; // this might not be necessary 
			$uptime = explode(" ", $string); 
			$message = "Pi has been up %d days.";

			echo sprintf($message, $uptime[3]);
		}
	}

}