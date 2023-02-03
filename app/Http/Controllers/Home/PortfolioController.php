<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

// Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Image;

class PortfolioController extends Controller
{
    public function AllPortfolio()
    {
        $portfolio = Portfolio::latest()->get();
        return view('admin.portfolio.portfolio_all', compact('portfolio'));
    }

    public function AddPortfolio()
    {
        $portfolio = Portfolio::latest()->get()[0];
        //dd($portfolio->portfolio_name);
        if ($portfolio==null) $portfolio = new Portfolio();
        return view('admin.portfolio.portfolio_add', compact('portfolio'));
    }

    public function StorePortfolio(Request $request)
    {
        $request->validate([
            'portfolio_name' => 'required',
            'portfolio_title' => 'required',
            'portfolio_image' => 'required',
        ], [
            'portfolio_name.required' => 'Portfolio name is required',
            'portfolio_title.required' => 'Portfolio title is required',
            'portfolio_image.required' => 'Portfolio image is required',
        ]);
        $image = $request->file('portfolio_image');
        $name_gen = hexdec(uniqid('', false))
            . '.' . $image->getClientOriginalExtension();
        $save_url = 'upload/portfolio/' . $name_gen;
        Image::make($image)->resize(1020, 519)->save($save_url);
        Portfolio::insert([  //findOrFail($slide_id)->update
            'portfolio_name' => $request->portfolio_name,
            'portfolio_title' => $request->portfolio_title,
            'portfolio_description' => $request->portfolio_description,
            'portfolio_image' => $save_url,
            'created_at' => Carbon::now(),
        ]);
        $notification = array('message' => 'Portfolio inserted with Image Successfully',
            'alert-type' => 'success');
        return redirect()->route('all.portfolio')->with($notification);
    }
}

