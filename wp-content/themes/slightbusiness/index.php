<?php get_header(); ?>


        <!--================= Slider Area ==================-->
        <section class="slider-area">
            
            <div class="slide carousel carfade" id="mainCarousle" data-ride="carousel" data-interval="4000">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="comonItem itemOne">
                            <div class="slider-caption">
                                <h2 class="animated5"><span>A Melhor escolha</span></h2>
                                <h3 class="animated6"><span>para o seu negócio</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="comonItem itemTwo">
                            <div class="slider-caption">
                                <h2 class="animated5"><span>Segurança</span></h2>
                                <h3 class="animated6"><span> e Confiabilidade</span></h3>
                            </div>
                        </div>
                    </div>

                </div>
                <ol class="carousel-indicators">
                    <li data-target="#mainCarousle" data-slide-to="0" class="active"></li>
                    <li data-target="#mainCarousle" data-slide-to="1" class=""></li>
                </ol>
            </div>
        </section>
        <!--================= Feature Area ==================-->
        <section id="empresa"  style="margin-top:5px;" class="features-area home2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home2/imac.png" alt="" class="widthAuto">
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                        <h3>Sobre a <span>CommPlusNet </span></h3>
                        <p id="servicos"> Somos uma empresa do Grupo <a target="_blank" href="http://www.migratelecom.com.br/"> <span style="font-weight: 600">Migra Telecom</span></a>, especializada em serviços de consultoria e auditoria do ponto de vista operacional em 
                        telecomunicações corporativas, com ênfase em segurança de redes e gestão operacional. Enquanto a Migra cuida do eixo financeiro das 
                        telecomunicações, a CommPlusNet se encarrega do eixo operacional.</p>
                        
                        <p>
                        Visite o site da Migra telecom  <a target="_blank" href="http://www.migratelecom.com.br/"> <span style="font-weight: 600">Clicando Aqui</span></a>
                        </p>

                        <h3 >Nossos<span> Serviços </span></h3>
                        
                        <ul class="features-list">
                            <li>Consultoria</li>
                            <li>Projetos Especializados</li>
                            <li>Estudos de Viabilidade Técnica e Econômica</li>
                            <li style="font-size:12px;">Suporte Técnico a nível de engenharia no modelo "timesharing engineer"</li>
                            <li>Reestruturação de áreas de TIC</li>
                            <li>Auditoria Técnica  e operacional</li>
                            <li>Segurança de Redes de Telefonia e Dados</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--================= Our Service Section ==================-->
        <section class="our-service home2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                        <i class="icon-pencil"></i>
                        <div class="service-list">
                            <h4>Projetos Especializados</h4>
                    
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                        <i class="icon-lightbulb-1"></i>
                        <div class="service-list">
                            <h4>Estudos de Viabilidade</h4>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="600ms">
                        <i class="icon-comment-6"></i>
                        <div class="service-list">
                            <h4>Treinamentos Específicos</h4>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--================= Gallery Section 
        <section class="gallery-area">
            <div class="single-gallery wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/folio/1.jpg" alt="">
                <div class="gallery-hover">
                    <h4>image<span>title</span></h4>
                    <ul>
                        <li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/folio/folio_hover/a.jpg" data-rel="prettyPhoto"><i class="icon-search-6"></i></a></li>
                        <li><a href="folio4.html"><i class="icon-location-7"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="single-gallery wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/folio/2.jpg" alt="">
                <div class="gallery-hover">
                    <h4>image<span>title</span></h4>
                    <ul>
                        <li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/folio/folio_hover/b.jpg" data-rel="prettyPhoto"><i class="icon-search-6"></i></a></li>
                        <li><a href="folio4.html"><i class="icon-location-7"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="single-gallery wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/folio/3.jpg" alt="">
                <div class="gallery-hover">
                    <h4>image<span>title</span></h4>
                    <ul>
                        <li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/folio/folio_hover/c.jpg" data-rel="prettyPhoto"><i class="icon-search-6"></i></a></li>
                        <li><a href="folio4.html"><i class="icon-location-7"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="single-gallery wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/folio/4.jpg" alt="">
                <div class="gallery-hover">
                    <h4>image<span>title</span></h4>
                    <ul>
                        <li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/folio/folio_hover/d.jpg" data-rel="prettyPhoto"><i class="icon-search-6"></i></a></li>
                        <li><a href="folio4.html"><i class="icon-location-7"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="single-gallery wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/folio/5.jpg" alt="">
                <div class="gallery-hover">
                    <h4>image<span>title</span></h4>
                    <ul>
                        <li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/folio/folio_hover/e.jpg" data-rel="prettyPhoto"><i class="icon-search-6"></i></a></li>
                        <li><a href="folio4.html"><i class="icon-location-7"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="single-gallery wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/folio/6.jpg" alt="">
                <div class="gallery-hover">
                    <h4>image<span>title</span></h4>
                    <ul>
                        <li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/folio/folio_hover/f.jpg" data-rel="prettyPhoto"><i class="icon-search-6"></i></a></li>
                        <li><a href="folio4.html"><i class="icon-location-7"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </section>-->



        <!--================= About Company Section ==================-->
        <section id="experiencia" class="about-company">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                        <h2 class="common-title">Nossa <span>Experiência</span></h2>
                    </div>
                    <div class="col-sm-6 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                        <h2 class="common-title">Ética<span> e Confiabilidade</span></h2>
                    </div>
                </div>
                <div class="row">
                  
                    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                        <div class="company-description">

                            <h6>Nossa experiência foi construída ao longo dos anos 70s, 80s, 90s, 00s até a atualidade. 
                            Foi durante esse período que as tecnologias das telecomunicações e computação traçaram caminhos inicialmente separados para depois 
                            através da digitalização caminharem juntas atingindo os resultados espetaculares que hoje presenciamos</h6>

                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 col-xs-12 no-padding text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                        <div class="company-description">

                            <h6>Nosso pessoal prima pelos aspectos de confidencialidade em tudo que se relaciona com o dia-a-dia de nossos clientes. 
                            Garantimos que todas informações manuseadas nunca serão de conhecimento de terceiros sem a devida autorização do cliente. 
                            Primamos pela ética profissional em todos os momentos de nossas atividades.</h6>

                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <!--================= Map Section ==================-->
<section id="contato" class="map-area wow fadeInUp animated" data-wow-duration="700ms" data-wow-delay="400ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 400ms;">
            <div class="homeMap" id="map" style="overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(https://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 454px; top: 41px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 454px; top: 297px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 454px; top: 553px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 198px; top: 41px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 198px; top: 297px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 454px; top: -215px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 198px; top: -215px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 198px; top: 553px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -58px; top: 41px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -58px; top: 297px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -58px; top: -215px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -58px; top: 553px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -314px; top: 297px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -314px; top: 41px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -314px; top: -215px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -314px; top: 553px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 710px; top: 297px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 710px; top: 41px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 710px; top: -215px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 966px; top: 297px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 966px; top: 41px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 710px; top: 553px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 966px; top: -215px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 966px; top: 553px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 1222px; top: 41px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 1222px; top: 297px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 1222px; top: -215px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 1222px; top: 553px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 1478px; top: 297px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 1478px; top: 41px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 1478px; top: -215px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 1478px; top: 553px;"></div></div></div></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 454px; top: 41px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19374!3i23446!2m3!1e0!2sm!3i298151234!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 454px; top: 297px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19374!3i23447!2m3!1e0!2sm!3i298108758!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 454px; top: 553px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19374!3i23448!2m3!1e0!2sm!3i298108758!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 198px; top: 41px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19373!3i23446!2m3!1e0!2sm!3i298151234!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 198px; top: 297px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19373!3i23447!2m3!1e0!2sm!3i298112056!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 454px; top: -215px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19374!3i23445!2m3!1e0!2sm!3i298151234!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 198px; top: -215px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19373!3i23445!2m3!1e0!2sm!3i298151234!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 198px; top: 553px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19373!3i23448!2m3!1e0!2sm!3i298112056!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -58px; top: 41px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19372!3i23446!2m3!1e0!2sm!3i298151234!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -58px; top: 297px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19372!3i23447!2m3!1e0!2sm!3i298112056!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -58px; top: -215px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19372!3i23445!2m3!1e0!2sm!3i298151234!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -58px; top: 553px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19372!3i23448!2m3!1e0!2sm!3i298112056!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -314px; top: 41px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19371!3i23446!2m3!1e0!2sm!3i298151234!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -314px; top: -215px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19371!3i23445!2m3!1e0!2sm!3i298151234!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -314px; top: 553px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19371!3i23448!2m3!1e0!2sm!3i298112056!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -314px; top: 297px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19371!3i23447!2m3!1e0!2sm!3i298112056!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 710px; top: 297px;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19375!3i23447!2m3!1e0!2sm!3i298108758!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 710px; top: 41px;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19375!3i23446!2m3!1e0!2sm!3i298151234!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 710px; top: -215px;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19375!3i23445!2m3!1e0!2sm!3i298151234!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 966px; top: 297px;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19376!3i23447!2m3!1e0!2sm!3i298108758!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 966px; top: 41px;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19376!3i23446!2m3!1e0!2sm!3i298151234!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 710px; top: 553px;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19375!3i23448!2m3!1e0!2sm!3i298108758!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 966px; top: -215px;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19376!3i23445!2m3!1e0!2sm!3i298151234!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 966px; top: 553px;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19376!3i23448!2m3!1e0!2sm!3i298108758!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 1222px; top: 41px;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19377!3i23446!2m3!1e0!2sm!3i298108758!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 1222px; top: 297px;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19377!3i23447!2m3!1e0!2sm!3i298108758!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 1222px; top: -215px;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19377!3i23445!2m3!1e0!2sm!3i298112056!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 1222px; top: 553px;"><img src="https://mts1.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19377!3i23448!2m3!1e0!2sm!3i298108758!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 1478px; top: 297px;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19378!3i23447!2m3!1e0!2sm!3i298108758!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 1478px; top: 41px;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19378!3i23446!2m3!1e0!2sm!3i298112056!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 1478px; top: -215px;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19378!3i23445!2m3!1e0!2sm!3i298112056!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 1478px; top: 553px;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i16!2i19378!3i23448!2m3!1e0!2sm!3i298069877!3m9!2spt-BR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=45.494552,-73.569759&amp;z=16&amp;t=m&amp;hl=pt-BR&amp;gl=US&amp;mapclient=apiv3" title="Clique para ver esta área no Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 62px; height: 26px; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/google_white2.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 62px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 295px; bottom: 0px; width: 170px;"><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Dados do mapa</a><span style="">Dados cartográficos ©2015 Google</span></div></div></div><div style="padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); -webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 569px; top: 223px; background-color: white;"><div style="padding: 0px 0px 10px; font-size: 16px;">Dados do mapa</div><div style="font-size: 13px;">Dados cartográficos ©2015 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Dados cartográficos ©2015 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; position: absolute; -webkit-user-select: none; right: 112px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a href="https://www.google.com/intl/pt-BR_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Termos de Uso</a></div></div><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a target="_new" title="Informar erros no mapa ou nas imagens para o Google" href="https://www.google.com/maps/@45.4945523,-73.5697587,16z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Informar erro no mapa</a></div></div><div class="gmnoprint" draggable="false" controlwidth="25" controlheight="226" style="margin: 5px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;"><div class="gmnoprint" controlwidth="0" controlheight="0" style="opacity: 0.6; display: none; position: absolute;"><div title="Girar o mapa em 90 graus" style="width: 22px; height: 22px; overflow: hidden; position: absolute; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -38px; top: -360px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" controlwidth="25" controlheight="226" style="position: absolute; left: 0px; top: 0px;"><div title="Aumentar o zoom" style="width: 23px; height: 24px; overflow: hidden; position: relative; cursor: pointer; z-index: 1;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -17px; top: -400px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div title="Clique para aplicar zoom" style="width: 25px; height: 178px; overflow: hidden; position: relative; cursor: pointer; top: -4px;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -17px; top: -87px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div title="Arraste para aplicar zoom" style="width: 21px; height: 14px; overflow: hidden; position: absolute; -webkit-transition: top 0.25s ease; transition: top 0.25s ease; z-index: 2; cursor: url(https://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; left: 2px; top: 60px;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: 0px; top: -384px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div title="Diminuir o zoom" style="width: 23px; height: 23px; overflow: hidden; position: relative; cursor: pointer; top: -4px; z-index: 3;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -17px; top: -361px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div></div><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; position: absolute; right: 192px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><span>100 m&nbsp;</span><div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 60px;"><div style="width: 100%; height: 4px; position: absolute; bottom: 0px; left: 0px; background-color: rgb(255, 255, 255);"></div><div style="position: absolute; left: 0px; top: 0px; width: 4px; height: 8px; background-color: rgb(255, 255, 255);"></div><div style="width: 4px; height: 8px; position: absolute; bottom: 0px; right: 0px; background-color: rgb(255, 255, 255);"></div><div style="position: absolute; height: 2px; bottom: 1px; right: 1px; left: 1px; background-color: rgb(102, 102, 102);"></div><div style="position: absolute; left: 1px; top: 1px; width: 2px; height: 6px; background-color: rgb(102, 102, 102);"></div><div style="width: 2px; height: 6px; position: absolute; bottom: 1px; right: 1px; background-color: rgb(102, 102, 102);"></div></div></div></div></div></div>
            <div class="homMapTriangle"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-8">
                        <div class="contact-address home2">
                            <h2 class="common-title">Entre<span> em Contato</span></h2>
                            <p><i class="icon-mobile"></i>(12)  3302-9544</p>
                            <!-- <p><i class="icon-mail-6"></i>info@slightbusiness.com</p> -->
                            <p class="noPaddingBotton noMarginBottom"><i class="icon-globe"></i>São Paulo, BR </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                    </div>
                </div>
            </div>
        </section>


<?php get_footer(); ?>