<?php
/**
 * DokuWiki Bootstrap3 Template: Badges
 *
 * @link     http://dokuwiki.org/template:bootstrap3
 * @author   Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

if (bootstrap3_conf('showBadges')):

  $target  = ($conf['target']['extern']) ? 'target="'.$conf['target']['extern'].'"' : '';
  $dw_path = dirname(tpl_basedir());

?>
<?php endif; ?>
