<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        td:first-child {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        $name = "Nur Syafiqah binti Ayop Mahathir";
        $matric_number = "A1220242";
        $course = "Web Development";
        $year_of_study = "3rd Year";
        $address = "Parit Raja, Johor";
    ?>
    <table>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_number; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
