# Automad Extension Skeleton

You can use this package as a skeleton for new [Automad](https://automad.org) extensions. Just adapt a couple of items following the naming convention below to setup autoloading.

## Naming Convention and Autoloading

Following an existing naming scheme for Composer packages, the `name` in `composer.json` should be lowercase and dashes should be used to separate words. That rule does't apply to PHP classes and functions, since dashes are not allowed here.   
   
However, to keep things as simple as possible, extensions will be autoloaded by their namespace and class name. It is **not required** to setup autoloading in your `composer.json`. Therefore it is important to understand and follow the naming scheme described below. Note that the file name of your PHP class must be lowercase.

	Package name:   you/awesome-extension
	Class file:     packages/you/awesomeextension/awesomeextension.php
	Namespace:      You
	Class:          AwesomeExtension 
	Method:         AwesomeExtension()
