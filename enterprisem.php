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
            height: 550px;
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
        a:hover,a:focus{
    text-decoration: none;
    outline: none;
}
#accordion .panel{
    border: none;
    border-radius: 0;
    box-shadow: none;
    margin: 0 0 10px;
    overflow: hidden;
    position: relative;
}
#accordion .panel-heading{
    padding: 0;
    border: none;
    border-radius: 0;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
}
#accordion .panel-heading:before,
#accordion .panel-heading:after{
    content: "";
    width: 50%;
    height: 50%;
    box-shadow: 0 15px 5px rgba(0, 0, 0, 0.4);
    position: absolute;
    bottom: 15px;
    left: 10px;
    transform: rotate(-3deg);
    z-index: -1;
}
#accordion .panel-heading:after{
    left: auto;
    right: 10px;
    transform: rotate(3deg);
}
#accordion .panel-title a{
    display: block;
    padding: 15px 70px 15px 70px;
    margin: 0;
    background: #fff;
    font-size: 18px;
    font-weight: 700;
    letter-spacing: 1px;
    color: #d11149;
    border-radius: 0;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) inset;
    position: relative;
}
#accordion .panel-title a:before,
#accordion .panel-title a.collapsed:before{
    content: "\f106";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    width: 55px;
    height: 100%;
    text-align: center;
    line-height: 50px;
    border-left: 2px solid #D11149;
    position: absolute;
    top: 0;
    right: 0;
}
#accordion .panel-title a.collapsed:before{ content: "\f107"; }
#accordion .panel-title a .icon{
    display: inline-block;
    width: 55px;
    height: 100%;
    border-right: 2px solid #d11149;
    font-size: 20px;
    color: rgba(0,0,0,0.7);
    line-height: 50px;
    text-align: center;
    position: absolute;
    top: 0;
    left: 0;
}
#accordion .panel-body{
    padding: 10px 20px;
    margin: 0 0 20px;
    border-bottom: 3px solid #d11149;
    border-top: none;
    background: #fff;
    font-size: 15px;
    color: #333;
    line-height: 27px;
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

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 hero-text">
                    <h1 class="hero-heading" style="color: orange;">Affiliate management at its best</h1>
                    <p class="hero-subheading" style="color: black;">- Advanced affiliate solution for top brands.<br>
                  - Let us help your business go viral by building the best ambassador team. </p>
                    <a href="#" class="btn btn-warning">Start for free</a>
                </div>
                <div class="col-md-6 hero-image">
                    <img src="enterprise.png" alt="Hero Image">
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <h2 class="text-center">BENEFITS</h2>
    <br>
<div class="container align-items-center">
    <div class="row">
        <div class="col-md-6">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="icon fi fi-rr-globe"></i>
                                unlimited everything
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <p>Unlock every advanced feature and quantity limit. No need to worry about blocked functions, Grow your business exponentially. </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="icon fa fa-briefcase"></i>
                                Connect multiple-stores                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <p> Easily access and manage your stores, sync new affiliates and track affiliates' performances across connected stores  </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="icon fa fa-mobile"></i>
                                Custom development
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p> Request your own custom features to meet your business requirements  </p>
                        </div>
                    </div>
                    <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="icon fa fa-briefcase"></i>
Prioritized support                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <p>  24/7 live agents ready to assist and support you. Your requests are our absolute priority.   </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>



<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


</body>
</html>