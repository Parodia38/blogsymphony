<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Votre nom',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Vous devez ajouter votre nom',
                    ]),
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'contact.email',
                'attr' => [
                    'placeholder' => 'alain@verse.fr',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'contact.blank.email'
                    ]),
                    new Email(),
                ],
            ])
            ->add('object', ChoiceType::class, [
                'choices' => [
                    'Prise de rendez-vous' => 1,
                    'Demande ulterieur' => 2,
                ],
                'label' => false,
                'placeholder' => 'Selectionner votre objet',
                'constraints' => [
                    new NotNull(),
                ],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Votre message',
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('rgpd', CheckboxType::class, [
                'label' => 'En soumettant ce formulaire, j\'accepte que les informations saisies soient exploitées dans le cadre d\'une demande et de la relation commerciale qui peut en découler.',
                'constraints' => [
                    new NotBlank(),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
