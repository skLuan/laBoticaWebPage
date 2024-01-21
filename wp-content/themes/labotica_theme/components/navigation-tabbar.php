<?php
$categoriesUrl = get_the_permalink(24);
$CartUrl = get_the_permalink(9)
?>
<nav id="tabBarMobile" class="fixed bottom-0 z-10 w-full px-4 pt-4 pb-6 bg-lbWhite">
    <ul class="flex flex-row items-center justify-between text-4xl text-lbBlue">
        <li><a class="transition-all opacity-45" href="<?= home_url() ?>"> <iconify-icon icon="ic:round-home"></iconify-icon> </a></li>
        <li><a class="transition-all opacity-45" href="<?= $categoriesUrl ?>"><iconify-icon icon="material-symbols:category-rounded"></iconify-icon></a></li>
        <li><a class="transition-all opacity-45" href="<?= $CartUrl ?>"> <iconify-icon class="text-3xl" icon="fa-solid:shopping-cart"></iconify-icon></a></li>
        <li><button class="transition-all opacity-45" id="mobile_sidebar_button"><iconify-icon icon="gg:menu-grid-o"></iconify-icon></button></li>
    </ul>
</nav>