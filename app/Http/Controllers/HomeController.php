<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Order;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categoryList(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public static function getsetting(){
        return Setting::first();
    }

    public static function countreview($id){
        return Review::where('course_id', $id)->count();
    }

    public static function avrgreview($id){
        return Review::where('course_id', $id)->average('rate');
    }

    public function index(){

        $setting = Setting::first();
        $slider = Course::select('id','title','image','price','month')->limit(3)->get();
        $popular = Course::select('id','title','image','price','month')->limit(3)->inRandomOrder()->get();
        $last = Course::select('id','title','image','price','month')->limit(3)->orderByDesc('id')->get();
        //print_r($slider);
        //exit();
        $data = [
            'setting'=>$setting,
            'slider'=>$slider,
            'popular'=>$popular,
            'last'=>$last
        ];
        return  view('home.index',$data);
    }

    public function course($id){
        $data = Course::find($id);
        $datalist = Image::where('course_id',$id)->get();
        $reviews = Review::where('course_id',$id)->get();
        //print_r($data);
        //exit();
        return  view('home.course_detail',['data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);
    }

    public function buycourse(Request $request,$id)
    {
        $data = new Order;

        $data->user_id = Auth::id();
        $course = Course::find($id);
        $data->course_id=$id;
        $data->startDate = $request->input('startDate');
        $data->finishDate = $request->input('finishDate');
        $data->IP = $_SERVER['REMOTE_ADDR'];
        $data->price = $data->course->price;
        $data->total = $data->course->price;
        $data->payment = $data->course->price;



        $data->save();

        return redirect()->route('course',['id'=>$course->id])->with('success','Siparişiniz Oluşturuldu');
    }

    public function getcourse(Request $request){
        $search=$request->input('search');

        $count = Course::where('title','like','%'.$search.'%')->get()->count();
        if($count==1)
        {
            $data = Course::where('title','like','%'.$search.'%')->first();
            return redirect()->route('course',['id'=>$data->id]);
        }
        else
        {
            return redirect()->route('courselist',['search'=>$search]);
        }
    }

    public function courselist($search){
        $datalist = Course::where('title','like','%'.$search.'%')->get();
        return view('home.search_courses',['search'=>$search,'datalist'=>$datalist]);
    }

    public function categorycourses($id){

        $datalist = Course::where('category_id',$id)->get();
        $data = Category::find($id);
        //print_r($data);
        //exit();
        return  view('home.category_courses',['data' => $data, 'datalist' => $datalist]);
    }

    public function aboutus(){
        $setting = Setting::first();
        return  view('home.about',['setting'=>$setting]);
    }

    public function references(){
        $setting = Setting::first();
        return  view('home.references',['setting'=>$setting]);
    }

    public function faq(){
        $datalist = Faq::all()->sortBy('position');
        return  view('home.faq',['datalist'=>$datalist]);
    }

    public function videoplayer(){
        return  view('home.video_player');
    }

    public function contact(){
        $setting = Setting::first();
        return  view('home.contact',['setting'=>$setting]);
    }

    public function sendmessage(Request $request){
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('contact')->with('info','Your message has been saved, We thank you.');
    }

    public function login(){
        return view('admin.login');
    }
    public function logincheck(Request $request){

        if($request->isMethod('post')){
            $credentials = $request->only('email', 'password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function test($id,$name){
        $data['id']=$id;
        $data['name']=$name;
        return view('home.test',$data);
        /*echo "Id Number : ", $id;
        echo "<br> Name : ", $name;
        for ($i=1; $i<=$id; $i++){
            echo "<br> $i - $name";
        }*/
    }
}
