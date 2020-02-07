<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CommonModel;

class IndexController extends Controller
{
    public function index(){
        return view('index.index');
    }
    public function register(){
        return view('index.reg');
    }
    public function reg(Request $request){
        $data=$request->all();
//        print_r($data);
        $url='http://passport.com/index/index';
        $response=CommonModel::curlPost($url,$data);
        echo '<pre>';print_r($response);echo"</pre>";
//        if($response=='注册成功'){
//            return redirect("errors/403?from=");
//        }else{
//            header(2,"/index/register");
////            return redirect("/index/register");
//        }

    }
    public function login(){
        return view('index/login');
    }
    public function login0(Request $request){
         $login_info=$request->all();
//         print_r($login_info);
        $url='http://passport.com/index/login';
        $response=CommonModel::curlPost($url,$login_info);
        echo '<pre>';print_r($response);echo"</pre>";
    }

}
