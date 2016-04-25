<?php
/**
 * Created by PhpStorm.
 * User: emily
 * Date: 24/04/2016
 * Time: 2:41 PM
 */

  namespace Blackcat\Http\Controllers;

  use DB;
  use Blackcat\Models\User;
  use Illuminate\Http\Request;


  class SearchController extends Controller{
      public function getResults(Request $request){
          $query = $request->input('query');

          if(!$query){
              return redirect()->route('home');
          }

          $users = User::where(DB::raw("CONCAT(first_name, ' ', last_name)"),'LIKE', "%{$query}%")
                   ->orWhere('username','LIKE',"%{$query}%")
                   ->get();

          return view('search.results')->with('users',$users);
      }
  }