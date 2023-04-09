<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Lab Practice</title>
	<link rel="stylesheet" href="lab2_css.css" type="text/css">
  </head>
<body>
	<h3 class="double" style="">
		<div style="border-right-style: solid; border-left-style: solid;">
			<p style="padding: 15px; text-align: center; font-size: 12; font-family: sans-serif;">
			IT 207 (Spring 2022)<br />
			Erhan Uyar<br />
			George Mason University
			</p>
		</div>
		<div style="padding: 15px">
			
			 <?php
				include("lastmodified.php");
			 ?>
	   </div>
    </h3>
<div class="double">
	<div style="background-color: #bef3e1; border: solid; align: center;">
		<?php
		 include("menu.inc");
		?>
	</div>
	<div class="triple">

<div class="flex-container">
	<form method="post" action="calendar1.php">
	    <h1 style="text-align: center;">Office Hours Setup Form</h1><br/><br/>
Time: <div class="grid-container" style=" grid-template-columns: auto auto auto auto auto;">
	<div class="grid-item" style="text-align: center; height: 20px;">Monday</div>
	<div class="grid-item" style="text-align: center; height: 20px;">Tuesday</div>
	<div class="grid-item" style="text-align: center; height: 20px;">Wednesday</div>
	<div class="grid-item" style="text-align: center; height: 20px;">Thursday</div>
	<div class="grid-item" style="text-align: center; height: 20px;">Friday</div>
	<div class="grid-item" style="text-align: center; height: 210px;">
		<select style="height: 200px;" name="time1[]" multiple>
			<option value="7:00 am"> 7:00 am</option>
			<option value="7:30 am" > 7:30 am</option>
			<option value="8:00 am" > 8:00 am</option>
			<option value="8:30 am" > 8:30 am</option>
			<option value="9:00 am" > 9:00 am</option>
			<option value="9:30 am" > 9:30 am</option>
			<option value="10:00 am" > 10:00 am</option>
			<option value="10:30 am" > 10:30 am</option>
			<option value="11:00 am" > 11:00 am</option>
			<option value="11:30 am" > 11:30 am</option>
			<option value="12:00 pm" > 12:00 pm</option>
			<option value="12:30 pm" > 12:30 pm</option>
			<option value="1:00 pm" > 1:00 pm</option>
			<option value="1:30 pm" > 1:30 pm</option>
			<option value="2:00 pm" > 2:00 pm</option>
			<option value="2:30 pm" > 2:30 pm</option>
			<option value="3:00 pm"> 3:00 pm</option>
			<option value="3:30 pm" > 3:30 pm</option>
			<option value="4:00 pm" > 4:00 pm</option>
			<option value="4:30 pm"> 4:30 pm</option>
			<option value="5:00 pm"> 5:00 pm</option>
			<option value="5:30 pm"> 5:30 pm</option>
			<option value="6:00 pm"> 6:00 pm</option>
			<option value="6:30 pm"> 6:30 pm</option>
			<option value="7:00 pm" > 7:00 pm</option>
			<option value="7:30 pm" > 7:30 pm</option>
			<option value="8:00 pm" > 8:00 pm</option>
			<option value="8:30 pm" > 8:30 pm</option>
			<option value="9:00 pm" > 9:00 pm</option>
			<option value="9:30 pm" > 9:30 pm</option>
			<option value="10:00 pm" > 10:00 pm</option>
		</select>
		</div>
	<div class="grid-item" style="text-align: center; height: 210px;">
		<select style="height: 200px;" name="time2[]" multiple>
			<option value="7:00 am" > 7:00 am</option>
			<option value="7:30 am" > 7:30 am</option>
			<option value="8:00 am" > 8:00 am</option>
			<option value="8:30 am" > 8:30 am</option>
			<option value="9:00 am" > 9:00 am</option>
			<option value="9:30 am" > 9:30 am</option>
			<option value="10:00 am" > 10:00 am</option>
			<option value="10:30 am" > 10:30 am</option>
			<option value="11:00 am" > 11:00 am</option>
			<option value="11:30 am" > 11:30 am</option>
			<option value="12:00 pm" > 12:00 pm</option>
			<option value="12:30 pm" > 12:30 pm</option>
			<option value="1:00 pm" > 1:00 pm</option>
			<option value="1:30 pm" > 1:30 pm</option>
			<option value="2:00 pm" > 2:00 pm</option>
			<option value="2:30 pm" > 2:30 pm</option>
			<option value="3:00 pm"> 3:00 pm</option>
			<option value="3:30 pm" > 3:30 pm</option>
			<option value="4:00 pm" > 4:00 pm</option>
			<option value="4:30 pm"> 4:30 pm</option>
			<option value="5:00 pm"> 5:00 pm</option>
			<option value="5:30 pm"> 5:30 pm</option>
			<option value="6:00 pm"> 6:00 pm</option>
			<option value="6:30 pm"> 6:30 pm</option>
			<option value="7:00 pm" > 7:00 pm</option>
			<option value="7:30 pm" > 7:30 pm</option>
			<option value="8:00 pm" > 8:00 pm</option>
			<option value="8:30 pm" > 8:30 pm</option>
			<option value="9:00 pm" > 9:00 pm</option>
			<option value="9:30 pm" > 9:30 pm</option>
			<option value="10:00 pm" > 10:00 pm</option>
		</select>
	</div>

	<div class="grid-item" style="text-align: center; height: 210px;">
		<select style="height: 200px;" name="time3[]" multiple>
		    <option value="7:00 am" > 7:00 am</option>
			<option value="7:30 am" > 7:30 am</option>
			<option value="8:00 am" > 8:00 am</option>
			<option value="8:30 am" > 8:30 am</option>
			<option value="9:00 am" > 9:00 am</option>
			<option value="9:30 am" > 9:30 am</option>
			<option value="10:00 am" > 10:00 am</option>
			<option value="10:30 am" > 10:30 am</option>
			<option value="11:00 am" > 11:00 am</option>
			<option value="11:30 am" > 11:30 am</option>
			<option value="12:00 pm" > 12:00 pm</option>
			<option value="12:30 pm" > 12:30 pm</option>
			<option value="1:00 pm" > 1:00 pm</option>
			<option value="1:30 pm" > 1:30 pm</option>
			<option value="2:00 pm" > 2:00 pm</option>
			<option value="2:30 pm" > 2:30 pm</option>
			<option value="3:00 pm"> 3:00 pm</option>
			<option value="3:30 pm" > 3:30 pm</option>
			<option value="4:00 pm" > 4:00 pm</option>
			<option value="4:30 pm"> 4:30 pm</option>
			<option value="5:00 pm"> 5:00 pm</option>
			<option value="5:30 pm"> 5:30 pm</option>
			<option value="6:00 pm"> 6:00 pm</option>
			<option value="6:30 pm"> 6:30 pm</option>
			<option value="7:00 pm" > 7:00 pm</option>
			<option value="7:30 pm" > 7:30 pm</option>
			<option value="8:00 pm" > 8:00 pm</option>
			<option value="8:30 pm" > 8:30 pm</option>
			<option value="9:00 pm" > 9:00 pm</option>
			<option value="9:30 pm" > 9:30 pm</option>
			<option value="10:00 pm" > 10:00 pm</option>
		</select>
	</div>
	<div class="grid-item" style="text-align: center; height: 210px;">
		<select style="height: 200px;" name="time4[]" multiple>
		   <option value="7:00 am" > 7:00 am</option>
			<option value="7:30 am" > 7:30 am</option>
			<option value="8:00 am" > 8:00 am</option>
			<option value="8:30 am" > 8:30 am</option>
			<option value="9:00 am" > 9:00 am</option>
			<option value="9:30 am" > 9:30 am</option>
			<option value="10:00 am" > 10:00 am</option>
			<option value="10:30 am" > 10:30 am</option>
			<option value="11:00 am" > 11:00 am</option>
			<option value="11:30 am" > 11:30 am</option>
			<option value="12:00 pm" > 12:00 pm</option>
			<option value="12:30 pm" > 12:30 pm</option>
			<option value="1:00 pm" > 1:00 pm</option>
			<option value="1:30 pm" > 1:30 pm</option>
			<option value="2:00 pm" > 2:00 pm</option>
			<option value="2:30 pm" > 2:30 pm</option>
			<option value="3:00 pm"> 3:00 pm</option>
			<option value="3:30 pm" > 3:30 pm</option>
			<option value="4:00 pm" > 4:00 pm</option>
			<option value="4:30 pm"> 4:30 pm</option>
			<option value="5:00 pm"> 5:00 pm</option>
			<option value="5:30 pm"> 5:30 pm</option>
			<option value="6:00 pm"> 6:00 pm</option>
			<option value="6:30 pm"> 6:30 pm</option>
			<option value="7:00 pm" > 7:00 pm</option>
			<option value="7:30 pm" > 7:30 pm</option>
			<option value="8:00 pm" > 8:00 pm</option>
			<option value="8:30 pm" > 8:30 pm</option>
			<option value="9:00 pm" > 9:00 pm</option>
			<option value="9:30 pm" > 9:30 pm</option>
			<option value="10:00 pm" > 10:00 pm</option>
		</select>
	</div>
	<div class="grid-item" style="text-align: center; height: 210px;">
		<select style="height: 200px;" name='time5[]' multiple>
			<option value="7:00 am" > 7:00 am</option>
			<option value="7:30 am" > 7:30 am</option>
			<option value="8:00 am" > 8:00 am</option>
			<option value="8:30 am" > 8:30 am</option>
			<option value="9:00 am" > 9:00 am</option>
			<option value="9:30 am" > 9:30 am</option>
			<option value="10:00 am" > 10:00 am</option>
			<option value="10:30 am" > 10:30 am</option>
			<option value="11:00 am" > 11:00 am</option>
			<option value="11:30 am" > 11:30 am</option>
			<option value="12:00 pm" > 12:00 pm</option>
			<option value="12:30 pm" > 12:30 pm</option>
			<option value="1:00 pm" > 1:00 pm</option>
			<option value="1:30 pm" > 1:30 pm</option>
			<option value="2:00 pm" > 2:00 pm</option>
			<option value="2:30 pm" > 2:30 pm</option>
			<option value="3:00 pm"> 3:00 pm</option>
			<option value="3:30 pm" > 3:30 pm</option>
			<option value="4:00 pm" > 4:00 pm</option>
			<option value="4:30 pm"> 4:30 pm</option>
			<option value="5:00 pm"> 5:00 pm</option>
			<option value="5:30 pm"> 5:30 pm</option>
			<option value="6:00 pm"> 6:00 pm</option>
			<option value="6:30 pm"> 6:30 pm</option>
			<option value="7:00 pm" > 7:00 pm</option>
			<option value="7:30 pm" > 7:30 pm</option>
			<option value="8:00 pm" > 8:00 pm</option>
			<option value="8:30 pm" > 8:30 pm</option>
			<option value="9:00 pm" > 9:00 pm</option>
			<option value="9:30 pm" > 9:30 pm</option>
			<option value="10:00 pm" > 10:00 pm</option>
		</select>
	</div>
	</div>
	<br/><br/>
		<input type="reset" value="Clear">
		<input type="submit" value="Submit">
	</form>
    </div>
</div>
	<footer style="padding: 15px">
		This web site is entirely original work and full academic copyright is retained. This web site complies
		with the Mason Honor Code (http://oai.gmu.edu/mason-honor-code/).
	</footer>
	</div>
</div>
<div></div>
</body>
</html>