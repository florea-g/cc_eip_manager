<?php
	function check()
	{
		GLOBAL $bdd;
		if (isset($_POST['Eid']))
		{	
			$pattern = '#[a-zA-Z0-9_r]+#';
			preg_match($pattern, $_POST['Eid'], $matches, PREG_OFFSET_CAPTURE);
            $req = $bdd->prepare("SELECT * FROM user WHERE pseudo = :pseudo");
            $req->execute(array(':pseudo' => $_POST['Eid']));
			$pseudo = $req->fetch();
			if (!empty($pseudo) || empty($matches))
			{
				return "ce nom d'utilisateur existe deja";
			}
		}
		else
		{
			return "veuillez entrer un nom d'utilisateur";
		}
		if ($_POST['fName'] == '' || strlen($_POST['fName']) < 2)
		{
            return "Votre Prenom est trop court";
		}
		if ($_POST['lName'] == '' || strlen($_POST['lName']) < 2)
		{
			return "Votre nom est trop court";
		}
		$pattern = '#[0-9]+#';
		preg_match($pattern, $_POST['password'], $matches, PREG_OFFSET_CAPTURE);
		if ($_POST['password'] == '' || $_POST['password'] != $_POST['cpassword'] || empty($matches))
		{
			return FALSE;
		}
		$pattern = '#^[a-zA-Z0-9._-]+@etna-alternance.net$#';
		preg_match($pattern, $_POST['email'], $matches, PREG_OFFSET_CAPTURE);
		if (empty($matches) || $_POST['email'] == '')
		{
			return FALSE;
		}
		return TRUE;
	}
	function register()
	{	GLOBAL $bdd;

		if ( check() == TRUE)
        {
            foreach ($_POST as $uinput)
                $uinput=htmlentities($uinput);
        $reponse = $bdd->exec("INSERT INTO user (pseudo, nom, prenom, passwd, mail, droit) VALUES ('".$_POST['Eid']."','".$_POST['fName']."', '".$_POST['lName']."', '".$_POST['password']."', '".$_POST['email']."', 1 )") ;
        	$_SESSION['droit'] = 1;
			$_SESSION['login'] = 'OK';
			$_SESSION['user'] = $_POST['Eid'];
		return TRUE;
		}
		return FALSE;
	}		
?>
