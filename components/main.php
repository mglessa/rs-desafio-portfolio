<?php
    $projects = [
        [
            'title' => 'Project 1',
            'description' => 'This is a project description',
            'stack' => ['HTML', 'CSS'],
            'src' => '/assets/images/image-1.png'
        ],
        [
            'title' => 'Project 2',
            'description' => 'This is a project description',
            'stack' => ['HTML', 'CSS', 'Javascript'],
            'src' => '/assets/images/image-2.png'
        ],
        [
            'title' => 'Project 3',
            'description' => 'This is a project description',
            'stack' => ['HTML', 'CSS', 'Javascript', 'PHP'],
            'src' => '/assets/images/image-3.png'
        ],
        [
            'title' => 'Project 4',
            'description' => 'This is a project description',
            'stack' => ['HTML', 'CSS', 'Javascript', 'PHP', 'Git'],
            'src' => '/assets/images/image-4.png'
        ],
        [
            'title' => 'Project 5',
            'description' => 'This is a project description',
            'stack' => ['HTML', 'CSS', 'Javascript', 'PHP', 'Git'],
            'src' => '/assets/images/image-5.png'
        ],
        [
            'title' => 'Project 6',
            'description' => 'This is a project description',
            'stack' => ['HTML', 'CSS', 'Javascript', 'PHP', 'Git'],
            'src' => '/assets/images/image-6.png'
        ]
    ];
    
    $classTag = 'txt--text-sm px-2 py-0.5 rounded';
?>

<main>
    <section class="max-w-screen-lg mx-auto pt-16 pb-36">

        <h4 class="txt-subtitle txt--rs-red mb-2 text-center">Meu trabalho</h4>
        <h3 class="txt-title-md txt--rs-gray-600 mb-14 text-center">Veja os projetos em destaque</h3>

        <div class="grid grid-cols-2 gap-2">
            <?php 
                foreach ($projects as $project) {
                    include './components/project.php';
                } 
            ?>

        </div>
    </section>
</main>