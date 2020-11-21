<?php

require "config.php";
//Authentication Check
if(isset($_COOKIE['uname']) && isset($_COOKIE['sessionid'])){
	$uname = $_COOKIE['uname'];
	$csessionid = $_COOKIE['sessionid'];
}
else{
	echo "<script type='text/javascript'>alert('Something went wrong redirecting to login page!')</script>";
	echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
}

$fetchsess = mysqli_query($con,"SELECT sessionid FROM gateway WHERE username = '$uname'");
$dbsessarray = mysqli_fetch_assoc($fetchsess);
$dbsession = $dbsessarray['sessionid'];
if($csessionid != $dbsession)
{
echo "<script type='text/javascript'>alert('Something went wrong redirecting to login page!')</script>";
echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
}

echo "<br><br>";

echo "<table class='rwd-table' style='margin:auto;'>";

echo "<tr>
    <th>S.No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
	<th>Address</th>
    <th>City</th>
	<th>District</th>
	<th>State</th>
	<th>Pin</th>
    <th>SubPeriodFromDate</th>
    <th>SubPeriodToDate</th>
    </tr>";

$radio_option = $_POST['radio_option'];
$select_option = $_POST['select_option'];
if($radio_option == "District")
{
	   
	 $query = mysqli_query($con, "SELECT userdetail.fname,userdetail.mname,userdetail.lname,userdetail.designation,userdetail.email,userdetail.cmobile,userdetail.caddress,userdetail.ccity,userdetail.cdistrict,userdetail.cstate,userdetail.cpin,subscription.startdate,subscription.enddate FROM userdetail INNER JOIN subscription ON userdetail.uid = subscription.uid WHERE (DATE_FORMAT(subscription.enddate, '%Y-%m-%d') >= CURDATE()) AND (userdetail.cdistrict = '$select_option') ORDER BY userdetail.fname");
		
}
elseif($radio_option == "subtype")
{
	
	
	 $query = mysqli_query($con, "SELECT userdetail.fname,userdetail.mname,userdetail.lname,userdetail.designation,userdetail.email,userdetail.cmobile,userdetail.caddress,userdetail.ccity,userdetail.cdistrict,userdetail.cstate,userdetail.cpin,subscription.startdate,subscription.enddate FROM userdetail INNER JOIN subscription ON userdetail.uid = subscription.uid WHERE (DATE_FORMAT(subscription.enddate, '%Y-%m-%d') >= CURDATE()) AND (subscription.type = '$select_option') ORDER BY userdetail.fname");

}
elseif($radio_option == "paytype")
{
	  
	$query = mysqli_query($con, "SELECT userdetail.fname,userdetail.mname,userdetail.lname,userdetail.designation,userdetail.email,userdetail.cmobile,userdetail.caddress,userdetail.ccity,userdetail.cdistrict,userdetail.cstate,userdetail.cpin,subscription.startdate,subscription.enddate FROM userdetail INNER JOIN subscription ON userdetail.uid = subscription.uid WHERE (DATE_FORMAT(subscription.enddate, '%Y-%m-%d') >= CURDATE()) AND (subscription.paymethod = '$select_option') ORDER BY userdetail.fname");
		
}
$count = 1;
if(mysqli_num_rows($query) == 0)
{
		echo "<tr><td colspan = '4'>no rows returned</td></tr>";
}
else
{
	while($row = mysqli_fetch_row($query))
    	{
    		echo "<tr><td data-th='S.No'>{$count}</td><td data-th='Name'>"."{$row[3]}"."."." "."{$row[0]}"." "."{$row[1]}"." "."{$row[2]}"."</td><td data-th='Email'>{$row[4]}</td><td data-th='Mobile'>{$row[5]}</td><td data-th='Address'>{$row[6]}</td><td data-th='City'>{$row[7]}</td><td data-th='District'>{$row[8]}</td><td data-th='State'>{$row[9]}</td><td data-th='Pin'>{$row[10]}</td><td data-th='SubPeriodFromDate'>{$row[11]}</td><td data-th='SubPeriodToDate'>{$row[12]}</td></tr>";
		    $count++;
    	}
		echo "</table>";
}

?>