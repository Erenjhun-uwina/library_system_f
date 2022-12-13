<?php

namespace App\Actions;
use App\Models\Book;

class Search{
    public function handle(string $title,$category = '')
    {
        return Book::where([
            ['title','like',"%$title%"],
            ['category','like','category']
        ])->get();
    }
}

