<?php
$api = "https://newsapi.org/v2/top-headlines?sources=google-news-br&apiKey=114ff6f2ab9246aeb8cb0485fcb66cc7";
$news = json_decode(file_get_contents($api));
