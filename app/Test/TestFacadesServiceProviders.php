<?php

namespace App\Providers\Test;

use App;
use Illuminate\Support\ServiceProvider;

class TestFacadesServiceProvider extends ServiceProvider {
   public function boot() {
      //
   }
   public function register() {
      App::bind('test',function() {
         return new \App\Test\TestFacades;
      });
   }
}