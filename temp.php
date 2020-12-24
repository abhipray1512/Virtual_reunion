<!DOCTYPE html>
<html lang="en">

<head>
    <title>Virtual Reunion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-image: url(img/Asset.png);background-size: cover;">

    <div class="container my-auto">
        <h2 class="text-center" style="margin-top: 10%;margin-bottom: 5%;">Virtual Reunion Portal</h2>
        <div class="row">
            <div class="col-12 col-sm-6">

            </div>
            <div class="col-12 col-sm-6">
                <ul class="nav nav-tabs mx-auto">
                    <li class="active mx-auto" style="padding-left: 20%;"><a data-toggle="tab" href="#home">Register</a></li>
                    <li class="mx-auto"><a data-toggle="tab" href="#menu1">Login(if already registered)</a></li>

                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <form style="padding-top: 5%;">
                            <div class="form-group">
                                <label for="inputname">Name</label>
                                <input type="text" class="form-control" id="inputname" placeholder="Enter Full Name">
                            </div>
                            <div class="form-group">
                                <label for="inputmobile">Mobile number</label>
                                <input type="text" class="form-control" id="inputmobile" placeholder="Enter Mobile Number">
                            </div>
                            <div class="form-group">
                                <label for="inputname">Batch</label>
                                <input type="text" class="form-control" id="inputname" placeholder="Enter graduating year">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword1">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword1" placeholder="Password">
                              </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                          </form>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <form style="padding-top: 5%;">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                          </form>
                    </div>

                </div>

            </div>
        </div>


    </div>

</body>

</html>