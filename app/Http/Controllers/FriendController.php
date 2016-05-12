<?php
/**
 * Created by PhpStorm.
 * User: emily
 * Date: 5/05/2016
 * Time: 4:43 PM
 */

  namespace Blackcat\Http\Controllers;
  use Blackcat\Models\User;
  use Illuminate\Http\Request;
  use Auth;


  class FriendController extends Controller{

      public function getIndex(){

          $friends = Auth::user()->friends();
          $requests = Auth::user()->friendRequests();
          return view('friends.index')
              ->with('friends',$friends)
              ->with('requests',$requests);

      }

  }


