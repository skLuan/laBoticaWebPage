<?php
$nuestrasTiendas = [
    'title' => 'Nuestras tiendas',
    'components' => [
        [
            'text' => 'Tienda 1',
            'url' => 'google.com.co'
        ],
        [
            'text' => 'Dirección',
            'url' => 'google.com.co'
        ],
        [
            'text' => 'Telefono',
            'url' => 'google.com.co'
        ],
    ],
];
$Nosotros = [
    'title' => 'Nosotros',
    'components' => [
        [
            'text' => 'Contacto',
            'url' => get_page_link(35) // COntacto ID page
        ],
        [
            'text' => 'Telefono',
            'url' => WHATSME_URL
        ],
        [
            'text' => 'Correo',
            'url' => 'mailto:'
        ],
        [
            'text' => 'Oficina central',
            'url' => 'google.com.co'
        ],
    ],
]
?>

<footer class="flex flex-col px-4 bg-lbGreen text-lbWhite-Silver">
    <?= get_template_part(COMPONENT_PARTS . 'list', 'titleSubs', $nuestrasTiendas) ?>

    <?= get_template_part(COMPONENT_PARTS . 'list', 'titleSubs', $Nosotros) ?>
    <div id="footer_social_media">
        <ul class="inline-flex">
            <li>
                <a href=""><iconify-icon class="text-4xl text-lbWhite-Silver" icon="gg:facebook"></iconify-icon></a>
            </li>
            <li>
                <a href="<?= INSTAGRAM_URL ?>">
                    <iconify-icon class="text-4xl text-lbWhite-Silver" icon="mdi:instagram"></iconify-icon>
                </a>
            </li>
        </ul>
    </div>
    <?php wp_nav_menu(array(
        'theme_location' => 'footer_menu_one',
        'container' => 'nav',
        'menu_class' => 'list-none flex flex-col text-base',
        'container_class' => 'my-4',
    ))
    ?>
    <div class=""><span class="mx-auto text-white">copyright 2024</span></div>
</footer>
<?php wp_footer() ?>
</body>

</html>