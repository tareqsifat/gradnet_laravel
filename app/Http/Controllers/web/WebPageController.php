<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class WebPageController extends Controller
{
    public function index()
    {
        return view('web.index');
    }
    public function about()
    {
        return view('web.about');
    }
    public function contact()
    {
        return view('web.contact');
    }
    public function committee()
    {
        return view('web.committee');
    }
    public function business()
    {
        return view('web.business');
    }
    public function directories()
    {
        $users = User::where('is_approved', 1)->get();
        return view('web.directories', compact('users'));
    }
    public function articles()
    {
        return view('web.articles');
    }
    public function news()
    {
        return view('web.news');
    }
    public function stories()
    {
        return view('web.stories');
    }
    public function offer()
    {
        return view('web.offer');
    }

}
