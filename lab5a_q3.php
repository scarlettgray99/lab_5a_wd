<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        function multiplication($multiplier) {
            $results = [];
            for ($i = 1; $i <= 12; $i++) {
                $results[] = $i * $multiplier;
            }
            return $results;
        }

        $multiplier = 2; // Change this to test with different numbers
        $results = multiplication($multiplier);
    ?>
    <table>
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php for ($i = 1; $i <= 12; $i++): ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $multiplier; ?></td>
                <td><?php echo $results[$i - 1]; ?></td>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
