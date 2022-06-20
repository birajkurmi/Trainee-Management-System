
<!doctype html>

<?php
 include "connect.php";
 $sql = ("select * from programme");
session_start();
$result = mysqli_query($link,$sql);
 if(!isset($_SESSION["adminlogin"]))
{
	header("location:index.php");
}
 ?>

<html>
<head>
<meta charset="utf-8">
<title>TMS | Add Program</title>
<link href="a1style.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./script/script.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="index_files/mbcsmbmcp.css" type="text/css" />
<script>
function myProgram1(){

    var x = document.getElementById("select");
    var i = x.selectedIndex;
    var oncampus=document.getElementById("table-1");
    var offcampus=document.getElementById("table-2");
    var regional=document.getElementById("table-3");
    
    switch(x.options[i].value){
        
        case "1":oncampus.style.display="block";
                 offcampus.style.display="none";
                 regional.style.display="none";
            break;
        case "2":oncampus.style.display="none";
                 offcampus.style.display="block";
                 regional.style.display="none";
            break;
            
        case "3":
                oncampus.style.display="none";
                 offcampus.style.display="none";
                 regional.style.display="block";
            break;
    }
}
    
</script>

<style>
    #table-2, #table-3{
        display:none;
    }    
</style>

</head>

<body>
 <?php include('menu.php'); ?>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>
<table align="center">
 <tr>
           	   <td height="35">PROGRAM TYPE:</td>
           	   <td height="35"><select  name="select" id="select">

                <option value='1'>ONCAMPUS</option>;
                <option value='2'>OFFCAMPUS</option>;
                <option value='3'>REGIONAL WORKSHOP</option>;
										
                </select>&ensp;<input type="button" class="a1-btn a1-blue"  name="search" onclick="myProgram1();"  id="search" value="SEARCH"></td>
				
         </tr>
    </table>

<table class="" id="table-1" border=1 align="center" style="margin-top:10px; width:1020px">

		
				<tr>
					<th>S.No</th>
					<th>PROGRAM TYPE</th>
					<th>PROGRAM NAME:</th>
					<th>DURATION FROM:</th>
					<th>DURATION TO:</th>
					<th>VENUE:</th>
					<th>ACTION</th>
				</tr>
				
				<tbody>
					<?php


					$query  = "select * from oncampus";
					//echo $query;
					$result = mysqli_query($link, $query);
					$sno    = 1;

					if (mysqli_affected_rows($link) != 0) {
					    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					        $msgid = $row['scheduleID'];
					        
					        
					        echo "<tr><td>" . $sno . "</td>";
					        echo "<td> ONCAMPUS </td>";
					        echo "<td>" . $row['title'] . "</td>";
							echo "<td>" . $row['durationfrom'] . "</td>";
							echo "<td>" . $row['durationto'] . "</td>";
							echo "<td>" . $row['venue'] . "</td>";
					        
					        $sno++;
					        
					        echo '<td><a href=editoncampus.php?id="'.$row['sn'].'"><input type="button" class="a1-btn a1-blue" id="boxxe" style="width:100%" value="Edit Program" ></a><form action="deleteoncampus.php" method="post" onSubmit="return ConfirmDelete();"><input type="hidden" name="name" value="' . $msgid .'"/><input type="submit" id="button1" value="Delete Program" class="a1-btn a1-orange"/></form></td></tr>';
					        
							$msgid = 0;
					    }
					    
					}

					?>																
				</tbody>
		</table>
		
		
		
		
		<table class="" id="table-2" border=1 align="center" style="margin-top:10px; width:1020px; ">

		
				<tr>
					<th>S.No</th>
					<th>PROGRAM TYPE</th>
					<th>PROGRAM NAME:</th>
					<th>DURATION FROM:</th>
					<th>DURATION TO:</th>
					<th>VENUE:</th>
					<th>ACTION</th>
				</tr>
		
				<tbody>
					<?php


					$query  = "select * from offcampus";
					//echo $query;
					$result = mysqli_query($link, $query);
					$sno    = 1;

					if (mysqli_affected_rows($link) != 0) {
					    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					        $msgid = $row['scheduleID'];
					        
					        
					        echo "<tr><td>" . $sno . "</td>";
					        echo "<td> OFFCAMPUS </td>";
					        echo "<td>" . $row['title'] . "</td>";
							echo "<td>" . $row['durationfrom'] . "</td>";
							echo "<td>" . $row['durationto'] . "</td>";
							echo "<td>" . $row['venue'] . "</td>";
					        
					        $sno++;
					        
					        echo '<td><a href=editoffcampus.php?id="'.$row['sn'].'"><input type="button" class="a1-btn a1-blue" id="boxxe" style="width:100%" value="Edit Program" ></a><form action="deleteoffcampus.php" method="post" onSubmit="return ConfirmDelete();"><input type="hidden" name="name" value="' . $msgid .'"/><input type="submit" id="boxxe" value="Delete Program" class="a1-btn a1-orange"/></form></td></tr>';
					        
							$msgid = 0;
					    }
					    
					}

					?>																
				</tbody>
		</table>
		
		
		<table class="table table-bordered datatable" id="table-3" border=1 align="center" style="margin-top:10px; width:1020px">

		
				<tr>
					<th>S.No</th>
					<th>PROGRAM TYPE</th>
					<th>PROGRAM NAME:</th>
					<th>DURATION FROM:</th>
					<th>DURATION TO:</th>
					<th>VENUE:</th>
					<th>ACTION</th>
				</tr>
				
				<tbody>
					<?php


					$query  = "select * from regional";
					//echo $query;
					$result = mysqli_query($link, $query);
					$sno    = 1;

					if (mysqli_affected_rows($link) != 0) {
					    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					        $msgid = $row['scheduleID'];
					        
					        
					        echo "<tr><td>" . $sno . "</td>";
					        echo "<td> REGIONAL WORKSHOP </td>";
					        echo "<td>" . $row['title'] . "</td>";
							echo "<td>" . $row['durationfrom'] . "</td>";
							echo "<td>" . $row['durationto'] . "</td>";
							echo "<td>" . $row['venue'] . "</td>";
					        
					        $sno++;
					        
					        echo '<td><a href=editregional.php?id="'.$row['sn'].'"><input type="button" class="a1-btn a1-blue" id="boxxe" style="width:100%" value="Edit Program" ></a><form action="deleteregional.php" method="post" onSubmit="return ConfirmDelete();"><input type="hidden" name="name" value="' . $msgid .'"/><input type="submit" id="button1" value="Delete Program" class="a1-btn a1-orange"/></form></td></tr>';
					        
							$msgid = 0;
					    }
					    
					}

					?>																
				</tbody>
		</table>







</body>
</html>
