<?php 
    $classTag = 'txt--text-md px-3 py rounded';
?>

<header class="py-32">
    <section class="max-w-screen-lg text-center mx-auto">
        <div class="mx-auto w-60 h-60 rounded-full bg-gray-200 mb-14">
            <img class="w-full h-full rounded-full"
                src="/assets/images/kratos.jpg" alt="">
        </div>
        <h2 class="txt--subtitle txt--rs-gray-500 mb-2">Hello World! Meu nome é <span class="txt--rs-red">Matheus Lessa</span> e sou</h2>
        <h1 class="txt--title-lg txt--rs-gray-600 mb-5">Desenvolvedor Web</h1>
        <p class="txt--text-sm txt--rs-gray-400 mb-20">Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.</p>
        <div class="flex justify-center gap-3">
            <?php include './components/tag.php'?>
        </div>
    </section>
</header>