<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data from XML</title>
</head>
<body>

    <?php
        $xmlData = file_get_contents('data.xml');
        $xml = simplexml_load_string($xmlData);

        if ($xml === false) {
            die('Error parsing XML');
        }

        if (isset($xml->record)) {
            echo '<table width="700" border="0" cellspacing="0" cellpadding="0" align="center">';
            echo '<tbody>';
            echo '<tr>';
            echo '<td colspan="8" align="center" height="30" bgcolor="#666666" style="color:#FFF; padding-left:10px; font-weight:bold;">';
            echo 'VCD AUDIO';
            echo '</td>';
            echo '</tr>';

            
            // Display table headers
            echo '<tr align="center" bgcolor="#CCCCCC">';
            foreach ($xml->record[0]->children() as $header) {
                echo '<td height="25">' . $header->getName() . '</td>';
            }
            echo '</tr>';

            // Display table rows
            foreach ($xml->record as $record) {
                echo '<tr>';
                foreach ($record->children() as $cell) {
                    echo '<td height="25">' . $cell . '</td>';
                }
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo 'No data found in XML.';
        }
    ?>

</body>
</html>
