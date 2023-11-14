<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class IpCameraFilter extends AbstractFilter
{
    const MEGAPIXELS = 'megapixels';
    const PRICES = 'prices';

    protected function getCallbacks(): array
    {
        return
        [
            self::MEGAPIXELS =>[$this, 'megapixels'],
            self::PRICES =>[$this, 'prices'],
        ];
    }

    protected function megapixels(Builder $builder, $value){
        $builder->whereIn('megapixel_id' ,$value);
    }
    protected function prices(Builder $builder, $value){
        $builder->whereBetween('price',$value);
    }
}
