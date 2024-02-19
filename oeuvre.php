<?php

include ('./header.php');

?>
<main>
    <?php foreach($artArray as $key => $value) : ?>
        <?php if ($_GET['id'] == $value['id']) : ?>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="./img/<?= $value['img']; ?>" alt="<?= $value['titre']; ?>">
            </div>
            <div id="contenu-oeuvre">
                <h1><?= $value['titre']; ?></h1>
                <p class="description"><?= $value['nomAuteur']; ?></p>
                <p class="description-complete">
                    <?= $value['fullDescription']; ?>
                </p>
            </div>
        </article>
        <?php break ?>
        <?php endif ?>
        <?php endforeach ?>
</main>
<?php

include ('./footer.php');

?>