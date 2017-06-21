<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users|Diseases</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/users.css">
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
    <!--Tabs Section Start-->
    <div class="container-fluid">
        <div class="col-md-8 col-md-offset-2 bg-color">
        <ul class="nav nav-pills">
        <li class="active"><a data-toggle="pill" href="#users">Users</a></li>
        <li><a data-toggle="pill" href="#diseases">Diseases</a></li>
        </ul>

        <div class="tab-content">
        <div id="users" class="tab-pane fade in active">
            <div class="right-align">
                <strong>UserList</strong>
                    <span><button class="btn btn-default btn-pad" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                    </span>
                    <span><input type="text" placeholder="Search"></span>
            </div>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                John Boo <span class="caret"></span> </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            Age:51<br>
                            Height:5'11<br>
                            Weight:150pounds
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                               Michael Robinson <span class="caret"></span> </a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            Age:51<br>
                            Height:5'11<br>
                            Weight:150pounds
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                                Alexander Robinson <span class="caret"></span> </a>
                        </h4>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse">
                        <div class="panel-body">
                            Age:51<br>
                            Height:5'11<br>
                            Weight:150pounds
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                Jennifer Pinsker <span class="caret"></span> </a>
                        </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                        <div class="panel-body">
                            Age:51<br>
                            Height:5'11<br>
                            Weight:150pounds
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                Bob Robson <span class="caret"></span> </a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            Age:51<br>
                            Height:5'11<br>
                            Weight:150pounds
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                Alexander Robinson <span class="caret"></span> </a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            Age:51<br>
                            Height:5'11<br>
                            Weight:150pounds
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                John Boo <span class="caret"></span>    </a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">
                            Age:51<br>
                            Height:5'11<br>
                            Weight:150pounds
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="diseases" class="tab-pane fade">
            <div class="right-align">
                <strong>Disease List</strong>
                    <span><button class="btn btn-default btn-pad" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button></span>
                <span><input type="text" placeholder="Disease Search"></span>
                <span><a href="new.php" type="button" class="btn btn-default btn-desk">New Entry</a></span>
            </div>
            <a href="new.php" type="button" class="btn btn-default btn-mob">New Entry</a>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Disease Name1
                        <span class="dropdown drpdwn">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="view.php">View</a></li>
                                <li><a href="update.php">Update</a></li>
                                <li><a data-toggle="modal" data-target="#Modal">Delete</a>
                                </li>
                            </ul>
                            <div class="modal fade" id="Modal" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Delete Disease</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure want to delete?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-danger" data-dismiss="modal">Delete</a>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Disease Name2
                        <span class="dropdown drpdwn">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="view.php">View</a></li>
                                <li><a href="update.php">Update</a></li>
                                <li><a data-toggle="modal" data-target="#Modal">Delete</a></li>

                            </ul>
                        </span>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Disease Name3
                        <span class="dropdown drpdwn">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="view.php">View</a></li>
                                <li><a href="update.php">Update</a></li>
                                <li><a data-toggle="modal" data-target="#Modal">Delete</a></li>

                            </ul>
                        </span>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Disease Name4
                        <span class="dropdown drpdwn">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="view.php">View</a></li>
                                <li><a href="update.php">Update</a></li>
                                <li><a data-toggle="modal" data-target="#Modal">Delete</a></li>
                            </ul>
                        </span>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Disease Name5
                        <span class="dropdown drpdwn">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="view.php">View</a></li>
                                <li><a href="update.php">Update</a></li>
                                <li><a data-toggle="modal" data-target="#Modal">Delete</a></li>

                            </ul>
                        </span>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Disease Name6
                        <span class="dropdown drpdwn">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="view.php">View</a></li>
                                <li><a href="update.php">Update</a></li>
                                <li><a data-toggle="modal" data-target="#Modal">Delete</a></li>

                            </ul>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
