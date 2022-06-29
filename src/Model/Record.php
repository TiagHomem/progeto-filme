<?php
namespace APP\Model;
class Record{
    public string $nome;
    public ?string $address;
    public string $phone;

    public function __construct(
        string $nome,
        ?string $phone,
        ?string $address = null,
    ){
     $this->nome = $nome;
     $this->address = $address;
     $this->phone = $phone;   
    }
    
}