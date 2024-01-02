<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Backend\AdminUser;
use App\Models\Shipment;
use App\Models\Backend\Ordertrack;
use Illuminate\Support\Facades\Hash;

use Exception;

class ApiController extends Controller
{

    public function signInCheck(Request $request){
        $error=array('error'=>'Your phone number or password is wrong!');
        $user=AdminUser::where('contact_no',$request->username)->where('role_id',4)->first();
        if($user){
            if(Hash::check($request->password , $user->password)){
                $data=array('id'=>encryptor('encrypt',$user->id));
                return response($data, 200);
            }else
                return response($error, 204);
        }else
            return response($error, 204);
    }

    public function orders($id){
        $order=Shipment::where('user_id',encryptor('decrypt',$id))->oldest()->get();
        $data=array();
        $status=array('Pending','Picked Up','Delivered');
        if($order){
            foreach($order as $p){
                $data[]=array(
                    'id'=>$p->id,
                    'invoice_no'=>$p->invoice_no,
                    'f_city'=>$p->f_city?->name,
                    't_city'=>$p->t_city?->name,
                    'contact_number'=>$p->contact_number,
                    'product_name'=>$p->product_name,
                    'product_weight'=>$p->product_weight,
                    'total_cost'=>$p->total_cost,
                    'status'=>$status[$p->status],
                );
            }
        }
        return response($data, 200);
    }

    public function ordertrack($shipment_id){
        $order=Ordertrack::where('shipment_id',$shipment_id)->oldest()->get();
        $data=array();
        $status=array('Pending','Picked Up','Delivered');
        if($order){
            foreach($order as $p){
                $data[]=array(
                    'id'=>$p->id,
                    'comment'=>$p->comment,
                    'created_at'=>date("D, M d-Y",strtotime($p->created_at)),
                    'status'=>$status[$p->status],
                );
            }
        }
        return response($data, 200);
    }
    public function ordertrack_save(Request $r){
        $ot=new Ordertrack;
        $ot->comment=$r->comment;
        $ot->status=$r->status;
        $ot->shipment_id=$r->shipment_id;
        $ot->user_id=encryptor('decrypt',$r->user_id);
        $ot->save();
        return response($ot, 200);
    }

}
