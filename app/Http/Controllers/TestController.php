<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rider;
use App\Models\Campaign;
use App\Models\TrekkAdmin;
use Illuminate\Http\Request;
use App\Models\PromoFreePass;

class TestController extends Controller
{
    public function testing(){
    $rider = Rider::find(10);
    // dd($rider->campaigns);
    // foreach($rider->campaigns as $each){
    //     echo $each->send_notifications.'<br>';
    //     echo $each->to.'<br>';
    //     echo '<hr><hr>';
    // }
    

    // $rider = Rider::with('campaigns')->find(4);
    // dd($rider);
    // dd($rider->campaigns); 

    // $user = User::with('promo_free_passes')->find(1);
    // $promo_free_passes = PromoFreePass::with('user')->paginate(12);

    // $users = User::with('userable')->paginate(12);

    // $trekkadmins = TrekkAdmin::with('user')->paginate(12);
    
    // dd($trekkadmins);
    // dd($rider->campaigns); 

    // return view('modules.eloquent',compact('campaign'));

    }
}
