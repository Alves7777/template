<?php

namespace App\AbstractView;

class MasksView
{
    public function masks($mask, $str)
    {
        $str = str_replace(" ", "", $str);

        for ($i = 0; $i < strlen($str); $i++) {
            $mask[strpos($mask, "#")] = $str[$i];
        }
        return $mask;

    }
}

// return
//$cnpj = '17804682000198';
//echo Masks("##.###.###/####-##",$cnpj).'<BR>';
//
//$cpf = '21450479480';
//echo Masks("###.###.###-##",$cpf).'<BR>';
//
//$cep = '36970000';
//echo Masks("#####-###",$cep).'<BR>';
//
//$telefone = '3391922727';
//echo Masks("(##)####-####",$telefone).'<BR>';
//
//$data = '21072014';
//echo Masks("##/##/####",$data);

//$testa =  new MasksView();
//$cnpj = '17804682000198';
//$cuida =$testa->masks("##.###.###/####-##", $cnpj);

