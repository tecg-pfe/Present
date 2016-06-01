<?php

    namespace App\Http\Requests;

    use App\Http\Requests\Request;

    class UpdateIndexViewRequest extends Request
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
            $id = \Auth::user()->id;

            return [
                'index_view_student_list_block'     => 'boolean',
                'index_view_classe_list_block'      => 'boolean',
                'index_view_cours_list_block'       => 'boolean',
                'index_view_student_nbr_pagination' => 'integer|min:1|max:10',
                'index_view_classe_nbr_pagination'  => 'integer|min:1|max:10',
                'index_view_cours_nbr_pagination'   => 'integer|min:1|max:10',
                'index_view_student_classe_id'      => 'integer|exists:classes,id,user_id,' . $id
            ];
        }
    }
