<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>Create Blog Post</h1>

<form>
    <div method="post" action="<?php $path . "controller/create-post.php"; ?>">
        <label for="title">title: </label>
        <input type="text" name="title" />
    </div>
    
    <div>
        <label for="post">post: </label>
        <textarea name="post"></textarea>
        <div/>
        
        <div>
            <button type=""submit>submit</button>
        </div>
</form>