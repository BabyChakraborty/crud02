<?php
$firstName=$_GET['firstName'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud02");

$query = "select * from info";

$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>

<table border="1" width="30%">
    <tr>

        <td>First Name</td>

    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>

            <td><?php echo $row['firstName']?></td>
            <td> <a href="#">Edit</a> | <a href="delete.php?firstName=<?php echo $row['firstName']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>

</table>

