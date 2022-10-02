<?php defined('BLUDIT') or die('Unauthorized access!');

define('ELTHEME3_VERSION', '1.1.3');

/** Shortens the content of the post to the specified number of characters.
 *  (Based on the Text helper of the Codeigniter framework.)
 *
 * @param string Content of the post
 * @param int Number of characters
 * @param string End char
 * @return string
 */
function eltheme3_excerpt( string $str, int $n = 500, string $endChar = '&#8230;' ): string
{
	$str = strip_tags( $str );

	if ( mb_strlen( $str ) < $n )
	{
        return $str;
    }

    $str = preg_replace('/ {2,}/', ' ', str_replace(["\r", "\n", "\t", "\x0B", "\x0C"], ' ', $str));

    if ( mb_strlen( $str ) <= $n )
    {
        return $str;
    }

    $out = '';
    foreach ( explode( ' ', trim( $str ) ) as $val )
    {
        $out .= $val . ' ';
        if ( mb_strlen( $out ) >= $n )
        {
            $out = trim( $out );
            break;
        }
    }

    return ( mb_strlen( $out ) === mb_strlen( $str ) ) ? $out : $out . $endChar;
}

