<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Schedule;


class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $schedules = Schedule::getAllOrderByUpdated_at();
        return response()->view('schedule.index',compact('schedules'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // バリデーション
          $validator = Validator::make($request->all(), [
            'subject' => 'required',
            'date' => 'required',
            'schedule' => 'required',
            'contact' => 'required',
        
          ]);
          // バリデーション:エラー
          if ($validator->fails()) {
            return redirect()
              ->route('schedule.create')
              ->withInput()
              ->withErrors($validator);
          }
          // create()は最初から用意されている関数
          // 戻り値は挿入されたレコードの情報
          $result = Schedule::create($request->all());
          // ルーティング「tweet.index」にリクエスト送信（一覧ページに移動）
          return redirect()->route('schedule.index');
  
  }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
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
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
      
    }

}