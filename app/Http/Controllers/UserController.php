<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use Auth;
use App\User;

class UserController extends Controller
{
  //login and register
  public $successStatus = 200;

  //login api
  public function login(Request $request){
    if(Auth::attempt(['email'=> $request->email, 'password' => $request->password])){
      $user = Auth::user();
      $success['token'] = $user->createToken('qbooze')->accessToken;
      $success['name'] = $user;
      return response()->json(['success'=>$success], $this->successStatus);
    }else{
      return response()->json(['error'=>'Unauthorised', 401]);

    }
  }
      //register api
      public function register(Request $request){
        $validator = Validator::make($request->all(), ['name' => 'required', 'email' => 'required|email', 'cpassword' => 'required|same:password']);
        if($validator->fails()){
          return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        unset($input['cpassword']);
        $user = User::create($input);
        $success['token'] = $user->createToken('qbooze')->accessToken;
        $success['name'] = $user->name;

        return response()->json(['success'=>$success], $this->successStatus);

      }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        //
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
