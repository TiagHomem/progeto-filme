<?php
namespace APP\model;
class Diretor{
    public string $nome;
    public ?int $age;
    public ?string $phone;

    public function __construct(
        string $nome,
        ?int $age = null,
        ?string $phone = null,
    )
    {
        $this->nome = $nome;
        $this->age = $age;
        $this->phone = $phone;
    }
}