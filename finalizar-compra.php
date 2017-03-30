<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Arma tu plan - Movistar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <script src="https://use.fontawesome.com/67ccecf009.js"></script>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/plugins.css">
        <link rel="stylesheet" href="assets/css/main.css">

        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>


        <!-- Fav and touch icons -->
        <link href="http://www.movistar.cl/colportal-chileXX-theme/images/favicon.ico" rel="Shortcut Icon" />


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="assets/js/vendor/html5shiv.min.js"></script>
            <script src="assets/js/vendor/respond.min.js"></script>
        <![endif]-->
        <!--Start of Zendesk Chat Script-->
        <script type="text/javascript">
            window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
            d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
            _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
            $.src="https://v2.zopim.com/?4gBFKiJh5gEQXuMnQFKe6kxWJKNvDJs6";z.t=+new Date;$.
            type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
        </script>
        <!--End of Zendesk Chat Script-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.html">Inicio</a>
            <a href="">Productos y Servicios</a>
            <a href="">Atención al Cliente</a>
            <a href="">Club Movistar</a>
            <div class="submenu">
                <a href="">Personas</a>
                <a href="">Empresas</a>
                <a href="">Corporaciones</a>
                
                <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i>  0 Producto</a>
                <a href="">Ingresar</a>
            </div>
            <div class="text-center">
                <div class="espacio20 visible-xs"></div>
                <a href="" title="Movistar">
                    <img src="assets/img/logo-inv.png" class="img-max-full" alt="Movistar">
                </a>
            </div>
        </div>
        

        <header>
            <div class="pre-header hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <a href="">Personas</a> &nbsp;&nbsp;
                            <a href="">Empresas</a> &nbsp;&nbsp;
                            <a href="">Corporaciones</a>
                        </div>
                        <div class="col-xs-12 col-sm-6 text-right">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> 
                            <a href="">0 Producto</a> &nbsp;&nbsp;
                            <a href="">Ingresar</a>
                        </div>
                    </div>
                </div>
            </div>

            

            <section class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-8 col-sm-2 col-md-2">
                            <a href="index.html" title="Movistar">
                                <img src="assets/img/logo.png" class="img-max-full" alt="Movistar">
                            </a>
                        </div>
                        <div class="col-xs-4 visible-xs text-right">
                            <a href="javascript:vpid(0)" onclick="openNav()" class="visible-xs">
                                <img src="assets/img/burger.png" alt="">
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-8 text-center">
                            <div class="espacio5"></div>
                            <nav class="hidden-xs">
                                <ul>
                                    <li><a href="index.html">Inicio</a></li>
                                    <li><a href="">Productos y Servicios</a></li>
                                    <li><a href="">Atención al Cliente</a></li>
                                    <li class="link-verde"><a href="">Club Movistar</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-2 text-right">
                            <div class="espacio5"></div>
                            <form class="buscador">
                                <input type="text" name="" placeholder="Buscar ...">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </header>


        <section>
            <img src="demo/arma-tu-plan.jpg" alt="" class="img-full">
        </section>


        <div class="espacio40"></div>

        <section class="pasos">
            <div class="container">
                <nav class="pasos-navegacion">
                    <ul class="hidden-xs">
                        <li><span>01</span> Selecciona tu rubro</li>
                        <li><span>02</span> Arma tu plan <img src="assets/img/flecha.png" alt="" class="flecha"></li>
                        <?php
                        if (isset($_GET["action"]) and $_GET["action"] == "end") {
                            ?>
                            <li><span>03</span> Verifica <img src="assets/img/flecha.png" alt="" class="flecha"></li>
                            <li class="active"><span>04</span> Finalizar <img src="assets/img/flecha.png" alt="" class="flecha"></li>
                            <?php
                        }
                        else{
                            ?>
                            <li class="active"><span>03</span> Verifica <img src="assets/img/flecha.png" alt="" class="flecha"></li>
                            <li><span>04</span> Finalizar <img src="assets/img/flecha.png" alt="" class="flecha"></li>
                            <?php
                        }
                        ?>
                    </ul>

                    <ul class="visible-xs">
                        <li><span>01</span></li>
                        <li><span>02</span> <img src="assets/img/flecha.png" alt="" class="flecha"></li>
                        <?php
                        if (isset($_GET["action"]) and $_GET["action"] == "end") {
                            ?>
                            <li><span>03</span> <img src="assets/img/flecha.png" alt="" class="flecha"></li>
                            <li class="active"><span>04</span> <img src="assets/img/flecha.png" alt="" class="flecha"></li>
                            <?php
                        }
                        else{
                            ?>
                            <li class="active"><span>03</span> <img src="assets/img/flecha.png" alt="" class="flecha"></li>
                            <li><span>04</span> <img src="assets/img/flecha.png" alt="" class="flecha"></li>
                            <?php
                        }
                        ?>
                        
                    </ul>
                </nav>

                <div class="espacio20"></div>

                <h2 class="titulo">Arma tu plan</h2>
                <p class="descripcion">Suspendisse hendrerit velit sollicitudin mauris ullamcorper, nec facilisis lorem gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc lobortis lorem ac tristique suscipit. </p>

                <div class="espacio20"></div>

                <div class="row">
                    
                    <div class="col-xs-12">
                        <h1>Pago a través de WebPay Plus</h1>

                        <?php
                        require_once( 'webpay/libwebpay/webpay.php' );
                        require_once( 'webpay/sample/certificates/cert-normal.php' );

                        /** Configuracion parametros de la clase Webpay */
                        $sample_baseurl = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

                        $configuration = new Configuration();
                        $configuration->setEnvironment($certificate['environment']);
                        $configuration->setCommerceCode($certificate['commerce_code']);
                        $configuration->setPrivateKey($certificate['private_key']);
                        $configuration->setPublicCert($certificate['public_cert']);
                        $configuration->setWebpayCert($certificate['webpay_cert']);

                        /** Creacion Objeto Webpay */
                        $webpay = new Webpay($configuration);

                        $action = isset($_GET["action"]) ? $_GET["action"] : 'init';

                        $post_array = false;

                        switch ($action) {

                            default:

                                $tx_step = "Init";

                                /** Monto de la transacción */
                                if (isset($_GET["val"])) {
                                    $amount = $_GET["val"];
                                }
                                else
                                    $amount = 799700;

                                /** Orden de compra de la tienda */
                                $buyOrder = rand();

                                /** Código comercio de la tienda entregado por Transbank */
                                $sessionId = uniqid();
                                
                                /** URL de retorno */
                                $urlReturn = $sample_baseurl."?action=getResult";
                                
                                /** URL Final */
                            $urlFinal  = $sample_baseurl."?action=end";

                                $request = array(
                                    "amount"    => $amount,
                                    "buyOrder"  => $buyOrder,
                                    "sessionId" => $sessionId,
                                    "urlReturn" => $urlReturn,
                                    "urlFinal"  => $urlFinal,
                                );

                                /** Iniciamos Transaccion */
                                $result = $webpay->getNormalTransaction()->initTransaction($amount, $buyOrder, $sessionId, $urlReturn, $urlFinal);
                                
                                /** Verificamos respuesta de inicio en webpay */
                                if (!empty($result->token) && isset($result->token)) {
                                    $message = "Sesion iniciada con exito en Webpay";
                                    $token = $result->token;
                                    $next_page = $result->url;
                                } else {
                                    $message = "webpay no disponible";
                                }

                                $button_name = "Iniciar Pago &raquo;";
                                
                                break;

                            case "getResult":
                                
                                $tx_step = "Get Result";

                                if (!isset($_POST["token_ws"]))
                                    break;

                                /** Token de la transacción */
                                $token = filter_input(INPUT_POST, 'token_ws');
                                
                                $request = array(
                                    "token" => filter_input(INPUT_POST, 'token_ws')
                                );

                                /** Rescatamos resultado y datos de la transaccion */
                                $result = $webpay->getNormalTransaction()->getTransactionResult($token);
                                
                                /** Verificamos resultado  de transacción */
                                if ($result->detailOutput->responseCode === 0) {

                                    /** propiedad de HTML5 (web storage), que permite almacenar datos en nuestro navegador web */
                                    echo '<script>window.localStorage.clear();</script>';
                                    echo '<script>localStorage.setItem("authorizationCode", '.$result->detailOutput->authorizationCode.')</script>';
                                    echo '<script>localStorage.setItem("amount", '.$result->detailOutput->amount.')</script>';
                                    echo '<script>localStorage.setItem("buyOrder", '.$result->buyOrder.')</script>';

                                    $message = "Pago ACEPTADO por webpay (se deben guardatos para mostrar voucher)";
                                    $next_page = $result->urlRedirection;
                                    
                                } else {
                                    $message = "Pago RECHAZADO por webpay - " . utf8_decode($result->detailOutput->responseDescription);
                                    $next_page = '';
                                }

                                $button_name = "Continuar &raquo;";

                                break;
                            
                            case "end":
                                
                                $post_array = true;
                                
                                $tx_step = "End";
                                $request = "";
                                $result = $_POST;
                                
                                $message = "Transacion Finalizada";
                                $next_page = $sample_baseurl."?action=nullify";
                                $button_name = "Anular Transacci&oacute;n &raquo;";

                                break;   

                            
                            case "nullify":

                                $tx_step = "nullify";
                                
                                $request = $_POST;
                                
                                /** Codigo de Comercio */
                                $commercecode = null;

                                /** Código de autorización de la transacción que se requiere anular */
                                $authorizationCode = filter_input(INPUT_POST, 'authorizationCode');

                                /** Monto autorizado de la transacción que se requiere anular */
                                $amount =  filter_input(INPUT_POST, 'amount');

                                /** Orden de compra de la transacción que se requiere anular */
                                $buyOrder =  filter_input(INPUT_POST, 'buyOrder');
                                
                                /** Monto que se desea anular de la transacción */
                                $nullifyAmount = 200;

                                $request = array(
                                    "authorizationCode" => $authorizationCode, // Código de autorización
                                    "authorizedAmount" => $amount, // Monto autorizado
                                    "buyOrder" => $buyOrder, // Orden de compra
                                    "nullifyAmount" => $nullifyAmount, // idsession local
                                    "commercecode" => $configuration->getCommerceCode(), // idsession local
                                );
                                
                                $result = $webpay->getNullifyTransaction()->nullify($authorizationCode, $amount, $buyOrder, $nullifyAmount, $commercecode);
                                
                                /** Verificamos resultado  de transacción */
                                if (!isset($result->authorizationCode)) {
                                    $message = "webpay no disponible";
                                } else {
                                    $message = "Transaci&oacute;n Finalizada";
                                }

                                $next_page = '';
                                
                                break;
                        }

                        echo "<h2>Paso Webpay: " . $tx_step . "</h2>";

                        if (!isset($request) || !isset($result) || !isset($message) || !isset($next_page)) {

                            $result = "Ocurri&oacute; un error al procesar tu solicitud";
                            echo "<div style = 'background-color:lightgrey;'><h3>result</h3>$result;</div><br/><br/>";
                            echo "<a href='.'>&laquo; volver a index</a>";
                            die;
                        }

                        /* Respuesta de Salida - Vista WEB */
                        ?>

                        <!--<div style="background-color:lightyellow;">
                            <h3>request</h3>
                            <?php  var_dump($request); ?>
                        </div>
                        <div style="background-color:lightgrey;">
                            <h3>result</h3>
                            <?php  var_dump($result); ?>
                        </div>-->
                        <p><samp><?php  echo $message; ?></samp></p>

                        <?php if (strlen($next_page) && $post_array) { ?>

                                <form action="<?php echo $next_page; ?>" method="post">
                                    <input type="hidden" name="authorizationCode" id="authorizationCode" value="">
                                    <input type="hidden" name="amount" id="amount" value="">
                                    <input type="hidden" name="buyOrder" id="buyOrder" value="">
                                    <input type="submit" class="boton-webpay" value="<?php echo $button_name; ?>">
                                </form>

                                <script>
                                    
                                    var authorizationCode = localStorage.getItem('authorizationCode');
                                    document.getElementById("authorizationCode").value = authorizationCode;
                                    
                                    var amount = localStorage.getItem('amount');
                                    document.getElementById("amount").value = amount;
                                    
                                    var buyOrder = localStorage.getItem('buyOrder');
                                    document.getElementById("buyOrder").value = buyOrder;
                                    
                                    localStorage.clear();
                                    
                                </script>
                                
                        <?php } elseif (strlen($next_page)) { ?>
                            <form action="<?php echo $next_page; ?>" method="post">
                            
                            <input type="hidden" name="token_ws" value="<?php echo ($token); ?>">
                            <input type="submit" class="boton-webpay" value="<?php echo $button_name; ?>">
                        </form>
                        <?php } ?>

                        
                    </div>

                    


                </div>


                




            </div>
        </section>


        
        <div class="espacio40"></div>
        <div class="espacio20"></div>


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <img src="demo/footer1.png" class="img-max-full" alt="">
                    </div>
                    <div class="espacio20 visible-xs"></div>
                    <div class="col-xs-12 col-sm-6 text-right">
                        <img src="demo/footer2.png" class="img-max-full" alt="">
                    </div>
                </div>
            </div>
        </footer>


        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.12.4.min.js"><\/script>')</script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        

        
    </body>
</html>  