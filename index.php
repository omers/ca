<!DOCTYPE html>
<html>
<head>
<title>Certificate system portal</title>
 <link rel="stylesheet" type="text/css" href="css/style.css" /> 
</head>
<body>
    <div id="header">
        <h1>Certificate management system</h1>
    </div>
    <div id="page">
    <p>Certificate management portal</p>
    <?php
    require_once 'conf/db-inc.php';
    $db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
    
    if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
    }
    $sql = "SELECT * FROM certificates";
    $result = $db->query($sql) or die($db->error.__LINE__);
    echo '<table id="table-design">
    <thead>
    <th>Id</th> <th>Customer Name</th>
    <th>Encryption</th><th>Lifetime</th><th>Created</th>
    </thead><tbody>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['certificate_id'] . '</td>';
        echo '<td>' . $row['customer_name'] . '</td>';
        echo '<td>' . $row['encryption'] . '</td>';
        echo '<td>' . $row['lifetime'] . '</td>';
        echo '<td>' . $row['created'] . '</td>';        
        echo '</tr>';
    }
    echo '</tbody></table>';
    ?>
    
    </div>
    <div id="footer">
        
        
    </div>
</body>

</html>