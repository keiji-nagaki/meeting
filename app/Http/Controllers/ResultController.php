<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Result;

use Auth;

use App\Models\User;


class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $results = Result::getAllOrderByUpdated_at();
        return response()->view('result.index',compact('results'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('result.create');
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
    'result' => 'required',
    'number_of_people' => 'required',
    'overtime' => 'required',
  ]);
  // バリデーション:エラー
  if ($validator->fails()) {
    return redirect()
      ->route('result.create')
      ->withInput()
      ->withErrors($validator);
  }
  
  // 🔽 編集 フォームから送信されてきたデータとユーザIDをマージし，DBにinsertする
    $data = $request->merge(['user_id' => Auth::user()->id])->all();
    $result = Result::create($data);

    // tweet.index」にリクエスト送信（一覧ページに移動）
    return redirect()->route('result.index');
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
        //
         $result = Result::find($id);
         return response()->view('result.edit', compact('result'));
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
         //バリデーション
          $validator = Validator::make($request->all(), [
            'subject' => 'required',
            'date' => 'required',
            'result' => 'required',
            'number_of_people' => 'required',
            'overtime' => 'required',
          ]);
          //バリデーション:エラー
          if ($validator->fails()) {
            return redirect()
              ->route('result.edit', $id)
              ->withInput()
              ->withErrors($validator);
          }
          //データ更新処理
          $result = Result::find($id)->update($request->all());
          return redirect()->route('result.index');
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
        $result = Result::find($id)->delete();
        return redirect()->route('result.index');
    }
    
     public function mydata()
  {
    // Userモデルに定義したリレーションを使用してデータを取得する．
    $results = User::query()
      ->find(Auth::user()->id)
      ->userResults()
      ->orderBy('created_at','desc')
      ->get();
    return response()->view('result.index', compact('results'));
  }
}
