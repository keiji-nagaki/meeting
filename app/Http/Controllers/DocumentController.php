<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Document;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $documents = Document::getAllOrderByUpdated_at();
        return response()->view('document.index',compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('document.create');
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
            'document_name' => 'required',
            'document' => 'required',
          ]);
          // バリデーション:エラー
          if ($validator->fails()) {
            return redirect()
              ->route('document.create')
              ->withInput()
              ->withErrors($validator);
          }
        
  
        // dd($request->all());
        $document = new document();
        
         $document->document_name=request()->document_name;
         
         if(request('document')){
            //  ファイル名をオリジナル名に変更する
             $original = $request->file('document')->getClientOriginalName();
            //  ファイル名が被らないように日時を名前に加える
             $name=date('Ymd_His').'_'.$original;
            //  dd($name);
            
            // リクエストのファイル（レポート）をストレージ配下のレポートに$nameとういう名前で保存する
            // $path = \Storage::put('/public/report', $name);
             $request->file('document')->move('storage/app/public/document',$name);
            //  レポートの名前
              $document->document=$name;
         }
        //  dd($report->report);
         
        $document->save();
        
          // create()は最初から用意されている関数
          // 戻り値は挿入されたレコードの情報

          // ルーティング「tweet.index」にリクエスト送信（一覧ページに移動）
          return redirect()->route('document.index');
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
