USE test;

/**
 * ORDER BY で指定した順に並び替える SQL サンプル
 */
CREATE TABLE IF NOT EXISTS `ids` (
	`id` INT unsigned NOT NULL,
	PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

TRUNCATE `ids`;

INSERT INTO `ids` VALUES
(1), (2), (3), (4), (5), (6), (7), (8), (9), (10);


/**
 * 指定順での表示
 */
SELECT * FROM `ids` ORDER BY FIELD(id, 5, 6, 7, 8, 9, 10, 1, 2, 3, 4);


/**
 * 指定したIDから表示
 * 6, 8, 1 その他 の順で表示したい
 */
SELECT * FROM `ids` ORDER BY FIELD(id, 6, 8, 1) DESC;
