<?php

namespace App\Form;

use App\Calculator\Operation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalculatorForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add("operand1", NumberType::class)
            ->add("operator", ChoiceType::class, [
                'choices' => [
                    "+" => "+",
                    "-" => "-",
                    "*" => "*",
                    "/" => "/"
                ]
            ])
            ->add("operand2", NumberType::class)
            ->add("Calculate", SubmitType::class)
            ->add("Reset", ButtonType::class);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            "data_class" => Operation::class
        ]);
    }
}
