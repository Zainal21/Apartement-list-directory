<?php

namespace App\Http\Livewire;

use App\Models\Floor;
use App\Models\Tenant;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;

class TenantList extends Component
{
    public $tenants;

    public $floors;

    public $floor_id;
    

    public function mount()
    {
        $this->get_tenants_item();
    }

    public function render($id = false)
    {
        return view('livewire.tenant-list');
    }

    public function get_tenants_item()
    {
        $id = $this->floor_id;
        $this->floors = Floor::all();   
        if($id){
            $floors = Floor::find($id);
            $this->tenants = $floors->tenant()->with('zone')->get();
        }else{
            $this->tenants = Tenant::with(['zone' => function($q){
                $q->with('floor');
            }])->orderBy('tenant_name', 'desc')->get();
        }
    }  

}
