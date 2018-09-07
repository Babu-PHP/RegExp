<!--
	Ref Url : https://regex101.com/
	http://www.rubular.com/regexes/5783
	https://www.regular-expressions.info/numericranges.html


-->
<h1> REGEXP PRACTICE</h1>

<script type="text/javascript">

	/*----- Sample ----------
	var patt = /e/;
	var pattern_res = patt.test("The best things in life are free!"); 
	----- End of Sample ----------*/

	/*----- First ----------
	var patt = /^[0-9A-Za-z]{3,15}$/;
	var str = "asae45qB145t14a";
	var pattern_res = patt.test(str);
	----- End of First ----------*/

	/*----- Second ----------
	var patt = /^[0-9]{1,3}$/;
	var str = "125";
	var pattern_res = patt.test(str);
	----- End of Second ----------*/

	/*----- Third ----------
	var patt = /^[0-9A-Za-z]{10}$/;
	var str = "k125Awhhfd";
	var pattern_res = patt.test(str);
	----- End of Third ----------*/

	/*----- Fourth ----------
	var patt = /^[0-9]{12}$/;
	var str = "123456789012";
	var pattern_res = patt.test(str);
	----- End of Fourth ----------*/

	/*----- Fifth ----------
	var patt = /^[0-9]{9,15}$/;
	var str = "123456789012";
	var pattern_res = patt.test(str);
	----- End of Fifth ----------*/

	/*----- Sixth ----------
	var patt = /^[0-9]{5,10}$/;
	var str = "1234567890";
	var pattern_res = patt.test(str);
	----- End of Sixth ----------*/
	
	/*----- Seventh ----------
	var patt = /^[0-9]{11}$/;
	var str = "12345678901";
	var pattern_res = patt.test(str);
	----- End of Seventh ----------*/
	
	/*----- (8) ----------
	var patt = /^[0-9]{10}$/;
	var str = "1234567890";
	var pattern_res = patt.test(str);
	----- End of (8) ----------*/
	
	/*----- (9) ----------
	var patt = /^(0[1-9]|[12][0-9]|3[01])[/](0[1-9]|1[012])[/]\d{4}$/;//[012]=>its checking 0,1 or 2
	var str = "02/01/2014";
	var pattern_res = patt.test(str);
	----- End of (9) ----------*/
	
	/*----- (10) ----------
	var patt = /^[0]{1}[1-9]{1}[0-9a-zA-z]{7,10}$/;//[0]{1}=> o should be comes only one time at position 1
	var str = "002abc123B0";//Invalid because of 0 is came at 2nd place there should be from 0-9
	var pattern_res = patt.test(str);
	----- End of (10) ----------*/
	
	/*----- (11) ----------
	var patt = /^[0-9A-Za-z/]{2,25}$/;
	var str = "00";
	var pattern_res = patt.test(str);
	----- End of (11) ----------*/
	
	/*----- (20) ----------
	var patt = /^[0-9A-Za-z\\',_+.~!@#$%^/&*]{6,30}$/;
	var str = "0Ay,\'_+ase@#@e@#se$%^/&*df!~*0";
	var pattern_res = patt.test(str);
	----- End of (20) ----------*/
	
	/*----- (37) ----------
	var patt = /^[0-9]{5}$|^[0-9]{11}$/;
	var str = "10784278754";
	var pattern_res = patt.test(str);
	----- End of (37) ----------*/
	
	/*----- (53) ----------
	var patt = /^2(?!(0|451|450|025|026|027|028|029))[0-9]{7}$/;//?!(0|450) => find the matches not follewed by 0 or 450
	var str = "25244564";
	var pattern_res = patt.test(str);
	----- End of (53) ----------*/
	
	/*----- (60) ----------
	var patt = /^(Agra)$/;
	var str = "Agra";
	var pattern_res = patt.test(str);
	----- End of (60) ----------*/
	
	/*----- (60) ----------
	----- End of (60) ----------*/
	var patt = /^[a-zA-Z\s\.]{1,120}$/;// '\s' => 
	var str = "Agra";
	var pattern_res = patt.test(str);
	

	var patt2 = "'"+patt+"'";
	if(pattern_res === false){
		alert("Invalid ( Pattern : "+patt2+" || String : '"+str+"' )");
	} else {
		alert("Valid ( Pattern : "+patt2+" || String : '"+str+"' )");
	}

</script>

<?php 
$pattern = "/^[0-9A-Za-z\\',_+.~!@#$%^/&*]{3,64}$/"; // Invalid pattern because of '/' .
$pattern2 = "/^[0-9A-Za-z\\',_+.~!@#$%^\/&*]{3,64}$/";// Valid pattern because of '\/'. Should '\' use before '/'

$pattern3 = "/^[0-9\,]{10}$/"; // In this '\,' => at least one ',' character should be there


?>