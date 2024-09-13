<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สอบ</title>
    <style>
    table {font-family: arial, sans-serif; border-collapse: collapse; width: 100%;}
    td, th {border: 1px solid #000000; text-align: left; padding: 8px;}
    th:nth-child(even),td:nth-child(even) {
    background-color:  #dddddd; }
</style>
</head>
<body>
    <?php
        $fname = ('นายธนวัฒน์');
        $lname = ('ลบช้าง');
        $class = ('6/10');
        echo "<table border='1'>";
        echo "<tr>
            <th>No.</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>ห้อง</th>
            </tr>";
        for ($number = 1; $number <= 10; $number++) {
        echo "<tr>";
        echo "<td>$number</td>";
        echo "<td>$fname</td>";
        echo "<td>$lname</td>";
        echo "<td>$class</td>";
        echo "</tr>";
        }
        echo "</table>";
    $No = array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40');
    echo "รายชื่อนักเรียน ม.6/10 คำตอบ คือ".count($No)."คน";
    ?>
</body>
</html>
