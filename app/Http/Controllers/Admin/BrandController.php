<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;


class BrandController extends Controller
{

    public function index()
    {
        $brands = Brand::all();
        return view('Admin.Brand.index', compact('brands'));
    }

    public function create()
    {
        return view('Admin.Brand.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:brands,name',
            'description' => 'required',
            'logo' => 'nullable',
        ]);

        if ($request->hasFile('logo')) {
            $validatedData['logo'] = $request->file('logo')->store('logos/brands', 'public');
        }

        Brand::create($validatedData);

        return redirect()->route('admin.brand.index')->with('success', 'Brand created successfully.');
    }

    public function show(Brand $Brand)
    {
        return view('Admin.Brand.index', compact('brand'));
    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('Admin.Brand.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:brands,name,' . $brand->id,
            'description' => 'required',
            'logo' => 'nullable',
        ]);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('logos/brands', 'public');
        }

        $brand->update($validated);

        return redirect()->route('admin.brand.index')->with('success', 'Brand updated successfully.');
    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return redirect()->route('admin.brand.index')->with('success', 'Brand deleted successfully.');
    }
}
