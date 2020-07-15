<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\ToastrHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Album;
use App\Models\Product;
use App\Models\Supplier;
use App\Scopes\ClientScope;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Mockery\Exception;

class ProductController extends Controller
{
    public function list()
    {
        $products = Product::query()->withoutGlobalScopes()->popular()->paginate(14);

        return view('backend/product/list', compact('products'));
    }

    public function edit(Request $request)
    {
        $product = Product::query()->withoutGlobalScopes()->findOrFail($request->id);
        $suppliers = Supplier::all()->where('is_active', '=', ACTIVE);
        return view('backend/product/edit', compact('product', 'suppliers'));
    }

    public function create()
    {
        $suppliers = Supplier::all()->where('is_active', '=', ACTIVE);
        return view('backend/product/create', compact('suppliers'));
    }

    public function show($id)
    {
        $product = Product::query()->withoutGlobalScopes()->findOrFail($id);;
        return dd($product);
    }

    public function update(ProductUpdateRequest $request)
    {
        $product = Product::query()->withoutGlobalScopes()->findOrFail($request->id);

        if ($request->is_active != null || $request->is_active == 'on') {
            $request->is_active = 1;
        } else {
            $request->is_active = 0;
        }

        $data = [
            'name' => $request->name,
            'slug' => $request->slug ?? Str::slug($request->name) . '-' . uniqid(),
            'sku' => $request->sku ?? strtoupper(uniqid()),
            'price' => $request->price,
            'sale_price' => $request->sale_price ?? $request->price,
            'supplier_id' => $request->supplier_id,
            'is_active' => $request->is_active,
        ];

        if ($request->hasFile('feature_image')) {
            $feature_image = $request->feature_image;
            $feature_image->move('uploads/products/' . $product->slug . '/', $feature_image->getClientOriginalName());
            $name_feature_image = env('APP_URL') . '/uploads/products/' . $product->slug . '/' . $feature_image->getClientOriginalName();
            $data['feature_image'] = $name_feature_image;
        }

        DB::table('products')
            ->where('id', $request->id)
            ->update($data);

        if ($request->hasFile('albums')) {
            $arrAlbum = DB::table('album_image_product')->where('product_id', '=', $product->id);
            $albums = $request->file('albums');
            foreach ($albums as $key => $album) {
                $arrAlbum[$key]->image = env('APP_URL') . '/uploads/products/' . $product->slug . '/' . $album->getClientOriginalName();
                $album->move('uploads/products/' . $product->slug . '/albums/', $album->getClientOriginalName());
            }
            foreach ($arrAlbum as $item) {
                $arrAlbum->update(['image' => $item]);
            }
        }
        session()->flash(ALERT_TOASTR, json_encode([
            'status' => SUCCESS,
            'title' => SUCCESS,
            'content' => 'Cập nhật thành công'
        ]));
        return redirect()->route('admin-product-list');
    }

    public function store(ProductRequest $request)
    {
        $product = new Product;

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

        $name_feature_image = 'https://via.placeholder.com/300x300?text=Product';

        if ($request->hasFile('feature_image')) {
            $feature_image = $request->file('feature_image');
            $feature_image->move('uploads/products/' . $product->slug . '/', $feature_image->getClientOriginalName());
            $name_feature_image = env('APP_URL') . '/uploads/products/' . $product->slug . '/' . $feature_image->getClientOriginalName();
        }
//        dd($name_feature_image);
        $product->feature_image = $name_feature_image;
        $product->save();
        $product_id = $product->id;

        if($request->hasfile('albums'))
        {
            foreach($request->file('albums') as $key => $file)
            {
                $name = $file->getClientOriginalName();
                $file->move('uploads/products/' . $product->slug . '/albums', $name);
                $fileName = env('APP_URL') . '/uploads/products/' . $product->slug . '/albums' . $feature_image->getClientOriginalName();
                Album::create([
                    'product_id' => $product_id,
                    'image' => $fileName,
                    'sort' => $key
                ]);
            }
        }
        session()->flash(ALERT_TOASTR, json_encode([
            'status' => SUCCESS,
            'title' => SUCCESS,
            'content' => 'Thêm sản phẩm thành công'
        ]));
        return redirect()->route('admin-product-list');
    }

    public function delete(Request $request)
    {
        try {
            $product = Product::destroy($request->id);
            ToastrHelper::alert([
                'status' => SUCCESS,
                'title' => SUCCESS,
                'content' => 'Đã xóa sản phẩm'
            ]);
        } catch (\Exception $exception) {
            ToastrHelper::alert([
                'status' => ERROR,
                'title' => ERROR,
                'content' => 'Không thể xóa sản phẩm'
            ]);
        }
        return redirect()->route('admin-product-list');
    }
}
