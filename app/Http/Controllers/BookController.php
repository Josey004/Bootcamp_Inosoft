<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index() {
        $bookModel = new Book();

        $books = $bookModel->get();
        // $books = Book::get(); CARA 2

        foreach ($books as $book) {
            echo "Nama Buku : " . $book->nama_buku . '<br>';
            echo "Deskripsi : " . $book->deskripsi . '<br>';
            echo "Harga : " . $book->harga . '<br>';
            echo "------------------------------------<br>";
        }
    }
}
