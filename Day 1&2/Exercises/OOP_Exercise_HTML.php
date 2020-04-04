<?php

/*
  Part 1 : 

  Design an HtmlString class.

  It is intended to display bold and / or italic text.

  It will have the following methods:

  - setString ($string)
  Sets the string

  - getString ()
  Get the string

  - getBoldString()
  Get a bold version of the string

  - getItalicString ()
  Get an italic version of the string

  - getItalicBoldString ()
  Get a bold italic version of the string

  Be careful, put the class declaration in a separate file!

  Use Example :
 */

require_once 'inc/HtmlString.php';

$markup = new HtmlString('REEEE');
$markup->setString('REEEE');
$bold = $markup->getBoldString();

echo $bold; /* Display <b>My strinnnng</b> */

/*
  Part 2 :

  Make it possible to directly create a HtmlString object
  with string in parentheses :

 */

$markup = new HtmlString('REEEE');
echo $markup->getBoldString();
echo $markup->getItalicString();
echo $markup->getItalicBoldString();
