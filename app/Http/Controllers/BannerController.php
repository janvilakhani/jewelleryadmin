<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class BannerController extends Controller
{
    public function index(Request $request)
    {



        $banners = Banner::all();
        return view('admin.Banner.index',compact('banners'));
    }
    public function create()
    {
        return view('admin.Banner.create');
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required',
            'url' => 'required',
            'sub_title' => 'required',
            'images' => 'required',
        ]);
        $file = $validated['images'];
        $fileName = $file->getClientOriginalName();
        $s3 = Storage::disk('public');
        $filePath = '/uploads/banner/' . $fileName;

        $s3->put($filePath, file_get_contents($file), 'public');
        $request->request->add(['image' => $fileName]);
        Banner::create($request->all());
        toastr()->success('Banner Added successfully..!');
        return redirect()->back();
    }
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.Banner.edit', compact('banner'));
    }
    public function update($id, Request $request)
    {
        $banner = Banner::find($id);
        if ($request->hasFile('images')) {
            $file = $request['images'];
            $fileName = $file->getClientOriginalName();

            $s3 = Storage::disk('public');
            $filePath = '/uploads/banner/' . $fileName;
            $s3->put($filePath, file_get_contents($file), 'public');
            $request->request->add(['image' => $fileName]);
        } else {
            $request->request->add(['image' => $banner->image]);
        }
        $banner->update($request->all());
        toastr()->success('Banner Edited successfully..!');
        return redirect()->back();
    }
    public function delete($id)
    {

        $re = Banner::where('id', $id)->delete();
        // if ($re) {
        //     toastr()->success('delete successfully..!');
        // } else {
        //     toastr()->error('Something problem check further ..!');
        // }

        return redirect()->route('banner.index');
    }
}
