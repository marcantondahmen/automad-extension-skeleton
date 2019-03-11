# Automad Extension Skeleton

You can use this package as a Composer package skeleton for new [Automad](https://automad.org) extensions. Follow the steps below to get started. Note that this guide only shows one strategy and tries to help inexperienced developers to understand the basics of package development. In case you are already familiar with Composer you will probably have your own workflow.

## 1. Create a Composer Package

Before starting to develop the actual extension, the package skeleton has to be created in a temporary location. Your extension will be cloned to the `packages` directory by Composer in a later step to create the autoloader on installation. Use the following command to create a new extension skeleton in a directory called `temp` somewhere on your computer:

	composer create-project automad/extension-skeleton temp

## 2. Initialize a Repository

Change to the `temp` directory and initialize a new Mercurial or Git repository.

## 3. Edit The composer.json file

Edit the `name` and `description` fields in the `composer.json`. To install extensions to the `packages` directory and make autoloading work, the following fields are required in an extension's `composer.json` file as well and should **not** be changed:

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

## 4. Rename and Edit The Class File

Before publishing the extension, the structure of the class file has to be defined to enable Composer to create the autoloader when the package is installed. The actual development of the extension is done in a later step. Note that it is good practice to use a combination of `YourVendor/YourExtension` to call extensions in Automad templates and set up the PHP namespace accordingly: 

    namespace YourVendor;
    class YourExtension {
        public function YourExtension($Automad, $options) {
            ...
        }
    }

Also rename the file accordingly to follow the Composer naming convention.
Such an extension could then be used later in templates like:

    <@ YourVendor/YourExtension { key: 'value' } @>

## 5. Publish Your Extension

Commit and push your new package to Bitbucket or GitHub. The temporary repository can be removed now. Follow the guide on [Packagist](https://packagist.org) to publish your extension.

## 6. Require Your Extension

The actual development of the extension has to be done within the `packages` directory of an Automad installation. Therefore navigate to the base directory of Automad and require your package like this:

	composer require vendor/package:@dev

The package will then be installed and an autoloader will be created by Composer. Note that "@dev" is needed to clone the repository to be able to commit and push your changes. 
