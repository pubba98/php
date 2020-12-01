<?php
// take input from selected category;
if (isset($_GET["category"])){
    echo "<h1>".$_GET["category"]."</h1>";
}

//require('db.php');

//1. connect to database
$server = "qbhol6k6vexd5qjs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "x7gfa04m8j6bbzb4";
$dbpassword = "bkmq78c2l2u5k2l7";
$dbname = "x79gx4shz3s1ep7o";
$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

//2. create a query
$sql = "select * from Product";
//3. run the query on that connection
$result = mysqli_query($conn,$sql);
//4. show result
while ($row = $result->fetch_assoc()){
    ?>
    <div>
        <p><?php echo $row["ProductName"]; ?></p>
        <p><?php echo $row["ProductPrice"]; ?></p>
    </div>
}   <?php
}