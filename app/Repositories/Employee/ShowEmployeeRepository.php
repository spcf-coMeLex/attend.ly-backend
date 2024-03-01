<?php

namespace App\Repositories\Employee;

use App\Repositories\BaseRepository;

use App\Models\Employee\Employee;
use Illuminate\Support\Facades\Hash;

class CreateEmployeeRepository extends BaseRepository
{
    public function execute($request)
    {
        if (Employee::where('principal_id', $request->principal_id)->first() != null) {
            $data = [];
            $hashData = Hash::make();
        } else{
            return $this->error("You're not authorized to create school calendar enrollment");
        }


        return $this->success('School calendar enrollment created successfully', $hashData);
    }
}
