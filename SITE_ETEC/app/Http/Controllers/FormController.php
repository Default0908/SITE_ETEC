<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function processa(Request $request)
    {
        // Exibe os dados enviados via GET
        echo "<h1>Dados recebidos:</h1>";
        echo "<pre>";
        var_dump($_GET);
        echo "</pre>";
    }
}
