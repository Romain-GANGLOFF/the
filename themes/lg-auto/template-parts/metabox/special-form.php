<?php $meta = isset(get_post_meta($post->ID)["special"][0]) ? get_post_meta($post->ID)["special"][0] : "0"; ?>

<p>Affichage du bloc "vente spéciale" de <?= ucwords($post->post_name) ?></p>
<select name="special" id="Special">
    <?php foreach ($options as $key => $option) : ?>
        <option value="<?=$option["value"]?>" <?php selected($option["value"], $meta, true) ?>><?=$option["name"]?></option>
    <?php endforeach ?>
</select>
    
        