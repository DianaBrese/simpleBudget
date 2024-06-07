<?php
require ("../index.php");
?>
<DOCTYPE html>
    <html>
        <head>
        <link rel="stylesheet" href="..\styles\table.css">
        </head>

    <body>
        <div>
        <table id="table">
            <tr id="head">
                <th>Data</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>

            <?php
            foreach ($contentArray as $content) {
                ?>
                <tr>
                    <?php foreach ($content as $value) { ?>
                        <td>
                            <?php
                            echo $value; ?>
                        </td>
                        <?php
                    }
                    ?>
                </tr>
                
                <?php
            }
            ;
            ?>
            <tr id="total">
                    <td>Total</td>
                    <td></td>
                    <td> <?php
                    echo "$".round($total, 2);
                    ?>
                    </td>

                </tr>
          

        </table>
        </div>
    </body>

    </html>
</DOCTYPE>