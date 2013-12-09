Generator Bundle
================

This project extends SensioGeneratorBundle to add custom file templates for doctrine:generate:crud

Install
-------

Add to your composer.json:

    {
        "require": {
            "kassner/generator-bundle": "dev-master"
        }
    }

Run:

    php composer.phar install

Register the bundle on Symfony:

    $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
    $bundles[] = new Kassner\GeneratorBundle\KassnerGeneratorBundle();

Generate CRUD:

    php app/console doctrine:generate:crud