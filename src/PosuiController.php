<?php

namespace Takielias\Posui;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PosuiController extends Controller
{

    private $posuiconfig;

    public function __construct()
    {
        $this->posuiconfig = \Config::get('posuiconfig');
    }

    public function getView()
    {
        return view('Posui::ui');
    }

    public function searchItem(Request $request)
    {
        $result = DB::table($this->posuiconfig['table'])
            ->select($this->posuiconfig['table'] . '.' . $this->posuiconfig['item_id'] . ' as id', $this->posuiconfig['table'] . '.' . $this->posuiconfig['item_name'] . ' as item_name', $this->posuiconfig['table'] . '.' . $this->posuiconfig['item_code'] . ' as item_code', $this->posuiconfig['table'] . '.' . $this->posuiconfig['item_price'] . ' as item_price', $this->posuiconfig['table'] . '.' . $this->posuiconfig['item_image'] . ' as item_image', $this->posuiconfig['table'] . '.' . $this->posuiconfig['item_description'] . ' as item_description', $this->posuiconfig['table'] . '.' . $this->posuiconfig['item_quantity'] . ' as item_quantity');

        if (is_numeric($request->input('q'))) {
            $result->where($this->posuiconfig['table'] . '.' . $this->posuiconfig['item_code'], 'LIKE', "%{$request->input('q')}%");
        } else {
            $result->where($this->posuiconfig['table'] . '.' . $this->posuiconfig['item_name'], 'LIKE', "%{$request->input('q')}%");
        }

        return response()->json($result->get());
    }

    public function getSingleItem(Request $request)
    {
        $item = DB::table($this->posuiconfig['table'])->find($request->id);
        return view('Posui::item', compact('item'));
    }
}