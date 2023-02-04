<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;  // Carbon\Carbon;
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
        return view('admin.portfolio.portfolio_add');
    }
    public function EditPortfolio($id)
    {
        $portfolio = Portfolio::findOrFail($id); //dd($portfolio->portfolio_name);
        if ($portfolio==null) $portfolio = new Portfolio();
        return view('admin.portfolio.portfolio_edit', compact('portfolio'));
    }
    public function DeletePortfolio($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $img = $portfolio->portfolio_image;
        unlink($img);
        Portfolio::findOrFail($id)->delete();
        $notification = array('message' => 'Portfolio Deleted Successfully',
            'alert-type' => 'error');
        return redirect()->back()->with($notification);
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
        Portfolio::insert([
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
    public function UpdatePortfolio(Request $request)
    {
        $portfolio_id = $request->id;
        if ($request->file('portfolio_image')) {
            $image = $request->file('portfolio_image');
            $name_gen = hexdec(uniqid('', false))
                . '.' . $image->getClientOriginalExtension();
            $save_url = 'upload/portfolio/' . $name_gen;
            Image::make($image)->resize(1020, 519)->save($save_url);
            Portfolio::findOrFail($portfolio_id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_image' => $save_url,
            ]);
            $notification = array('message' => 'Portfolio inserted with Image Successfully',
                'alert-type' => 'success');
        } else {
            Portfolio::findOrFail($portfolio_id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
            ]);
            $notification = array('message' => 'Portfolio Updated without Image Successfully',
                'alert-type' => 'error');
            }
        return redirect()->route('all.portfolio')->with($notification);
    }
    public  function PortfolioDetails ($id) {
        $portfolio = Portfolio::findOrFail($id);
        return view('frontend.portfolio-details', compact('portfolio'));
    }

}

