<?php
/**
 * HOME, index do site
 */
/**
 * Includes
 */
require "core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
        <style type="text/css">
            .panel-body .row {
                margin: 10px;
            }
            .panel {
                margin: 60px 10px;
            }
            .jumbotron {
                background-image: url("core/imagens/ale.png");
                background-repeat: no-repeat;
                background-position: center left;
                color: #000;
                font-weight: 900;
            }    
            .home {
                position: fixed;
                top: 10px;
                margin-left: 14px;
                z-index: 1;
            }            
        </style>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <a href="<?php echo LINKS_PATH ?>" class="btn btn-primary home"><span class="glyphicon glyphicon-home"></span> &nbsp;Home</a>
            </div>
        </div>

        <div class="jumbotron">
            <h1>Flávio Alexandre Micheletti</h1>
            <ul>
                <li>Analista de Sistemas desde 2007.</li>
                <li>Formado em Segurança da Informação pela Fatec SCS (2011)</li>
                <li>Ultimamente, dedicando meu tempo na programação front-end.</li>
            </ul>
        </div>

        <div class="container">
            <div class="col-md-offset-2 col-md-10  hidden-xs">

            </div>
        </div>

        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li>
                                <a href="#2013">Arquitetura Humana</a>
                            </li>
                            <li>
                                <a href="#2012">DevFuria</a>
                            </li>
                            <li>
                                <a href="#2011">Corretora</a>
                            </li>
                            <li>
                                <a href="#2010">ACS</a>
                            </li>
                            <li>
                                <a href="#2009">SDD</a>
                            </li>
                            <li>
                                <a href="#2007">Folha do Ocorrências</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-9" role="main">

                    <div class="page-header">
                        <h1>Técnica</h1>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>GitHub</th>
                                <td><a href="https://github.com/flaviomicheletti/">https://github.com/flaviomicheletti/</a></td>
                            </tr>
                            <tr>
                                <th>Publicações (TCC)</th>
                                <td>
                                    <a href="tcc-flavio-alexandre-micheletti.pdf" title="link-externo" class=""><small>ANÁLISE DAS PRINCIPAIS VULNERABILIDADES DE APLICAÇÕES WEB
                                            TENDO COMO BASE A ARQUITETURA LAMP E AS
                                            TOP 10 VULNERABILIDADES DA OWASP</small>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>                    

                    <div class="page-header">
                        <h1>Portifólio</h1>
                    </div>
                    <p>
                        Clique na imagem para ampliar (uma nova aba se abrirá).
                    </p>

                    <div id="2013" class="panel panel-info">
                        <div class="panel-heading">
                            <h3  class="panel-title">Sistema Arquitetura Humana</h3>
                            <a href="www.pibrasil.com">www.pibrasil.com</a>
                            <p>2013</p>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <p>Sistema feito sob medida para empresa Arquitetura Humana <br> (PI Brasil).</p>
                                    <p><span class="label label-default">JS, PHP e Mysql</span></p>
                                </div>
                                <div class="col-md-3">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-ah-08.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-ah-08.png" ?>" />
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-4 hidden-xs">
                                            <a href="<?php echo LINKS_PATH . "/core/imagens/port-ah-06.png" ?>" class="thumbnail" title="link-externo">
                                                <img src="<?php echo LINKS_PATH . "/core/imagens/port-ah-06.png" ?>" />
                                            </a>
                                        </div>
                                        <div class="col-md-4 hidden-xs">
                                            <a href="<?php echo LINKS_PATH . "/core/imagens/port-ah-01.png" ?>" class="thumbnail" title="link-externo">
                                                <img src="<?php echo LINKS_PATH . "/core/imagens/port-ah-01.png" ?>" />
                                            </a>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 hidden-xs">
                                            <a href="<?php echo LINKS_PATH . "/core/imagens/port-ah-05.png" ?>" class="thumbnail" title="link-externo">
                                                <img src="<?php echo LINKS_PATH . "/core/imagens/port-ah-05.png" ?>" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 hidden-xs">
                                            <a href="<?php echo LINKS_PATH . "/core/imagens/port-ah-04.png" ?>" class="thumbnail" title="link-externo">
                                                <img src="<?php echo LINKS_PATH . "/core/imagens/port-ah-04.png" ?>" />
                                            </a>
                                        </div>
                                        <div class="col-md-6 hidden-xs">
                                            <a href="<?php echo LINKS_PATH . "/core/imagens/port-ah-07.png" ?>" class="thumbnail" title="link-externo">
                                                <img src="<?php echo LINKS_PATH . "/core/imagens/port-ah-07.png" ?>" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="2012" class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Site DevFuria</h3>
                            <a href="www.devfuria.com.br">www.devfuria.com.br</a>
                            <p>2012</p>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <p>Site que tem como objetivo ajudar na boa formação de desenvolvedores (web).</p>
                                <p>
                                    Projeto pessoal e Open Source (<a href="https://github.com/flaviomicheletti/www.devfuria.com.br">fontes no github</a>)
                                    no qual eu sou o único culpado
                                </p>
                                <p>(mentor, mantenedor, desenvolvedor, designer, colunista, revisor técnico, etc..).</p>
                                <p><span class="label label-default">PHP e Bootstrap</span></p>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-devfuria-01.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-devfuria-01.png" ?>" />
                                    </a>
                                </div>
                                <div class="col-md-offset-1 col-md-3 hidden-xs">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-devfuria-03.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-devfuria-03.png" ?>" />
                                    </a>
                                </div>
                                <div class="col-md-offset-1 col-md-3 hidden-xs">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-devfuria-02.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-devfuria-02.png" ?>" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="2011" class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sistema Corretora de Seguros</h3>
                            <p>2011</p>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <p>
                                        Software desenvolvido para corretora de seguros. Aplicação RIA (Rich Interface Aplication).
                                    </p>
                                    <p><span class="label label-default">JS, PHP e Mysql</span></p>
                                </div>
                                <div class="col-md-offset-1 col-md-6">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-seg-01.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-seg-01.png" ?>" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-offset-1 col-md-3 hidden-xs">
                                <a href="<?php echo LINKS_PATH . "/core/imagens/port-seg-02.png" ?>" class="thumbnail" title="link-externo">
                                    <img src="<?php echo LINKS_PATH . "/core/imagens/port-seg-02.png" ?>" />
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-6 hidden-xs">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-seg-03.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-seg-03.png" ?>" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="2010" class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sistema ACS </h3>
                            <p>Professor Antonio Carlos Simões - USP</p>
                            <p>2010</p>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <p>Sistema feito sob medida para o professor Simões (USP, psicologia).</p>
                                    <p>Desenvolvido em colaboração (ímpar) de meu amigo Marcus Vinícius.</p>
                                    <p><span class="label label-default">Codeigniter (PHP)</span></p>
                                </div>
                                <div class="col-md-5">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-acs-01.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-acs-01.png" ?>" />
                                    </a>
                                    <p style="text-align: center">Recurso "arrastar e soltar"</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-2 col-md-4 hidden-xs">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-acs-02.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-acs-02.png" ?>" />
                                    </a>
                                    <p style="text-align: center">Tela principal (HOME)</p>
                                </div>
                                <div class="col-md-offset-1 col-md-3 hidden-xs">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-acs-04.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-acs-04.png" ?>" />
                                    </a>
                                    <p style="text-align: center">Tela de login</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-2 col-md-3 hidden-xs">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-acs-03.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-acs-03.png" ?>" />
                                    </a>
                                </div>
                                <div class="col-md-offset-2 col-md-3 hidden-xs">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-acs-05.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-acs-05.png" ?>" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="2009" class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sistema Digital Dom</h3>
                            <p>www.dombrasil.net.br</p>
                            <p>2009</p>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <p>Sistema avançado de gestão de testes comportamentais.</p>
                                    <p><span class="label label-default">JS, PHP e Mysql</span></p>
                                </div>
                                <div class="col-md-3 hidden-xs">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-dom-01.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-dom-01.png" ?>" />
                                    </a>
                                </div>
                                <div class="col-md-offset-2 col-md-3">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-dom-02.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-dom-02.png" ?>" />
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 hidden-xs">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-dom-03.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-dom-03.png" ?>" />
                                    </a>
                                </div>
                                <div class="col-md-offset-1 col-md-3 hidden-xs">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-dom-05.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-dom-05.png" ?>" />
                                    </a>
                                </div>
                                <div class="col-md-offset-1 col-md-3 hidden-xs">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-dom-04.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-dom-04.png" ?>" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="2007" class="panel panel-default" style="margin-bottom: 200px">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sistema Folha do Ocorrências</h3>
                            <p>Volkswagem (ala 17, planta Anchieta)</p>
                            <p>2007</p>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <p>
                                        Software desenvolvido para controle de ocorrências (não conformidades) que
                                        afetavam os carros protótipos da VW.
                                    </p>
                                    <p><span class="label label-default">ASP3 e Access</span></p>
                                </div>
                                <div class="col-md-offset-2 col-md-4">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-vw-01.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-vw-01.png" ?>" />
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-vw-02.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-vw-02.png" ?>" />
                                    </a>
                                </div>
                                <div class="col-md-3 hidden-xs">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-vw-03.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-vw-03.png" ?>" />
                                    </a>
                                </div>
                                <div class="col-md-3 hidden-xs">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-vw-04.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-vw-04.png" ?>" />
                                    </a>
                                </div>
                                <div class="col-md-3 hidden-xs">
                                    <a href="<?php echo LINKS_PATH . "/core/imagens/port-vw-05.png" ?>" class="thumbnail" title="link-externo">
                                        <img src="<?php echo LINKS_PATH . "/core/imagens/port-vw-05.png" ?>" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div><!-- row -->
        </div>

        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
