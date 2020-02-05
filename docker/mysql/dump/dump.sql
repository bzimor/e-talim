-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 25 2020 г., 02:31
-- Версия сервера: 5.7.25
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `e_talim`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('Authenticated', '1', 1579900317),
('Master', '1', 1579898090);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('*', 2, 'Allow Everything', NULL, NULL, 1579898082, 1579898082),
('admin/category/*', 2, 'Route admin/category/*', NULL, NULL, 1579908241, 1579908241),
('admin/category/create', 2, 'Route admin/category/create', NULL, NULL, 1579908259, 1579908259),
('admin/category/index', 2, 'Route admin/category/index', NULL, NULL, 1579908241, 1579908241),
('admin/content/*', 2, 'Route admin/content/*', NULL, NULL, 1579902967, 1579902967),
('admin/content/create', 2, 'Route admin/content/create', NULL, NULL, 1579906761, 1579906761),
('admin/content/index', 2, 'Route admin/content/index', NULL, NULL, 1579902967, 1579902967),
('admin/dashboard/*', 2, 'Route admin/dashboard/*', NULL, NULL, 1579898099, 1579898099),
('admin/dashboard/error', 2, 'Route admin/dashboard/error', NULL, NULL, 1579898099, 1579898099),
('admin/dashboard/index', 2, 'Route admin/dashboard/index', NULL, NULL, 1579898099, 1579898099),
('admin/playlist/*', 2, 'Route admin/playlist/*', NULL, NULL, 1579907659, 1579907659),
('admin/playlist/create', 2, 'Route admin/playlist/create', NULL, NULL, 1579907694, 1579907694),
('admin/playlist/index', 2, 'Route admin/playlist/index', NULL, NULL, 1579907659, 1579907659),
('admin/rbac/permissions/*', 2, 'Route admin/rbac/permissions/*', NULL, NULL, 1579898122, 1579898122),
('admin/rbac/permissions/add-relation', 2, 'Route admin/rbac/permissions/add-relation', NULL, NULL, 1579898122, 1579898122),
('admin/rbac/permissions/create', 2, 'Route admin/rbac/permissions/create', NULL, NULL, 1579898122, 1579898122),
('admin/rbac/permissions/delete', 2, 'Route admin/rbac/permissions/delete', NULL, NULL, 1579898122, 1579898122),
('admin/rbac/permissions/index', 2, 'Route admin/rbac/permissions/index', NULL, NULL, 1579898122, 1579898122),
('admin/rbac/permissions/remove-relation', 2, 'Route admin/rbac/permissions/remove-relation', NULL, NULL, 1579898122, 1579898122),
('admin/rbac/permissions/scan', 2, 'Route admin/rbac/permissions/scan', NULL, NULL, 1579898122, 1579898122),
('admin/rbac/permissions/update', 2, 'Route admin/rbac/permissions/update', NULL, NULL, 1579898122, 1579898122),
('admin/rbac/roles/*', 2, 'Route admin/rbac/roles/*', NULL, NULL, 1579898122, 1579898122),
('admin/rbac/roles/create', 2, 'Route admin/rbac/roles/create', NULL, NULL, 1579898122, 1579898122),
('admin/rbac/roles/delete', 2, 'Route admin/rbac/roles/delete', NULL, NULL, 1579898122, 1579898122),
('admin/rbac/roles/update', 2, 'Route admin/rbac/roles/update', NULL, NULL, 1579898122, 1579898122),
('admin/settings/*', 2, 'Route admin/settings/*', NULL, NULL, 1579898099, 1579898099),
('admin/settings/app', 2, 'Route admin/settings/app', NULL, NULL, 1579898099, 1579898099),
('admin/users/*', 2, 'Route admin/users/*', NULL, NULL, 1579898099, 1579898099),
('admin/users/create', 2, 'Route admin/users/create', NULL, NULL, 1579898099, 1579898099),
('admin/users/delete', 2, 'Route admin/users/delete', NULL, NULL, 1579898099, 1579898099),
('admin/users/index', 2, 'Route admin/users/index', NULL, NULL, 1579898099, 1579898099),
('admin/users/update', 2, 'Route admin/users/update', NULL, NULL, 1579898099, 1579898099),
('administer', 2, 'Access administration panel.', NULL, NULL, 1579898082, 1579898082),
('Administrator', 1, 'Administrator.', NULL, NULL, 1579898082, 1579898082),
('auth/*', 2, 'Route auth/*', NULL, NULL, 1579898099, 1579898099),
('auth/login', 2, 'Route auth/login', NULL, NULL, 1579898099, 1579898099),
('auth/logout', 2, 'Route auth/logout', NULL, NULL, 1579898099, 1579898099),
('auth/password-request', 2, 'Route auth/password-request', NULL, NULL, 1579898099, 1579898099),
('auth/password-update', 2, 'Route auth/password-update', NULL, NULL, 1579898099, 1579898099),
('auth/register', 2, 'Route auth/register', NULL, NULL, 1579898099, 1579898099),
('Authenticated', 1, 'Authenticated user.', NULL, NULL, 1579898082, 1579898082),
('file/manager/*', 2, 'Route file/manager/*', NULL, NULL, 1579898099, 1579898099),
('file/manager/index', 2, 'Route file/manager/index', NULL, NULL, 1579898099, 1579898099),
('file/storage/*', 2, 'Route file/storage/*', NULL, NULL, 1579898099, 1579898099),
('file/storage/delete', 2, 'Route file/storage/delete', NULL, NULL, 1579898099, 1579898099),
('file/storage/index', 2, 'Route file/storage/index', NULL, NULL, 1579898099, 1579898099),
('file/storage/upload', 2, 'Route file/storage/upload', NULL, NULL, 1579898099, 1579898099),
('file/storage/upload-delete', 2, 'Route file/storage/upload-delete', NULL, NULL, 1579898099, 1579898099),
('file/storage/upload-imperavi', 2, 'Route file/storage/upload-imperavi', NULL, NULL, 1579898099, 1579898099),
('file/storage/view', 2, 'Route file/storage/view', NULL, NULL, 1579898099, 1579898099),
('Guest', 1, 'Usual site visitor.', NULL, NULL, 1579898082, 1579898082),
('Master', 1, 'Has full system access.', NULL, NULL, 1579898082, 1579898082),
('site/*', 2, 'Route site/*', NULL, NULL, 1579898099, 1579898099),
('site/about', 2, 'Route site/about', NULL, NULL, 1579898099, 1579898099),
('site/captcha', 2, 'Route site/captcha', NULL, NULL, 1579898099, 1579898099),
('site/contact', 2, 'Route site/contact', NULL, NULL, 1579898099, 1579898099),
('site/error', 2, 'Route site/error', NULL, NULL, 1579898099, 1579898099),
('site/index', 2, 'Route site/index', NULL, NULL, 1579898099, 1579898099);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Master', '*'),
('*', 'admin/category/*'),
('*', 'admin/category/create'),
('*', 'admin/category/index'),
('*', 'admin/content/*'),
('*', 'admin/content/create'),
('*', 'admin/content/index'),
('*', 'admin/dashboard/*'),
('*', 'admin/dashboard/error'),
('admin/dashboard/*', 'admin/dashboard/error'),
('*', 'admin/dashboard/index'),
('admin/dashboard/*', 'admin/dashboard/index'),
('*', 'admin/playlist/*'),
('*', 'admin/playlist/create'),
('*', 'admin/playlist/index'),
('*', 'admin/rbac/permissions/*'),
('*', 'admin/rbac/permissions/add-relation'),
('admin/rbac/permissions/*', 'admin/rbac/permissions/add-relation'),
('*', 'admin/rbac/permissions/create'),
('admin/rbac/permissions/*', 'admin/rbac/permissions/create'),
('*', 'admin/rbac/permissions/delete'),
('admin/rbac/permissions/*', 'admin/rbac/permissions/delete'),
('*', 'admin/rbac/permissions/index'),
('admin/rbac/permissions/*', 'admin/rbac/permissions/index'),
('*', 'admin/rbac/permissions/remove-relation'),
('admin/rbac/permissions/*', 'admin/rbac/permissions/remove-relation'),
('*', 'admin/rbac/permissions/scan'),
('admin/rbac/permissions/*', 'admin/rbac/permissions/scan'),
('*', 'admin/rbac/permissions/update'),
('admin/rbac/permissions/*', 'admin/rbac/permissions/update'),
('*', 'admin/rbac/roles/*'),
('*', 'admin/rbac/roles/create'),
('admin/rbac/roles/*', 'admin/rbac/roles/create'),
('*', 'admin/rbac/roles/delete'),
('admin/rbac/roles/*', 'admin/rbac/roles/delete'),
('*', 'admin/rbac/roles/update'),
('admin/rbac/roles/*', 'admin/rbac/roles/update'),
('*', 'admin/settings/*'),
('*', 'admin/settings/app'),
('admin/settings/*', 'admin/settings/app'),
('*', 'admin/users/*'),
('*', 'admin/users/create'),
('admin/users/*', 'admin/users/create'),
('*', 'admin/users/delete'),
('admin/users/*', 'admin/users/delete'),
('*', 'admin/users/index'),
('admin/users/*', 'admin/users/index'),
('*', 'admin/users/update'),
('admin/users/*', 'admin/users/update'),
('*', 'administer'),
('Administrator', 'administer'),
('*', 'auth/*'),
('*', 'auth/login'),
('auth/*', 'auth/login'),
('*', 'auth/logout'),
('auth/*', 'auth/logout'),
('*', 'auth/password-request'),
('auth/*', 'auth/password-request'),
('*', 'auth/password-update'),
('auth/*', 'auth/password-update'),
('*', 'auth/register'),
('auth/*', 'auth/register'),
('*', 'file/manager/*'),
('*', 'file/manager/index'),
('file/manager/*', 'file/manager/index'),
('*', 'file/storage/*'),
('*', 'file/storage/delete'),
('file/storage/*', 'file/storage/delete'),
('*', 'file/storage/index'),
('file/storage/*', 'file/storage/index'),
('*', 'file/storage/upload'),
('file/storage/*', 'file/storage/upload'),
('*', 'file/storage/upload-delete'),
('file/storage/*', 'file/storage/upload-delete'),
('*', 'file/storage/upload-imperavi'),
('file/storage/*', 'file/storage/upload-imperavi'),
('*', 'file/storage/view'),
('file/storage/*', 'file/storage/view'),
('*', 'site/*'),
('*', 'site/about'),
('site/*', 'site/about'),
('*', 'site/captcha'),
('site/*', 'site/captcha'),
('*', 'site/contact'),
('site/*', 'site/contact'),
('*', 'site/error'),
('site/*', 'site/error'),
('*', 'site/index'),
('site/*', 'site/index');

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text,
  `photo_base_url` varchar(255) DEFAULT NULL,
  `photo_path` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `sort_order` smallint(6) NOT NULL DEFAULT '99',
  `status` smallint(6) NOT NULL DEFAULT '1',
  `is_deleted` smallint(6) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `uuid` varchar(7) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `photo_base_url` varchar(255) DEFAULT NULL,
  `photo_path` varchar(255) DEFAULT NULL,
  `file` varchar(255) NOT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `playlist_id` int(11) DEFAULT NULL,
  `duration` time DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `views` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `is_deleted` smallint(6) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `published_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `file_storage_item`
--

CREATE TABLE `file_storage_item` (
  `id` int(11) NOT NULL,
  `component` varchar(255) NOT NULL,
  `base_url` varchar(1024) NOT NULL,
  `path` varchar(1024) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `upload_ip` varchar(45) DEFAULT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1579898051),
('m130524_201442_create_user_table', 1579898056),
('m140506_102106_rbac_init', 1579898056),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1579898056),
('m170913_142352_create_settings_table', 1579898056),
('m180523_151638_rbac_updates_indexes_without_prefix', 1579898057),
('m190523_114102_content_playlist_category', 1579907814),
('m190601_133247_file_storage_item', 1579899826);

-- --------------------------------------------------------

--
-- Структура таблицы `playlist`
--

CREATE TABLE `playlist` (
  `id` int(11) NOT NULL,
  `uuid` varchar(7) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `sort_order` smallint(6) NOT NULL DEFAULT '99',
  `category_id` int(11) DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `duration` time DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `is_deleted` smallint(6) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `section_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `first_name`, `last_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin@e-talim.uz', '1ZodOHS3SZAZkUHmBsVYJLnUThUlYk26', '$2y$13$bWU3rmNi/l7UGWnTEWlHH.3kZN5/WGYkyy4D2aCfpZaeZ7ieGZRuS', NULL, 'admin@domain.com', 'Admin', NULL, 10, 1501889814, 1503957470);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_section` (`parent_id`);

--
-- Индексы таблицы `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uuid` (`uuid`),
  ADD KEY `fk_content_playlist` (`playlist_id`);

--
-- Индексы таблицы `file_storage_item`
--
ALTER TABLE `file_storage_item`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uuid` (`uuid`),
  ADD KEY `fk_playlist_category` (`category_id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`section_name`,`key`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `file_storage_item`
--
ALTER TABLE `file_storage_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `fk_category_section` FOREIGN KEY (`parent_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `fk_content_playlist` FOREIGN KEY (`playlist_id`) REFERENCES `playlist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `fk_playlist_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
