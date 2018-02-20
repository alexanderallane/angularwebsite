<!doctype html>
<html lang="en" ng-app="wbcce">
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CareerCare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body ng-controller="mainCtrl as main">
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#!/">Career Care</a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#!/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tracks & Strands
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#!/tracks&strands/stem">STEM</a>
            <a class="dropdown-item" href="#!/tracks&strands/gas">GAS</a>
            <a class="dropdown-item" href="#!/tracks&strands/humss">HUMSS</a>
            <a class="dropdown-item" href="#!/tracks&strands/abm">ABM</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#!/universities&colleges">Universities & Colleges</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#!/test">Take Test</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#!/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#!/contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <div id="main"> 
    <div ng-view></div>
  </div>
  <footer class="text-center">
    <p>Web App Powered by Alex</a></p>
  </footer>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
<script src="js/app.js"></script>
<script src="js/controllers/home.js"></script>
<script src="js/controllers/about.js"></script>
<script src="js/controllers/contact.js"></script>
<script src="js/controllers/schools.js"></script>
<script src="js/controllers/tracks.js"></script>
<script src="js/controllers/stem.js"></script>
<script src="js/controllers/humss.js"></script>
<script src="js/controllers/gas.js"></script>
<script src="js/controllers/abm.js"></script>
<script src="js/controllers/test.js"></script>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/demo.js"></script>
</body>
</html>