<!DOCTYPE HTML>
<html>
<head>
	<title>Ajax and Database test</title>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script>
		function show(shown, hidden) {
		  document.getElementById(shown).style.display='block';
		  document.getElementById(hidden).style.display='none';
		  return false;
		}
	</script>
	<script>
					$(function(){
					    $('#form').on('submit', function(e){
					        e.preventDefault();
					        $.ajax({
					            url: "database.php", //this is the submit URL
					            type: 'POST', //or POST
					            data: $('#form').serialize(),
					            success: show('submitform','form')
					        });
					    });
					});
					</script>
</head>
<body>
	<form action="" method="post" id="form">
		<p>Name: <input type="text" name="name"></p>
		<p>Email: <input type="text" name="email"></p>
		<input type="submit" value="Submit" name="submit">
	</form>

	<div id="submitform" style="display:none"><p>Your information has been submitted</p></div>
</body>
</html>