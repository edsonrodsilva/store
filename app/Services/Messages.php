<?php
/**
 * Created by PhpStorm.
 * User: alfju
 * Date: 9/25/2018
 * Time: 20:20
 */

namespace App\Services;


class Messages
{
    public  static function msgProduct()
    {
        $messages = [
            'sku.required'              => 'Favor informar o SKU',
            'name.required'             => 'Favor informar o NOME DO PRODUTO',
            'name.string'               => 'Favor informar o NOME DO PRODUTO como texto',
            'name.min'                  => 'Favor informar o NOME DO PRODUTO com mínimo 5 caracteres',
            'name.max'                  => 'Favor informar o NOME DO PRODUTO com máximo 100 caracteres',
            'name.unique'               => 'Este NOME DO PRODUTO já existe',
            'description.required'      => 'Favor informar a DESCRIÇÃO',
            'meta_title.required'       => 'Favor informar o META TÍTULO',
            'meta_description.required' => 'Favor informar o META DESCRIÇÃO',
            'meta_keyword.required'     => 'Favor informar a PALAVRA CHAVE',
            'price.required'            => 'Favor informar o VALOR',
            'qty.required'              => 'Favor informar a QUANTIDADE',
        ];

        return $messages;
    }

    public  static function msgCategory()
    {
        $messages = [
            'name.required'             => 'Favor informar o NOME DA CATEGORIA',
            'name.string'               => 'Favor informar o NOME DA CATEGORIA como texto',
            'name.min'                  => 'Favor informar o NOME DA CATEGORIA com mínimo 5 caracteres',
            'name.max'                  => 'Favor informar o NOME DA CATEGORIA com máximo 100 caracteres',
            'name.unique'               => 'Este NOME DA CATEGORIA já existe',
            'description.required'      => 'Favor informar a DESCRIÇÃO',
        ];

        return $messages;
    }

    public  static function msgContact()
    {
        $messages = [
            'message.required'             => 'Favor informar a MENSAGEM',
        ];

        return $messages;
    }


    public  static function msgUser()
    {
        $messages = [
            'name.required'   => 'Favor informar o NOME DO USUÁRIO',
            'name.string'     => 'Favor informar o NOME DO USUÁRIO como texto',
            'name.min'        => 'Favor informar o NOME DO USUÁRIO com mínimo 5 caracteres',
            'name.max'        => 'Favor informar o NOME DO USUÁRIO com máximo 50 caracteres',
            'email.required'  => 'Favor informar o EMAIL DO USUÁRIO',
            'email.string'    => 'Favor informar o EMAIL DO USUÁRIO como texto',
            'email.min'       => 'Favor informar o EMAIL DO USUÁRIO com mínimo 5 caracteres',
            'email.max'       => 'Favor informar o EMAIL DO USUÁRIO com máximo 50 caracteres',
            'email.unique'    => 'Este EMAIL DO USUÁRIO já está em uso',
        ];

        return $messages;
    }


    public  static function msgConfig()
    {
        $messages = [
            'name.required'     => 'Favor informar o NOME DA EMPRESA',
            'name.string'       => 'Favor informar o NOME DA EMPRESA como texto',
            'name.min'          => 'Favor informar o NOME DA EMPRESA com mínimo 5 caracteres',
            'name.max'          => 'Favor informar o NOME DA EMPRESA com máximo 50 caracteres',
            'name.unique'       => 'Este NOME DA EMPRESA já está em uso',
            'contact.required'  => 'Favor informar o CONTATO DA EMPRESA',
            'email.required'    => 'Favor informar o EMAIL DA EMPRESA',
            'email.string'      => 'Favor informar o EMAIL DA EMPRESA como texto',
            'email.min'         => 'Favor informar o EMAIL DA EMPRESA com mínimo 5 caracteres',
            'email.max'         => 'Favor informar o EMAIL DA EMPRESA com máximo 50 caracteres',
            'email.unique'      => 'Este EMAIL DA EMPRESA já está em uso',
            'phone.required'    => 'Favor informar o TELEFONE',
            'about.required'    => 'Favor informar o SOBRE A EMRPESA',
            'zipcode.required'  => 'Favor informar o CEP',
            'address.required'  => 'Favor informar o ENDEREÇO',
            'district.required' => 'Favor informar o BAIRRO',
            'number.required'   => 'Favor informar o NÚMERO',
            'state.required'    => 'Favor informar o ESTADO',
            'city.required'     => 'Favor informar a CIDADE',
        ];

        return $messages;
    }

}