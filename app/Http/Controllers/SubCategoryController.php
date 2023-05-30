<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class SubCategoryController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data  = SubCategory::all();
            // $model = Category::;
            return DataTables::of($data)
                ->addIndexColumn()

                ->editColumn('category_id', function ($data) {
                    return $data->category->category_name;
                })
                ->addColumn('action', function ($row) {

                    $btn = '<a href="' . route('admin.subcategory.edit', ['id' => $row->id]) . '" class="edit btn btn-primary btn-sm">View</a>
                           <a href="' . route('admin.subcategory.delete', ['id' => $row->id]) . '" class="edit btn btn-danger btn-sm">Delete</a>
                           ';

                    return $btn;
                })
                ->addColumn('image', function ($row) {

                    return '<img src="' . asset('storage/uploads/subcategory/' . $row->image) . '"  class="image"/>';
                })
                ->rawColumns(['action', 'category_id', 'image'])
                ->make(true);
        }


        return view('admin.Sub-Category.index');
    }
    public function create()
    {
        $result = Category::all();
        return view('admin.Sub-Category.create', compact('result'));
    }
    public function store(Request $request)
    {

        // dd($request->all());
        $validated = $request->validate([
            'subcat_name' => 'required',
            'category_id' => 'required',
            'images' => 'required',

        ]);
        $file = $validated['images'];
        $fileName = $file->getClientOriginalName();
        $s3 = Storage::disk('public');
        $filePath = '/uploads/subcategory/' . $fileName;

        $s3->put($filePath, file_get_contents($file), 'public');
        $request->request->add(['image' => $fileName]);


        SubCategory::create($request->all());
        toastr()->success('SubCategory Added successfully..!');
        return redirect()->back();
    }
    public function edit($id)
    {
        $result = Category::all();
        $res = SubCategory::find($id);
        $cate = Category::where('id', $res->category_id)->first();
        // dd($cate);
        return view('admin.Sub-Category.edit', compact('result', 'res', 'cate'));
    }
    public function update($id, Request $request)
    {
        // dd($request->all());
        $subcategory = SubCategory::find($id);
        // $category->update($request->all());

        $validated = $request->validate([
            'subcat_name' => 'required',
            'category_id' => 'required',

        ]);
        if ($request->hasFile('images')) {
            $file = $request['images'];
            $fileName = $file->getClientOriginalName();

            $s3 = Storage::disk('public');
            $filePath = '/uploads/subcategory/' . $fileName;
            $s3->put($filePath, file_get_contents($file), 'public');
            $request->request->add(['image' => $fileName]);
        } else {
            $request->request->add(['image' => $subcategory->image]);
        }
        $subcategory->update(
            $request->all()
        );
        toastr()->success('SubCategory Edited successfully..!');
        return redirect()->back();
    }
    public function delete($id)
    {

        SubCategory::where('id', $id)->delete();
        toastr()->success('delete successfully..!');
        return redirect()->route('subcategory.index');
    }
}
