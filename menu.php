<!--<ul class="nav navbar-nav">
	<?php 
		
		$array = array('home,Avaleht', 'search,Otsi', 'subject,Aine', 'member,Kasutaja', 'scenario, Stsenaarium', 'dashboard, Sisse logitud');
		
		foreach($array as $a){
			
			$explode = explode(",",$a);
			
			$file = $explode[0];
			$label = $explode[1];
			
			if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == $file){
				
				echo '<li class="active"><a href="'.$file.'.php">'.$label.'</a></li>';
				
			}else{
				
				echo '<li><a href="'.$file.'.php">'.$label.'</a></li>';
				
				
			}
		}
		
		
	?>
	
</ul>-->

<ul class="nav navbar-nav">
  <li ><a href="home.php" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" >Lehed</a>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
  <?php 
		
		$array = array('home,Avaleht', 'search,Otsi', 'subject,Aine', 'member,Kasutaja', 'scenario, Stsenaarium', 'dashboard, Sisse logitud');
		
		foreach($array as $a){
			
			$explode = explode(",",$a);
			
			$file = $explode[0];
			$label = $explode[1];
			
			if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == $file){
				
				echo '<li class="active"><a href="'.$file.'.php">'.$label.'</a></li>';
				
			}else{
				
				echo '<li><a href="'.$file.'.php">'.$label.'</a></li>';
				
				
			}
		}
		
		
	?>
  </ul>
  </li>
</ul>