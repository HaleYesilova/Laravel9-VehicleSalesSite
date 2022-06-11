<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
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
        return view('home.car',[
            'data'=>$data
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
