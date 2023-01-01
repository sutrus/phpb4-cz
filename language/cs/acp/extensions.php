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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * DO NOT CHANGE
 */
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(

	'EXTENSION_ALREADY_INSTALLED'              => 'Rozšíření “%s” již bylo nainstalováno.',
	'EXTENSION_ALREADY_INSTALLED_MANUALLY'     => 'Rozšíření “%s” již bylo nainstalováno ručně.',
	'EXTENSION_ALREADY_MANAGED'                => 'Rozšíření “%s” je již spravováno.',
	'EXTENSION_CANNOT_MANAGE_FILESYSTEM_ERROR' => 'Rozšíření “%s” nelze spravovat, protože stávající soubory nebylo možné ze souborového systému odstranit.',
	'EXTENSION_CANNOT_MANAGE_INSTALL_ERROR'    => 'Rozšíření “%s” nebylo možné nainstalovat. Předchozí instalace tohoto rozšíření byla obnovena.',
	'EXTENSION_MANAGED_WITH_CLEAN_ERROR'       => 'Rozšíření “%1$s” bylo nainstalováno, ale došlo k chybě a staré soubory nebylo možné odstranit. Možná bude nutné odstranit soubory "%2$s" ručně.',
	'EXTENSION_MANAGED_WITH_ENABLE_ERROR'      => 'Rozšíření “%s” bylo nainstalováno, ale při jeho povolení došlo k chybě.',
	'EXTENSION_NOT_INSTALLED'                  => 'Rozšíření “%s” není nainstalováno.',

	'ENABLING_EXTENSIONS'  => 'Povolení rozšíření',
	'DISABLING_EXTENSIONS' => 'Zakázání rozšíření',

	'EXTENSIONS_CATALOG'         => 'Katalog rozšíření',
	'EXTENSIONS_CATALOG_EXPLAIN' => 'Zde si můžete prohlédnout všechna rozšíření dostupná pro vaše fórum phpBB. Rozšíření lze snadno nainstalovat nebo odebrat pouhým kliknutím. Upravením nastavení umožníte okamžité povolení a pročištění rozšíření.',

	'EXTENSION'                => 'rozšíření',
	'EXTENSIONS'               => 'rozšíření',
	'EXTENSIONS_ADMIN'         => 'Správce rozšíření',
	'EXTENSIONS_EXPLAIN'       => 'Pomocí „Správce rozšíření“ můžete spravovat rozšíření na vašem phpBB fóru.',
	'EXTENSION_INVALID_LIST'   => 'Rozšíření „%s“ je neplatné.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'  => 'Vybrané rozšíření nelze na vašem fóru použít. Ověřte, prosím, jestli rozšíření podporuje verzi vašeho phpBB fóra a PHP (podívejte se na stránku s podrobnostmi).',
	'EXTENSION_DIR_INVALID'    => 'Vybrané rozšíření má neplatnou adresářovou strukturu a nemůže být povoleno.',
	'EXTENSION_NOT_ENABLEABLE' => 'Vybrané rozšíření nelze povolit. Zkontrolujte, prosím, požadavky rozšíření.',

	'DETAILS' => 'Informace',

	'EXTENSIONS_DISABLED' => 'Zakázaná rozšíření',
	'EXTENSIONS_ENABLED'  => 'Povolená rozšíření',

	'EXTENSION_DELETE_DATA' => 'Smazat data',
	'EXTENSION_DISABLE'     => 'Zakázat',
	'EXTENSION_ENABLE'      => 'Povolit',
	'EXTENSION_UPDATE'      => 'Aktualizovat',
	'EXTENSION_REMOVE'      => 'Odebrat',

	'EXTENSION_DELETE_DATA_EXPLAIN' => 'Po smazání dat rozšíření, budou odstraněna všechna data a nastavení rozšíření. Soubory rozšíření zůstanou zachovány, takže bude moci být znovu povoleno. Tato možnost resetuje rozšíření na výchozí hodnotu a vypne ho.',
	'EXTENSION_DISABLE_EXPLAIN'     => 'Po zakázání rozšíření zůstanou zachovány soubory, data a nastavení, ale budou odstraněny všechny funkce přidané rozšířením.',
	'EXTENSION_ENABLE_EXPLAIN'      => 'Po povolení rozšíření můžete rozšíření používat na vašem fóru.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS' => 'Data rozšíření se momentálně mažou. Prosím, neopouštějte nebo neobnovujte stránku dokud nebude operace dokončena.',
	'EXTENSION_DISABLE_IN_PROGRESS'     => 'Rozšíření se momentálně zakazuje. Prosím, neopouštějte nebo neobnovujte stránku dokud nebude operace dokončena.',
	'EXTENSION_ENABLE_IN_PROGRESS'      => 'Rozšíření se momentálně povoluje. Prosím, neopouštějte nebo neobnovujte stránku dokud nebude operace dokončena.',

	'EXTENSION_DELETE_DATA_SUCCESS' => 'Data rozšíření byla úspěšně smazána',
	'EXTENSION_DISABLE_SUCCESS'     => 'Rozšíření bylo úspěšně zakázáno',
	'EXTENSION_ENABLE_SUCCESS'      => 'Rozšíření bylo úspěšně povoleno',

	'EXTENSION_NAME'             => 'Název rozšíření',
	'EXTENSION_ACTIONS'          => 'Akce',
	'EXTENSION_OPTIONS'          => 'Možnosti',
	'EXTENSION_INSTALL_HEADLINE' => 'Instalace rozšíření',
	'EXTENSION_INSTALL_EXPLAIN'  => '<ol>
			<li>Stáhněte rozšíření z phpBB databáze rozšíření</li>
			<li>Rozbalte rozšíření a nahrajte jej do složky <samp>ext/</samp> vašeho phpBB fóra</li>
			<li>Povolte rozšíření zde ve správci rozšíření</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'  => 'Aktualizace rozšíření',
	'EXTENSION_UPDATE_EXPLAIN'   => '<ol>
			<li>Zakažte rozšíření</li>
			<li>Smažte soubory rozšíření ze serveru</li>
			<li>Nahrajte nové soubory</li>
			<li>Povolte rozšíření</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'  => 'Úplné odstranění rozšíření z vašeho fóra',
	'EXTENSION_REMOVE_EXPLAIN'   => '<ol>
			<li>Zakažte rozšíření</li>
			<li>Smažte data rozšíření</li>
			<li>Smažte soubory rozšíření ze serveru</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'    => 'Opravdu chcete smazat data přidaná rozšířením „%s“?<br /><br />Tato akce odstraní všechna data a nastavení rozšíření a akci nelze vrátit zpět!',
	'EXTENSION_DISABLE_CONFIRM'        => 'Opravdu chcete zakázat rozšíření „%s“?',
	'EXTENSION_ENABLE_CONFIRM'         => 'Opravdu chcete povolit rozšíření „%s“?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM' => 'Opravdu chcete vynutit použití nestabilní verze?',

	'INSTALLED'          => 'Nainstalované',
	'INSTALLED_MANUALLY' => 'Instalováno ručně',

	'RETURN_TO_EXTENSION_LIST' => 'Zpět na seznam rozšíření',

	'EXT_DETAILS'  => 'Podrobné informace o rozšíření',
	'DISPLAY_NAME' => 'Zobrazovaný název',
	'CLEAN_NAME'   => 'Název v základním tvaru',
	'TYPE'         => 'Typ',
	'DESCRIPTION'  => 'Popis',
	'VERSION'      => 'Verze',
	'HOMEPAGE'     => 'Domovská stránka',
	'PATH'         => 'Cesta k souboru',
	'TIME'         => 'Datum vydání',
	'LICENSE'      => 'Licence',

	'REQUIREMENTS'       => 'Požadavky',
	'PHPBB_VERSION'      => 'Verze phpBB',
	'PHP_VERSION'        => 'Verze PHP',
	'AUTHOR_INFORMATION' => 'Informace o autorovi',
	'AUTHOR_NAME'        => 'Jméno',
	'AUTHOR_EMAIL'       => 'E-mail',
	'AUTHOR_HOMEPAGE'    => 'Domovská stránka',
	'AUTHOR_ROLE'        => 'Role',

	'NOT_UP_TO_DATE'     => 'Rozšíření %s není aktuální',
	'UP_TO_DATE'         => 'Rozšíření %s je aktuální',
	'ANNOUNCEMENT_TOPIC' => 'Oznámení o vydání',
	'DOWNLOAD_LATEST'    => 'Stáhnout poslední verzi',
	'NO_VERSIONCHECK'    => 'Informace o verzi nebyly poskytnuty.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'     => 'Znovu zkontrolovat všechny verze',
	'FORCE_UNSTABLE'                    => 'Vždy zkontrolovat zda jsou k dispozici nestabilní verze',
	'EXTENSIONS_VERSION_CHECK_SETTINGS' => 'Nastavení kontroly verzí',

	'BROWSE_EXTENSIONS_DATABASE' => 'Procházet databázi rozšíření',

	'META_FIELD_NOT_SET' => 'Požadované meta pole %s nebylo určeno.',
	'META_FIELD_INVALID' => 'Meta pole %s je neplatné.',

	'EXTENSIONS_CATALOG_SETTINGS'   => 'Nastavení katalogu rozšíření',
	'ENABLE_ON_INSTALL'             => 'Povolení rozšíření během instalace',
	'PURGE_ON_REMOVE'               => 'Vymazat rozšíření při odebrání',
	'ENABLE_PACKAGIST'              => 'Vyhledávání v seznamu balíčků',
	'ENABLE_PACKAGIST_EXPLAIN'      => 'Hledejte v seznamu balíčků phpBB rozšíření. Pozor na to, že seznam balíčků může obsahovat rozšíření, která nejsou ověřena týmem pro úpravy rozšíření phpBB.',
	'ENABLE_PACKAGIST_CONFIRM'      => 'Jste si jisti, že chcete použít tento seznam balíčků?',
	'COMPOSER_REPOSITORIES'         => 'Repozitáře',
	'COMPOSER_REPOSITORIES_EXPLAIN' => 'Přidejte adresy URL Composer repozitářů s rozšířeními phpBB, jednu na řádek (výchozí url souboru packages.json).',
	'NO_EXTENSION_AVAILABLE'        => 'Pro vaše fórum není k dispozici žádné rozšíření',

	'EXTENSION_MANAGED_SUCCESS' => 'Rozšíření %s je spravováno automaticky.',
	'EXTENSIONS_INSTALLED'      => 'Rozšíření úspěšně nainstalováno.',
	'EXTENSIONS_REMOVED'        => 'Rozšíření úspěšně odebráno.',
	'EXTENSIONS_UPDATED'        => 'Rozšíření úspěšně aktualizováno.',

	'EXTENSIONS_CATALOG_NOT_AVAILABLE' => 'Katalog rozšíření není k dispozici',
	'EXTENSIONS_COMPOSER_NOT_WRITABLE' => 'Aby bylo možné katalog využívat, musí být možné zapisovat do souborů do adresářů: ext/ vendor-ext/ composer-ext.json a composer-ext.lock.',

	'STABILITY_STABLE' => 'stabilní',
	'STABILITY_RC'     => 'RC',
	'STABILITY_BETA'   => 'beta',
	'STABILITY_ALPHA'  => 'alpha',
	'STABILITY_DEV'    => 'dev',

	'COMPOSER_MINIMUM_STABILITY'         => 'Minimum stability',
	'COMPOSER_MINIMUM_STABILITY_EXPLAIN' => 'Always use <samp>stable</samp> versions on a live forum. Non-stable versions may still be in development and could cause unexpected problems with your forum and should only be used for development purposes in local or staging environments.',

));
