<!doctype html>
<?php
session_start();
if(!isset($_SESSION["adminlogin"]))
{
	header("location:index.php");
}
?>
<html>
<head>
<meta charset="utf-8">
<title>TMS</title>
<link href="a1style.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="index_files/mbcsmbmcp.css" type="text/css" />
</head>

<body>
<?php include('menu.php'); ?>
<div class="banner"><img src="images/banner.jpg" style="width:100%" ></div>
<img src="images/lock.png" width="156" height="152" class="center">
<div class="welcome" style="margin-top:15px" align="center"><h1>WELCOME ADMIN</h1></div>
    <div id="about"><p>Extension Education Institute (EEI) is a regional level institute with the main mandate of providing capacity building to middle level extension functionaries of the departments and organizations of agricultural development, particularly in the discipline of Extension Education. The Department of Agriculture and Cooperation (DAC), Ministry of Agriculture, Govt. of India has established four EEIs for four regions of the country: EEI (Southern Region) at Hyderabad, Andhra Pradesh, EEI (Northern Region) at Nilokheri, Haryana, EEI (Western Region) at Anand, Gujarat, and EEI (NE Region) at Jorhat, Assam. EEI (NE Region) was established in 1987 at Assam Agricultural University (AAU), Jorhat to cater to the need of capacity building of the extension functionaries of the NE states. It functions under the administrative control of Assam Agricultural University (AAU), Jorhat on the basis of annual Memorandum of Understanding between DAC, MoA, GOI, New Delhi and AAU, Jorhat. The DAC, MoA, GOI provides the fund for the institute under its non-plan budget head. The operational area of EEI (NE Region) covers nine states which include, Arunachal Pradesh, Assam, Manipur, Meghalaya, Mizoram, Nagaland, Sikkim, Tripura and West Bengal.</p>  
	
     <p>The EEI Management Committee is the apex body of the institute. The Vice  Chancellor,  Assam Agricultural  University  is  the  Chairperson  of  the  committee,  and  the  Director,  EEI  is  the  Member Secretary. The Management Committee meeting is generally held once or twice in a year to review the performance of the institute, and to make policy decisions for its effective functioning. The Director of the Institute is responsible for managing its programmes and day-to-day management and administration. The Director works under the administrative control of the Vice Chancellor, AAU.</p>
</div>
<a href="Annual Report FF2017-18 xxx.docx"><input align="center" style="margin-left:47%; margin-right:auto" type="button" class="a1-btn a1-blue" value="VIEW MORE" id="" /></a>
</body>
</html>
