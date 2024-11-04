<?php foreach ($medias as $key => $media): ?>
    <a href="<?=$media['url']?>" class="flex items-center p-3 rounded bg--rs-gray-300 w-60 gap-3 button">
        <i class="ph <?=$media['icon']?> txt--rs-gray-400"></i>
        <span class="txt--text-md txt--rs-gray-500 flex-1"><?=$key?></span>
        <i class="ph ph-arrow-up-right txt--rs-blue"></i>
    </a>
<?php endforeach; ?>
