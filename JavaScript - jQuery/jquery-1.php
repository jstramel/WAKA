<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Search Artist Catalog</title>
</head>
<body>
  <h3>Search Artist Catalog</h3>
  <p>Please enter the name of the artist: <input id="artist" type="text" /></p>
<input id="searchButton" type="button" value="Search"/>
<div id="response"></div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $("#searchButton").click(function(){
    var artist = $('#artist').val();
    $.getJSON('artistLookup.php', {name: artist}, function(data){
      $('#response').html("<p>There are "+ data.songCount + " songs in the catalog for " + artist + "</p>");
    });
  });
});
</script>
</body>
</html>
