<!DOCTYPE html>
<html lang="en">
<style media="screen" type="text/css">
body {
background-image:url(background.png);
background-repeat:no-repeat;
background-size:auto;
}   
h1 {
font-family: 'Raleway', sans-serif;
font-size: 500%;
   vertical-align: middle;
   text-align: center;
   color: #2E2E2E;
}
h2 {
font-family: 'Lato', sans-serif;
font-size: 100%;
   vertical-align: middle;
   text-align: center;
   color: #2E2E2E;
}
a:link{
  color:#2E2E2E;
}
a:visited{
  color:#2E2E2E;
}
a:hover{
  color:#2E2E2E;
}
a:focus{
  color:#2E2E2E;
}
a:active{
  color:#2E2E2E;
}
table.db-table{
	border-right:1px solid #ccc; border-bottom:1px solid #ccc;font-family: 'Lato', sans-serif;
}
table.db-table th{
	background:#eee; padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc;font-family: 'Raleway', sans-serif;
}
table.db-table td{
	padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc;font-family: 'Raleway', sans-serif;
}
</style>
<head>
	<meta charset="utf-8" />
	<title>jQuery Tags Input Test Page</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<link rel="stylesheet" type="text/css" href="jquery.tagsinput.css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.tagsinput.js"></script>
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js'></script>
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/themes/start/jquery-ui.css" />
<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript">
		
		function onAddTag(tag) {
			alert("Added a tag: " + tag);
		}
		function onRemoveTag(tag) {
			alert("Removed a tag: " + tag);
		}
		
		function onChangeTag(input,tag) {
			alert("Changed a tag: " + tag);
		}
		
		$(function() {

			$('#tags_1').tagsInput();
			$('#tags_2').tagsInput({
				onChange: function(elem, elem_tags)
				{
					var languages = ['php','ruby','javascript'];
					$('.tag', elem_tags).each(function()
					{
						if($(this).text().search(new RegExp('\\b(' + languages.join('|') + ')\\b')) >= 0)
							$(this).css('background-color', 'yellow');
					});
				}
			});
			$('#tags_3').tagsInput({
				//autocomplete_url:'test/fake_plaintext_endpoint.html' //jquery.autocomplete (not jquery ui)
				autocomplete_url:'test/fake_json_endpoint.html' // jquery ui autocomplete requires a json endpoint
			});
			

// Uncomment this line to see the callback functions in action
//			$('input.tags').tagsInput({onAddTag:onAddTag,onRemoveTag:onRemoveTag,onChange: onChangeTag});		

// Uncomment this line to see an input with no interface for adding new tags.
//			$('input.tags').tagsInput({interactive:false});
		});
	
	</script>
	
</head>
<body>
<center>
	<header>
		<h1>FriendStats!</h1>
	</header>	
	<section>
<h2>Username (Separated by Comma)</h2>	
		<form action="report.php" method="post">
			<center><input id="tags_1" name="username" type="text" class="tags" /></center>
<h2>Mode</h2>
<center><select name="mode">
  <option value="0">osu!</option>
  <option value="1">CtB</option>
  <option value="2">Taiko</option>
  <option value="3">osu!mania</option>
</select></center><br>
			<input type="submit" value="Submit">
		</form>
	</section>

</body>
