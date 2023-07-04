<?php

$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";

$opciones = array("ssl" => array("verify_peer" => false, "verify_peer_name" => false));

$reponse = file_get_contents($url, false, stream_context_create($opciones));

$objReponse = json_decode($reponse);

//print_r($objReponse);

foreach ($objReponse->list as $video) {

    //print_r($video->title);
    //print_r($video->channel);

}

?>

<ul>

    <?php foreach ($objReponse->list as $video) { ?>
        <li><?php echo ($video->title); ?> | <?php echo ($video->channel); ?></li>
    <?php } ?>

</ul>