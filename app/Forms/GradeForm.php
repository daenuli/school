<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\SchoolYear;

class GradeForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('teacher_id', 'select', [
                'rules' => 'required',
                'label' => 'Nama Wali Kelas',
                'empty_value' => '-- Pilih Wali Kelas --',
                'choices' => Teacher::orderBy('name')->pluck('name', 'id')->toArray(),
                'attr' => [
                    'data-validation' => 'required',
                    'class' => 'js-example-basic-single form-control',
                    'data-style' => 'select-with-transition',
                ],
            ])
            ->add('name', 'text', [
              'rules' => 'required',
              'attr' => ['data-validation' => 'required']
            ])
            ->add('Kirim', 'submit', [
                'attr'  => [
                    'class' => 'btn btn-fill btn-rose pull-right',
                ],
            ]);
    }
}
