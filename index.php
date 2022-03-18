<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imovies CEHMA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="box">
        <header>
            <div id="header_topo">               
               <a href="index.php">
                        <img src="images/cehmaimoveis_logo.png" alt="Home" title="Home">
               </a>
                <ul>
                    <li><a href="#">Comprar</a></li>
                    <li><a href="#">Alugar</a></li>
                    <li><a href="#">Anunciar</a></li>
                    <li><a href="#">Fale Conosco</a></li>
                </ul>     

            </div>
            
        </header>
    </section>
    
    <section class="box">
        <div id="header_navegar">
                    <div id="header_navegar_central">
                        <div id="header_navegar_central_anunciante">
                            <form action="" name="central_anunciante" method="post">
                                <label for="">
                                    <span>Usuario:</span>
                                    <input type="text" value="" name="usuario" >
                                </label>
                                <label for="">
                                    <span class="senha_txt">Senha:</span>
                                    <input type="password" value="" class="senha" name="senha" >
                                    <input type="submit" value="" name="enviar" class="btn">
                                </label>
                               

                            </form>
                            <p>Esqueci minha senha</p>
                        </div>
                        <div id="header_navegar_central_anuncie">

                        </div>
                    </div>
                    <div id="header_navegar_filtro">
                    
                    </div>
                    <div id="header_navegar_publicidade">
                        <h1>Publicidade</h1>
                            <a href="#"><img src="midias/01.jpg" alt="" title=""></a>
                    </div>

        </div>
    </section>
    <section class="box">
        <div id="imoveis_home">

        </div>
        <div id="imoveis_home_lista">

        </div>


    </section>

    <section id="footer">

    </section>

<div style="display:none">
    <img src="images/central_btn_hover.png" alt="">
</div>
</body>
</html>