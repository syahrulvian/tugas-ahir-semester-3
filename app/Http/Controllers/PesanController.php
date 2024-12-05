<?php

namespace App\Http\Controllers;
use App\Models\postpesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postpesans = postpesan::all();
        return view('PESAN.index', ['postpesan' => $postpesans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("PESAN.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'No_barang' => 'required|string',
            'alamat' => 'required|string',
            'email' => 'required|email',
            'No_HP' => 'required|string',
            'Request' => 'nullable|string',
        ]);
        $input = $request->all();
        $posts = postpesan::create($input);
        return back()->with('success',' Post baru berhasil dibuat.');
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
        $postpesan = Postpesan::findOrFail($id);
return view('pesan.edit', [
'postpesan' => $postpesan
]);

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
        $request->validate([
           'name' => 'required|string',
            'No_barang' => 'required|string',
            'alamat' => 'required|string',
            'email' => 'required|email',
            'No_HP' => 'required|string',
            'Request' => 'nullable|string',
            ]);
            $postpesan = Postpesan::findOrFail($id); 
            $postpesan->name = $request->name;
            $postpesan->No_barang = $request->No_barang;
            $postpesan->alamat = $request->alamat;
            $postpesan->email = $request->email;
            $postpesan->No_HP = $request->No_HP;
            $postpesan->Request = $request->Request;
            $postpesan->save();
        
            return to_route('postpesan.index')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postpesan = postpesan::findOrFail($id);
        $postpesan->delete();
    
        return redirect()->route('postpesan.index')->with('success', 'Pesanan berhasil dihapus!');
    }
}
