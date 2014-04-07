<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Code Camps Prep'ETNA 2013/2014">
    <meta name="author" content="Group Code Camp EIP ">
    <title>EIP MANAGER</title>
    <link type="text/css"  rel="stylesheet" href="../style/css/bootstrap.css"> 
  </head>
  <body style="">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <?php if(!isset($_SESSION['login'])) { ?>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="images/etna_logo_eip1.jpg"></a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form" method="post" action="index.php?page=log">
            <div class="form-group">
              <input type="text" placeholder="Login" class="form-control" name="id">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="passwd">
            </div>
            <div style="color:#BDBDBD;" class="checkbox">
              <label>
                <input type="checkbox" name="saveme"> Rester Connecté
            </label>
           </div>
            <input type="submit" class="btn btn-success" value="Connection"/>
            <input type="button" class="btn btn-success" value="Inscription" onclick="self.location.href='../index.php?page=auth'"/>
            </form>
          <?php } else {?>
           <div class="btn-group" style="float: right; margin-top: 5px;">
                 <input type="buntton" class="btn btn-success" value="Déconnection" onclick="self.location.href='../index.php?page=logout'"/>
          </div>
           <?php } ?>
          <h1 style="color: white;"><?php echo $_SESSION['user'];?></h1>
        </div>
      </div>
    </div>
    <div class="jumbotron">
      <div class="container">
      <div><br /><br />
      </div>
         <?php echo $content; ?> 
        </div>
    </div> 
      <footer>
        <div class="row">
        <div class="col-md-2 col-md-offset-5">© Etna Alternance 2013<a href="index.php?page=eip"/> -FAQ- </a></div>
        </div>
      </footer>
       <link rel="javascript" type="text/javascript" href="../style/js/bootstrap.js">
  </body>
</html>
