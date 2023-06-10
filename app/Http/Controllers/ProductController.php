<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // if ($request->ajax()) {
        //     $data  = Product::all();
        //     // $model = Category::;
        //     return DataTables::of($data)
        //         ->addIndexColumn()

        //         ->editColumn('category_id', function ($data) {
        //             return $data->category->category_name;
        //         })
        //         ->editColumn('subcategory_id', function ($data) {
        //             return $data->subcategory->subcat_name;
        //         })
        //         ->addColumn('action', function ($row) {

        //             $btn = '<a href="' . route('admin.product.edit', ['id' => $row->id]) . '" class="edit btn btn-primary btn-sm">View</a>
        //                    <a href="' . route('admin.product.delete', ['id' => $row->id]) . '" class="edit btn btn-danger btn-sm">Delete</a>
        //                    ';

        //             return $btn;
        //         })
        //         ->addColumn('image', function ($row) {

        //             return '<img src="' . asset('storage/uploads/product/' . $row->image) . '"  class="image"/>';
        //         })
        //         ->rawColumns(['action', 'category_id', 'subcategory_id', 'image'])
        //         ->make(true);
        // }

            $product=Product::with('category','subcategory')->get();
        return view('admin.Product.index',compact('product'));
    }
    public function create()
    {
        $result = Category::all();
        $subcat = SubCategory::all();
        return view('admin.Product.create', compact('result', 'subcat'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'subcategory_id' => 'required',
            'category_id' => 'required',
            'product_name' => 'required',
            'images' => 'required',

        ]);
        $file = $validated['images'];
        $fileName = $file->getClientOriginalName();
        $s3 = Storage::disk('public');
        $filePath = '/uploads/product/' . $fileName;

        $s3->put($filePath, file_get_contents($file), 'public');
        $request->request->add(['image' => $fileName]);


        Product::create($request->all());
        toastr()->success('Product Added successfully..!');
        return redirect()->back();
    }
    public function edit($id)
    {
        $category = Category::all();
        $subcategory = SubCategory::all();
        $res = Product::find($id);

        $cate = Category::where('id', $res->category_id)->first();
        $subcat = SubCategory::where('id', $res->subcategory_id)->first();
        // dd($cate);
        return view('admin.Product.edit', compact('category', 'res', 'cate', 'subcat', 'subcategory'));
    }
    public function update($id, Request $request)
    {
        $category = Product::find($id);
        $category->update($request->all());
        toastr()->success('Category Edited successfully..!');
        return redirect()->back();
    }
    // public function delete($id)
    // {

    //     $re = Category::where('id', $id)->delete();
    //     // if ($re) {
    //     //     toastr()->success('delete successfully..!');
    //     // } else {
    //     //     toastr()->error('Something problem check further ..!');
    //     // }

    //     return redirect()->route('category.index');
    // }
}
