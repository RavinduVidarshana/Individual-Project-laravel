<?php

namespace App\Http\Controllers\News;

use App\Model\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class TempleNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $NS = News:: get();

        return response()->json(["message"=>"Find all News","status"=>$NS],200);
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
            'publishDate' => 'required|date_format:Y-m-d',
            'temple_id' => 'required|numeric'



        ];
        $validator = Validator::make(
            $request->all(), $rule
        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);

        } else {
            $title = $request->title;
            $description = $request->description;
            $publishDate= $request->publishDate;
            $temple_id = $request->temple_id;
            $isActive= false;
            $isApproved =false;


            $NS = new News();
            $NS->title = $title;
            $NS->description = $description;
            $NS->publishDate= $publishDate;
            $NS->temple_id = $temple_id;
            $NS->isActive= $isActive;
            $NS->isApproved = $isApproved ;
            $NS->save();

            return response()->json(["message"=>"Successfully Insert News"],200);

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
        $NS = News :: where('isActive','isApproved',0)
            -> where('id',$id)
            -> first();

        return response()->json(["message"=>"Find one News","status"=>$NS],200);
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
            'publishDate' => 'required|date_format:Y-m-d',
            'temple_id' => 'required|numeric'



        ];
        $validator = Validator::make(
            $request->all(), $rule
        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);

        } else {
            $title = $request->title;
            $description = $request->description;
            $publishDate= $request->publishDate;
            $temple_id = $request->temple_id;
            $isActive= false;
            $isApproved =false;


            $NS = News::find($id);
            $NS->title = $title;
            $NS->description = $description;
            $NS->publishDate= $publishDate;
            $NS->temple_id = $temple_id;
            $NS->isActive= $isActive;
            $NS->isApproved = $isApproved ;
            $NS->update();

            return response()->json(["message"=>"Successfully Update News"],200);

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

        $NS = News:: where('isActive','isApproved',0)
            -> where('id',$id)
            -> delete();

        return response()->json(["message"=>"Delete News "],200);
    }
}