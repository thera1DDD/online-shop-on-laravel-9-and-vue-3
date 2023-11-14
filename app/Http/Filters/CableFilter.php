<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class CableFilter extends AbstractFilter
{

    const PRICES = 'prices';

    protected function getCallbacks(): array
    {
        return
        [
            self::PRICES =>[$this, 'prices'],
        ];
    }

    protected function prices(Builder $builder, $value){
        $builder->whereBetween('price',$value);
    }
}
