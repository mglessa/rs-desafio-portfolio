<?php 
    $project['title'] = 'Project 1';
    $project['description'] = 'This is a project description';
    $project['stack'] = ['HTML', 'CSS'];
?>

<div class='flex p-3 bg-rs-gray-300 rounded gap-8'>
    <div class="w-1/5 bg-rs-gray-200 rounded">

    </div>
    <div class="w-4/5">
        <h2 class="txt--title-sm txt--rs-gray-600"><?=$project['title']?></h2>
        <p class="txt--text-sm txt--rs-gray-500 mt-2 mb-8"><?=$project['description']?></p>
        <div class="flex gap-2">
            <?php include './components/tag.php';?>
        </div>
    </div>
</div>