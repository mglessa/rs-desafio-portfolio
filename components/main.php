<main>
    <section class="max-w-screen-lg mx-auto pt-16 pb-36">

        <h4 class="txt-subtitle txt--rs-red mb-2 text-center">Meu trabalho</h4>
        <h3 class="txt-title-md txt--rs-gray-600 mb-14 text-center">Veja os projetos em destaque</h3>

        <div class="grid grid-cols-2 gap-2">
            <?php 
                $classTag = 'txt--text-sm px-2 py-0.5 rounded';
                foreach ($projects as $project) {
                    include './components/project.php';
                } 
            ?>

        </div>
    </section>
</main>