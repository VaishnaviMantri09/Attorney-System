<!DOCTYPE html>
<html>
<head>
 <title>Contact Us</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>
<body>
 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" ><u>Contact Us</u></h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 <tr class="bg-dark text-white text-center">
 <th> Sr.No </th>
     <th>Cilent Name</th>
     <th>Gmail</th>
          <th>Phone Number</th>
    <th>Specifications</th>
 </tr >
        <?php
            $con =mysqli_connect('localhost' , 'root', '', 'cilent');
          $squery="SELECT `ID`, `Name`, `Gmail`, `PhoneNo`, `Message` FROM `contactus`";
          $query=mysqli_query($con,$squery);
          $num=mysqli_num_rows($query);
          while($res =mysqli_fetch_array($query))
          {
    ?>
            <tr>
                <td><?php   echo $res['ID'];  ?></td>
                  <td><?php   echo $res['Name'];  ?></td>
                            <td><?php   echo $res['Gmail'];  ?></td>
                      <td><?php   echo $res['PhoneNo'];  ?></td>
                        <td><?php   echo $res['Message'];  ?></td>
                            </tr>
<?php
          }
          ?>
    </table>
  </div>
</div>
      </body>
    </html>
