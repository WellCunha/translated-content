<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdatePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this-> segment(2);

$rules = [ 'cpf' =>  ['nullable', 'min:3', 'max:11', Rule::unique('posts')->ignore($id),

         ],

           'rg'  =>  ['nullable', 'min:3', 'max:12', Rule::unique('posts')->ignore($id),
         ],



        'nome' => ['required', 'min:2', 'max:160'],
        'alcunha' => ['nullable', 'min:2', 'max:160'],
        'content' => ['nullable', 'min:5', 'max:10000'],
        'image'   => ['required', 'image'],
        'title' => ['nullable', 'min:3', 'max:160'],
        'orcrim'=> ['nullable', 'min:2', 'max:160'],
        'hierarquia'=> ['nullable', 'min:2', 'max:160'],
        'nivel_de_seguranca'=> ['nullable', 'min:3', 'max:160'],
        'colaborador'=> ['nullable',  'max:160'],
        'ccaps'=> ['nullable', 'min:3', 'max:160'],
        'data_nascimento'=> ['nullable', 'min:3', 'max:160'],
        'genero'=> ['nullable', 'min:3', 'max:160'],
        'uf'=> ['nullable', 'min:2', 'max:160'],
        'nascionalidade'=> ['nullable', 'min:3', 'max:160'],
        'mae'=> ['nullable', 'min:3', 'max:160'],
        'pai'=> ['nullable', 'min:3', 'max:160'],
        'cidade'=> ['nullable', 'min:3', 'max:160'],
        'bairro'=> ['nullable', 'min:3', 'max:160'],
        'endereco'=> ['nullable', 'min:3', 'max:160'],
        'cep'=> ['nullable', 'min:3', 'max:8'],
        'obs'=> ['nullable', 'min:3', 'max:10000'],
        'dados_senciveis'=> ['nullable', 'min:3', 'max:10000'],


    ];

        iF ($this-> method() == 'PUT')
        {
            $rules ['image'] = ['nullable', 'image'];
        }
        return $rules;

    }
}
