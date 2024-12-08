<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
    // Define your details in variables
    $name = "Puteri Balqis Binti Kamaruzaman";
    $matric_number = "AI220128";
    $course = "Bachelor of Science in Computer (Software Engineering)";
    $year_of_study = "3rd Year";
    $address = "No 38, Jalan Universiti, Taman Universiti, Parit Raja, Batu Pahat, Johor";
    ?>
    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matric_number"; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>
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
