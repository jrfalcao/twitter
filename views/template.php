<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Template do site</title>
    </head>
    <body>
        <p>Topo do site</p>
        <?php
            $this->loadViewInTemplate($viewName, $viewData);
        ?>
    </body>
    <footer>Rodapé do site!!! <?= date('Y'); ?></footer>
</html>
