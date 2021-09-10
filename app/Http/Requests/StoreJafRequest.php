<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJafRequest extends FormRequest
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
            'first_name'                => 'required',
            'last_name'                 => 'required',
            'email'                     => 'bail|required|email|unique:App\Jaf,email,'.$this->id,
            'phone'                     => 'required|numeric',
            'education.*'               => 'bail|required|array',
            'education.ssc.*'           => 'required',
            'education.ssc.nameofboard' => 'required',
            'education.ssc.passingyear' => 'bail|required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'education.ssc.percentage'  => 'required|numeric|min:1|max:99.99|regex:/^\d+(\.\d{1,2})?$/',
            'education.hsc.*'           => 'required',
            'education.hsc.nameofboard' => 'required',
            'education.hsc.passingyear' => 'bail|required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'education.hsc.percentage'  => 'required|numeric|min:1|max:99.99|regex:/^\d+(\.\d{1,2})?$/',
            'education.hsc.percentage'  => 'required',
            'education.bac.*'           => 'required',
            'education.bac.nameofboard' => 'required',
            'education.bac.passingyear' => 'bail|required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'education.bac.percentage'  => 'required|numeric|min:1|max:99.99|regex:/^\d+(\.\d{1,2})?$/',
            'education.bac.percentage'  => 'required',
            'education.mas.*'           => 'required',
            'education.mas.nameofboard' => 'required',
            'education.mas.passingyear' => 'bail|required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'education.mas.percentage'  => 'required|numeric|min:1|max:99.99|regex:/^\d+(\.\d{1,2})?$/',
            'education.mas.percentage'  => 'required',
            'notice_period'             => 'required',
            'expected_ctc'              => 'required',
            'current_ctc'               => 'required',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required'                   => 'First Name is required',
            'last_name.required'                    => 'Last Name is required',
            'email.required'                        => 'Email is required',
            'email.email'                           => 'Please enter valid email',
            'email.unique'                          => 'You have already submitted application with this email, please use different email address',
            'phone.required'                        => 'Phone Number is required',
            'phone.numeric'                         => 'Please enter valid phone number with only numeric value',
            'education.required'                    => 'Please enter Education details',
            'education.array'                       => 'Please enter valid Education Details',
            'education.ssc.required'                => 'Please enter SSC Education Details',
            'education.ssc.nameofboard.required'    => 'Please enter SSC name of board',
            'education.ssc.passingyear.required'    => 'Please enter SSC passing year',
            'education.ssc.passingyear.digits'      => 'Please enter only digits in SSC passing year',
            'education.ssc.passingyear.integer'     => 'Please enter only integer in SSC passing year',
            'education.ssc.passingyear.min'         => 'Can not enter less then 1900 in SSC passing year',
            'education.ssc.passingyear.max'         => 'Can not enter more then '.(date('Y')+1).' in SSC passing year',
            'education.ssc.percentage.required'     => 'Please enter SSC percentage',
            'education.ssc.percentage.max'          => 'SSC percentage may not be greater than 99.99',
            'education.ssc.percentage.min'          => 'SSC percentage must be at least 1',
            'education.ssc.percentage.numeric'      => 'SSC percentage must be a number',
            'education.hsc.required'                => 'Please enter HSC/Diploma education details',
            'education.hsc.nameofboard.required'    => 'Please enter HSC/Diploma name of board',
            'education.hsc.passingyear.required'    => 'Please enter HSC/Diploma passing year',
            'education.hsc.passingyear.digits'      => 'Please enter only digits in HSC/Diploma passing year',
            'education.hsc.passingyear.integer'     => 'Please enter only integer in HSC/Diploma passing year',
            'education.hsc.passingyear.min'         => 'Can not enter less then 1900 in HSC/Diploma passing year',
            'education.hsc.passingyear.max'         => 'Can not enter more then '.(date('Y')+1).' in HSC/Diploma passing year',
            'education.hsc.percentage.required'     => 'Please enter HSC/Diploma percentage',
            'education.hsc.percentage.max'          => 'SSC percentage may not be greater than 99.99',
            'education.hsc.percentage.min'          => 'SSC percentage must be at least 1',
            'education.hsc.percentage.numeric'      => 'SSC percentage must be a number',
            'education.bac.required'                => 'Please enter Bachelor education details',
            'education.bac.nameofboard.required'    => 'Please enter Bachelor name of board',
            'education.bac.passingyear.required'    => 'Please enter Bachelor passing year',
            'education.bac.passingyear.digits'      => 'Please enter only digits in Bachelor passing year',
            'education.bac.passingyear.integer'     => 'Please enter only integer in Bachelor passing year',
            'education.bac.passingyear.min'         => 'Can not enter less then 1900 in Bachelor passing year',
            'education.bac.passingyear.max'         => 'Can not enter more then '.(date('Y')+1).' in Bachelor passing year',
            'education.bac.percentage.required'     => 'Please enter Bachelor percentage',
            'education.bac.percentage.max'          => 'SSC percentage may not be greater than 99.99',
            'education.bac.percentage.min'          => 'SSC percentage must be at least 1',
            'education.bac.percentage.numeric'      => 'SSC percentage must be a number',
            'education.mas.required'                => 'Please enter Master education details',
            'education.mas.nameofboard.required'    => 'Please enter Master name of board',
            'education.mas.passingyear.required'    => 'Please enter Master passing year',
            'education.mas.passingyear.digits'      => 'Please enter only digits in Master passing year',
            'education.mas.passingyear.integer'     => 'Please enter only integer in Master passing year',
            'education.mas.passingyear.min'         => 'Can not enter less then 1900 in Master passing year',
            'education.mas.passingyear.max'         => 'Can not enter more then '.(date('Y')+1).' in Master passing year',
            'education.mas.percentage.required'     => 'Please enter Master percentage',
            'education.mas.percentage.max'          => 'SSC percentage may not be greater than 99.99',
            'education.mas.percentage.min'          => 'SSC percentage must be at least 1',
            'education.mas.percentage.numeric'      => 'SSC percentage must be a number',
            'notice_period.required'                => 'Notice Period is required',
            'expected_ctc.required'                 => 'Expected CTC is required',
            'current_ctc.required'                  => 'Current CTC Period is required',
        ];
    }
}
