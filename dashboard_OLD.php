<!DOCTYPE html>
<html lang="en" style="height:100%;">
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

  <body style="height:100%;">

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
          
          
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="btn btn-success btn-sm add-new-top-button"><span class="glyphicon glyphicon-plus"></span> ÕPISTSENAARIUM</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle contains-profile-img" data-toggle="dropdown" role="button" aria-expanded="false"><img class="profile-image" src="./assets/profile.jpeg"> romilrobtsenkov <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Profiil</a></li>
                <li><a href="#">Lemmikud</a></li>
                <li><a href="#">Jälgitavad</a></li>
                <li class="divider"></li>
                <li><a href="#">Sätted</a></li>
                <li><a href="#">Logi välja</a></li>
              </ul>
            </li>
          </ul>
          
          <div class="header-search search-dash inner-addon right-addon pull-right">
           <i class="glyphicon glyphicon-search"></i>
            <input type="text" class="form-control" placeholder="Otsi" />
          </div>
          
          
        </div><!-- /.navbar-collapse -->
      
      </div>
      
    </nav>
    
    
    <!-- ///////////////////////// -->
    <!-- ||||||   CONTENT   |||||| -->
    <!-- ///////////////////////// -->
    
    <div class="container main-content"  style="height:100%; margin-bottom:-80px;">

      
      <div class="row dashboard" style="height:100%; margin-top:-80px; padding-top:80px;">
        
        
        <div class="col-sm-2 side-menu">
          
          <nav class="navbar navbar-default" role="navigation">
        
            <div class="side-menu-container">
                
                <ul class="nav navbar-nav">
        
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Voog <span class="badge">5</span></a></li>
                      <li><a href="#"><span class="glyphicon glyphicon glyphicon-file"></span> <strong>Mustandid</strong></a></li>
                      <li><a href="#"><span class="glyphicon glyphicon-globe"></span> Avasta</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-heart"></span> Lemmikud</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Jälgitavad</a></li>
                    
                </ul>
            </div>
        </nav>
          
      
			
   	    </div><!-- /.sidemenu -->
	
        
        <div class="col-sm-7" style="height:100%; margin-bottom:-80px;">
         
           <!-- <div class="input-group search">
            <input type="text" class="form-control" placeholder="Otsi...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
            </span>
          </div><!-- /input-group -->
          
          <div class="dashboard-main-content">
                
                
                    <?php require 'single_list_scenario_dash.php';?>
                    <hr>
                    <?php require 'single_list_scenario_dash.php';?>
                    <hr>
                    <?php require 'single_list_scenario_dash.php';?>
               
               
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <a class="black-link" href="member.php">
                      <h3 class="panel-title"><img style=" width: 40px; margin-right: 10px;" src="./assets/profile.jpeg"> Romil Rõbtšenkov <span class="badge">2</span></h3>
                    </a>
                  </div>
                  <div class="panel-body">
                    <?php require 'single_list_scenario_dash.php';?>
                    <hr>
                    <?php require 'single_list_scenario_dash.php';?>
                  </div>
                </div>
                <div class="panel panel-warning">
                  <div class="panel-heading">
                    <h3 class="panel-title">iPad</h3>
                  </div>
                  <div class="panel-body">
                    <?php require 'single_list_scenario_dash.php';?>
                    <hr>
                    <?php require 'single_list_scenario_dash.php';?>
                  </div>
                </div>
                <div class="panel panel-danger">
                  <div class="panel-heading">
                    <h3 class="panel-title">YouTube</h3>
                  </div>
                  <div class="panel-body">
                    <?php require 'single_list_scenario_dash.php';?>
                    <hr>
                    <?php require 'single_list_scenario_dash.php';?>
                    <hr>
                    <?php require 'single_list_scenario_dash.php';?>
                  </div>
                </div>
                
                <!--  LOADING -->
                <p class="loading-gif-animation"><img src="./assets/loading.gif"></p>
                
          </div>
			
   	    </div>
         
          
        <div class="col-sm-3">
          
          <!-- <ul class="nav nav-tabs nav-tab-pop">
            <li role="presentation" class="active"><a href="#">Teated <span class="badge">1</span></a></li>
            
          </ul>-->
          
          <h3>Teated</h3>
          	
            <!--  Teated -->
          <div class="panel panel-default">
              
              <div class="panel-collapse">
                  <div class="panel-body">
                      <ul class="notifications">
                        
                          <li class="left clearfix new">
                              <span class="notification-img pull-left">
                                <img src="./assets/profile.jpeg" alt="User Avatar" class="img-circle" />
                              </span>
                              <div class="notification-body clearfix">
                                  <div class="header">
                                    <p>
                                      <a href="member.php"><strong class="primary-font">Romil Rõbtšenkov</strong></a> 
                                      <small class="pull-left text-muted clearfix">
                                        <span class="glyphicon glyphicon-time"></span>
                                        12 min tagasi
                                      </small>
                                     </p>
                                  </div>
                                  <p class="content-for-notification">
                                      Lisas kommentaari Sinu õpistsenaariumile "<a href="scenario.php">Õuseõpe bioloogia tunnis</a>"
                                  </p>
                              </div>
                          </li>
                          <li class="left clearfix">
                              <span class="notification-img pull-left">
                                <img src="./assets/profile.jpeg" alt="User Avatar" class="img-circle" />
                              </span>
                              <div class="notification-body clearfix">
                                  <div class="header">
                                    <p>
                                      <a href="member.php"><strong class="primary-font">Romil Rõbtšenkov</strong></a> 
                                      <small class="pull-left text-muted clearfix">
                                        <span class="glyphicon glyphicon-time"></span>
                                        22 min tagasi
                                      </small>
                                     </p>
                                  </div>
                                  <p class="content-for-notification">
                                      Lisas kommentaari Sinu õpistsenaariumile "<a href="scenario.php">Õuseõpe bioloogia tunnis</a>"
                                  </p>
                              </div>
                          </li>
                          <li class="left clearfix">
                              <span class="notification-img pull-left">
                                <img src="./assets/profile.jpeg" alt="User Avatar" class="img-circle" />
                              </span>
                              <div class="notification-body clearfix">
                                  <div class="header">
                                    <p>
                                      <a href="member.php"><strong class="primary-font">Romil Rõbtšenkov</strong></a> 
                                      <small class="pull-left text-muted clearfix">
                                        <span class="glyphicon glyphicon-time"></span>
                                        22 min tagasi
                                      </small>
                                     </p>
                                  </div>
                                  <p class="content-for-notification">
                                      Lisas kommentaari Sinu õpistsenaariumile "<a href="scenario.php">Õuseõpe bioloogia tunnis</a>"
                                  </p>
                              </div>
                          </li>
                          <li class="left clearfix">
                              <span class="notification-img pull-left">
                                <img src="./assets/profile.jpeg" alt="User Avatar" class="img-circle" />
                              </span>
                              <div class="notification-body clearfix">
                                  <div class="header">
                                    <p>
                                      <a href="member.php"><strong class="primary-font">Romil Rõbtšenkov</strong></a> 
                                      <small class="pull-left text-muted clearfix">
                                        <span class="glyphicon glyphicon-time"></span>
                                        22 min tagasi
                                      </small>
                                     </p>
                                  </div>
                                  <p class="content-for-notification">
                                      Lisas kommentaari Sinu õpistsenaariumile "<a href="scenario.php">Õuseõpe bioloogia tunnis</a>"
                                  </p>
                              </div>
                          </li>
                          <li class="left clearfix">
                              <span class="notification-img pull-left">
                                <img src="./assets/profile.jpeg" alt="User Avatar" class="img-circle" />
                              </span>
                              <div class="notification-body clearfix">
                                  <div class="header">
                                    <p>
                                      <a href="member.php"><strong class="primary-font">Romil Rõbtšenkov</strong></a> 
                                      <small class="pull-left text-muted clearfix">
                                        <span class="glyphicon glyphicon-time"></span>
                                        22 min tagasi
                                      </small>
                                     </p>
                                  </div>
                                  <p class="content-for-notification">
                                      Lisas kommentaari Sinu õpistsenaariumile "<a href="scenario.php">Õuseõpe bioloogia tunnis</a>"
                                  </p>
                              </div>
                          </li>
                         
                      </ul>
                  </div>
                  <div class="panel-footer clearfix">
                     <a hred ="#" class="pull-right" >Vaata kõiki</a>
                  </div>
              </div>
            </div>
			
   	    </div>
      
      
      
      
      </div> 
     


    <?php //require_once 'footer.php'; ?>