
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
    <title>Cadastro Características</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" action="{{route('cadastroFabricante')}}" method="POST">
            @csrf

            <span class="contact100-form-title">
					Cadastro Fabricante
				</span>
            <div class="wrap-input100 validate-input bg1" data-validate="Entre com o fabricante da vacina">
                <span class="label-input100">Fabricante*</span>
                <input class="input100" type="text" name="descricao_fabricante">
            </div>

            <button class="contact100-form-btn" type="submit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
            </button>
        </form>
    </div>
</div>

<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" action="{{route('cadastroDoenca')}}" method="POST">
            @csrf

            <span class="contact100-form-title">
					Cadastro Doenca
				</span>
            <div class="wrap-input100 validate-input bg1" data-validate="Entre com a doenca">
                <span class="label-input100">Doenca*</span>
                <input class="input100" type="text" name="descricao_doenca">
            </div>

            <button class="contact100-form-btn" type="submit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
            </button>
        </form>
    </div>
</div>


{{--Cadastro da Vacina--}}

<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form"  action="{{route('cadastroVacina')}}" method="POST">
            @csrf
            <span class="contact100-form-title">
                    Cadastro Vacina
                </span>

            <div class="wrap-input100 validate-input bg1" data-validate="Entre com o nome da vacina">
                <span class="label-input100">Vacina*</span>
                <input class="input100" type="text" name="nome_vacina" >
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate="Entre com a quantidade de doses">
                <span class="label-input100">Quantidade de doses*</span>
                <input class="input100" type="text" name="quantidade_doses_necessarias" >
            </div>

            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Fabricante*</span>
                <div>
                    <select class="js-select2" name="id_fabricante">
                        <option value ="" selected disabled hidden>Selecione</option>
                        @foreach($fabricante as $fabricantes)
                            <option value="{{$fabricantes->id_fabricante}}">{{$fabricantes->descricao_fabricante}}</option>
                        @endforeach
                    </select>

                    <div class="dropDownSelect2"></div>
                </div>
            </div>

            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Doença*</span>
                <div>
                    <select class="js-select2" name="id_doenca">
                        <option value ="" selected disabled hidden>Selecione</option>
                        @foreach($doenca as $doencas)
                            <option value="{{$doencas->id_doenca}}">{{$doencas->descricao_doenca}}</option>
                        @endforeach
                    </select>

                    <div class="dropDownSelect2"></div>
                </div>
            </div>

            <button class="contact100-form-btn" type="submit">
                        <span>
                            Submit
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
            </button>
        </form>
    </div>
</div>

{{--Cadastro vacina lotes--}}
<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form"  action="{{route('vacinalote')}}" method="POST">
            @csrf
            <span class="contact100-form-title">
                    Cadastro Vacina Lotes
                </span>

            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Vacina*</span>
                <div>
                    <select class="js-select2" name="id_vacina">
                        <option value ="" selected disabled hidden>Selecione</option>
                        @foreach($vacina as $vacinas)
                            <option value="{{$vacinas->id_vacina}}">{{$vacinas->nome_vacina}}</option>
                        @endforeach
                    </select>

                    <div class="dropDownSelect2"></div>
                </div>
            </div>

            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Lote*</span>
                <div>
                    <select class="js-select2" name="id_lote">
                        <option value ="" selected disabled hidden>Selecione</option>
                        @foreach($lote as $lotes)
                            <option value="{{$lotes->id_lote}}">{{$lotes->numero_lote}}</option>
                        @endforeach
                    </select>

                    <div class="dropDownSelect2"></div>
                </div>
            </div>

            <button class="contact100-form-btn" type="submit">
                        <span>
                            Submit
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
            </button>
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
