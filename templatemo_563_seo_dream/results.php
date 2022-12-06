    <?php
    $servername = "mysqldb.cpon2ucgliii.us-west-2.rds.amazonaws.com";
    $username = "admin";
    $password = "admin123";
    $dbname = "customers";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT hallticketno, name, telugu, hindi, english, maths, science, social, totalmarks FROM students WHERE hallticketno='".$_POST['select']."'";
    $result = $conn->query($sql);
    ?>


    <html lang="en">
        <head>
         <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      background-color: pink;
    }
    </style>
            </head>
      <body>
       <form method="post">
        <div id="select">
         <p> Enter Hall Ticket Number :  <input type="text" name="select">

            </p><br>
            <p><input type="submit" name="sub" style="background-color:Cyan"></p><br><br>
                   </div>

        </form>
        <?php
        if (isset($_POST['sub'])) {
      echo "<table><tr><th> HallTicketNo </th><th> Name </th> <th> Telugu </th> <th> Hindi </th> <th> English </th> <th> Maths </th> <th> Science </th> <th> Social </th> <th> TotalMarks </th></tr>";
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["hallticketno"]. "</td><td>" . $row["name"]. "</td><td>" . $row["telugu"]. "</td><td>" . $row["hindi"]. "</td><td>" . $row["english"]. "</td><td>" . $row["maths"]. "</td><td>" . $row["science"]. "</td><td>" . $row["social"]. "</td><td>" . $row["totalmarks"]. " </td></tr>";
      }
      echo "</table>";
    } else {
      echo "Enter Correct Hall Ticket Number";
    }

    $conn->close(); 
    ?>
      </body>
    </html>