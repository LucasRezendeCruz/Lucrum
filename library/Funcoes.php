<?php

class Funcoes
{
    /**
     * gerarNomeAleatorio
     *
     * @param string $nomeArquivo 
     * @return string
     */
    public static function gerarNomeAleatorio($nomeArquivo) 
    {
        $retNome    = "";
        $arquivo    = explode(".", $nomeArquivo);
        $arqExt     = $arquivo[count($arquivo) -1 ];
        $arqNome    = str_replace('.' . $arqExt, "",  $nomeArquivo);
        $aleatorio  = rand(0, 99999);
        
        return $arqNome . '-' . $aleatorio . '.' .  $arqExt;

    }

    /**
     * strDecimais
     *
     * @param string $valor 
     * @return float
     */
    public static function strDecimais($valor)
    {
        return str_replace(",", ".", str_replace(".", "", $valor));
    } 
    /**
     * valorBr
     *
     * @param float $valor 
     * @return float
     */
    public static function valorBr($valor, $decimais = 2) 
    {
        return number_format($valor, $decimais, ",", ".");
    }

    
}