<?php

namespace App\Http\Controllers\News;

use App\Model\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DateTimeZone;

class TempleNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $NS = News ::join('temple','news.temple_id','=','temple.id')
            ->where('news.isActive',1)
            ->select('news.id as id','news.title','news.description','news.publishDate','news.isApproved','temple.id as temple_id','temple.templeName')
            -> get();

        $JsonRes=[
            "message" => "Find all News",
            "status" => 200,
            "response" => $NS,
        ];
        return response()->json($JsonRes, 200);

//        return response()->json(["message"=>"Find one News","status"=>$NS],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule = [

            'title' => 'required|min:1|max:45',
            'description' => 'required|min:1|max:345',
            'temple_id' => 'required|numeric'
        ];
        $validator = Validator::make(
            $request->all(), $rule
        );

        if ($validator->fails()) {
            $JsonRes=[
                "message" => "Validation failure",
                "status" => 401,
                "response" => "",
            ];
            return response()->json($JsonRes, 400);

        } else {
            $title = $request->title;
            $description = $request->description;
            $publishDate=Carbon::now(new DateTimeZone('Asia/Colombo'));
            $temple_id = $request->temple_id;
            $isActive= true;
            $isApproved =false;


            $NS = new News();
            $NS->title = $title;
            $NS->description = $description;
            $NS->publishDate= $publishDate;
            $NS->temple_id = $temple_id;
            $NS->isActive= $isActive;
            $NS->isApproved = $isApproved ;
            $NS->save();

            $JsonRes=[
                "message" => "Successfully Insert News",
                "status" => 200,
                "response" => "",
            ];
            return response()->json($JsonRes, 200);
//            return response()->json(["message"=>"Successfully Insert News"],200);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $NS = News ::join('temple','news.temple_id','=','temple.id')
            ->where('news.isActive',1)
            -> where('news.id',$id)
            ->select('news.id as id','news.title','news.description','news.publishDate','news.isApproved','temple.id as temple_id','temple.templeName')
            -> first();

        $JsonRes=[
            "message" => "Find one News",
            "status" => 200,
            "response" => $NS,
        ];
        return response()->json($JsonRes, 200);

//        return response()->json(["message"=>"Find one News","status"=>$NS],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rule = [

            'title' => 'required|min:1|max:45',
            'description' => 'required|min:1',


        ];
        $validator = Validator::make(
            $request->all(), $rule
        );

        if ($validator->fails()) {
            $JsonRes=[
                "message" => "Validation failure",
                "status" => 401,
                "response" => "",
            ];
            return response()->json($JsonRes, 400);

        } else {
            $title = $request->title;
            $description = $request->description;
            $isActive= true;
            $isApproved =false;


            $NS = News::find($id);
            $NS->title = $title;
            $NS->description = $description;
            $NS->isActive= $isActive;
            $NS->isApproved = $isApproved ;
            $NS->update();

            $JsonRes=[
                "message" => "Successfully Update News",
                "status" => 200,
                "response" => "",
            ];
            return response()->json($JsonRes, 200);
//            return response()->json(["message"=>"Successfully Update News"],200);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isActive= false;

        $NS = News::find($id);
        $NS->isActive= $isActive;
        $NS->update();

        $JsonRes=[
            "message" => "Delete News",
            "status" => 200,
            "response" => "",
        ];
        return response()->json($JsonRes, 200);
//        return response()->json(["message"=>"Delete News "],200);
    }
}
