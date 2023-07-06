<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CarStoreRequest;
use App\Http\Requests\Admin\CarUpdateRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    public function index()
    {
        // Kode logika untuk mengambil dan menampilkan daftar mobil
        $cars = Car::latest()->get();
        
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        // Kode logika untuk menambah data
        return view('admin.cars.create');
    }

    public function show()
    {
        // Kode logika untuk menampilkan detail mobil berdasarkan ID
    }

    public function store(CarStoreRequest $request)
    {
        // Kode logika untuk menyimpan data mobil yang dikirimkan melalui form
        if($request->validated()){
            $gambar = $request->file('gambar')->store('img', 'public');
            $slug = Str::slug($request->nama_mobil, '-');
            Car::create($request->except('gambar') + ['gambar' => $gambar, 'slug' => $slug]);
        }

        return redirect()->route('cars.index')->with([
            'message' => 'datasukses dibuat',
            'alert-type' => 'success'
        ]);
    }

    public function edit(Car $car)
    {
        // Kode logika untuk memperbarui data mobil berdasarkan ID yang dikirimkan melalui form
        return view('admin.cars.edit', compact('car'));
    }

    public function update(CarUpdateRequest $request, Car $car)
    {
        // Kode logika untuk memperbarui data mobil berdasarkan ID yang dikirimkan melalui form
        if ($request->validated()){
            $slug = Str::slug($request->nama_mobil,'_');
            $car->update($request->validated() + ['slug' => $slug]);
        }
        return redirect()->route('cars.index')->with([
            'message' => 'data berhasil diedit',
            'alert-type' => 'info'
        ]);

    }

    public function destroy(Car $car)
    {
        // Kode logika untuk menghapus mobil berdasarkan ID
        if($car->gambar){
            unlink('storage/'. $car->gambar);
        }
        $car->delete();

        return redirect()->back()->with([
            'message' => 'data berhail dihapus',
            'alert-type' => 'danger'
        ]);
    }

    public function updateImage(Request $request,$carId)
    {
        $request->validate([
            'gambar' => 'required|image'
        ]);
        $car = Car::findDrFail($carId);
        if($request->gambar){
            unlink('storsge/'.$car->gambar);
            $gambar = $request->file('gambar')->store('img','public');

            $car->update(['gambar' => $gambar]);
        }

        return redirect()->back()->with([
            'message' => 'gambar berhasil diedit',
            'alert-type' => 'info'
        ]);
    }
}