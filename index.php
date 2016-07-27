<?php header( 'content-type: text/html; charset=utf-8' ); ?>


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="shortcut icon" type="image/png" href="/images/myAvatar.png" />
		<title>Chain swap</title>
	</head>
	
	<body style="margin-left:15px">
		<form method='POST' action=''>

			<p style="color:#AAAAAA">______________________________________________________________________________________</p>

			<p>Chain swap ۞v۞</p>

			<input type='text' name='contentSwap' size='100' autocomplete='off'>
			</br></br>

<?php

if (isset($_POST['contentSwap']))
{
	echo utf8_strrev($_POST['contentSwap'];);
}

function utf8_strrev($str)
{
    preg_match_all('/./us', $str, $ar);
    return implode(array_reverse($ar[0]));
}

?>

		<p style="color:#AAAAAA">______________________________________________________________________________________</p>

		
			<p>Encodeur numérique ֎v֎</p>



			<input type='text' name='contentNumEncode' size='100' autocomplete='off'>

			</br></br>

	

<?php

if (isset($_POST['contentNumEncode']))
{
	$rep = array("a"=>"01","b"=>"02","c"=>"03","d"=>"04","e"=>"05","f"=>"06","g"=>"07","h"=>"08","i"=>"09","j"=>"10","k"=>"11","l"=>"12","m"=>"13","n"=>"14","o"=>"15","p"=>"16","q"=>"17","r"=>"18","s"=>"19","t"=>"20","u"=>"21","v"=>"22","w"=>"23","x"=>"24","y"=>"25","z"=>"26","A"=>"27","B"=>"28","C"=>"29","D"=>"30","E"=>"31","F"=>"32","G"=>"33","H"=>"34","I"=>"35","J"=>"36","K"=>"37","L"=>"38","M"=>"39","N"=>"40","O"=>"41","P"=>"42","Q"=>"43","R"=>"44","S"=>"45","T"=>"46","U"=>"47","V"=>"48","W"=>"49","X"=>"50","Y"=>"51","Z"=>"52","0"=>"%$","1"=>"@$","2"=>"%#","3"=>"@&","4"=>"&%","5"=>"#%","6"=>"&$","7"=>"@#","8"=>"#&","9"=>"#$",","=>"99","?"=>"98",";"=>"97","."=>"96",":"=>"95","!"=>"94","'"=>"93",'"'=>"92","ç"=>"91","é"=>"90","è"=>"89","à"=>"88","ê"=>"87","_"=>"-_","-"=>"_-","("=>"((",")"=>"))","["=>"[[","]"=>"]]",":"=>"::","/"=>"//","="=>"<>","^"=>"--","#"=>"##","%"=>"%%","$"=>"$$","@"=>"@@","&"=>"&&");

	$_POST['contentNumEncode'] = strtr($_POST['contentNumEncode'], $rep);

	echo $_POST['contentNumEncode'];
}

?>

		<p style="color:#AAAAAA">______________________________________________________________________________________</p>
	

			<p>Décodeur numérique ۝v۝</p>


			<input type='text' name='contentNumDecode' size='100' autocomplete='off'>

			</br></br>

<?php

			if (isset($_POST['contentNumDecode']))
			{
				$tab = explode(" ", $_POST['contentNumDecode']);
				$_POST['contentNumDecode'] = "";

				$repr = array("01"=>"a","02"=>"b","03"=>"c","04"=>"d","05"=>"e","06"=>"f","07"=>"g","08"=>"h","09"=>"i","10"=>"j","11"=>"k","12"=>"l","13"=>"m","14"=>"n","15"=>"o","16"=>"p","17"=>"q","18"=>"r","19"=>"s","20"=>"t","21"=>"u","22"=>"v","23"=>"w","24"=>"x","25"=>"y","26"=>"z","27"=>"A","28"=>"B","29"=>"C","30"=>"D","31"=>"E","32"=>"F","33"=>"G","34"=>"H","35"=>"I","36"=>"J","37"=>"K","38"=>"L","39"=>"M","40"=>"N","41"=>"O","42"=>"P","43"=>"Q","44"=>"R","45"=>"S","46"=>"T","47"=>"U","48"=>"V","49"=>"W","50"=>"X","51"=>"Y","52"=>"Z","%$"=>"0","@$"=>"1","%#"=>"2","@&"=>"3","&%"=>"4","#%"=>"5","&$"=>"6","@#"=>"7","#&"=>"8","#$"=>"9","99"=>",","98"=>"?","97"=>";","96"=>".","95"=>";","94"=>"!","93"=>"'","92"=>'"',"91"=>"ç","90"=>"é","89"=>"è","88"=>"à","87"=>"ê","-_"=>"_","_-"=>"-","(("=>"(","))"=>")","[["=>"[","]]"=>"]","::"=>":","//"=>"/","<>"=>"=","--"=>"^","##"=>"#","%%"=>"%","$$"=>"$","@@"=>"@","&&"=>"&");

				for ($i=0; $i<count($tab); $i++)
				{
					$split = str_split($tab[$i], 2);

					for ($j=0; $j<count($split); $j++)
					{
						$_POST['contentNumDecode'] .= strtr($split[$j], $repr);
					}

					$_POST['contentNumDecode'] .= " ";
				}

				echo $_POST['contentNumDecode'];
			}

?>
			<p style="color:#AAAAAA">______________________________________________________________________________________</p>

			<br>

			<input type='submit' name='boutonFormChaineDecode' value='Valider'/>

		</form>

	</body>
</html>