<?php

defined('BASEPATH') OR exit('No direct script access allowed');


if ( ! function_exists('singular'))
{
	
	function singular($str)
	{
		$result = strval($str);

		if ( ! word_is_countable($result))
		{
			return $result;
		}

		$singular_rules = array(
			'/(matr)ices$/'		=> '\1ix',
			'/(vert|ind)ices$/'	=> '\1ex',
			'/^(ox)en/'		=> '\1',
			'/(alias)es$/'		=> '\1',
			'/([octop|vir])i$/'	=> '\1us',
			'/(cris|ax|test)es$/'	=> '\1is',
			'/(shoe)s$/'		=> '\1',
			'/(o)es$/'		=> '\1',
			'/(bus|campus)es$/'	=> '\1',
			'/([m|l])ice$/'		=> '\1ouse',
			'/(x|ch|ss|sh)es$/'	=> '\1',
			'/(m)ovies$/'		=> '\1\2ovie',
			'/(s)eries$/'		=> '\1\2eries',
			'/([^aeiouy]|qu)ies$/'	=> '\1y',
			'/([lr])ves$/'		=> '\1f',
			'/(tive)s$/'		=> '\1',
			'/(hive)s$/'		=> '\1',
			'/([^f])ves$/'		=> '\1fe',
			'/(^analy)ses$/'	=> '\1sis',
			'/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/' => '\1\2sis',
			'/([ti])a$/'		=> '\1um',
			'/(p)eople$/'		=> '\1\2erson',
			'/(m)en$/'		=> '\1an',
			'/(s)tatuses$/'		=> '\1\2tatus',
			'/(c)hildren$/'		=> '\1\2hild',
			'/(n)ews$/'		=> '\1\2ews',
			'/(quiz)zes$/'		=> '\1',
			'/([^us])s$/'		=> '\1'
		);

		foreach ($singular_rules as $rule => $replacement)
		{
			if (preg_match($rule, $result))
			{
				$result = preg_replace($rule, $replacement, $result);
				break;
			}
		}

		return $result;
	}
}

// --------------------------------------------------------------------

if ( ! function_exists('plural'))
{

	function plural($str)
	{
		$result = strval($str);

		if ( ! word_is_countable($result))
		{
			return $result;
		}

		$plural_rules = array(
			'/(quiz)$/'                => '\1zes',      // quizzes
			'/^(ox)$/'                 => '\1\2en',     // ox
			'/([m|l])ouse$/'           => '\1ice',      // mouse, louse
			'/(matr|vert|ind)ix|ex$/'  => '\1ices',     // matrix, vertex, index
			'/(x|ch|ss|sh)$/'          => '\1es',       // search, switch, fix, box, process, address
			'/([^aeiouy]|qu)y$/'       => '\1ies',      // query, ability, agency
			'/(hive)$/'                => '\1s',        // archive, hive
			'/(?:([^f])fe|([lr])f)$/'  => '\1\2ves',    // half, safe, wife
			'/sis$/'                   => 'ses',        // basis, diagnosis
			'/([ti])um$/'              => '\1a',        // datum, medium
			'/(p)erson$/'              => '\1eople',    // person, salesperson
			'/(m)an$/'                 => '\1en',       // man, woman, spokesman
			'/(c)hild$/'               => '\1hildren',  // child
			'/(buffal|tomat)o$/'       => '\1\2oes',    // buffalo, tomato
			'/(bu|campu)s$/'           => '\1\2ses',    // bus, campus
			'/(alias|status|virus)$/'  => '\1es',       // alias
			'/(octop)us$/'             => '\1i',        // octopus
			'/(ax|cris|test)is$/'      => '\1es',       // axis, crisis
			'/s$/'                     => 's',          // no change (compatibility)
			'/$/'                      => 's',
		);

		foreach ($plural_rules as $rule => $replacement)
		{
			if (preg_match($rule, $result))
			{
				$result = preg_replace($rule, $replacement, $result);
				break;
			}
		}

		return $result;
	}
}

// --------------------------------------------------------------------

if ( ! function_exists('camelize'))
{
	/**
	 * Camelize
	 *
	 * Takes multiple words separated by spaces or underscores and camelizes them
	 *
	 * @param	string	$str	Input string
	 * @return	string
	 */
	function camelize($str)
	{
		return strtolower($str[0]).substr(str_replace(' ', '', ucwords(preg_replace('/[\s_]+/', ' ', $str))), 1);
	}
}

// --------------------------------------------------------------------

if ( ! function_exists('underscore'))
{
	/**
	 * Underscore
	 *
	 * Takes multiple words separated by spaces and underscores them
	 *
	 * @param	string	$str	Input string
	 * @return	string
	 */
	function underscore($str)
	{
		return preg_replace('/[\s]+/', '_', trim(MB_ENABLED ? mb_strtolower($str) : strtolower($str)));
	}
}

// --------------------------------------------------------------------

if ( ! function_exists('humanize'))
{
	/**
	 * Humanize
	 *
	 * Takes multiple words separated by the separator and changes them to spaces
	 *
	 * @param	string	$str		Input string
	 * @param 	string	$separator	Input separator
	 * @return	string
	 */
	function humanize($str, $separator = '_')
	{
		return ucwords(preg_replace('/['.preg_quote($separator).']+/', ' ', trim(MB_ENABLED ? mb_strtolower($str) : strtolower($str))));
	}
}

// --------------------------------------------------------------------

if ( ! function_exists('word_is_countable'))
{
	/**
	 * Checks if the given word has a plural version.
	 *
	 * @param	string	$word	Word to check
	 * @return	bool
	 */
	function word_is_countable($word)
	{
		return ! in_array(
			strtolower($word),
			array(
				'audio',
				'bison',
				'chassis',
				'compensation',
				'coreopsis',
				'data',
				'deer',
				'education',
				'emoji',
				'equipment',
				'fish',
				'furniture',
				'gold',
				'information',
				'knowledge',
				'love',
				'rain',
				'money',
				'moose',
				'nutrition',
				'offspring',
				'plankton',
				'pokemon',
				'police',
				'rice',
				'series',
				'sheep',
				'species',
				'swine',
				'traffic',
				'wheat'
			)
		);
	}
}

// --------------------------------------------------------------------

if ( ! function_exists('is_countable'))
{
	function is_countable($word)
	{
		trigger_error('is_countable() is a native PHP function since version 7.3.0; use word_is_countable() instead', E_USER_WARNING);
		return word_is_countable($word);
	}
}
