<?php
    include('stack.php');

    $main = new ReadingList();
    $main->push(10);
    $main->push(20);
    $main->push(30);
    $main->push(40);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Stack Information</h2>
        <table class="table" style="width:200px">
            <tbody>
                <?php 
                   while(!$main->isEmpty()) {
                ?>
                <tr>
                    <td><?php echo $main->pop() ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>