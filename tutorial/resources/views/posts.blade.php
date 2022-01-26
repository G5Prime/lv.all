<!doctype html>
<title>posts</title>
<link rel="stylesheet" href="app.css">

<head>

</head>

<body>
<?php foreach ($posts as $post) : ?>
    <article>
        <?= $post; ?>
    </article>
<?php endforeach; ?>
</body>
