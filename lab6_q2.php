<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 6 Q2</title>
</head>
<body>
    <?php
        $students = [
             [
                'name' => 'Alice',
                'program' => 'BIP',
                'age' => 21
            ],
            [
                'name' => 'Bob',
                'program' => 'BIS',
                'age' => 20
            ],
            [
                'name' => 'Raju',
                'program' => 'BIT',
                'age' => 22
            ]
        ];
    ?>
    <table border = "2" style="border: 1px solid black;">
       
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>
        
            <?php
                foreach ($students as $student => $stuDetail) {
                    echo "<tr>";
                    echo "<td>{$stuDetail['name']}</td>";
                    echo "<td>{$stuDetail['program']}</td>";
                    echo "<td>{$stuDetail['age']}</td>";
                    echo "</tr>";
                }
            ?>
    </table>
</body>
</html>
