<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <meta charset="utf-8">
        <title>cs490 login</title>
    </head>
    <body>
        <section id = "pre">
            <center><h1 class="pre">LOGIN</h1></center>
        </section>
        <div id = "main">
            <section id = "form" name = "main">
                <center>
                    <form class="login" action="curl.php" method="POST">
                        <input type = "hidden" name = "isSubmitted" value = "1"/>
                        <input type="text" name="U" id="ucid" placeholder="UCID"/>
                        <br>
                        <input type="password" name="P" id="pass" placeholder="password"/>
                        <br>
                        <div id="err"> Enter UCID & Password </div>
                        <input type="submit" value = "Log In" name="submit"/>
                    </form>
                </center>
            </section>
        </div>
    </body>
</html>
