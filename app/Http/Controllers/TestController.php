<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class TestController extends Controller
{
    function product() {
        /**
         * Lengkapi baris kode program yang ditandai dengan tulisan 'add some codes here ...'
         * 
         * Penjelasan:
         * Product memiliki banyak category
         * category bisa dimiliki banyak product
         * 
         * Run Command:
         * cp .env.example .env (setup database config)
         * php artisan key:generate
         * php artisan migrate:fresh --seed
         * 
         * Misi 1: table pada file resources/views/product.blade.php harus bisa menampilkan category setiap product
         * Misi 2 (Poin Plus): buat form update product yang dapat mengubah data product sekaligus data category product tersebut.
         */

        $data['page_title'] = 'List of Product';
        $data['products'] = Product::latest('id')->get();

        return view('product', $data);
    }

    function product_edit() {
        /**
         * 
         * add some codes here ....
         */

        return view('product-edit');
    }
}
