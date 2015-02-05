<!DOCTYPE html>
<html>
<head>
	<title>Contact Page</title>
	<?php include'includes/head.php' ?>
</head>
<body rel="3">
	<?php include'includes/header.php' ?>
		<div class="ui attached blue message center aligned grid">
			<div class="header">
				Have you heard about Us before?
			</div>
	  		<p>Feel free to write Us a message today!</p>
		</div>
		<div class="ui segment orange raised">
			<form class="ui form fluid">							
				<div class="fields">				
					<div class="eight wide field">					
						<div class="ui left icon input corner labeled">											
							<input type="text" name="firstName" placeholder="First Name" />
							<i class="icon user"></i>
							<div class="ui corner label">
								<i class="asterisk icon"></i>
							</div>
						</div>						
					</div>

					<div class="eight wide field">					
						<div class="ui left icon input corner labeled">											
							<input type="text" name="lastName" placeholder="Last Name" />
							<i class="icon user"></i>
							<div class="ui corner label">
								<i class="asterisk icon"></i>
							</div>
						</div>						
					</div>									
				</div>

				<div class="field">					
					<div class="ui left icon input corner labeled">											
						<input type="text" name="email" placeholder="E-mail" />
						<i class="icon mail"></i>
						<div class="ui corner label">
							<i class="asterisk icon"></i>
						</div>
					</div>						
				</div>

				<div class="field ten wide">					
					<div class="ui corner labeled input">											
						<textarea name="message" placeholder="Enter your message" ></textarea>
						
						<div class="ui corner label">
							<i class="asterisk icon"></i>
						</div>
					</div>						
				</div>		



			
			

			<div class="ui segment">
				<div class="field">
					<div id="agree" class="ui checkbox slider">
				      <input type="checkbox" name="terms">
				      <label>Say Okay before submit</label>
				    </div>
					<div id="submit" class="ui button submit labeled icon green small">
						<i class="icon checkmark"></i>
						Submit
					</div>
				</div>
			</div>

		</form>
	</div>

	

	<?php include'includes/footer.php' ?>
</body>
</html>			