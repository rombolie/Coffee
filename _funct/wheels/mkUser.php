<?php 
/* @author: K.L. Storms
 *
 * Makes a temporary user, and links a hash.
 * And than puts it in the MySql Database
*/


class mkUser{

	function __construct(){
			//
		$data = file_get_contents('../extra/sampleUsers.txt');
		$arraY = explode("\n", $data);
		$numba = rand(0, 51);
		$user = $arraY[$numba];

		$this->generate($user);

	}

	private function generate($user){




	}

	public function returnUserData(){

	}
}