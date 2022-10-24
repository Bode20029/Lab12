<?php
    $keyword = $_GET["keyword"];
    $conn = mysqli_connect("localhost", "root", "");
    if ($conn) 
    {
        $selected = mysqli_select_db($conn,"blueshop");
        mysqli_set_charset($conn, "utf8");
    } 
    else 
    {
        echo mysql_errno();
    }
    $sql = "SELECT * FROM member WHERE username LIKE '%$keyword%'";
    $objQuery = mysqli_query($conn,$sql);
?>

    <table border="1">
    <?php while($row = mysqli_fetch_array($objQuery)): ?>
            <tr>
                <td><?php echo $row["username"]?></td>
                <td><?php echo $row["name"]?></td>
                <td><?php echo $row["address"]?></td>

            </tr>
            <?php endwhile;?>
        </table>