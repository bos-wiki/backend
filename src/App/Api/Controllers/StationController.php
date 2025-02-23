<?php

namespace App\Api\Controllers;

use App\Controller;
use Domain\Stations\Actions\ListStations;
use Domain\Stations\Actions\ShowStation;
use Domain\Stations\Models\Station;
use Domain\Stations\Resources\StationResource;
use Domain\Vehicles\Actions\ListVehicles;
use Domain\Vehicles\Models\Vehicle;
use Domain\Vehicles\Resources\VehicleResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class StationController extends Controller
{
    public function index(Request $request, ListStations $action): AnonymousResourceCollection
    {
        return $action->execute($request);
    }

    public function show(Station $station, ShowStation $action): StationResource
    {
        return $action->execute($station);
    }

    // ADDITIONAL ROUTES
    // TODO may be moved into VehicleController eventually
    public function vehicles(string $stationId, ListVehicles $action): AnonymousResourceCollection
    {
        return $action->execute($stationId);
    }
}
