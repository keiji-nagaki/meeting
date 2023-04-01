<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Main_user;

use Auth;

use App\Models\User;

class Main_userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $main_users = Main_user::getAllOrderByUpdated_at();
        return response()->view('main_user.index',compact('main_users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('main_user.create');
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
        'date' => 'required',
        'contact_information' => 'required',
      ]);
      // バリデーション:エラー
      if ($validator->fails()) {
        return redirect()
          ->route('main_user.create')
          ->withInput()
          ->withErrors($validator);
      }
      
          // 🔽 編集 フォームから送信されてきたデータとユーザIDをマージし，DBにinsertする
        $data = $request->merge(['user_id' => Auth::user()->id])->all();
        $result = Main_user::create($data);
    
        // tweet.index」にリクエスト送信（一覧ページに移動）
        return redirect()->route('main_user.index');

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
      $main_user = Main_user::find($id);
      return response()->view('main_user.edit', compact('main_user'));
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
        $validator = Validator::make($request->all(), [
        'date' => 'required',
        'contact_information' => 'required',
      ]);
      //バリデーション:エラー
      if ($validator->fails()) {
        return redirect()
          ->route('main_user.edit', $id)
          ->withInput()
          ->withErrors($validator);
      }
      //データ更新処理
      $result = Main_user::find($id)->update($request->all());
      return redirect()->route('main_user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $result = Main_user::find($id)->delete();
      return redirect()->route('main_user.index');
    }

}
