<!DOCTYPE html>
<html>
<?php
include 'header.php';?>
<main>
    <?php
    function getPostTitlesFromDatabase() {
        //TODO in Module 4
        // get this data from a database instead of hardcoding it
        $postTitles = array("Blog Post 1", "Blog Post 2", "Blog Post 3");
        return $postTitles;
    }
    ?>
    <body>Here you will find a demonstration of an introductory PHP assignment </body>
    <ul>
        <?php
        $postTitles = getPostTitlesFromDatabase();

        foreach($postTitles as $postTitle) {
            echo "<li><a href='post.php?title=" . $postTitle . "'>" . 
            "</a></li>";
        }
     ?>
     </ul>
</main>
</body>
<?php 
include 'footer.php';?>
</html>