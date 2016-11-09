<div class="feeds">
    <form method="POST">
        <textarea name="msg" id="textareapost" ></textarea>
        <input type="submit" value="Postar">
    </form>
    <article class="feed">
        <section>
        <?php if($feed != null):  foreach ($feed as $item): ?>
            <header><strong><?= $item['nome'] ?></strong></header>
            <?= $item['post'] ?>
            <hr>
        <?php endforeach; endif;?>
        </section>
    </article>
</div>
<div class="navDir">
    <h4>Relacionamentos:</h4>
    <div class="rs_meio"><?= $qt_seguidores?><br>Seguidores</div>
    <div class="rs_meio"><?= $qt_seguidos?><br>Seguindo</div>
    <div style="clear: both"></div>
    
    <h4>Relacionamentos:</h4>
    <table border="0" width="100%">
        <tr>
            <td width="80%"></td>
            <td></td>
        </tr>
        <?php foreach ($sugeridos as $usuario): ?>
        <tr>
            <td><?= $usuario['nome'] ?></td>
            <td>
                <?php if($usuario['seguido'] == 0 ): ?>
                    <a href="/twitter/home/seguir/<?= $usuario['id'] ?>">Seguir</a>
                <?php else:?>
                    <a href="/twitter/home/deseguir/<?= $usuario['id']?>">Deseguir</a>
                <?php endif;?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
