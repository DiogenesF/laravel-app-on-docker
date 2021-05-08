
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
        <form class="contact100-form validate-form" method="POST" action="{{route('cadastroLote')}}">
            @csrf
            <span class="contact100-form-title">
					Cadastro Lotes
				</span>
            <div class="wrap-input100 validate-input bg1" data-validate="Entre com o lote da vacina">
                <span class="label-input100">Número do Lote*</span>
                <input class="input100" type="text" name="numero_lote" >
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate="Entre com a data da fabricação">
                <span class="label-input100">Data fabricação*</span>
                <input class="input100" type="date" name="data_fabricacao" >
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate="Entre com a data da validade">
                <span class="label-input100">Data validade*</span>
                <input class="input100" type="date" name="data_validade" >
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate="Entre com a data da compra">
                <span class="label-input100">Data compra*</span>
                <input class="input100" type="date" name="data_compra" >
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
