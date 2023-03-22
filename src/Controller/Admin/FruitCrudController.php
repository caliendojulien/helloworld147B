<?php

namespace App\Controller\Admin;

use App\Entity\Fruit;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FruitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Fruit::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
