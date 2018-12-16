<?php
/** 
 * 	This extension is just a skeleton and only outputs a simple message 
 * 	to illustrate the structure of an Automad extension.
 * 	
 * 	Adapt the namespace to your vendor name in your composer.json. 
 * 	Following the example in README.md, your namespace would be "YourVendor".
 */

namespace Automad;


/**
 *	Include the following line to make sure that your extension can only 
 *	be called from Automad.	
 */

defined('AUTOMAD') or die('Direct access not permitted!');


/**
 *	Again, according to the example in the README.md,
 *	change your class name to "YourExtension".
 */

class Extension {
	
	
	/**
	 * 	This is the main function. It will be called when using the extension in a template. 
	 * 	As an example, this function will just output a little welcome message. 
	 * 	The "message" option can be used to change the message text.
	 * 	    
	 *  Your main function must have the same name as your class 
	 *  and therefore would be named "YourExtension($options, $Automad)"
	 *
	 * 	@param array $options
	 * 	@param object $Automad
	 * 	@return string the output of your extension
	 */
	
	public function Extension($options, $Automad) {
		
		// Define some defaults.
		$defaults = array(
			'message' => 'Welcome to'
		);
		
		// Merge defaults with options.
		$options = array_merge($defaults, $options);
		
		// Get the currently requested page.
		$Page = $Automad->Context->get();
		
		// Return the output of your extension.
		// Here it is just a simple example message.
		return $options['message'] . ' ' . $Page->url;
		
	}
	
	
}