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
    <title>Cronômetro Online</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    
    <div class="content">

        <div class="logo">
            <h1>cronômetro</h1>
        </div>

        <div class="cronometro">

          <div class="exibidor">
                <h1 id="counter">00:00:00</h1>
                <button onclick="start();" class="start" id="start">Iniciar</button>
                <button onclick="pause();" id="pause">Pausar</button>
                <button onclick="stop();" id="stop">Zerar</button>
          </div>

        </div>

        

    </div>

    <div class="more">

        <div class="infos">

            <div class="info-box">

                <h1>Para quê serve o cronômetro?</h1>
                <p>O cronômetro é ideal para medir unidades de tempo. Se você precisa fazer alguma atividade e necessita quantificar o tempo em que ela levará, o cronômetro é o instrumento ideal para você.</p>

            </div>

            <div class="info-box">

                <h1>Em quais atividades posso usar um cronômetro?</h1>
                <p>Basicamente em qualquer atividade que você quiser: seja estudar, cozinhar, praticar algum exercício físico.</p>

            </div>

            <div class="info-box">

                <h1>Unidades de tempo</h1>
                <p>Um cronômetro ideal marca os segundos, minutos e horas. Abaixo, uma pequena tabela de conversão destas unidades.</p>
                
                <ul>
                    <li>1 hora = 60 minutos</li>
                    <li>1 minuto = 60 segundos</li>
                    <li>1 segundo = 1000 milésimos de segundos</li>
                </ul>

            </div>
        </div>
        
    </div>

    <script src="js/cronometro.js"></script>

</body>
</html>