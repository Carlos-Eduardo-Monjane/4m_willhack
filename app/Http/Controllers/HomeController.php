<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Session;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
    
            // if(Auth::user()->user_type_id == 2){
            //    return redirect('cliente.pro.favorito.index');
  
            // }
            return view('main')->with(['msg' => '']);
   
    }
    
        public function dashboard()
    {
    
            return view('main')->with(['msg' => '']);
   
    }
    
            public function registerPro()
    {
    
            return view('auth.register_pro')->with(['msg' => '']);
   
    }
    
      // REGISTRO CLIENTE : CHECKED
         public function registerProStore(Request $request)
    {
        $input_email = $request->only(['email']);

        $request_data = [
            'email' => 'required|email|unique:users,email'
        ];

        $validator = Validator::make($input_email, $request_data);



 // json is null
        if ($validator->fails()) {
            $errors = json_decode(json_encode($validator->errors()), 1);

    Session::flash('error_email', "Email já utilizado! Use outro diferente!"); 
                return back();
        } 
    
        
        // New
             User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'state' => $request['state'],
            'city' => $request['city'],
            // 'photo' => 'logo-ct-dark.png',
            'category_id' => $request['category_id'],
            'subcategory_id' => $request['subcategory_id'],
            'biography' => $request['biography'],
            'address' => $request['city'].', '.$request['state'],
            'status' => 'autorizado',
            'user_type_id' => $request['user_type_id'],
            'password' => bcrypt($request['password']),
        ]);
        
        Auth::logout(); // logging out user
        
        $userdata = array(
          'email' => $request['email'] ,
          'password' => $request['password']
        );
        
        // attempt to do the login
        if (Auth::attempt($userdata))
          {
            return view('main')->with(['msg' => '']);
          }
          else
          {
                Session::flash('error_email', "Houve erro ao criar a sua conta. Tente mais tarde!"); 
                return back();
          
          }
        
        
        
        // End New
        
    
        //     $user = new User();
        //     $user->name = $request['name'];
        //     $user->email = $request['email'];
        //                 $user->state = $request['state'];
        //                             $user->city = $request['city'];
        //                               $user->address = $request['address'];
        //     $user->phone = $request['phone'];
        //     $user->password = bcrypt($request['password']);
        //     $user->status = "autorizado";
        //     $user->user_type_id = 4;

        //     if($user->save()){
                
        //         return response()->json([
        // 'status' => 'success',
        // 'message' => 'Registrado com sucesso! Agora pode fazer o login.',
        // 'perfil' => $user,
        // 'code' => 200,
        //                     ], 200);
        //     } else {
        //         return response()->json([
        // 'status' => 'error',
        // 'message' => "Erro ao registrar!",
        // 'code' => 401,
        //                     ], 401);
        //     }
    
        //     return view('auth.register_pro')->with(['msg' => '']);
   
    }
    
  


            
    

    
    

}
