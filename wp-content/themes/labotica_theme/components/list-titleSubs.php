<?php
$argTitle = $args['title'];
$argCompo = $args['components'];

$title = "title";
$components = [
    [
        'text' => '',
        'url' => ''
    ],
];
$argTitle? $title = $argTitle : null;
$argCompo? $components = $argCompo : null;
?>
<ul class="my-4 font-semibold">
    <li>
        <h3 class="text-xl font-bold uppercase text-lbGreen-Light"><?= $title ?></h3>
    </li>
    <?php
    foreach ($components as $compo) :
    ?>
        <li><a href="<?= $compo['url'] ?>"><?= $compo['text'] ?></a></li>
    <?php
    endforeach;
    ?>
</ul>