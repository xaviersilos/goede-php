<html>
    <head>
        <title>PHP</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="">
    </head>

    <body>
            <?php 
                date_default_timezone_set("Europe/Amsterdam");
                $now = date('G');
                $time = date('G:i');
                //$now = 7;
                if($now < 6){
                    $background = "night";
                    $begroeting = "Goede nacht!";
                }else if($now < 12){
                    $background = "morning";
                    $begroeting = "Goede morgen!";
                }else if($now < 18){
                    $background = "afternoon";
                    $begroeting = "Goede middag!";
                }else if($now < 24){
                    $background = "evening";
                    $begroeting = "Goeden avond!";
                }
            ?>

            
            <section>
                <h1><?php echo $begroeting ?></h1>
                <h2>Het is nu <?php echo $time ?></h2>
            </section>
    </body>
</html>

<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        height: 100%;
        width: 100%;
        background-image: <?php echo "url(backgrounds/$background.png);"; ?>
        height: 100%;
        width: 100%;
        background-size: cover;
        background-attachment: fixed;
    }
    section{
        display: block;
        text-align: center;
        height: 50%;
        width: 50%;
        margin: 10% auto 0 auto;
    }
    h1{
        display:block;
        padding-top: 110px;
        font-size: 70px;
        color:#FFFFFF;
    }
    h2{
        font-size: 60px;
        color: #FFFFFF;
    }

</style>
