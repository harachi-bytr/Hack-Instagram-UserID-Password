<?php
    require_once('../functions.php');
    db_connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insta Details</title>
    <style>
         table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Sl No</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php
            $sql = "SELECT * FROM instadetails";
            $result = $conn->query($sql); 
            if($result)
            {
                if($result->num_rows>0)
                {
                    $i = 1;
                    while($userInfo = $result->fetch_assoc())
                    {
        ?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $userInfo['username'];?></td>
            <td><?php echo $userInfo['password'];?></td>
        </tr>
        <?php
                        $i++;
                    }
                }
            }
        ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>