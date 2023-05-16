<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">
<link rel="stylesheet" type="text/css" href="home.css">
	<style type="text/css">
	.bd-placeholder-img{
		font-size: 1.125em;
		text-anchor: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		user-select: none;
	}	
	@media(min-width: 768px){
		.bd-placeholder-img-lg{
			font-size: 4.5rem;
		}
	}
	.title-container {
            background-color: black;
            text-align: center;
            padding: 10px;
            color: orange;
        }
	
	.card:hover {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
  transform: translateY(-5px);
  transition: transform 0.3s ease-in-out;
}
.transparent-container {
  position: relative;
  text-align: center;
}

.transparent-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0.5; /* Adjust the opacity value as needed */
}

.content {
  position: relative;
  z-index: 1;
  padding: 20px;
}


	</style>
</head>
<body>
	<div class="dropdown position-fixed bottom-0 end-0 mb-3 bd-mode-toggle">
		<button class=" btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id = "bd-theme"
		type = "button"
		aria-expanded = "false"
		data-bs-toggle = "dropdown"
		aria-label = "toggle theme (auto)">
		<svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby = "bd-theme-text">
      	<li>
      		<button type = "button" class="dropdown-item d-flex align-items-center" data--bs-theme-value = "light"aria-pressed = "flase">
      		<svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>	
      	</li>
      </ul>
  </div>
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

   
   <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic"> Listen to inspiring stories from companies like yours </h1>
          <p class="lead my-3"> See how companies around the world are conquering common problems and elevating their affiliate marketing strategy. .</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>
<section class="p-4 p-md-5 text-center text-lg-start shadow-1-strong rounded" style="
    background-color:darkslategray;
  ">
  <div class="row d-flex justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body m-3">
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
              <img src="woman.avif"
                class="rounded-circle img-fluid shadow-1" alt="woman avatar" width="200" height="200" />
            </div>
            <div class="col-lg-8">
              <p class="text-muted fw-light mb-4">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
                molestiae numquam quas, voluptates omnis nulla ea odio quia similique
                corrupti magnam.
              </p>
              <p class="fw-bold lead mb-2"><strong>Anna Smith</strong></p>
              <p class="fw-bold text-muted mb-0">Product manager</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
<br>
<br>
<section>
  <div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
      <h3 class="mb-4">Testimonials</h3>
      <p class="mb-4 pb-2 mb-md-5 pb-md-0">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
        numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
        quisquam eum porro a pariatur veniam.
      </p>
    </div>
  </div>

  <div class="row text-center d-flex align-items-stretch">
    <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: #9d789b;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="woman.avif"
            class="rounded-circle img-fluid" />
        </div>
        <div class="card-body">
          <h4 class="mb-4">Maria Smantha</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet eos adipisci,
            consectetur adipisicing elit.
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: darkorange;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="woman2.avif"
            class="rounded-circle img-fluid" />
        </div>
        <div class="card-body">
          <h4 class="mb-4">Lisa Cudrow</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fas fa-quote-left pe-2"></i>Neque cupiditate assumenda in maiores
            repudi mollitia architecto.
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: #6d5b98;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="woman3.avif"
            class="rounded-circle img-fluid" / >
        </div>
        <div class="card-body">
          <h4 class="mb-4">John Smith</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fas fa-quote-left pe-2"></i>Delectus impedit saepe officiis ab
            aliquam repellat rem unde ducimus.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="p-4 p-md-5 text-center text-lg-start shadow-1-strong rounded" style="
    background-color:darkslategray;
  ">
  <div class="row d-flex justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body m-3">
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
              <img src="woman.avif"
                class="rounded-circle img-fluid shadow-1" alt="woman avatar" width="200" height="200" />
            </div>
            <div class="col-lg-8">
              <p class="text-muted fw-light mb-4">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
                molestiae numquam quas, voluptates omnis nulla ea odio quia similique
                corrupti magnam.
              </p>
              <p class="fw-bold lead mb-2"><strong>Anna Smith</strong></p>
              <p class="fw-bold text-muted mb-0">Product manager</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
<br>
<section>
  <div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
      <h3 class="mb-4">Testimonials</h3>
      <p class="mb-4 pb-2 mb-md-5 pb-md-0">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
        numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
        quisquam eum porro a pariatur veniam.
      </p>
    </div>
  </div>

  <div class="row text-center d-flex align-items-stretch">
    <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: #9d789b;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="woman.avif"
            class="rounded-circle img-fluid" />
        </div>
        <div class="card-body">
          <h4 class="mb-4">Maria Smantha</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet eos adipisci,
            consectetur adipisicing elit.
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: darkorange;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="woman2.avif"
            class="rounded-circle img-fluid" />
        </div>
        <div class="card-body">
          <h4 class="mb-4">Lisa Cudrow</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fas fa-quote-left pe-2"></i>Neque cupiditate assumenda in maiores
            repudi mollitia architecto.
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: #6d5b98;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="woman3.avif"
            class="rounded-circle img-fluid" / >
        </div>
        <div class="card-body">
          <h4 class="mb-4">John Smith</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fas fa-quote-left pe-2"></i>Delectus impedit saepe officiis ab
            aliquam repellat rem unde ducimus.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
  </footer>
</div>
</body>
</html>