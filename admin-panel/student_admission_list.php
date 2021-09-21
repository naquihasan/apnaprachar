<?php include_once'inc/head.php'; ?>
<link rel="stylesheet" type="text/css" href="inc/css/style.css">

<body>

  <section>
    <!-- large-screen-sidebarstarts -->
    <div class="sidebar">
      <div class="logo">
        <h3>
          <img src="../images/logo.png">
        </h3>
      </div>
      <div class="" id="sidebar-here">
        <a href="graphic_design_table.php" class="list ">Graphic Design</a>
        <a href="video_table.php">Video</a>
        <a href="message_call_table.php" class="list">Message & Call</a>
        <a href="advertisement.php" class="list ">Advertisement</a>
        <a href="celebrity_table.php" class="list active">Celebrity Short</a>
        <a href="election_management.php" class="list ">Election Management</a>
        <a href="election_material.php">Election Material</a>
        <a href="web_app_develpoment.php" class="active">Web & App Development</a>
      </div>
    </div>
    <!-- large-screen-sidebar-ends -->
    <!-- small-screen-sidebar starts -->
    <div class="small-screen-sidebar">
      <div id="mySidenav" class="sidenav">
        <div class="logo bg-color-sidenav">
          <!--  <a href="index.php"><img src="images/wmk-final.png" height="60" width="100"><span class="float-right"><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></span></a> -->
          <div class="d-flex bd-highlight">
            <div class=" bd-highlight">
              <h3 class="">
                <img src="images/logo.png">
              </h3>
            </div>
            <div class="p-2 bd-highlight">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            </div>
          </div>
        </div>
        <div class="pt-0" id="sidebar-here">
          <div class="pt-3" id="sidebar-here">
            <a href="graphic_design_table.php" class="list ">Graphic Design</a>
            <a href="video_table.php">Video</a>
            <a href="message_call_table.php" class="list">Message & Call</a>
            <a href="advertisement.php" class="list ">Advertisement</a>
            <a href="celebrity_table.php" class="list active">Celebrity Short</a>
            <a href="election_management.php" class="list ">Election Management</a>
            <a href="election_material.php">Election Material</a>
            <a href="web_app_develpoment.php" class="active">Web & App Development</a>
          </div>
        </div>
      </div>
    </div>
    <!-- large-screen-sidebar-starts -->
    <div class="content"> 
      <?php include_once'inc/header.php'; ?> 
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="card my-5 shadow">
              <nav class="navbar navbar-light  venue-registration border-bottom">
                <a class="h4 text-dark font-weight-bold pt-2">Admission List</a>
              </nav>
              <div class="card-body">
                <div class="row student">
                  <div class="col-md p-0">
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead class="border">
                          <tr>
                            <th scope="col" class="border-right">SL No.</th>
                            <th scope="col" class="border-right">Student Name</th>
                            <th scope="col" class="border-right">Father's Name</th>
                            <th scope="col" class="border-right">Mother's Name</th>
                            <th scope="col" class="border-right">Mobile Number</th>
                            <th scope="col" class="border-right">Class Applied</th>
                            <th scope="col" class="border-right">Last School TC No</th>
                            <th scope="col" class="border-right">Email Address</th>
                            <th scope="col" class="border-right">Address</th>
                            <th scope="col" class="border-right">Operation  </th>
                          </tr>
                        </thead>
                        <tbody> 
                          
                          <?php

                          $con = mysqli_connect('localhost','root','','insan-school');
                          $query = "SELECT * FROM `school_admission_form`";
                          $run = mysqli_query($con, $query);

                          
                          while($data = mysqli_fetch_assoc($run))
                          {
                            ?> <tr class="border-bottom">
                              <td class="border-right border-left"> <?php echo $data['Sl_No']; ?> </td>
                              <td class="border-right"> <?php echo $data['student_name']; ?> </td>
                              <td class="border-right"> <?php echo $data['fname']; ?> </td>
                              <td class="border-right"> <?php echo $data['mname']; ?> </td>
                              <td class="border-right"> <?php echo $data['mobile1']; ?> </td>
                              <td class="border-right"> <?php echo $data['class']; ?> </td>
                              <td class="border-right"> <?php echo $data['tc_no']; ?> </td>
                              <td class="border-right"> <?php echo $data['email']; ?> </td>
                              <td class="border-right"> <?php echo $data['address']; ?> </td>
                              
                              <td class="border-right"> 
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <a href="delete_student.php?id=<?php echo $data['Sl_No'];?>" type="submit" class="btn btn-danger">
                                    Delete
                                  </a>
                                </div>
                              </td>
                              </tr> <?php
                            }
                            ?>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script type="text/javascript">
      function openNav() {
        document.getElementById("mySidenav").style.width = "200px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
    // Script for add more button ends here
  </script>
</body>
</html>