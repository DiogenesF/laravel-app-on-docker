<?php

namespace App\Http\Controllers;

use App\Models\Alergia;
use App\Models\Distrito;
use App\Models\Doenca;
use App\Models\Escolaridade;
use App\Models\EstadoCivil;
use App\Models\Fabricante;
use App\Models\Lote;
use App\Models\Pessoa;
use App\Models\PessoaVacina;
use App\Models\PlanoSaude;
use App\Models\racaCorEtnia;
use App\Models\Religiao;
use App\Models\Vacina;
use App\Models\VacinaLotes;
use Dotenv\Repository\Adapter\EnvConstAdapter;
use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function cadastroPessoa()
    {
        $estado_civil = EstadoCivil::all();
        $escolaridade = Escolaridade::all();
        $religiao = Religiao::all();
        $plano_saude = PlanoSaude::all();
        $alergia = Alergia::all();
        $distrito = Distrito::all();
        $raca_cor_etinia = racaCorEtnia::all();
        $vacina_lote = VacinaLotes::all();
        $pessoa = Pessoa::all();
        $vacina = Vacina::all();
        $lote = Lote::all();
//        dd($vacina_lote);

        return view('pessoa',compact('estado_civil','escolaridade','religiao','plano_saude','alergia','distrito','raca_cor_etinia',
                    'vacina_lote','pessoa','vacina','lote'));
    }

    public function cadastroCaracteristica()
    {
        return view('pessoa_caracteristica');
    }

    public function cadastrarEstadoCivil(Http\Request $request)
    {
        $data = $request->all();
        $estadocivil = EstadoCivil::create($data);

        return redirect(route('admin'));

    }
    public function cadastrarEscolaridade(Http\Request $request)
    {
        $data = $request->all();
        $escolaridade = Escolaridade::create($data);

        return redirect(route('admin'));

    }
    public function cadastrarReligiao(Http\Request $request)
    {
        $data = $request->all();
        $religiao = Religiao::create($data);

        return redirect(route('admin'));

    }
    public function cadastrarRacaCorEtnia(Http\Request $request)
    {
        $data = $request->all();

        $racacoretnia = racaCorEtnia::create($data);

        return redirect(route('admin'));

    }
    public function cadastrarDistrito(Http\Request $request)
    {
        $data = $request->all();
        $distrito = Distrito::create($data);

        return redirect(route('admin'));

    }

    public function cadastrarAlergia(Http\Request $request)
    {
        $data = $request->all();
        $alergia = Alergia::create($data);

        return redirect(route('admin'));

    }

    public function cadastrarPlanoSaude(Http\Request $request)
    {
        $data = $request->all();
        $plano_saude = PlanoSaude::create($data);

        return redirect(route('admin'));

    }

    public function cadastrarPessoa(Http\Request $request)
    {
        $data = $request->all();
        $pessoa = Pessoa::create($data);


        return redirect((route('cadastro')));
    }

    public function buscar()
    {
        $doenca = Doenca::all();
        $fabricante = Fabricante::all();
        $vacina = Vacina::all();
        $lote = Lote::all();
        //dd($vacina);
        return view('vacinas',compact('doenca','fabricante','lote','vacina'));
    }

    public function cadastroFabricante(Http\Request $request)
    {
        $data = $request->all();

        Fabricante::create($data);
        return redirect((route('vacina')));

    }

    public function cadastroDoenca(Http\Request $request)
    {
        $data = $request->all();

        Doenca::create($data);
        return redirect((route('vacina')));

    }
    public function cadastroVacina(Http\Request $request)
    {
        $data = $request->all();

        Vacina::create($data);
        return redirect((route('vacina')));

    }

    public function pessoaVacina(Http\Request $request)
    {
        $data = $request->all();

        PessoaVacina::create($data);

        return redirect((route('cadastro')));

    }

    public function lote()
    {

        return view('lotes');
    }

    public function cadastroLote(Http\Request $request)
    {
        Lote::create($request->all());

        return redirect((route('lote')));
    }

    public function cadastroVacinaLotes(Http\Request $request)
    {
        VacinaLotes::create($request->all());

        return redirect((route('vacina')));
    }
}
