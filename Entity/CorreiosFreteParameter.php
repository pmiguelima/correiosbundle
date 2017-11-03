<?php

namespace Pmiguelima\CorreiosBundle\Entity;

/**
 * CorreiosFreteParameter
 */
class CorreiosFreteParameter
{
    /**
     * @var string
     */
    private $codigoEmpresa;

	/**
	 * @var string
	 */
    private $senha;

	/**
	 * @var int
	 */
    private $formato;

	/**
	 * @var int
	 */
    private $cepOrigem;

	/**
	 * @var int
	 */
    private $cepDestino;

	/**
	 * @var string
	 */
    private $tipoServico;

	/**
	 * @var string
	 */
    private $maoPropria;

	/**
	 * @var int
	 */
    private $valorDeclarado;

	/**
	 * @var string
	 */
    private $avisoRecebimento;

	/**
	 * @var int
	 */
    private $peso;

	/**
	 * @var int
	 */
	private $comprimento;

	/**
	 * @var int
	 */
	private $largura;

	/**
	 * @var int
	 */
	private $altura;

	/**
	 * @var int
	 */
	private $diametro;

    /**
     * Set codigoEmpresa
     *
     * @param string $codigoEmpresa
     *
     * @return CorreiosFreteParameter
     */
    public function setCodigoEmpresa($codigoEmpresa)
    {
        $this->codigoEmpresa = $codigoEmpresa;

        return $this;
    }

    /**
     * Get codigoEmpresa
     *
     * @return string
     */
    public function getCodigoEmpresa()
    {
        return $this->codigoEmpresa;
    }

	/**
	 * Get senha
	 *
	 * @return string
	 */
	public function getSenha()
	{
		return $this->senha;
	}

	/**
	 * Set senha
	 *
	 * @param string $senha
	 *
	 * @return CorreiosFreteParameter
	 */
	public function setSenha( $senha )
	{
		$this->senha = $senha;

		return $this;
	}

	/**
	 * Get formato
	 *
	 * @return int
	 */
	public function getFormato()
	{
		return $this->formato;
	}

	/**
	 * Set formato
	 *
	 * @param int $formato
	 *
	 * @return CorreiosFreteParameter
	 */
	public function setFormato( $formato )
	{
		$this->formato = $formato;

		return $this;
	}

	/**
	 * Get cepOrigem
	 *
	 * @return int
	 */
	public function getCepOrigem()
	{
		return $this->cepOrigem;
	}

	/**
	 * Set cepOrigem
	 *
	 * @param int $cepOrigem
	 *
	 * @return CorreiosFreteParameter
	 */
	public function setCepOrigem( $cepOrigem )
	{
		$this->cepOrigem = $cepOrigem;

		return $this;
	}

	/**
	 * Get cepDestino
	 *
	 * @return int
	 */
	public function getCepDestino()
	{
		return $this->cepDestino;
	}

	/**
	 * Set cepDestino
	 *
	 * @param int $cepDestino
	 *
	 * @return CorreiosFreteParameter
	 */
	public function setCepDestino( $cepDestino )
	{
		$this->cepDestino = $cepDestino;

		return $this;
	}

	/**
	 * Get tipoServico
	 *
	 * @return string
	 */
	public function getTipoServico()
	{
		return $this->tipoServico;
	}

	/**
	 * Set tipoServico
	 *
	 * @param string $tipoServico
	 *
	 * @return CorreiosFreteParameter
	 */
	public function setTipoServico( $tipoServico )
	{
		$this->tipoServico = $tipoServico;

		return $this;
	}

	/**
	 * Get maoPropria
	 *
	 * @return string
	 */
	public function getMaoPropria()
	{
		return $this->maoPropria;
	}

	/**
	 * Set maoPropria
	 *
	 * @param string $maoPropria
	 *
	 * @return CorreiosFreteParameter
	 */
	public function setMaoPropria( $maoPropria )
	{
		$this->maoPropria = $maoPropria;

		return $this;
	}

	/**
	 * Get valorDeclarado
	 *
	 * @return int
	 */
	public function getValorDeclarado()
	{
		return $this->valorDeclarado;
	}

	/**
	 * Set valorDeclarado
	 *
	 * @param int $valorDeclarado
	 *
	 * @return CorreiosFreteParameter
	 */
	public function setValorDeclarado( $valorDeclarado )
	{
		$this->valorDeclarado = $valorDeclarado;

		return $this;
	}

	/**
	 * Get avisoRecebimento
	 *
	 * @return string
	 */
	public function getAvisoRecebimento()
	{
		return $this->avisoRecebimento;
	}

	/**
	 * Set avisoRecebimento
	 *
	 * @param string $avisoRecebimento
	 *
	 * @return CorreiosFreteParameter
	 */
	public function setAvisoRecebimento( $avisoRecebimento )
	{
		$this->avisoRecebimento = $avisoRecebimento;

		return $this;
	}

	/**
	 * Get peso
	 *
	 * @return int
	 */
	public function getPeso()
	{
		return $this->peso;
	}

	/**
	 * Set peso
	 *
	 * @param int $peso
	 *
	 * @return CorreiosFreteParameter
	 */
	public function setPeso( $peso )
	{
		$this->peso = $peso;

		return $this;
	}

	/**
	 * Get comprimento
	 *
	 * @return int
	 */
	public function getComprimento()
	{
		return $this->comprimento;
	}

	/**
	 * Set comprimento
	 *
	 * @param int $comprimento
	 *
	 * @return CorreiosFreteParameter
	 */
	public function setComprimento( $comprimento )
	{
		$this->comprimento = $comprimento;

		return $this;
	}

	/**
	 * Get largura
	 *
	 * @return int
	 */
	public function getLargura()
	{
		return $this->largura;
	}

	/**
	 * Set largura
	 *
	 * @param int $largura
	 *
	 * @return CorreiosFreteParameter
	 */
	public function setLargura( $largura )
	{
		$this->largura = $largura;

		return $this;
	}

	/**
	 * Get altura
	 *
	 * @return int
	 */
	public function getAltura()
	{
		return $this->altura;
	}

	/**
	 * Set altura
	 *
	 * @param int $altura
	 *
	 * @return CorreiosFreteParameter
	 */
	public function setAltura( $altura )
	{
		$this->altura = $altura;

		return $this;
	}

	/**
	 * Get diametro
	 *
	 * @return int
	 */
	public function getDiametro() {
		return $this->diametro;
	}

	/**
	 * Set diametro
	 *
	 * @param int $diametro
	 *
	 * @return CorreiosFreteParameter
	 */
	public function setDiametro( $diametro ) {
		$this->diametro = $diametro;

		return $this;
	}

}

