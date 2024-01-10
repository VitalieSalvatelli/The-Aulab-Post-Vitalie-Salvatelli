<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'title'=>'required|max:2|unique:articles',
            'subtitle'=>'required|max:500|unique:articles',
            'category'=>'required',
            'text'=>'required',
            'image'=>'required',
        ];
    }

    public function messages(){
        return [
            'title.max'=>'Titolo troppo lungo',
            'title.unique'=>'Titolo già presente',
            'subtitle.max'=>'Sottotitolo troppo lungo',
            'subtitle.unique'=>'Sottotitolo già presente',
            'category.required'=>'Seleziona una categoria',
            'text.required'=>'Inserisci il testo dell articolo',
            'image.required'=>'Seleziona un inmmagine di copertina',
        ];
    }

}
