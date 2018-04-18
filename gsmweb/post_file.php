
<!--$servername = "localhost";
$username = "id5438599_eddy";
$password = "pass1234";
$dbname = "id5438599_gsmdata";
$params = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST["params"])){
    $params = $_POST["params"];
    echo var_dump($params);

    $sql = "INSERT INTO arduinodata (data1)
    VALUES ($params)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
-->

welcome <?php echo $_POST["name"]; ?><br>
your email is: <?php echo $_POST["email"]; ?>


<!--$params = explode(",",$params);
//$farm_id = $params[0];
//$moisture_sensor_readings = $params[1];-->



