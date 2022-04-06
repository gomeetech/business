<?php

namespace Gomee\Business\Validators\Clients;

use Gomee\Validators\Validator as BaseValidator;

class ClientValidator extends BaseValidator
{
    public function extends()
    {
        // Thêm các rule ở đây
    }

    /**
     * ham lay rang buoc du lieu
     */
    public function rules()
    {
    
        return [
            
            'name' => 'mixed',
            'email' => 'mixed',
            'phone_number' => 'mixed',
            'avatar' => 'mixed',
            'job' => 'mixed',

        ];
    }

    /**
     * các thông báo
     */
    public function messages()
    {
        return [
            
            'name.mixed' => 'name Không hợp lệ',
            'email.mixed' => 'email Không hợp lệ',
            'phone_number.mixed' => 'phone_number Không hợp lệ',
            'avatar.mixed' => 'avatar Không hợp lệ',
            'job.mixed' => 'job Không hợp lệ',

        ];
    }
}