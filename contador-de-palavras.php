<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J9DWE9FSNF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-J9DWE9FSNF');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de palavras</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style-contador-palavras.css">

</head>
<body>

    <div class="content">

    <div class="logo">
        <h1>contador de palavras</h1>
    </div>

    <div class="cronometro contador">

    <div class="exibidor">
        <form action="" method="post">
            <textarea name="texto" placeholder="Digite seu texto"></textarea>
            <input type="submit" value="Contar" name="enviar">
        </form>
        <?php

        if(isset($_POST['enviar'])){
            $cont = 0;
            $conteudo = $_POST['texto'];
            $palavras = explode(' ', $conteudo);

           for ($i=0; $i < sizeof($palavras) ; $i++) { 
               if($palavras[$i]){
                   $cont++;
               }
           }
           echo "<span>".$cont." palavras </span>";
        }

    ?>
    </div>

    </div>



    </div>




    

    
</body>
</html>