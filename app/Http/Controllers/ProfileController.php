<?php
/**
 * Created by PhpStorm.
 * User: emily
 * Date: 28/04/2016
 * Time: 2:42 PM
 */
  namespace Blackcat\Http\Controllers;
  use Blackcat\Models\User;
  use Illuminate\Http\Request;

  class ProfileController extends Controller{
      public function getProfile( $username){
//          dd($username); //Step 2
          $user = User::where('username',$username)->first();

          if(!$user){
              abort(404);
          }

          return view('profile.index')
              ->with('user',$user);
      }

      public function getEdit(){
          return view('profile.edit');
      }

      public function postEdit(){

      }
  }


