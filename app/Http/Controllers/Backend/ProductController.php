<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Album;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Mockery\Exception;

class ProductController extends Controller
{
    public function list()
    {
        $products = Product::all();
        foreach ($products as $product) {
            $product->supplier->name = Str::limit($product->supplier->name, 10);
        }
        return view('backend/product/list', compact('products'));
    }

    public function edit(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $suppliers = Supplier::all()->where('is_active', '=', ACTIVE);
//        dd($product);
        return view('backend/product/edit', compact('product', 'suppliers'));
    }

    public function create()
    {
        $suppliers = Supplier::all()->where('is_active', '=', ACTIVE);
        return view('backend/product/create', compact('suppliers'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return dd($product);
    }

    public function update(ProductUpdateRequest $request)
    {
        $product = Product::where('id', '=', $request->id);
        if ($request->hasFile('feature_image')) {
            $feature_image = $request->file('feature_image');
            $feature_image->move('upload/images/products/' . $product->id . '/', $feature_image->getClientOriginalName());
        }
        $data = [
            'name' => $request->name,
            'slug' => $request->slug ?? Str::slug($request->name) . '-' . uniqid(),
            'sku' => $request->sku ?? strtoupper(uniqid()),
            'price' => $request->price,
            'sale_price' => $request->sale_price ?? $request->price,
            'supplier_id' => $request->supplier_id,
            'is_active' => $request->is_active ?? 1,
        ];

        $product->save($data);

        if ($request->hasFile('albums')) {
            $arrAlbum = Album::all()->where('product_id', '=', $product->id);
            $albums = $request->file('albums');
            foreach ($albums as $key => $album) {
                $arrAlbum[$key]->image = $album->getClientOriginalName();
                $album->move('upload/images/product/' . $product->id . '/album/' . $album->getClientOriginalName() . Str::random(5));
            }
        }
    }

    public function store(ProductRequest $request)
    {
//        dd($request);
        $product = new Product;

        $name_feature_image = 'https://via.placeholder.com/300x300?text=Product';

        if ($request->hasFile('feature_image')) {
            $feature_image = $request->file('feature_image');
            $name_feature_image = $feature_image->getClientOriginalName();
        }
        $product->name = $request->name;
        $product->sku = $request->sku ?? strtoupper(uniqid());
        $product->slug = $request->slug ?? Str::slug($request->name . uniqid());
        $product->price = $request->price;
        $product->sale_price = $request->sale_price ?? $request->price;
        $product->supplier_id = $request->supplier_id;
        $product->stocks = $request->stocks;
        $product->intro = $request->intro;
        $product->desc = $request->desc;
        $product->is_active = $request->is_active ? $request->has('is_active') : 0;
        $product->feature_image = $name_feature_image;
        $product->save();
        $product_id = $product->id;
//        $product_id = DB::table('products')->insertGetId((array)$product);
//        dd($request);
        if($request->hasfile('albums'))
        {
            dd('album');
            foreach($request->file('albums') as $key => $file)
            {
                $name = $file->getClientOriginalName();
                $file->move('upload/images/product/', $name);
                Album::create([
                    'product_id' => $product_id,
                    'image' => $name,
                    'sort' => $key
                ]);
            }
        }
    }
}
