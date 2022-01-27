<!doctype html>
<title>posts</title>
<link rel="stylesheet" href="app.css">

<head>

    <title>Some Title wich will not displayed</title></head>

<body>


@foreach ($posts as $post)
    <!-- Loop variable named by clean php file -->
    <article class="{{$loop->even ? 'foobar' : ''}}">
        <h1>
            <!--    Blade Template Form   -->
            {{$post->title}}
        </h1>
        <div>
            <!--    Normalform   -->
            <?= $post->excerpt; ?>
        </div>
        <div>
            <!--    Sonderform bei einzelen Artikeln  -->
            {!! $post->body !!}
        </div>
        <div>
            <!--    Langform   -->
            <?php echo "Datum:" . $post->date; ?>
        </div>
    </article>

@endforeach

@foreach($posts as $post)
    <p>it1</p>
    @foreach($posts as $post)
        <p>it2</p>
        <!-- Program stops here !!!
            @dd($loop)
    @endforeach
@endforeach
    </body>
