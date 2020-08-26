<?php


namespace usuario;


class DeMolay extends \ControllerAbstract{
	private int     $iGrau;
	private int     $iCodCapitulo;
	private string  $nome;

	private const GRAU_INICIATICO   = 1;
	private const GRAU_DEMOLAY      = 2;
	private const GRAU_CAVALEIRO    = 3;

	public function getDeMolay(int $iCodDeMolay){
		$sql = "";
	}


}