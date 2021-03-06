<?php

namespace spec\Sylius\Bundle\SalesBundle\DependencyInjection;

use PHPSpec2\ObjectBehavior;

/**
 * Sylius sales extension spec.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class SyliusSalesExtension extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('Sylius\Bundle\SalesBundle\DependencyInjection\SyliusSalesExtension');
    }

    function it_should_be_container_extension()
    {
        $this->shouldHaveType('Symfony\Component\HttpKernel\DependencyInjection\Extension');
    }
}
