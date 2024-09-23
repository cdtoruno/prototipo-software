<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClothingProduct;
use App\Models\ElectronicProduct;
use App\Models\Product; // IMPORTANTE: Asegúrate de que este modelo exista

class ProductController extends Controller
{
    // Método API (ya existente)
    public function storeClothingProduct(Request $request)
    {
        $product = ClothingProduct::create($request->all());

        // Para API
        if ($request->isJson()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Producto de ropa creado exitosamente',
                'product' => $product
            ], 201);
        }

        // Para web
        return redirect()->back()->with('success', 'Producto de ropa creado exitosamente.');
    }

    // Método API (ya existente)
    public function storeElectronicProduct(Request $request)
    {
        $product = ElectronicProduct::create($request->all());

        // Para API
        if ($request->isJson()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Producto electrónico creado exitosamente',
                'product' => $product
            ], 201);
        }

        // Para web
        return redirect()->back()->with('success', 'Producto electrónico creado exitosamente.');
    }

    // NUEVO: Mostrar formulario para crear producto de ropa
    public function createClothingProductForm()
    {
        return view('products.create_clothing');
    }

    // NUEVO: Mostrar formulario para crear producto electrónico
    public function createElectronicProductForm()
    {
        return view('products.create_electronic');
    }

    // Método API (ya existente)
    public function cloneClothingProduct($id)
    {
        $product = ClothingProduct::findOrFail($id);
        $clonedProduct = $product->cloneProduct();

        // Para API
        if (request()->isJson()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Producto de ropa clonado exitosamente',
                'product' => $clonedProduct
            ], 201);
        }

        // Para web
        return redirect()->back()->with('success', 'Producto de ropa clonado exitosamente.');
    }

    // Método API (ya existente)
    public function cloneElectronicProduct($id)
    {
        $product = ElectronicProduct::findOrFail($id);
        $clonedProduct = $product->cloneProduct();

        // Para API
        if (request()->isJson()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Producto electrónico clonado exitosamente',
                'product' => $clonedProduct
            ], 201);
        }

        // Para web
        return redirect()->back()->with('success', 'Producto electrónico clonado exitosamente.');
    }

    // NUEVO: Mostrar formulario para crear producto original
    public function createOriginalProductForm()
    {
        return view('products.create_original');
    }

    // NUEVO: Crear un producto original
    public function storeOriginalProduct(Request $request)
    {
        // Asegúrate de que este modelo esté correctamente importado y creado
        $product = Product::create($request->all());

        // Para API
        if ($request->isJson()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Producto original creado exitosamente',
                'product' => $product
            ], 201);
        }

        // Para web
        return redirect()->back()->with('success', 'Producto original creado exitosamente.');
    }
}
