<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class NavController extends Controller
{
    //
    // public function nav(string $pageName){
    //     return view(''.$pageName);
    // }
    // public function navSubPage(string $parentName, string $pageName)
    // {
    //     return view($parentName . '.' . $pageName);
    // }
    public function navSubPageWithValue(string $parent, string $page, Request $request)
    {
        $view = $parent . '.' . $page;

        if (! View::exists($view)) {
            abort(404);
        }

        return view($view, [
            'Name' => $request->query('Name'),
        ]);
    }

    // public function submitUser(Request $request)
    // {
    //     return dd('HERE', $request->all());
    //     return redirect()->route('page.view', [
    //         'parent' => 'user',
    //         'page'   => 'view_user',
    //         'Name'   => $request->input('name'),
    //     ]);
    // }
    public function submitUser(Request $request)
    {
        return view('user.view_user', [ 
            'Name' => $request->input('name'),
            'Gender' => $request->input('gender'),
            'Age' => $request->input('age'),
            'Dob' => $request->input('dob'), 
        ]);
    }
    
}
