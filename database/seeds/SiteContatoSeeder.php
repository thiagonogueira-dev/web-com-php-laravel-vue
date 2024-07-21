<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SiteContato::class, 100)->create();

        // $contato = new SiteContato();
        // $contato->nome = 'Sistema SG';
        // $contato->telefone = '122323';
        // $contato->email = 'contato@sg.com.br';
        // $contato->motivo_contato = 1;
        // $contato->mensagem = 'Bem-vindo';
        // $contato->save();
    }
}
