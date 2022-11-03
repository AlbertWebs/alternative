<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
}
