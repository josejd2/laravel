<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Obtener todos los productos
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Crear un nuevo producto
    public function create()
    {
        return view('products.create');
    }

    // Validar y almacenar un nuevo producto
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);

        // Crear el producto en la base de datos
        Product::create($request->all());
        return redirect()->route('products.index')
        ->with('success', 'Producto Creado.');
    }

    // Mostrar un producto específico
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Editar un producto existente
    public function edit(Product $product)
    {
        return view('products.edit', compact('products'));
    }

    // Actualizar un producto existente
    public function update(Request $request, Product $product)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);

        // Actualizar el producto en la base de datos
        $product->update($request->all());
        return redirect()->route('products.index')
        ->with('success', 'Producto Actualizado.');
    }

    // Eliminar un producto existente
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
        ->with('success', 'Producto Eliminado.');
    }
}
