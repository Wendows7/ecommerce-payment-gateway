<?php

namespace App\Services;

use App\Models\Product;
use App\Models\User;
use App\Models\ProductCategory;

class ProductService
{

    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getAllProducts()
    {
        return $this->product::latest()->paginate(8);
    }

    public function shortBy($shortBy)
    {
        return $this->product::orderBy($shortBy, 'asc')->paginate(8);
    }

    public function getTotalProduct()
    {
        return $this->product->count();
    }

    public function findById($productId)
    {
        return $this->product::where('id', $productId)->first();
    }

    public function storeProduct($request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $this->product->create($validateData);

    }

    public function searchProduct($slug)
    {
        return $this->product::where('name', 'like', '%' . $slug . '%')
            ->orWhere('description', 'like', '%' . $slug . '%')
            ->orWhereHas('category', function ($query) use ($slug) {
                $query->where('name', 'like', '%' . $slug . '%');
            })->paginate(8);
    }

    public function getTotalProductByCategory()
    {
        $category = ProductCategory::all();
        $data = [];
        foreach ($category as $item) {
            $query = $this->product->where("category_id", $item->id)->get();
            $data[] = ['name' => $item->name, 'total' => $query->count()];
        }
        return $data;
    }

    public function updateStockById($id, $stock)
    {
        $this->product->where('id', $id)->update(['stock' => $stock]);
    }
}
