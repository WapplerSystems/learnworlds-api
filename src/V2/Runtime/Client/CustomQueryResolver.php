<?php

namespace WapplerSystems\LearnWorldsApi\V2\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;
interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}