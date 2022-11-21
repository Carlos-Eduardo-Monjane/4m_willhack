<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Shop;
use App\Indicar;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use File;
use App\Cat_Profissional;
use App\SubCategory;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

        // REGISTRO USER INTERNO : CHECKED
        public function registerUser(Request $request)
        {
            $input_email = $request->only(['email']);  
            $request_data = ['email' => 'required|email|unique:users,email'];
            $validator = Validator::make($input_email, $request_data);

     // json is null
            if ($validator->fails()) {
                $errors = json_decode(json_encode($validator->errors()), 1);
                Session::flash('error', "Email já utilizado! Use outro diferente!"); 
                    return back();
            } 
        
            
            // New
               $user =  User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'address' => $request['address'],
                'function' => $request['function'],
                'phone' => $request['phone'],
                'status' => 'autorizado',
                'user_type_id' => $request['user_type_id'],
                'password' => bcrypt($request['password']),
            ]);
            
            // attempt to do the login
            if ($user) {
                // Session::flash('success', "Sucesso!"); 
                return redirect()->action('AdminController@indexUsers');
            }
              else
              {
                    Session::flash('error_email', "Houve erro ao criar a sua conta. Tente mais tarde!"); 
                    return back();
              
              }
   
        }

                // REGISTRO PACIENTE : CHECKED
                public function registerPaciente(Request $request)
                {
                    $input_email = $request->only(['email']);  
                    $request_data = ['email' => 'required|email|unique:users,email'];
                    $validator = Validator::make($input_email, $request_data);
        
                        // json is null
                    if ($validator->fails()) {
                        $errors = json_decode(json_encode($validator->errors()), 1);
                        Session::flash('error', "Email já utilizado! Use outro diferente!"); 
                            return back();
                    } 
                
                    
                    // New
                       $user =  User::create([
                        'name' => $request['name'],
                        'email' => $request['email'],
                        'address' => $request['address'],
                        'phone' => $request['phone'],
                        'status' => 'autorizado',
                        'user_type_id' => $request['user_type_id'],
                        'password' => bcrypt($request['password']),
                        'nacionalidade' => $request['nacionalidade'],
                        'naturalidade' => $request['naturalidade'],
                        'pai' => $request['pai'],
                        'mae' => $request['mae'],
                        'bairro' => $request['bairro'],
                        'state' => $request['state'],
                        'city' => $request['city'],
                        'rg' => $request['rg'],
                        'cpf' => $request['cpf'],
                        'cep' => $request['cep'],
                        'complemento' => $request['complemento'],
                    ]);
                    
                    // attempt to do the login
                    if ($user) {
                        // Session::flash('success', "Sucesso!"); 
                        return redirect()->action('AdminController@indexPaciente');
                    }
                      else
                      {
                            Session::flash('error_email', "Houve erro ao criar a sua conta. Tente mais tarde!"); 
                            return back();
                      
                      }
           
                }

                    // EDIT PACIENTE : CHECKED
                    public function editPaciente(Request $request)
                    {
                        // $request->validate([
                        //     'photo' => 'image|mimes:jpeg,png,jpg',
                        // ]);
            
                        // $imageName = $request->file('photo');
            
                        // if($imageName != NULL){
                        //     $extension = $imageName->getClientOriginalExtension();
                        //     Storage::disk('public')->put(time().'.'.$imageName->getFilename().'.'.$extension,  File::get($imageName));
                
                        //     $photo = time().'.'.$imageName->getFilename().'.'.$extension;  
                        // }

                        // $aux_photo = '';
                    
                        // $imageName != NULL ? $aux_photo = $photo : $aux_photo = Auth::user()->photo;
                        // New
                           $user =  Auth::user()->update([
                            'name' => $request['name'],
                            'email' => $request['email'],
                            'address' => $request['address'],
                            'phone' => $request['phone'],
                            'nacionalidade' => $request['nacionalidade'],
                            'naturalidade' => $request['naturalidade'],
                            'pai' => $request['pai'],
                            'mae' => $request['mae'],
                            'bairro' => $request['bairro'],
                            'state' => $request['state'],
                            'city' => $request['city'],
                            'rg' => $request['rg'],
                            'cpf' => $request['cpf'],
                            'cep' => $request['cep'],
                            'complemento' => $request['complemento'],
                        ]);
                        
                    
                        if ($user) {
                            return redirect()->action('AdminController@indexMyPerfil');
                        }
                          else
                          {
                                Session::flash('error_email', "Houve erro ao criar a sua conta. Tente mais tarde!"); 
                                return back();
                          
                          }
               
                    }


                    // Minha Conta (ADMIN)
                    public function indexMyPerfil(){
                        $user = User::find(Auth::user()->id);
            $shop = Shop::where('id' ,'=',Auth::user()->shop_id)->first();
            if(!$shop) $shop = '';
            return view('users.perfil')->with(['shop'=>$shop, 'user'=>$user,'msg' => '']);
                    }


// Store Company
public function registerCompany(Request $request){
    try{
        $request->validate([
            'photo_perfil' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = $request->file('photo_perfil');

        if($imageName != NULL){
            $extension = $imageName->getClientOriginalExtension();
            Storage::disk('public')->put(time().'.'.$imageName->getFilename().'.'.$extension,  File::get($imageName));

            $photo = time().'.'.$imageName->getFilename().'.'.$extension;  
        }


        $shop = new Shop();
        $shop->name = $request['name'];
        $shop->user_admin = Auth::user()->id;
        $shop->address = $request['address'];
        $shop->phone = $request['phone'];
        $shop->email = $request['email'];
        $imageName != NULL ? $shop->photo = $photo : $shop->photo = $shop->photo;

        $shop->razao_social = $request['razao_social'];
        $shop->bairro = $request['bairro'];
        $shop->state = $request['state'];

        $shop->city = $request['city'];
        $shop->cnpj = $request['cnpj'];
        $shop->cep = $request['cep'];

        $shop->complemento = $request['address'];
        $shop->inscricao_municipal = $request['inscricao_municipal'];
        
        $shop->save();

        $user = User::find(Auth::user()->id);
        $shop = Auth::user()->shop;
        return redirect()->action('UserController@perfil')->with(['user'=>$user, 'shop'=>$shop,'msg' => 'success']);
       }
    catch(Exception $ex){
        return view('users.perfil')->with('msg', 'error');

    }
}

                       // Buscar a tabela de Users
    public function indexUsers(){
        $users = User::where('user_type_id',4)->get();
        return view('admin/users')->with(["lista"=>$users,"user_type_id"=>4,"user_type"=>"Lista de usuários internos","msg" => 'registrant']);

    }

    // Buscar a tabela de Pacientes
    public function indexPaciente(){
        $pacientes = User::where('user_type_id',2)->get();
        return view('admin/users')->with(["lista"=>$pacientes,"user_type_id"=>2,"user_type"=>"Lista de pacientes","msg" => 'paciente']);

    }

        // Buscar a tabela de Profissionais
        public function indexProfissionais(){
            $pro = User::where('user_type_id',3)->get();
            return view('admin/users')->with(["lista"=>$pro,"user_type_id"=>3,"user_type"=>"Lista de Profissionais","msg" => 'pro']);
    
        }
            // Buscar a tabela de Parceiros
    public function indexIndicacoes(){
        $indicacoes = Indicar::orderBy('created_at', 'DESC')->get();
        return view('admin/users')->with(["lista"=>$indicacoes,"user_type"=>"Lista de Agendamentos","msg" => 'indicar']);

    }

                // Bloquear User
                public function blockUser(Request $request){

                    $user = User::find($request['id_user']);
                    $user->status == 'nao-autorizado'? $user->status = 'autorizado' : $user->status = 'nao-autorizado';
                    $user->save();

                    $users = User::where('user_type_id',$request['id_user_type'])->get();
                    return view('admin/users')->with(["users"=>$users,"user_type"=>"Lista de usuários","msg" => 'success']);
            
                }

                // Delete User
                public function deleteUser(Request $request){

                    $user = User::find($request['id_user']);

    $user->delete();
    return redirect()->back()->with('msg', 'success');





                    // $user->delete();

                    // $users = User::where('user_type_id',$request['id_user_type'])->get();

                    // return view('admin/users')->with(["users"=>$users,"user_type"=>"Lista de usuários","msg" => 'success']);
                    
                    // $pro = User::where('user_type_id',3)->get();
                    // return view('admin/users')->with(["lista"=>$pro,"user_type"=>"Lista de Profissionais","msg" => 'pro']);
                

                    
                }
                
    //NEWS
                
                // Delete News
    public function deleteNews(Request $request){
    
    $new = News::find($request['id_news']);
    $new->delete();
    
    $news = News::all();
    
    return view('main')->with(["news"=>$news, 'msg'=> 'success']);

  
    
    }
    
                    // Add News 
    public function storeNews(Request $request){
        
                    $request->validate([
                'photo_news' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $imageName = $request->file('photo_news');

            if($imageName != NULL){
                $extension = $imageName->getClientOriginalExtension();
                Storage::disk('public')->put(time().'.'.$imageName->getFilename().'.'.$extension,  File::get($imageName));
    
                $photo = time().'.'.$imageName->getFilename().'.'.$extension;  
            }
                        
        
    
    $news =  new News();
$news->title = $request['title'];
$news->message = $request['message'];
$imageName != NULL ? $news->photo = $photo : $news->photo = NULL;
$news->save();
    
    
    
    $news = News::all();
    
    return view('main')->with(["news"=>$news,'msg'=> 'success']);
    
    }
    
    public function modalStoreNews(Request $request){
            $news = News::all();
    
    return view('main')->with(["news"=>$news, 'msg' => 'modal_store_news']);

    }

    public function modalDeleteNews(Request $request){
        
        $new = News::find($request['id_news']);
        
            $news = News::all();
    
    return view('main')->with(["news"=>$news, 'msg' => 'modal_delete_news', 'new'=> $new]);

    }

    public function modalEditNews(Request $request){
        
        $new = News::find($request['id_news']);
        
            $news = News::all();
    
    return view('main')->with(["news"=>$news, 'msg' => 'modal_edit_news', 'new'=> $new]);

    }

    public function updateNews(Request $request){
        try{
                    $request->validate([
                'photo_news' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $imageName = $request->file('photo_news');

            if($imageName != NULL){
                $extension = $imageName->getClientOriginalExtension();
                Storage::disk('public')->put(time().'.'.$imageName->getFilename().'.'.$extension,  File::get($imageName));
    
                $photo = time().'.'.$imageName->getFilename().'.'.$extension;  
            }

    $news = News::find($request['id_news']);
$news->title = $request['title'];
$news->message = $request['message'];
$imageName != NULL ? $news->photo = $photo : $news->photo = $news->photo;
$news->save();
    
    
    
    $news = News::all();
    
    return view('main')->with(["news"=>$news, 'msg'=> 'success']);

           }
        catch(Exception $ex){
                $news = News::all();

            return view('main')->with(["news"=>$news, 'msg'=>'error']);

        }
    }
    
    // Categoria
            public function indexCatAndSub(){
                        
                    $cat= Cat_Profissional::all();
                        $subCat = SubCategory::all();
       
          return view('admin/categoria')->with(['categorias'=>$cat, 'subcategorias'=>$subCat,'msg' => '']);
                
                        
                    }
                        
            public function modalStoreCategoria(){
                            

                            
                        $cat= Cat_Profissional::all();
                            $subCat = SubCategory::all();
           
              return view('admin/categoria')->with(['categorias'=>$cat, 'subcategorias'=>$subCat,'msg' => 'modal_store_categoria']);
                    
                            
                        }
                        
            public function storeCategoria(Request $request){
                            
                                                       $cat_new = new Cat_Profissional();
                            $cat_new->name = $request['name'];
                            $cat_new->description = $request['describe'];
                            $cat_new->save(); 
                            
                            
                            
                        $cat= Cat_Profissional::all();
                            $subCat = SubCategory::all();
           
              return view('admin/categoria')->with(['categorias'=>$cat, 'subcategorias'=>$subCat,'msg' => 'success']);
                    
                            
                        }
                        
            public function deleteCategoria(Request $request){
                            
                           $cat_new = Cat_Profissional::find($request['id']);
                            $cat_new->delete(); 
                            
                            
                            
                        $cat= Cat_Profissional::all();
                            $subCat = SubCategory::all();
           
              return view('admin/categoria')->with(['categorias'=>$cat, 'subcategorias'=>$subCat,'msg' => 'success']);
                    
                            
                        }
                        
                        
                        
                        // Sub
                        
                                    public function modalStoreSubCategoria(){
                            

                            
                        $cat= Cat_Profissional::all();
                            $subCat = SubCategory::all();
           
              return view('admin/categoria')->with(['categorias'=>$cat, 'subcategorias'=>$subCat,'msg' => 'modal_store_subcategoria']);
                    
                            
                        }
                        
            public function storeSubCategoria(Request $request){
                            
                                                       $cat_new = new SubCategory();
                            $cat_new->name = $request['name'];
                            $cat_new->description = $request['describe'];
                            $cat_new->category_id = $request['category_id'];
                            $cat_new->save(); 
                            
                            
                            
                        $cat= Cat_Profissional::all();
                            $subCat = SubCategory::all();
           
              return view('admin/categoria')->with(['categorias'=>$cat, 'subcategorias'=>$subCat,'msg' => 'success_2']);
                    
                            
                        }
                        
            public function deleteSubCategoria(Request $request){
                            
                           $cat_new = SubCategory::find($request['id']);
                            $cat_new->delete(); 
                            
                            
                            
                        $cat= Cat_Profissional::all();
                            $subCat = SubCategory::all();
           
              return view('admin/categoria')->with(['categorias'=>$cat, 'subcategorias'=>$subCat,'msg' => 'success_2']);
                    
                            
                        }
                         

}
