<?php
class PageDefinitions {
   // Register any render callbacks with the parser
   public static function onParserSetup( &$parser ) {

      // Create a function hook associating the "example" magic word with renderExample()
      $parser->setFunctionHook( 'example', 'PageDefinitions::renderExample' );
   }

   // Render the output of {{#example:}}.
   public static function renderExample( $parser, $param1 = '', $param2 = '', $param3 = '' ) {

      // The input parameters are wikitext with templates expanded.
      // The output should be wikitext too.
      $output = "param1 is $param1 and param2 is $param2 and param3 is $param3";

      return $output;
   }
}
