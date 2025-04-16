<?php
/**
 * DS - скорочений варіант DIRECTORY_SEPARATOR (стандартний роздільник каталогів для поточної операційної системи).
 * Використовувати при побудові шляхів до файлу для забезпечення функціонування коду на різних ОС.
 */
define('DS', DIRECTORY_SEPARATOR);

/**
 * NESTING_SEPARATOR - роздільник вкладеності при побудові шляхів без використання стандартного роздільника каталогів, а також для масивів та інших структур.
 * Рекомендується використовувати знак більше '>' або крапку '.' як в інших фреймворках.
 */
define('NESTING_SEPARATOR', '>');

/** NS - скорочений варіант NESTING_SEPARATOR (роздільник вкладеності) */
define('NS', NESTING_SEPARATOR);

/**
 * BACKWARD_NESTING_SEPARATOR - роздільник вкладеності (для зворотного порядку) при побудові шляхів без використання стандартного роздільника каталогів, а також для масивів та інших структур.
 * Рекомендується використовувати знак більше '<'.
 */
define('BACKWARD_NESTING_SEPARATOR', '<');

/** NS - скорочений варіант BACKWARD_NESTING_SEPARATOR (роздільник вкладеності для зворотного порядку) */
define('BNS', BACKWARD_NESTING_SEPARATOR);