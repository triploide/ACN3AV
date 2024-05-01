<?php

class MovieEntity
{
    private $id;
    private $titulo;
    private $duracion;
    private $estreno;
    private $genero;
    private $poster;
    private $rating;

	public function getId()
    {
		return $this->id;
	}

	public function getTitulo()
    {
		return $this->titulo;
	}

	public function getDuracion()
    {
		return $this->duracion;
	}

	public function getEstreno()
    {
		return $this->estreno;
	}

    public function getEstrenoParaHumanos()
    {
		return implode('/', array_reverse(explode('-', $this->estreno)));
	}

	public function getGenero()
    {
		return $this->genero;
	}

	public function getPoster()
    {
		return $this->poster;
	}

	public function getRating()
    {
		return $this->rating;
	}

	public function setId($value)
	{
		$this->id = $value;
	}

	public function setTitulo($value)
	{
		$this->titulo = $value;
	}

	public function setDuracion($value)
	{
		$this->duracion = $value;
	}

	public function setEstreno($value)
	{
		$this->estreno = $value;
	}

	public function setGenero($value)
	{
		$this->genero = $value;
	}

	public function setPoster($value)
	{
		$this->poster = $value;
	}

	public function setRating($value)
	{
		$this->rating = $value;
	}
}
