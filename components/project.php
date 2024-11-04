<div class='flex p-3 bg--rs-gray-300 rounded gap-8 cursor-pointer project'>
    <div class="w-60 h-32 bg--rs-gray-200 rounded">
        <img class="w-60 h-32 bg--rs-gray-200 rounded" src="<?=$project['src']?>" alt="Thumbnail">
    </div>
    <div class="flex-1">
        <h2 class="txt--title-sm txt--rs-gray-600"><?=$project['title']?></h2>
        <p class="txt--text-sm txt--rs-gray-500 mt-2 mb-8"><?=$project['description']?></p>
        <div class="flex gap-2 flex-wrap">
            <?php include './components/tag.php';?>
        </div>
    </div>
</div>