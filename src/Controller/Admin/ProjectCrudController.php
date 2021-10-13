<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use App\Entity\Client;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProjectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Project::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('maintitle'),
            TextField::new('subtitle'),
            TextField::new('banner'),
            TextEditorField::new('description'),
            //TextField::new('Image','file')->setFormType(VichImageType::class),
            //TextareaField::new('file'), 
            DateField::new('date'),
            TextField::new('Client','name')->hideOnIndex(),
            BooleanField::new('state'),
        ];
    }

}
