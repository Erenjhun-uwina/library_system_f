<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Book;
use App\Models\Borrower;
use App\Models\Transaction;
use Database\Factories\AdminFactory;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        if(Admin::all()->count()==0)Admin::factory(1)->create();
        if(Borrower::all()->count()<30)Borrower::factory(15)->create();
        if(Book::all()->count()==0)Book::factory(50)->create();
        if(Transaction::all()->count()==0)Transaction::factory(100)->create();
   
    }
}
