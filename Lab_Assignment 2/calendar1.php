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

<div class="flex-container" style="height: 1005px;">

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1 style="text-align: center;">Office Hours Sign Up</h1>
        Student Name: <input type="text" name="studentName">
		Student Email: <input type="text" name="studentEmail">
        <input type="submit" name="Submit" value="Submit"> <input type="reset" value="Clear"><br/>
        <?php
  if(isset($_POST['Submit']) && isset($_POST['studentEmail']))
    {
    if(isset($_POST['studentName'])){
    $email = $_POST['studentEmail'];
    $To = "<euyar@gmu.edu>";
	$value = mail($To, '', $_POST['studentName'], $email);

        echo 'Email was successfully sent from ' . $email .'<br/>';
        }
    }
?>
   	<div>
		<h2>
		<?php
			echo date("F, Y");
		?>
		</h2>
	</div>
      <div class="grid-container">
    <?php
    echo '<div class="grid-item" style="text-align: center;">Sunday</div>';
	echo '<div class="grid-item" style="text-align: center;">Monday</div>';
	echo '<div class="grid-item" style="text-align: center;">Tuesday</div>';
	echo '<div class="grid-item" style="text-align: center;">Wednesday</div>';
	echo '<div class="grid-item" style="text-align: center;">Thursday</div>';
	echo '<div class="grid-item" style="text-align: center;">Friday</div>';
	echo '<div class="grid-item" style="text-align: center;">Saturday</div>';

    $firstDay = date("w", mktime(0,0,0,n, 1, Y)) -1;  //for some reason, the first day of the month was off by 1
    $totalDays = date("t", mktime(0,0,0,n, 0, Y));
	$square = 0;
    for($i=0; $i<$firstDay; $i++){    //a loop to fill in empty squares at the beginning
        if($i<$firstDay){
             echo '<div class="grid-item"> </div>';
			 $square++;
        }
    }
    for($j=1; $j<=$totalDays; $j++){    //a loop to fill in all the squares in between with their date numbers
        $day = $j + $firstDay;     //a tracking variable used for later
		$square++;
		if($square==2 || $square==9 || $square==16 || $square==23 || $square==30){
			echo '<div class="grid-item">' . $j . '<br/>';
                 foreach($_POST['time1'] as $mondays){
       	            echo '<input type="radio" name="Monday" value="1" />' . $mondays . '<br/>';
                    }     
            echo '</div>';
		}
		else if($square==3 || $square==10 || $square==17 || $square==24 || $square==31){
			echo '<div class="grid-item">' . $j . '<br/>';
			foreach($_POST['time2'] as $tuesdays){
       	        echo '<input type="radio" name="Tuesday" value="2" />' . $tuesdays . '<br/>';
            }
            echo '</div>';
		}
		else if($square==4 || $square==11 || $square==18 || $square==25 || $square==32){
			echo '<div class="grid-item">' . $j . '<br/>';
			foreach($_POST['time3'] as $wednesdays){
       	        echo '<input type="radio" name="Wednesday" value="3" />' . $wednesdays . '<br/>';
            }
            echo '</div>';
		}
		else if($square==5 || $square==12 || $square==19 || $square==26 || $square==33){
			echo '<div class="grid-item">' . $j . '<br/>';
			foreach($_POST['time4'] as $thursdays){
       	        echo'<input type="radio" name="Thursday" value="4" />' . $thursdays . '<br/>';
            }
            echo '</div>';
		}
		else if($square==6 || $square==13 || $square==20 || $square==27 || $square==34){
			echo '<div class="grid-item">' . $j . '<br/>';
			foreach($_POST['time5'] as $fridays){
       	        echo '<input type="radio" name="Friday" value="5" />' . $fridays . '<br/>';
            }
            echo '</div>';
		}
		else{
        echo '<div class="grid-item">' . $j . '</div>';
		}
    }
    $day++;
     while($day>$totalDays && $day<=35){           //a loop to fill in empty squares at the end
             echo '<div class="grid-item"> </div>';
             $day++;
    }
	?>
    	<input type="hidden" name="userid" value="U001" /><br/><br/>
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