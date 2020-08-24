<?php
$data = count(json_decode(file_get_contents(base_path('resources/js/json/tools.json')),true));
return [
    "meta-title" => $data." SEO Tools (Free) English Version \ cmlabs",
    "meta-desc" => "Check your website with Free SEO tools cmlabs: Page Speed Test, Sitemap Generator, Word Counter, Title & Meta Desc Checker, etc.",
    "meta-keyword" => "seo, free seo tool, content writing, copywriting",
    "lang" => "en"
];
