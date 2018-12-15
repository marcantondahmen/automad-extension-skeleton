# Automad Extension Skeleton

You can use this package as a skeleton for new [Automad](https://automad.org) extensions. 

## Class File

The autoloading of extensions is handled by the Composer autoloader. Note that it is good practice to use a combination of `YourVendor/YourExtension` to call extensions in Automad templates and set up the PHP namespace accordingly: 

    namespace YourVendor;
    class YourExtension {
        public function YourExtension($Automad, $options) {
            ...
        }
    }
    
Such an extension can then be used in templates like:

    <@ Vendor/YourExtension { key: 'value' } @>
    
Note that class names of classes autoload by Composer are case-sensitive.

## composer.json

To install extensions to the `packages` directory and make autoloading work, besides `name` and `description`, the following fields are required in an extension's `composer.json` file:

    {
        "type": "automad-package",
        "keywords": ["extension"],
        "require": {
            "automad/package-installer": "^1.1"
        },
        "autoload": {
            "classmap": [""]
        }
    }
