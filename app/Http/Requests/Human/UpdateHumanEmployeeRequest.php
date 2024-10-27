<?php

namespace App\Http\Requests\Human;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHumanEmployeeRequest extends FormRequest
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
            // 'idpgw' => ['required'],
            // 'idfinger' => ['required', 'string'],
            // 'id_org' => ['required', 'string'],
            'register' => ['required'],
            'nama' => ['required', 'string'],
            // 'jabatan' => ['required', 'string'],
            // 'negara' => ['required', 'string'],
            // 'workgroup' => ['required', 'string'],
            // 'jeniskerja' => ['required', 'string'],
            // 'kodespv' => ['required', 'string'],
            // 'sertifikat' => ['required', 'string'],
            // 'posisi' => ['required', 'string'],
            // 'statuspgw' => ['required', 'string'],
            // 'pendidikan' => ['required', 'string'],
            // 'alumnus' => ['required', 'string'],
            // 'jurusan' => ['required', 'string'],
            // 'lokasikerja' => ['required', 'string'],
            // 'grade' => ['required', 'string'],
            // 'alamat' => ['required', 'string'],
            // 'telp' => ['required', 'string'],
            // 'email' => ['required', 'string', 'email:rfc'],
            // 'nik' => ['required', 'string'],
            // 'agama' => ['required', 'string'],
            // 'gender' => ['required', 'string'],
            // 'goldar' => ['required', 'string'],
            // 'statuskawin' => ['required', 'string'],
            // 'tempatlahir' => ['required', 'string'],
            // 'tanggallahir' => ['required', 'string'],
            // 'tmbkontrak' => ['required', 'string'],
            // 'awal_kontrak' => ['required', 'string'],
            // 'akhir_kontrak' => ['required', 'string'],
            // 'tmbtetap' => ['required', 'string'],
            // 'sk_tetap' => ['required', 'string'],
            // 'tanggalpensiun' => ['required', 'string'],
            // 'hak_cuti' => ['required', 'string'],
            // 'tmbcuti' => ['required', 'string'],
            // 'idpenilai' => ['required', 'string'],
            // 'nama_penilai' => ['required', 'string'],
            // 'serikat' => ['required', 'string'],
            // 'statuskerja' => ['required', 'string'],
            // 'tglberhenti' => ['required', 'string'],
            // 'alasanberhenti' => ['required', 'string'],
            // 'skberhenti' => ['required', 'string'],
            // 'tglskberhenti' => ['required', 'string'],
            // 'shift' => ['required', 'string'],
            // 'input_by' => ['required', 'string'],
            // 'input_data' => ['required', 'string'],
            // 'banknama' => ['required', 'string'],
            // 'bankrekening' => ['required', 'string'],
            // 'bankatasnama' => ['required', 'string'],
            // 'npwp' => ['required', 'string'],
        ];
    }
}
