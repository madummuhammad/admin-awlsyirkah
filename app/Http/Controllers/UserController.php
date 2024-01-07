<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use App\Models\TableData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $data['title'] = 'User';
        $data['collection'] = TableData::latest()->get();
        return view('user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'User';
        return view('user.create', $data);
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
            'title' => 'required|max:191',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        // if ($request->hasFile('image')) {
        //     $imageName = time() . '-' . $request->image->getClientOriginalName();
        //     $request->image->move(public_path('/img/news'), $imageName);
        //     $data['image'] = '/img/news/' . $imageName;
        // } else {
        //     $data['image'] = null;
        // }

        $data['title'] = $request->title;

        TableData::create($data);

        return redirect()->route('user.index')
            ->with('success', 'Data User berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['title'] = "User";
        $data['item'] = TableData::findOrFail($id);
        $data['storage']= env('STORAGE_URL');
        return view('user.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = "User";
        $data['item'] = TableData::findOrFail($id);

        return view('user.edit', $data);
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
        $item = TableData::findOrFail($id);
        // $validateImage = 'image|mimes:jpeg,png,jpg,gif,svg|max:4096';
        $this->validate($request, [
            'title' => 'required|max:191',
            // 'image' => $validateImage,
        ]);

        // if($request->hasFile('image')){
        //     $imageName = '/img/news/'.time() . '-' . $request->image->getClientOriginalName();
        //     $request->image->move(public_path('/img/news'), $imageName);
        //     if(isset($request->old_image)){
        //         File::delete($request->old_image);
        //     }
        // } else {
        //     $imageName = $request->old_image;
        // }


        $data['title'] = $request->title;

        $item->update($data);

        return redirect()->route('user.index')
            ->with('success', 'Data User berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TableData::findOrFail($id);
        if ($item) {
            if(isset($item->image)){
                File::delete($item->image);
            }
            $item->delete();
        }
        return redirect()->route('user.index');
    }

}
