<!DOCTYPE html>
<html>
<head>
	<title>Contact Page</title>
	<?php include'includes/head.php' ?>
</head>
<body rel="3">
	<?php include'includes/header.php' ?>

	<div class="ui segment orange raised">

		<form class="ui form fluid">

			<div class="fields">

				<div class="two wide field inline">
					<div id="TitleMrMrs" class="ui label pointing below red"><i class="icon asterisk"></i>Title</div>
					<div class="ui dropdown selection">
						<input type="hidden" id="value" />
						<div class="default text">Title<br></div>

						<i class="icon dropdown"></i>
						<div class="menu">
							<div class="item" data-value="0"><i class="icon user circular inverted teal"></i>Mr.</div>
							<div class="item" data-value="1"><i class="icon user circular inverted teal"></i>Mrs.</div>
						</div>
					</div>
				</div>

				<div class="seven wide field">
					<div class="ui label pointing below red"><i class="icon asterisk"></i>First Name</div>
					<input type="text" />
				</div>

				<div class="seven wide field">
					<div class="ui label pointing below red"><i class="icon asterisk"></i>Last Name</div>
					<input type="text" />
				</div>
				
			</div>	

			<div class="field">
				<div class="ui label pointing below red"><i class="icon asterisk"></i>Email</div>
				<input type="text" />
			</div>

			<div class="fields">
				<div class="field ten wide">
					<div class="ui label pointing below red"><i class="icon asterisk"></i>Message</div>
					<textarea></textarea>
				</div>

				<div class="field six wide">
					<div class="ui label pointing below teal">Where did you hear about us?</div>
					<div class="grouped fields vertical">
						<div class="field">
							<div class="ui checkbox radio">
								<input type="radio" name="Advert" checked="checked" />
								<label>Internet</label>
							</div>
						</div>
						<div class="field">
							<div class="ui checkbox radio">
								<input type="radio" name="Advert" />
								<label>Advertising</label>
							</div>
						</div>
						<div class="field">
							<div class="ui checkbox radio">
								<input type="radio" name="Advert" />
								<label>From Your Friends</label>
							</div>
						</div>
						<div class="field">
							<div class="ui checkbox radio">
								<input type="radio" name="Advert" />
								<label>Other</label>
							</div>
						</div>
					</div>
				</div>					
			</div>

			<div class="ui segment">
				<div class="field">
					<div id="agree" class="ui checkbox slider">
						<input type="checkbox" />
						<label>Say OK before submit</label>
					</div>
					<div id="submit" class="ui button submit labeled icon red small">
						<i class="icon edit"></i>
						Submit
					</div>
				</div>
			</div>

		</form>
		
	</div>

	<?php include'includes/footer.php' ?>
</body>
</html>