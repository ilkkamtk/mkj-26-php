<section>
    <h3>Update media item</h3>
    <form method="post" action="./operations/updateData.php">
        <input type="hidden" name="media_id" value="1341324">
        <div class="form-control">
            <label for="title">Title: </label>
            <input type="text" name="title" id="title" value="tämän hetken title">
        </div>
        <div class="form-control">
            <label for="description">Description: </label>
            <input type="text" name="description" id="description" value="tämän hetken description">
        </div>
        <div class="form-control">
            <button type="submit">
                Send
            </button>
        </div>
    </form>
</section>