/*
Navicat MySQL Data Transfer

Source Server         : LIEMPHAN-C
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : cv_portfolio

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-03-01 18:04:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `messages` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of contacts
-- ----------------------------

-- ----------------------------
-- Table structure for data_rows
-- ----------------------------
DROP TABLE IF EXISTS `data_rows`;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of data_rows
-- ----------------------------
INSERT INTO `data_rows` VALUES ('1', '1', 'id', 'number', 'ID', '1', '0', '0', '0', '0', '0', null, '1');
INSERT INTO `data_rows` VALUES ('2', '1', 'name', 'text', 'Name', '1', '1', '1', '1', '1', '1', null, '2');
INSERT INTO `data_rows` VALUES ('3', '1', 'email', 'text', 'Email', '1', '1', '1', '1', '1', '1', null, '3');
INSERT INTO `data_rows` VALUES ('4', '1', 'password', 'password', 'Password', '1', '0', '0', '1', '1', '0', null, '4');
INSERT INTO `data_rows` VALUES ('5', '1', 'remember_token', 'text', 'Remember Token', '0', '0', '0', '0', '0', '0', null, '5');
INSERT INTO `data_rows` VALUES ('6', '1', 'created_at', 'timestamp', 'Created At', '0', '1', '1', '0', '0', '0', null, '6');
INSERT INTO `data_rows` VALUES ('7', '1', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', null, '7');
INSERT INTO `data_rows` VALUES ('8', '1', 'avatar', 'image', 'Avatar', '0', '1', '1', '1', '1', '1', null, '8');
INSERT INTO `data_rows` VALUES ('9', '1', 'user_belongsto_role_relationship', 'relationship', 'Role', '0', '1', '1', '1', '1', '0', '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', '10');
INSERT INTO `data_rows` VALUES ('10', '1', 'user_belongstomany_role_relationship', 'relationship', 'Roles', '0', '1', '1', '1', '1', '0', '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', '11');
INSERT INTO `data_rows` VALUES ('11', '1', 'locale', 'text', 'Locale', '0', '1', '1', '1', '1', '0', null, '12');
INSERT INTO `data_rows` VALUES ('12', '1', 'settings', 'hidden', 'Settings', '0', '0', '0', '0', '0', '0', null, '12');
INSERT INTO `data_rows` VALUES ('13', '2', 'id', 'number', 'ID', '1', '0', '0', '0', '0', '0', null, '1');
INSERT INTO `data_rows` VALUES ('14', '2', 'name', 'text', 'Name', '1', '1', '1', '1', '1', '1', null, '2');
INSERT INTO `data_rows` VALUES ('15', '2', 'created_at', 'timestamp', 'Created At', '0', '0', '0', '0', '0', '0', null, '3');
INSERT INTO `data_rows` VALUES ('16', '2', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', null, '4');
INSERT INTO `data_rows` VALUES ('17', '3', 'id', 'number', 'ID', '1', '0', '0', '0', '0', '0', null, '1');
INSERT INTO `data_rows` VALUES ('18', '3', 'name', 'text', 'Name', '1', '1', '1', '1', '1', '1', null, '2');
INSERT INTO `data_rows` VALUES ('19', '3', 'created_at', 'timestamp', 'Created At', '0', '0', '0', '0', '0', '0', null, '3');
INSERT INTO `data_rows` VALUES ('20', '3', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', null, '4');
INSERT INTO `data_rows` VALUES ('21', '3', 'display_name', 'text', 'Display Name', '1', '1', '1', '1', '1', '1', null, '5');
INSERT INTO `data_rows` VALUES ('22', '1', 'role_id', 'text', 'Role', '1', '1', '1', '1', '1', '1', null, '9');
INSERT INTO `data_rows` VALUES ('30', '6', 'id', 'text', 'Id', '1', '0', '0', '0', '0', '0', '{}', '1');
INSERT INTO `data_rows` VALUES ('31', '6', 'time', 'text', 'Time', '0', '1', '1', '1', '1', '1', '{}', '2');
INSERT INTO `data_rows` VALUES ('32', '6', 'company_name', 'text', 'Company Name', '0', '1', '1', '1', '1', '1', '{}', '3');
INSERT INTO `data_rows` VALUES ('33', '6', 'position', 'text', 'Position', '0', '0', '1', '1', '1', '1', '{}', '4');
INSERT INTO `data_rows` VALUES ('34', '6', 'content', 'rich_text_box', 'Content', '0', '0', '1', '1', '1', '1', '{\"class\":\"richTextBox\"}', '5');
INSERT INTO `data_rows` VALUES ('35', '6', 'order', 'text', 'Order', '0', '1', '1', '1', '1', '1', '{}', '6');
INSERT INTO `data_rows` VALUES ('36', '6', 'status', 'radio_btn', 'Status', '0', '1', '1', '1', '0', '1', '{\"default\":\"1\",\"options\":{\"0\":\"Hide\",\"1\":\"Show\"}}', '7');
INSERT INTO `data_rows` VALUES ('37', '6', 'created_at', 'timestamp', 'Created At', '0', '0', '1', '1', '0', '1', '{}', '8');
INSERT INTO `data_rows` VALUES ('38', '6', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', '{}', '9');
INSERT INTO `data_rows` VALUES ('39', '7', 'id', 'text', 'Id', '1', '0', '0', '0', '0', '0', '{}', '1');
INSERT INTO `data_rows` VALUES ('40', '7', 'name', 'text', 'Name', '0', '1', '1', '1', '1', '1', '{}', '2');
INSERT INTO `data_rows` VALUES ('42', '7', 'age', 'text', 'Age', '0', '0', '1', '1', '1', '1', '{}', '4');
INSERT INTO `data_rows` VALUES ('43', '7', 'address', 'text', 'Address', '0', '0', '1', '1', '1', '1', '{}', '5');
INSERT INTO `data_rows` VALUES ('44', '7', 'email', 'text', 'Email', '0', '0', '1', '1', '1', '1', '{}', '6');
INSERT INTO `data_rows` VALUES ('45', '7', 'phone', 'text', 'Phone', '0', '0', '1', '1', '1', '1', '{}', '7');
INSERT INTO `data_rows` VALUES ('46', '7', 'created_at', 'timestamp', 'Created At', '0', '1', '1', '0', '0', '0', '{}', '8');
INSERT INTO `data_rows` VALUES ('47', '7', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', '{}', '9');
INSERT INTO `data_rows` VALUES ('48', '9', 'id', 'text', 'Id', '1', '0', '0', '0', '0', '0', '{}', '1');
INSERT INTO `data_rows` VALUES ('49', '9', 'title', 'text', 'Title', '0', '1', '1', '1', '1', '1', '{}', '2');
INSERT INTO `data_rows` VALUES ('50', '9', 'slug', 'text', 'Slug', '0', '0', '1', '1', '1', '1', '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}', '3');
INSERT INTO `data_rows` VALUES ('51', '9', 'description', 'text_area', 'Description', '0', '0', '1', '1', '1', '1', '{}', '4');
INSERT INTO `data_rows` VALUES ('52', '9', 'img_url', 'image', 'Img Url', '0', '1', '1', '1', '1', '1', '{\"quality\":\"80%\"}', '5');
INSERT INTO `data_rows` VALUES ('53', '9', 'created_at', 'timestamp', 'Created At', '0', '1', '1', '1', '0', '1', '{}', '6');
INSERT INTO `data_rows` VALUES ('54', '9', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', '{}', '7');
INSERT INTO `data_rows` VALUES ('55', '9', 'order', 'text', 'Order', '0', '1', '1', '1', '1', '1', '{}', '8');
INSERT INTO `data_rows` VALUES ('56', '9', 'status', 'radio_btn', 'Status', '0', '1', '1', '1', '1', '1', '{\"default\":\"1\",\"options\":{\"0\":\"Hide\",\"1\":\"Show\"}}', '9');
INSERT INTO `data_rows` VALUES ('57', '10', 'id', 'text', 'Id', '1', '0', '0', '0', '0', '0', '{}', '1');
INSERT INTO `data_rows` VALUES ('58', '10', 'title', 'text', 'Title', '0', '1', '1', '1', '1', '1', '{}', '2');
INSERT INTO `data_rows` VALUES ('59', '10', 'number', 'text', 'Number', '0', '1', '1', '1', '1', '1', '{}', '3');
INSERT INTO `data_rows` VALUES ('60', '10', 'created_at', 'timestamp', 'Created At', '0', '1', '1', '0', '0', '0', '{}', '4');
INSERT INTO `data_rows` VALUES ('61', '10', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', '{}', '5');
INSERT INTO `data_rows` VALUES ('62', '12', 'id', 'text', 'Id', '1', '0', '0', '0', '0', '0', '{}', '1');
INSERT INTO `data_rows` VALUES ('63', '12', 'parent_id', 'checkbox', 'Parent Id', '0', '0', '1', '1', '1', '1', '{}', '2');
INSERT INTO `data_rows` VALUES ('64', '12', 'order', 'text', 'Order', '1', '1', '1', '1', '1', '1', '{}', '3');
INSERT INTO `data_rows` VALUES ('65', '12', 'title', 'text', 'Title', '1', '1', '1', '1', '1', '1', '{}', '4');
INSERT INTO `data_rows` VALUES ('66', '12', 'slug', 'text', 'Slug', '1', '0', '1', '1', '1', '1', '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}', '5');
INSERT INTO `data_rows` VALUES ('67', '12', 'created_at', 'timestamp', 'Created At', '0', '1', '1', '1', '0', '1', '{}', '6');
INSERT INTO `data_rows` VALUES ('68', '12', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', '{}', '7');
INSERT INTO `data_rows` VALUES ('69', '12', 'sub_title', 'text', 'Sub Title', '0', '0', '1', '1', '1', '1', '{}', '8');
INSERT INTO `data_rows` VALUES ('70', '12', 'img_url', 'image', 'Img Url', '0', '1', '1', '1', '1', '1', '{\"quality\":\"80%\"}', '9');
INSERT INTO `data_rows` VALUES ('71', '12', 'category_hasmany_project_relationship', 'relationship', 'projects', '0', '1', '1', '1', '1', '1', '{\"model\":\"App\\\\Models\\\\Project\",\"table\":\"projects\",\"type\":\"hasMany\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"id\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', '10');
INSERT INTO `data_rows` VALUES ('72', '5', 'id', 'text', 'Id', '1', '0', '0', '0', '0', '0', '{}', '1');
INSERT INTO `data_rows` VALUES ('73', '5', 'time', 'text', 'Time', '0', '1', '1', '1', '1', '1', '{}', '2');
INSERT INTO `data_rows` VALUES ('74', '5', 'title', 'text', 'Title', '0', '1', '1', '1', '1', '1', '{}', '3');
INSERT INTO `data_rows` VALUES ('75', '5', 'order', 'text', 'Order', '0', '1', '1', '1', '1', '1', '{}', '4');
INSERT INTO `data_rows` VALUES ('76', '5', 'status', 'radio_btn', 'Status', '0', '0', '0', '1', '0', '1', '{\"default\":\"1\",\"options\":{\"0\":\"Hide\",\"1\":\"Show\"}}', '5');
INSERT INTO `data_rows` VALUES ('77', '5', 'created_at', 'timestamp', 'Created At', '0', '0', '1', '1', '0', '1', '{}', '6');
INSERT INTO `data_rows` VALUES ('78', '5', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', '{}', '7');
INSERT INTO `data_rows` VALUES ('79', '7', 'job_title', 'text', 'Job Title', '0', '1', '1', '1', '1', '1', '{}', '3');

-- ----------------------------
-- Table structure for data_types
-- ----------------------------
DROP TABLE IF EXISTS `data_types`;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of data_types
-- ----------------------------
INSERT INTO `data_types` VALUES ('1', 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', '', '', '1', '0', null, '2019-02-25 08:29:58', '2019-02-25 08:29:58');
INSERT INTO `data_types` VALUES ('2', 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', null, '', '', '1', '0', null, '2019-02-25 08:29:58', '2019-02-25 08:29:58');
INSERT INTO `data_types` VALUES ('3', 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', null, '', '', '1', '0', null, '2019-02-25 08:29:58', '2019-02-25 08:29:58');
INSERT INTO `data_types` VALUES ('5', 'educations', 'educations', 'Education', 'Education', 'voyager-book', 'App\\Models\\Education', null, null, null, '1', '0', '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-02-25 10:49:16', '2019-02-26 01:53:45');
INSERT INTO `data_types` VALUES ('6', 'experiences', 'experiences', 'Experience', 'Experiences', 'voyager-world', 'App\\Models\\Experience', null, null, null, '1', '0', '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-02-25 10:52:49', '2019-02-26 02:44:34');
INSERT INTO `data_types` VALUES ('7', 'profiles', 'profiles', 'Profile', 'Profiles', 'voyager-info-circled', 'App\\Models\\Profile', null, null, null, '1', '0', '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-02-25 10:55:08', '2019-03-01 07:50:59');
INSERT INTO `data_types` VALUES ('9', 'projects', 'projects', 'Project', 'Projects', 'voyager-documentation', 'App\\Models\\Project', null, null, null, '1', '0', '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-02-25 10:58:54', '2019-02-25 10:58:54');
INSERT INTO `data_types` VALUES ('10', 'skills', 'skills', 'Skill', 'Skills', 'voyager-anchor', 'App\\Models\\Skill', null, null, null, '1', '0', '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-02-25 10:59:37', '2019-03-01 08:05:45');
INSERT INTO `data_types` VALUES ('12', 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'App\\Models\\Category', null, null, null, '1', '0', '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-02-25 11:02:28', '2019-02-26 01:35:52');

-- ----------------------------
-- Table structure for educations
-- ----------------------------
DROP TABLE IF EXISTS `educations`;
CREATE TABLE `educations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` int(11) DEFAULT NULL,
  `order` tinyint(4) DEFAULT '1',
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of educations
-- ----------------------------

-- ----------------------------
-- Table structure for experiences
-- ----------------------------
DROP TABLE IF EXISTS `experiences`;
CREATE TABLE `experiences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `order` tinyint(4) DEFAULT '1',
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of experiences
-- ----------------------------
INSERT INTO `experiences` VALUES ('1', '2007 - 2009', 'Viet Moonlight Product', '3D Modeling Technologist - Video Editor', null, '1', '1', '2019-03-01 10:20:00', '2019-03-01 10:40:21');
INSERT INTO `experiences` VALUES ('2', '2011 - 2014', 'Saigon Domain', 'We Developer - Front End', null, '2', '1', '2019-03-01 10:24:00', '2019-03-01 10:40:14');
INSERT INTO `experiences` VALUES ('3', '2015 - Present', 'ILA Viet Nam', 'Marketing Technologist', null, '3', '1', '2019-03-01 10:30:15', '2019-03-01 10:30:15');

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES ('1', 'admin', '2019-02-25 08:29:59', '2019-02-25 08:29:59');

-- ----------------------------
-- Table structure for menu_items
-- ----------------------------
DROP TABLE IF EXISTS `menu_items`;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of menu_items
-- ----------------------------
INSERT INTO `menu_items` VALUES ('1', '1', 'Dashboard', '', '_self', 'voyager-boat', null, null, '1', '2019-02-25 08:29:59', '2019-02-25 08:29:59', 'voyager.dashboard', null);
INSERT INTO `menu_items` VALUES ('2', '1', 'Media', '', '_self', 'voyager-images', null, null, '8', '2019-02-25 08:29:59', '2019-03-01 10:16:29', 'voyager.media.index', null);
INSERT INTO `menu_items` VALUES ('3', '1', 'Users', '', '_self', 'voyager-person', null, null, '10', '2019-02-25 08:29:59', '2019-03-01 10:16:30', 'voyager.users.index', null);
INSERT INTO `menu_items` VALUES ('4', '1', 'Roles', '', '_self', 'voyager-lock', null, null, '9', '2019-02-25 08:29:59', '2019-03-01 10:16:29', 'voyager.roles.index', null);
INSERT INTO `menu_items` VALUES ('5', '1', 'Tools', '', '_self', 'voyager-tools', null, null, '11', '2019-02-25 08:29:59', '2019-03-01 10:16:21', null, null);
INSERT INTO `menu_items` VALUES ('6', '1', 'Menu Builder', '', '_self', 'voyager-list', null, '5', '1', '2019-02-25 08:29:59', '2019-03-01 10:15:54', 'voyager.menus.index', null);
INSERT INTO `menu_items` VALUES ('7', '1', 'Database', '', '_self', 'voyager-data', null, '5', '2', '2019-02-25 08:29:59', '2019-03-01 10:15:54', 'voyager.database.index', null);
INSERT INTO `menu_items` VALUES ('8', '1', 'Compass', '', '_self', 'voyager-compass', null, '5', '3', '2019-02-25 08:29:59', '2019-03-01 10:15:54', 'voyager.compass.index', null);
INSERT INTO `menu_items` VALUES ('9', '1', 'BREAD', '', '_self', 'voyager-bread', null, '5', '4', '2019-02-25 08:29:59', '2019-03-01 10:15:54', 'voyager.bread.index', null);
INSERT INTO `menu_items` VALUES ('10', '1', 'Settings', '', '_self', 'voyager-settings', null, null, '12', '2019-02-25 08:29:59', '2019-03-01 10:16:21', 'voyager.settings.index', null);
INSERT INTO `menu_items` VALUES ('11', '1', 'Hooks', '', '_self', 'voyager-hook', null, '5', '5', '2019-02-25 08:30:01', '2019-03-01 10:15:54', 'voyager.hooks', null);
INSERT INTO `menu_items` VALUES ('13', '1', 'Education', '', '_self', 'voyager-book', null, null, '5', '2019-02-25 10:49:16', '2019-03-01 10:16:12', 'voyager.educations.index', null);
INSERT INTO `menu_items` VALUES ('14', '1', 'Experiences', '', '_self', 'voyager-world', null, null, '4', '2019-02-25 10:52:50', '2019-03-01 10:16:08', 'voyager.experiences.index', null);
INSERT INTO `menu_items` VALUES ('15', '1', 'Profiles', '', '_self', 'voyager-info-circled', null, null, '2', '2019-02-25 10:55:08', '2019-03-01 10:15:56', 'voyager.profiles.index', null);
INSERT INTO `menu_items` VALUES ('16', '1', 'Projects', '', '_self', 'voyager-documentation', null, null, '7', '2019-02-25 10:58:54', '2019-03-01 10:16:21', 'voyager.projects.index', null);
INSERT INTO `menu_items` VALUES ('17', '1', 'Skills', '', '_self', 'voyager-anchor', null, null, '3', '2019-02-25 10:59:38', '2019-03-01 10:16:04', 'voyager.skills.index', null);
INSERT INTO `menu_items` VALUES ('18', '1', 'Categories', '', '_self', null, null, null, '6', '2019-02-25 11:02:28', '2019-03-01 10:16:18', 'voyager.categories.index', null);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2016_01_01_000000_add_voyager_user_fields', '1');
INSERT INTO `migrations` VALUES ('4', '2016_01_01_000000_create_data_types_table', '1');
INSERT INTO `migrations` VALUES ('5', '2016_01_01_000000_create_pages_table', '1');
INSERT INTO `migrations` VALUES ('6', '2016_01_01_000000_create_posts_table', '1');
INSERT INTO `migrations` VALUES ('7', '2016_02_15_204651_create_categories_table', '1');
INSERT INTO `migrations` VALUES ('8', '2016_05_19_173453_create_menu_table', '1');
INSERT INTO `migrations` VALUES ('9', '2016_10_21_190000_create_roles_table', '1');
INSERT INTO `migrations` VALUES ('10', '2016_10_21_190000_create_settings_table', '1');
INSERT INTO `migrations` VALUES ('11', '2016_11_30_135954_create_permission_table', '1');
INSERT INTO `migrations` VALUES ('12', '2016_11_30_141208_create_permission_role_table', '1');
INSERT INTO `migrations` VALUES ('13', '2016_12_26_201236_data_types__add__server_side', '1');
INSERT INTO `migrations` VALUES ('14', '2017_01_13_000000_add_route_to_menu_items_table', '1');
INSERT INTO `migrations` VALUES ('15', '2017_01_14_005015_create_translations_table', '1');
INSERT INTO `migrations` VALUES ('16', '2017_01_15_000000_make_table_name_nullable_in_permissions_table', '1');
INSERT INTO `migrations` VALUES ('17', '2017_03_06_000000_add_controller_to_data_types_table', '1');
INSERT INTO `migrations` VALUES ('18', '2017_04_11_000000_alter_post_nullable_fields_table', '1');
INSERT INTO `migrations` VALUES ('19', '2017_04_21_000000_add_order_to_data_rows_table', '1');
INSERT INTO `migrations` VALUES ('20', '2017_07_05_210000_add_policyname_to_data_types_table', '1');
INSERT INTO `migrations` VALUES ('21', '2017_08_05_000000_add_group_to_settings_table', '1');
INSERT INTO `migrations` VALUES ('22', '2017_11_26_013050_add_user_role_relationship', '1');
INSERT INTO `migrations` VALUES ('23', '2017_11_26_015000_create_user_roles_table', '1');
INSERT INTO `migrations` VALUES ('24', '2018_03_11_000000_add_user_settings', '1');
INSERT INTO `migrations` VALUES ('25', '2018_03_14_000000_add_details_to_data_types_table', '1');
INSERT INTO `migrations` VALUES ('26', '2018_03_16_000000_make_settings_value_nullable', '1');
INSERT INTO `migrations` VALUES ('27', '2019_03_01_105909_create_categories_table', '0');
INSERT INTO `migrations` VALUES ('28', '2019_03_01_105909_create_contacts_table', '0');
INSERT INTO `migrations` VALUES ('29', '2019_03_01_105909_create_data_rows_table', '0');
INSERT INTO `migrations` VALUES ('30', '2019_03_01_105909_create_data_types_table', '0');
INSERT INTO `migrations` VALUES ('31', '2019_03_01_105909_create_educations_table', '0');
INSERT INTO `migrations` VALUES ('32', '2019_03_01_105909_create_experiences_table', '0');
INSERT INTO `migrations` VALUES ('33', '2019_03_01_105909_create_menu_items_table', '0');
INSERT INTO `migrations` VALUES ('34', '2019_03_01_105909_create_menus_table', '0');
INSERT INTO `migrations` VALUES ('35', '2019_03_01_105909_create_pages_table', '0');
INSERT INTO `migrations` VALUES ('36', '2019_03_01_105909_create_password_resets_table', '0');
INSERT INTO `migrations` VALUES ('37', '2019_03_01_105909_create_permission_role_table', '0');
INSERT INTO `migrations` VALUES ('38', '2019_03_01_105909_create_permissions_table', '0');
INSERT INTO `migrations` VALUES ('39', '2019_03_01_105909_create_posts_table', '0');
INSERT INTO `migrations` VALUES ('40', '2019_03_01_105909_create_profiles_table', '0');
INSERT INTO `migrations` VALUES ('41', '2019_03_01_105909_create_projects_table', '0');
INSERT INTO `migrations` VALUES ('42', '2019_03_01_105909_create_roles_table', '0');
INSERT INTO `migrations` VALUES ('43', '2019_03_01_105909_create_settings_table', '0');
INSERT INTO `migrations` VALUES ('44', '2019_03_01_105909_create_skills_table', '0');
INSERT INTO `migrations` VALUES ('45', '2019_03_01_105909_create_translations_table', '0');
INSERT INTO `migrations` VALUES ('46', '2019_03_01_105909_create_user_roles_table', '0');
INSERT INTO `migrations` VALUES ('47', '2019_03_01_105909_create_users_table', '0');
INSERT INTO `migrations` VALUES ('48', '2019_03_01_105912_add_foreign_keys_to_categories_table', '0');
INSERT INTO `migrations` VALUES ('49', '2019_03_01_105912_add_foreign_keys_to_data_rows_table', '0');
INSERT INTO `migrations` VALUES ('50', '2019_03_01_105912_add_foreign_keys_to_menu_items_table', '0');
INSERT INTO `migrations` VALUES ('51', '2019_03_01_105912_add_foreign_keys_to_permission_role_table', '0');
INSERT INTO `migrations` VALUES ('52', '2019_03_01_105912_add_foreign_keys_to_user_roles_table', '0');
INSERT INTO `migrations` VALUES ('53', '2019_03_01_105912_add_foreign_keys_to_users_table', '0');
INSERT INTO `migrations` VALUES ('54', '2019_03_01_110050_create_categories_table', '2');
INSERT INTO `migrations` VALUES ('55', '2019_03_01_110050_create_contacts_table', '2');
INSERT INTO `migrations` VALUES ('56', '2019_03_01_110050_create_data_rows_table', '2');
INSERT INTO `migrations` VALUES ('57', '2019_03_01_110050_create_data_types_table', '2');
INSERT INTO `migrations` VALUES ('58', '2019_03_01_110050_create_educations_table', '2');
INSERT INTO `migrations` VALUES ('59', '2019_03_01_110050_create_experiences_table', '2');
INSERT INTO `migrations` VALUES ('60', '2019_03_01_110050_create_menu_items_table', '2');
INSERT INTO `migrations` VALUES ('61', '2019_03_01_110050_create_menus_table', '2');
INSERT INTO `migrations` VALUES ('62', '2019_03_01_110050_create_pages_table', '2');
INSERT INTO `migrations` VALUES ('63', '2019_03_01_110050_create_password_resets_table', '2');
INSERT INTO `migrations` VALUES ('64', '2019_03_01_110050_create_permission_role_table', '2');
INSERT INTO `migrations` VALUES ('65', '2019_03_01_110050_create_permissions_table', '2');
INSERT INTO `migrations` VALUES ('66', '2019_03_01_110050_create_posts_table', '2');
INSERT INTO `migrations` VALUES ('67', '2019_03_01_110050_create_profiles_table', '2');
INSERT INTO `migrations` VALUES ('68', '2019_03_01_110050_create_projects_table', '2');
INSERT INTO `migrations` VALUES ('69', '2019_03_01_110050_create_roles_table', '2');
INSERT INTO `migrations` VALUES ('70', '2019_03_01_110050_create_settings_table', '2');
INSERT INTO `migrations` VALUES ('71', '2019_03_01_110050_create_skills_table', '2');
INSERT INTO `migrations` VALUES ('72', '2019_03_01_110050_create_translations_table', '2');
INSERT INTO `migrations` VALUES ('73', '2019_03_01_110050_create_user_roles_table', '2');
INSERT INTO `migrations` VALUES ('74', '2019_03_01_110050_create_users_table', '2');
INSERT INTO `migrations` VALUES ('75', '2019_03_01_110052_add_foreign_keys_to_categories_table', '2');
INSERT INTO `migrations` VALUES ('76', '2019_03_01_110052_add_foreign_keys_to_data_rows_table', '2');
INSERT INTO `migrations` VALUES ('77', '2019_03_01_110052_add_foreign_keys_to_menu_items_table', '2');
INSERT INTO `migrations` VALUES ('78', '2019_03_01_110052_add_foreign_keys_to_permission_role_table', '2');
INSERT INTO `migrations` VALUES ('79', '2019_03_01_110052_add_foreign_keys_to_user_roles_table', '2');
INSERT INTO `migrations` VALUES ('80', '2019_03_01_110052_add_foreign_keys_to_users_table', '2');

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of pages
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES ('1', 'browse_admin', null, '2019-02-25 08:29:59', '2019-02-25 08:29:59');
INSERT INTO `permissions` VALUES ('2', 'browse_bread', null, '2019-02-25 08:29:59', '2019-02-25 08:29:59');
INSERT INTO `permissions` VALUES ('3', 'browse_database', null, '2019-02-25 08:29:59', '2019-02-25 08:29:59');
INSERT INTO `permissions` VALUES ('4', 'browse_media', null, '2019-02-25 08:29:59', '2019-02-25 08:29:59');
INSERT INTO `permissions` VALUES ('5', 'browse_compass', null, '2019-02-25 08:29:59', '2019-02-25 08:29:59');
INSERT INTO `permissions` VALUES ('6', 'browse_menus', 'menus', '2019-02-25 08:29:59', '2019-02-25 08:29:59');
INSERT INTO `permissions` VALUES ('7', 'read_menus', 'menus', '2019-02-25 08:29:59', '2019-02-25 08:29:59');
INSERT INTO `permissions` VALUES ('8', 'edit_menus', 'menus', '2019-02-25 08:30:00', '2019-02-25 08:30:00');
INSERT INTO `permissions` VALUES ('9', 'add_menus', 'menus', '2019-02-25 08:30:00', '2019-02-25 08:30:00');
INSERT INTO `permissions` VALUES ('10', 'delete_menus', 'menus', '2019-02-25 08:30:00', '2019-02-25 08:30:00');
INSERT INTO `permissions` VALUES ('11', 'browse_roles', 'roles', '2019-02-25 08:30:00', '2019-02-25 08:30:00');
INSERT INTO `permissions` VALUES ('12', 'read_roles', 'roles', '2019-02-25 08:30:00', '2019-02-25 08:30:00');
INSERT INTO `permissions` VALUES ('13', 'edit_roles', 'roles', '2019-02-25 08:30:00', '2019-02-25 08:30:00');
INSERT INTO `permissions` VALUES ('14', 'add_roles', 'roles', '2019-02-25 08:30:00', '2019-02-25 08:30:00');
INSERT INTO `permissions` VALUES ('15', 'delete_roles', 'roles', '2019-02-25 08:30:00', '2019-02-25 08:30:00');
INSERT INTO `permissions` VALUES ('16', 'browse_users', 'users', '2019-02-25 08:30:00', '2019-02-25 08:30:00');
INSERT INTO `permissions` VALUES ('17', 'read_users', 'users', '2019-02-25 08:30:00', '2019-02-25 08:30:00');
INSERT INTO `permissions` VALUES ('18', 'edit_users', 'users', '2019-02-25 08:30:00', '2019-02-25 08:30:00');
INSERT INTO `permissions` VALUES ('19', 'add_users', 'users', '2019-02-25 08:30:00', '2019-02-25 08:30:00');
INSERT INTO `permissions` VALUES ('20', 'delete_users', 'users', '2019-02-25 08:30:00', '2019-02-25 08:30:00');
INSERT INTO `permissions` VALUES ('21', 'browse_settings', 'settings', '2019-02-25 08:30:00', '2019-02-25 08:30:00');
INSERT INTO `permissions` VALUES ('22', 'read_settings', 'settings', '2019-02-25 08:30:00', '2019-02-25 08:30:00');
INSERT INTO `permissions` VALUES ('23', 'edit_settings', 'settings', '2019-02-25 08:30:00', '2019-02-25 08:30:00');
INSERT INTO `permissions` VALUES ('24', 'add_settings', 'settings', '2019-02-25 08:30:00', '2019-02-25 08:30:00');
INSERT INTO `permissions` VALUES ('25', 'delete_settings', 'settings', '2019-02-25 08:30:00', '2019-02-25 08:30:00');
INSERT INTO `permissions` VALUES ('26', 'browse_hooks', null, '2019-02-25 08:30:01', '2019-02-25 08:30:01');
INSERT INTO `permissions` VALUES ('32', 'browse_educations', 'educations', '2019-02-25 10:49:16', '2019-02-25 10:49:16');
INSERT INTO `permissions` VALUES ('33', 'read_educations', 'educations', '2019-02-25 10:49:16', '2019-02-25 10:49:16');
INSERT INTO `permissions` VALUES ('34', 'edit_educations', 'educations', '2019-02-25 10:49:16', '2019-02-25 10:49:16');
INSERT INTO `permissions` VALUES ('35', 'add_educations', 'educations', '2019-02-25 10:49:16', '2019-02-25 10:49:16');
INSERT INTO `permissions` VALUES ('36', 'delete_educations', 'educations', '2019-02-25 10:49:16', '2019-02-25 10:49:16');
INSERT INTO `permissions` VALUES ('37', 'browse_experiences', 'experiences', '2019-02-25 10:52:50', '2019-02-25 10:52:50');
INSERT INTO `permissions` VALUES ('38', 'read_experiences', 'experiences', '2019-02-25 10:52:50', '2019-02-25 10:52:50');
INSERT INTO `permissions` VALUES ('39', 'edit_experiences', 'experiences', '2019-02-25 10:52:50', '2019-02-25 10:52:50');
INSERT INTO `permissions` VALUES ('40', 'add_experiences', 'experiences', '2019-02-25 10:52:50', '2019-02-25 10:52:50');
INSERT INTO `permissions` VALUES ('41', 'delete_experiences', 'experiences', '2019-02-25 10:52:50', '2019-02-25 10:52:50');
INSERT INTO `permissions` VALUES ('42', 'browse_profiles', 'profiles', '2019-02-25 10:55:08', '2019-02-25 10:55:08');
INSERT INTO `permissions` VALUES ('43', 'read_profiles', 'profiles', '2019-02-25 10:55:08', '2019-02-25 10:55:08');
INSERT INTO `permissions` VALUES ('44', 'edit_profiles', 'profiles', '2019-02-25 10:55:08', '2019-02-25 10:55:08');
INSERT INTO `permissions` VALUES ('45', 'add_profiles', 'profiles', '2019-02-25 10:55:08', '2019-02-25 10:55:08');
INSERT INTO `permissions` VALUES ('46', 'delete_profiles', 'profiles', '2019-02-25 10:55:08', '2019-02-25 10:55:08');
INSERT INTO `permissions` VALUES ('47', 'browse_projects', 'projects', '2019-02-25 10:58:54', '2019-02-25 10:58:54');
INSERT INTO `permissions` VALUES ('48', 'read_projects', 'projects', '2019-02-25 10:58:54', '2019-02-25 10:58:54');
INSERT INTO `permissions` VALUES ('49', 'edit_projects', 'projects', '2019-02-25 10:58:54', '2019-02-25 10:58:54');
INSERT INTO `permissions` VALUES ('50', 'add_projects', 'projects', '2019-02-25 10:58:54', '2019-02-25 10:58:54');
INSERT INTO `permissions` VALUES ('51', 'delete_projects', 'projects', '2019-02-25 10:58:54', '2019-02-25 10:58:54');
INSERT INTO `permissions` VALUES ('52', 'browse_skills', 'skills', '2019-02-25 10:59:37', '2019-02-25 10:59:37');
INSERT INTO `permissions` VALUES ('53', 'read_skills', 'skills', '2019-02-25 10:59:37', '2019-02-25 10:59:37');
INSERT INTO `permissions` VALUES ('54', 'edit_skills', 'skills', '2019-02-25 10:59:37', '2019-02-25 10:59:37');
INSERT INTO `permissions` VALUES ('55', 'add_skills', 'skills', '2019-02-25 10:59:37', '2019-02-25 10:59:37');
INSERT INTO `permissions` VALUES ('56', 'delete_skills', 'skills', '2019-02-25 10:59:37', '2019-02-25 10:59:37');
INSERT INTO `permissions` VALUES ('57', 'browse_categories', 'categories', '2019-02-25 11:02:28', '2019-02-25 11:02:28');
INSERT INTO `permissions` VALUES ('58', 'read_categories', 'categories', '2019-02-25 11:02:28', '2019-02-25 11:02:28');
INSERT INTO `permissions` VALUES ('59', 'edit_categories', 'categories', '2019-02-25 11:02:28', '2019-02-25 11:02:28');
INSERT INTO `permissions` VALUES ('60', 'add_categories', 'categories', '2019-02-25 11:02:28', '2019-02-25 11:02:28');
INSERT INTO `permissions` VALUES ('61', 'delete_categories', 'categories', '2019-02-25 11:02:28', '2019-02-25 11:02:28');

-- ----------------------------
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
INSERT INTO `permission_role` VALUES ('1', '1');
INSERT INTO `permission_role` VALUES ('2', '1');
INSERT INTO `permission_role` VALUES ('3', '1');
INSERT INTO `permission_role` VALUES ('4', '1');
INSERT INTO `permission_role` VALUES ('5', '1');
INSERT INTO `permission_role` VALUES ('6', '1');
INSERT INTO `permission_role` VALUES ('7', '1');
INSERT INTO `permission_role` VALUES ('8', '1');
INSERT INTO `permission_role` VALUES ('9', '1');
INSERT INTO `permission_role` VALUES ('10', '1');
INSERT INTO `permission_role` VALUES ('11', '1');
INSERT INTO `permission_role` VALUES ('12', '1');
INSERT INTO `permission_role` VALUES ('13', '1');
INSERT INTO `permission_role` VALUES ('14', '1');
INSERT INTO `permission_role` VALUES ('15', '1');
INSERT INTO `permission_role` VALUES ('16', '1');
INSERT INTO `permission_role` VALUES ('17', '1');
INSERT INTO `permission_role` VALUES ('18', '1');
INSERT INTO `permission_role` VALUES ('19', '1');
INSERT INTO `permission_role` VALUES ('20', '1');
INSERT INTO `permission_role` VALUES ('21', '1');
INSERT INTO `permission_role` VALUES ('22', '1');
INSERT INTO `permission_role` VALUES ('23', '1');
INSERT INTO `permission_role` VALUES ('24', '1');
INSERT INTO `permission_role` VALUES ('25', '1');
INSERT INTO `permission_role` VALUES ('26', '1');
INSERT INTO `permission_role` VALUES ('32', '1');
INSERT INTO `permission_role` VALUES ('33', '1');
INSERT INTO `permission_role` VALUES ('34', '1');
INSERT INTO `permission_role` VALUES ('35', '1');
INSERT INTO `permission_role` VALUES ('36', '1');
INSERT INTO `permission_role` VALUES ('37', '1');
INSERT INTO `permission_role` VALUES ('38', '1');
INSERT INTO `permission_role` VALUES ('39', '1');
INSERT INTO `permission_role` VALUES ('40', '1');
INSERT INTO `permission_role` VALUES ('41', '1');
INSERT INTO `permission_role` VALUES ('42', '1');
INSERT INTO `permission_role` VALUES ('43', '1');
INSERT INTO `permission_role` VALUES ('44', '1');
INSERT INTO `permission_role` VALUES ('45', '1');
INSERT INTO `permission_role` VALUES ('46', '1');
INSERT INTO `permission_role` VALUES ('47', '1');
INSERT INTO `permission_role` VALUES ('48', '1');
INSERT INTO `permission_role` VALUES ('49', '1');
INSERT INTO `permission_role` VALUES ('50', '1');
INSERT INTO `permission_role` VALUES ('51', '1');
INSERT INTO `permission_role` VALUES ('52', '1');
INSERT INTO `permission_role` VALUES ('53', '1');
INSERT INTO `permission_role` VALUES ('54', '1');
INSERT INTO `permission_role` VALUES ('55', '1');
INSERT INTO `permission_role` VALUES ('56', '1');
INSERT INTO `permission_role` VALUES ('57', '1');
INSERT INTO `permission_role` VALUES ('58', '1');
INSERT INTO `permission_role` VALUES ('59', '1');
INSERT INTO `permission_role` VALUES ('60', '1');
INSERT INTO `permission_role` VALUES ('61', '1');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of posts
-- ----------------------------

-- ----------------------------
-- Table structure for profiles
-- ----------------------------
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of profiles
-- ----------------------------
INSERT INTO `profiles` VALUES ('1', 'Liem Phan', 'Web Developer - Marketing Technologist - Photographer', null, '128 Le Quang Dinh Street, Ward 14, Binh Thanh District', 'minhliemphp@gmail.com', '0902 942 054 - 09186 91860', '2019-03-01 07:45:00', '2019-03-01 07:45:54');

-- ----------------------------
-- Table structure for projects
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order` tinyint(4) DEFAULT '1',
  `status` tinyint(4) DEFAULT '1',
  `category_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of projects
-- ----------------------------

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'admin', 'Administrator', '2019-02-25 08:29:59', '2019-02-25 08:29:59');
INSERT INTO `roles` VALUES ('2', 'user', 'Normal User', '2019-02-25 08:29:59', '2019-02-25 08:29:59');

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES ('1', 'site.title', 'Site Title', 'Site Title', '', 'text', '1', 'Site');
INSERT INTO `settings` VALUES ('2', 'site.description', 'Site Description', 'Site Description', '', 'text', '2', 'Site');
INSERT INTO `settings` VALUES ('3', 'site.logo', 'Site Logo', '', '', 'image', '3', 'Site');
INSERT INTO `settings` VALUES ('4', 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', null, '', 'text', '4', 'Site');
INSERT INTO `settings` VALUES ('5', 'admin.bg_image', 'Admin Background Image', '', '', 'image', '5', 'Admin');
INSERT INTO `settings` VALUES ('6', 'admin.title', 'Admin Title', 'RST', '', 'text', '1', 'Admin');
INSERT INTO `settings` VALUES ('7', 'admin.description', 'Admin Description', 'Welcome to RST Dashboard. This\'s extend from Voyager Missing Laravel.', '', 'text', '2', 'Admin');
INSERT INTO `settings` VALUES ('8', 'admin.loader', 'Admin Loader', '', '', 'image', '3', 'Admin');
INSERT INTO `settings` VALUES ('9', 'admin.icon_image', 'Admin Icon Image', '', '', 'image', '4', 'Admin');
INSERT INTO `settings` VALUES ('10', 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', null, '', 'text', '1', 'Admin');

-- ----------------------------
-- Table structure for skills
-- ----------------------------
DROP TABLE IF EXISTS `skills`;
CREATE TABLE `skills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of skills
-- ----------------------------
INSERT INTO `skills` VALUES ('1', 'HTML', '85', '2019-03-01 08:05:20', '2019-03-01 08:05:20');
INSERT INTO `skills` VALUES ('2', 'CSS', '85', '2019-03-01 08:12:05', '2019-03-01 08:12:05');
INSERT INTO `skills` VALUES ('3', 'JQUERY', '75', '2019-03-01 08:12:26', '2019-03-01 08:12:26');
INSERT INTO `skills` VALUES ('4', 'PHP - LARAVEL', '90', '2019-03-01 08:16:58', '2019-03-01 08:16:58');
INSERT INTO `skills` VALUES ('5', 'MYSQL', '80', '2019-03-01 08:17:12', '2019-03-01 08:17:12');
INSERT INTO `skills` VALUES ('6', 'CENTOS', '65', '2019-03-01 08:17:56', '2019-03-01 08:17:56');
INSERT INTO `skills` VALUES ('7', 'MARKETING SUPPORT', '65', '2019-03-01 08:19:07', '2019-03-01 08:19:07');

-- ----------------------------
-- Table structure for translations
-- ----------------------------
DROP TABLE IF EXISTS `translations`;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of translations
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'Liem Phan', 'liemphan@admin.com', 'users/default.png', '$2y$10$qmMItJ7OtCHfVUnEw5oKe.NTIa82ji5FLFzbczmNh4Gnm5WEdbt1a', null, null, '2019-02-25 08:31:09', '2019-02-25 08:31:09');

-- ----------------------------
-- Table structure for user_roles
-- ----------------------------
DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE `user_roles` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of user_roles
-- ----------------------------
