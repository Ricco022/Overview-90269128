<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "HywtGBNiwu823@";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=netland", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connected to the db 'netland' with version:", $conn->query('select version()')->fetchColumn();;
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    ?>


    <script src="script.js"></script>
</body>
</html>
