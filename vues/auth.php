				<div class="form-group" id="formulaire">
							<form id="formulaire" action="" method="post" >
								<div class="rows" id="compare-nom-et-prenom">
									<div class="col-md-8">

										<div class="col-lg-6">
											<input onkeyup="return check_nom_prenom()" class="form-control input-lg" id="fName" name=
											"fName" placeholder="Nom" type="text" >
											<span class="tips"><font size="2">Nom et prenom identique ou contient un chiffre</font></span>
										</div>

										<div class="col-lg-6">
											<input onkeyup="return check_nom_prenom()" class="form-control input-lg" id="lName" name=
											"lName" placeholder="Prenom" type="text" >
											<span class="tips"><font size="2">Nom et prenom identique ou contient un chiffre</font></span>		
										</div>

									</div>
										
								</div>
							</div>

							

							<div class="form-group">
								<div class="rows">
									<div class="col-md-8">
										<div class="col-lg-12">
											<input class="form-control input-lg" id="Eid" name=
											"Eid" placeholder="Identifiant" type="text" >
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="rows">
									<div class="col-md-8">
										<div class="col-lg-12" id="emaildiv">
											<input  onkeyup="return check_mail()"class="form-control input-lg" id="email" name=
											"email" placeholder="E-mail @etna-alternance.net" type="text"  >
											<span class="tips"><font size="2">Mail incorrecte( example: ton_mail@etna-alternance.net)</font></span>
										</div>
									</div>
								</div>
							</div>

						<div id="pwd_test">
							<div class="form-group">
								<div class="rows">
									<div class="col-md-8">
										<div class="col-lg-12" id="pwddiv">
											<input onkeyup="return check_pwd_test()" class="form-control input-lg" id="password"
											name="password" placeholder="Mot de passe" type=
											"password"  >
											<span class="tips"><font size="2">Mot passe non identique</font></span>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="rows">
									<div class="col-md-8">
										<div class="col-lg-12">
											<input onkeyup="return check_pwd_test()" class="form-control input-lg" id="cpassword"
											name="cpassword" placeholder="Confirmer mot de passe" type=
											"password"  >
											<span class="tips"><font size="2">Mot passe non identique</font></span>
										</div>
									</div>
								</div>
							</div>
						</div>
							<div class="form-group">
								<div class="rows">
									<div class="col-md-8">
										<h4></h4>
 
										
									</div>
								</div>
							</div>
 							<div class="form-group">
								<div class="rows">
									<div class="col-md-8">
										<div class="col-lg-12">
											<button onclick="return check_submit();" class="btn btn-success btn-lg" name="submit" id="submit" value="1" type=
											"submit"> <a style="color: inherit; text-decoration: none;">S'inscriree</a></button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<!--JAVA SCRIPT-->
<script rel="javascript" type="text/javascript">
function check_nom_prenom() {  
    	var myForm = document.getElementById('compare-nom-et-prenom');
    	var spans = myForm.getElementsByTagName('span');
    	var getnom = document.getElementById('fName');
    	var getprenom = document.getElementById('lName');
    	var p = getprenom.value;
    	var n = getnom.value;

    	if ((n == p && p != '')|| (p == n && n != '') || /[0-9]/.test(n) || /[0-9]/.test(p))
        	{
        if(/[0-9-_<>.+*]/.test(n))  
        	spans[0].className = 'alert alert-danger';
        if(/[0-9-_<>.+*]/.test(p))
        	spans[1].className = 'alert alert-danger';
        if(n == p && p != '')
        	spans[0].className = 'alert alert-danger';
        	spans[1].className = 'alert alert-danger';
        	}
    	else
        	{       
        	spans[0].className = 'tips';
        	spans[1].className = 'tips';
        	}
	}


function check_pwd_test() {  
    	var myForm = document.getElementById('pwd_test');
    	var spans = myForm.getElementsByTagName('span');
    	var getnom = document.getElementById('password');
    	var getprenom = document.getElementById('cpassword');
    	var p = getprenom.value;
    	var n = getnom.value;

    	if (!(n == p && p != ''))
        	{
        	
        		spans[0].className = 'alert alert-danger';
        		spans[1].className = 'alert alert-danger';
        	}
    	else
        	{       
        	spans[0].className = 'tips';
        	spans[1].className = 'tips';
        	}
	}

function check_mail(){
    var myForm = document.getElementById('emaildiv');
    var spans = myForm.getElementsByTagName('span');
    var getemail = document.getElementById('email');
    
    if (/^[a-z0-9._-]+@etna-alternance.net$/.test(getemail.value))
        spans[0].className = 'tips';
    else
        spans[0].className = 'alert alert-danger';   
}

function check_submit(){
    var inp = document.getElementById('formulaire');
    var inputs = inp.getElementsByTagName('input');
    var spans = inp.getElementsByTagName('span');
    var inputsLength = inputs.length;
    for ( var i = 0; i < inputsLength; i++){
        if (inputs[i].value == '' || spans[i].className == 'alert alert-danger'){
            
            alert('Vous devez completez corectement les champs!');
            return false;
    }   
}
}
</script>
<!--JAVA SCRIPT FINISH-->
   		</div>