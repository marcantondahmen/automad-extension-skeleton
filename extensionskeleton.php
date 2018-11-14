<?php
/** 
 * 	Adapt the namespace to your vendor name in your composer.json. 
 * 	Following the example in README.md, your namespace would be:
 *
 * 		namespace You;
 */

namespace Automad;


/**
 *	Include the following line to make sure that your extension can only 
 *	be called from Automad.	
 */

defined('AUTOMAD') or die('Direct access not permitted!');


/**
 *	Again, according to the example in the README.md change your class name to:
 *	
 * 		class AwesomeExtension { ... }
 *
 * 	The path of this file would than be:
 * 	packages/you/awesomeextension/awesomeextension.php
 */

class ExtensionSkeleton {
	
	
	/**
	 *  Your main function must have the same name as your class:
	 *
	 * 		public function AwesomeExtension($options, $Automad) { ... }
	 *
	 * 	@param array $options
	 * 	@param object $Automad
	 * 	@return string the output of your extension
	 */
	
	public function ExtensionSkeleton($options, $Automad) {
		
		// Define sone default for the options here.
		$defaults = array(
			'message' => 'Welcome to'
		);
		
		// Merge defaults with options.
		$options = array_merge($defaults, $options);
		
		$Page = $Automad->Context->get();
		
		return $options['message'] . ' ' . $Page->url;
		
	}
	
	
}