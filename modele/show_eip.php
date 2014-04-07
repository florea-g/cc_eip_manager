<?php
$quer = $bdd->prepare('SELECT * FROM project
                    WHERE id_group = (SELECT id_group from groupe where pseudo = :pseudo)'); 

$quer->execute(array(':pseudo' => $_SESSION['user']));
$eip_info=$quer->fetch();
$quer =$bdd->prepare('SELECT pseudo FROM groupe where id_group = :id_group');
$quer->execute(array(':id_group' => $eip_info['id_group']));
$grp_member= $quer->fetchAll();
?>
