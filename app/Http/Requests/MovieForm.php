<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class MovieForm extends Request {

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
		return [
				"name"    =>    "required|min:5|max:45",
				"gender"  =>    "required|min:3|max:45"
		];
	}
        
        public function messages()
	{
	    return [
	        'name.required' => 'El campo nombre es requerido!',
	        'name.min' => 'El campo nombre no puede tener menos de 5 carácteres',
		'name.min' => 'El campo name no puede tener más de 45 carácteres',
		'gender.required' => 'El campo genero es requerido!',
	        'gender.min' => 'El campo genero no puede tener menos de 3 carácteres',
		'gender.min' => 'El campo genero no puede tener más de 45 carácteres',
	    ];
	}

}
