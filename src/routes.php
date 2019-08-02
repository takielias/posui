<?php
Route::get('posui', [
    'as' => 'posui',
    'uses' => 'Takielias\Posui\PosuiController@getView'
]);
Route::get('posui-item-search', [
    'as' => 'posui.item.search',
    'uses' => 'Takielias\Posui\PosuiController@searchItem'
]);
Route::get('posui-get-single-item', [
    'as' => 'posui.get.single.item',
    'uses' => 'Takielias\Posui\PosuiController@getSingleItem'
]);