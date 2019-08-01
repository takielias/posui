<?php

namespace Takielias\Posui;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Takielias\Posui\Posui;

class PosuiController extends Controller
{
    public function getView()
    {
        return view('Posui::ui');
    }

    public function search(Request $request)
    {
        $result = Posui::where('product_name', 'LIKE', "%{$request->input('q')}%")->get();
        return response()->json($result);
    }
}