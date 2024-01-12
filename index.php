<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="global-container h-100">
    
    <!-- Navigation -->
    
    <nav class="global-container navbar fixed-top navbar-light bg-light justify-content-center border-bottom shadow-sm">
        <a href="#home" class="nav-link fs-5 text-dark">Home</a>
        <a href="#features" class="nav-link fs-5 text-dark">Features</a>
        <a href="#pricing" class="nav-link fs-5 text-dark">Pricing</a>
    </nav>
    
    <!-- Home -->
    <div id="home" class="w-100 h-100 bg-dark position-relative">
        
        <video autoplay loop muted src="ressources/video.mp4" class="position-absolute w-100 h-100"></video>
        <div class="position-absolute w-100 h-100 bg-dark opacity-50"></div>
        <div class="position-relative w-100 h-100 d-flex align-items-center justify-content-center flex-column pb-5">
            
            <p class="fs-5 text-light mb-0">The future is now</p>
            <h1 class="text-center display-1 fw-bolder text-light">The Best Hosting, for you.</h1>
            <p class="fs-5 text-light mb-4">Secure and reliable</p>
            <a href="#features" class="btn btn-lg btn-primary">Explore our features</a>
        </div>
        
    </div>
    
    
    <!-- Section 3 blocks feature -->
    
    <section id="features" class="container pb-5">
        
        <p class="fs-5 text-dark mb-0 mt-md-5 mt-4 text-center">You can lean on us</p>
        <h2 class="text-center display-4 mb-md-5 mb-3">Our servers are robust.</h2>
        
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center pt-4 pb-5 mt-md-5 mt-0">
            
            <div class="d-flex flex-column align-items-center">
                <div class="row justify-content-center">
                    <img src="ressources/chat.svg" alt="chat icon" class="col-4">
                </div>
                <h2 class="fs-4">Lorem, ipsum dolor.</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium error neque, sit quibusdam recusandae nam?</p>
            </div>
            
            
            <div class="d-flex flex-column align-items-center">
                <div class="row justify-content-center">
                    <img src="ressources/coding.svg" alt="coding icon" class="col-4">
                </div>
                <h2 class="fs-4">Lorem, ipsum dolor.</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium error neque, sit quibusdam recusandae nam?</p>
            </div>
            
            
            <div class="d-flex flex-column align-items-center">
                <div class="row justify-content-center">
                    <img src="ressources/transfer.svg" alt="transfer icon" class="col-4">
                </div>
                <h2 class="fs-4">Lorem, ipsum dolor.</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium error neque, sit quibusdam recusandae nam?</p>
            </div>
            
        </div>
        
    </section>
    
    
    <!-- Section 2 dual content -->
    
    
    <section class="border-wrapper border-top pb-5 mb-5">
        
        <div  class="container">
            
            <h2 class="text-center display-4 mt-md-5 mt-4">Quality or nothing</h2>
            <p class="fs-5 text-dark mb-md-5 mb-4 text-center">Our rewards.</p>
            
            <div class="row g-3 row-cols-1 row-cols-lg-2">
                
                <div>
                    <div class="p-5 text-white bg-dark rounded-3 shadow">
                        <h2>Best Hosting Award 2022 🏆</h2>
                        <!-- lorem15 -->
                        <p class="mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus adipisci consectetur unde debitis ab facilis.</p>
                        <a class="btn btn-outline-light" href="#">Look at the ranking</a>
                    </div>
                </div>
                
                
                <div>
                    <div class="p-5 text-dark bg-warning rounded-3 shadow">
                        <h2>Fastest servers 💨</h2>
                        <!-- lorem20 -->
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus adipisci consectetur unde debitis ab facilis.</p>
                        <a class="btn btn-outline-light" href="#">Look at the ranking</a>
                    </div>
                </div>
                
                <div>
                    <div class="p-5 text-white bg-primary rounded-3 shadow">
                        <h2>Best support 2019/2020 ☎️</h2>
                        <!-- lorem30 -->
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus adipisci consectetur unde debitis ab facilis.</p>
                        <a class="btn btn-outline-light" href="#">Look at the ranking</a>
                    </div>
                </div>
                
                <div>
                    <div class="p-5 text-dark bg-light rounded-3 shadow">
                        <h2>Groundbreaking low prices 💸</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus adipisci consectetur unde debitis ab facilis.</p>
                        <a class="btn btn-outline-dark" href="#">Look at the ranking</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    
    <!-- Striped Section -->
    
    <section class="bg-dark py-5 mt-5 d-flex flex-column justify-content-center align-items-center">
        <h1 class="text-light display-3">It's now or never.</h1>
        <p class="text-light fs-4 my-0">You can do it.</p>
        <a href="#" class="btn btn-light btn-lg mt-4">Boost your career 🔥</a>
    </section>
    
    
    <!-- Projects Section -->
    
    <section class="border-bottom">
        
        <div class="container mb-5 pb-5">
            
            <h2 class="text-center mt-md-5 mt-4 display-4">We are hosting those projects</h2>
            <p class="fs-5 text-dark mb-md-5 mb-3  text-center">World Class Websites</p>
            
            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                
                <div>
                    <div class="card">
                        <img src="ressources/robot.jpg" alt="robot image">
                        <div class="card-body">
                            <h5 class="card-title">Project</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, nisi?</p>
                            <a href="#" class="btn btn-primary">Take a look at it</a>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="card">
                        <img src="ressources/purpleish-pic.jpg" alt="purple image">
                        <div class="card-body">
                            <h5 class="card-title">Project</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, nisi?</p>
                            <a href="#" class="btn btn-primary">Take a look at it</a>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="card">
                        <img src="ressources/codebase.jpg" alt="codebase">
                        <div class="card-body">
                            <h5 class="card-title">Project</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, nisi?</p>
                            <a href="#" class="btn btn-primary">Take a look at it</a>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="card">
                        <img src="ressources/laptop.jpg" alt="laptop">
                        <div class="card-body">
                            <h5 class="card-title">Project</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, nisi?</p>
                            <a href="#" class="btn btn-primary">Take a look at it</a>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="card">
                        <img src="ressources/bright-laptop.jpg" alt="bright-laptop">
                        <div class="card-body">
                            <h5 class="card-title">Project</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, nisi?</p>
                            <a href="#" class="btn btn-primary">Take a look at it</a>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="card">
                        <img src="ressources/desk-work.jpg" alt="desk work">
                        <div class="card-body">
                            <h5 class="card-title">Project</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, nisi?</p>
                            <a href="#" class="btn btn-primary">Take a look at it</a>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </section>
    
    
    <!-- Section Pricing Tables -->
    
    
    <section id="pricing" class="container">
        
        <h1 class="text-center text-dark display-3 mt-5">Check our pricing tables.</h1>
        <p class="text-center fs-4 mb-4">We suit your needs.</p>
        
        <div class="row justify-content-center row-cols-1 row-cosl-md-2 row-cols-lg-3 p-md-5 p-0">
            
            <div class="mb-4" style="min-height: 400px">
                <div class="p-2 card bg-dark text-light h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title display-5">Basic</h5>
                        <p class="m-0"><span class="fs-1">$9</span>/month</p>
                        <ul class="mt-3 mb-5">
                            <li>1 website</li>
                            <li>100 GB storage</li>
                            <li>10 databases</li>                             
                            <li>Free 1-click WordPress install</li>             
                            <li>24/7 support</li>             
                            <li>Free domain (€9.99/yr value)</li> 
                        </ul>
                        
                        <button class="btn w-100 btn-outline-light mt-auto p-2">
                            Select
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-12 mb-4" style="min-height: 400px">
                <div class="card bg-success text-light h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title display-5">Pro</h5>
                        <p class="m-0"><span class="fs-1">$19</span>/month</p>
                        
                        <ul class="mt-3 mb-5">
                            <li>20 websites</li>
                            <li>1 TO storage</li>
                            <li>100 databases</li>             
                            <li>Online Store</li>             
                            <li>Unmetered bandwidth</li>             
                            <li>Free 1-click WordPress install</li>             
                            <li>24/7 support</li>             
                            <li>Free domain (€9.99/yr value)</li>             
                        </ul>
                        
                        
                        <button class="btn w-100 btn-outline-light mt-auto  p-2">Select</button>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-12 mb-4" style="min-height: 400px">
                <div class="card bg-warning text-dark h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title display-5">Expert</h5>
                        <p class="m-0"><span class="fs-1">$39</span>/month</p>
                        
                        <ul class="mt-3 mb-5">
                            <li>Unlimited websites</li>
                            <li>Unlimited storage</li>
                            <li>Unlimited databases</li>             
                            <li>Online Store</li>             
                            <li>Unmetered bandwidth</li>             
                            <li>Free 1-click WordPress install</li>             
                            <li>24/7 support</li>             
                            <li>Free domain (€9.99/yr value)</li>               
                        </ul>
                        
                        
                        <button class="btn w-100 btn-outline-dark mt-auto  p-2">Select</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- Parallax Section -->
    
    <section
    class="parallax-section d-flex justify-content-center align-items-center">
    <h2 class="display-3 text-center text-light fw-bolder">
        Take Action
    </h2>
</section>


<!-- Contact -->

<section class="border-top pb-5 mb-5 container">
    
    <h2 class="text-center display-4 my-md-5 my-4">Contact-us</h2>

    <?php require_once 'index.php/formulaire_contact.php'; ?>
    
</section>


<!-- Footer -->

<footer class="bg-light text-center py-3 my-4 border-top">
    <a href="#" class="mb-3 mb-md-0 text-muted text-decoration-none lh-1">© 2023 Company, Inc</a>
</footer>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>