<?php
// take input from selected category;
if (isset($_GET["category"])){
    echo "<h1>".$_GET["category"]."</h1>";
}


//1. connect to database
$server = "qbhol6k6vexd5qjs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "x7gfa04m8j6bbzb4";
$dbpassword = "bkmq78c2l2u5k2l7";
$dbname = "x79gx4shz3s1ep7o";
$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);
//2. create a query
$sql = "select * from products where category=1";
//3. run the query on that connection
$result = mysqli_query($conn,$sql);
//4. show result
while ($row = $result->fetch_assoc()){
    ?>
    <div>
        <p><?php echo $row["name"]; ?></p>
        <p><?php echo $row["price"]; ?></p>
        <p><img src="<?php echo $row["image"]; ?>"</p>
    </div>

}  <div>
        <p><?php echo $row["name"]; ?></p>
        <p><?php echo $row["price"]; ?></p>
        <p><img src="<?php echo $row["image"]; ?>"</p>
    </div>
    <?php
}