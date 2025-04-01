<?php
include   'incs/header.php'; ?>
<main class="main py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?= $post ?>
            </div>

            <div class="col-md-4">
                <h3>Recent Posts</h3>
                <ul class="list-group">
                    <?php foreach ($recent_posts as $recent_post): ?>
                        <li class="list-group-item">
                            <a href="post/<?= $recent_post['slug'] ?>"><?= $recent_post['slug'] ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>

        </div>
    </div>
</main>
<?php include 'incs/footer.php'; ?>