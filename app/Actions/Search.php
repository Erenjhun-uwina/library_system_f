<?php

namespace App\Actions;

use App\Models\Book;

class Search
{
    public function handle(string $title, $category = null)
    {

        $where = [
            ['title', 'like', "%$title%"],
        ];

        if ($category) array_push($where, ['category', 'like', $category]);

        return Book::where($where);
    }
}
