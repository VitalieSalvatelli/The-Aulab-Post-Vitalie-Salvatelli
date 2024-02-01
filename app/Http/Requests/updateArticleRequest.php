<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|max:200',
            'subtitle'=>'required|max:500',
            'category_id'=>'required',
            'text'=>'required',
            'tags'=>'required',
        ];
    }

    public function messages(){
        return [
            'title.max'=>'Titolo troppo lungo',
            
            'title.required'=>'Inserisci il titolo dell articolo',
            'subtitle.max'=>'Sottotitolo troppo lungo',
            
            'subtitle.required'=>'Inserisci il sottotitolo dell articolo',
            'category_id.required'=>'Seleziona una categoria',
            'text.required'=>'Inserisci il testo dell articolo',
            'tags.required'=>'Inserisci i tag dell articolo'
        ];
    }
}
