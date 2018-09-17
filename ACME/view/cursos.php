<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cursos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="main">
        <?php
            require_once('menu.html');
        ?>
    <div class="content_cursos">
        <h1>Nossos Cursos</h1>
        <div class="texto_sobre_nossos_cursos">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. In dapibus augue non sapien. Integer lacinia. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede. Nullam faucibus mi quis velit. Aenean fermentum risus id tortor.
                 Vestibulum fermentum tortor id mi. Integer pellentesque quam vel velit. Fusce nibh. Fusce aliquam vestibulum ipsum. Maecenas libero. Curabitur sagittis hendrerit ante. Suspendisse nisl.</p>
        </div>
        <section class="galeria_cursos">
            <div class="search_curses">
                <form action="#" method="POST" name="frm_curso" id="form_curso">
                        <input type="text" name="txt_curso" placeholder="Digite um curso" id="pesquisar_curso">
                    <input type="submit" name="btn_pesquisar" value="P" id="btn_curso">
                </form>
            </div>
            <h2>Tecnologia da Informação</h2>
                <br/>
                <h3>Graduação</h3>
            <div class="caixa_cursos">
                    <div class="cursos_info">
                        <div class="img_cursos">
                            <img src="#" alt="img"/>
                        </div>
                        <h3 class="titulo_curso">Ed.Fisica</h3>
                        <span class="texto_curso">Tempo: 4 anos</span>
                        <span class="texto_curso">Valor: R$1500,00</span>
                        <span class="texto_curso">Período: Noturno</span>
                        <div class="saber_mais_curso">
                            <span>Mais ></span>
                        </div>
                    </div>
                    <div class="cursos_info">
                        <div class="img_cursos">
                            <img src="#" alt="img"/>
                        </div>
                        <h3 class="titulo_curso">Analista de Sistemas</h3>
                        <span class="texto_curso">Tempo: 4 anos</span>
                        <span class="texto_curso">Valor: R$1800,00</span>
                        <span class="texto_curso">Período: Noturno</span>
                        <div class="saber_mais_curso">
                             <span>Mais ></span>
                        </div>
                    </div>
                    <div class="cursos_info">
                        <div class="img_cursos">
                            <img src="#" alt="img"/>
                        </div>
                        <h3 class="titulo_curso">Engenharia de Software</h3>
                        <span class="texto_curso">Tempo: 5 anos</span>
                        <span class="texto_curso">Valor: R$2500,00</span>
                        <span class="texto_curso">Período: Noturno</span>
                        <div class="saber_mais_curso">
                             <span>Mais ></span>
                        </div>
                    </div>
                </div>
        </section>
        
    </div>
        <?php
            require_once('rodape.html');
        ?>
    </div>
</body>
</html>