<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

//vul aan als je andere invoerveld-typen wilt gebruiken in je formulier
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

//EntiteitType vervangen door b.v. KlantType
class DmonteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		//gebruiken wat je nodig hebt, de id hoeft er niet bij als deze auto increment is

        $builder
            ->add('week1', TextType::class, array ('required' => false)) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('week2', TextType::class, array ('required' => false)) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('week3', TextType::class, array ('required' => false)) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('week4', TextType::class, array ('required' => false)) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('week5', TextType::class, array ('required' => false)) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('week6', TextType::class, array ('required' => false)) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('week7', TextType::class, array ('required' => false)) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('week8', TextType::class, array ('required' => false)) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('week8', TextType::class, array ('required' => false)) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('week9', TextType::class, array ('required' => false)) //naam is b.v. een attribuut of variabele van klant
        ;
        
        //$builder
            //->add('bestelserie', IntegerType::class) //naam is b.v. een attribuut of variabele van klant
        //;



		//zie
		//http://symfony.com/doc/current/forms.html#built-in-field-types
		//voor meer typen invoer
    }
	
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'AppBundle\Entity\Dmonteur', //Entiteit vervangen door b.v. Klant
		));
	}
}

?>