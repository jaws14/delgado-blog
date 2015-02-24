<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-varify.php");
    
    if(!authenticateuser()) {
        header("location:" . $path . "index.php");
        die();
    }
?>

<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php" ?>">
    <div>
        <label for="title">title: </label>
        <input type="text" name="title" />
    </div>
    
    <div>
        <label for="post">post: </label>
        <textarea name="post"></textarea>
    </div>
        
        <div>
            <button type="submit">submit</button>
        </div>
</form>