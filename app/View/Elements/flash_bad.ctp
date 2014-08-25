<?php if(isset($message) == TRUE && is_array($message) == TRUE):?>
	<div id="errors" class="login-fail">
		<ul>
			<?php foreach ($message as $error):?>
				<?php 
					if(!empty($error) && is_array($error) == TRUE){
						foreach ($error as $mess) {
							echo "* ".$mess. "<br>";
						}
					}else{
						echo $error;
					}
				?>
			<?php endforeach;?> 
		</ul>
	</div>
<?php endif;?>