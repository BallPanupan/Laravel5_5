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
      <div class="col-sm-12">
        <p><a href="./insert" class="btn btn-success" role="button">Insert</a> </p>
    </div>
  </center>
  </div>
</div>

<div class="row">

  <div class="col-sm-1">
  </div>

  <div class="col-sm-11">
    <form action="insert2" method="post">
      First name :<input type="text" name ="Fname"> <br/>
       Last name :<input type="text" name ="Lname"> <br/>
       sex :
       <select name="sex">
         <option value="=ชาย">ชาย</option>
         <option value="หญิง">หญิง</option>

       </select>
    <p>
       <input type="submit">
       <input type="reset">
    </p>
       <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"/>
    </form>
  </div>

  <div class="col-sm-1">
  </div>

</div>






</body>
</html>
