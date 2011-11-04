<?php
/**
 *
 * array(
 *       array("username" => joshbutts,
 *             "post"     => [post text],
 *             "timestamp" => [date]),
 *       array("username" => joshbutts,
 *             "post"     => [post text],
 *             "timestamp" => [date])
 * )
 *
 *
 *
 *
 *
 */
function getPosts()
{
    $postData = file('posts.txt');

    $posts = array();
    $tempPost = array();
    for ($c = 0; $c < count($postData); $c+=4) {
        $tempPost["username"] = $postData[$c];
        $tempPost["post"] = $postData[$c + 1];
        $tempPost["timestamp"] = $postData[$c + 2];
        $posts[] = $tempPost;
    }

    return $posts;
}