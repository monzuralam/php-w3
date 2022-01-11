<?php
// strstr()
// strlen()
// str_word_count()
// strrev()
// strpos()
// str_replace()
// strtolower()
// strtoupper()
// str_split()
// is_string()
// strtok()
// explode()
// implode()
// trim()
// ucfirst()
// lcfirst()
// wordwrap()

$a = "PHP is mostly used for server side programming in web applications. A majority of the websites you visit probably use PHP. Of course, it can also be used for other things like general purpose programming or even for building desktop GUI applications.";

echo $a;
echo "<br>";

/**
 * substr();
 */
echo strstr($a, 'majority');
echo "<br>";

/**
 * strlen();
 */
echo strlen($a);
echo "<br>";

/**
 * str_word_count();
 */
echo str_word_count($a);
echo "<br>";

/**
 * strrev();
 */
echo strrev($a);
echo "<br>";

/**
 * strpos();
 */
echo strpos($a, 'server');
echo "<br>";