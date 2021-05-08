
<!DOCTYPE html>

<html lang="en">
<head>
    <style>
        button {
            outline: none;
            border: none;
            background: transparent;
        }

        button:hover {
            cursor: pointer;
        }

        .container {
            max-width: 1200px;
        }

        .bg1 {background-color: #f7f7f7;}

        .container-contact100 {
            width: 100%;
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;
            background: #e6e6e6;

        }

        .wrap-contact100 {
            width: 920px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            padding: 62px 55px 90px 55px;
        }

        .contact100-form {
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .contact100-form-title {
            display: block;
            width: 100%;
            font-family: Montserrat-Black;
            font-size: 39px;
            color: #333333;
            line-height: 1.2;
            text-align: center;
            padding-bottom: 59px;
        }

        .wrap-input100 {
            width: 100%;
            position: relative;
            border: 1px solid #e6e6e6;
            border-radius: 13px;
            padding: 10px 30px 9px 22px;
            margin-bottom: 20px;
        }

        .label-input100 {
            font-family: Montserrat-SemiBold;
            font-size: 10px;
            color: #393939;
            line-height: 1.5;
            text-transform: uppercase;
        }

        .input100 {
            display: block;
            width: 100%;
            background: transparent;
            font-family: Montserrat-SemiBold;
            font-size: 18px;
            color: #555555;
            line-height: 1.2;
            padding-right: 15px;
        }    

        .container-contact100-form-btn {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-top: 20px;
            width: 100%;
        }

        .contact100-form-btn {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            width: 100%;
            height: 50px;
            background-color: #333333;
            border-radius: 25px;
            text-align: center;
            font-size: 16px;
            color: #fff;
        }    

        input {
            padding: 0;
            border: none;
            height: 40px;
        }
    </style>
    <title>Cadastro Pessoa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method="POST" action="{{route('pessoa')}}">
            @csrf
				<span class="contact100-form-title">
					Cadastro Pessoa
				</span>

            <div class="wrap-input100 validate-input bg1" data-validate="Entre com o número do SUS">
                <span class="label-input100">Número do SUS*</span>
                <input class="input100" type="text" name="numero_sus" >
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate = "Entre com seu CPF">
                <span class="label-input100">CPF *</span>
                <input class="input100" type="text" name="cpf" >
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate = "Entre com seu nome">
                <span class="label-input100">Nome Completo*</span>
                <input class="input100" type="text" name="nome" >
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate = "Entre com seu nome">
                <span class="label-input100">Idade*</span>
                <input class="input100" type="number" name="idade" >
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate = "Entre com sua data de nascimento">
                <span class="label-input100">Data Nascimento*</span>
                <input class="input100" type="date" name="data_nascimento" >
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate = "Entre com o nome da mãe">
                <span class="label-input100">Nome da mãe*</span>
                <input class="input100" type="text" name="nome_mae" >
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate = "Entre com seu sexo genérico">
                <span class="label-input100">Sexo genérico*</span>
                <input class="input100" type="text" name="sexo_genetico" >
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate = "Entre com sua rua">
                <span class="label-input100">Rua*</span>
                <input class="input100" type="text" name="rua" >
            </div>


            <div class="wrap-input100 validate-input bg1" data-validate = "Entre com o número da sua casa">
                <span class="label-input100">Número*</span>
                <input class="input100" type="number" name="numero" >
            </div>


            <div class="wrap-input100 validate-input bg1" data-validate = "Entre com o seu bairro">
                <span class="label-input100">Bairro*</span>
                <input class="input100" type="text" name="bairro" >
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate = "Entre com o seu cep">
                <span class="label-input100">CEP*</span>
                <input class="input100" type="text" name="cep" >
            </div>


            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Estado Civil*</span>
                <div>
                    <select class="js-select2" name="id_estado_civil">
                        <option value ="" selected disabled hidden>Selecione</option>
                        @foreach($estado_civil as $ec)
                            <option value="{{$ec->id_estado_civil}}">{{$ec->descricao_estado_civil}}</option>
                        @endforeach
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>


            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Escolaridade*</span>
                <div>
                    <select class="js-select2" name="id_escolaridade">
                        <option value ="" selected disabled hidden>Selecione</option>
                        @foreach($escolaridade as $escolaridades)
                            <option value="{{$escolaridades->id_escolaridade}}">{{$escolaridades->descricao_escolaridade}}</option>
                        @endforeach
                    </select>

                    <div class="dropDownSelect2"></div>
                </div>
            </div>


            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Religião*</span>
                <div>
                    <select class="js-select2" name="id_religiao">
                        <option value ="" selected disabled hidden>Selecione</option>
                        @foreach($religiao as $religiaos)
                            <option value="{{$religiaos->id_religiao}}">{{$religiaos->descricao_religiao}}</option>
                        @endforeach
                    </select>

                    <div class="dropDownSelect2"></div>
                </div>
            </div>


            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Raça, cor e etinia*</span>
                <div>
                    <select class="js-select2" name="id_raca_cor_etnia">
                        <option value ="" selected disabled hidden>Selecione</option>
                        @foreach($raca_cor_etinia as $raca_cor_etinias)
                            <option value="{{$raca_cor_etinias->id_raca_cor_etnia}}">{{$raca_cor_etinias->descricao_raca_cor_etnia}}</option>
                        @endforeach
                    </select>

                    <div class="dropDownSelect2"></div>
                </div>
            </div>

            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Plano de Saúde*</span>
                <div>
                    <select class="js-select2" name="id_plano_saude">
                        <option value ="" selected disabled hidden>Selecione</option>
                        @foreach($plano_saude as $plano_saudes)
                            <option value="{{$plano_saudes->id_plano_saude}}">{{$plano_saudes->descricao_plano_saude}}</option>
                        @endforeach
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>


            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Alergia*</span>
                <div>
                    <select class="js-select2" name="id_alergia">
                        <option value ="" selected disabled hidden>Selecione</option>
                        @foreach($alergia as $alergias)
                            <option value="{{$alergias->id_alergia}}">{{$alergias->descricao_alergia}}</option>
                        @endforeach
                    </select>

                    <div class="dropDownSelect2"></div>
                </div>
            </div>


            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Distrito*</span>
                <div>
                    <select class="js-select2" name="id_distrito">
                        <option value ="" selected disabled hidden>Selecione</option>
                        @foreach($distrito as $distritos)
                            <option value="{{$distritos->id_distrito}}">{{$distritos->descricao_distrito}}</option>
                        @endforeach
                    </select>

                    <div class="dropDownSelect2"></div>
                </div>
            </div>



            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn" type="submit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                </button>
            </div>
        </form>
    </div>
</div>
<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method="POST" action="{{route('cadastroVacinaPessoa')}}">
            @csrf
            <span class="contact100-form-title">
					Vacina
				</span>
            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Numero SUS*</span>
                <div>
                    <select class="js-select2" name="numero_sus">
                        <option value ="" selected disabled hidden>Selecione</option>
                        @foreach($pessoa as $pessoas)
                            <option value="{{$pessoas->numero_sus}}">{{$pessoas->numero_sus}}</option>
                        @endforeach
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>

            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Lote vacina*</span>
                <div>
                    <select class="js-select2" name="id_vacina_lote">
                        <option value ="" selected disabled hidden>Selecione</option>
                        @foreach($vacina_lote as $vacina_lotes)
                            <option value="{{$vacina_lotes->id_vacina_lote}}">{{$vacina->where('id_vacina',$vacina_lotes->id_vacina)->first()['nome_vacina']}}
                                {{$lote->where('id_lote',$vacina_lotes->id_lote)->first()['numero_lote']}}</option>
                        @endforeach
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate = "Entre com a data da dose">
                <span class="label-input100">Data da Dose*</span>
                <input class="input100" type="date" name="data_dose" >
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate = "Entre com a dose">
                <span class="label-input100">Dose*</span>
                <input class="input100" type="number" name="dose">
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn" type="submit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                </button>
            </div>

        </form>
    </div>
</div>



<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script>
    $(".js-select2").each(function(){
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });


        $(".js-select2").each(function(){
            $(this).on('select2:close', function (e){
                if($(this).val() == "Please chooses") {
                    $('.js-show-service').slideUp();
                }
                else {
                    $('.js-show-service').slideUp();
                    $('.js-show-service').slideDown();
                }
            });
        });
    })
</script>
</body>
</html>
