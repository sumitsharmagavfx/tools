<?php
$data = count(json_decode(file_get_contents(base_path('resources/js/json/tools.json')),true));
return [
    "meta-title" => $data." SEO Tools (Gratis) Versi Bahasa Indonesia \ cmlabs",
    "meta-desc" => "Cek website dengan Free SEO Tools cmlabs: Page Speed Test, SItemap Generator, Word Counter, Title & Meta Desc Checker, dll.",
    "meta-keyword" => "seo, free seo tool, content writing, copywriting",
    "lang" => "id",
    "title" => "SEO Tool oleh CMLABS",
    "sub-title" => "PERKAYA KEMAMPUAN TANPA BATAS BERSAMA CMLABS",
];
