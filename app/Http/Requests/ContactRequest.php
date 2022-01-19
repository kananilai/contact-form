<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == '/'){
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'last_name'=>'required',
            'first_name'=>'required',
            'gender'=>'required',
            'email'=>'required|email',
            'post-code'=>'required|nueric',
            'address'=>'required',
            'content'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'last_name.required'=>'苗字を入力してください。',
            'first_name.required'=>'名前を入力してください。',
            'gender.required'=>'性別を選択してください。',
            'email.required'=>'メールアドレスを入力してください。',
            'email.email'=>'メールアドレスの形式で入力してください。',
            'post-code.required'=>'郵便番号をハイフンありで入力してください。',
            'post-code.numeric'=>'有音番号を正しい形式で入力してください。',
            'address.required'=>'住所を入力してください。',
            'content.required'=>'ご意見を入力して下さい。',
        ];
    }
}
