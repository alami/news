<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\MultiImage;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Image;

class AboutController extends Controller
{
    public function AboutPage() {
        $aboutpage = About::find(1);
        return view('admin.about_page.about_page_all',compact('aboutpage'));
    }
    public function UpdateAbout(Request $request) {
        $about_id = $request->id;
        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid('', false))
                . '.' . $image->getClientOriginalExtension();
            $save_url = 'upload/home_about/'.$name_gen;
            Image::make($image)->resize(523,605)->save($save_url);
            About::findOrFail($about_id)->update([
                'title'=>$request->title,
                'short_title'=>$request->short_title,
                'short_description'=>$request->short_description,
                'long_description'=>$request->long_description,
                'about_image'=>$save_url,
            ]);
            $notification = array('message' => 'About Page Updated with Image Successfully',
                'alert-type' => 'success');
        }else {
            About::findOrFail($about_id)->update([
                'title'=>$request->title,
                'short_title'=>$request->short_title,
                'short_description'=>$request->short_description,
                'long_description'=>$request->long_description,
            ]);
            $notification = array('message' => 'About Page Updated without Image Successfully',
                'alert-type' => 'error');
        }
        return redirect()->back()->with($notification);
    }
    public function HomeAbout() {
        $aboutpage = About::find(1);
        return view('frontend.about_page',compact('aboutpage'));
    }
    public function AboutMultiImage() {
        return view('admin.about_page.multiimage');
    }
    public function StoreMultiImage(Request $request) {
        $multi_image = $request->file('multi_image');
        foreach ($multi_image as $image) {
            $name_gen = hexdec(uniqid('', false))
                . '.' . $image->getClientOriginalExtension();
            $save_url = 'upload/multi/'.$name_gen;
            Image::make($image)->resize(220,220)->save($save_url);
            MultiImage::insert([
                'multi_image'=>$save_url,
                'created_at'=>Carbon::now()
            ]);
        }
        $notification = array('message' => 'Multi Image Inserted Successfully',
                'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

}
