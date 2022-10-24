<div class="container mt-4">
    <select name="floor" id="" class="form-control" wire:change="get_tenants_item()" wire:model="floor_id">
        <option value="">Choice Floor</option>
        @foreach ($floors as $item)
            <option value="{{ $item->id }}">{{ $item->floor_name }}</option>
        @endforeach
    </select>
    <div class="row">
        @foreach ($tenants as $item)
            <div class="col-md-4 p-2">
                <div class="card shadow rounded-md px-3">
                    <img src="{{ asset('assets/866-400x300.jpg') }}" class="img-thumbnail mt-4"
                        alt="{{ $item->tenant_name }}">
                    <div class="card-body">
                        <h5 class="card-title">Tenant Name : {{ $item->tenant_name }}</h5>
                        <p class="card-text">Description : {{ $item->tenant_description }}</p>
                        <p class="card-text text-bold">Lot Number <strong>{{ $item->tenant_lot_number }}</strong>
                        </p>
                        <a class="btn btn-primary">
                            Zone Name/Floor Name : <strong>{{ $item->zone->zone_name }} /
                                {{ $item->zone->floor->floor_name }}</strong></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
