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
    
    .input_url
    {
        width: 500px;
        height: 50px;
        text-align: center;
        display: block;
        margin: 0 auto;
    }
    
    .button_url
    {
        width: 300px;
        height: 50px;
        text-align: center;
        display: block;
        margin: 0 auto;
        background-color: blue;
        border-radius: 5px;
        color:white;
    }
    
</style>
    
<body>
    
    <div class="row-fluid" style="margin-top:100px">
        <h1>Insira uma URL de algum restaurante do site, TripAdvisor.</h1><br><br>
        <h4 style="text-align:center; color:white">Exemplo: https://www.tripadvisor.com.br/Restaurant_Review-g303628-d5390160-Reviews-L_Osteria-Sao_Jose_Do_Rio_Preto_State_of_Sao_Paulo.html</h4>
    </div>
    
    <div class="row-fluid" style="margin-top:100px">
    
        <form name="form-control" method="post" action="be_buscaurl.php">

            <input class="form-control input_url" type="text" name="url" id="url" placeholder="INSIRA AQUI" required ><br><br>
            
            <input class="button_url" type="submit" value="CONSULTAR">
            
        </form>
    
    </div>
    
</body>
    
</html>
