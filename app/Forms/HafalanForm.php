<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Models\Student;
use App\Models\Surah;

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
            ->add('surah_id', 'select', [
                'rules' => 'required',
                'label' => 'Nama Surah',
                'empty_value' => '-- Pilih Nama Surah --',
                'choices' => Surah::pluck('name', 'id')->toArray(),
                'attr' => [
                    'data-validation' => 'required',
                    'class' => 'js-example-basic-single form-control',
                    'data-style' => 'select-with-transition',
                ],
            ])
            ->add('juz', 'text', [
                'rules' => 'required',
                'attr' => ['data-validation' => 'required', 'placeholder' => 'contoh: 5 Juz', 'maxlength' => '2'],
                'label' => 'Juz'
            ])
            ->add('ayat_start', 'text', [
                'rules' => 'required',
                'attr' => ['data-validation' => 'required', 'placeholder' => 'contoh: ayat 150', 'maxlength' => '3'],
                'label' => 'Mulai Ayat'
            ])
            ->add('ayat_end', 'text', [
                'rules' => 'required',
                'attr' => ['data-validation' => 'required', 'placeholder' => 'contoh: ayat 250', 'maxlength' => '3'],
                'label' => 'Ayat Terakhir'
            ])
            ->add('note', 'text', [
                'rules' => 'required',
                'attr' => ['data-validation' => 'required'],
                'label' => 'Catatan'
            ])
            ->add('Kirim', 'submit', [
                'attr'  => [
                    'class' => 'btn btn-fill btn-rose pull-right',
                ],
            ]);
    }
}
