<?php

namespace Pmiguelima\CorreiosBundle\Util;


use Pmiguelima\CorreiosBundle\Entity\CorreiosFreteParameter;

class CorreiosRequester {
	const RASTREIO_PATH =  "http://webservice.correios.com.br/service/rastro/Rastro.wsdl";
	const FRETE_PATH = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx?WSDL';

	static public function rastreio( $codigo ){
		$data = [
			'usuario'   => '10400842',
			'senha'     => 'q2u43',
			'tipo'      => 'L',
			'resultado' => 'T',
			'lingua'    => '101',
			'objetos'  => $codigo
		];

		$soap = new \SoapClient( self::RASTREIO_PATH );

		$result =  $soap->buscaEventos($data);

		if(is_object($result)){
			return $result->return;
		}else{
			return false;
		}
	}

	static public function frete(CorreiosFreteParameter $info){
		$data = [
			'nCdEmpresa' => $info->getCodigoEmpresa(),
			'sDsSenha'=> $info->getSenha(),

			'nCdFormato'=>$info->getFormato(),
			'nCdServico'=>$info->getTipoServico(),

			'sCepOrigem'=>$info->getCepOrigem(),
			'sCepDestino'=>$info->getCepDestino(),

			'nVlPeso'=>$info->getPeso(),

			'nVlComprimento'=>$info->getComprimento(),
			'nVlAltura'=>$info->getAltura(),
			'nVlLargura'=>$info->getLargura(),

			'nVlDiametro'=>$info->getDiametro(),
			'sCdMaoPropria'=>$info->getMaoPropria(),
			'nVlValorDeclarado'=>$info->getValorDeclarado(),
			'sCdAvisoRecebimento'=>$info->getAvisoRecebimento(),

			'sDtCalculo' => date('d/m/Y'),
		];
		var_dump($data);

		$soap = new \SoapClient( self::FRETE_PATH, array(
			'trace' => true,
			'exceptions' => true,
			'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
			'connection_timeout' => 1000
		));

		$result = $soap->CalcPrecoPrazoData($data);

		if(is_object($result)){
			return $result->CalcPrecoPrazoDataResult->Servicos->cServico;
		}else{
			return false;
		}
	}
}