<form action="<?= $formAction ?>" method="post">
    <label>Title: <input type="text" name="title"></label>
    <br>
    <label>Description: <textarea name="description" rows="5" cols="33"></textarea></label>
    <br>
    <label>Author: <input type="text" name="author"></label>
    <br>
    <input type="submit" value="<?= $submitButtonLabel ?>">
</form>