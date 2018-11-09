<!DOCTYPE html>
<html lang="en">
<head>
  <title>Iot Parking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">IOT Project</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="datavis.html">Data visualize</a></li>
      </ul>
      <form>
        <button class="btn btn-danger navbar-btn" onclick="window.location.href='add.php'">Add</button>
      </form>
    </div>
  </nav>

<div class="jumbotron text-center" style="margin-top: 3%">
  <h1>IOT Parking</h1>
  <p>Smart City IOT Project</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h3>Image Capture</h3>
      <svg width="600" height="600">
        <rect x="20" y="20" width="500" height="500" style="fill:grey;stroke:grey;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9" />
      </svg>
    </div>
    <div class="col-sm-6">
      <h3>Car Information</h3><br>
      <h4>Car Registration Number</h4>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><br>
      <h4>Position (Staff/Visitor)</h4>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><br>
      <h4>Time</h4>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><br>
    </div>
  </div>
</div>

</body>


</html>
