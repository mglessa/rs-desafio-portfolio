<?php
        
    $tags = isset($project['stack']) ? $project['stack'] : array_keys($technologies);

    foreach ($tags as $tag) {
        if (isset($technologies[$tag])) {
            echo "<span class=\"{$classTag} {$technologies[$tag]['color']}\">{$tag}</span>";
        }
    }
?>
