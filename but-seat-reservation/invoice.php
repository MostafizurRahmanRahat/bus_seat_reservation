<html>
<html lang="en">
<head>
<center>
    <div class="one"> <h2>Your Ticket</h2></div>
<link rel="stylesheet" href="styles/st.css">
    <body>
      
        <br> <br> <br><br><br><br>
 <div class="two">
    
Passenger Name Is: <?php echo $_POST["name"]; ?><br>
Phone Number:      <?php echo $_POST["cphone"]; ?><br>
Destination:       <?php echo $_POST["route"]; ?><br>
Time:              <?php echo $_POST["dt"]; ?><br>
Seat Position:     <?php echo $_POST["seat"]; ?><br>

</div>
<br>
<br>
<br>
<div class="three">
Thank Your
<br>
</div>

<a href="index.html">
<div class="btn-a">
<input type="button" value="RETURN TO HOMEPAGE" name="return"></a>
</div>

</center>
</body>
</head>
</html>
