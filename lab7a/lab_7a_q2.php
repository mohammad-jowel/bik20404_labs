<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q2</title>
</head>
<body>
    <?php
    $students = [
        [
            'name' => 'Anas', 
            'program' => 'BIk', 
            'age' => 20
        ],
        [
            'name' => 'Ahmed', 
            'program' => 'BIk', 
            'age' => 20
        ],
        [
            'name' => 'Idris', 
            'program' => 'BIK', 
            'age' => 23
        ]
    ];
    ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['program']; ?></td>
                <td><?php echo $student['age']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>