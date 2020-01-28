<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Tracker</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <div class="container">
        <div class="row" style="background: #d0dbd3; height: 70px;">
            <div class="col-md-6">
            <h3>Welcome to LeopXon Task Manager</h3>
            </div>
        </div>
        <!-- Header Section-->
        <header style="margin-top:10px; margin-bottom:10px;"  class="row">
            <div class="col-xs-6">
                <a href="#" class="btn btn-primary">Enter Restore Mode</a>
            </div>
            <div class="col-xs-6 text-right">
                Total Time : <span id="tally"></span>
            </div>
        </header>
        <!-- Add Task Section -->
        <div class="row">
            <form action="" id="form-add">
                <div class="col-xs-10">
                    <input id="task" name="task" class="form-control" placeholder="Enter New Task Name...." type="text">
                </div>
                <div class="col-xs-2 text-right">
                    <button type="submit" class="btn btn-block btn-success"><?php echo icon('play'); ?></button>
                </div>
            </form>
        </div>
        <hr>
        <!-- Table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Time</th>
                    <th colspan="2">Controls</th>
                    
                </tr>
            </thead>
            <tbody id="log">

            </tbody>
        </table>
        <?php
            // $timezone = "Asia/Colombo";
            // date_default_timezone_set($timezone);
            echo date('Y:m:d H:i:s');
            echo date_change(time());
        ?>
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- App's Script -->
    <script src="tracker.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>