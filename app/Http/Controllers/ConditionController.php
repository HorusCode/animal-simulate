<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConditionRequest;
use App\Http\Resources\ConditionWithAnimalResource;
use App\Models\Animal;
use App\Models\Condition;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    private Condition $condition;


    public function __construct(Condition $condition)
    {
        $this->condition = $condition;
    }


    public function show(Condition $condition) {
        return $this->sendResoponse($condition);
    }

    public function store(ConditionRequest $request, Animal $animal) {

        $condition = $animal->conditions()->save(
            $this->condition->fill($request->all()
            )
        );
        return $this->sendResoponse(new ConditionWithAnimalResource($condition));
    }
}
