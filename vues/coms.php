<section>
    <table class="table table-hover">
         <tr>
        <td class="defaut"></td>
        <td class="defaut">PSEUDO</td>
        <td class="defaut">MESSAGE</td>
        <td class="defaut">DATE</td>
        </tr>

     <?php 
     if (isset($_GET['param']))
        {
            $com = aff_adm($_GET['param']);
if (empty($com)) { 
    
$coms = array();
}
else
$coms = $com->fetchAll();
}
        if (empty($coms)) {
        $author = '';
        $date = '';
        $com = '<h5>AUCUN MESSAGE</h5>';
        ?>
 <tr>
        <td class="success"></td>
        <td class="success"><?php echo $author ?></td>
        <td class="success"><?php echo $com ?></td>
        <td class="success"><?php echo $date ?></td>
        </tr>
    <?php }
       foreach ($coms as $coms) {
        $author = $coms['author'];
        $date = $coms['date'];
        $com = $coms['com'];
    ?>
        <tr>
        <td class="warning"></td>
        <td class="warning"><?php echo $author ?></td>
        <td class="warning"><?php echo $com ?></td>
        <td class="warning"><?php echo $date ?></td>
        </tr>
    <?php } ?>
    </table>
    <div class="container">
        <form id="formulaire" action="" method="post">
            <div class="span6">
                <textarea class="field span12" id="textarea" cols="100" rows="4" placeholder="Votre message de groupe" name="text_msg"></textarea>
                <input type="submit" class="btn btn-primary" value="Envoyer" name="submit"/>
            </div>
        </form>
    </div>
</section>
<?php if(isset($_POST['submit']) && !empty($_POST['text_msg']))
{
    add_com($_SESSION['user'],htmlentities($_POST['text_msg']), $_GET['param']);
    if ($_SESSION['droit'] == 1)
    header('location: index.php?page=panel_eip&action=coms');
    else
        header('location: index.php?page=coms&param='.$_GET['param'].'');
}?>