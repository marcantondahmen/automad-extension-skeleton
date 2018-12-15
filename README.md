# Automad Extension Skeleton

You can use this package as a skeleton for new [Automad](https://automad.org) extensions. 
Follow the steps below to get started.

## 1. Create a New Package

Navigate to the `packages` directory in your Automad installation and create a directory for your namespace. Inside that directory create a directory for your extension. Use the following command inside the extension directory to create a new extension skeleton:

	composer create-project automad/extension-skeleton .

## 2. Edit The Class File

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

## 3. Edit The composer.json file

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

## 4. Publish Your Work

Follow the guide on [Packagist](https://packagist.org) to share your theme with other people.