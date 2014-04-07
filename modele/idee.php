<?php

$req=$bdd->prepare('INSERT INTO project (idee, more) VALUES (:idee,:desc)');
var_dump($req->execute(array(':idee' => $_POST['idee'],
    ':desc' => $_POST['desc'])
));

