<?php

// Importierte Klasse von Models
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Overriden
Route::get('/', function () {
    $document = YamlFrontMatter::parseFile(
        resource_path('posts/a-post-name.html')
    );
ddd($document->body());
ddd($document->matter());
//    return view('welcome');
});


Route::get('/test', function (){
    return view('test');
});

/* Mehrere Dokumente Automatisch Zuweisen
 * Verteilt Ordner Posts durch die Klasse Post(app/Models)
 * an den jeweiligen view
 *
 */

// Find and Files
Route::get('/posts', function (){
    //ddd($posts); // Debug die Array von Dateien
    // $posts[0]->getPathname();
    return view('posts', [
        'posts' => Post::all()
    ]);
});

// Find by name and pass to view called "post"
Route::get('post/{post}', function ($slug){
    // Here we have a Post class
    $post = Post::find($slug);

    return view('post', [
        'post' => Post::find($slug)
    ]);
});

