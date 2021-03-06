<?php
/*
 * DLE-ModerNotes — Модуль заметок о пользователях
 *
 * @author     ПафНутиЙ <pafnuty10@gmail.com>
 * @link       https://git.io/v9Tgv
 */


/**
 * Конфигурация установщика модуля
 */
return [
	// Идентификатор модуля (он же имя иконки модуля в адмике)
	'moduleName'    => 'moder_notes',

	// Название модуля - показывается как в установщике, так и в админке.
	'moduleTitle'   => 'DLE-ModerNotes',

	// Описание модуля - показывается как в установщике, так и в админке.
	'moduleDescr'   => 'Заметки модераторов',

	// Версия модуля
	'moduleVersion' => '1.0.1',

	// Дата выпуска модуля
	'moduleDate'    => '23.04.2017',

	// Версии DLE, поддержваемые модулем
	'minVersion'    => '11.0',

	'maxVersion'    => '',

	// Устанавливать админку (true/false). Включает показ кнопки установки и удаления админки.
	'installAdmin'  => true,

	// ID групп, для которых доступно управление модулем в админке.
	'allowGroups'   => '1',
];
