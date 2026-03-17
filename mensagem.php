<?php

class Mensagem implements JsonSerializable {
    public string $texto;
    public string $autor;
    public string $data;

    public function __construct($texto, $autor, $data) {
        $this->texto = $texto;
        $this->autor = $autor;
        $this->data = $data;
    }

    public function enviarMensagem() {
        return "Data: " . $this->data .
               " Autor: " . $this->autor .
               " Mensagem: " . $this->texto;
    }

    public function jsonSerialize(): mixed {
        return [
            'texto' => $this->texto,
            'autor' => $this->autor,
            'data'  => $this->data
        ];
    }
}

?>