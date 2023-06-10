<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $review= Review::all();
        // if ($request->ajax()) {
        //     $data  = Review::all();
        //     // $model = Category::;
        //     return DataTables::of($data)
        //         ->addIndexColumn()


        //         ->addColumn('action', function ($row) {

        //             $btn = '<a href="' . route('admin.review.edit', ['id' => $row->id]) . '" class="edit btn btn-primary btn-sm">View</a>
        //                    <a href="' . route('admin.review.delete', ['id' => $row->id]) . '" class="edit btn btn-danger btn-sm">Delete</a>
        //                    ';

        //             return $btn;
        //         })
        //         ->addColumn('image', function ($row) {

        //             return '<img src="' . asset('storage/uploads/review/' . $row->image) . '"  class="image"/>';
        //         })
        //         ->rawColumns(['action',  'image'])
        //         ->make(true);
        // }
        return view('admin.review.index',compact('review'));
    }

    public function create()
    {
        return view('admin.review.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'star' => 'required',
            'images' => 'required',

        ]);
        $file = $validated['images'];
        $fileName = $file->getClientOriginalName();
        // dd($fileName);
        $s3 = Storage::disk('public');
        $filePath = '/uploads/review/' . $fileName;

        $s3->put($filePath, file_get_contents($file), 'public');
        $request->request->add(['image' => $fileName]);
        // dd($request->all());
        Review::create($request->all());
        toastr()->success('Review Added successfully..!');
        return redirect()->back();
    }


    public function edit($id)
    {
        $review = Review::find($id);
        return view('admin.review.edit', compact('review'));
    }
    public function update($id, Request $request)
    {
        $category = Review::find($id);
        if ($request->hasFile('images')) {
            $file = $request['images'];
            $fileName = $file->getClientOriginalName();

            $s3 = Storage::disk('public');
            $filePath = '/uploads/review/' . $fileName;
            $s3->put($filePath, file_get_contents($file), 'public');
            $request->request->add(['image' => $fileName]);
        } else {
            $request->request->add(['image' => $category->image]);
        }
        $category->update($request->all());
        toastr()->success('Review Edited successfully..!');
        return redirect()->route('admin.review.index');
    }
    public function delete($id)
    {

        $re = Review::where('id', $id)->delete();
        // if ($re) {
        //     toastr()->success('delete successfully..!');
        // } else {
        //     toastr()->error('Something problem check further ..!');
        // }

        return redirect()->route('review.index');
    }
}
