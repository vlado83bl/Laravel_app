<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard() {
        return view('pages.dashboard');
    }

    public function asset() {
        return view('pages.asset');
    }

    public function vessels() {
        return view('pages.vessels');
    }
    
    public function communications() {
        return view('pages.communications');
    }

    public function messages() {
        return view('pages.messages');
    }

    public function users() {
        return view('pages.users');
    }
    
    public function userslist() {
        return view('pages.userslist');
    }

    public function jobs() {
        return view('pages.jobs');
    }
    
    public function job() {
        return view('pages.job');
    }

    public function profile() {
        return view('pages.profile');
    }

    public function activities() {
        return view('pages.activities');
    }

    public function news() {
        return view('pages.news');
    }

    public function newsitem() {
        return view('pages.newsitem');
    }

    public function reports() {
        return view('pages.reports');
    }
    
    public function support() {
        return view('pages.support');
    }
}
