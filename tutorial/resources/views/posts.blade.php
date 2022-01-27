<!doctype html>
<title>posts</title>
<link rel="stylesheet" href="app.css">

<head>

</head>

<body>
    <?php foreach ($posts as $post) : ?>

    <article>
        <h1>
            <!--    Blade Template Form   -->
            {{$post->title}}
        </h1>
        <div>
            <!--    Normalform   -->
            <?= $post->excerpt; ?>
        </div>
        <div>
            <!--    Langform   -->
            <?php echo $post->body; ?>
        </div>
    </article>

    <?php endforeach; ?>
</body>
