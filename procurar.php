<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>DevJobs - Procurar Jobs</title>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<style type="text/css">


</style>
</head>

<body>

<div class="geral">
	
  <?php 
    $nome_pagina = 'Procurar';	
	include("cabecalho.php"); 
  ?>
    
  <div class="conteudo">
  	 
    <section class="pesquisa">
        <h2>Pesquisar um cargo em DevJob</h2>
        <div class="area_pesquisa">
        	<form method="post">
            	<input type="text" name="nome_cargo" class="campos" placeholder="Digite o cargo desejado" />
                <input type="text" name="local_job" class="campos" placeholder="Cidade e estado" />
                <a href="#" class="btn_search">Buscar</a>
            </form>
            
            <hr />
            
            
            <div class="ver_tambem">
            	<p>Veja também: </p>	
                	<ul>
                    	<li><a class="btn_search" href="#">Programador de interfaces</a></li>
                        <li><a class="btn_search" href="#">Desenvolvedor web</a></li>
                        <li><a class="btn_search" href="#">Front end</a></li>
                        <li><a class="btn_search" href="#">Programador PHP</a></li>
                        <li><a class="btn_search" href="#">Programador Android</a></li>
                        <li><a class="btn_search" href="#">Gerente de técnologia</a></li>
                        <li><a class="btn_search" href="#">Programdor IOS</a></li>
                    </ul>
                
            </div>
            
        </div>
    </section>
    
    <section class="ultimas_vagas">
    
    <div class="quant-vagas"><strong>2</strong> vagas se encaixam perfeitamente com seu perfil.</div>
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
                    <p><a href="#">Director</a>, <a href="#">Product Manager</a></p>
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
                    <p><a href="#">Director</a>, <a href="#">Product Manager</a></p>
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

    
    
   
  </div>
   
</div>

</body>
</html>