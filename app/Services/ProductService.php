<?php

namespace App\Services;

use App\Models\Product;
use App\Models\User;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Storage;

class ProductService
{

    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getAllProducts()
    {
        return $this->product::latest()->with('stockProduct')->paginate(8);
    }

    public function getProducts()
    {
        return $this->product->latest()->get();
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
        return $this->product::where('id', $productId)->with('stockProduct')->first();
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

    public function deleteById($id)
    {
        $product = $this->product->with('stockProduct')->find($id);
        if ($product) {
            // Delete related stock products first
            $product->stockProduct()->delete();
            // Then delete the product
            $product->delete();
        }

    }

    public function editProduct($request)
    {
        $product = $this->findById($request->id);

        if (!$product) {
            return false;
        }

        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|int',
            'image' => 'image|file|max:2024',
            'image_2' => 'image|file|max:2024',
            'image_3' => 'image|file|max:2024',
            'category_id' => 'required|int'
            // Add other fields as needed, e.g. price, etc.
        ]);


        if($request->file('image_1')){
            if ($request->oldImage_1){
                Storage::delete($request->oldImage_1);
            }
            $validateData['image'] = $request->file('image_1')->store('product-images', 'public');
        }
        if($request->file('image_2')){
            if ($request->oldImage_2){
                Storage::delete($request->oldImage_2);
            }
            $validateData['image_2'] = $request->file('image_2')->store('product-images', 'public');
        }
        if($request->file('image_3')){
            if ($request->oldImage_3){
                Storage::delete($request->oldImage_3);
            }
            $validateData['image_3'] = $request->file('image_3')->store('product-images', 'public');
        }

        // Update product main data
        $product->update($validateData);

        // Update sizes & stocks
        if ($request->has('stock_ids')) {
            $stockIds = $request->input('stock_ids');
            $sizes = $request->input('sizes');
            $stocks = $request->input('stocks');

            foreach ($stockIds as $i => $stockId) {
                $stockProduct = $product->stockProduct()->find($stockId);
                if ($stockProduct) {
                    $stockProduct->update([
                        'size' => $sizes[$i],
                        'stock' => $stocks[$i],
                    ]);
                }
            }
        }


        return true;
    }

    public function createProduct($request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|int',
            'image_1' => 'image|file|max:2024',
            'image_2' => 'image|file|max:2024',
            'image_3' => 'image|file|max:2024',
            'category_id' => 'required|int',
            'sizes' => 'required|array',
            'stocks' => 'required|array',
        ]);

        // Handle images
        if ($request->file('image_1')) {
            $validateData['image'] = $request->file('image_1')->store('product-images', 'public');
        }
        if ($request->file('image_2')) {
            $validateData['image_2'] = $request->file('image_2')->store('product-images', 'public');
        }else{
            $validateData['image_2'] = 'assets/img/blank-image.jpg';
        }
        if ($request->file('image_3')) {
            $validateData['image_3'] = $request->file('image_3')->store('product-images', 'public');
        }else{
            $validateData['image_3'] = 'assets/img/blank-image.jpg';
        }

        // Create product
        $product = $this->product->create($validateData);

        // Create sizes & stocks
        $sizes = $request->input('sizes');
        $stocks = $request->input('stocks');
        foreach ($sizes as $i => $size) {
            $product->stockProduct()->create([
                'size' => $size,
                'stock' => $stocks[$i] ?? 0,
            ]);
        }

        return $product;
    }

}
