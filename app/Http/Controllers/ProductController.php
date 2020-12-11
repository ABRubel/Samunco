<?php

namespace App\Http\Controllers;

use App\DataTables\Admin\ProductDataTable;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $data  = array();
    public function __construct()
    {
        $this->data['sub_menu'] = 'product';
    }
    public function index(ProductDataTable $dataTable)
    {
        return $dataTable->render('admin.Product.list', $this->data);
    }

    public function create(Request $request)
    {
        $this->data['categories'] = $categories = Category::all('id', 'name');
        return view('Admin.Product.create', $this->data);
    }

    public function store(StoreProductRequest $request)
    {
        $product              = new Product();
        $product->name        = $request->name;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->amount      = $request->amount;
        $product->fee         = $request->fee;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if (isset($image)) {
                $location = "uploads/products/";
                $product->image  = fileUpload($image, $location, $imageType = 'product', $height = null, $weight = null);
            }
        }
        $product->save();
        return redirect('admin/products');
    }
    public function delete($id)
    {
        // dd($id);
        $product = Product::find($id, ['image']);
        if ($product)
        {
            $product->delete();
            $this->helper->one_time_message('success', 'Product Deleted Successfully');
            return redirect('admin/products');
        }
    }
}
