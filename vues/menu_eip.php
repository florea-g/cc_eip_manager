<img src="<?php echo $_SESSION['picture'];?>" alt="<?php echo $_SESSION['user'];?>" width="100" height="120" title="<?php echo $_SESSION['user'];?>" class="img-rounded">
<ul class="nav nav-pills">
  <li onmouseover="this.className='active'" onmouseout="this.className=''"><a href="index.php?page=panel_eip&action=show_eip">Info EIP</a></li>
  <li onmouseover="this.className='active'" onmouseout="this.className=''"><a href="index.php?page=panel_eip&action=create_eip">Gestion</a></li>
  <li onmouseover="this.className='active'" onmouseout="this.className=''"><a href="index.php?page=panel_eip&action=coms">Messagerie<span class="badge"><?php echo $nb_msg[0] ?></span></a></li>
</ul>
