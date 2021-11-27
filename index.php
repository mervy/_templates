<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Templates</title>
    <style>
        * {
            margin: 0 auto;
        }

        main {
            width: 70%;
        }

        h1 {
            text-align: center;
            margin: 10px 0 25px
        }

        .templates {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 5px;
            align-content: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <main>
        <h1>Templates</h1>
        <div class="templates">
            <?php 
             $totalTemplates = 25;
            for ($i = 0; $i < $totalTemplates;$i++):
            ?>
            <div class="item">
                <a href="template-1">
                    <img src="https://picsum.photos/id/<?=$i*7?>/215/120" alt="">
                </a>
            </div>
            <?php endfor;?>          
        </div>
    </main>
</body>

</html>