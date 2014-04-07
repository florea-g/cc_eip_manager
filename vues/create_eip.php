<?php if(isset($_SESSION['login'])) {?>
<section>
        <div class="span7">

            <div class="well">
                 <h3 class="">Idee de votre projet EIP</h3>
                <form action="index.php?page=idee" method="post">
                 <label for="textarea"  rows="1">Votre idee :</label>
                 <br />
                 <textarea id="textarea" name="idee" rows="1" cols="100"></textarea><br />
                <label for="text2">Description :</label><br />
                <textarea id=text2 name="desc" rows="3" cols="100"></textarea>
        		 <p>Vous pouvez agrandir la fenêtre</p>
                 <input type="submit"class="btn btn-primary"value="Valider" />
                </form>
            </div>

            <div class="well">
                <h3 class="">Groupe</h3>
                <p> choisisez votre groupe :</p>
                <form action="index.php?page=group" method="post">
                <label id="select">Liste des groupes</label> 
                <select id="select" name="gselect"  size="1">
<?php
foreach ($grouplist as $group)
    echo '<option>'.$group[0].'</option>';
?>
                 </select>
                <input type="submit" name="envoi" value="Joindre ce groupe">
                </form>
<?php if (isset($_GET['notif'])) echo '<p>vous avez rejoint le groupe</p>'; ?>
            </div>

            <div class="well">
                 <h3 class="">CDCF</h3>
                 	<form action="" enctype="multipart/form-data" method="post">	
							<br />
						<p>Ajoutez votre cdcf</p>
							<br />
						<input type="file" name="datafile" size="40">
						<br />
						<a href="#" class="btn btn-primary">Envoyer</a>
					</form>
            </div> 

            <div class="well">
                 <h3 class="">CDCT</h3>
                 	<form action="" enctype="multipart/form-data" method="post">      		 	
						<p>Ajoutez votre cdct</p>
							<br />
						<input type="file" name="datafile" size="40">
						<br />
						<a href="#" class="btn btn-primary">Envoyer</a>
					</form>
            </div>

            
        </div>
    </div>
</div>
</section>
<?php }else header('location: index.php'); ?>
