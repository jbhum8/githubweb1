<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<?php
$servername= "localhost";
$username= "joshweb"; 
$password= "mYW36s!T3";
$database= "ServerJS";

// Connect to Database 
$conn = new mysqli($servername, $username, $password, $database); 

// Check Connection 
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

echo "Connected succesfully";
?>

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1>Baseball10</h1>

		</div>
		<div id="menu">
			<ul>
				<li><a href="Baseball10.html" accesskey="1" title="">Home</a></li>
				<li><a href="profile.html" accesskey="2" title="">Profile</a></li>
				<li><a href="teams.html" accesskey="3" title="">Teams</a></li>
				<li><a href="top10.html" accesskey="4" title="">Top 10</a></li>
				<li><a href="blogs.html" accesskey="5" title="">Blogs</a></li>
			</ul> 
		</div>
		</div>

<div id="page" class="container">
	<div class="title">
<h1>Top 10</h1>
body>
<table border="collapse", width="100%">
<th>
<td class="select">PlayerID
<td Align="center"></td>
</td>
</th>
<th>
<td class="select">Teams
<td Align="center"></td>
</td>
</th>
<th>
        <td class = "select">
        <select>    
		        <option value="Month">Month</option>    
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
				<option value="July">July</option>
				<option value="August">August</option>
				<option value="September">September</option>
				<option value="October">October</option>
        </select>
        <td ALIGN="center"></td>
        </td>   
    </th>
  <th>
        <td class = "select">
        <select> 
		        <option value="Year">Year</option>   
				<option value="2000">2000</option>
				<option value="2001">2001</option>  
				<option value="2002">2002</option>  
				<option value="2003">2003</option>
				<option value="2004">2004</option>
				<option value="2005">2005</option>
				<option value="2006">2006</option>
				<option value="2007">2007</option>
				<option value="2008">2008</option>
				<option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
        </select>
        <td ALIGN="center"></td>
        </td>   
    </th>
</table>
</body>
<h2>AL Leaders </h2>
<h3>AL Batting Average</h3>	
<table border="collapse", width="100%">
<tr>
  <th>Player</th>
  <th>Team</th>
  <th>BA(2017)</th>
  <th>BA(2016)</th>
</tr>
<tr>
  <td>Jose Altuve</td>
  <td>HOU</td>
  <td>.346</td>
  <td>.323</td>
</tr>
<tr>
  <td>Avisail Garcia</td>
  <td>CHW</td>
  <td>.330</td>
  <td>.250</td>
</tr>
<tr>
  <td>Eric Hosmer</td>
  <td>KC</td>
  <td>.318</td>
  <td>.284</td>
</tr>
<tr>
  <td>Josh Reddick</td>
  <td>HOU</td>
  <td>.314</td>
  <td>.279</td>
</tr>
<tr>
  <td>Jose Ramirez</td>
  <td>CLE</td>
  <td>.318</td>
  <td>.312</td>
</tr>
<tr>
  <td>Mike Trout</td>
  <td>LAA</td>
  <td>.306</td>
  <td>.286</td>
</tr>
<tr>
  <td>Joe Mauer</td>
  <td>MIN</td>
  <td>.305</td>
  <td>.272</td>
</tr>
<tr>
  <td>Jose Abreu</td>
  <td>CHW</td>
  <td>.304</td>
  <td>.281</td>
</tr>
<tr>
  <td>Marwin Gonzalez</td>
  <td>HOU</td>
  <td>.303</td>
  <td>.254</td>
</tr>
<tr>
 <td>Lorenzo Cain</td>
 <td>KC</td>
 <td>.300</td>
 <td>.295</td>
</tr>
</table>

<h3> AL Home Runs </h3> 

<table border="collapse" width="100%">
<tr>
  <th>Player</th>
  <th>Team</th>
  <th>HR(2017)</th>
  <th>HR(2016)</th>
</tr>
<tr>
  <td>Aaron Judge</td>
  <td>NYY</td>
  <td>52</td>
  <td>4</td>
</tr>
<tr>
  <td>Khris Davis</td>
  <td>OAK</td>
  <td>43</td>
  <td>42</td>
</tr>
<tr>
  <td>Joey Gallo</td>
  <td>TEX</td>
  <td>41</td>
  <td>1</td>
</tr>
<tr>
  <td>Nelson Cruz</td>
  <td>SEA</td>
  <td>39</td>
  <td>43</td>
</tr>
<tr>
  <td>Edwin Encarnacion</td>
  <td>CLE</td>
  <td>38</td>
  <td>42</td>
</tr>
<tr>
  <td>Mike Moustakas</td>
  <td>KC</td>
  <td>38</td>
  <td>7</td>
</tr>
<tr>
  <td>Justin Smoak</td>
  <td>TOR</td>
  <td>38</td>
  <td>14</td>
</tr>
<tr>
  <td>Logan Morrison</td>
  <td>TB</td>
  <td>38</td>
  <td>14</td>
</tr>
<tr>
  <td>Justin Upton</td>
  <td>LAA/DET</td>
  <td>35</td>
  <td>31</td>
</tr>
<tr>
  <td>Brian Dozier</td>
  <td>MIN</td>
  <td>34</td>
  <td>42</td>
</tr>
</table>
<h3> AL RBI </h3> 

<table border="collapse" width="100%">
<tr>
  <th>Player</th>
  <th>Team</th>
  <th>RBI(2017)</th>
  <th>RBI(2016)</th>
</tr>
<tr>
  <td>Nelson Cruz</td>
  <td>SEA</td>
  <td>119</td>
  <td>107</td>
</tr>
<tr>
  <td>Aaron Judge</td>
  <td>NYY</td>
  <td>114</td>
  <td>10</td>
</tr>
<tr>
  <td>Khris Davis</td>
  <td>OAK</td>
  <td>110</td>
  <td>103</td>
</tr>
<tr>
  <td>Justin Upton</td>
  <td>LAA/DET</td>
  <td>109</td>
  <td>87</td>
</tr>
<tr>
  <td>Edwin Encarnacion</td>
  <td>CLE</td>
  <td>107</td>
  <td>129</td>
</tr>
<tr>
  <td>Jonathan Schoop</td>
  <td>BAL</td>
  <td>105</td>
  <td>83</td>
</tr>
<tr>
  <td>Mookie Betts</td>
  <td>BOS</td>
  <td>102</td>
  <td>116</td>
</tr>
<tr>
  <td>Jose Abreu</td>
  <td>CHW</td>
  <td>102</td>
  <td>103</td>
</tr>
<tr>
  <td>Albert Pujols</td>
  <td>LAA</td>
  <td>101</td>
  <td>120</td>
</tr>
<tr>
  <td>Nicholas Castellanos</td>
  <td>DET</td>
  <td>101</td>
  <td>58</td>
</tr>
</table>


<h2> NL Batting Leaders </h2>


<h3> NL Batting Average </h3> 
319
<table border="collapse" width="100%">
<tr>
  <th>Player</th>
  <th>Team</th>
  <th>BA(2017)</th>
  <th>BA(2016)</th>
</tr>
<tr>
  <td>Charlie Blackman</td>
  <td>COL</td>
  <td>.337</td>
  <td>.311</td>
</tr>
<tr>
  <td>Daniel Murphy</td>
  <td>WSH</td>
  <td>.322</td>
  <td>.343</td>
</tr>
<tr>
  <td>Justin Turner</td>
  <td>LAD</td>
  <td>.322</td>
  <td>.263</td>
</tr>
<tr>
  <td>Joey Votto</td>
  <td>CIN</td>
  <td>.320</td>
  <td>.335</td>
</tr>
<tr>
  <td>Buster Posey</td>
  <td>SF</td>
  <td>.320</td>
  <td>.283</td>
</tr>
<tr>
  <td>Marcell Ozuna</td>
  <td>MIA</td>
  <td>.312</td>
  <td>.274</td>
</tr>
<tr>
  <td>DJ Lemahieu</td>
  <td>COL</td>
  <td>.310</td>
  <td>.356</td>
</tr>
<tr>
  <td>Nolan Arenado</td>
  <td>COL</td>
  <td>.309</td>
  <td>.286</td>
</tr>
<tr>
  <td>Dee Gordon</td>
  <td>MIA</td>
  <td>.308</td>
  <td>.267</td>
</tr>
<tr>
  <td>Freddie Freeman</td>
  <td>ATL</td>
  <td>.307</td>
  <td>.283</td>
</tr>
</table>

<h3> NL Home Runs </h3> 

<table border="collapse" width="100%">
<tr>
  <th>Player</th>
  <th>Team</th>
  <th>HR(2017)</th>
  <th>HR(2016)</th>
</tr>
<tr>
  <td>Giancario Stanton</td>
  <td>MIA</td>
  <td>59</td>
  <td>27</td>
</tr>
<tr>
  <td>Cody Bellinger</td>
  <td>LAD</td>
  <td>39</td>
  <td>0</td>
</tr>
<tr>
  <td>Charlie Blackmon</td>
  <td>CIN</td>
  <td>37</td>
  <td>29</td>
</tr>
<tr>
  <td>Nolan Arenado</td>
  <td>COL</td>
  <td>37</td>
  <td>41</td>
</tr>
<tr>
  <td>Marcell Ozuna</td>
  <td>MIA</td>
  <td>37</td>
  <td>23</td>
</tr>
<tr>
  <td>Ryan Zimmerman</td>
  <td>WSH</td>
  <td>36</td>
  <td>15</td>
</tr>
<tr>
  <td>Joey Votto</td>
  <td>CIN</td>
  <td>36</td>
  <td>29</td>
</tr>
<tr>
  <td>Paul Goldschmidt</td>
  <td>ARI</td>
  <td>36</td>
  <td>24</td>
</tr>
<tr>
  <td>Anthony Rizzo</td>
  <td>CHC</td>
  <td>32</td>
  <td>32</td>
</tr>
<tr>
  <td>Eric Thames</td>
  <td>MIL</td>
  <td>31</td>
  <td>0</td>
</tr>

</table>

<h3> NL RBI </h3> 

<table border="collapse" width="100%">
<tr>
  <th>Player</th>
  <th>Team</th>
  <th>RBI(2017)</th>
  <th>RBI(2016)</th>
</tr>
<tr>
  <td>Giancarlo Stanton</td>
  <td>MIA</td>
  <td>132</td>
  <td>74</td>
</tr>
<tr>
  <td>Nolan Arenado</td>
  <td>COL</td>
  <td>130</td>
  <td>133</td>
</tr>
<tr>
  <td>Marcell Ozuna</td>
  <td>MIA</td>
  <td>124</td>
  <td>76</td>
<tr>
  <td>Paul Goldshmidt</td>
  <td>ARI</td>
  <td>120</td>
  <td>96</td>
</tr>
<tr>
  <td>Anthony Rizzo</td>
  <td>CHC</td>
  <td>109</td>
  <td>111</td>
</tr>
<tr>
  <td>Ryan Zimmerman</td>
  <td>WSH</td>
  <td>108</td>
  <td>47</td>
</tr>
<tr>
  <td>Jake Lamb</td>
  <td>ARI</td>
  <td>105</td>
  <td>91</td>
</tr>
<tr>
  <td>Charlie Blackmon</td>
  <td>COL</td>
  <td>104</td>
  <td>82</td>
</tr>
<tr> 
  <td>Travis Shaw</td>
  <td>MIL</td>
  <td>101</td>
  <td>73</td>
</tr>
<tr>
  <td>Joey Votto</td>
  <td>CIN</td>
  <td>100</td>
  <td>97</td>
</tr>
</table>
</div>
</div>

	<h2> Top 10 On base hits based on games played </h2>


<?php
// Select from Table 
$sql= 'Select * From intstats2016 Order By gp DESC limit 10';
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {

// set up the html table 
echo "<table><tr><th>id</th><th>gp</th><th>hr_total</th><th>single_total</th><th>double_total</th><th>triple_total</th></tr>";

// output data of each row 
while ($row = $result->fetch_assoc()) {
echo "<tr><td>". $row["id"]. "</td><td>".$row["gp"]."</td><td>".$row["hr_total"]."</td><td>".$row["single_total"]."</td><td>".$row["double_total"]."</td><td>".$row["triple_total"]."</td><td>";
 }
echo "</table>";
}
else {
echo "No Results";
}
$conn->close();
?>


     <h2> Top 10 Stolen bases </h2>
<?php
// Select from Table 
$sql= "Select * From basic_hitting_month Order By stolen_base DESC limit 10";
$result = $conn->query($sql);

// set up the html table 
//echo "<table><tr><th>id</th><th>gp</th><th>sb</th><th>stealattempt</th><th>cs</th></tr>";
// output data of each row 
//echo "<tr><td>". $row["ID"]. "</td><td>".$row["gameID"]."</td><td>".$row["stolen_base"]."</td><td>".$row["stealattempt"]."</td><td>".$row["caught_stealing"]."</td><td>".;

if (mysqli_num_rows($result) > 0) {
	
	echo "<table><tr><th>id</th><th>gp</th><th>sb</th><th>cs</th></tr>";

	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>". $row["ID"]. "</td><td>".$row["gameID"]."</td><td>".$row["stolen_base"]."</td><td>"."</td><td>".$row["caught_stealing"]."</td><td>".;
	 }
	echo "</table>";
}
else {
	echo "No Results";
}
$conn->close();
?>

  <h2> Top 10 left on base </h2>
<?php
// Select from Table 
$sql= 'Select * From intstats2016 Order By lob DESC limit 10';
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {

// set up the html table 
echo "<table><tr><th>id</th><th>gp</th><th>lob</th><th>ab_lob</th><th>dp_lob</th><th>tp_lob</th></tr>";

// output data of each row 
while ($row = $result->fetch_assoc()) {
echo "<tr><td>". $row["id"]. "</td><td>".$row["gp"]."</td><td>".$row["lob"]."</td><td>".$row["ab_lob"]."</td><td>".$row["dp_lob"]."</td><td>".$row["tp_lob"]."</td><td>";
 }
echo "</table>";
}
else {
echo "No Results";
}
$conn->close();
?>

<body>
<div class="navbar">
<a href="#PlayerID">PlayerID</a>
<a href="#Teams">Teams</a>
<div class="dropdown">
 <button class-"dropbtn" onclick="myFunction()">Month
  <i class-"fa fa-caret-down"></i>
</button>
<div class="dropdown-content" id="dropdown">
  <a href="#April">April</a>
  <a href="#May">May</a>
  <a href="#June">June</a>
  <a href="#July">July</a>
  <a href="#August">August</a>
  <a href="#September">September</a>
  <a href="#October">October</a>
<div class="dropdown">
 <button class-"dropbtn" onclick="myFunction()">Year
   <i class-"fa fa-caret-down"></i>
</button>
<div class="dropdown-content" id="dropdown">
  <a href="#2010">2010</a>
  <a href="#2011">2011</a>
  <a href="#2012">2012</a>
  <a href="#2013">2013</a>
  <a href="#2014">2014</a>
  <a href="#2015">2015</a>
  <a href="#2016">2016</a>
</div>
</div>
</div>
</div>
</div>
</body>

<script>
/*When the user clicks on the button, toggle between hiding and showing the dropdown content */
function myFunction() {
 document.getElementByID("myDropdown").classList.toggle("show");
}

//Close the dropdown if the user clicks outside of it 
window.onclick= function(e) {
 if (!e.target.matches('.dropbtn')) {
  var myDropdown= document.getElementByID("myDropdown");
   if (myDropdown.classList.contains('show')) {
    myDropdown.classList.remove('show');
 }
}
}
</script>

1:53 PM 12/5/2017 
	<div id="copyright" class="container"> 
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://humling.com/">HUMLING</a> | Design by <a href="http://humling.co" rel="nofollow">HUMLING</a>.</p>
</div>
</html>
