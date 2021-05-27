<?php
    $content = isset($post->movie) ? wp_trim_words($post->movie) : '';
?>
<h2>Indiquez l'URL (chemin d'accès) de la vidéo mise en avant<h2>
<textarea name="movie" class="page-movie" style="width: 100%; height: 100px;"><?= $content; ?></textarea>