<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <title>Template do site</title>
    </head>
    <body>
        <div class="barraTop">
            <section class="top">
                <span class="logo">Twitter</span>
                <span class="nomeLogout"> - <a href="/twitter/login/logout">Sair!</a></span>
            </section>
        </div>
        <div class="content">
            <?php
                $this->loadViewInTemplate($viewName, $viewData);
            ?>
        </div>
    </body>
    <footer>
        <section class="content">
            <p style="text-align: center">Todos os direitos reservados - <?= date('Y'); ?></p>
        </section>
    </footer>
</html>
