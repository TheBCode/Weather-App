<?php

	if($_POST){
		
		$family = array ("Byron Sr.", "Steven", "Byron Jr.", "Steffon", "Dominique", "Breonna" );
		
		$isKnown = false;
		
		foreach ($family as $value){
			
			if ($value == $_POST['name']){
				
				$isKnown = true;
				
				}
			
			}
			
			if ($isKnown){
				
				echo "Hi there ".$_POST['name']."!";
				
				} else{
					
					echo "Who in the fuck are you ".$_POST['name']."?!";
					
					}
		
		}

?>





	<form method="post">
	
		<p>What is your name?</p>
		
		<p><input name="name" type="text"></p>
		
		<p><input type="submit" value="Submit"></p>
	
	</form>
