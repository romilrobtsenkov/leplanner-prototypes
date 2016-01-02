<?php require_once 'header.php'; ?>
	
<div class="row login-page">
	
	<div class="main-login">

      <h3>Logi sisse, või <a href="#">Loo kasutaja</a></h3>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="dashboard.php" class="btn btn-lg btn-primary btn-block">Facebook</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="dashboard.php" class="btn btn-lg btn-danger btn-block">Google+</a>
        </div>
      </div>
      <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">või</span>
      </div>

      <form role="form">
        <div class="form-group">
          <label for="inputUsernameEmail">E-post</label>
          <input type="text" class="form-control" id="inputUsernameEmail">
        </div>
        <div class="form-group">
          <a class="pull-right" href="#">Unustasid salasõna?</a>
          <label for="inputPassword">Salasõna</label>
          <input type="password" class="form-control" id="inputPassword">
        </div>
        <div class="checkbox pull-right">
          <label>
            <input type="checkbox">
            Jäta mind meelde </label>
        </div>
		<a href="dashboard.php"class="btn btn-sm btn btn-primary">
	          LOGI SISSE
		</a>
      </form>
    
    </div>
	
	
</div>

<?php require_once 'footer.php'; ?>