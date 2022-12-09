<?php

namespace App\Actions;

use App\Models\Condition;

class GrowOldConditionAction
{
    public function __invoke(Condition $condition): Condition|bool
    {
        $animal = $condition->animal;

        if($condition->age < $animal->max_age && $condition->size < $animal->max_size) {
            $condition->increment('age', $animal->max_size / $animal->growth_factor / 5);
            $condition->increment('size', $animal->max_age / $animal->growth_factor / 5);
            $condition->save();
            return $condition->fresh();
        }
        $condition->delete();
        return false;
    }
}
