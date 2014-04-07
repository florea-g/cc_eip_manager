<section>
<hr />
<?php foreach ($show as $show) {
	$id_name = $show['nom'];
	$id_gr = $show['id_group'];
?>
	<?php echo '<a'.' href="../index.php?page=coms&param='.$id_gr.'">'.$id_name.'</a><br />'?>
<?php } ?>
</section>
