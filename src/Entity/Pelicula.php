<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PeliculaRepository")
 */
class Pelicula
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $titulo;

    /**
     * @ORM\Column(type="simple_array")
     */
    private $genero = [];

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $Duracion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getGenero(): ?array
    {
        return $this->genero;
    }

    public function setGenero(array $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getDuracion(): ?string
    {
        return $this->Duracion;
    }

    public function setDuracion(string $Duracion): self
    {
        $this->Duracion = $Duracion;

        return $this;
    }
}
