<?php

namespace App\Http\Controllers;

use App\Models\Centro_de_formacao;
use App\Http\Controllers\EdicaoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class Centros_De_FormacoesController extends Controller
{



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centros_de_formacoes = Centro_de_formacao::latest()->paginate(50);
        return view('centros_de_formacoes.index',compact('centros_de_formacoes'))
            ->with(request()->input('page'));        //
    }

    public function procurar(Request $request) {
       
        $procurar = $request->procurar;
        $centros_de_formacoes = Centro_de_formacao::where(function($query) use ($procurar){
        
        $query->where('nome', 'like', "%$procurar%");
        })
        ->get();

        return view('centros_de_formacoes.index',compact('centros_de_formacoes'))
            ->with(request()->input('page'));        //
   
     }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
               if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header('WWW-Authenticate: Basic realm="My Website"');
            header('HTTP/1.0 401 Unauthorized');
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
            exit; 
        }

            
        if ($_SERVER['PHP_AUTH_PW'] == 'ula' && $_SERVER['PHP_AUTH_USER'] == 'ula') {
            echo '<p>Access granted. You know the password!</p>';
         return view('centros_de_formacoes.create');
        } else {
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
        } 



    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::connection()->enableQueryLog();
        $request->validate([
            'nome' => 'required',
            'localizacao' => 'required',
            'vagas' => 'required',
            'imglink' => 'required',
            'imagemfau' => 'required',
        ]);

        Centro_de_formacao::create($request->all());
        $queries = DB::getQueryLog();
        return redirect()->route('centros_de_formacoes.index')
                         ->with('success','Centro de formação Criado');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Centro_de_formacao $centros_de_formaco)
    {
        
        return view ('centros_de_formacoes.show',compact('centros_de_formaco'));
    }

    public function update(Request $request, Centro_de_formacao $centros_de_formaco)
    { 
        $request->validate([
            'nome' => 'required',
            'vagas' => 'required',  
        
        ]);            
    
        $centros_de_formaco->update($request->all());
        return redirect()->route('centros_de_formacoes.index');

    }

    public function destroy(Centro_de_formacao $centros_de_formaco)
    {
        $centro->delete();
        return redirect()->route('centros_de_formacoes.index')
                         ->with('success','Produto apagado');

    }
}
