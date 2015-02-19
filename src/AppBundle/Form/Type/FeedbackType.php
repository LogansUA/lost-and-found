<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * FeedbackType
 *
 * @author Logans <Logansoleg@gmail.com>
 */
class FeedbackType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'email', [
                'label' => 'Your E-mail',
                'attr' => [
                    'placeholder' => 'So we can get back to you.',
                ],
            ])
            ->add('message', 'textarea', [
                'label' => 'What do you want to tell us?'
            ])
            ->add('save', 'submit', [
                'label' => 'Send',
                'attr'  => [
                    'class' => 'btn-success'
                ],
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'feedback';
    }
}