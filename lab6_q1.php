<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php
        $name = "Intan Nur Fatiha binti Saahari";
        $matricNum ="DI220162";
        $course="Information Technology";
        $yearOfStudy = "3 year";
        $address = "Peti surat 07, Tanjong Karang, Selangor"
    ?>

    <table border="2">
        <tr>
            <td>Name</td>
            <td><?php echo "$name";?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matricNum";?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course";?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo "$yearOfStudy";?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address";?></td>
        </tr>
    </table>
</body>
</html>