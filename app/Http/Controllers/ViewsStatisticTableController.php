<?php

namespace App\Http\Controllers;

use App\Models\Views;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewsStatisticTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Views $views, Request $request)
    {
        $viewsAmount = $views::where('product_id', $request->prodId)->select(DB::raw('SUM(views) as sum'), 'hour', 'date')->groupByRaw('hour')->groupByRaw('date')->get('sum')->toArray();
        $data = [];
        foreach ($viewsAmount as $item) {
            if(!isset($data[$item['date']])) {
                $data[$item['date']] = array_fill(1, 24, 0);
            }
            $data[$item['date']][$item['hour']] = $item['sum'];
        }
        return view('UsersProductStatisticList.productStatisticLayout', [
            "views" => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
