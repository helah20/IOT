<?php

    include "header.php";

?>

<table>
    <th>E1value</th>
    <th>E2value</th>
    <th>E3value</th>
    <th>E4value</th>
    <th>E5value</th>
    <th>E6value</th>
    <th>save_send</th>
    <th>run_send</th>

<?php

    $host               = "localhost";
    $user               = "root";
    $password      = "rootroot";
    $dbName       = "hospital";

    $conn = mysqli_connect($host, $user, $password,$dbName);

    // إستيراد معلومات المرضى من قاعدة البيانات

    $query = "SELECT * FROM Pannel";
    $result = mysqli_query($conn,$query);

    if ($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['$E1value'] . "</td><td>" . $row['$E2value'] . "</td><td>" . $row['$E3value'] . "</td></tr>"  . $row['$E4value'] . "</td></tr>"  . $row['$E5value'] . "</td></tr>"  . $row['$E6value'] . "</td></tr>"  . $row['$run_send'] . "</td></tr>"  . $row['$save_send'] . "</td></tr>";


        }
        echo "</table>";
    }
    else{
        echo "يوجد خطا ماء";
    }


?>