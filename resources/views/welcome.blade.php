<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calculadora</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>

    </head>
    <body class="antialiased">
      
       
            <h1><p style="text-align: center;">Calculadora de Juros Compostos</p></h1>  <img src="https://www.calculadorajuroscompostos.com.br/wp-content/uploads/2018/12/F%C3%B3rmula-Montante-juros-compostos.png" alt="Calculadora" height="80" width="150" />
           <br>

           

            <form>
                Valor inicial : <br>
            <input type="text" id="valorInicial"/>
            <hr>

            Taxa de Juros  : <br>
            <input type="text" id="taxaJuros"/>
            <hr>

            Quantidade de Meses  : <br>
            <input type="text" id="quantidadeMeses"/> <input type = "button" value="Calcular" onClick="calcularJuros()">  </imput>
            <hr>

            O valor final é R$  : <br>
            <input type="text" id="valorFinal"/> 
            <hr>

            </form>
            
      
    </body>
    <script>
    function calcularJuros(){
        var valorInicial = Number( document.getElementById("valorInicial").value);
        var quantidadeMeses = Number( document.getElementById("quantidadeMeses").value);
        var taxaJuros =  Number(document.getElementById("taxaJuros").value);
        taxaJuros = taxaJuros/100;
       
        var valorFinal = valorInicial;
        for (let index = 1; index <= quantidadeMeses; index++) {
           valorFinal = valorFinal+(valorFinal * taxaJuros); 
        }
    
        document.getElementById("valorFinal").value = valorFinal; 
    }
        
    </script>
</html>
