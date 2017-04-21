<html>
<head>
<META http-equiv=content-type content=text/html;charset=iso-8859-9>
<META http-equiv=content-type content=text/html;charset=windows-1254>
<META http-equiv=content-type content=text/html;charset=x-mac-turkish>

<style type="text/css">

			
         div.col-mod-9 { 
					width: 255px;
					
					margin: auto;
						}
         div.box { 
					width: 255px;
					height: 460px;
					border-radius: 10px;
					background:#e5d804 ;
					padding: 5px; 
					margin: auto;
						}
						div.eczane-box { 
					width: 255px;
					margin: auto;
					border-bottom: 1px solid black;
						}
						div.eczane-isim { 
					
                font-weight:    bold;
						}
						
      </style>
</head>
<body>

<?php

		$data = file_get_contents('http://www.nobetcieczaneler.org/123/aydin-kusadasi-nobetci-eczaneler.html');
		//preg_match('@<div class="eczane-isim">(.*?)</div>@si', $data, $contenteczaneisim);
		//$pattern = "/[a-zA-Z]*[:\/\/]*[A-Za-z0-9\-_]+\.+[A-Za-z0-9\.\/%&=\?\-_]+/i";
		//$replacement = "[removed]";
		//$content=str_replace($pattern,$replacement,$contenteczaneisim);
		//preg_match('@<div class="eczane-item"><strong>Adres:</strong>(.*?)</div>@si', $data, $contenteczaneadres);
		//preg_match('@<div class="eczane-item"><strong>Telefon:</strong>(.*?)</div>@si', $data, $contenteczanetelefon);
		//$content=str_replace('<h1>',"",$content);
		
		
		preg_match('@<div class="col-md-9">(.*?)<footer class="footer">@si', $data, $contenteczaneler);
		$contenteczaneler=str_replace("<h1>","<h4><strong>",$contenteczaneler);
		$contenteczaneler=str_replace("</h1>","</strong></h4>",$contenteczaneler);
		$contenteczaneler=str_replace("Adres:","",$contenteczaneler);
		
		
		?>

<div>
<?php echo $contenteczaneler[0] ?>
</div>
</body>
</html>