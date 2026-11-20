<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q1</title>
</head>
<body>
    <?php
    $name = "MD JOWEL";
    $matric = "AI250004";
    $program = "BIK";
    $year_of_study = 2;
    $address = "Johor";
    ?>
    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric</td>
            <td><?php echo "$matric"; ?></td>
        </tr>
        <tr>
            <td>Program</td>
            <td><?php echo "$program"; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo "$year_of_study"; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>

</body>
</html>