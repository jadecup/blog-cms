<!DOCTYPE php>
<html>
<head>
<title>
Jacob Leckrone
</title>
<link rel="stylesheet" href="styles.css">
</head>
<h1 style="font: size 50px;">Hello World</h1>

<br>
<nav></nav>
<button onclick="window.location.href='index.php';">HOME</button>
<button onclick="window.location.href='post-submission.php';">Post Submission</button>
<br/><br/>
</nav>
<main>
    <body>Here you will find a demonstration of an introductory PHP assignment </body>
    <ol>
        <form action="/action_page.php" method="get">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title"><br><br>
            <label for="author">Author:</label>
            <input type="text" id="author" name="author"><br><br>
            <label for="date">Date:</label>
            <input type="text" id="date" name="date"><br><br>

            <label for="posttext">Post text:</label>
<textarea id="post" name="posttext" rows="4" cols="50">

</textarea>
<br/>
            <button type="submit" value="Submit">Submit</button>
          </form>
    </ol>

    </main>
    
<footer>
        <p>Author of Site: Jacob Leckrone</p>
</footer>

</body>
</html>