<div class="feeds">
    <article class="feed">
        <section>
            O que é Lorem Ipsum?
        Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
        e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja 
        de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não 
        só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente
        inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo 
        passagens de Lorem Ipsum, e mais recentemente 
        quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
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
                <a href="">Seguir</a>
            </td>
        </tr>
        <?php endforeach; ?>
        
    </table>
</div>
