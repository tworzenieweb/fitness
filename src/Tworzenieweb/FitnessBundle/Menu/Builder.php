<?php
namespace Tworzenieweb\FitnessBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    
    /**
     *
     * @param FactoryInterface $factory
     * @param array $options
     * @return type 
     */
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->setCurrentUri($this->container->get('request')->getRequestUri());
        
        
        $em = $this->container->get('doctrine.orm.entity_manager');
        
        $qb = $em->createQueryBuilder();
        $qb->add('select', 'a.title, a.slug')
        ->add('from', 'Tworzenieweb\FitnessBundle\Entity\Page a')
        ->add('orderBy', 'a.position ASC');
        
        $rs = $qb->getQuery()->getArrayResult();
        
        foreach($rs as $object) {
            
            $menu->addChild($object['title'], 
                array('route' => 'pages', 'routeParameters' => array('page' => $object['slug']), 
                    'attributes' => array('class' => 'two columns')));
            
        }
        
        
//        $menu->addChild('O nas', 
//                array('route' => 'pages', 'routeParameters' => array('page' => 'o-nas'), 
//                    'attributes' => array('class' => 'two columns')));
//        $menu->addChild('Zajęcia', 
//                array('route' => 'pages', 'routeParameters' => array('page' => 'zajecia'),
//                    'attributes' => array('class' => 'two columns')));
//        $menu->addChild('Grafik', 
//                array('route' => 'pages', 'routeParameters' => array('page' => 'grafik'), 'attributes' => array('class' => 'two columns')));
//        $menu->addChild('Galeria', 
//                array('route' => 'pages', 'routeParameters' => array('page' => 'galeria'),
//                    'attributes' => array('class' => 'two columns')));
//        $menu->addChild('Cennik', 
//                array('route' => 'pages', 'routeParameters' => array('page' => 'cennik'),
//                    'attributes' => array('class' => 'two columns')));
        $menu->addChild('Kontakt', 
                array('route' => 'contact', 'attributes' => array('class' => 'two columns')));
        
        return $menu;
    }
}