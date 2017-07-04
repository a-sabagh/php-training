<?php
ob_start();
?>

<html>
    <head>
        <title>ob_end_clean</title>
    </head>
    <body>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="active">first</th>
                    <th class="info">first</th>
                    <th class="warning">first</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="success">first element</td>
                    <td class="danger">first element</td>
                    <td>first element</td>
                </tr>
                <tr>
                    <td>third element</td>
                    <td>third element</td>
                    <td>third element</td>
                </tr>                        
                <tr>
                    <td>fourth element</td>
                    <td>fourth element</td>
                    <td>fourth element</td>
                </tr>                        
                <tr>
                    <td>fifth element</td>
                    <td>fifth element</td>
                    <td>fifth element</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>


<?php
ob_end_clean();
