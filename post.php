<!DOCTYPE html>
<html>
<?php
include 'header.php';?>
<Main>
<?php
function getPostDetailsFromDatabase() {
        //TODO in Module 4
        //Get this data from a database instead of hardcoding it
        $postDetails = array('title' => 'Blog Post 1',
                            'content' => 'My first blog post',
                            'date'   => '01/01/2018',
                            'author' => 'christikaes');
        return $postDetails;
}
?>
<?php
//Post details contains all the data to generate the blog from
$postDetails = getPostDetailsFromDatabase();
?>
<h1> <?php echo $postDetails["title"]; ?> </h1>
<div> <?php echo $postDetails["author"];?> </div>
<div> <?php echo $postDetails["date"];?> </div>
<div> <?php echo $postDetails["content"];?> </div>

        <h2>Title of Post</h2>
 <div class="author">
            <p>Author</p>
          </div>
 <div class="date">
            <p>Date published</p>
              </div>
 <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
             </div>

    </main>
    
    <?php 
include 'footer.php';?>

</body>
</html>