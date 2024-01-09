<?php

// Database credentials
$host = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'web4h87444_job';
$port = '3307';

// $host = 'web4hotel.com';
// $username = 'interview1@web4hotel.com';
// $password = 'fDU6WDGk5';
// $database = 'fDU6WDGk5';
// $port = '3306';

$mysqli = new mysqli($host, $username, $password, $database, $port);

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// Fetch country data from the database
$countryQuery = "SELECT * FROM country";
$countryResult = $mysqli->query($countryQuery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country and Province Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #666666;
            color: #FFF;
            font-weight: bold;
            padding-left: 10px;
        }
        tr:nth-child(even) {
            background-color: #EAEAEA;
        }
        tr:nth-child(odd) {
            background-color: #FFFFFF;
        }
    </style>
</head>
<body>

    <table>
        <?php while ($row = $countryResult->fetch_assoc()) : ?>
            <tr>
                <td height="25" colspan="2" bgcolor="#666666"><?php echo $row['CountryName']; ?></td>
            </tr>

            <?php

            $provinceQuery = "SELECT ProvinceCode, ProvinceName FROM province WHERE A2Code = '{$row['A2Code']}'";
            $provinceResult = $mysqli->query($provinceQuery);

            while ($provinceRow = $provinceResult->fetch_assoc()) :
            ?>
                <tr>
                    <td height="25"><?php echo $provinceRow['ProvinceCode']; ?></td>
                    <td><?php echo $provinceRow['ProvinceName']; ?></td>
                </tr>
            <?php endwhile; ?>
            
        <?php endwhile; ?>
    </table>

    <!-- Close the database connection -->
    <?php $mysqli->close(); ?>

</body>
</html>
