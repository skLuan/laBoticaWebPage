<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php
    $argsBtnWhatsapp = ['classes' => [
        'aTag' => '',
        'iconClass' => 'text-4xl'
    ],];


    wp_head(); ?>
</head>

<body class="relative">
    <div class="sticky z-10 shadow <?= is_admin_bar_showing() ? 'top-6' : 'top-0' ?>">
        <nav class="p-2 text-center bg-lbBlue text-lbWhite-Silver">
            <h4 class="">Envios gratis con compras desde <b>$000.0000</b></h4>
        </nav>
        <nav id="mobile_principal_navigation" class="flex items-center justify-between w-full px-4 py-2 bg-lbWhite">
            <figure class="w-[90px] h-full bg-red-200">
                <picture><img class="w-full h-full bg-gray-300" src="" alt="logo"></picture>
            </figure>
            <?= get_template_part(COMPONENT_PARTS . 'button', 'whatsapp', $argsBtnWhatsapp) ?>
        </nav>
    </div>

    <?= get_template_part(COMPONENT_PARTS . 'navigation', 'tabbar') ?>
    <?= get_template_part(COMPONENT_PARTS . 'navigation', 'sidebar') ?>
    <?= get_template_part(COMPONENT_PARTS . 'navigation', 'search-mobile') ?>

    <?php wp_body_open() ?>