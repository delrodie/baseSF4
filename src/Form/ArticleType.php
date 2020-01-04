<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class,['attr'=>['class'=>'form-control', 'placeholder'=>"Titre de l'article",'autocomplete'=>"off"]])
            //->add('resume')
            ->add('description', TextareaType::class,['attr'=>['class'=>'form-control', 'rows'=>5]])
            ->add('tags', TextType::class,['attr'=>['class'=>'form-control', 'placeholder'=>"Mots clés",'autocomplete'=>"off"]])
            //->add('statut')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
            'translation_domain' => 'forms'
        ]);
    }
}
