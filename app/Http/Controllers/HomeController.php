<?php
/**
 * Created by PhpStorm.
 * User: emily
 * Date: 4/04/2016
 * Time: 4:37 PM
 */
  namespace Blackcat\Http\Controllers;

  class HomeController extends Controller{
      public function index(){
          return view('home');
      }
  }