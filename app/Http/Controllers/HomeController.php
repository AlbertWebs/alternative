<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\ReplyMessage;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Alternative Solutions Consulting - Human Resource Consultancy";
        $url = url('/');
        $page = "home";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.index',compact('title','url','page','keywords'));
    }

    public function contact()
    {
        $title = "Contact Us - Alternative Solutions Consulting";
        $url = url('/the-company');
        $page = "contact";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.contact',compact('title','url','page','keywords'));
    }

    public function schedule()
    {
        $title = "Schedule a Call - Alternative Solutions Consulting";
        $url = url('/the-company');
        $page = "contact";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.schedule',compact('title','url','page','keywords'));
    }



    public function company()
    {
        $title = "The Company - Alternative Solutions Consulting";
        $url = url('/');
        $page = "company";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.company',compact('title','url','page','keywords'));
    }

    public function services()
    {
        $title = "Services - Alternative Solutions Consulting";
        $url = url('/the-company');
        $page = "service";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.services',compact('title','url','page','keywords'));
    }

    public function solution($slung)
    {
        $Services = DB::table('services')->where('slung', $slung)->get();
        foreach ($Services as $key => $value) {
            $title = "$value->title - Alternative Solutions Consulting";
            $url = url('/the-company');
            $page = "service";
            $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
            Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
            return view('front.service',compact('title','url','page','keywords','Services'));
        }
    }

    public function portfolio()
    {
        $title = "Portfolio - Alternative Solutions Consulting";
        $url = url('/the-company');
        $page = "sector";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.portfolio',compact('title','url','page','keywords'));
    }

    public function coming_soon()
    {
        $title = "Alternative Solutions Consulting";
        $url = url('/');
        $page = "sector";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.coming',compact('title','url','page','keywords'));
    }





    public function copyright()
    {
        $title = "Copyrigh Statement - Alternative Solutions Consulting";
        $url = url('/the-company');
        $page = "services";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.copyright',compact('title','url','page','keywords'));
    }

    public function terms()
    {
        $title = "Terms and Conditions - Alternative Solutions Consulting";
        $url = url('/the-company');
        $page = "services";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.terms',compact('title','url','page','keywords'));
    }

    public function policy()
    {
        $title = "Privacy Policy - Alternative Solutions Consulting";
        $url = url('/the-company');
        $page = "services";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.policy',compact('title','url','page','keywords'));
    }

    public function form_process(Request $request){
       $name = $request->name;
       $email = $request->email;
       $subject = $request->subject;
       $message = $request->message;

       $check = $this->has_url($request->message);
        if($check == 1){
            // Check if message has links
                $name = $request->name;
                $email = $request->email;
                $subject = $request->subject;
                $message = $request->message;
                $Joiner = "Hello Admin, User with name $name, and email $email and Subject $subject : Has Sent an Enquiry as -> $message";
                ReplyMessage::sendMessage($name,$email,$Joiner);
                return response()->json(['success']);
        }else{
            return response()->json(['success' => true]);
        }

    }

    public function has_url($string){
        $url = "http";

        if (preg_match('/\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/si', $string)){
            // die("Contains an email");
            $results = 0;
        }else{
            if( strpos($string , $url) == true) {
                // die("Contains an url");
                $results = 0;
            }else{
                $results = 1;
            }
        }
        return $results;

    }
}
