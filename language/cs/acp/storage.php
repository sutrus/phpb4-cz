<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license       GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(

	// Template
	'STORAGE_TITLE'                                   => 'Nastavení úložiště',
	'STORAGE_TITLE_EXPLAIN'                           => 'Změňte poskytovatele úložiště pro datové soubory phpBB. Vyberte místní nebo vzdálené poskytovatele pro ukládání přidaných nebo vytvořených souborů phpBB.',
	'STORAGE_SELECT'                                  => 'Vyberte úložiště',
	'STORAGE_SELECT_DESC'                             => 'Ze seznamu vyberte úložiště.',
	'STORAGE_NAME'                                    => 'Název úložiště',
	'STORAGE_NUM_FILES'                               => 'Počet souborů',
	'STORAGE_SIZE'                                    => 'Velikost',
	'STORAGE_FREE'                                    => 'Dostupné místo',
	'STORAGE_UNKNOWN'                                 => 'Neznámé',

	// Storage names
	'STORAGE_ATTACHMENT_TITLE'                        => 'Úložiště příloh',
	'STORAGE_AVATAR_TITLE'                            => 'Úložiště avatarů',
	'STORAGE_BACKUP_TITLE'                            => 'Úložiště záloh',

	// Local adapter
	'STORAGE_ADAPTER_LOCAL_NAME'                      => 'Místní',
	'STORAGE_ADAPTER_LOCAL_OPTION_PATH'               => 'Cesta',
	'STORAGE_ADAPTER_LOCAL_OPTION_SUBFOLDERS'         => 'Uspořádat do podsložek',
	'STORAGE_ADAPTER_LOCAL_OPTION_SUBFOLDERS_EXPLAIN' => 'Některé webové servery mohou mít problémy s ukládáním velkého počtu souborů do jednoho adresáře. Povolením této možnosti můžete soubory rozdělit do různých adresářů.',

	// Form validation
	'STORAGE_UPDATE_SUCCESSFUL'                       => 'Všechny typy úložišť byly úspěšně aktualizovány.',
	'STORAGE_NO_CHANGES'                              => 'Nebyly provedeny žádné změny.',
	'STORAGE_PROVIDER_NOT_EXISTS'                     => 'Poskytovatel vybraný pro %s neexistuje.',
	'STORAGE_PROVIDER_NOT_AVAILABLE'                  => 'Poskytovatel vybraný pro %s není dostupný.',
	'STORAGE_FORM_TYPE_EMAIL_INCORRECT_FORMAT'        => 'Nesprávný e-mail pro %s z %s.',
	'STORAGE_FORM_TYPE_TEXT_TOO_LONG'                 => 'Text je příliš dlouhý pro %s z %s.',
	'STORAGE_FORM_TYPE_SELECT_NOT_AVAILABLE'          => 'Vybraná hodnota není k dispozici pro %s z %s.',

	'STORAGE_PATH_NOT_EXISTS' => '“%1$s” cesta neexistuje nebo do ní nelze zapisovat.',
	'STORAGE_PATH_NOT_SET'    => '“%1$s” cesta není nastavena.',
));
