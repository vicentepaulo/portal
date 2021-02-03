<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/reset.css">
    <link href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/cabecalho.css">
    <link rel="stylesheet" href="assets/css/menuDeNavegacao.css">
    <link rel="stylesheet" href="assets/css/menuBurger.css">


    <title>Portal Colaborativo</title>
</head>

<body>
    <div class="bordaCabecalho">

        <ul class="menu">
            <!-- Esse é o 1 nivel ou o nivel principal -->
            <li><a href="#"><img id="menuBurguer" alt="Logotipo Inovamed" src="assets/img/icon/iconeMenuBurgerBranco.png"></a> 
                <ul class="submenu-1">

                    <!-- Esse é o 2 nivel ou o primeiro Drop Down --> 
                    <li><a href="#">Avarias</a></li>           
                    <li>   <a href="#">Solicitações</a> </li> 
                          
                    <li><a href="#">Chamados</a>            
                        <ul class="submenu-2">
                            <!-- Esse é o 3 nivel ou o Segundo Drop Down -->       
                            <li><a href="assets/suporte/novochamado.php">Novo Chamado</a></li>       
                            <li><a href="assets/suporte/meuschamados.php">Meus Chamados</a></li>       
                            <!--<ul class="submenu-3">
                                <li><a href="#">7</a>
                                </li>
                                <li><a href="#">8</a></li>
                                <li><a href="#">9</a></li>    -->
                        </ul>                       
                    </li>       
                </ul>   
            </li>       
        </ul> 
    </div>
    <img class="logo" alt="Logotipo Inovamed" src="assets/img/logo/logoPositiva.png">
    <div class="bordaDireita"></div>
</body>

</html>