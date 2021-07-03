<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        return [
            'name'=>'required',
            'username'=>'required|unique:tourists',
            'email'=>'required|unique:tourists',
            'password'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg'
        ];
    }
}
// $newImageName = time().'-'.$reg->name.'.'.$reg->image->extension();
        // $reg->image->move(public_path('images'),$newImageName);
        // $user = Tourist::create([
        //     'name'=>$reg->input('name'),
        //     'username'=>$reg->input('username'),
        //     'email'=>$reg->input('email'),
        //     'password'=>$reg->input('password'),
        //     'image'=>$newImageName
        // ]);