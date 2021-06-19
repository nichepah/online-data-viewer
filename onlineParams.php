<html>
<head>
<!-- written by Aneesh PA of RDCIS on Jan 20, 2015 -->
<title>Online Display of Process Parameters of Machine#2 of Sintering Plang BSL</title>
<style>
#header {
    background-color:black;
    color:white;
    text-align:center;
    padding:5px;
}

#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;	 	 
}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}
</style>
</head>
<body>
<div id="header">
<h1>Process Parameters of Machine#2, Sintering Plant, BSL</h1>
</div>

<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('TagsSqlite3.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      //echo "Opened database successfully\n";
      
   }

   $sql =<<<EOF
      SELECT * from opcdata order by id desc limit 1;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
     	echo '<table style="float: left; width:25%">';
	echo "<tr><td>Machine Speed : </td><td>". $row['val1']."</td></tr>";
	echo "<tr><td>BallingDrum#3 Speed : </td><td>". $row['val2']."</td></tr>";
	echo "<tr><td>StraightLineCooler Speed : </td><td>". $row['val3']."</td></tr>";
	echo "<tr><td>AirFlow : </td><td>". $row['val4']."</td></tr>";
	echo "<tr><td>WeighFeeder#1 : </td><td>". $row['val5']."</td></tr>";
	echo "<tr><td>WeighFeeder#2 : </td><td>". $row['val6']."</td></tr>";
	echo "<tr><td>WeighFeeder#3 : </td><td>". $row['val7']."</td></tr>";
	echo "<tr><td>WeighFeeder#4 : </td><td>". $row['val8']."</td></tr>";
	echo "<tr><td>HopperLevel : </td><td>". $row['val9']."</td></tr>";
	echo "<tr><td>BallingDrum#3 Speed : </td><td>". $row['val10']."</td></tr>";	
	echo "<tr><td>BallingDrum#4 Speed : </td><td>". $row['val11']."</td></tr>";
	echo "<tr><td>Water_3 Flow : </td><td>". $row['val12']."</td></tr>";
	echo "<tr><td>Water_4 Flow : </td><td>". $row['val13']."</td></tr>";
	echo "<tr><td>MoistureMeter_1 : </td><td>". $row['val14']."</td></tr>";
	echo "</table>";
	
	echo '<table style="float: left; width:25%">';
	echo "<tr><td>MoistureMeter_2 : </td><td>". $row['val15']."</td></tr>";
	echo "<tr><td>CO Pressure : </td><td>". $row['val16']."</td></tr>";
	echo "<tr><td>MixGas Pressure : </td><td>". $row['val17']."</td></tr>";
	echo "<tr><td>MixGasFlow PV : </td><td>". $row['val18']."</td></tr>";
	echo "<tr><td>AirFlow PV : </td><td>". $row['val19']."</td></tr>";
	echo "<tr><td>HearthTemp2_BF : </td><td>". $row['val20']."</td></tr>";	
	echo "<tr><td>HearthSuction_PR2_2W : </td><td>". $row['val21']."</td></tr>";
	echo "<tr><td>MainCollector Suction : </td><td>". $row['val22']."</td></tr>";
	echo "<tr><td>MC_Temp : </td><td>". $row['val23']."</td></tr>";
	echo "<tr><td>Grease Pressure : </td><td>". $row['val24']."</td></tr>";
	echo "<tr><td>Ex3 Vibration : </td><td>". $row['val25']."</td></tr>";
	echo "<tr><td>Ex4 Vibration : </td><td>". $row['val26']."</td></tr>";
	echo "<tr><td>Ex3 Suction : </td><td>". $row['val27']."</td></tr>";
	echo "<tr><td>Ex4 Suction : </td><td>". $row['val28']."</td></tr>";
	echo "</table>";	
	
	echo '<table style="float: left; width:25%">';
	echo "<tr><td>WindBoxTemp #10 : </td><td>". $row['val29']."</td></tr>";
	echo "<tr><td>WindBoxTemp #11 : </td><td>". $row['val30']."</td></tr>";
	echo "<tr><td>WindBoxTemp #12 : </td><td>". $row['val31']."</td></tr>";
	echo "<tr><td>WindBoxTemp #13 : </td><td>". $row['val32']."</td></tr>";
	echo "<tr><td>WindBoxTemp #14 : </td><td>". $row['val33']."</td></tr>";
	echo "<tr><td>WindBoxTemp #15 : </td><td>". $row['val34']."</td></tr>";
	echo "<tr><td>WindBoxTemp #16 : </td><td>". $row['val35']."</td></tr>";
	echo "<tr><td>WindBoxTemp #17 : </td><td>". $row['val36']."</td></tr>";
	echo "<tr><td>WindBoxTemp #18 : </td><td>". $row['val37']."</td></tr>";
	echo "<tr><td>WindBoxTemp #19 : </td><td>". $row['val38']."</td></tr>";
	echo "<tr><td>WindBoxTemp #20 : </td><td>". $row['val39']."</td></tr>";
	echo "<tr><td>WindBoxTemp #21 : </td><td>". $row['val40']."</td></tr>";
	echo "<tr><td>WindBoxTemp #22 : </td><td>". $row['val41']."</td></tr>";
	echo "<tr><td>WindBoxTemp #23 : </td><td>". $row['val42']."</td></tr>";
	echo "</table>";	

	echo '<table style="float: left; width:25%">';
	echo "<tr><td>WindBoxSuction #10 : </td><td>". $row['val43']."</td></tr>";
	echo "<tr><td>WindBoxSuction #11 : </td><td>". $row['val44']."</td></tr>";
	echo "<tr><td>WindBoxSuction #12 : </td><td>". $row['val45']."</td></tr>";
	echo "<tr><td>WindBoxSuction #13 : </td><td>". $row['val46']."</td></tr>";
	echo "<tr><td>WindBoxSuction #14 : </td><td>". $row['val47']."</td></tr>";
	echo "<tr><td>WindBoxSuction #15 : </td><td>". $row['val48']."</td></tr>";
	echo "<tr><td>WindBoxSuction #16 : </td><td>". $row['val49']."</td></tr>";
	echo "<tr><td>WindBoxSuction #17 : </td><td>". $row['val50']."</td></tr>";
	echo "<tr><td>WindBoxSuction #18 : </td><td>". $row['val51']."</td></tr>";
	echo "<tr><td>WindBoxSuction #19 : </td><td>". $row['val52']."</td></tr>";
	echo "<tr><td>WindBoxSuction #20 : </td><td>". $row['val53']."</td></tr>";
	echo "<tr><td>WindBoxSuction #21 : </td><td>". $row['val54']."</td></tr>";
	echo "<tr><td>WindBoxSuction #22 : </td><td>". $row['val55']."</td></tr>";
	echo "<tr><td>WindBoxSuction #23 : </td><td>". $row['val56']."</td></tr>";
	echo "</table>";
	
   }
 //  echo "Operation done successfully\n";
   $db->close();
?>
<div id="footer">
Developed by RDCIS in consultation with C&A, BSL::
Send your criticisms/suggestions to aneesh@sail-rdcis.com
</div>
</body>
</html>
