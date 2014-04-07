<?php if(isset($_SESSION['login'])) {?>
<section>
        <div class="span7">

            <div class="well">
                <div id="name_eip"></div>
                 <h3 class="">Nom du projet EIP</h3>
                 <p> <?php echo $eip_info['idee']; ?> </p>

            </div>

            <div class="well">
                <div id="member_eip"></div>
                 <h3 class="">Membre du groupe</h3>
<?php
foreach ($grp_member as $member)
    echo '<span style="padding: 20px;"><img style="padding:5px" src="https://intra.etna-alternance.net/report/trombi/image/login/'.$member[0].'" width="100" height="120" >'.$member[0].'</span>';
?>
            </div>

            <div class="well">
                 <h3 class="">CDCF</h3>
                    <div id="cdcf_eip"></div>
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
                    <div id="cdct_eip"></div>
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
<?php }else header('Location: index.php'); ?>
