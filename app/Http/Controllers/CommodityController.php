<?php

namespace App\Http\Controllers;

use App\Models\Commodity;
use Illuminate\Http\Request;

class CommodityController extends Controller
{
    public function index()
    {
        $data['title'] = 'Komoditas';
        $data['collection'] = Commodity::latest()->get();
        return view('commodity.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Komoditas';
        return view('commodity.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'code' => 'max:191',
        ]);

        $data['name'] = $request->name;
        $data['code'] = $request->code;

        Commodity::create($data);

        return redirect()->route('komoditas.index')
            ->with('success', 'Data Komoditas berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['title'] = "Komoditas";
        $data['item'] = Commodity::findOrFail($id);
        return view('commodity.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = "Komoditas";
        $data['item'] = Commodity::findOrFail($id);

        return view('commodity.edit', $data);
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
        $item = Commodity::findOrFail($id);
     
        $this->validate($request, [
            'name' => 'required|max:191',
            'code' => 'required|max:191',
        ]);

        $data['name'] = $request->name;
        $data['code'] = $request->code;

        $item->update($data);

        return redirect()->route('komoditas.index')
            ->with('success', 'Data Komoditas berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Commodity::findOrFail($id);
        if ($item) {
            $item->delete();
        }
        return redirect()->route('komoditas.index')->with('success', 'Data Komoditas berhasil dihapus.');;
    }
}
