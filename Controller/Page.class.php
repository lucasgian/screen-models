<?php 

/**
* 
*/
class Page
{
	
	public function view($url)
	{
		switch ($url) 
		{
			case 'teste':
				require_once 'View/home.php';
				break;
			
			default:
				require_once VIEW.'head.php';
				require_once VIEW.'nav-bar.php';
				require_once VIEW.'home.php';
				break;
		}
	}

}

?>