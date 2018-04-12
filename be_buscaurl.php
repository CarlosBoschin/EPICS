<?php

    /*ESCONDE QUALQUER EVENTUALIDADE DO USUÁRIO*/

    error_reporting(0);
    ini_set(“display_errors”, 0 );



    /*PEGA A URL PASSADO NO INPUT ATRAVÉS DO POST*/
    $pega_url = $_POST['url'];



    /*USA A FUNÇÃO FGC(FILE GET CONTENTS), PEGA TODO O CONTEUDO DA URL EM QUESTÃO E O JOGA NUMA STRING*/
    $url = file_get_contents($pega_url);


    /*VERIFICA SE CONSEGUIU ACHAR UMA URL VÁLIDA ATRAVÉS DA FUNÇÃO, CASO NÃO ESTEJA VÁZIA, ATRIBUI OS PARAMETROS*/
    if(!empty($url))
    {
        
            $nome = explode('<h1 id="HEADING" class="heading_title">',$url);
            $nome_resul = explode('</h1>', $nome[1]); 
        
            $avaliacao = explode('<a class="more" href="#REVIEWS"><span property="count">',$url);
            $avaliacao_resul = explode('</span>', $avaliacao[1]);

            $foto = explode('<meta property="og:image" content=',$url);
            $foto1_resul = explode('/>',$foto[1]);

            $foto2 = explode('class="onDemandImg centeredImg" data-src=',$url);
            $foto2_resul = explode(' style=" max-width:100%;  max-height:133%; "data-mediaid="297403093"/>',$foto2[1]);
        
            /*VERIFICA SE ALGUMA VARIAVEL RETORNA ALGO, SE TIVER RESULTADO TODAS AS 4, ENTRA E MONTA, CASO NÃO, MOSTRA ERRO DE RETORNO*/
            if ( ($nome_resul[0] != "") && ($avaliacao_resul[0] != "") && ($foto1_resul[0] != "") && ($foto2_resul[0] != ""))
            {   
                $nome_resul = $nome_resul[0];
                $avaliacao_resul = $avaliacao_resul[0];
                $foto1_resul = $foto1_resul[0];
                $foto2_resul = $foto2_resul[0];
            }
        
            else
            { 
                echo '<script>
                        alert("Sua URL é válida, porém, não retorna o esperado!");
                        location.href= "index.php";
                     </script>';
            }
    }

    /*CASO NÃO ACHE UMA URL VÁLIDA, REPORTA O ERRO E SAI*/
    else
    {
        echo '<script>
                alert("URL Inválido");
                location.href= "index.php";
              </script>';
    }   

?>

<!DOCTYPE html>
<html lang="br">
<head>

  <title>Teste EPICS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
    
<style>
    
    body
    {
        font-family: 'Roboto';
        background-color: black; 
        background-size: 100% 100% no-repeat;
    }
    
    h1
    {
        color: white;
        text-align: center;
    }
    
    .img-centralizar
    {
        width: 400px;
        height: 400px;
        display: block;
        margin: 0 auto;
    }
    
    .button-back
    {
        width: 100px;
        height: 50px;
        text-align: center;
        display: block;
        margin: 0 auto;
        background-color: blue;
        border-radius: 5px;
        color:white;
        margin-top: 200px;
    }
    
</style>
    
<body>
    
    <div class="row-fluid" style="margin-top:100px">
        <h1><?php echo $nome_resul;  ?></h1><br><br>
        <h4 style="text-align:center; color:white"><?php echo $avaliacao_resul; ?>&nbsp;Avaliações.</h4><br><br>
    </div>
    
    <div class="row-fluid">
    
        <div class="col-lg-12">
        
            <div class="col-lg-6">
                <img class="img-centralizar" src=<?php echo $foto1_resul; ?>/>
            </div>
            
            <div class="col-lg-6">
                <img class="img-centralizar" src=<?php echo $foto2_resul; ?>/>
            </div>
            
        </div>
        
    </div>
    
    <div class="row-fluid">
        <a href="index.php"><button class="button-back">Voltar</button></a>
    </div>
    
</body>
    
</html>


