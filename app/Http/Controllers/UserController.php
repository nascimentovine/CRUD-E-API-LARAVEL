<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;


class UserController extends Controller{

    /*********************************************************************************************
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    	return User::all();
    }


    /*********************************************************************************************
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(){
        return view('users.index', ['users' => User::all()]);
    }


    /*********************************************************************************************
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        return User::find($id);
    }


    /*********************************************************************************************
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        return view('users.edit',['user' => User::find($id)]);
    }


    /*********************************************************************************************
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update($request->all());
        return view('users.edit',['user' => User::find($id),'message' => 'Atualizado com sucesso']);;
    }


    /*********************************************************************************************
     * Display Posts of User specified.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listPosts($id){
        return Post::where('userId',$id)->get();
    }


    /*********************************************************************************************
     * Display Posts of User specified.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listPostsView($id)
    {
        return view('posts.index',['posts' => Post::where('userId',$id)->get()]);
    }


    /*********************************************************************************************
     * Create e new user.
     *
     * @return \Illuminate\Http\Response
     */
	public function create(){
        return view('users.create');
	}	


    /*********************************************************************************************
     * insert e new user of request.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request){
        User::create($request->all());
        return redirect('users');
    }   


    /*********************************************************************************************
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect('users');
        //
    }

}

