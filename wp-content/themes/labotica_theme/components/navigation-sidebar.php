<div id="sidebar_container" class="fixed top-0 right-0 z-0 flex w-3/4 h-full pb-40 bg-lbWhite border-x border-lbGreen">
    <?php wp_nav_menu(array(
        'theme_location' => 'mobile_side_menu',
        'container' => 'nav',
        'menu_class' => 'list-none flex flex-col text-base text-lbBlue font-medium text-lg',
        'container_class' => 'mt-auto mx-4',
    ))
    ?>
</div>