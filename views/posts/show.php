<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container">
    <form method="GET" action="/admin/posts">
        <input type="hidden" name="id" value="<?= $post->id ?>">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title" value="<?= $post->title ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea name="body" class="form-control" id="body" rows="3" readonly><?= $post->body ?></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Back">
        </div>
    </form>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
