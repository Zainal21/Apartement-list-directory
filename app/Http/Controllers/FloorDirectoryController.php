<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use App\Models\Tenant;
use App\Helpers\Helper;
use Illuminate\Http\Request;

class FloorDirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenants = Tenant::with(['zone' => function($q){
            $q->with('floor');
        }])->orderBy('tenant_name', 'desc')->paginate(10);

        return Helper::success($tenants, 'tenants retrieve successfully');
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($floor_id)
    {
        $floor = Floor::find($floor_id);
        if($floor){
            $tenants = $floor->tenant()->with('zone')->paginate(10);
            $response = Helper::success([compact('floor', 'tenants')], 'floor detail retrieve successfully');
        }else{
            $response = Helper::error(null, "floor detail doesnt exist");
        }
        return $response;
    }
}
