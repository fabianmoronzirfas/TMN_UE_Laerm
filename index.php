<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">


<head>
	<title>h2*tp:2*/project.the-moron.net/UELaerm </title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="./myStylesheet.css" rel="stylesheet" media="all" type="text/css" />
 	<script src="text.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/prototype.js"></script>
	<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	
</head>

<body onload="init();">
	
	<div id="frame">
	<div id="frame2">
		<h1><script Language='JavaScript'>document.write(title.toUpperCase())</script></h1>
	
		<p class="description">
		<?php
		$linecounter = 0;
		$handle = fopen ("text.txt", "r");
		while (!feof($handle)) {
			$buffer = fgets($handle, 4096);
			$buffer = nl2br($buffer);
			if ($linecounter == 0) {
				echo "<h1>".$buffer."</p></h1>";
			} else {
				echo "<div class='description'>".$buffer."</div>";
			}
			$linecounter++;
		}
		fclose ($handle);
		
		?>
		<div class='description'><h2>images</h2>
		<?php
		$MetaPics = "MetaPics.txt";
		$fh = fopen($MetaPics,"r");
		while(!feof($fh)){
		$theData  = fread($fh,filesize($MetaPics));
		print $theData;
		}
		fclose($fh);
		?>
		</div>
		</p>

		<div id="container">
		
		<?php
			if (is_dir("movies")) {
			$count = count(glob('movies/*.mov'));
			if ($count > 0) {
				echo("<h2>VIDEO</h2>");
				$dir = @opendir("movies");
				while(($file = readdir($dir)) != false) {
					if(is_dir("/" . $file) == false) { 
						echo("<object CLASSID=\"clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B\" width=\"500\" height=\"391\" CODEBASE=\"http://www.apple.com/qtactivex/qtplugin.cab\"><param name=\"src\" value=\"movies/$file\"><param name=\"autoplay\" value=\"false\"><param name=\"loop\" value=\"true\"><param name=\"controller\" value=\"true\"><embed src=\"movies/$file\" width=\"500\" height=\"391\"  autoplay=\"false\" loop=\"false\" controller=\"true\" pluginspage=\"http://www.apple.com/quicktime/\"></embed></object><br /><br /></p>");
					}
				}
			}
			closedir($dir);
			}
		?>
		
	</div>	
	<a href="http://project.the-moron.net/projectsIndex.html"target=blanc>back to the projects index</a>	
	</div >
	</div>
	</div>
	</div>
</body>
</html>