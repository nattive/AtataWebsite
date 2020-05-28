<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Product;
use App\seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductController extends Controller
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        return ProductResource::collection($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $product = new Product();
        $product -> productName = $request ->productName;
        $product -> productModel = $request ->productModel;
        $product -> productSKU = $request ->productSKU;
        $product -> productBrand_id = $request ->productBrand_id;
        $product -> productPrice = $request ->productPrice;
        $product -> productSalePrice = $request ->productSalePrice;
        $product -> ProductSpecification = $request ->ProductSpecification;
        $product -> ProductManufacturerInfo = $request ->ProductManufacturerInfo;
        $product -> ProductWarrantyInfo = $request ->ProductWarrantyInfo;
        $product -> ProductUserManual = $request ->ProductUserManual;
        $product -> productDescription = $request ->productDescription;
        $product -> productColour = $request ->productColour;
        $product -> category_id = $request ->category_id;
        $product -> hasSecurePay = $request ->hasSecurePay;
        $product -> isInsured = $request ->isInsured;
        $product -> hasLogistics = $request ->hasLogistics;
        $product -> seller_id = $request ->seller_id;
        $product -> save();
        return response(['message' =>'Product Uploaded succesfully', 'status' => 200, 'product' => $product], 200);
    }

    public function makeImageAndThumbnail($image)
    {
        $imagePath = Image::make(public_path(asset('storage/' . $image)))->fit(1200, 1200);
        $imagePath->save();
        return $imagePath;
    }

    /**
    *Upload image to product
    *@param  \Illuminate\Http\Request  $request
    *
    */

    public function storeImage(Request $request){
        return $request -> all();
    }


    public function initProduct(Request $request){
        $seller = seller::where('id', $request->sellerId)->first();
        return $seller;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->get();
        return ProductResource::collection($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $images = [];
        return $request->all();
        for ($i = 0; $i < count( $request->images);) {
            // 
            $image = $request->images[$i]['path'];  // your base64 encoded
            $image = str_replace('data:image/png;base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $type = explode(';', $image)[0];
            $type = explode('/', $type)[1];
            $imageName = md5(microtime()) . '.' .  $type;
            Storage::disk('public')->put('seller/' . $imageName, $image);
            $imagePath = 'storage/seller/'. $imageName;
            // $newImage = $this->makeImageAndThumbnail(base64_decode($imageName));
           array_push( $images, $imagePath);
            $i++;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       $product = Product::where('id', $request -> id)->first();
       $product->delete();
        return response('Product Has been Deteted');
    }
}
