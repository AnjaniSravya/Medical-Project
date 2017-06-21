<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Entry</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/new.css">
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
<div class="container-fluid">
    <div class="col-md-8 col-md-offset-2 bg-color col-sm-12 col-xs-12">
        <!--Search Box Section-->
        <div class="right-align">
            <strong>Disease List</strong>
                <span><button class="btn btn-default btn-pad" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button></span>
                <span><input type="text" placeholder="Disease Search"></span>
            </div>

        <!--Search Box Section End-->
        <!--Form Start-->
        <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
            <form>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter Your Title" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="4" id="description" placeholder="Enter Your Description"></textarea>
                </div>
                <div class="form-group">
                    <label for="tags">Tags</label>
                    <input type="text" class="form-control" id="tags" placeholder="Enter Your Tags" required>
                </div>
                <div class="form-group">
                    <label>Level</label>
                    <div class="radio">
                        <label><input type="radio" name="optradio"><button type="button" class="btn btn-xs btn-danger">Critical</button></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio"><button type="button" class="btn btn-xs btn-warning">Concern</button></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio"><button type="button" class="btn btn-xs btn-success">Attention</button></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio"><button type="button" class="btn btn-xs btn-primary">Normal</button></label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="critical">Critical Message</label>
                    <textarea class="form-control" rows="4" id="critical" placeholder="Critical Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-primary">Reset</button>
            </form>
        </div>
        <!--Form End-->

    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>