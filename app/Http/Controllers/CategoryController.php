<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Category::all();
            return DataTables::of($data)
                ->addIndexColumn()


                ->addColumn('action', function ($row) {

                    $btn = '<a href="' . route('category.edit', ['id' => $row->id]) . '" class="edit btn btn-primary btn-sm">View</a>
                           <a href="' . route('category.delete', ['id' => $row->id]) . '" class="edit btn btn-danger btn-sm">Delete</a>
                           ';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }


        return view('admin.Category.index');
    }
    public function create()
    {
        return view('admin.Category.create');
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'category_name' => 'required',

        ]);
        Category::create($request->all());
        toastr()->success('Category Added successfully..!');
        return redirect()->back();
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.Category.edit', compact('category'));
    }
    public function update($id, Request $request)
    {
        $category = Category::find($id);
        $category->update($request->all());
        toastr()->success('Category Edited successfully..!');
        return redirect()->back();
    }
    public function delete($id)
    {

        $re = Category::where('id', $id)->delete();
        // if ($re) {
        //     toastr()->success('delete successfully..!');
        // } else {
        //     toastr()->error('Something problem check further ..!');
        // }

        return redirect()->route('category.index');
    }
}
