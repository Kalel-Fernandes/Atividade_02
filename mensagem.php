<?php

// Criando a classe Mensagem
class Mensagem implements JsonSerializable {
    // Atributos classe Mensagem
    public string $texto;
    public string $autor;
    public string $data;

    // Construtor que inicializa o objeto
    public function __construct($texto, $autor, $data) {
        // This chama atributos da própria classe
        $this->texto = $texto;
        $this->autor = $autor;
        $this->data = $data;
    }

    // Função de envio da Mensagem
    public function enviarMensagem() {
        // Forma que aparece no Body Parameter
        return "Data: " . $this->data .
               " Autor: " . $this->autor .
               " Mensagem: " . $this->texto;
    }

    // Transformando Mensagem em arquivo JSON
    public function jsonSerialize(): mixed {
        return [
            'texto' => $this->texto,
            'autor' => $this->autor,
            'data'  => $this->data
        ];
    }
}

?>