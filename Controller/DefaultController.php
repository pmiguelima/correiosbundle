<?php

namespace Pmiguelima\CorreiosBundle\Controller;

use Pmiguelima\CorreiosBundle\Entity\CorreiosFreteParameter;
use Pmiguelima\CorreiosBundle\Utils\CorreiosRequester;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{

    /**
     * @Route("/")
     */
    public function indexAction()
    {

	    $config = $this->container->getParameter('correios');

	    $frete = new CorreiosFreteParameter();

    	$frete->setCodigoEmpresa($config['codigo_empresa']);
    	$frete->setSenha($config['senha']);

    	$frete->setFormato(1);
    	$frete->setTipoServico("04014");

    	$frete->setAltura($config['frete']['altura_minimo']);
    	$frete->setComprimento($config['frete']['comprimento_minimo']);
    	$frete->setLargura($config['frete']['largura_minimo']);
    	$frete->setDiametro($config['frete']['diametro_minimo']);

    	$frete->setPeso(25);

    	$frete->setValorDeclarado($config['frete']['valor_declarado']);
    	$frete->setMaoPropria($config['frete']['mao_propria']);
    	$frete->setAvisoRecebimento($config['frete']['aviso_recebimento']);

    	$frete->setCepOrigem(22775780);
    	$frete->setCepDestino(21073050);

    	var_dump(CorreiosRequester::frete($frete));
    	var_dump(CorreiosRequester::rastreio('OA791805146BR'));

    	die();
        return $this->render('CorreiosBundle:Default:index.html.twig');
    }

}