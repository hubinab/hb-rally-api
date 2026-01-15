<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRaceRequest;
use App\Http\Requests\UpdateRaceRequest;
use App\Http\Resources\RaceResource;
use App\Models\Race;
use App\Models\Team;
use Illuminate\Http\Resources\Json\JsonResource;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        $data = Race::with("teams")->get();
        return RaceResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRaceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Race $race): JsonResource
    {
        $race->load("teams");
        return new RaceResource($race);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRaceRequest $request, Race $race)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Race $race)
    {
        //
    }
}
