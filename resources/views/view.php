<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
<p></p>
<div class="container">
  <center>
  <div class="row">
    <div class="col-sm-6">
      <p><a href="./insert" class="btn btn-success" role="button">Insert</a> </p>
    </div>
    <div class="col-sm-6">
      <p><a href="#" class="btn btn-success" role="button">Update</a> </p>
    </div>

  </div>
</center>
</div>

<div class="jumbotron text-center">
  <h1>My First Bootstrap Page</h1>

  <table border=1>
    <tr bgcolor=#E8E8E8>
      <td><center><b>รหัส</b></center></td>
      <td><center><b>ชื่อ</b></center></td>
      <td><center><b>สกุล</b></center></td>
      <td><center><b>เพศ</b></center></td>
      <td><center><b>ลบ</b></center></td>
    </tr>

    <?php

    foreach ($result as $row) {
        $id=$row->id;
        $Fname=$row->Fname;
        $Lname=$row->Lname;
        $sex=$row->sex;

        $link1=url('/delete/'.$id);

       echo "<tr>
         <td><center>$id</center></td>
         <td>$Fname</td>
         <td>$Lname</td>
         <td>$sex</td>
         <td><center><a href='$link1'>ลบ</center></a></td>
       </tr>";
   }
   ?>
  </table>

</div>


</body>
</html>
