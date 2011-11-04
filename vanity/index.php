<?php
require_once 'lib/posts.php';

$posts = getPosts();




include 'includes/header.php';

// login

// most recent posts
foreach ($posts as $post) {
    include 'includes/singlepost.php';
}


include 'includes/footer.php';