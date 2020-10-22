<?php

namespace App\Exports;

use App\Beneficiary;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class BeneficiaryExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Beneficiary::all();
    }
    public function headings(): array{
        return [
            '#',
            'Estado',
            'Primer Nombre',
            'Segundo Nombre',
            'Primer Apellido',
            'Segundo Apellido',
            'Tipo de documento',
            'Número de documento',
            'Fecha de Nacimiento',
            'País de Nacimiento',
            'Lugar de Nacimiento',
            'Genero',
            'Parentesco con otro familiar',
            'Estado civil',
            'Población desplazada',
            'Victima de otro tipo de violencia',
            '¿Cuál violencia?',
            'Fecha de registro',
            'Fecha de admision',
            'Peso al ingreso',
            'Talla al ingreso',
            'Estado nutricional al ingreso',
            'Nacimiento a termino',
            '¿Cuántos meses?',
            'Tipologia familiar',
            '',
            '',
            '',
            'Acepta el uso de la información',
            'fecha de resgistro en Base de datos',
            'fecha de actualización en Base de datos'
        ];
    }   
}
