
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>

    <meta charset="<?php bloginfo("charset")?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="Description" content= "<?php bloginfo("description")?>"/>
    <meta name="keywords" content= "petshop,pets,dog,cat,petsgo">
    <meta name="viewport" content="width-device-width, initial-scale=1">

    <link rel="pingback" href="<?php bloginfo("pingback_uri")?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    


<!-- Google Web Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Flaticon Font -->
<link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="style.css" rel="stylesheet">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
  <!-- Topbar Start -->
  <div class="container-fluid">
       
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand logoinicio">
                <img class="logoPet" src="http://localhost/wp-content/uploads/2022/06/pet-shop-logo.png" alt="Image"> 
                <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Pets</span>Go</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">

            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Pets</span>Go</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="#index" class="nav-item nav-link active">Inicio</a>
                    <a href="#about" class="nav-item nav-link">Sobre</a>
                    <a href="#service" class="nav-item nav-link">Serviços</a>
                    <a href="#price" class="nav-item nav-link">Planos</a>
                    
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="#price" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Assine Já</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
