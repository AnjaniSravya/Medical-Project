<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/view.css">
</head>
<body>
    <!--Header Section Start-->
    <nav class="navbar navbar-default">

        <div class="container-fluid">
            <div class="navbar-header">
                <a href="users.php"><h2>Medical Project</h2></a>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <div class="dropdown">
                            <button class="btn btn-lg btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Admin
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="changepwd.html">Change Password</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Header section End-->
    <!--View Section Start-->
    <div class="container-fluid">
        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 bg-color">
            <h2 class="view">View</h2>
            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <label>Title</label>
                <p class="title">My Title</p>
                <label>Description</label>
                <p class="description">My Description</p>
                <label>Tags</label>
                <p class="title">My Tags</p>
                <label>Level</label>
                <div class="radio">
                    <label><input type="radio" name="optradio"><button type="button" class="btn btn-danger btn-xs">Critical</button></label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio"><button type="button" class="btn btn-warning btn-xs">Concern</button></label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio"><button type="button" class="btn btn-success btn-xs">Attention</button></label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio"><button type="button" class="btn btn-primary btn-xs">Normal</button></label>
                </div>
                <label>Critical Message</label>
                <p class="description">My Critical Messgae</p>
            </div>
        </div>
    </div>
    <!--View Section End-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>