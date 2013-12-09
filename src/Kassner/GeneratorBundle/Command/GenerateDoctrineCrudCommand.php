<?php

namespace Kassner\GeneratorBundle\Command;

use Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineCrudCommand as ParentCommand;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Kassner\GeneratorBundle\Generator\DoctrineCrudGenerator;

class GenerateDoctrineCrudCommand extends ParentCommand
{

    protected function getSkeletonDirs(BundleInterface $bundle = null)
    {
        $dirs = parent::getSkeletonDirs($bundle);
        $dirs = array(__DIR__ . '/../Resources/skeleton') + $dirs;
        return $dirs;
    }

    protected function createGenerator($bundle = null)
    {
        return new DoctrineCrudGenerator($this->getContainer()->get('filesystem'));
    }

}
