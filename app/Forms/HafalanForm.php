<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Models\Student;

class HafalanForm extends Form
{
    protected $icons = '<i class="fa fa-paper-plane"></i> ';
    public function buildForm()
    {
        $this
            ->add('student_id', 'select', [
                'rules' => 'required',
                'label' => 'Nama Santri',
                'empty_value' => '-- Pilih Nama Santri --',
                'choices' => Student::pluck('name', 'id')->toArray(),
                'attr' => [
                    'data-validation' => 'required',
                    'class' => 'js-example-basic-single form-control',
                    'data-style' => 'select-with-transition',
                ],
            ])
            ->add('count', 'text', [
                'rules' => 'required',
                'attr' => ['data-validation' => 'required', 'placeholder' => 'contoh: 5 Juz', 'maxlength' => '2'],
                'label' => 'Jumlah Hafalan'
            ])
            ->add('note', 'textarea', [
                'rules' => 'required',
                'attr' => ['data-validation' => 'required'],
                'label' => 'Catatan'
            ])
            ->add('Tambahkan', 'submit', [
                'attr'  => [
                    'class' => 'btn btn-fill btn-rose pull-right',
                ],
            ]);
    }
}
