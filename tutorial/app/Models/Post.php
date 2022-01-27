<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

// Feur das Auslesen aller Dateien
use Illuminate\Support\Facades\File;

class Post
{
    public $title;  // Post Title =>
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug){
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }


    /*long
    public static function all(){
        $files = File::files(resource_path("posts/"));
        array_map(function ($file){
            return $file->getContents();
        }, $files);
    }*/

    // short
    public static function all(){
        $files = File::files(resource_path("posts/"));
        return array_map(fn($file) => $file->getContents(), $files);
    }

    public static function find($slug){
        // Pfad zum Projektverzeichnis
        base_path();
        if (!file_exists($path = resource_path("posts/{$slug}.html"))){
            // Wen nicht gefunden
            throw new ModelNotFoundException();
        }
        return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contens($path));
    }
}
