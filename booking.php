<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styleBokking.css">
</head>
<body>
  
    <div class="container">
      <?php
      if(isset($_POST['submit'])){

        $cname= $_POST["name"];
        $cphone= $_POST["phone"];
        $route= $_POST["route"];
        $seat= $_POST["seat"];
        $dt= $_POST["dt"];
      }
      ?>
        <form action="invoice.php" method="POST">
          <div class="row">
            <div class="col-25">
              <label for="name"> Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="name" name="name" placeholder="Your name..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="phone">Phone Number</label>
            </div>
            <div class="col-75">
              <input type="text" id="phone" name="cphone" placeholder="Your phone number...">
              
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="route">Destination</label>
            </div>
            <div class="col-75">
              <select id="route" name="route">
                <option value="klju">Kuala Lumpur to Johor</option>
                <option value="jukl">Johor to Kuala Lumpur</option>
                <option value="Klku">Kuala Lumpur to Kuantan</option>
                <option value="kukl">Kuantan to Kuala Lumpur</option>
              </select>
            </div>
            <div class="row">
            <div class="col-25">
              <label for="seat">Seat No</label>
            </div>
            <div class="col-75">
              <select id="seat" name="seat">
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="A3">A3</option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
                <option value="B3">B3</option>
                <option value="C1">C1</option>
                <option value="C2">C2</option>
                <option value="C3">C3</option>
                <option value="D1">D1</option>
                <option value="D2">D2</option>
                <option value="D3">D3</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="E3">E3</option>
                <option value="F1">F1</option>
                <option value="F2">F2</option>
                <option value="F3">F3</option>
                <option value="G1">G1</option>
                <option value="G2">G2</option>
                <option value="G3">G3</option>
                <option value="H1">H1</option>
                <option value="H2">H2</option>
                <option value="H3">H3</option>
                <option value="I1">I1</option>
                <option value="I2">I2</option>
                <option value="I3">I3</option>
                <option value="J1">J1</option>
                <option value="J2">J2</option>
                <option value="J3">J3</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="DT">Date & Time</label>
            </div>
            <div class="col-75">
              <input type="datetime-local" id="Test_DatetimeLocal" name="dt">
              </div>

          
              <div class="row">
                <!--<a href="seatPage.php">Submit</a>-->
                <input type="submit" value= "submit" name="submit" >
               
    
              </div>
        </form>
      </div>





</body>
</html>