<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Management\StoreManagementRequest;
use App\Http\Requests\Management\UpdateManagementRequest;
use App\Models\Management;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(StoreManagementRequest $request)
    {
        // $data = $request->all();
        $data = $request->validated();
        // $data = $request->only(['name', 'description', 'phone']);

        $management = Management::create($data);

        return $this->respondWithData($management);
    }

    // public function store(StoreManagementRequest $request)
    // {
    //     // $data = $request->all();
    //     // $data = $request->only(['name', 'description']);

    //     $management = Management::create([
    //         'name' => $request->name,
    //         'description' => $request->description,
    //         'image' => $request->image
    //     ]);

    //     return $this->respondWithData($management);
    // }

    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'description' => 'required'
    //     ]);

    //     $management = new Management();
    //     $management->name = $request->name;
    //     $management->description = $request->description;
    //     $management->image = $request->image;
    //     $management->save();

    //     return $this->respondWithData($management);
    // }

    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'description' => 'required'
    //     ]);
    //     $data = $request->only(['name', 'description']);

    //     // $input = $request->only('username', 'password');

    //        // $input = $request->except(['credit_card']);

    //     // $input = $request->except('credit_card');

    //     $management = new Management();
    //     $management->name = $data['name'];
    //     $management->description = $data['description'];
    //     $management->image = $data['image'];
    //     $management->save();

    //     return $this->respondWithData($management);
    // }

    // public function store()
    // {
    //     $this->validate(request(), [
    //         'name' => 'required',
    //         'description' => 'required'
    //     ]);
    //     $data = request()->all();

    //     // $data = request()->only('name', 'description');
    //     // $data = request()->only(['name', 'description']);
    //     // $data = request()->except('image');

    //     $management = new Management();
    //     $management->name = $data['name'];
    //     $management->description = $data['description'];
    //     $management->image = $data['image'];
    //     $management->save();

    //     return $this->respondWithData($management);
    // }



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
    public function update($id, Request $request)
    {
        // $data = $request->validated();

        // $data = request()->all();

        // $management = Management::find($id);
        // $management->name = $request->1;
        // $management->description = $request->description;

        // $management->save();

    dd($request->all());
        // $data = array();
        // $data['name'] = $request->name;
        // $data['description'] = $request->description;

        // $management = Management::find($id)->update($data);

        // return $this->respondWithData($management);
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

    protected function respondWithData($data)
    {
        return response()->json([
            'data' => [
                'status' => true,
                'message' => 'created a new management',
                'data' => $data
            ]
        ]);
    }
}
