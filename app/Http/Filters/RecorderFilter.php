<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class RecorderFilter extends AbstractFilter
{
    const CHANNELS = 'channels';
    const PRICES = 'prices';

    protected function getCallbacks(): array
    {
        return
        [
            self::CHANNELS =>[$this, 'channels'],
            self::PRICES =>[$this, 'prices'],
        ];
    }

    protected function channels(Builder $builder, $value){
        $builder->whereIn('channel_id' ,$value);
    }
    protected function prices(Builder $builder, $value){
        $builder->whereBetween('price',$value);
    }
}
