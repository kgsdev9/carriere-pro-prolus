<?php
namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Session;

trait CompteurDeVue {

public function countView($slug){
        $Key = 'key_' . $slug;
        if (!Session::has($Key)) {
            DB::table('jobs')
            ->where('slug', $slug)->increment('view', 1);
            Session::put($Key, 1);
        }
    }

}
