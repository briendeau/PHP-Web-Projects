<?php

// Function to output a single post row
function outputPostRow($post)
{
    echo '<div class="row">';
    echo '<div class="col-md-4"> ';
    echo '<a href="post.php?id=' . $post["postId"] . '" class=""><img src="images/' . $post["thumb"] . '" alt="' . $post["title"] . '" class="img-responsive"/></a>';
    echo '</div>';
    echo '<div class="col-md-8"> ';
    echo '<h2>' . $post["title"] . '</h2>';
    echo '<div class="details">';
    echo 'Posted by <a href="user.php?id=' . $post["userId"] . '">' . $post["userName"] . '</a>';
    echo '<span class="pull-right">' . $post["date"] . '</span>';
    echo '<p class="ratings">';
    for ($i = 0; $i < $post["reviewsRating"]; $i++) {
        echo '<img src="images/star-gold.svg" width="16" />';
    }
    for ($i = 0; $i < 5 - $post["reviewsRating"]; $i++) {
        echo '<img src="images/star-white.svg" width="16" />';
    }
    echo $post["reviewsNum"] . ' Reviews</p>';
    echo '</div>';
    echo '<p class="excerpt">' . $post["excerpt"] . '</p>';
    echo '<p class="pull-right"><a href="post.php?id=' . $post["postId"] . '" class="btn btn-primary btn-sm">Read more</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<hr/>';
}


function generateLink($url, $label, $class) {
  echo "<a href='$url' class='$class'>$label</a>";
}

?>