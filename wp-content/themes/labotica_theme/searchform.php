<form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="flex flex-row w-full overflow-hidden rounded-tr rounded-bl shadow-md rounded-br-3xl rounded-tl-3xl">
    <button type="submit" class="flex items-center px-[1.72rem] bg-lbBlue">
        <iconify-icon class="text-2xl text-white" icon="iconamoon:search-duotone"></iconify-icon></button>
    <label for="search"></label>
    <input type="search" class="w-full px-5 py-3 border searchForm" placeholder="¿Qué producto buscas?" name="s" id="search" value="<?= get_search_query(); ?>" />
    <!-- <input type="image" alt="Search" src="<?php // bloginfo('template_url'); 
                                                ?>/images/search.png" /> -->
</form>