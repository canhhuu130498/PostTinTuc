<?php include "resources/views/post/header.blade.php" ?>
<main>
    <div class="insert">
        <form method="post" action="http://localhost:8000/PostTinTuc/post/news/store">
            @method('get')
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <p>
                <label for="title">Title</label><br>
                <input type="text" name="title" value="" size="42">
            </p>
            <p>
                <label for="content">Content</label><br>
                <textarea type ="test" name="content" rows="10" cols="40"></textarea>
            </p>


                <p>
                <label for="author">Author</label><br>
                <input type="text" name="author" value="" size="42">
            </p>
            <p>
                <button type="submit">Submit</button>
            </p>
        </form>
    </div>
</main>
<?php include "resources/views/post/footer.blade.php" ?>
