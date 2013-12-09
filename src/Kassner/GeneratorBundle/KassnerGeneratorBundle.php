<?php

namespace Kassner\GeneratorBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class KassnerGeneratorBundle extends Bundle
{

    public function getParent()
    {
        return 'SensioGeneratorBundle';
    }

}
