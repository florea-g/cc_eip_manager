<?php
$req = $bdd->prepare('INSERT INTO groupe ( id_group, pseudo) VALUES ((SELECT id_group FROM project WHERE idee=:group ), :pseudo) on duplicate key update id_group=values(id_group)');
var_dump($req->execute(array(':group' => $_POST['gselect'],
    ':pseudo' => $_SESSION['user'])
));

