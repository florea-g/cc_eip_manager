<?php
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) 
{
	include dirname(__FILE__).'/../modele/panel_eip.php';
	$nb_msg = nb_msg($_SESSION['user']);
	$user = $_SESSION['user'];
	$droit = $_SESSION['droit'];
	$login = $_SESSION['login'];
	$_SESSION['picture'] = 'https://intra.etna-alternance.net/report/trombi/image/login/'.$_SESSION['user'];
	if ($droit == 1)
		include dirname(__FILE__).'/../vues/menu_eip.php';
	else
		include dirname(__FILE__).'/../vues/admin_panel.php';
	if (isset($user) && isset($login)) 
		{
		if (isset($droit) && ($droit == 1 or $droit == 0)) 
		{
			if (isset($_GET['page']) && isset($_GET['action']))
			{
				switch ($droit) 
				{
					case '1':
						if(is_file(dirname(__FILE__).'/../controleurs/'.$_GET['action'].'.php'))
						{
							include dirname(__FILE__).'/../controleurs/'.$_GET['action'].'.php';
							break;
						}
						else
							echo 'Page inexistante';
							break;
					case '0':
						if(is_file(dirname(__FILE__).'/../controleurs/'.$_GET['action'].'.php'))
						{
							include dirname(__FILE__).'/../controleurs/'.$_GET['action'].'.php';
							break;
						}
						else
							echo 'Page inexistante';
							break;	
				}		
			}
		}
	}
}
else
{
	header('location: index.php');
}
?>
