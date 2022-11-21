<?php

    class Pessoa {
        public string $nome;
        public int $idade;
        protected string $cpf;
        private int $salario = 0;

        public function __construct(string $nome, int $idade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            return $this;

        }

        public function getSalario(): string
        {
            return $this->salario;
        }

        public function setSalario(int $valor): int
        {
            return $this->salario = $valor;
        }

    }



    