<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource
 * @ORM\Entity(repositoryClass="App\Repository\GameRepository")
 */
class Game
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Player
     * @ORM\OneToOne(targetEntity="Player")
     */
    private $player1;

    /**
     * @var Player
     * @ORM\OneToOne(targetEntity="Player")
     */
    private $player2;

    /**
     * @var Player
     * @ORM\OneToOne(targetEntity="Player")
     */
    private $whosTurn;

    /**
     * @ORM\Column(type="json")
     */
    private $grid;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isOver;

    /**
     * @var Player
     * @ORM\OneToOne(targetEntity="Player")
     */
    private $winner;

    public function getId()
    {
        return $this->id;
    }

    public function getPlayer1(): ?Player
    {
        return $this->player1;
    }

    public function setPlayer1(string $player1): self
    {
        $this->player1 = $player1;

        return $this;
    }

    public function getPlayer2(): ?Player
    {
        return $this->player2;
    }

    public function setPlayer2(string $player2): self
    {
        $this->player2 = $player2;

        return $this;
    }

    public function getWinner(): ?Player
    {
        return $this->winner;
    }

    public function setWinner(string $winner): self
    {
        $this->winner = $winner;

        return $this;
    }

    public function getWhosTurn(): ?Player
    {
        return $this->whosTurn;
    }

    public function setWhosTurn(string $whosTurn): self
    {
        $this->whosTurn = $whosTurn;

        return $this;
    }

    public function getIsOver(): ?bool
    {
        return $this->isOver;
    }

    public function setIsOver(string $isOver): self
    {
        $this->isOver = $isOver;

        return $this;
    }

    public function getGrid(): ?string
    {
        return $this->grid;
    }

    public function setGrid(string $grid): self
    {
        $this->grid = $grid;

        return $this;
    }
}
