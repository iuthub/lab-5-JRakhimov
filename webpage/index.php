<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Buy Your Way to a Better Education!</h1>

		<p>
			The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
		</p>
		
		<hr />
		
		<h2>Give Us Your Money</h2>
		<form action="/lab5/sucker.php" method="POST">
			<dl>
				<dt>Name</dt>
				<dd>
					<input name="name" type="text">
				</dd>
				
				<dt>Section</dt>
				<dd>
					<select name="section"> 
						<option selectedq disabled>(Select a section)</option>
						<option value="socie">SOCIE</option>
						<option value="sol">SOL</option>
					</select>
				</dd>
				
				<dt>Credit Card</dt>
				<dd>
					<input name="card" type="number">
				</dd>
				
				<input type="radio" id="card-type-visa" name="card_type"  value="visa" checked>
				<label for="card-type-visa">Visa</label>

				<input type="radio" id="card-type-mc" name="card_type" value="master_card">
				<label for="card-type-mc">Master Card</label>
			</dl>

			<div>
				<button type="submit">I am a giant sucker.</button>
			</div>
		</form>
	</body>
</html>