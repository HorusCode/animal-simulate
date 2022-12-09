<?php

namespace App\Http\Controllers;

use App\Http\Resources\AnimalCollection;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function index()
    {
        return $this->sendResponse(new AnimalCollection(Animal::all()));
    }

}
