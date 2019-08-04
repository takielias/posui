<?php

namespace Takielias\Posui;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class Posui
{
    public static function of()
    {
        return self::getPosUiView();
    }

    public static function getPosUiView()
    {
        return view('Posui::ui');
    }

    public static function searchItem(Builder $eloquentBuilder, array $attributes = [], Request $request)
    {
        $eloquentBuilder->select($attributes['item_id'] . ' as id', $attributes['item_name'] . ' as item_name', $attributes['item_code'] . ' as item_code', $attributes['item_price'] . ' as item_price', $attributes['item_image'] . ' as item_image', $attributes['item_description'] . ' as item_description', $attributes['item_quantity'] . ' as item_quantity');
        if (is_numeric($request->input('q'))) {
            $eloquentBuilder->where($attributes['item_code'], 'LIKE', "%{$request->input('q')}%");
        } else {
            $eloquentBuilder->where($attributes['item_name'], 'LIKE', "%{$request->input('q')}%");
        }
        return $eloquentBuilder->get();
    }

    public static function getSingleItem(Builder $eloquentBuilder, Request $request)
    {
        $item = $eloquentBuilder->find($request->id);
        return view('Posui::item', compact('item'));
    }
}