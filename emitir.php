<?php

//RECEBE OS DADOS DA PAGINA DE CONFIGURAÇÃO
include "personaliza.php";

//TRANSFORMANDO DATA DE VENCIMENTO
$mesn = $_POST['mesv']; // ve o mês setado na var mesv

switch($mesn) // transforma o mes
{
    case "1":
        $mesc = "Janeiro";
        break;
    case "2":
        $mesc = "Fevereiro";
        break;
    case "3":
        $mesc = "Março";
        break;
    case "4":
        $mesc = "Abril";
        break;
    case "5":
        $mesc = "Maio";
        break;
    case "6":
        $mesc = "Junho";
        break;
    case "7":
        $mesc = "Julho";
        break;
    case "8":
        $mesc = "Agosto";
        break;
    case "9":
        $mesc = "Setembro";
        break;
    case "10":
        $mesc = "Outubro";
        break;
    case "11":
        $mesc = "Novembro";
        break;
    case "12":
        $mesc = "Dezembro";
        break;
}

//TRANSFORMANDO O VALOR DA PROMISSORIA PARA EXTENSO
function extenso($valor = 0, $maiusculas = True) {

    $singular = array("Centavo", "Real", "Mil", "Milhão", "Bilhão", "Trilhão", "Quatrilhão");
    $plural = array("Centavos", "Reais", "Mil", "Milhões", "Bilhões", "Trilhões", "Quatrilhões");

    $c = array("", "Cem", "Duzentos", "Trezentos", "Quatrocentos", "Quinhentos", "Seiscentos", "Setecentos", "Oitocentos", "Novecentos");
    $d = array("", "Dez", "Vinte", "Trinta", "Quarenta", "Cinquenta", "Sessenta", "Setenta", "Oitenta", "Noventa");
    $d10 = array("Dez", "Onze", "Doze", "Treze", "Quatorze", "Quinze", "Dezesseis", "Dezessete", "Dezoito", "Dezenove");
    $u = array("", "Um", "Dois", "Três", "Quatro", "Cinco", "Seis", "Sete", "Oito", "Nove");

    $z = 0;
    $rt = "";

    $valor = number_format($valor, 2, ".", ".");
    $inteiro = explode(".", $valor);
    for($i=0;$i<count($inteiro);$i++)
        for($ii=strlen($inteiro[$i]);$ii<3;$ii++)
            $inteiro[$i] = "0".$inteiro[$i];

    $fim = count($inteiro) - ($inteiro[count($inteiro)-1] > 0 ? 1 : 2);
    for ($i=0;$i<count($inteiro);$i++) {
        $valor = $inteiro[$i];
        $rc = (($valor > 100) && ($valor < 200)) ? "cento" : $c[$valor[0]];
        $rd = ($valor[1] < 2) ? "" : $d[$valor[1]];
        $ru = ($valor > 0) ? (($valor[1] == 1) ? $d10[$valor[2]] : $u[$valor[2]]) : "";

        $r = $rc.(($rc && ($rd || $ru)) ? " e " : "").$rd.(($rd &&
                $ru) ? " e " : "").$ru;
        $t = count($inteiro)-1-$i;
        $r .= $r ? " ".($valor > 1 ? $plural[$t] : $singular[$t]) : "";
        if ($valor == "000")$z++; elseif ($z > 0) $z--;
        if (($t==1) && ($z>0) && ($inteiro[0] > 0)) $r .= (($z>1) ? " de " : "").$plural[$t];
        if ($r) $rt = $rt . ((($i > 0) && ($i <= $fim) &&
                ($inteiro[0] > 0) && ($z < 1)) ? ( ($i < $fim) ? ", " : " e ") : " ") . $r;
    }

    if(!$maiusculas){
        return($rt ? $rt : "zero");
    } else {

        if ($rt) $rt=ereg_replace(" E "," e ",ucwords($rt));
        return (($rt) ? ($rt) : "Zero");
    }

}

$valor = $_POST['valorp'];
$dim = extenso($valor);
$atrocar = "E";
$trocarpor = "e";
str_replace ($atrocar, $trocarpor, $dim);

$valor = number_format($valor, 2, ",", ".");

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>Recibo Sr(a). <?php $_POST['ndestinatario']; ?></title>
    <style type="text/css">
        <!--
        @import url("css/estilos.css");
        .style1 {font-family: Verdana, Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 12pt;
        }
        .style2 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 11px; }
        -->
    </style>
</head>
<body onload='window.print()'>

<!--TRATAMENTO DE DADOS DO FORMULÁRIO-->
<table width="648" height="390" border="1">
    <tr>
        <td  valign="top"><table  border="0" cellspacing="1">
                <tr>
                    <td  class="texto9">&nbsp;</td>
                    <td  class="texto9"><?php echo $emitente;?></td>
                </tr>

                <table  border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="300">&nbsp;</td>
                        <td width="216" class="recibo1">Recibo </td>
                        <td width="216" class="recibo1"> R$<?= $valor;?>
                        </td>
                    </tr>
                </table>
                <table  border="0">
                    <tr>
                        <td &nbsp;</td>
                        <td><table border="0" cellspacing="3">
                                <tr>
                                    <td  class="recibo2">Recebi (emos) de: </td>
                                    <td  class="recibod"><?= $_POST['ndestinatario'];?>&nbsp;</td>
                                </tr>
                            </table>
                            <table  border="0" cellspacing="3">
                                <tr>
                                    <td  class="recibo2">O valor de: </td>
                                    <td  class="recibo"><?= $dim;?>&nbsp;</td>
                                </tr>
                            </table>
                            <table  border="0" cellspacing="3">
                                <tr align="justify">
                                    <td width="120" class="recibo2">Referente a: </td>
                                    <td class="recibo"><?= $_POST['referente'];?>
                                        &nbsp;</td>
                                </tr>
                            </table>
                            <table  border="0" cellspacing="3">
                                <tr>
                                    <td  class="recibo2">Firmo (amos) o presente: </td>
                                    <td  class="style1"><?php echo $cidade;?>,
                                        <?= $_POST['diav'];?> de <?= $mesc;?> de <?= $_POST['anov'];?></span></td>
                                </tr>
                            </table></td>
                    </tr>
                </table>
                <table  border="0">
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <table border="0" align="center">
                    <tr>
                        <td >&nbsp;</td>
                        <td >_________________________________________________________</td>
                    </tr>
                </table>

                <table border="0" cellpadding="0" cellspacing="0" align="center">
                    <tr>
                        <td >&nbsp;</td>
                        <td >
                            <span class="recibod"><?= $_POST['nemitente'];?></span>
                        </td>
                    </tr>
                </table>

                <table border="0" cellpadding="0" cellspacing="0" align="center">
                    <tr>
                        <td >&nbsp;</td>
                        <td >&nbsp</td>
                        <td>
                            <span class="recibo"> <?= $_POST['cemitente'];?></span>
                        </td>
                    </tr>
                </table>

                </td>
                </tr>
            </table>
        </td>
    </tr>
</table>


</body>
</html>