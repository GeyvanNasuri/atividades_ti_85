<?php
    // Atributos
    class Categoria{
        private $id_categoria;
        private $categoria;
        private $cat_ativo;
        
        // Métodos de acesso (Getters and Setters)
        public function getId(){
        return $this->id;
        }
        public function setId($value){
            $this->id = $value;
        }
        public function getCategoria(){
            return $this->categoria;
        }
        public function setCategoria($value){
            $this->categoria = $value;
        }
        public function getAtivo(){
            return $this->cat_ativo;
        }
        public function setAtivo($value){
            $this->cat_ativo = $value;
        }
    }
?>