<form action="<?= $formAction ?>" method="post" class="form__wrapper text--medium">
    <label class="form__label"><span class="form__label--text">Title: </span><input type="text" name="title" class="form__input--base"></label>
    <br>

    <?php if ($withDescription) : ?>
        <label class="form__label"><span class="form__label--text">Description: </span><textarea name="description" rows="5" cols="33" class="form__input--base"></textarea></label>
        <br>
    <?php endif; ?>

    <label class="form__label"><span class="form__label--text">Author: </span><input type="text" name="author" class="form__input--base"></label>
    <br>
    <input type="submit" value="<?= $submitButtonLabel ?>" class="margin__top--20">
</form>