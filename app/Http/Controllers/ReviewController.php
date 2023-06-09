<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function index()
    {
        return view('admin.review.index');
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
        $s3 = Storage::disk('public');
        $filePath = '/uploads/review/' . $fileName;

        $s3->put($filePath, file_get_contents($file), 'public');
        $request->request->add(['image' => $fileName]);
        Review::create($request->all());
        toastr()->success('Review Added successfully..!');
        return redirect()->back();
    }
}
