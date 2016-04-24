<?php
/**
 * Created by PhpStorm.
 * User: emily
 * Date: 24/04/2016
 * Time: 2:41 PM
 */

  namespace Blackcat\Http\Controllers;

  class SearchController extends Controller{
      public function getResults(){
          return view('search.results');
      }
  }