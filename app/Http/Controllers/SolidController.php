<?php

namespace App\Http\Controllers;

use App\Workshop\SOLID\OrderProcessor;

class SolidController extends Controller {
    public function index(OrderProcessor $processor) {

        return view('solid.index');
    }
}
