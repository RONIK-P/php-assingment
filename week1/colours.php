<!-- name:Ronik Patel
     no:0834754
    colours.php
-->
<!DOCTYPE html>
    <html>
        <head>
        <title>Week1 HTML Color Table</title>
        <style type="text/css">
            body{
            font-family:Verdana sans-serif;
            }
            td{
            border:solid 5px white;
            }
        </style>
        </head>
        <body>
        <h2>Week1: An HTML Color Table</h2>
        <table>
            <tr>
                <td>Blue</td>
            <td style="width:40px;background-color:#0000ff"></td>
            </tr>
            <tr>
            <td><?php echo'Red';?></td>
            <td style="width:40px;background-color:<?php echo'#ff0000';?>"></td>
            </tr>
            <?php
            echo"<tr>\n";
            echo"<td>Green</td>\n";
            echo"<td style=\"width:40px;background-color:#00ff00\"></td>\n";
            echo"</tr>\n";
            ?>
            </table>
            <?php
            echo("<br/>");
            echo("<br/>Programmed by-\"Ronik Patel\"");
            ?>
        </body>
    </html>
