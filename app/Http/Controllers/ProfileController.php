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
          dd($username); //Step 2
      }

  }