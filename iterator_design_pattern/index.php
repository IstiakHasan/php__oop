<?php

spl_autoload_register(function($cls){
  include "class/".$cls.".php";
});
$blogpost=getallpost();



$posts=new post();


foreach($posts as $post){
    echo $post->getTitel();
    echo $post->getContent();
    echo $post->getDate();
    echo $post->getAuthor();


    $comments=new comments($post->getComments());


    foreach($comments as $comment){
        echo $comment->getCommentAuthor();
        echo $comment->getCommentContant();
        echo $comment->getCommentAuthor();
    }

}




?>