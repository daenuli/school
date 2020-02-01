<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', [
            	'rules' => 'required',
            	'attr' => ['data-validation' => 'required']
            ])
            ->add('email', 'text', [
            	'rules' => 'required|email',
                'attr' => ['data-validation' => 'required']
            ])
            ->add('password', 'password', [
                'attr' => ['data-validation' => 'required']
            ])
            ->add('role', 'choice', [
                'choices' => [1 => 'ADMIN', 2 => 'DONATUR', 3 => 'PARENT'],
                'choice_options' => [
                    'wrapper' => ['class' => 'radio role'],
                    'label_attr' => ['class' => ''],
                ],
                'attr' => ['data-validation' => 'required'],
                'selected' => [0],
                'expanded' => true,
                'multiple' => false
            ]);
    }
}
