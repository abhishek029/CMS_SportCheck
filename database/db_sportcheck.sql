-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 31, 2019 at 05:22 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sportcheck`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_genre`
--

DROP TABLE IF EXISTS `tbl_genre`;
CREATE TABLE IF NOT EXISTS `tbl_genre` (
  `genre_id` int(11) NOT NULL AUTO_INCREMENT,
  `genre_name` varchar(250) NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_genre`
--

INSERT INTO `tbl_genre` (`genre_id`, `genre_name`) VALUES
(1, 'Bike'),
(2, 'Bottle'),
(3, 'Duffle Bags'),
(4, 'Jacket'),
(5, 'Shoes'),
(6, 'Shorts'),
(7, 'Training Gear');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_title` varchar(250) NOT NULL,
  `product_desc` text NOT NULL,
  `product_avatar` varchar(250) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_title`, `product_desc`, `product_avatar`, `product_price`) VALUES
(1, 'Diadora Artico 26', 'Go places you’ve never biked before with the Diadora Artico fat bike. The 4.9” wide tires provide exceptional grip and floatation on all surfaces. The all-weather Artico performs great in muddy conditions and sandy soft terain but where it really shines is on your favorite winter snow covered trails. No more putting the bike away for the winter when you ride the versatile Artico.', 'diadora.png', '$1,199.99'),
(2, 'GT Avalanche Sport 29/27.5 Men\'s Mountain Bike 2019 - Gloss Aqua', 'The Avalanche is one of the longest running GT models and for good reason. The GT Avalanche Sport is certainly not short on features. With a high-end aluminum frame and modern geometry, you will be able to be out riding hard without busting your wallet. With reliable Shimano components and mechanical disc brakes to provide consistent stopping power, you\'ll be wanting more after each ride.', 'avalanche.png', '$759.99'),
(3, 'GT Aggressor Comp 27.5 Men\'s Mountain Bike 2019 - Satin Black', 'GT has taken inspiration from sport utility vehicles with their go anywhere attitue and applied it to the Aggressor series mountain bikes. The GT Aggressor Comp 27.5 Men\'s Mountain Bike 2019 - Satin Black maneuvers easily over all types of terrain, so whether you\'re heading out for a weekend of riding at your favorite local single track or leading your family on a more casual cruise, you\'ll be prepared. 27.5\" wheels provide the perfect blend of good rollover capability and easy maneuverability in tight corners and the entire bike is designed with capable handling, rugged versatility and comfortable, confidence-inspiring performance in mind.', 'aggressor.png', '$649.99'),
(4, 'GT Aggressor Sport 27.5 Men\'s Mountain Bike 2019 - Gloss Red', 'GT has taken inspiration from sport utility vehicles with their go anywhere attitue and applied it to the Aggressor series mountain bikes. The GT Aggressor Sport Men\'s Mountain Bike 2019 - Gloss Red maneuvers easily over all types of terrain, so whether you\'re heading out for a weekend of riding at your favorite local single track or leading your family on a more casual cruise, you\'ll be prepared. 27.5\" wheels provide the perfect blend of good rollover capability and easy maneuverability in tight corners and the entire bike is designed with capable handling, rugged versatility and comfortable, confidence-inspiring performance in mind.', 'aggressorred.png', '$549.99'),
(5, 'Nakamura Ecko 26 Men\'s Mountain Bike 2019', 'The Nakamura Ecko is an excellent choice entry level mountain bike. The hardtail design, quality components and an 18 speed drivetrain provides the rider with a versatile bike that is great for riding around the neighborhood and on recreational trails.', 'nakamura.png', '$249.99'),
(6, 'Under Armour x Project Rock Peak 40oz. Stainless Steel Water Bottle', '“Project Rock is not a brand, it’s a movement. It’s a core belief, that I 100% don’t care what color you are, how old you are, where you come from or what you do for a living. The only thing I care about is you and me, building the belief that regardless of whatever the odds, we can overcome and achieve—but it all starts with the work we’re willing to put in with our two hands.\"—Dwayne Johnson', 'rock.png', '$99.99'),
(7, 'Mammoth Mug - Matte Black', 'Mammoth mugs are the ultimate hydration solution for your fitness lifestyle. These 2.5L bottles are ruggedly designed, easy to drink from, freezer-friendly, and have a large spout so you can mix your favourite shake.', 'mammoth.png', '$19.99'),
(8, 'Nike Double Pocket Flask Belt 20 oz - Red/Black', 'The Nike Double Pocket Flask Belt has a stabilized design to reduce bouncing as you work out. The two 10oz ergonomic canteens are lightweight and comfortable to hold.', 'double.png', '$34.99'),
(9, 'Corckcicle 25oz. Dipped Canteen - Blackout', 'Corkcicle Canteen: Now completely submerged and dripping in cool. Crafted from stainless steel with proprietary triple insulation. Keeps drinks ice cold for up to 25 hours or hot for up to 12 without freezing or sweating. Cold even longer for drinks containing ice.', 'corckcicle.png', '$49.99'),
(10, 'Nike T1 Flow Swoosh Water Bottle 24 oz - Volt/Black', 'The Nike T1 Flow Swoosh features a SitchFlow spout which stands at 90 degrees for fast flow quick hydration', 'nikebottle.png', '$10.99'),
(11, 'Under Armour Contain Duo 2.0 Backpack Duffel Bag', 'Enjoy Your Under Armour Men’s Contain Duo 2.0 Duffel Bag And Backpack. This Dufflebag That Doubles As A Backpack Is A Great Way To Get All Gear Around Town.', 'containDuo.png', '$89.99'),
(12, 'Under Armour Undeniable 3.0 Medium Duffel Bag', 'The Under Armour Undeniable 3.0 Duffel features UA Storm technology to deliver a water-resistant finish, tough, abraision-resistant botton and side panels and an adjustable, padded shoulder strap for maximum comfort.', 'undeniablemedium.png', '$69.99'),
(13, 'Adidas Linear Performance Duffel - Real Pink/White', 'Pack What You Need For Training In This Bag. Made Of Durable Polyester And Built For Everyday Use, It Features A Detachable Shoe Bag And Inside Dividers That Help You Organise Your Gear. Padded Handles And An Adjustable Shoulder Strap Offer Comfortable Carry Options As You Head To The Gym.', 'adidas.png', '$69.99'),
(14, 'Adidas Convertible 3-Stripe Duffel', 'Get Your Gear To The Gym With This Medium Training Duffel Bag That Converts To A Backpack. With Plenty Of Pockets For Organising Essentials, It Has A Ventilated Compartment For Stowing Shoes. The Team Bag Is Made Of Sturdy Polyester And Has A Coated Base For Extra Durability.', 'convertible.png', '$64.99'),
(15, 'Under Armour Women\'s Undeniable 3.0 Duffel Bag', 'Our Tried-And-True Duffle Has Reached Its Third Evolution—And It Just Keeps Getting Better. Marked With The Classic Oversized Ua Logo And Built With Incredibly Durable Materials, This Is Your Go-To Duffle Bag For Everyday Performance.', 'undeniable.png', '$59.99'),
(16, 'Nike Men\'s Windrunner Jacket', 'The Nike Windrunner Men’s Running Jacket has you covered in super lightweight, soft coverage. The water-repellent finish helps keep you dry, while the colour blocked design and chevron at the front gives a retro feel.', 'windrunner.png', '$130.00'),
(17, 'Adidas Men\'s Own The Run Camo Jacket', 'Commit to your wet-weather workouts in this running jacket. The water-repellent finish helps you stay dry, and a secure, sweat-guard pocket provides storage for small essentials. The pre-shaped elbows are designed to naturally fit a runner in action.', 'adidasMen.png', '$99.99'),
(18, 'Nike Men\'s Aerolayer Jacket', 'The Nike AeroLayer Men’s Running Jacket lets you power through regardless of the weather. It fits close to the body without bulkiness so you can run freely, while a water-resistant shell helps keep you dry in a light rain.', 'aerolayer.png', '$120.00'),
(19, 'Nike Men\'s Sphere Element Full Zip Hoodie', 'Nike Sphere Element Men’s Full Zip Running Hoodie delivers warmth and comfort from the sweat-wicking fabric down to the thumbholes with fold over mittens.', 'nikeElement.png', '$115.00'),
(20, 'Nike Men\'s Essential Jacket', 'Inclement weather has nothing on your run. The lightweight, water-resistant Nike Essential Jacket helps keep you covered with a runner-specific hood, so you can go the extra mile.', 'nikeblack.png', '$100.00'),
(21, 'Nike Men\'s Flex Control II Training Shoes - Black/Anthracite', 'Built to provide you with the stability needed for dynamic cuts, Men’s Nike Flex Control II Training Shoe features a mesh upper for ventilation and Nike Flex technology for a more natural range of motion. Its zonal rubber outsole features a multi-surface traction pattern that gives you the grip needed for your training routine.', 'nike_black.png', '$65.98'),
(22, 'Saucony Men\'s Koa ST Trail Running Shoes - Orange/Citron', 'When conditions get tough, the KOA ST is there to answer the call. Featuring an aggressive PWR TRAC outsole pattern with 8mm lugs, the KOA ST is designed to keep you on your feet and moving forward across soft, muddy, slick terrains. The synthetic upper of this neutral trail running shoe sheds mud and moisture, while the toggle lacing system lets you quickly adjust your fit throughout the run. It\'s great for hiking too!', 'saucony.png', '$159.99'),
(23, 'Saucony Men\'s Everun Triumph ISO 4 Running Shoes - Silver/Blue', 'The Triumph ISO 4 now has a full-length EVERUNTM midsole for the ultimate cushioned neutral running shoe experience. Redesigned ISOFIT with more stretch allows you to dial the fit to your own specific preferences. Finally Saucony topped it with an engineered mesh upper that feels like a win every time you step in and lace up.', 'sauconyeverun.png', '$195.99'),
(24, 'ASICS Men\'s GEL-Cumulus 20 Running Shoes - Blue/Navy', 'A favorite for 20 years and counting. GEL-Cumulus® celebrates its 20th anniversary with premium technology and a refined design that offers optimal support and comfort for runners of all levels. A FlyteFoam® midsole teams up with rearfoot and forefoot GEL® cushioning for a smooth, lightweight ride that maintains full contact with the ground. Its jacquard mesh upper elevates the styling and forms to your foot for a fit that feels customized just for you. Weight: 10.05. Heel Height: 23mm. Forefoot Height: 13mm.', 'ASICS.png', '$159.99'),
(25, 'Under Armour Women\'s Charged Escape 2 Running Shoes - Black/Graphite', 'The Under Armour Women\'s Charged Escape 2 Running Shoes - Black/Graphite features a lightweight upper that hugs the foot for breathable, flexible support.', 'escape.png', '$109.99'),
(26, 'PUMA Men\'s Modern Sports 10\" Shorts', 'Wear the PUMA Men’s Modern Sports Shorts for an on-trend, laidback look.', 'pumaMens.png', '$54.99'),
(27, 'Nike Sportswear Men\'s Heritage Shorts', 'Nike Sportswear Heritage Shorts are designed for classic comfort and feature an elastic, drawcord waistband that stretches for comfort. Heathered fabric throughout creates a vintage look and feel.', 'nikeHeritage.png', '$55.00'),
(28, 'Fox Men\'s Stretch Chino 21 Inch Shorts - Steel Grey', 'Fox Tech Shorts are designed with ultimate versatility in mind and offer dependability for all day adventures. Durable yet lightweight, the Essex Tech Stretch short provides a comfortable fit and freedom of movement in and out of the water. Features include a water-resistant construction, a five pocket design and an inner drawcord to lock down the fit.', 'fox.png', '$59.99'),
(29, 'O\'Neill Men\'s Mixer 20 Inch Boardshorts - Coral', 'In the O’Neill Men’s Mixer 20 Inch Boardshorts - Coral, you’ll be fully focused on enjoying fun in the sun. These boardshorts fit securely with a drawcord and Velcro waist and feature a cargo pocket and key loop for storage.', 'oneillMixer.png', '$49.99'),
(30, 'Hurley Men\'s Phantom One And Only 20 Inch Boardshorts - Pink', 'The Phantom One and Only 20\" Board Shorts are an updated classic of the original stretch board short that revolutionized the surf industry.', 'hurley.png', '$59.99'),
(31, 'Energetics Pro Series Multi Exercise Door Gym', 'Multiple grip positions to perform chin ups and pull ups when mounted in a door frame. Perform push-ups and sit ups with a greater range of motion when placed on the floor.', 'energeticspro.png', '$49.99'),
(32, 'PTP Total Resistance System', 'A “gym-in-a-bag”, the PTP Total Resistance System is the ultimate set to train both upper and lower body and achieve muscular strength, body toning, fat burning and flexibility. It allows you to target arms, shoulders, chest, back, abs and legs and lets you recreate all the top workouts at home, in a park, at the beach or on travels.', 'resistancePTP.png', '$129.99'),
(33, 'PTP Powertube+ Resistance Tube – Medium', 'Whether your goal is to achieve fat burning, muscle building or body toning, the PTP PowerTube+ is the ultimate fitness tool. Highly portable, it can target any muscle group: arms, shoulders, chest, back, abs, glutes and legs. Place your door anchor through a door at any height to recreate all the top gym workouts anywhere and anytime.', 'powertube.png', '$24.99'),
(34, 'BOSU Balance Trainer', 'The BOSU Balance Trainer is perfect for those looking to get into fitness or take their workout to the next level. BOSU Balance Trainers empower the user to choose their difficulty of exercise and add variety to any workout routine. Bosu are constantly working with fitness experts to develop innovative workouts and products. After using a BOSU Balance Trainer you’ll notice that this is training that translates to life.', 'BOSU.png', '$159.99'),
(35, 'TRX Strong System', 'Make your body your machine with TRX’s, patented suspension trainer to train your upper body, lower body and core. Get more results in less time with fast & effective total body workouts in as little as 15 minutes a day.\r\nFor those looking to advance their fitness journey to build muscle, burn fat, increase endurance and strengthen core.\r\nSets up in any location in your home, at the park, at the beach, or anywhere and anytime you want.', 'TRX.png', '$179.99');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_genre`
--

DROP TABLE IF EXISTS `tbl_product_genre`;
CREATE TABLE IF NOT EXISTS `tbl_product_genre` (
  `product_genre_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  PRIMARY KEY (`product_genre_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_genre`
--

INSERT INTO `tbl_product_genre` (`product_genre_id`, `product_id`, `genre_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 2),
(7, 7, 2),
(8, 8, 2),
(9, 9, 2),
(10, 10, 2),
(11, 11, 3),
(12, 12, 3),
(13, 13, 3),
(14, 14, 3),
(15, 15, 3),
(16, 16, 4),
(17, 17, 4),
(18, 18, 4),
(19, 19, 4),
(20, 20, 4),
(21, 21, 5),
(22, 22, 5),
(23, 23, 5),
(24, 24, 5),
(25, 25, 5),
(26, 26, 6),
(27, 27, 6),
(28, 28, 6),
(29, 29, 6),
(30, 30, 6),
(31, 31, 7),
(32, 32, 7),
(33, 33, 7),
(34, 34, 7),
(35, 35, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `flag` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `flag`) VALUES
(1, 'Abhishek', 'abhi', 'abhi', 'patelabhi585@gmail.com', 0),
(2, 'Jimit', 'jimit', 'jimit', 'jimit@gmail.com', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
