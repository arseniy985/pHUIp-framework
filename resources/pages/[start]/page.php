<?php /** @var \Database\Models\Post $posts */ ?>

<h1>Тест страничка</h1>
<main>
    <?php foreach ($posts as $post): ?>
    <h2><?=$post->title ?></h2>
    <p><?=$post->content ?></p>
    <hr></hr>
    <?php endforeach; ?>
</main>

