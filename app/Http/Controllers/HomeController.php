<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public static function maincategoryList()
    {
     return Category::where('parent_id','=',0)->with('children')->get();
    }
    //
    public function index()
    {
        $page='home';
        $sliderdata=Car::limit(4)->get();
        $carlist1=Car::limit(6)->get();
        return view('home.index',[
            'page'=>$page,
            'sliderdata'=>$sliderdata,
            'carlist1'=>$carlist1
        ]);

    }
    public function car($id)
    {
        $data= Car::find($id);
        $images = DB::table('images')->where('car_id', $id)->get();
        return view('home.car',[
            'data'=>$data,
            'images'=>$images
        ]);
    }

    public function categorycars($id)
    {
        $category= Category::find($id);
        $cars = DB::table('cars')->where('category_id', $id)->get();
        return view('home.categorycars',[
            'data'=>$data,
            'cars'=>$cars
        ]);

    }

    public function test()
    {
        return view('home.test');

    }
    public function param($id,$number)
    {
        //echo "Parameter 1:", $id;
        //echo "<br>Parameter 2:", $number;
        //echo "<br>Sum Parameters:", $id+$number;
        return view('home.test2',
        [
            'id' => $id,
            'number' => $number
        ]);
    }
    public function save(Request $request)
    {
        echo "Save Function";
        echo "First Name : ",$_REQUEST["fname"];
        echo "Last Name :",$_REQUEST["lname"];
        return view('home.test2',
            [
                'id' => $_REQUEST["fname"],
                'number' => $_REQUEST["lname"]
            ]);

    }
}
