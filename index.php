<!DOCTYPE html>
<!-- Document created by Fred Nora -->
<!-- Application created by A. de Regt -->

<html lang="en">

<head>
<meta charset="UTF-8">
<meta 
    name="viewport" 
    content="width=device-width, initial-scale=1.0">
<meta 
    name="description" 
    content="This app is a fork from Christmas2020 app, created by A. de Regt.">
<meta 
    name="author" 
    content="A de Regt">

<title>Christmas <?php echo date("Y"); ?></title>
<style>
            body{
                background-color: green
            }

            .core {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                border: dotted darkred 5px;
                border-radius: .33rem;
                padding: 10px;
                background-color: #44ab44;
                box-shadow: 10px 10px lightgray;
                text-align: center;
            }

            .button {
                border: solid black 1px;
                border-radius: .25rem;
                padding: 10px;
                color: black;
                text-decoration: auto;
                text-align: center;
            }

            .noicon {
                padding-left: 30px;
            }

            .iconpos {
            }

            .button:hover{
                background-color: lightgreen;
            }
</style>

<!-- Prefetch -->
<link rel="dns-prefetch" href="https://github.com/"/>

<!-- Includes -->
<link href="./assets/css/gramado.css" rel="stylesheet">

</head>

<body>
    
    <div class="core">
    <!-- Header -->
    <h1>Merry Christmas and a happy new year!</h1>
    
    <br/>
    <?php
        if (file_exists(getcwd() . "/" . date("Y")))
        {
    ?>
            <!-- Button -->
            <a class="button noicon" href="/<?php echo date("Y"); ?>/index.html">Play this years Christmas game
            </a>
            <br/><br/><br/>
    <?php
        } 
        
        $files = scandir(getcwd());
        foreach ($files as $file)
        {
            if (is_dir($file) && is_numeric($file))
            {
    ?>
                <!-- Button -->
                <br/>
                <br/>
                <a 
                    class="button noicon" 
                    href="/<?php echo $file; ?>/index.html">Play game!
                </a>
                <br/><br/><br/>
    <?php
            }
        }
    ?>

        <!-- Button -->
        <br/>
        <br/>
        <a 
            class="button" 
            href="https://github.com/frednora/xmas">
            <img class="iconpos" 
                width="20" 
                height="20" 
                src="https://github.com/fluidicon.png"> See code at GitHub
        </a>
        
        <br/>
        <br/>
        <br/>
    </div>

<!-- Cool scripts goes here! -->
<script src="./assets/js/gramado.js"></script>
</body>

</html>