<?php

namespace App\Http\Controllers;

use App\Models\Commodity;
use App\Models\ExchangeRate;
use Illuminate\Http\Request;

class ExchangeRateController extends Controller
{
    public function index()
    {
        $data['title'] = 'Nilai Tukar';
        $data['collection'] = ExchangeRate::orderBy('date', 'desc')->get();
        return view('exchangerate.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Nilai Tukar';
        $data['comodities'] = Commodity::all();
        return view('exchangerate.create', $data);
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
            'date' => 'required',
            'code' => 'required',
            'selling_price' => 'required',
            'purchase_price' => 'required',
        ]);

        $data['date'] = $request->date;
        $data['code'] = $request->code;
        $data['selling_price'] = $request->selling_price;
        $data['purchase_price'] = $request->purchase_price;

        ExchangeRate::create($data);

        return redirect()->route('nilai_tukar.index')
            ->with('success', 'Data Nilai Tukar berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['title'] = "Nilai Tukar";
        $data['item'] = ExchangeRate::findOrFail($id);
        return view('exchangerate.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = "Nilai Tukar";
        $data['comodities'] = Commodity::all();
        $data['item'] = ExchangeRate::findOrFail($id);

        return view('exchangerate.edit', $data);
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
        $item = ExchangeRate::findOrFail($id);
     
        $this->validate($request, [
          'date' => 'required',
          'code' => 'required',
          'selling_price' => 'required',
          'purchase_price' => 'required',
      ]);

      $data['date'] = $request->date;
      $data['code'] = $request->code;
      $data['selling_price'] = $request->selling_price;
      $data['purchase_price'] = $request->purchase_price;

        $item->update($data);

        return redirect()->route('nilai_tukar.index')
            ->with('success', 'Data Nilai Tukar berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ExchangeRate::findOrFail($id);
        if ($item) {
            $item->delete();
        }
        return redirect()->route('nilai_tukar.index')->with('success', 'Data Nilai Tukar berhasil dihapus.');;
    }
}
