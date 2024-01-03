<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Board</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>LAW  <span>FIRM</span></h3>
      </div>
      <div class="right_area">
                        <a href="http://localhost/LawFirm/Cilent/start.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="1.png" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="http://localhost/LawFirm/LawyerSide/Appointments.php"><i class="fas fa-desktop"></i><span> Apptointments</span></a>
        <a href=""><i class="fas fa-cogs"></i><span>Previous Cilents</span></a>
          <a href="http://localhost/LawFirm/LawyerSide/contactus.php"><i class="fas fa-th"></i><span>Contact Us</span></a>
              </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="1.png" class="profile_image" alt="">
        <h4>Admin</h4>
      </div>
      <a href="http://localhost/LawFirm/LawyerSide/Appointments.php"><i class="fas fa-desktop"></i><span>Apptointments</span></a>
      <a href="http://localhost/LawFirm/LawyerSide/praticeareas.php"><i class="fas fa-cogs"></i><span>Previous Cilents</span></a>
        <a href="http://localhost/LawFirm/LawyerSide/contactus.php"><i class="fas fa-th"></i><span>Contact Us</span></a>
                  </div>
    <!--sidebar end-->

    <div class="content">
      <h1> <u>Welcome to Admin Board!!</u></h1>
      <div class="card">
			<h2><p> We at Law Firm are workingSince 2005, our attorneys have practiced Employment Law exclusively.
         We know the law, and we have the practical experience to back it up.Our attorneys have handled cases in the state,
         county, and federal courts, and private arbitrations across Texas, Arizona, Michigan and California, including the
          appellate courts of the 5th, 6th, 8th, and 9th Circuit Federal Courts of Appeals and the United States Supreme Court,
          as well as the EEOC, NLRB, DOL, and MSPB.
			</p></h2>
          </div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>
