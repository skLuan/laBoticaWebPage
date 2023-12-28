<?php get_header() ?>


<section id="front_Banner">
    <div class="relative">
        <figure class="bg-gray-300 pb-28">
            <picture class="">
                <img src="<?= MOCKUP_IMAGE ?>" alt="">
            </picture>
        </figure>
        <!-- contendor del title y la info de abajo -->
        <div class="absolute flex-col items-center px-2 py-8 top-0 left-0 w-full h-full flex">
            <h2 class="font-rqInter text-center text-rqGreen-darker text-5xl font-bold">The Future of Youth Festivals</h2>
            <div class="text-rqYEllow-darker font-bold text-4xl mt-16">
                00:00:00
            </div>
            <p class="text-center text-gray-800 text-base mt-8">
                A space where youth will be guided to feel limitless; and free to be their authentic selves, all while being loved and held by grandmother earth.
            </p>
            <div class="flex mt-4 flex-col text-center">
                here goes the form
                <input class="p-2 px-4 rounded-full" type="text" placeholder="This does anything">
                <button class="w-2/3 py-2 mx-auto mt-4 rounded-full bg-rqYEllow text-rqYEllow-darker font-bold text-center">Subscribe</button>
            </div>


        </div>
    </div>
</section>

<section id="global_Youth_Experience" class="mt-4">
    <h2 class="font-rqInter text-center text-rqGreen-darker text-3xl font-bold">GLOBAL YOUTH FESTIVAL</h2>
    <h3 class="font-rqInter text-center text-rqGreen-darker text-xl font-bold">June 14- 21 2024</h3>
    <div class="bg-gray-300 my-10 h-[500px]">
        here comes the videos
    </div>
    <p class="text-gray-700 px-2">Your uniqueness will blossom in a space where it is honored and welcomed</p>
    <h3 class="font-rqInter text-center text-rqGreen-darker text-2xl my-4 font-bold">Experience</h3>

    <div>
        <figure class="bg-gray-300 overflow-hidden h-[178px] relative">
            <picture class="absolute bottom-[-72%]">
                <img src="<?= MOCKUP_IMAGE ?>" alt="">
            </picture>
            <h5 class="absolute text-rqGreen-darker pb-4 bottom-0 text-4xl font-bold pl-8">Music</h5>
        </figure>
        <p class="px-4 py-8">
            Music is the universal language that carries the power to inspire, heal, and unite people from all walks of life. We wish to impact our next generation through blissful vibrations necessary to create Connected Leaders.
        </p>
    </div>

</section>
<section id="what_is_global_festival">

</section>
<section id="why_we_are_unique">

</section>
<section id="youth_comunnity">

</section>
<section id="join_us">

</section>
<?php
// while (have_posts()) {
//     the_post();
//     the_content();
// }
?>

<?php get_footer() ?>