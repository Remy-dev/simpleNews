<form action="" method="post">
    <p>
        <?= isset($erreurs) && in_array(\Entity\Comment::AUTEUR_INVALIDE, $erreurs) ? 'L\'auteur est invalide.<br />' : '' ?>
        <label for="username">Pseudo</label><input id="username" type="text" name="pseudo" value="<?= htmlspecialchars($comment['auteur']) ?>" /><br />

        <?= isset($erreurs) && in_array(\Entity\Comment::CONTENU_INVALIDE, $erreurs) ? 'Le contenu est invalide.<br />' : '' ?>
        <label for="content">Contenu</label><textarea id="content" name="contenu" rows="7" cols="50"><?= htmlspecialchars($comment['contenu']) ?></textarea><br />

        <input type="hidden" name="news" value="<?= $comment['news'] ?>" />
        <input type="submit" value="Modifier" />
    </p>
</form>