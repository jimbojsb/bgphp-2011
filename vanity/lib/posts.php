<?php
define('SEPARATOR', '----');
define('POSTS_FILE', 'posts.txt');

function getPosts()
{
    $postData = file(POSTS_FILE);

    $posts = array();
    $tempPost = array();
    for ($c = 0; $c < count($postData); $c+=4) {
        $tempPost["username"] = $postData[$c];
        $tempPost["post"] = $postData[$c + 1];
        $tempPost["timestamp"] = date("m/d/Y", $postData[$c + 2]);
        $posts[] = $tempPost;
    }

    return $posts;
}

function createPost($username, $content)
{
    $data = arraY();
    $data[] = $username . PHP_EOL;
    $data[] = $content . PHP_EOL;
    $data[] = time() . PHP_EOL;
    $data[] = SEPARATOR . PHP_EOL;
    file_put_contents(POSTS_FILE, $data, FILE_APPEND);
}