<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
    body{
    	background-color: #3b5998;
    }
		table, th, td,div {
		    border: 10px solid black;
		    border-collapse: collapse;
		    margin: auto; 
		    text-align: center;

		}
		small {
		    font-size: 20px;
		}
		a{
			color: black;
		}
		p{
			text-align: center;
			font-size: 70px;
		}
		
	</style>
</head>
<body>
	<div style="background-color:grey">
		<img src="RSS.png"width='400' height='200'>
		<img src="right.png"width='150' height='150'>
		<img src="u.png"width='400' height='200'>
	</div>
	<p>Andrew NG Channel</p>
	<br>
	
    <?php 
			 $html = "";
			//URL of your XML feed by user, playlist or channel ID
			$feed  = "https://www.youtube.com/feeds/videos.xml?channel_id=UCep6Rpvw3PtOMJWAFpKl8Yw";
			//Load feed xml file
			$xml = simplexml_load_file($feed);
			//display 6 feed entries, use more or less as desired
			for($i = 0; $i < sizeof($xml)-5; $i++) {
			   //define our feed nodes
			   $published = $xml->entry[$i]->published;
			   //optional, shorten the date
			   $shortDate = date("m/d/Y", strtotime($published));
			   $title = $xml->entry[$i]->title;
			   $id = $xml->entry[$i]->id;
			   //strip unwanted characters from ID
			   $id = str_replace ("yt:video:", "", $id);
			   $author = $xml->entry[$i]->author->name;
			   $uri = $xml->entry[$i]->author->uri;
			   $des=$xml->entry[$i]->community->startRating;
			   //put nodes into html tags & embedded youTube player.
			   $html .= "<div class='col-sm-10 col-md-4' style='background-color:#99cdff'>
			<h2 ><a href='$uri'>$title</a></h2>
			<iframe src='http://www.youtube.com/embed/$id' width='1200' height='500'allowfullscreen>
			</iframe><br>
			<br>
			<small >Published: $shortDate &nbsp; By: $author </small>
			<h1> </h1>
			</div><hr>";
			   }
			//output everything to html
			echo $html;
	?>
</tr>
</table>

</body>
</html>