<?php

namespace App\Http\Controllers;

use App\Indicar;
use App\Cat_Product;
use Illuminate\Http\Request;
use App\User;
use App\Shop;
use App\Oferta;
use App\Profissional_Favorito;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Mail; 
use Illuminate\Support\Str;



class IndicarController extends Controller
{
    public function index(){

        $entidade = 'admin_id';
        if(Auth::user()->user_type_id == 2){
            $entidade = 'afiliado_id';
        }
        if(Auth::user()->user_type_id == 3){
            $entidade = 'profissional_id';
        }

        $indicacoes = Indicar::where($entidade, Auth::user()->id)->get();
        $indicacoes_count = $indicacoes->count();

        $afiliados = User::where('user_type_id', 2)->get();
        $profissionais = User::where('user_type_id', 3)->get();
        return view('parceiro.indicacao')->with(["profissionais"=>$profissionais,"afiliados"=>$afiliados, "indicacoes"=>$indicacoes, "indicacoes_count"=>$indicacoes_count, 'msg' => '']);
      
       }

    public function model_store_index(Request $request){
        $entidade = 'admin_id';
        if(Auth::user()->user_type_id == 2){
            $entidade = 'afiliado_id';
        }
        if(Auth::user()->user_type_id == 3){
            $entidade = 'profissional_id';
        }

        $indicacoes = Indicar::where($entidade, Auth::user()->id)->get();
        $indicacoes_count = $indicacoes->count();

        $afiliados = User::where('user_type_id', 2)->get();
        $profissionais = User::where('user_type_id', 3)->get();
        
        // $profissionais = Profissional_Favorito::with('pro_favorito.shop')
        // ->with('pro_favorito.specialty')
        // ->with('pro_favorito.oferta_do_profissinal')
        // ->with('pro_favorito.subspecialty')->where('cliente_id', Auth::user()->id)->get();
    
        
        
        
        
        return view('parceiro.indicacao')->with(["profissionais"=>$profissionais,"afiliados"=>$afiliados, "indicacoes"=>$indicacoes, "indicacoes_count"=>$indicacoes_count, 'msg' => 'modal_cad_produto']);

    }

    public function model_store(Request $request){
        $entidade = 'admin_id';
        if(Auth::user()->user_type_id == 2){
            $entidade = 'afiliado_id';
        }
        if(Auth::user()->user_type_id == 3){
            $entidade = 'profissional_id';
        }

        $indicacoes = Indicar::where($entidade, Auth::user()->id)->get();
        $indicacoes_count = $indicacoes->count();

        $afiliados = User::where('user_type_id', 2)->get();
        // $profissionais = User::where('user_type_id', 3)->get();
        
        $profissionais = Profissional_Favorito::with('pro_favorito.shop')
        ->with('pro_favorito.specialty')
        ->with('pro_favorito.oferta_do_profissinal')
        ->with('pro_favorito.subspecialty')->where('cliente_id', Auth::user()->id)->get();
    
        
        
        return view('parceiro.indicacao')->with(["profissionais"=>$profissionais,"afiliados"=>$afiliados, "indicacoes"=>$indicacoes, "indicacoes_count"=>$indicacoes_count, 'msg' => 'modal_store']);
    }

    public function model_edit(Request $request){
        $entidade = 'admin_id';
        if(Auth::user()->user_type_id == 2){
            $entidade = 'afiliado_id';
        }
        if(Auth::user()->user_type_id == 3){
            $entidade = 'profissional_id';
        }

        $indicar = Indicar::find($request['id']);
        $indicacoes = Indicar::where($entidade, Auth::user()->id)->get();
        $indicacoes_count = $indicacoes->count();

        $afiliados = User::where('user_type_id', 2)->get();
        $profissionais = User::where('user_type_id', 3)->get();
        return view('parceiro.indicacao')->with(["profissionais"=>$profissionais,"afiliados"=>$afiliados, "indicacao"=>$indicar,"indicacoes"=>$indicacoes, "indicacoes_count"=>$indicacoes_count, 'msg' => 'model_edit']);
    }

    public function model_delete(Request $request){
        $entidade = 'admin_id';
        if(Auth::user()->user_type_id == 2){
            $entidade = 'afiliado_id';
        }
        if(Auth::user()->user_type_id == 3){
            $entidade = 'profissional_id';
        }
        

        $indicar = Indicar::find($request['id']);
        $indicacoes = Indicar::where($entidade, Auth::user()->id)->get();
        $indicacoes_count = $indicacoes->count();
        $afiliados = User::where('user_type_id', 2)->get();
        $profissionais = User::where('user_type_id', 3)->get();
        return view('parceiro.indicacao')->with(["profissionais"=>$profissionais,"afiliados"=>$afiliados, "indicacao"=>$indicar,"indicacoes"=>$indicacoes, "indicacoes_count"=>$indicacoes_count, 'msg' => 'modal_delete']);
    }

    public function editIndicarDelete(Request $request){
        $entidade = 'admin_id';
        if(Auth::user()->user_type_id == 2){
            $entidade = 'afiliado_id';
        }
        if(Auth::user()->user_type_id == 3){
            $entidade = 'profissional_id';
        }

        
        $indicar = Indicar::find($request['id']);
        $indicar->delete();

        $indicacoes = Indicar::where($entidade, Auth::user()->id)->get();
        $indicacoes_count = $indicacoes->count();
        $afiliados = User::where('user_type_id', 2)->get();
        $profissionais = User::where('user_type_id', 3)->get();
        return view('parceiro.indicacao')->with(["profissionais"=>$profissionais,"afiliados"=>$afiliados,"indicacoes"=>$indicacoes, "indicacoes_count"=>$indicacoes_count, 'msg' => '']);
    }

    public function editIndicarStatus(Request $request){
        $indicar = Indicar::find($request['id']);

        $entidade = 'admin_id';
        if(Auth::user()->user_type_id == 2){
            $entidade = 'afiliado_id';


            $indicar->cliente_nome  = $request['cliente_nome'];
            $indicar->cliente_phone = $request['cliente_phone'];
            $indicar->cliente_email = $request['cliente_email'];
            $indicar->obs = $request['obs'];
            
        }

        if(Auth::user()->user_type_id == 3){
            $entidade = 'profissional_id';

            $indicar->status = $request['status'];
            
     $pro_email = User::find(Auth::user()->id);
      $afiliado_email = User::find($indicar->afiliado_id);
      
      $request['cliente_email'] = $afiliado_email->email;
      
    if($request['cliente_email']){
        
                Mail::send('email.editIndicacao', ['profissional' => $pro_email->name, 
                'status' => $request['status']], function($message) use($request){
                $message->to($request['cliente_email']);
                $message->subject('Novo Status da Indicação...');
            });
            
    }
          
        }

        $indicar->save();

        $indicacoes = Indicar::where($entidade, Auth::user()->id)->get();
        $indicacoes_count = $indicacoes->count();
        $afiliados = User::where('user_type_id', 2)->get();
        $profissionais = User::where('user_type_id', 3)->get();
        // echo $indicar."<br>".$request['obs']."  ".$request['cliente_nome']."  ".$request['cliente_phone']."  ".$request['cliente_email'];
        return view('parceiro.indicacao')->with(["profissionais"=>$profissionais,"afiliados"=>$afiliados,"indicacoes"=>$indicacoes, "indicacoes_count"=>$indicacoes_count, 'msg' => 'success']);
    }
    
    public function storeIndicarManual(Request $request){
        try{
            $entidade = 'admin_id';


            if(Auth::user()->user_type_id == 2){
                    $afiliado_email = User::find(Auth::user()->id);
                               $pro_email = User::find($request['profissional_id']);
                $entidade = 'afiliado_id';

                $oferta = Oferta::where('profissional_id',$request['profissional_id'])->first();

                $indicacao = new Indicar();
                $indicacao->profissional_id = $request['profissional_id'];
                $indicacao->afiliado_id = Auth::user()->id ;
                if($oferta)
                $indicacao->oferta_id = $oferta->id;
                $indicacao->manual = false;
                $indicacao->cliente_nome  = $request['cliente_nome'];
                $indicacao->cliente_phone = $request['cliente_phone'];
                $indicacao->cliente_email = $request['cliente_email'];
                $indicacao->obs = $request['obs'];
                $indicacao->save();
            }


            if(Auth::user()->user_type_id == 3){
                $entidade = 'profissional_id';
                
                                    $afiliado_email = User::find($request['afiliado_id']);
                               $pro_email = User::find(Auth::user()->id);

                $oferta = Oferta::where('profissional_id',Auth::user()->id)->first();


                $indicacao = new Indicar();
                $indicacao->profissional_id = Auth::user()->id;
                $indicacao->afiliado_id = $request['afiliado_id'];
                if($oferta)
                $indicacao->oferta_id = $oferta->id;
                $indicacao->manual = true;
                $indicacao->cliente_nome  = $request['cliente_nome'];
                $indicacao->cliente_phone =  $request['cliente_phone'] ;
                $indicacao->cliente_email = $request['cliente_email'];
                $indicacao->obs = $request['obs'];
                $indicacao->save();
            }

        if($request['cliente_email']){
            Mail::send('email.indicacao', ['afiliado' => $afiliado_email->name, 'profissional' => $pro_email->name], function($message) use($request){
              $message->to($request['cliente_email']);
              $message->subject('Foste indicado...');
          });
        }
         

            $indicacoes = Indicar::where($entidade, Auth::user()->id)->get();
            $indicacoes_count = $indicacoes->count();
            $afiliados = User::where('user_type_id', 2)->get();
            $profissionais = User::where('user_type_id', 3)->get();

            return view('parceiro.indicacao')->with(["profissionais"=>$profissionais,"afiliados"=>$afiliados,"indicacoes"=>$indicacoes, "indicacoes_count"=>$indicacoes_count, 'msg' => 'success']);
           }
        catch(Exception $ex){
            return view('parceiro.indicacao')->with('msg', 'error');

        }
    }
}
