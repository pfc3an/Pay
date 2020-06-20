<?php

namespace App\Http\Controllers;

use App\Services\ServiceInit;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        ServiceInit::clientDao();
    }
}
