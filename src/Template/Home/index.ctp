
<section id="carousel" class="carousel-section">
    <!-- Carousel
       ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
            $num = 0;
            foreach ($banner as $teste):
                ?>            
                <li data-target="#myCarousel" data-slide-to="<?= $num; ?>" <?php
                if ($num == 0) {
                    echo"class='active'";
                };
                ?>></li>
                    <?php
                    $num++;
                endforeach;
                ?>
        </ol>

        <div class="carousel-inner" role="listbox">
            <?php
            $primeiroBan = 1;
            foreach ($banner as $banner):
                ?>
                <?php if ($primeiroBan == 1) { ?>
                    <div class="item active">
                        <?php
                        $primeiroBan = 0;
                    } else {
                        ?>
                        <div class="item">
                            <?php
                        }
                        echo $this->Html->image($banner->img, array('class' => 'imge'));
                        ?>        
                    </div>     
                <?php endforeach; ?>
            </div>
        </div>
    </div><!-- /.carousel -->
</section>
<!-- About Section -->
<section id="about" class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>A Barbearia</h1>
                <h3>Nosso espaço foi feito para você!</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark">
        <div class="row no-gutter popup-gallery">
            <div class="col-lg-4 col-sm-6">
                <a href="webroot/img/Franks Barber Shop-3.jpg" class="portfolio-box">
                    <img src="webroot/img/Franks Barber Shop-3.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-sm-6">
                <a href="webroot/img/38b3efa4-ec82-4be6-8071-c2a0d4b3264c.jpg" class="portfolio-box">
                    <img src="webroot/img/38b3efa4-ec82-4be6-8071-c2a0d4b3264c.jpg" class="img-responsive"alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div><div class="col-lg-4 col-sm-6">
                <a href="webroot/img/Franks Barber Shop-3.jpg" class="portfolio-box">
                    <img src="webroot/img/Franks Barber Shop-3.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-sm-6">
                <a href="webroot/img/BackAlleyBarberShop-02.jpg" class="portfolio-box">
                    <img src="webroot/img/BackAlleyBarberShop-02.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div><div class="col-lg-4 col-sm-6">
                <a href="webroot/img/Franks Barber Shop-3.jpg" class="portfolio-box">
                    <img src="webroot/img/Franks Barber Shop-3.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-sm-6">
                <a href="webroot/img/nh.jpg" class="portfolio-box">
                    <img src="webroot/img/nh.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Mostrar
                            </div>
                            <div class="project-name">
                                Todas as Imagens

                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class=" text-center">
            <h2>Todas as Imagens</h2>
            <p>Confira na galeria todas as fotos de nosso espaço.</p>
            <a href="#" class="btn btn-default btn-xl "><i class="fa fa-image" ></i> Galeria</a>
        </div>
        <br/>
    </div>    
    
</section>


<!-- Services Section -->
<section id="services" class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Serviços</h2>
                <!--<hr class="primary">-->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">         
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="centered service-box">
                    <i class="fb fb-6x fb-barber1"></i>
                    <h2>Barba</h2>
                    <p>Corte de barba</p>
                    <h3>$ 15</h3>                    
                </div>
            </div>     
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="centered service-box">
                    <i class="fb fb-6x fb-cabelo"></i>
                    <h2>Cabelo Barba </h2>
                    <p>Corte de cabelo  masculino masculino masculino masculino masculino masculino masculino masculino</p>
                    <h3>$ 15</h3>                    
                </div>
            </div> 
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="centered service-box">
                    <i class="fb fb-6x fb-barber1"></i>
                    <h2> Barba Barba </h2>
                    <p>Corte de barba</p>
                    <h3>$ 15</h3>                    
                </div>
            </div>     
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="centered service-box">
                    <i class="fb fb-6x fb-cabelo"></i>
                    <h2>Cabelo</h2>
                    <p>Corte de cabelo masculino</p>
                    <h3>$ 15</h3>                    
                </div>
            </div> 
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="centered service-box">
                    <i class="fb fb-6x fb-barber1"></i>
                    <h2>Barba</h2>
                    <p>Corte de barba</p>
                    <h3>$ 15</h3>                    
                </div>
            </div>     
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="centered service-box">
                    <i class="fb fb-6x fb-cabelo"></i>
                    <h2>Cabelo</h2>
                    <p>Corte de cabelo masculino</p>
                    <h3>$ 15</h3>                    
                </div>
            </div> 
            

        </div>


        <div class="row">    
            <div class="col-lg-12 col-md-12 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-image "></i>
                    <h3>Trabalhos Realizados</h3>
                    <p class="text-muted">Confira na galeria de fotos alguns de nossos trabalhos realizados.</p>
                    <a href="#" class="btn btn-dark btn-xl ">   <i class="fa fa-image" ></i> Galeria</a>

                </div>
            </div>
        </div>
    </div>

</section>


<section id="address" class="address-section">             
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Endereço </h1>                
                <h4 style="padding: 20px;padding-top: 0px"><i class="fa fa-2x fa-map-marker" aria-hidden="true">
                    </i> Rua teste, número teste, Piraquara - PR
                </h4>
                <h4> De Segunda à Sábado das 14h às 21h</h4>
                <br/>
            </div>
        </div>
    </div>
    <div id="map" style="min-height: 350px;">
    </div>
</section>
<!-- Contact Section -->
<section id="contact" class="contact-section bg-dark">


    <div class="container">
        <div class="col-lg-12">
            <h1 class="contact">Contato</h1>                
        </div>
        <form action="" class="contact-form">
            <p class="col-md-4">
                <label for="" class="contact">NOME</label><br>
                <input type="text" class="form-control"placeholder="Enter Nome">
            </p>
            <p class="col-md-4">
                <label for="" class="contact">E-MAIL</label><br>
                <input type="text" class="form-control" placeholder="Enter email">
            </p>
            <p class="col-md-4" class="contact">
                <label for="" class="contact">TELEFONE</label><br>
                <input type="text" class="form-control" placeholder="Enter telefone">
            </p>
            <p class="col-md-12">
                <label class="contact">MENSAGEM</label><br>
                <textarea type="text" rows="4" class="form-control"placeholder="Enter Mensagem"></textarea>
            </p>
            <div class="col-md-12">
                <button class="btn btn-default btn-xl">Enviar Mensagem</button>
            </div>
        </form>


        <div class="col-sm-4">
            <div class="col-sm-12 text-center" ><h3 class="contact"><i class="fa fa-2x fa-whatsapp" aria-hidden="true"></i> </h3></div>
            <div class="col-sm-12"><h3 class="contact">41 999999999</h3></div>
        </div>
        <div class="col-sm-4">
            <div class="col-sm-12"><h3 class="contact"><i class="fa fa-2x fa-envelope-o" aria-hidden="true"></i></h3></div>
            <div class="col-sm-12"><h3 class="contact">Barberblues@teste.com.br</h3></div>
        </div>
        <div class="col-sm-4">
            <div class="col-sm-12">
                <a href="#">
                    <h3 class="contact"><i class="fa fa-2x fa-facebook-official contact" aria-hidden="true"></i></h3>
                    <div class="col-sm-12"><h3 class="contact">/Barberblues</h3></div>
                </a>
            </div>
        </div>
    </div>

</section>
