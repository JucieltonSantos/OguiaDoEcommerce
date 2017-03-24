<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>CONTATO O GUIA DO E-COMMERCE</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="css/contact-form.css">
    <link rel="stylesheet" href="css/google-map.css">
    <link rel="stylesheet" href="css/search.css">

    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/form.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <!--<script src="js/rd-smoothscroll.min.js"></script>-->


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
  </head>
  <body>
  <div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
    <header>  
      <div class="container top-sect">
        <div> 
          <a href="index.html"><img src="images/logo_guia_do_e_commerce.png" height="165" width="300"/></a>
            <div class="help-box text-right">
            </div>
        </div>
      </div>


      <div id="stuck_container" class="stuck_container">
        <div class="container">   
        <nav class="navbar navbar-default navbar-static-top pull-left">            

            <div class="">  
              <ul class="nav navbar-nav sf-menu" data-type="navbar">
                <li>
                  <a href="http://oguiadoecommerce.com.br/index.html">HOME</a>
                </li>
                <li>
                  <a href="http://oguiadoecommerce.com.br/contato.php">CADASTRE-SE</a>
                </li>
                <li class="dropdown">
                  <a href="index-2.html">EBOOKS GRÁTIS<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="http://oguiadoecommerce.com.br/landing.php">Aumente suas vendas com o marketing digital</a>
                    </li>
                    <li>
                      <a href="http://oguiadoecommerce.com.br/landing2.php">Melhores práticas para criar um e-commerce ninja</a>                      
                    </li>
                    <li>
                      <a href="http://oguiadoecommerce.com.br/landing3.php">10 Vantagens Em Ter Uma Loja Virtual</a>                      
                    </li>
                    
                  </ul>
                </li>                
              </ul>                           
            </div>
        </nav>   
        <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
          <label class="search-form_label">
            <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder=""/>
            <span class="search-form_liveout"></span>
          </label>
          <button class="search-form_submit fa-search" type="submit"></button>
        </form>
             
        </div>

      </div>  
    </header>

  <!--========================================================
                            CONTENT
  =========================================================-->

    <main>        

      <section class="well well4">
        <div class="container">
              <h2>
                FORMULÁRIO
                <small>
                 DE CONTATO
                </small>
              </h2>
       
        <?php
        include("email_form.php")
        ?>
              
                     
        </div>        
      </section>

      

    </main>

    <!--========================================================
                            FOOTER
  =========================================================-->
  <footer>
   <section class="well1">
      <div class="container"> 
            <p class="rights">
              O guiado E-commerce  &#169; <span id="copyright-year"></span>
              <a href="index-5.html">Todos os direitos reservados</a>
            </p>          
      </div> 
    </section>   
  </footer>
  </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->         
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tm-scripts.js"></script>    
  <!-- </script> -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89665197-3', 'auto');
  ga('send', 'pageview');

</script>
<script>
  (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
  })(window, document, '_gscq','script','//widgets.getsitecontrol.com/77314/script.js');
</script>

  </body>
</html>
