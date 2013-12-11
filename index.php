<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>DevJobs</title>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>

<div class="geral">
	
<?php 
	
	$nome_pagina = "Home";
	  
  	include("cabecalho.php"); 

?>
    
  <div class="conteudo">
  	
    <section class="perfil">
    	<!-- Área dados -->
        <div class="area_dados">
        	<div class="avatar">
            	<img src="http://api.randomuser.me/0.2/portraits/men/22.jpg"  width="100" height="100" />
            </div>
            <h1>Olá, <span>David White</span>.</h1>

            <h2>IOS Developer at <a href="#">Belo Horizonte</a>.</h2>
            
            <div class="last-job">
            	<h3 class="title"><a href="#">Developer</a></h3>
                <strong>Google</strong>
                <br clear="all" />
                <span>Belo Horizonte, MG</span>
            </div>
            
            <div class="last-job">
            	<h3 class="title"><a href="#">Director of technology</a></h3>
                <strong>Amazon Web Services</strong>
                <br clear="all" />
                <span>Belo Horizonte, MG</span>
            </div>
            
        </div>
        
        <!-- Área acessos -->
        <div class="area_numeros">
        	
            <div class="number_data">
            	<strong>227</strong>
                <p>Amigos usando DevJobs</p>
            </div>
            
            <div class="number_data">
            	<strong>26</strong>
                <p>Visualizaram seu perfil</p>
            </div>
            
            <div class="number_data">
            	<strong>1</strong>
                <p>Curtiu seu perfil</p>
            </div>
            
        </div>
        
    </section>
    
    <section class="pesquisa">
    	
        <h2>Pesquisar um cargo em DevJob</h2>
        <div class="area_pesquisa">
        	<form method="post">
            	<input type="text" name="nome_cargo" class="campos" placeholder="Digite o cargo desejado" />
                <input type="text" name="local_job" class="campos" placeholder="Cidade e estado" />
                <a href="#" class="btn_search">Buscar</a>
            </form>
        </div>
    </section>
    
    <section class="ultimas_vagas">
    	
        <div class="quant-vagas"><strong>2</strong> vagas encontradas para o seu perfil.</div>
        <br clear="all" />
        <table cellspacing="0" summary="Tabela de jobs">
        	<thead>
            	<th width="10%">Empresa</th>
                <th width="35%">Cargo</th>
                <th width="20%">Postado em</th>
                <th width="30%">Interested</th>
            </thead>
            <tbody>
            
            	<tr>
                	<td align="center"><img src="https://fbstatic-a.akamaihd.net/rsrc.php/v2/y_/r/9myDd8iyu0B.gif" /></td>
                    <td>
                    	<p><a href="#">Developer</a></p>
                        <strong>Google</strong>
                        <br clear="all" />
                        <span>Belo Horizonte, MG</span>
                    </td>
                    <td align="center" style="font-size:14px;">Outubro 25, 2013</td>
                    <td>
                    <p>
                    	<a href="#">Arron Long</a>, 
                        <a href="#">Kim Wood</a>, 
                        <a href="#">Dennis Peterson</a>, 
                        <a href="#">Brooklyn Bennett</a>
                    	<small>... <a href="#">(+ 540)</a></small>
                    </p>
                    </td>
                </tr>
                
                <tr>
                	<td align="center"><img src="https://fbstatic-a.akamaihd.net/rsrc.php/v2/y_/r/9myDd8iyu0B.gif" /></td>
                    <td>
                    	<p><a href="#">Director</a></p>
                        <strong>Google</strong>
                        <br clear="all" />
                        <span>Belo Horizonte, MG</span>
                    </td>
                    <td align="center" style="font-size:14px;">Outubro 25, 2013</td>
                    <td>
                    <p>
                    	<a href="#">Arron Long</a>, 
                        <a href="#">Kim Wood</a>, 
                        <a href="#">Dennis Peterson</a>, 
                        <a href="#">Brooklyn Bennett</a>
                    	<small>... <a href="#">(+ 540)</a></small>
                    </p>
                    </td>
                </tr>
                
                
               
            </tbody>
        </table>
        
    </section>
    
  </div> <!-- .conteudo -->
  <br clear="all" />
  <?php include("rodape.php"); ?>
    
</div><!-- .geral -->

 

</body>
</html>