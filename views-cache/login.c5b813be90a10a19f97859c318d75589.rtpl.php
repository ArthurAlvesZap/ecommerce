<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<!--
    Hcode Store by hcode.com.br
-->
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hcode Store</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href= "res/site/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href= "res/site/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href= "res/site/res/site/css/owl.carousel.css">
    <link rel="stylesheet" href= "res/site/css/style.css">
    <link rel="stylesheet" href= "res/site/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src= "res/site/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src= "res/site/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href= "res/site/#"><i class="fa fa-user"></i> Minha Conta</a></li>
                            <li><a href= "res/site/#"><i class="fa fa-heart"></i> Lista de Desejos</a></li>
                            <li><a href= "res/site/#"><i class="fa fa-shopping-cart"></i> Meu Carrinho</a></li>
                            <li><a href= "res/site/#"><i class="fa fa-lock"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href= "res/site/#"><span class="key">moeda :</span><span class="value">BRL </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href= "res/site/#">BRL</a></li>
                                    <li><a href= "res/site/#">USD</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href= "res/site/#"><span class="key">linguagem :</span><span class="value">Português </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href= "res/site/#">Português</a></li>
                                    <li><a href= "res/site/#">Inglês</a></li>
                                    <li><a href= "res/site/#">Espanhol</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href= "res/site/#"><img src= "res/site/img/logo.png"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href= "res/site/carrinho.html">Carrinho - <span class="cart-amunt">R$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href= "res/site/#">Home</a></li>
                        <li><a href= "res/site/#">Produtos</a></li>
                        <li><a href= "res/site/#">Carrinho</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Pagamento</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">                
                <div class="col-md-6">
                    <form id="login-form-wrap" class="login" method="post">
                        <h2>Acessar</h2>
                        <p class="form-row form-row-first">
                            <label for="login">Login <span class="required">*</span>
                            </label>
                            <input type="text" id="login" name="login" class="input-text">
                        </p>
                        <p class="form-row form-row-last">
                            <label for="senha">Senha <span class="required">*</span>
                            </label>
                            <input type="password" id="senha" name="senha" class="input-text">
                        </p>
                        <div class="clear"></div>
                        <p class="form-row">
                            <input type="submit" value="Login" name="login" class="button">
                            <label class="inline" for="rememberme"><input type="checkbox" value="forever" id="rememberme" name="rememberme"> Manter conectado </label>
                        </p>
                        <p class="lost_password">
                            <a href= "res/site/#">Esqueceu a senha?</a>
                        </p>

                        <div class="clear"></div>
                    </form>                    
                </div>
                <div class="col-md-6">
                    <form id="register-form-wrap" class="register" method="post">
                        <h2>Criar conta</h2>
                        <p class="form-row form-row-first">
                            <label for="nome">Nome Completo <span class="required">*</span>
                            </label>
                            <input type="text" id="nome" name="nome" class="input-text">
                        </p>
                        <p class="form-row form-row-first">
                            <label for="email">E-mail <span class="required">*</span>
                            </label>
                            <input type="email" id="email" name="username" class="input-text">
                        </p>
                        <p class="form-row form-row-first">
                            <label for="login">Login <span class="required">*</span>
                            </label>
                            <input type="text" id="login" name="login" class="input-text">
                        </p>
                        <p class="form-row form-row-last">
                            <label for="senha">Password <span class="required">*</span>
                            </label>
                            <input type="password" id="senha" name="senha" class="input-text">
                        </p>
                        <div class="clear"></div>

                        <p class="form-row">
                            <input type="submit" value="Criar Conta" name="login" class="button">
                        </p>

                        <div class="clear"></div>
                    </form>               
                </div>
            </div>
        </div>
    </div>


    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>Hcode Store</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href= "res/site/https://www.facebook.com/hcodebr" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href= "res/site/https://twitter.com/hcodebr" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href= "res/site/https://www.youtube.com/channel/UCjWENuSH2gX55-y7QSZiWxA" target="_blank"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Navegação </h2>
                        <ul>
                            <li><a href= "res/site/#">Minha Conta</a></li>
                            <li><a href= "res/site/#">Meus Pedidos</a></li>
                            <li><a href= "res/site/#">Lista de Desejos</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categorias</h2>
                        <ul>
                            <li><a href= "res/site/#">Categoria Um</a></li>
                            <li><a href= "res/site/#">Categoria Dois</a></li>
                            <li><a href= "res/site/#">Categoria Três</a></li>
                            <li><a href= "res/site/#">Categoria Quarto</a></li>
                            <li><a href= "res/site/#">Categoria Cinco</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2017 Hcode Treinamentos. <a href= "res/site/http://www.hcode.com.br" target="_blank">hcode.com.br</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src= "res/site/https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src= "res/site/http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src= "res/site/js/owl.carousel.min.js"></script>
    <script src= "res/site/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src= "res/site/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src= "res/site/js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src= "res/site/js/bxslider.min.js"></script>
    <script type="text/javascript" src= "res/site/js/script.slider.js"></script>
  </body>
</html>