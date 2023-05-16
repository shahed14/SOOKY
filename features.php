<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="home.css">
    <style>
        /* Custom styles for the hero section */
        .hero {
            display: flex;
            align-items: center;
            background-color: #f8f9fa;
            padding: 130px 0;
            color: #fff;
            border: solid 1px black;
        }
        
        .hero-text {
            flex: 1;
            text-align: left;
            padding-right: 50px;
        }
        
        .hero-heading {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 30px;
        }
        
        .hero-subheading {
            font-size: 24px;
            margin-bottom: 50px;
        }
        
        .hero-image {
            flex: 1;
            text-align: right;
        }
        
        .hero-image img {
            max-width: 100%;
            height: auto;
        }
        
        .hero-button {
            font-size: 18px;
            font-weight: bold;
            padding: 15px 40px;
            border-radius: 30px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
        }
        .core-features {
            padding: 60px 0;
            background-color: #f8f9fa;
        }
        
        .core-feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
        }
        
        .core-feature-image {
            flex: 1;
            text-align: center;
        }
          .core-feature-image img {
            max-width: 100%;
            height: auto;
        }
        
        .core-feature-content {
            flex: 1;
        }
        
        .core-feature-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .core-feature-description {
            color: #6c757d;
        }
         .centered-button {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
        }
        
        .orange-button {
            font-size: 24px;
            font-weight: bold;
            padding: 20px 40px;
            border-radius: 30px;
            background-color: orange;
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
   <nav class="navbar navbar-expand-lg bg-body-tertiary" >
  <div class="container-fluid">
    <a class="navbar-brand" style="color: orange; font-size: 30px;" href="#">SOOKY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CUSTOMER</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PRODUCT TOUR
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">features</a></li>
            <li><a class="dropdown-item" href="#"> pricing</a></li>
            <li><hr class="dropdown-divider"></li>
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link ">MARKETPLACE</a>
        </li>
      </ul>
     
        <button class="btn btn-outline-success" type="submit">LOGIN</button>
    </div>
  </div>

</nav>

    <div class="container">
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Cat_plotting_something_evil%21.jpg">
    <div class="card__head">Plotting Cat</div>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/False_alarm_-a.jpg/1280px-False_alarm_-a.jpg">
    <div class="card__head">Angry Cat</div>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Neugierige-Katze.JPG/1280px-Neugierige-Katze.JPG">
    <div class="card__head">Curious Cat</div>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Al_acecho_%289272124788%29.jpg/1280px-Al_acecho_%289272124788%29.jpg">
    <div class="card__head">Prowling Cat</div>
  </div>
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Mimi%26Tigsi.jpg/1280px-Mimi%26Tigsi.jpg">
    <div class="card__head">Sleepy Cat</div>
  </div>
</div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
