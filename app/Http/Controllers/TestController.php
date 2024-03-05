<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index() {
        /**
         * Instruksi:
         * Buatlah satu method yang dapat menerima input sebuah string.
         * Method tersebut harus bisa dipanggil dari method index()
         * Method tersebut dapat menghitung jumlah huruf dari string yang diinputkan.
         * 
         * @example string
         * input: "hari ini hujan lebat"
         * 
         * @return json
         * output:
         * {
         *      "h": 2, 
         *      "a": 3, 
         *      "r": 1, 
         *      "i": 3, 
         *      "n": 2, 
         *      "u": 1, 
         *      "j": 1, 
         *      "l": 1, 
         *      "e": 1, 
         *      "b": 1, 
         *      "t": 1 
         * }
         */
    }
}
