<?php

return [

	'options' => 'Pokračovat můžete například na některé z následujících stránek:',

	// 403 - Forbidden
	'403' => [
		'title' => '403 - Nemáte potřebná oprávnění',
		'description' => 'Tento požadavek nebylo možné vykonat, server odmítl odpovědět.',

		'page' => [
			'title' => '403 - Nemáte potřebná oprávnění',
			'subtitle' => 'Tento požadavek nebylo možné vykonat, server odmítl odpovědět.',
			'description' => 'Je nám velice líto, tento požadavek nemohl být zpracován. Pokud došlo k chybě, neváhejte nás kontaktovat.',
		]
	],

	// 404 - Not found
	'404' => [
		'title' => '404 - Stránka nebyla nalezena',
		'description' => 'Tato stránka nebyla nalezena.',

		'page' => [
			'title' => '404 - Stránka nebyla nalezena',
			'subtitle' => 'Tato stránka nebyla nalezena.',
			'description' => 'Je nám velice líto, stránka, kterou jste hledali nebyla nalezena. Pokud došlo k chybě, neváhejte nás kontaktovat.',
		]
	],

	// 500 - Internal server error
	'500' => [
		'title' => '500 - Vnitřní chyba serveru',
		'description' => 'Došlo k vnitřní chybě serveru.',

		'page' => [
			'title' => '500 - Vnitřní chyba serveru',
			'subtitle' => 'Došlo k vnitřní chybě serveru.',
			'description' => 'Je nám velice líto, došlo k vnitřní chybě serveru, chyba byla zaznamenána a budeme se jít zabývat.',
		]
	],
	
	// 503 - Service unavailable 
	'503' => [
		'title' => '503 - Služba je nedostupná',
		'description' => 'Služba není v tuto chvíli dostupná.',

		'page' => [
			'title' => '503 - Služba je nedostupná',
			'subtitle' => 'Služba není v tuto chvíli dostupná.',
			'description' => 'Je nám velice líto, server je příliš vytížen, opakujte akci později prosím.',
		]
	],

];