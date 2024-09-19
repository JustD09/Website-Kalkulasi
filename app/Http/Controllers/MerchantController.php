<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchant;

class MerchantController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        $merchant = Merchant::orderBy('id')->get();
  
        return view('merchant.index', compact('merchant'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('merchant.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Ambil semua data dari request
        $data = $request->all();
        
        // Hitung promo berdasarkan weight_order
        $weightOrder = $data['weight_order'];
        $data['promo'] = $this->calculatePromo($weightOrder);
        
        // Simpan data ke dalam database
        Merchant::create($data);

        return redirect()->route('merchant')->with('success', 'Data berhasil ditambahkan!');
    }

  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $merchant = Merchant::findOrFail($id);
  
        return view('merchant.show', compact('merchant'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $merchant = Merchant::findOrFail($id);
  
        return view('merchant.edit', compact('merchant'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Temukan merchant berdasarkan ID
        $merchant = Merchant::findOrFail($id);
        
        // Ambil semua data dari request
        $data = $request->all();
        
        // Hitung promo berdasarkan weight_order
        $weightOrder = $data['weight_order'];
        $data['promo'] = $this->calculatePromo($weightOrder);
        
        // Perbarui data merchant
        $merchant->update($data);

        return redirect()->route('merchant')->with('warning', 'Data berhasil diupdate!');
    }

  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $merchant = Merchant::findOrFail($id);
  
        $merchant->delete();
  
        return redirect()->route('merchant')->with('danger', 'Data berhasil dihapus!');
    }

    private function calculatePromo($weightOrder)
    {
        if ($weightOrder >= 0.01 && $weightOrder <= 0.20) {
            return 10;
        } elseif ($weightOrder >= 0.21 && $weightOrder <= 0.45) {
            return 20;
        } elseif ($weightOrder >= 0.46 && $weightOrder <= 0.60) {
            return 30;
        } elseif ($weightOrder >= 0.61 && $weightOrder <= 1.00) {
            return 40;
        } else {
            return 0; // Nilai default jika tidak ada rentang yang sesuai
        }
    }
}
