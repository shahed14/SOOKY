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
	
	.card:hover {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
  transform: translateY(-5px);
  transition: transform 0.3s ease-in-out;
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
<main class="container-fluid" style="background-color: orange;">
  <div class="p-10 p-md-5 mb-4  ">
    <div class="col-md-6 px-0" style="font-size: bold;">
      <h1 class="display-4 fst-italic" >Build.Manage.Successd</h1>
      <p class="lead my-3">with affiliate marketing program<br>
-tell your brands story<br>
-let real-time tracking and powerful affiliate management
software grow your brand.</p>
       <button class="btn btn-outline-success" type="submit">LEARN MORE</button>
    </div>
    
  </div>
</main>
<br>
<br>
<br>
  <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
  <div class="container text-center" style="font-weight: bold;">
    <h2>Introduction</h2>
    <h3>what is affiliate marketing ?</h3>
    <br>
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-vEm6pY91HI?rel=0&amp;&showinfo=0&autoplay=0&loop=0"width="1000" height="620" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

</div>
<br>
<br>
<br>
<section class="how-to-succeed py-5">
  <div class="container">
    <h2 class="text-center mb-4" style="font-size: bold; color: orange; font-size:50px">How to Succeed</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="card border-0 shadow mb-4">
          <div class="card-body d-flex">
            <img src="steps1.png" alt="Choose the Right Influencers" class="img-fluid mr-3" width="200px;" height="100px;">
            <p class="card-text text-center" style="text-indent: 2px; font-weight: bold;">Find influencers that fit your niche and have an engaged audience.</p>
          </div>
        </div>
        <div class="card border-0 shadow">
          <div class="card-body d-flex">
            <img src="steps2.png" alt="Set Clear Goals" class="img-fluid mr-4" width="200px;" height="200px;">
            <p class="card-text text-center" style="text-indent: 2px; font-weight: bold;">Define what you want to achieve and communicate it clearly to the influencers.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card border-0 shadow mb-4">
          <div class="card-body d-flex">
            <img src="steps3.png" alt="Provide Value" class="img-fluid mr-4" width="200px;" height="200px;">
            <p class="card-text text-center" style="text-indent: 2px; font-weight: bold;">Give influencers a reason to work with you by providing value, such as free products or exclusive discounts.</p>
          </div>
        </div>
        <div class="card border-0 shadow">
          <div class="card-body d-flex">
            <img src="steps2.png" alt="Track Your Results" class="img-fluid mr-4" width="200px;" height="200px;">
            <p class="card-text text-center" style="text-indent: 2px; font-weight: bold;">Measure the success of your campaigns and adjust your strategy as needed.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
	  	    	<h2 class="text-center">WHY SOOKY ?</h2>
	  	    	<br>
	  	    	<br>

  <div class="row">
    	
    <div class="col-md-6 col-lg-3 mb-4">

      <div class="card border-0 shadow-lg">
        <img class="card-img-top" src="why_uppromote2.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Grow with SOOKY Marketplace</h5>
          <p class="card-text">List your affiliate offer on the SOOKY marketplace and get discovered by potential affiliates/influencers</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-4">
      <div class="card border-0 shadow-lg">
        <img class="card-img-top" src="why_uppromote3.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Easy migration & integration</h5>
          <p class="card-text">Free migration from other affiliate platforms. All the key data can be moved with just a few clicks.
</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-4">
      <div class="card border-0 shadow-lg">
        <img class="card-img-top" src="why_uppromote2.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Powerful management</h5>
          <p class="card-text">Convenient communication options help you keep in touch with your team.White-labeled affiliate pages
          	<p></p>
          	<p></p>
 </p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-4">
      <div class="card border-0 shadow-lg">
        <img class="card-img-top" src="why_uppromote3.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Title 4</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="bg-light py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-3 mb-md-0">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body text-center">
            <i class="fas fa-file-alt fa-4x mb-3 text-primary"></i>
            <h3 class="card-title">Expert Articles</h3>
            <p class="card-text">Read our expert articles on affiliate marketing to learn tips and tricks for success.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3 mb-md-0">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body text-center">
            <i class="fas fa-video fa-4x mb-3 text-primary"></i>
            <h3 class="card-title">Video Tutorials</h3>
            <p class="card-text">Watch our video tutorials to learn how to get the most out of UpPromote.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body text-center">
            <i class="fas fa-podcast fa-4x mb-3 text-primary"></i>
            <h3 class="card-title">Podcasts</h3>
            <p class="card-text">Listen to our affiliate marketing podcasts for insights and inspiration.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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

  <div class="row text-center">
    <div class="col-md-4 mb-5 mb-md-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3">Maria Smantha</h5>
      <h6 class="text-primary mb-3">Web Developer</h6>
      <p class="px-xl-3">
        <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet, consectetur
        adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
        tenetur.
      </p>
      <ul class="list-unstyled d-flex justify-content-center mb-0">
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star-half-alt fa-sm text-warning"></i>
        </li>
      </ul>
    </div>
    <div class="col-md-4 mb-5 mb-md-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3">Lisa Cudrow</h5>
      <h6 class="text-primary mb-3">Graphic Designer</h6>
      <p class="px-xl-3">
        <i class="fas fa-quote-left pe-2"></i>Ut enim ad minima veniam, quis nostrum
        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid commodi.
      </p>
      <ul class="list-unstyled d-flex justify-content-center mb-0">
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
      </ul>
    </div>
    <div class="col-md-4 mb-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3">John Smith</h5>
      <h6 class="text-primary mb-3">Marketing Specialist</h6>
      <p class="px-xl-3">
        <i class="fas fa-quote-left pe-2"></i>At vero eos et accusamus et iusto odio
        dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.
      </p>
      <ul class="list-unstyled d-flex justify-content-center mb-0">
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="far fa-star fa-sm text-warning"></i>
        </li>
      </ul>
    </div>
  </div>
</section>
<br>
<br>
<br>
<br>

<main class="container-fluid " style="background-color: orange;">
  <div class="p-10 p-md-5 mb-4  ">
    <div class="col-md-6 px-0" style="font-size: bold;">
      <h1 class="display-4 fst-italic text-center" >Leverage affiliate management to reach the next level</h1>
      <p class="lead my-3 text-center">with affiliate Support team is live 24/7 ready to help you set up and grow.
Looking for an advanced option? View our Enterprise Package</p>
       <button class="btn btn-outline-success" type="submit">start for free</button>
    </div>
    
  </div>
</main>

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