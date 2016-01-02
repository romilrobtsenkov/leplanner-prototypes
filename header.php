<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>LePlanner</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- ////////////////////// -->
    <!-- ||||||   MENU   |||||| -->
    <!-- ////////////////////// -->
    
  
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
          <?php require_once 'menu.php';?>
          
          <!--<ul class="nav navbar-nav navbar-right">
            <li class="login-home">
               <a href="login.php" class="btn btn-primary btn-sm login-top"> LOGI SISSE</a>
              <span class="login-or-create">või</span>
              <a href="#" class="btn btn-default btn-sm create-new-user-top"> LOO KASUTAJA</a>
            </li>
          </ul>-->
          
          <a class="header-login pull-right" href="login.php"> Logi sisse</a>
          
          <div class="header-search inner-addon right-addon pull-right">
            <a href="search.php"><i class="glyphicon glyphicon-search"></i></a>
            <input type="text" class="form-control" placeholder="Otsi" />
          </div>
          
        </div><!-- /.navbar-collapse -->
      
      </div>
      
    </nav>
    
    
    <!-- ///////////////////////// -->
    <!-- ||||||   CONTENT   |||||| -->
    <!-- ///////////////////////// -->
    
    <div class="container main-content">
    