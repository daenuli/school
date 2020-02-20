<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class GradeForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', [
            	'rules' => 'required',
            	'attr' => ['data-validation' => 'required']
            ]);
    }
}
