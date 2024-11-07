<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Gaia</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/templatemo-topic-listing.css') }}" rel="stylesheet">
<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    </head>
    
    <body id="top">

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        
                        <img src="images/logo_dark.png" style="width: 80px;" >
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse d-flex justify-content-center align-items-center" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Câncer de Mama</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">Como funciona</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Dúvidas</a>
                            </li>
                        </ul>
                        
                        <div class="d-none d-lg-block">
                            <a href="{{ route('login') }}" class="navbar-icon bi-person smoothscroll"></a>
                        </div>
                    </div>
                    
                </div>
            </nav>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">Gaia</h1>

                            <h6 class="text-center">Suporte inteligente para diagnósticos e acompanhamento personalizado no câncer de mama.</h6>

                          <!--  <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bi-search" id="basic-addon1">
                                        
                                    </span>

                                    <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Design, Code, Marketing, Finance ..." aria-label="Search">

                                    <button type="submit" class="form-control">Search</button>
                                </div>
                            </form>-->
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.html">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Qual o objetivo do Gaia?</h5>

                                            <p class="mb-0">O Gaia foi desenvolvido para apoiar médicos no diagnóstico do câncer de mama e oferecer suporte completo durante o acompanhamento do paciente. A cada consulta, o sistema registra um histórico detalhado de anotações e observações, funcionando como um diário de bolso que facilita o acompanhamento contínuo e personalizado de cada paciente.</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img src="images/topics/undraw_Doctors_p6aq.png" class="custom-block-image-banner img-fluid" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="images/1.webp" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">O que é o Câncer de Mama?</h5>

                                            <p class="text-white">É uma doença resultante da multiplicação de células anormais
                                                da mama, que forma um tumor com potencial de invadir
                                                outros órgãos. Há vários tipos de câncer de mama. Alguns se
                                                desenvolvem rapidamente, e outros, não. A maioria dos casos
                                                tem boa resposta ao tratamento, principalmente quando
                                                diagnosticado e tratado no início.</p>

                                            
                                        </div>
                                    </div>

                                    <div class="social-share d-flex">
                                        

                                        <a href="topics-detail.html" class="btn custom-btn mt-2 mt-lg-3">Aprenda Mais</a>
                                    </div>

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            


            <section class="timeline-section section-padding" id="section_2">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="text-white mb-4">Como funciona?</h1>
                        </div>

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="timeline-container">
                                <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                    <div class="list-progress">
                                        <div class="inner"></div>
                                    </div>
                        
                                    <li>
                                        <h4 class="text-white mb-3">Faça sua conta</h4>
                                        <p class="text-white">Comece criando sua conta para acessar o sistema. O registro é rápido e fácil.</p>
                                        <div class="icon-holder">
                                            <i class="bi-person-plus"></i>
                                        </div>
                                    </li>
                        
                                    <li>
                                        <h4 class="text-white mb-3">Cadastre seus pacientes</h4>
                                        <p class="text-white">Após acessar o sistema, você pode cadastrar os pacientes, registrando informações importantes para o acompanhamento.</p>
                                        <div class="icon-holder">
                                            <i class="bi-clipboard-plus"></i>
                                        </div>
                                    </li>
                        
                                    <li>
                                        <h4 class="text-white mb-3">Adicione comentários das consultas</h4>
                                        <p class="text-white">Em cada consulta, registre suas observações e comentários. Esses dados ficarão disponíveis para consulta futura, facilitando o acompanhamento.</p>
                                        <div class="icon-holder">
                                            <i class="bi-journal-text"></i>
                                        </div>
                                    </li>
                        
                                    <li>
                                        <h4 class="text-white mb-3">Envie exames de mamografias</h4>
                                        <p class="text-white">Suba os exames de mamografias para análise. A inteligência artificial processará as imagens e fornecerá uma avaliação preliminar para auxiliar no diagnóstico.</p>
                                        <div class="icon-holder">
                                            <i class="bi-cloud-upload"></i>
                                        </div>
                                    </li>
                        
                                    <li>
                                        <h4 class="text-white mb-3">Receba insights da IA</h4>
                                        <p class="text-white">Após o envio, nossa inteligência artificial processará os exames, oferecendo insights que podem auxiliar nas próximas etapas do acompanhamento.</p>
                                        <div class="icon-holder">
                                            <i class="bi-lightbulb"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="faq-section section-padding" id="section_3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Perguntas Frequentes</h2>
                        </div>
            
                        <div class="clearfix"></div>
            
                        <div class="col-lg-5 col-12">
                            <img src="images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
                        </div>
            
                        <div class="col-lg-6 col-12 m-auto">
                            <div class="accordion" id="accordionExample">
                                
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Como faço para criar uma conta?
                                        </button>
                                    </h2>
            
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Para criar uma conta, clique em “Registrar-se” na página inicial e preencha os dados solicitados. Após concluir, você terá acesso ao sistema completo.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Como cadastrar um paciente?
                                        </button>
                                    </h2>
            
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Após acessar sua conta, clique no botão com "+" no canto inferior direito da página. Insira as informações e salve para registrar o paciente no sistema.
                                        </div>
                                    </div>
                                </div>
            
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Como adicionar comentários de consultas?
                                        </button>
                                    </h2>
            
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Para adicionar comentários, selecione o paciente desejado na lista e clique em "Diário de Bolso". Registre as observações da consulta e salve para manter o histórico atualizado.
                                        </div>
                                    </div>
                                </div>
            
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Como subir exames de mamografia?
                                        </button>
                                    </h2>
            
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Na seção do paciente, clique em "Exames" e selecione o arquivo de mamografia. O sistema irá analisar a imagem e fornecer uma avaliação preliminar com a ajuda da inteligência artificial.
                                        </div>
                                    </div>
                                </div>
            
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        O que a inteligência artificial analisa nos exames?
                                        </button>
                                    </h2>
            
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A IA examina as imagens para identificar padrões suspeitos e anomalias, fornecendo um resultado que ajuda o médico a tomar decisões informadas sobre o acompanhamento do paciente.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            


            <section class="contact-section section-padding section-bg" id="section_5">
                <div class="container mb-5">
                    <div class="row">
                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-5">Faça seu cadastro</h2>
                        </div>
                        <div class="d-flex justify-content-center align-items-center"> <a href="{{ route('login') }}" class="btn btn-primary pulsating-btn">Cadastre-se Agora</a></div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand" href="index.html">
                        
                            <img src="images/logo_dark.png" style="width: 80px;" >
                        </a>
                    </div>

                    

                    

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Information</h6>

                        <p class="text-white d-flex mb-1">
                            <a href="tel: 305-240-9671" class="site-footer-link">
                                305-240-9671
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:info@company.com" class="site-footer-link">
                                info@company.com
                            </a>
                        </p>
                    </div>

                    

                </div>
            </div>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
