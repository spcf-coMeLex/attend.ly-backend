<?php

namespace App\Repositories\Employee;

use App\Repositories\BaseRepository;

class CreateEmployeeRepository extends BaseRepository
{
    public function execute($request)
    {
        $
        if ($this->user()->employee->branch->type == "MAIN") {
            
        } else{
            return $this->error("You're not authorized to create school calendar enrollment");
        }

        return $this->success('School calendar enrollment created successfully');
    }
}
