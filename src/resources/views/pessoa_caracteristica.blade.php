
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
        <form class="contact100-form validate-form" action="{{route('estadocivil')}}" method="POST">
				@csrf
                <span class="contact100-form-title">
					Cadastro Estado Civil
				</span>

            <div class="wrap-input100 validate-input bg1" data-validate="Entre com o estado civil">
                <span class="label-input100">Estado Civil*</span>
                <input class="input100" type="text" name="descricao_estado_civil">
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
        <form class="contact100-form validate-form"  action="{{route('escolaridade')}}" method="POST">
            @csrf
                <span class="contact100-form-title">
                    Cadastro Escolaridade
                </span>

            <div class="wrap-input100 validate-input bg1" data-validate="Entre com a escolaridade">
                <span class="label-input100">Escolaridade*</span>
                <input class="input100" type="text" name="descricao_escolaridade" >
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
        <form class="contact100-form validate-form"  action="{{route('religiao')}}" method="POST">
            @csrf
                <span class="contact100-form-title">
                    Cadastro Religião
                </span>

            <div class="wrap-input100 validate-input bg1" data-validate="Entre com a religião">
                <span class="label-input100">Religião*</span>
                <input class="input100" type="text" name="descricao_religiao" >
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
        <form class="contact100-form validate-form"  action="{{route('racaCorEtnia')}}" method="POST">
            @csrf
                <span class="contact100-form-title">
                    Cadastro Raça, Cor e Etnia
                </span>

            <div class="wrap-input100 validate-input bg1" data-validate="Entre com a raça, cor e etnia">
                <span class="label-input100">Raça, Cor Etnia*</span>
                <input class="input100" type="text" name="descricao_raca_cor_etnia" >
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
        <form class="contact100-form validate-form"  action="{{route('planosaude')}}" method="POST">
            @csrf
                <span class="contact100-form-title">
                    Cadastro Plano de Saúde
                </span>

            <div class="wrap-input100 validate-input bg1" data-validate="Entre com o plano de saúde">
                <span class="label-input100">Plano de Saúde*</span>
                <input class="input100" type="text" name="descricao_plano_saude" >
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
        <form class="contact100-form validate-form"  action="{{route('alergia')}}" method="POST">
            @csrf
                <span class="contact100-form-title">
                    Cadastro Alergia
                </span>

            <div class="wrap-input100 validate-input bg1" data-validate="Entre com a alergia">
                <span class="label-input100">Alergia*</span>
                <input class="input100" type="text" name="descricao_alergia" >
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
        <form class="contact100-form validate-form"  action="{{route('distrito')}}" method="POST">
            @csrf
                <span class="contact100-form-title">
                    Cadastro Distrito
                </span>

            <div class="wrap-input100 validate-input bg1" data-validate="Entre com o distrito">
                <span class="label-input100">Distrito*</span>
                <input class="input100" type="text" name="descricao_distrito" >
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
