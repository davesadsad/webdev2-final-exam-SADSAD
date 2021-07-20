<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BibleStudy;

class BStudyController extends Controller
{

    
       public function requestforms (Request $request) {
    
        $bstable = new BibleStudy();
        return view ('/requestforms', compact ('bstable'));
       }
    
       public function createform (Request $request) {
    
        $bstable = new BibleStudy();
        $bstable->name = $request-> name;
        $bstable->email = $request-> email;
        $bstable->number = $request-> number;
        $bstable->bdate = $request-> bdate;
        $bstable->religion = $request-> religion;
        $bstable->bsdate = $request-> bsdate;
        $bstable->bstime = $request-> bstime;
        $bstable->bslocation = $request-> bslocation;
        
       if ($bstable->save()) {
            return redirect ('/thank-you');
       }
            return redirect ('/thank-you');
       }
    
       public function requests (Request $request) {

          $bstable = BibleStudy::all();
          return view ('/requests', compact ('bstable'));
         }

       public function thankyou (Request $request) {
    
        return view ('/thankyou');
       }
}
