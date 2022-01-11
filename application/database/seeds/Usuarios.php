<?php

class Usuarios extends Seeder
{
    private $table = 'usuarios';

    public function run()
    {
        echo "Running Usuarios Seeder";

        //seed records manually
        $data = [
            'idUsuarios' => 1,
            'nome' => 'Admin',
            'rg' => '',
            'cpf' => '',
            'cep' => '06541-038',
            'rua' => 'Av. Yojiro Takaoka',
            'numero' => '4384',
            'bairro' => 'Alphaville',
            'cidade' => 'Santana de Parnaíba',
            'estado' => 'SP',
            'email' => 'contato@arbidsofts.net',
            'senha' => '',
            'telefone' => '11 4272-0995',
            'celular' => '11 96022-6175',
            'situacao' => 1,
            'dataCadastro' => '2022-01-01',
            'permissoes_id' => 1,
            'dataExpiracao' => '2102-01-01',
        ];
        $this->db->insert($this->table, $data);

        echo PHP_EOL;
    }
}
