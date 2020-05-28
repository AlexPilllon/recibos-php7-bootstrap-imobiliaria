<?php
/*--------------------------Alex Pillon gustavopillon@gmail.com ------------------------*/
/*esse sistema dedico a minha esposa e minha filhinha. Sou aprendiz de php/msql e pe�o a voc� que desfrutar desse
script que mantenha meus creditos pois como disse sou aprendiz e deu muito trabalho par fazer :D.

O justo anda na sua sinceridade; bem-aventurados ser�o os seus filhos depois dele. Prov�rbios 20:7*/
/*--------------------------------------------------------------------*/
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .container{
            padding-top: 3%;
        }
       .date {


        }
    </style>

    <title>Recibo</title>

</head>

<body>

<div class="container">

    <div class="row">

        <div class="col-xl-8 offset-xl-2">

            <h1>Gerador de Recibos</h1>

            <p class="lead"> Preencha os campos com os dados do recibo abaixo e gere eles em uma ou duas vias. </p>


            <form id="form1" name="form1" method="post" action="" role="form">

                <div class="messages"></div>

                <div class="controls">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="form_name">Recebemos de: </label>
                                <input id="ndestinatario" type="text" name="ndestinatario" class="form-control" placeholder="Preencha o nome do Destinatário" required="required"
                                       data-error="Nome é Obrigatório">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="form_lastname">CPF-CNPJ </label>
                                <input id="cdestinatario" type="text" name="cdestinatario" class="form-control" placeholder="Preencha o CPF-CPNJ do Destinatário" required="required"
                                       data-error="CPF-CNPJ é Obrigatório.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="form_name">Emissor </label>
                                <input id="nemitente" type="text" name="nemitente" class="form-control" placeholder="Preencha o nome do Emissor" required="required"
                                       data-error="Nome é Obrigatório">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="form_lastname">CPF-CNPJ</label>
                                <input id="cemitente" type="text" name="cemitente" class="form-control" placeholder="Preencha o CPF-CPNJ do Emissor" required="required"
                                       data-error="CPF-CNPJ é Obrigatório.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="form_email">Valor do Recibo</label>
                                <input id="valorp" type="email" name="valorp" class="form-control" placeholder="Insira o valor do recibo " required="required"
                                       data-error="Valor é obrigatório">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="form_message">Descrição do Recibo</label>
                        <textarea id="referente" name="referente" class="form-control" placeholder="Descreva aqui o recibo... " rows="4" required="required"
                                  data-error="Por favor descreva o recibo"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>


                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                        <input class="form-control d-none" data-recaptcha="true" required data-error="Por Favor complete o captcha">
                        <div class="help-block with-errors"></div>
                    </div>


                    <input name="Submit" type="button" class="btn btn-primary btn-send" value="Emitir Recibo"
                    OnClick="document.form1.action='emitir.php';document.form1.submit();"/>

                    <input name="Submit" type="button" class="btn btn-primary btn-send" value="Emitir recibo 2 vias"
                           OnClick="document.form1.action='emitir2vias.php';document.form1.submit();"/>

                    <p class="text-muted">
                        <strong>*</strong> Ferramenta criada e personalizada por
                        <a href="https://www.facebook.com/alexgustavo.pillon" target="_blank">Alex Pillon</a>.
                    </p>

                </div>

            </form>

        </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>
<!--/.container


<table width="1000" height="222" border="0">
    <tr>
        <td valign="top"><form id="form1" name="form1" method="post" action="">
                <table width="382" border="0" cellspacing="5">
                    <tr>
                        <td width="122" class="texto">Data de emiss&atilde;o: </td>
                        <td width="252"><select name="diav" class="form" id="diav">
                                <option selected="selected">DIA</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            /
                            <select name="mesv" class="form" id="mesv">
                                <option selected="selected">M&Ecirc;S</option>
                                <option value="1">JANEIRO</option>
                                <option value="2">FEVEREIRO</option>
                                <option value="3">MAR&Ccedil;O</option>
                                <option value="4">ABRIL</option>
                                <option value="5">MAIO</option>
                                <option value="6">JUNHO</option>
                                <option value="7">JULHO</option>
                                <option value="8">AGOSTO</option>
                                <option value="9">SETEMBRO</option>
                                <option value="10">OUTUBRO</option>
                                <option value="11">NOVEMBRO</option>
                                <option value="12">DEZEMBRO</option>
                            </select>
                            /
                            <select name="anov" class="form" id="anov">
                                <option selected="selected">ANO</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select></td>
                    </tr>

                    <tr>
                        <td class="texto">Nome(Destinat&aacute;rio):</td>
                        <td><input name="ndestinatario" type="text" class="form" id="ndestinatario" size="40" /></td>
                    </tr>
                    <tr>
                        <td><span class="texto">CPF-CNPJ(Destinat&aacute;rio):</span></td>
                        <td><input name="cdestinatario" type="text" class="form" id="cdestinatario" size="40" /></td>
                    </tr>
                    <tr>
                        <td class="texto">Nome(Emitente):</td>
                        <td><input name="nemitente" type="text" class="form" id="nemitente" size="40" /></td>
                    </tr>
                    <tr>
                        <td><span class="texto">CPF-CNPJ(Emitente):</span></td>
                        <td><input name="cemitente" type="text" class="form" id="cemitente" size="40" ></td>
                    </tr>
                    <tr>
                        <td class="texto">Valor:</td>
                        <td><input name="valorp" type="text" class="form" id="valorp" size="20" /></td>
                    </tr>
                    <tr>
                        <td class="texto">Referente a: </td>
                        <td><textarea name="referente" type="text" class="form" id="referente" rows="4"></textarea></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input name="Submit" type="button" class="form" value="Emitir Recibo"
                               OnClick="document.form1.action='emitir.php';document.form1.submit();"/>
                        <input name="Submit" type="button" class="form" value="Emitir recibo 2 vias"
                               OnClick="document.form1.action='emitir2vias.php';document.form1.submit();"/></td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>

-->
</body>
</html>
