<?php

namespace App\Http\Controllers\Site;

use App\Models\Team;
use App\Mail\Contact;
use App\Models\Client;
use App\Models\Service;
use App\Models\Question;
use App\Rules\wordCount;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\PortfolioCategry;
use App\Models\PortfolioDetaile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function index()
    {
        $services = Service::paginate(10);
        $details=PortfolioDetaile::with('PortfolioDetaileImages','PortfolioCategry')->paginate(1000);
        $categories=PortfolioCategry::all();
        $testimonials =Testimonial::all();
        $teams =Team::paginate(4);
        $clients=Client::all();
        $questions = Question::all();
        return view('site.index',compact('services','details','categories','testimonials','teams','clients','questions'));
    }

    public function portfolio_details($categry,$id)
    {
        $detail = PortfolioDetaile::with('PortfolioCategry','client','PortfolioDetaileImages')->find($id);
        return view('site.portfolio-details',compact('detail'));
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>['required',new wordCount(5)]
        ]);

        $data =$request->except('_token');
        Mail::to('admin@gimal.com')->send(new Contact( $data));
    }

}
