<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ACME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel='shortcut icon' href="imagens/acme_logo1.ico" />
   <script src="js/jquery-3.2.1.min.js"></script>
   <script>
    $(document).ready(function(){
    $('#abrir_feadback').click(function(){
       $('.enviar_feadback').toggle();
    })
});
    </script>
    
</head>
<body>
    <div class="main">
        <?php
            require_once('menu.html');
        ?>

        <div class="content">
            <section class="img_home">
                <div id="caixa_texto_img_principal"></div>
                
                <div id="texto_img_principal">Bem Vindo a Universidade ACME!</div>
            </section>

            <section class="nossos_cursos">
                <div id="caixa_titulo_cursos">
                    <div id="titulo_cursos">Alguns de nossos Cursos</div>
                </div>
                
                <div class="caixa_cursos">
                    <div class="cursos_home">
                        <h3 class="titulo_curso">Ed.Fisica</h3>
                        <span class="texto_curso">Tempo: 4 anos</span>
                        <span class="texto_curso">Valor: R$1500,00</span>
                        <span class="texto_curso">Período: Noturno</span>
                    </div>
                    <div class="cursos_home">
                        <h3 class="titulo_curso">Analista de Sistemas</h3>
                        <span class="texto_curso">Tempo: 4 anos</span>
                        <span class="texto_curso">Valor: R$1800,00</span>
                        <span class="texto_curso">Período: Noturno</span>
                    </div>
                    <div class="cursos_home">
                        <h3 class="titulo_curso">Engenharia de Software</h3>
                        <span class="texto_curso">Tempo: 5 anos</span>
                        <span class="texto_curso">Valor: R$2500,00</span>
                        <span class="texto_curso">Período: Noturno</span>
                    </div>
                </div>

                <a class="href_mais_cursos" href="#">
                    <div class="btn_mais_cursos">
                    <span>Mais</span>
                    </div>
                </a>
            </section>

            <section class="objetivo_universidade">
                <div id="caixa_titulo_objetivo"><h2>Objetivos da Universidade</h2></div>
                <div class="texto_objetivo">
                <p>
                    Formar cidadãos conscientes de sua responsabilidade social, portadores dos valores de justiça e ética, nas diferentes áreas do conhecimento, aptos para a inserção nos diversos setores profissionais e para a participação no desenvolvimento da sociedade brasileira.
                    <br>
                    <br>
                    Promover a divulgação de conhecimentos culturais, científicos e técnicos que constituem patrimônio da humanidade e comunicar o saber por meio do ensino, de publicações e de outras formas de comunicação.
                    <br>
                    <br>
                    Promover a extensão, aberta à participação da comunidade, visando à difusão das conquistas e benefícios resultantes da criação cultural e da pesquisa científica e tecnológica geradas na Instituição.
                    <br>
                    <br>
                    <br>
                </p>
                </div>
            </section>

            <section class="eventos_home">
                <h2>Fique Por Dentro</h2>

                <div id="caixa_evento">
                <div class="setor_eventos">
                    <div class="eventos_vertical_img">
                        <img src="#" alt="img">
                    </div>
                    
                    <div class="eventos_vertical_texto">
                        
                        <h2>Titulo</h2>
                        <p>
                            Lorem ipsum felis quis mollis a mollis conubia, ipsum fermentum pulvinar mollis nunc enim porttitor aptent, primis per suscipit tortor vestibulum egestas. 
                            maecenas donec sodales ligula donec cursus primis blandit, litora primis in aenean hac suspendisse proin, enim consectetur lorem id libero eros. 
                        </p>
                    </div>
                    
                    <div class="eventos_vertical_img">
                        <img src="#" alt="img">
                    </div>
                    
                    <div class="eventos_vertical_texto">
                        
                        <h2>Titulo</h2>
                        <p>
                            Lorem ipsum felis quis mollis a mollis conubia, ipsum fermentum pulvinar mollis nunc enim porttitor aptent, primis per suscipit tortor vestibulum egestas. 
                            maecenas donec sodales ligula donec cursus primis blandit, litora primis in aenean hac suspendisse proin, enim consectetur lorem id libero eros. 
                         </p>
                    </div>
                </div>

                <div class="setor_eventos" style="width:40%;">
                    <div class="evento_horizontal_menor">
                        <div class="evento_horizontal_menor_texto">
                            
                            <h2>Titulo</h2>
                            <p>
                                Lorem ipsum felis quis mollis a mollis conubia, ipsum fermentum pulvinar mollis nunc enim porttitor aptent, primis per suscipit tortor vestibulum egestas. 
                                maecenas donec sodales ligula donec cursus primis blandit, litora primis in aenean hac suspendisse proin, enim consectetur lorem id libero eros. 
                            </p>
                        </div>
                        
                        <div class="evento_horizontal_menor_img">
                            <img src="#" alt="img">
                        </div>
                    </div>
                    
                    <div class="evento_horizontal_maior">
                        <div class="evento_horizontal_maior_img">
                            <img src="#" alt="img">
                        </div>
                        <div class="evento_horizontal_maior_texto">
                            
                            <h2>Titulo</h2>
                            <p>
                                Lorem ipsum felis quis mollis a mollis conubia, ipsum fermentum pulvinar mollis nunc enim porttitor aptent, primis per suscipit tortor vestibulum egestas. 
                                maecenas donec sodales ligula donec cursus primis blandit, litora primis in aenean hac suspendisse proin, enim consectetur lorem id libero eros. 
                            </p>
                            
                        </div>
                    </div>
                    
                </div>

                <div class="setor_eventos">
                    
                    
                    <div class="eventos_vertical_texto">
                        
                        <h2>Titulo</h2>
                        <p>
                            Lorem ipsum felis quis mollis a mollis conubia, ipsum fermentum pulvinar mollis nunc enim porttitor aptent, primis per suscipit tortor vestibulum egestas. 
                            maecenas donec sodales ligula donec cursus primis blandit, litora primis in aenean hac suspendisse proin, enim consectetur lorem id libero eros. 
                        </p>
                    </div>
                    
                    <div class="eventos_vertical_img">
                        <img src="#" alt="img">
                    </div>
                    
                    <div class="eventos_vertical_texto">
                        
                        <h2>Titulo</h2>
                        <p>
                            Lorem ipsum felis quis mollis a mollis conubia, ipsum fermentum pulvinar mollis nunc enim porttitor aptent, primis per suscipit tortor vestibulum egestas. 
                            maecenas donec sodales ligula donec cursus primis blandit, litora primis in aenean hac suspendisse proin, enim consectetur lorem id libero eros. 
                         </p>
                    </div>
                    <div class="eventos_vertical_img">
                        <img src="#" alt="img">
                    </div>
                </div>
                
                </div>
                <a class="href_mais_informacoes">
                 <div class="mais_informacoes">      <span>Obter Mais Informações</span></div>
                </a>
               
            </section>
            
            <section class="seja_universitario">
                <a style="margin-left:30%;" class="href_universitario" href="#">
                    <div class="link_processo">
                        <span>Resultado Processo Seletivo
                        </span>
                    </div>
                </a>
                <a class="href_universitario">
                    <div class="link_processo">
                        <span>Bolsas de estudo
                        </span>
                    </div>
                </a>
            </section>
            <section class="feadback">
                <h2>O que falam sobre nós</h2>
            <div class="caixa_feadback">
                    <div class="sub_caixa">
                        <div class="teste" style="margin-left">
                            
                        </div>
                        
                        <div class="teste">
                            
                        </div >
                        
                        <div class="teste">
                            
                        </div>
                    </div>
                
            </div>
            <h4 id="abrir_feadback">________________________Deixe aqui seu Feadback______________</h4>
           <div class="enviar_feadback">
               <form action="#"  method="POST" id="form_feadback">
                    
                    <label>
                        Nome
                        <input type="text" name="txt_nome" required/>
                    </label>

                    <label>
                        Email
                        <input type="email" name="txt_email" required/>
                    </label>

                    <label>
                        Qual curso você fez?
                        <select name="slct_curso" required>
                            <option>Pretendo fazer ainda </option>
                            <option>Engenharia de Software</option>
                        </select>
                    </label>

                    <label>
                        O que achou da Universidade ACME?
                        <textarea></textarea>
                    </label>
                    <input type="submit" value="ENVIAR  " name="btn_enviar" id="btn_feadback">
               </form>
           </div>
        </section>
        </div>
       <?php
            require_once('rodape.html');
        ?>
    </div>
</body>
</html>