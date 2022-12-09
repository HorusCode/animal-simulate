<?php

namespace App\Http\Controllers;

use App\Actions\GrowOldConditionAction;
use App\Http\Requests\ConditionRequest;
use App\Http\Resources\ConditionWithAnimalResource;
use App\Models\Animal;
use App\Models\Condition;

class ConditionController extends Controller
{
    private Condition $condition;


    public function __construct(Condition $condition)
    {
        $this->condition = $condition;
    }


    public function show(Condition $condition) {
        return $this->sendResponse($condition);
    }

    public function grow(Condition $condition, GrowOldConditionAction $growOldConditionAction) {
        $grown = $growOldConditionAction($condition);
        return $this->sendResponse($grown ? new ConditionWithAnimalResource($grown) : [], $grown ? 'Animal to grown old!' : 'Animal died!');
    }

    public function store(ConditionRequest $request, Animal $animal) {
        $condition = $animal->conditions()->save(
            $this->condition->fill($request->all())
        );
        return $this->sendResponse(new ConditionWithAnimalResource($condition));
    }
}
