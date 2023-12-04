<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>save form data using ajax</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container mt-5">
  <h1 class="alert alert-primary text-center mb-5 p-3">
    CRUD using ajax application
  </h1>
  <div class="row">
    <form class="col-sm-5" id="myform">
    <h3 class="alert alert-info text-center p-2">
      Student Add and Update
    </h3>
    <div id="message"></div>
    <div>
      <input type="text" class="form-control" id="stuid" style="display: none;" />
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="nameid" />
    </div>
    <div>
      <label for="email" class="form-label">Email</label>
      <input type="text" class="form-control" id="emailid" />
    </div>
    <div>
      <label for="password" class="form-label">Password</label>
      <input type="text" class="form-control" id="passwordid" />
    </div>
    <div class="mt-5">
      <button type="submit" class="btn btn-primary" id="buttonid">Save</button>
    </div>
    </form>
      <div class="col-sm-7 text-center">
      <h3 class="alert alert-info p-2">
        Show Student Information
      </h3>
      <div id="delupdmsg"></div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody id="tbody"></tbody>
      </table>
      </div>
  </div>
</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/phpapp.js"></script>
</body>
</html>