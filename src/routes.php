<?php
Route::get('posui', [
    'as' => 'posui',
    'uses' => 'Takielias\Posui\PosuiController@getView'
]);
Route::get('posuisearch', [
    'as' => 'posuisearch',
    'uses' => 'Takielias\Posui\PosuiController@search'
]);