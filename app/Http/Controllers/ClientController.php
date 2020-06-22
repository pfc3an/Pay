<?php

namespace App\Http\Controllers;

use App\Services\DaoInit;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        DaoInit::clientDao();
    }
}
