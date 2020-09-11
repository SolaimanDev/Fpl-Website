-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 10:53 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronics`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoryName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryDescription` text COLLATE utf8mb4_unicode_ci,
  `serial_num` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `categoryDescription`, `serial_num`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Plastic Buckets', NULL, 1, 1, '2019-05-06 23:18:19', '2019-05-06 23:18:19'),
(2, 'Round Plastic Buckets', NULL, 2, 1, '2019-05-06 23:18:50', '2019-05-06 23:18:50'),
(3, 'Plastic Bottles', NULL, 3, 1, '2019-05-06 23:19:17', '2019-05-06 23:19:17'),
(4, 'Plastic Buckets', NULL, 4, 1, '2019-05-06 23:19:38', '2019-05-06 23:19:38'),
(5, 'Plastic Containers', NULL, 5, 1, '2019-05-06 23:20:00', '2019-05-06 23:20:00'),
(6, 'Plastic Fittings', NULL, 6, 1, '2019-05-06 23:20:20', '2019-05-06 23:20:20'),
(7, 'Pipe & Fittings', NULL, 7, 1, '2019-05-06 23:27:39', '2019-05-06 23:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submenu_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mailuses`
--

CREATE TABLE `mailuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mailuses`
--

INSERT INTO `mailuses` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Solaiman Ahmed', 'solaiman.cse14@gmail.com', 'Test Mail', 'Hello Dhaka', '2019-05-15 22:47:26', '2019-05-15 22:47:26'),
(2, 'Test Mail', 'solaiman.cse14@gmail.com', 'Test Mail', 'Test Mail', '2019-05-15 22:52:00', '2019-05-15 22:52:00'),
(3, 'shikkhangonn', 'kaushikrahman@gmail.com', 'Confirm Email', 'Whenever you use CSS rules in the head of your document, you must use a tool to bring it all inline at the end of the process. If you use a service such as MailChimp or Campaign Monitor, they will automatically offer to bring your styles inline for you when you import your design. You must do this because the some clients, such as Gmail, will ignore or strip out your <style> tag contents, or ignore them. You can also use a tool such as Premailer to bring your CSS inline. If you use Premailer or a similar tool, remember to take out your media queries before processing (since we want them to remain intact), then re-insert them at the end. MailChimp and Campaign Monitor automatically take care of this for you.', '2019-05-15 22:56:26', '2019-05-15 22:56:26'),
(4, 'Solaiman Ahmed', 'ibrahimmondul117@gmail.com', 'Testing Mail', 'When you are learning how to write a professional email, even if it’s short, you might take as much time as when you are writing a long email. That’s because you have to think about everything you are to write, to be able to convey all the information needed, though briefly. However, with practice, your writing skill will get honed and you will be able to get faster and better at it.\r\n\r\nThis article is all about emails for the workplace as well as how to start a professional email and how to end a professional email. Read on and be guided by all this useful information.', '2019-05-15 23:04:58', '2019-05-15 23:04:58'),
(5, 'Solaiman Ahmed', 'rjillur69@gmail.com', 'Test mail', 'If you compare this code to Figure 4, the marked up printout of our email design, you’ll see I’ve added the font declarations for family, size, and line-height. I’ve set line-height slightly larger than font-size to ensure there’s minimum amount of space above and below this sentence. As you code your HTML email, do make time to play with this type of setting: change line-height to 24px then refresh your web browser to see the change.', '2019-05-15 23:13:17', '2019-05-15 23:13:17'),
(6, 'Kaisar Rahman', 'kaushikrahman@gmail.com', 'Test mail', 'If you compare this code to Figure 4, the marked up printout of our email design, you’ll see I’ve added the font declarations for family, size, and line-height. I’ve set line-height slightly larger than font-size to ensure there’s minimum amount of space above and below this sentence. As you code your HTML email, do make time to play with this type of setting: change line-height to 24px then refresh your web browser to see the change.', '2019-05-15 23:21:02', '2019-05-15 23:21:02'),
(7, 'Arnold R. Garcia', 'shohan.st27@gmail.com', 'Confirm Email', 'If you compare this code to Figure 4, the marked up printout of our email design, you’ll see I’ve added the font declarations for family, size, and line-height. I’ve set line-height slightly larger than font-size to ensure there’s minimum amount of space above and below this sentence. As you code your HTML email, do make time to play with this type of setting: change line-height to 24px then refresh your web browser to see the change.', '2019-05-15 23:24:13', '2019-05-15 23:24:13'),
(8, 'Solaiman Ahmed', 'ibrahimmondul117@gmail.com', 'Confirm Email', 'Hello Bangladesh', '2019-05-16 00:20:18', '2019-05-16 00:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'About us', 'about', '2019-04-17 04:16:26', '2019-04-27 04:23:55'),
(2, 'contact us', 'contact', '2019-04-17 22:26:25', '2019-04-17 22:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_02_16_114417_create_settings_table', 2),
(6, '2019_02_16_175742_create_menus_table', 2),
(7, '2019_02_17_094123_create_submenus_table', 2),
(8, '2019_02_18_055321_create_mailuses_table', 2),
(10, '2019_03_02_083628_create_contents_table', 2),
(12, '2019_04_17_084227_create_categories_table', 3),
(14, '2019_04_20_041030_create_products_table', 4),
(15, '2019_02_18_084028_create_sliders_table', 5),
(17, '2014_10_12_000000_create_users_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `productName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productDescription` text COLLATE utf8mb4_unicode_ci,
  `product_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `pictureOne` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pictureTwo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pictureThree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `oldPrice` int(11) DEFAULT NULL,
  `serial_no` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `productDescription`, `product_slug`, `category_id`, `pictureOne`, `pictureTwo`, `pictureThree`, `price`, `oldPrice`, `serial_no`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Standard 5 Gallon Buckets', '<p>These round buckets are a great way to store your products. They have a space-saving, tapered design that allows pails to nest. Note: Cartons and pallets come one color per carton or pallet and cannot be broken for discounted price. Contact us for truckload pricing.</p>\r\n<ul>\r\n<li>\r\n<p>Buckets &amp; lids made of HDPE</p>\r\n</li>\r\n<li>\r\n<p>Lids have styrene butadiene gaskets (except reusable)</p>\r\n</li>\r\n<li>\r\n<p>Sturdy wire bail with a plastic handgrip</p>\r\n</li>\r\n<li>\r\n<p>Wall thickness: .075\" +/- .005\"</p>\r\n</li>\r\n<li>\r\n<p>Dimensions: 11.91\" top OD (10.33\" bot. OD) x 14.5\" Hgt.</p>\r\n</li>\r\n<li>\r\n<p>Weight capacity: 40 lbs. per bucket</p>\r\n</li>\r\n<li>\r\n<p>Tear tab lid is tamper evident</p>\r\n</li>\r\n<li>\r\n<p>Withstand temperatures of up to 180&deg;F</p>\r\n</li>\r\n<li>\r\n<p>Meets FDA standards</p>\r\n</li>\r\n<li>\r\n<p>Not UN or DOT approved for shipping</p>\r\n</li>\r\n</ul>', 'Standard-5-Gallon-Buckets', 2, '382070519053406.jpeg', NULL, NULL, NULL, NULL, 1, 1, '2019-05-06 23:34:06', '2019-05-06 23:44:59'),
(2, 'Flat Back Buckets', '<p>These buckets are flat sided for ease in carrying and to extend the life of the bucket. They fit flat against the wall, so are not apt to be knocked over.</p>\r\n<ul style=\"box-sizing: inherit; margin-bottom: 0px; padding-left: 2em; margin-top: 0.5em; color: #333333; font-family: Muli, sans-serif; font-size: 16px; text-shadow: inherit !important;\">\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">\r\n<p>Made of a rubber-polymer alloy</p>\r\n</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">\r\n<p>Resist cold weather cracking</p>\r\n</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">\r\n<p>Graduated in 1/2 gallon increments</p>\r\n</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">\r\n<p>Temperature range: -10&deg; to 160&deg;F</p>\r\n</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">\r\n<p>Meets FDA standards</p>\r\n</li>\r\n</ul>', 'Flat-Back-Buckets', 2, '989070519053939.jpeg', NULL, NULL, NULL, NULL, 2, 1, '2019-05-06 23:39:39', '2019-05-06 23:39:39'),
(3, 'Ultimate Pail for Liquids', '<blockquote>\r\n<p>The first screw top with built-in turning handle for ease of opening and closing.</p>\r\n</blockquote>\r\n<ul>\r\n<li>\r\n<blockquote>Prime virgin HDPE pail &amp; lid</blockquote>\r\n</li>\r\n<li>\r\n<blockquote>Vacuum-tight, moisture-resistant EPDM seal</blockquote>\r\n</li>\r\n<li>\r\n<blockquote>Tamper-evident</blockquote>\r\n</li>\r\n<li>\r\n<blockquote>Optional spout for pouring liquid or dry products</blockquote>\r\n</li>\r\n<li>\r\n<blockquote>Outside dimensions: 13.35&rdquo; Top , 10.51 Bottom x 16.75&rdquo; Hgt. with lid</blockquote>\r\n</li>\r\n<li>\r\n<blockquote>Inside dimensions: 12.03\" Top x 15.75&rdquo; Hgt. w/out lid</blockquote>\r\n</li>\r\n<li>\r\n<blockquote>Minimum cover &amp; pail wall thickness: 0.090&rdquo;</blockquote>\r\n</li>\r\n<li>\r\n<blockquote>UN Certified for Liquid Groups II &amp; III</blockquote>\r\n</li>\r\n<li>\r\n<blockquote>Meets FDA standards</blockquote>\r\n</li>\r\n<li>\r\n<blockquote>Buckets &amp; lids sold separately</blockquote>\r\n</li>\r\n</ul>', 'Ultimate-Pail-for-Liquids', 1, '349070519054643.jpeg', 'D:\\xampp\\tmp\\phpA016.tmp', 'D:\\xampp\\tmp\\phpA017.tmp', NULL, NULL, 3, 1, '2019-05-06 23:46:43', '2019-05-06 23:52:06'),
(4, 'Bucket Covers & Lids', '<p style=\"box-sizing: inherit; margin: 0px; color: #333333; font-family: Muli, sans-serif; font-size: 16px; text-shadow: inherit !important;\">Standard, spouted and reusable lids for our 3-1/2, 5, 6 and 7 gallon buckets. All lids (except the snap on reusable) have a styrene butadiene rubber gasket for secure transportation of liquids. A rubber mallet is needed to put all lids on except for the reuseable lids. Lids meet FDA standards.</p>\r\n<ul style=\"box-sizing: inherit; margin-bottom: 0px; padding-left: 2em; margin-top: 0.5em; color: #333333; font-family: Muli, sans-serif; font-size: 16px; text-shadow: inherit !important;\">\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">HDPE</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">All lids (except the snap on reusable) have a styrene butadiene rubber gasket</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">Gaskets provide secure transport of liquids</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">A rubber mallet is needed to put all lids on except for the reuseable lids</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">Meet FDA standards</li>\r\n</ul>', 'Bucket-Covers-&-Lids', 2, '631070519055134.jpeg', '12070519055134.jpeg', '202070519055134.jpeg', NULL, NULL, 4, 1, '2019-05-06 23:51:34', '2019-05-06 23:53:32'),
(5, 'Shop Buckets By Size', '<p>These translucent pails come with a convenient carry handle. They are ideal for mixing paint and other liquids. Pails are made of plastic and have a wide range of possible uses at any work site.</p>\r\n<ul style=\"box-sizing: inherit; margin-bottom: 0px; padding-left: 2em; margin-top: 0.5em; color: #333333; font-family: Muli, sans-serif; font-size: 16px; text-shadow: inherit !important;\">\r\n<li style=\"box-sizing: inherit; margin-top: 0px; text-shadow: inherit !important; text-align: left;\">Polyethylene</li>\r\n<li style=\"box-sizing: inherit; margin-top: 0px; text-shadow: inherit !important; text-align: left;\">Ideal for mixing paint &amp; other liquids</li>\r\n<li style=\"box-sizing: inherit; margin-top: 0px; text-shadow: inherit !important; text-align: left;\">Useful for transporting paint and other materials</li>\r\n<li style=\"box-sizing: inherit; margin-top: 0px; text-shadow: inherit !important; text-align: left;\">1 gallon bucket dimensions: 7-1/2\" Top OD (6-3/8\" Bottom OD) x 7-1/8\" Hgt.</li>\r\n<li style=\"box-sizing: inherit; margin-top: 0px; text-shadow: inherit !important; text-align: left;\">3.5 gallon bucket dimensions: 11-3/4\" Top OD (10-1/4\" Bottom OD) x 10-7/8\" Hgt.</li>\r\n<li style=\"box-sizing: inherit; margin-top: 0px; text-shadow: inherit !important; text-align: left;\">Meets FDA standards</li>\r\n</ul>', 'Shop-Buckets-By-Size', 2, '483070519055651.jpeg', '794070519055651.jpeg', NULL, NULL, NULL, 5, 1, '2019-05-06 23:56:51', '2019-05-06 23:56:51'),
(6, 'Round & Square Jugs', '<p style=\"box-sizing: inherit; margin: 0px; color: #333333; font-family: Muli, sans-serif; font-size: 16px; text-shadow: inherit !important;\">These heavy-weight, narrow mouth containers have built-in handles and a funnel top for convenient, easy pouring.</p>\r\n<ul style=\"box-sizing: inherit; margin-bottom: 0px; padding-left: 2em; margin-top: 0.5em; color: #333333; font-family: Muli, sans-serif; font-size: 16px; text-shadow: inherit !important;\">\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">HDPE jug</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">Polypropylene caps with F217 liner</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">Translucent or white</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">Ideal for storing &amp; transporting</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">Funnel top for easy pouring</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">Built-in handles for convenient usage</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">Meets FDA standards</li>\r\n</ul>', 'Round-&-Square-Jugs', 3, '159070519060102.jpeg', '398070519060102.jpeg', NULL, NULL, NULL, 6, 1, '2019-05-07 00:01:02', '2019-05-07 00:06:04'),
(7, 'HDPE Handled Jugs', '<p style=\"box-sizing: inherit; margin: 0px; color: #333333; font-family: Muli, sans-serif; font-size: 16px; text-shadow: inherit !important;\">These handle jug bottles come with a wide mouth that makes them the perfect size for easy filling and transporting. Available in three different sizes, these bottles are sure to meet almost any packaging need.</p>\r\n<ul style=\"box-sizing: inherit; margin-bottom: 0px; padding-left: 2em; margin-top: 0.5em; color: #333333; font-family: Muli, sans-serif; font-size: 16px; text-shadow: inherit !important;\">\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">HDPE</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">Natural</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">48/400 neck</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\"><strong style=\"box-sizing: inherit; text-shadow: inherit !important;\">Caps sold separately</strong></li>\r\n</ul>', 'HDPE-Handled-Jugs', 3, '305070519060235.jpeg', '366070519060235.jpeg', NULL, NULL, NULL, 8, 1, '2019-05-07 00:02:35', '2019-05-07 00:02:35'),
(8, 'Baritainer® Jerricans', '<p style=\"box-sizing: inherit; margin: 0px; color: #333333; font-family: Muli, sans-serif; font-size: 16px; text-shadow: inherit !important;\">QUORAL<sup style=\"box-sizing: inherit; text-shadow: inherit !important; position: relative; top: -0.1em; line-height: 0; font-size: 7.2px;\">&reg;</sup>&nbsp;based jerricans are the lightweight alternative to expensive steel and epoxy phenolic packaging with an innovative and flexible barrier resin that resists diffusion and evaporation preventing product loss. QUORAL<sup style=\"box-sizing: inherit; text-shadow: inherit !important; position: relative; top: -0.1em; line-height: 0; font-size: 7.2px;\">&reg;</sup>&nbsp;based jerricans can be used to safely transport solvent-based products such as household chemicals, industrial chemicals, cleaning solvents, adhesives, wood preservatives, automotive additives, and agricultural chemicals.</p>\r\n<ul style=\"box-sizing: inherit; margin-bottom: 0px; padding-left: 2em; margin-top: 0.5em; color: #333333; font-family: Muli, sans-serif; font-size: 16px; text-shadow: inherit !important;\">\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">QUORAL<sup style=\"box-sizing: inherit; text-shadow: inherit !important; position: relative; top: -0.1em; line-height: 0; font-size: 7.2px;\">&reg;</sup>&nbsp;HDPE jerricans</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">Non-vented caps</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">Safely transports solvent-based products</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">Can be used for flavors, edible oils &amp; essential oils</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">Max temperature: 180&deg;F</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">Stackable</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">Come with a dust cover</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\">Meets FDA standards 21CFR 177</li>\r\n<li style=\"box-sizing: inherit; text-shadow: inherit !important; margin-top: 0px;\"><strong style=\"box-sizing: inherit; text-shadow: inherit !important;\">Caps sold separately</strong></li>\r\n</ul>', 'Baritainer®-Jerricans', 3, '772070519060528.jpeg', '916070519060528.jpeg', NULL, NULL, NULL, 9, 1, '2019-05-07 00:05:28', '2019-05-07 00:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `app_name`, `app_title`, `app_email`, `phone`, `mobile`, `facebook_url`, `logo`, `address`, `map`, `created_at`, `updated_at`) VALUES
(1, 'FPL Limited', 'Service is our First Priority', 'info@gmail.com', '01672175539', '1672175539', 'https://www.facebook.com/Fpl.Ltd/', '1558417175.jpg', '<p>Dhaka, Bangladesh</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.292466034333!2d90.28185991897828!3d23.79779048868572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755ea9288057b55%3A0x3223c55685dcb965!2sChandulia%2C+Hemayetpur!5e0!3m2!1sen!2sbd!4v1557912734211!5m2!1sen!2sbd\" width=\"370\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '2019-04-16 18:00:00', '2019-05-20 23:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_caption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_num` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title`, `slider_caption`, `slider_image`, `serial_num`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Bottol 3', 'Our Botol is best for all', '4210519055946.jpeg', 3, 1, '2019-05-20 23:59:02', '2019-05-20 23:59:46'),
(5, 'Slider 1', 'Our Botol is best for all', '230210519060034.jpeg', 1, 1, '2019-05-21 00:00:34', '2019-05-21 00:00:34'),
(6, 'Slider 3', 'Our Botol is best', '52210519060058.jpeg', 2, 1, '2019-05-21 00:00:58', '2019-05-21 00:31:48'),
(7, 'picture', 'Nice Color', '306210519063000.jpeg', 4, 1, '2019-05-21 00:30:00', '2019-05-21 00:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` int(10) UNSIGNED NOT NULL,
  `submenu_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submenu_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` (`id`, `submenu_name`, `submenu_slug`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 'company vision Is over', 'comapany-vission', 2, '2019-04-18 04:13:03', '2019-04-18 05:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `picture`, `phone`, `email`, `username`, `email_verified_at`, `password`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '222210519082959.jpeg', NULL, 'admin@gmail.com', 'admin', NULL, '$2y$10$sjfG7.zMFJUyWClegre9UuQIsRCv60oXKczsCMp/in8id.raB235i', '<p>dhaka</p>', 'xhF8dFdcF0jKqbjurbQi9rvC2rmyn9bSJcUmtepviexpS7KxDpH4BruhoTPD', '2019-05-21 18:00:00', '2019-05-21 14:29:59'),
(2, 'Tanveer', '360210519080633.jpeg', '0321564685', 'tanveer@gmail.com', 'tanveer', NULL, '$2y$10$8hmY.ucy/5C9gKlGwoAztemssBvVChOQaAyDJpQhEWyfYOcNnmQkS', '<p>dhaka</p>', NULL, '2019-05-21 14:06:33', '2019-05-21 14:06:33'),
(3, 'Solaiman', '20210519085212.jpeg', '0321564685', 'solaiman@gmail.com', 'solaiman25', NULL, '$2y$10$AsZbK36ENhDz.WqjFibxlupk/YTVv4E4AOFiTzGagEPF097FaCDE6', '<p>dhaka</p>', NULL, '2019-05-21 14:08:08', '2019-05-21 14:52:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mailuses`
--
ALTER TABLE `mailuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mailuses`
--
ALTER TABLE `mailuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
