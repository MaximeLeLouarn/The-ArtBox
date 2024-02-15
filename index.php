<?php

include('./header.php');

?>
    <main>
        <div id="liste-oeuvres">

        <?php foreach($artArray as $key => $value) : ?>

            <article class="oeuvre">
                <a href="./oeuvre.php?id=<?= $value['id']; ?>">
                    <img src="./img/<?= $value['img']; ?>" alt="<?= $value['titre']; ?>">
                    <h2><?= $value['titre'] ?></h2>
                    <p class="description"><?= $value['nomAuteur']; ?></p>
                </a>
            </article>
        <?php endforeach; ?>

        </div>
    </main>
<?php

include('./footer.php');

?>