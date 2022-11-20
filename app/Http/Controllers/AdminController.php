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

class AdminController extends Controller
{
                    // Minha Conta (ADMIN)
                    public function indexMyPerfil(){
                        $user = User::find(Auth::user()->id);
            $shop = Shop::where('id' ,'=',Auth::user()->shop_id)->first();
            if(!$shop) $shop = '';
            return view('users.perfil')->with(['shop'=>$shop, 'user'=>$user,'msg' => '']);
                    }


    // Buscar a tabela de Afiliados
    public function indexAfiliado(){
        $afiliados = User::where('user_type_id',2)->get();
        return view('admin.users')->with(["lista"=>$afiliados,"user_type"=>"Lista de Afiliados","msg" => 'afiliado']);

    }
        // Buscar a tabela de Profissionais
        public function indexProfissionais(){
            $pro = User::where('user_type_id',3)->get();
            return view('admin.users')->with(["lista"=>$pro,"user_type"=>"Lista de Profissionais","msg" => 'pro']);
    
        }
            // Buscar a tabela de Parceiros
    public function indexIndicacoes(){
        $indicacoes = Indicar::orderBy('created_at', 'DESC')->get();
        return view('admin.users')->with(["lista"=>$indicacoes,"user_type"=>"Lista de Indicações","msg" => 'indicar']);

    }

                // Bloquear User
                public function blockUser(Request $request){

                    $user = User::find($request['id_user']);
                    $user->status == 'nao-autorizado'? $user->status = 'autorizado' : $user->status = 'nao-autorizado';
                    $user->save();

                    $users = User::where('user_type_id',$request['id_user_type'])->get();
                    return view('admin.users')->with(["users"=>$users,"user_type"=>"Lista de usuários","msg" => 'success']);
            
                }

                // Delete User
                public function deleteUser(Request $request){

                    $user = User::find($request['id_user']);

    $user->delete();
    return redirect()->back()->with('msg', 'success');





                    // $user->delete();

                    // $users = User::where('user_type_id',$request['id_user_type'])->get();

                    // return view('admin.users')->with(["users"=>$users,"user_type"=>"Lista de usuários","msg" => 'success']);
                    
                    // $pro = User::where('user_type_id',3)->get();
                    // return view('admin.users')->with(["lista"=>$pro,"user_type"=>"Lista de Profissionais","msg" => 'pro']);
                

                    
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
       
          return view('admin.categoria')->with(['categorias'=>$cat, 'subcategorias'=>$subCat,'msg' => '']);
                
                        
                    }
                        
            public function modalStoreCategoria(){
                            

                            
                        $cat= Cat_Profissional::all();
                            $subCat = SubCategory::all();
           
              return view('admin.categoria')->with(['categorias'=>$cat, 'subcategorias'=>$subCat,'msg' => 'modal_store_categoria']);
                    
                            
                        }
                        
            public function storeCategoria(Request $request){
                            
                                                       $cat_new = new Cat_Profissional();
                            $cat_new->name = $request['name'];
                            $cat_new->description = $request['describe'];
                            $cat_new->save(); 
                            
                            
                            
                        $cat= Cat_Profissional::all();
                            $subCat = SubCategory::all();
           
              return view('admin.categoria')->with(['categorias'=>$cat, 'subcategorias'=>$subCat,'msg' => 'success']);
                    
                            
                        }
                        
            public function deleteCategoria(Request $request){
                            
                           $cat_new = Cat_Profissional::find($request['id']);
                            $cat_new->delete(); 
                            
                            
                            
                        $cat= Cat_Profissional::all();
                            $subCat = SubCategory::all();
           
              return view('admin.categoria')->with(['categorias'=>$cat, 'subcategorias'=>$subCat,'msg' => 'success']);
                    
                            
                        }
                        
                        
                        
                        // Sub
                        
                                    public function modalStoreSubCategoria(){
                            

                            
                        $cat= Cat_Profissional::all();
                            $subCat = SubCategory::all();
           
              return view('admin.categoria')->with(['categorias'=>$cat, 'subcategorias'=>$subCat,'msg' => 'modal_store_subcategoria']);
                    
                            
                        }
                        
            public function storeSubCategoria(Request $request){
                            
                                                       $cat_new = new SubCategory();
                            $cat_new->name = $request['name'];
                            $cat_new->description = $request['describe'];
                            $cat_new->category_id = $request['category_id'];
                            $cat_new->save(); 
                            
                            
                            
                        $cat= Cat_Profissional::all();
                            $subCat = SubCategory::all();
           
              return view('admin.categoria')->with(['categorias'=>$cat, 'subcategorias'=>$subCat,'msg' => 'success_2']);
                    
                            
                        }
                        
            public function deleteSubCategoria(Request $request){
                            
                           $cat_new = SubCategory::find($request['id']);
                            $cat_new->delete(); 
                            
                            
                            
                        $cat= Cat_Profissional::all();
                            $subCat = SubCategory::all();
           
              return view('admin.categoria')->with(['categorias'=>$cat, 'subcategorias'=>$subCat,'msg' => 'success_2']);
                    
                            
                        }
                         

}
