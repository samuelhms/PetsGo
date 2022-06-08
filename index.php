<?php get_header(); ?>

  

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item ">
                <img class="w-100" src="http://localhost/wp-content/uploads/2022/06/carousel-1-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">O Melhor Serviço Pet</h3>
                            <h1 class="display-3 text-white mb-3">Deixe seu Pet feliz</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">Feito por quem tem e ama Pets também.</h5>
                            <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Fale conosco</a>
                            <a href="" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img class="w-100" src="http://localhost/wp-content/uploads/2022/06/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">O Melhor Serviço Pet</h3>
                            <h1 class="display-3 text-white mb-3">Pet Hotel & Pet Spa</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">Para que você possa viajar e seu Pet descansar</h5>
                            <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Agende</a>
                            <a href="" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div id="about" class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">Sobre nós</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">Amor </span> & <span class="text-secondary">Confiança</span></h1>
                <h5 class="text-muted mb-3">A PetsGo nasceu da dificuldade dos fundadores em encontrar um PetShop que cuidasse do seu animalzinho tão bem quanto o dono.</h5>
                <p class="mb-4">O nosso bichinho merece todo o amor do mundo, e não sabiamos como ele era tratado nos banho e tosas. 
                    E duvida começou quando reaparamos que o Bob (meu cachorro) não se sentia confortavel quando o motorista vinha buscá-lo em casa.
                </p>
                <ul class="list-inline">
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Planos Anuais</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Serviços de Emergência</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Atendimento Especializado</h5></li>
                </ul>
                <a href="#price" class="btn btn-lg btn-primary mt-3 px-4">Assinar</a>
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="img-fluid w-100" src="http://localhost/wp-content/uploads/2022/06/about-1.jpg" alt=""> 
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="http://localhost/wp-content/uploads/2022/06/about-3.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="http://localhost/wp-content/uploads/2022/06/about-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div id="service" class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Nossos Serviços</h4>
                <h1 class="display-4 m-0"><span class="text-primary">Pet</span> Services</h1>
            </div>
            <div class="row pb-3">
                <?php while (have_posts()): if(have_posts()): the_post(); ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3"><?php the_title();?></h3>
                        <p><?php the_content();?></p>
                        <a class="text-uppercase font-weight-bold" href="<?php the_permalink();?>">Saiba Mais</a>
                    
                    </div>
                </div>
                <?php wp_reset_postdata();?>
                <?php endif; endwhile;?>
                
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid  pt-5 pb-4">
    <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Por que nos escolher?</h4>
            
        </div>
        <div class="row align-items-center">
            
            <div class="col-lg-5">
                <img class="img-fluid w-100" src="http://localhost/wp-content/uploads/2022/06/blog-1.jpg" alt="">
            </div>
            <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                
                <h1 class="display-4 mb-4"><span class="text-primary">Amamos</span> Pets</h1>
                <p class="mb-4">Dolor lorem lorem ipsum sit et ipsum. Sadip sea amet diam sed ut vero no sit. Et elitr stet sed sit sed kasd. Erat duo eos et erat sed diam duo</p>
                <div class="row py-2">
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-cat font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Area ampla para os animais</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-doctor font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Serviços de Emergência</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <h1 class="flaticon-care font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Adestramentos </h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <h1 class="flaticon-dog font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Veterinario Disponivel 24h</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Pricing Plan Start -->
    <div  class="container-fluid bg-light pt-5 pb-4">
        <div id="price"  class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Planos PetsGo</h4>
                <h1 class="display-4 m-0">Assine um <span class="text-primary"> Plano Anual</span></h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="http://localhost/wp-content/uploads/2022/06/price-1.jpg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-primary mb-3">Básico</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">R$</small>799<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Anual</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>11 Banhos</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>4 Tosagens</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Spa & Hotel</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Veterinário</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Signup Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="http://localhost/wp-content/uploads/2022/06/price-2.jpg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-secondary mb-3">Standard</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">R$</small>1565<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Anual</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>20 Banhos</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>6 Tosagens</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>2 Spa & Hotel (3 dias)</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Veterinário</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="" class="btn btn-secondary btn-block p-3" style="border-radius: 0;">Signup Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="http://localhost/wp-content/uploads/2022/06/price-3.jpg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-primary mb-3">Premium</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">R$</small>3149<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Anual</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>26 Banhos</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>8 Tosagens</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>5 Spa & Hotel (3 dias)</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Veterinário 24/7</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Signup Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    <div class="container mt-5 pt-5 pb-3">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Colaboradores</h4>
            <h1 class="display-4 m-0">Conheça o nosso <span class="text-primary">Time</span></h1>
        </div>
        <div class="row justify-content-center ">
            <div class="col-lg-3 col-md-6">
                <div class="team card position-center overflow-hidden border-0 mb-4">
                    <img class="card-img-top" src="img/team-4.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-light">
                            <h5><?php the_author()?></h5>
                            <i>Estagriario</i>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                            <a target="blank" class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://github.com/samuelhms"><i class="fab fa-github"></i></a>
                            <a target="blank" class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://samuelhms.github.io/my-portfolio/"><i class="fab fa-font-awesome"></i></a>
                            <a target="blank" class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://www.linkedin.com/in/samuelhmaciel/"><i class="fab fa-linkedin-in"></i></a>
                            <a target="blank" class="btn btn-outline-primary rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="https://api.whatsapp.com/send?phone=553191342995"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light my-5 p-0 py-5">
        <div class="container p-0 py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Comentarios</h4>
                <h1 class="display-4 m-0">O que nossos  <span class="text-primary">Clientes</span> sentem</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->



<?php get_footer(); ?>
    
</body>
</html>