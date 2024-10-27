<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Employee;


class HumanService
{
  public function update(Request $request, Employee $employee): Employee|bool
  {
      // return $employee->update(array_merge(
      //     $request->validated(),
      //     array('nama' => $request->nama, 'register' => $request->register)
      // ));

    //   return $employee->update(array(
    //     'name' => $employee->name,
    //     'register' => $employee->register
    //     // 'data' => json_encode($request->validated())
    // ));

    return $employee->update(array_merge(
      $request->validated(),
      array(
        'register' => $request->register,
        'nama' => $request->nama,
      )
    ));
  }
}
