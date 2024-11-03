<?php
        
    $tags = isset($project['stack']) ? $project['stack'] : [];
    $technologies = [
        "HTML" => ["color" => "bg-rs-red", "stack" => "frontend"],
        "CSS" => ["color" => "bg-rs-blue", "stack" => "frontend"],
        "Javascript" => ["color" => "bg-rs-yellow", "stack" => "frontend"],
        "PHP" => ["color" => "bg-rs-purple", "stack" => "backend"],
        "Git" => ["color" => "bg-rs-red", "stack" => "both"]
    ];

    foreach ($tags as $tag) {
        if (isset($technologies[$tag])) {
            echo "<span class=\"txt-text-md px-3 py rounded {$technologies[$tag]['color']}\">{$tag}</span>";
        }
    }
