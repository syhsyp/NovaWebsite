<!DOCTYPE html>
<html>
    <head>
        <title>NOVA Photography</title>
        <script src="jquery-2.2.4.js"></script>
        <script src="index.js"></script>
        <script src='jquery-mousewheel-3.1.13/jquery.mousewheel.min.js'></script>
        <link rel="stylesheet" href="index.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maxium-scale=1, user-scalable=no">
    </head>

    <body>
        <div id="mobile-banner">
            <h1>NOVA Photography</h1>
            <button id="mobile-button">B</button>
        </div>
        <div id="page">
            <div id="menu">
            
            <h1>NOVA Photography</h1>
        
            <ul class="form">
                <li class="selected"><a href="#">Editorial</a></li>
                <li><a href="#">Portrait</a></li>
                <li><a href="#">Landscape</a></li>
                <li><a href="#">Commercial</a></li>
                <li><a href="#">Street</a></li>
                <li><a href="#">About</a></li>
            </ul>
            
            </div>

            <!-- <a href="mailto:info@novaphoto.co" id="mail">info@novaphoto.co</a> -->
            <?php
                $types = array("Editorial", "Portrait", "Landscape", "Commercial", "Street");
                foreach($types as $type) {
                ?>
                <div id= "<?= $type ?>">
                    <div id="blank"></div>
                    <?php
                    $images = glob("img/".$type."/*.jpg");
                    foreach($images as $image) {
                    ?>
                    <img class="images" src="<?= $image ?>" alt="">
                    <?php
                    }
                    ?>
                </div>  
                <?php
                }
                ?>
            <div id="share"></div>
        </div>
    </body>
</html>