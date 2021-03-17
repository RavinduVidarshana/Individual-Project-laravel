<?php

namespace App\Http\Controllers\Email;

use App\Model\Email;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;

class WelfareSocietyEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $EM = Email:: get();

        return response()->json(["message"=>"Find all Welfare Society Emails","status"=>$EM],200);
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

            'emailName' => 'required|min:1|max:15',

        ];
        $validator = Validator::make(
            $request->all(), $rule
        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);

        } else {
            $emailName = $request->emailName;
            $isPrimary =false;


            $EM = new Email();
            $EM->emailName = $emailName ;
            $EM->isPrimary = $isPrimary ;
            $EM->save();

            return response()->json(["message"=>"Successfully Insert Welfare Society Email"],200);

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
        $EM = Email :: where('isPrimary',0)
            -> where('id',$id)
            -> first();

        return response()->json(["message"=>"Find one Welfare Society","status"=>$EM],200);
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

            'emailName' => 'required|min:1|max:15',

        ];
        $validator = Validator::make(
            $request->all(), $rule
        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);

        } else {
            $emailName = $request->emailName;
            $isPrimary =false;


            $EM= Email::find($id);
            $EM->emailName = $emailName ;
            $EM->isPrimary = $isPrimary ;
            $EM->update();

            return response()->json(["message"=>"Successfully update Welfare SocietyEmail"],200);

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
        $EM = Email:: where('isPrimary',0)
            -> where('id',$id)
            -> delete();

        return response()->json(["message"=>"Delete Welfare Society Email "],200);
    }
}