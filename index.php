<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SETO Design</title>
    <meta name="description" content="Nasze projekty powstają z pasji tworzenia przestrzeni wyjątkowych, niepowtarzalnych">
    <meta name="keywords" content="stanowiska targowe, projektowanie stanowisk, projektowanie wnętrz komercyjnych, wyspy sprzedażowe">
</head>
<body>
    <div>
        <?php
            $langs = array('en', 'de', 'pl');
        
            if(isset($_GET['lang']) && in_array($_GET['lang'], $langs)) {
                $choose_lang = $_GET['lang'];
                setcookie("language", $choose_lang, time()+60*60*24*30);
            } else {
                if(isset($_COOKIE['language'])) {
                    $choose_lang = $_COOKIE['language'];
                } else {
                    $choose_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);;
                }
            }
            include 'lang/' . $choose_lang . '.php';

        ?>
        
        <p>Wybrany język cookies: <?php echo $choose_lang; ?></p>
        
        <br/>
        <br/>
        <?php echo $text; ?>
        <br/>
        <?php echo $uri = $_SERVER['REQUEST_URI']; ?>
        <br/>
        <br/>
        <?php
            $lang = substr(strstr($uri, 'lang='), 5, 7);
            echo $lang;
        ?>
        <br/>
        <a class="language" data-language="pl" href="?lang=pl">PL</a>
        <a class="language" data-language="en" href="?lang=en">EN</a>
        <a class="language" data-language="de" href="?lang=de">DE</a>
        
    </div>
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous">
    </script>
    <script>
        $(".language").click(function(){
            var value = $(this).data("language");
            console.log(value);
        });
    </script>
</body>
</html>
