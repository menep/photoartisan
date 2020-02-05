<?php require 'app/views/partials/header.php'; ?>

<?php if (!$response) : ?>

<h1 class="title--1 text--center margin__bt--20">Oops!</h1>
<h2 class="title--2 text--center">The gallery you were looking for could not be retrieved...</h2>

<?php else : ?>

<h1 class="title--1 text--center margin__bt--40"><?= $response['title'] ?> by <?= $response['author'] ?>
</h1>
<h2 class="title--2 text--center margin__bt--40"><?= $response['description'] ?>
</h2>

<section>
	<form action="upload" method="post" class="form__wrapper text--medium">
		<label>Select a new image: <input type="file" name="file" accept="image/*"></label>
		<input type="submit" value="Upload image">
	</form>
</section>

<?php endif; ?>

<?php require 'app/views/partials/footer.php';
