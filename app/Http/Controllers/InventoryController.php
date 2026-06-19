<?php

namespace App\Http\Controllers;

use App\Http\Requests\InventoryRequest;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        $search = $request->search;

        $inventory = Inventory::where('user_id', $user->id)
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama_barang', 'like', '%' . $search . '%')
                      ->orWhere('kategori', 'like', '%' . $search . '%');
                });
            })
            ->get();

        return view('inventory.inventory', [
            'title' => 'Inventory',
            'inventory' => $inventory
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventory.create-inventory', [
            'title' => 'Inventory | Create Inventory'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InventoryRequest $request)
    {
        Inventory::create([
            'id' => $request->id,
            'user_id' => Auth::user()->id,
            'nama_barang' => $request->nama_barang,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'kategori' => $request->kategori,
            'jumlah_stok' => $request->jumlah_stok,
            'jumlah_terjual' => $request->jumlah_terjual
        ]);

        return redirect('/inventory');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $Inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $selected = Inventory::findOrFail($id);

        return view('inventory.edit-inventory', [
            'title' => 'Inventory | Edit Inventory',
            'selected' => $selected
        ]);
    }

    /**
     * Update the specified resource.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'id' => 'required',
            'nama_barang' => 'required',
            'harga_beli' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|min:0',
            'kategori' => 'required',
            'jumlah_stok' => 'required|numeric|min:0',
            'jumlah_terjual' => 'required|numeric|min:0',
        ]);

        $inventory = Inventory::findOrFail($id);
        $inventory->update($data);

        return redirect()->route('inventory');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $selected = Inventory::findOrFail($id);
        $selected->delete();

        return back();
    }
}