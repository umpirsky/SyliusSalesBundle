SyliusSalesBundle [![Build status...](https://secure.travis-ci.org/Sylius/SyliusSalesBundle.png)](http://travis-ci.org/Sylius/SyliusSalesBundle)
================

Sales order bundle for Symfony2 e-commerce applications. It allows you to start building you application with sensible and flexible models.
Provides default forms, controllers, entities, mappings and everything that can help you building your perfect solution.
Includes a order builder concept which allows you to quickly build one page checkouts via default controller.
Includes order and order item total value adjustments system based on ideas from [Spree adjustments](http://guides.spreecommerce.com/adjustments.html).

Sylius
------

**Sylius**, webshop engine for Symfony2.

Visit [Sylius.org](http://sylius.org).

[phpspec2](http://phpspec.net) examples
---------------------------------------

``` bash
$ composer install --dev --prefer-dist
$ bin/phpspec run -f pretty
```

Documentation
-------------

Documentation is available on [**readthedocs.org**](http://sylius.readthedocs.org/en/latest/bundles/SyliusSalesBundle/index.html).

Code examples
-------------

If you want to see working implementation, try out the [Sylius sandbox application](http://github.com/Sylius/Sylius-Sandbox).

Contributing
------------

All informations about contributing to Sylius can be found on [this page](http://sylius.readthedocs.org/en/latest/contributing/index.html).

Mailing lists
-------------

Questions? Feel free to ask on [users mailing list](http://groups.google.com/group/sylius).  
To contribute and develop this bundle, use the [developers mailing list](http://groups.google.com/group/sylius-dev).

Sylius twitter account
----------------------

If you want to keep up with updates, [follow the official Sylius account on twitter](http://twitter.com/_Sylius).

Bug tracking
------------

This bundle uses [GitHub issues](https://github.com/Sylius/SyliusSalesBundle/issues).
If you have found bug, please create an issue.

Versioning
----------

Releases will be numbered with the format `major.minor.patch`.

And constructed with the following guidelines.

* Breaking backwards compatibility bumps the major.
* New additions without breaking backwards compatibility bumps the minor.
* Bug fixes and misc changes bump the patch.

For more information on SemVer, please visit [semver.org website](http://semver.org/).  
This versioning method is same for all **Sylius** bundles and applications.

MIT License
-----------

License can be found [here](https://github.com/Sylius/SyliusSalesBundle/blob/master/Resources/meta/LICENSE).

Authors
-------

The bundle was originally created by [Paweł Jędrzejewski](http://pjedrzejewski.com).
See the list of [contributors](https://github.com/Sylius/SyliusSalesBundle/contributors).
