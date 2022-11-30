<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <style>
        table{
            border-collapse: collapse;
            width: 50%;
        }
        table th{
            background-color: gray;
            color: #fff;
            padding: 10px;
        }
        table td{
            padding: 12px;
            color: black;
            font-size: 1em;
            text-align: center;
        }body{
            background-image: url("bg.jpg");
            background-size: 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
        table{
            border-collapse: collapse;
            width: 50%;
            background-color: white;
        }
        table th{
            background-color: gray;
            color: white;
            padding: 10px;
        }
        table td{
            padding: 12px;
            color: black;
            font-size: 1em;
            text-align: center;
        }

        a:link, a:visited {
          background-color: white;
          font-family: "Times New Roman", Times, serif;
          color: black;
          border: 2px solid black;
          border-radius: 25px;
          padding: 10px 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
        }
        a:hover, a:active {
          background-color: black;
          color: white;
        }
    </style>
</head>

<body>
<center>
<?php

    include "db_conn.php";

    $sql = "SELECT * FROM logs_in;";
    $results = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($results);

    $sql1 = "SELECT * FROM logs_out;";
    $results1 = mysqli_query($conn, $sql1);
    $resultCheck1 = mysqli_num_rows($results1);
?>

    <table>
        <tr>
            <th>Name and Section</th>
            <th>Time In</th>
        </tr>
        <tr>
        <?php
            if ($resultCheck > 0){
                while($row = mysqli_fetch_assoc($results)){
                    echo "
                        <tr>
                        <td>".$row['name_and_section']."</td>
                        <td>".$row['Time_in']."</td>
                        </tr>
                    ";
                }
            }
        ?>
        </tr>
    </table>
    <br><br>
    <table>
        <tr>
            <th>Name and Section</th>
            <th>Time Out</th>
        </tr>
        <tr>
        <?php
            if ($resultCheck1 > 0){
                while($row1 = mysqli_fetch_assoc($results1)){
                    echo "
                        <tr>
                        <td>".$row1['name_and_section']."</td>
                        <td>".$row1['Time_out']."</td>
                        </tr>
                    ";
                }
            }
        ?>
        </tr>
    </table>
    <br>
    <a href="logout.php">Logout</a><br><br>
    <a href="clear.php">Clear Records</a>

</body>

</html>
</center>
<?php

}else{
    header("Location: admn_login_page.php");
    exit();
}
