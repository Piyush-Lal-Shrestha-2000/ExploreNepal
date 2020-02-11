-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 06:43 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `explore_pal`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `company_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_service` varchar(50) NOT NULL,
  `company_address` varchar(50) NOT NULL,
  `company_contact_number` varchar(15) NOT NULL,
  `company_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`company_id`, `user_id`, `company_name`, `company_service`, `company_address`, `company_contact_number`, `company_image`) VALUES
(1, 7, 'Test Hotel', 'Hotel, Lodging & Fooding', 'Pokhara', '9805040302', '../CompanyImages/09fd8fa39e090f5565e9de77deb1e5d2.jpg'),
(2, 8, 'Red and Blue Co.', 'Tour Guide & Translator', 'Pokhara', '987523990', '../CompanyImages/a685f7d8312ff84de28e08bf71b26ed9.jpg'),
(3, 9, 'Happu Resort', 'Hotel, Lodging & Fooding', 'Pokhara', '98455567', '../CompanyImages/4bf190482f492866fd49b4dcfa8a436b.jpg'),
(4, 10, 'Test', 'Hotel, Lodging & Fooding', 'Pokhara', '98455567', '../CompanyImages/774a52a7be2eb3b312d1e433ac754a15.png');

-- --------------------------------------------------------

--
-- Table structure for table `place_and_category`
--

CREATE TABLE `place_and_category` (
  `place_id` int(11) NOT NULL,
  `place_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place_and_category`
--

INSERT INTO `place_and_category` (`place_id`, `place_category_id`) VALUES
(1, 5),
(1, 6),
(2, 5),
(2, 6),
(3, 5),
(3, 6),
(4, 5),
(4, 6),
(5, 4),
(5, 7),
(6, 4),
(6, 7),
(7, 7),
(8, 4),
(8, 7),
(9, 5),
(9, 6),
(9, 7),
(10, 5),
(10, 6),
(11, 2),
(11, 3),
(11, 6),
(11, 8),
(12, 6),
(13, 5),
(13, 6),
(14, 1),
(15, 1),
(16, 7),
(17, 1),
(18, 6),
(19, 6),
(20, 3);

-- --------------------------------------------------------

--
-- Table structure for table `place_category`
--

CREATE TABLE `place_category` (
  `place_category_id` int(11) NOT NULL,
  `place_category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place_category`
--

INSERT INTO `place_category` (`place_category_id`, `place_category_name`) VALUES
(1, 'Adventure Sports'),
(2, 'Business and Diplomacy'),
(3, 'Food'),
(4, 'History'),
(5, 'Mountaineering and Trekking'),
(6, 'Natural Scenary'),
(7, 'Religion and Culture'),
(8, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `place_details`
--

CREATE TABLE `place_details` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(20) NOT NULL,
  `price_range` varchar(20) NOT NULL,
  `place_address` text NOT NULL,
  `place_details` text NOT NULL,
  `place_main_photo` text NOT NULL,
  `place_avg_rating` int(5) NOT NULL,
  `place_total_rating` int(11) NOT NULL,
  `place_latitude` float NOT NULL,
  `place_longitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place_details`
--

INSERT INTO `place_details` (`place_id`, `place_name`, `price_range`, `place_address`, `place_details`, `place_main_photo`, `place_avg_rating`, `place_total_rating`, `place_latitude`, `place_longitude`) VALUES
(1, 'Annapurna Base Camp', '20000-50000', 'Annapurna Range', 'A short, amazing trek with the snowy feet in the height of 4130 m is probably in\r\nthe bucket list of every travel-loving person. The trek includes a walk through the\r\nbeauty of mountains greeting the culture in local people living in this area. A wide\r\nvariety of flora and fauna could be noticed through the entire journey. The\r\ninteresting part of the trek is that it starts and ends in Pokhara - the city famous all\r\nover Nepal for its beauty of lakes and caves. The best time for this tour would be\r\n\r\nMarch, April, May for the view of blooming rhododendron other than that, mid-\r\nSeptember to November is also a good time to visit with a clear cold sky.', '../PlaceImages/Annapurna-Base-Camp-Trek-1-1024x768.jpg', 4, 4, 28.53, 83.878),
(2, 'Poonhill', '10000-12000', 'Annapurna region of Nepal towards the north of Pokhara', 'It is again a trek towards the Annapurna region, mostly beginning from Pokhara all the way to a height of 3210m giving an astonishing view of mountains and beautiful scenarios. The trekking also gives the experience of local villages such as Ghorepani, Ulleri and Ghandruk, famous for their beauty and Magar and Gurung cultures. The place is actually famous for the view of a beautiful sunrise with the view of mountains such as Annapurna and Dhaulagiri whose heights are above 8000m. The imagination of this view itself arises a thirst of visiting the place.', '../PlaceImages/ghorepani-poonhill-trek.jpg', 4, 4, 28.4002, 83.6893),
(3, 'Tilicho Lake', '20000-25000', 'Manang, around Annapurna Range', 'A lake located at one of the most rural areas in Nepal in the height of 4919 m in the Annapurna Himalayan range. Sometimes known as one of the lakes in greatest height in the world, the lake catches the attraction of one’s eyes with its astonishing view in chilled weather. The view with reflection of the Himalayan range would brighten the eyes of the viewer. The lake actually is the glacial melt collection of the full northern slope of Annapurna and Thorang peak. Trekking to Tilicho Lake leads to a wonderful experience of beautiful view along with the diversity of people. The lake has its religious importance as mentioned in a holy book of Hindus-“Ramayana”. The trekking leads down to Muktinath temple which is highly important in religious point of view and has its own sort of beauty.', '../PlaceImages/Tilicho.jpg', 5, 4, 28.6833, 83.8567),
(4, 'Rara Lake', '20000-50000', 'Rara National Park, located in Jumla and Mugu Districts', 'Rara Lake is termed as the greatest lake of Nepal. The Lake lies in the Karnali zone. It lies above 2972m from the sea level. Near to Rara Lake, lies the Rara national park whose flora and fauna automatically adds beauty and excitement in this lake. It is said that the Rara Lake keeps changing its face as the color of water changes according to time in a day. Though the route is rough, nature promises satisfaction in the visitors with the view of mountains, hills and the lake at the same time. It is also famous for the ‘asala’ fish. The reflection of the mountains such as Mount Kanjirowa gives proper beauty to the lake.', '../PlaceImages/rara-lake-may-1.jpg', 5, 5, 29.5239, 82.0788),
(5, 'Janakpur', '2000-5000', 'Dhanusa District of Province No. 2 of Nepal', 'Stroll through the historic Mithila city to experience the tarai culture of southern Nepal and visit the grand Ram Janaki Temple in the center of the city that draws allusions to the famous Hindu epic Ramayana. The temple is the main attraction of the city and draws large crowds of visitors.', '../PlaceImages/Janakpur-Nepal.jpg', 4, 4, 26.7271, 85.9407),
(6, 'Makwanpur Gadi', '1000-2000', 'Hetauda,Makwanpur Province no.3', 'Makwanpurgadhi or Makwanpur Gadhi (literally Makwanpur Fort) is a village development committee in Makwanpur District in the Narayani Zone of southern Nepal. At the time of the 2011 Nepal census it had a population of 14996 people living in 2588 individual households.', '../PlaceImages/467627_Makawanpur Gadhi.png', 4, 3, 27.4241, 85.1428),
(7, 'Pashupatinath', '500-1000', 'Pashupati Nath Road, Kathmandu', 'Dedicated to Lord Shiva, Pashupatinath is one of the four most important reli-gious sites in Asia for devotees of Shiva. Built in the 5th century and  later ren-ovated by Malla kings, the site itself is said to have existed from the beginning of the millennium when a Shiva lingam was discovered here.\r\nThe largest temple complex in Nepal, it stretches on both sides of the Bagmati River which is considered holy by Hindus.  The main pagoda style temple has a gilded roof, four sides covered in silver, and exquisite wood carvings. Temples dedicated to several other Hindu and Buddhist deities surround the the temple of Pashupatinath.\r\n', '../PlaceImages/pashupatinath.jpg', 4, 4, 27.7007, 85.3001),
(8, 'Lumbini', '2000-5000', 'Kapilavastu,Rupandehi Butwal province no. 5', 'Lumbini can be called as pride of Nepal as Lord Buddha was born in this place. The main place to visit here is Maya Devi temple where exactly lord Buddha was born. This place has its historical and cultural importance. This place is religiously very important to Buddhist people. The place is also famous for the Ashoka pillar which is said to be the evidence of the birth of Lord Buddha. Except this, Lumbini has many other temples and monasteries which would give a beautiful experience giving knowledge about the history of Lord Buddha. The world peace pagoda (locally called as “Shanti stupa” is also one of the major attraction of this place. The peaceful environment also contains the eternal peace flame which is said to never extinguish. Hence the place is a major destination to be visited.', '../PlaceImages/lumbini.jpg', 3, 4, 27.6792, 83.507),
(9, 'Gosainkunda', '10000-12000', ' Langtang National Park, Rasuwa', 'It is yet another beautiful destination of Nepal which lies above the height of 4610m. The lake lies in the famous Langtang national park which is itself a beautiful place to visit, having a wide range of flora and fauna. Mainly in Nepal, this lake has high religious importance as mentioned in lots of Hindu sculptures. The Dhunche-Helambu trek leads to this beautiful lake, most of the time surrounded by snow. The lake itself remains frozen for 6 months in winter giving a breath-taking view. Other than that, the trekking itself is a great experience for the adventurous people out there giving beautiful experience with challenges on the way.', '../PlaceImages/Gosainkunda-Lake-Trek.jpg', 4, 5, 28.082, 85.415),
(10, 'Manasulu Base Camp', '20000-25000', 'Manaslu region', 'Manaslu is the eighth greatest mountain of the world having the height of 8163m. The trekking gives the view of beautiful mountain peaks along with the Manaslu glacier, allowing a circle along mount Manaslu. The rural area is rich in Buddhist religion and Tibetan culture.  The trek allows visiting different monasteries showing the diversity in people and traditions as well. It gives an interesting village tour with different traditional and cultural sights. The trekking was officially allowed in 1991. The trekking follows a route along Burhi Gandaki River giving a great experience of trekking and traveling.', '../PlaceImages/mana.jpg', 4, 5, 28.6018, 84.621),
(11, 'Pokhara', '2000-4000', 'Lakeside Rd, Pokhara', 'Hot Air Balloon will be the newest activity on the growing list of things to do in Pokhara! Launched earlier this week, Balloon Nepal offers three different flights from tethered flights at an affordable Nrs 6000 for Nepalis and USD $90 for foreign nationals, free flight for 30 minutes for Nrs 9000 and USD $120 for foreign nationals and a Magical Voyage experience that lasts for a full hour for Nrs 12,000 and USD $160 for foreign nationals.\r\nBeing in a hot air balloon gives you a birds-eye view of the rollings hills and the best view of the Annapurna Mountain Range. The commercial operations will begin from Dhampus, a village near Pokhara.\r\nBack in 2010, Tara Air had announced that it would start hot air balloon ser-vices in Pokhara. Unfortunately, we have no information regarding why the service was discontinued. Hopefully Balloon Nepal has a better success with hot air ballooning in Pokhara.\r\n', '../PlaceImages/Hot-Air-Balloon-Nepal-1.jpg', 4, 5, 28.2096, 83.9856),
(12, 'Phewa Lake', '1000-2000', 'Pokhara', 'Phewa Tal is the travellers’ focal point in Pokhara, and is the second largest lake in Nepal. In contrast to the gaudy tourist development of Lakeside, the steep southwestern shore is densely forested and alive with birdlife. The lush Rani Ban, or Queen’s Forest, bestows an emerald hue to the lake, and on a clear day the Annapurna mountains are perfectly reflected on its mirror surface.', '../PlaceImages/fewa.jpg', 4, 4, 28.2154, 83.9453),
(13, 'Everest Base Camp', '40000-50000', 'Mount Everest Area', 'Everest Base Camp trek is quite simply the classic trek in Nepal. High in the priority list of trekkers, the Everest Base Camp is one of the most visited regions in the Himalaya. The two week trek starts and finishes at Lukla, an airstrip to the south of the region also known as the ‘Gateway to Everest’. Most trekkers fly to Lukla, to begin the trek.', '../PlaceImages/EverestBaseCamp.jpg', 5, 5, 28.0043, 85.8557),
(14, 'Trisuli Rafting', '5000-6000', 'Trisuli River Side', 'The put-in point for Trisuli River Rafting/Kayaking is located just 3 to 3.5 hour drive west of Kathmandu, making it an excellent choice for short trips, or for those who are en route to Pokhara or Chitwan National Park.\r\nThe Trisuli can be rafted for 1 to 3 days, 15 - 60 km. Most people do the classic two day trip. The return journey to Kathmandu is 5 hours, to Pokhara is approximately 4 hours and to Chitwan is approximately 1 hour.\r\n', '../PlaceImages/trisulirafting.jpg', 4, 4, 27.49, 84.466),
(15, 'Bhote Koshi', '8000-10000', 'Bhote Koshi River', 'Keen Adventures Treks and Expedition offers you for adventurous Bungee jumping in Bhote Koshi of Nepal. Almost 30 Km away and three-hour bus ride from Kathmandu, this is the perfect location for Bungee jumping. Closely located to Nepal-Tibet border for bungee, Bhote Koshi is one of the most stunningly on the planet.  This river is the wildest Nepali river at 160 meters high in a tropical gorge, ranging below. It is the longest free fall in the world.', '../PlaceImages/bungeejumping.jpg', 4, 4, 27.9388, 85.945),
(16, 'Boudhanath', '1000-2000', 'Kathmandu,Boudha Area', 'The first stupa at Boudhanath was built sometime after AD 600, when the Tibetan king, Songtsen Gampo, converted to Buddhism. In terms of grace and purity of line, no other stupa in Nepal comes close to Boudhanath. From its whitewashed dome to its gilded tower painted with the all-seeing eyes of the Buddha, the monument is perfectly proportioned. Join the Tibetan pilgrims on their morning and evening koras (circumambulations) for the best atmosphere.\r\n\r\n', '../PlaceImages/Boudhanath.jpg', 4, 4, 27.7213, 85.3575),
(17, 'Kalinchowk', '5000-8000', 'Kalinchowk,Kuri Village Dholakha', 'Kalinchowk Bhagwati Temple is a Hindu shrine in Dolkha District of Nepal. It is situated in Kalinchowk VDC in Dolkha at the altitude of 3,842 m (12,605 ft) from sea-level. It is a part of Gaurishankar Conservation Area from where two rivers Sun Kosi and Tama Kosi rivers are sourced.This is one of the most exquisite destinations in Nepal at an elevation of 3,842m from sea level and offers the best Himalayan panorama. And what makes it even more interesting is that no trekking is required to reach here. Every year during winter, people visit Kalinchowk to enjoy snowfall. Likewise, the pilgrims visit Kalinchowk shrine all around the year', '../PlaceImages/Kaalinchowk_&_Kuri_Village,_Dolakha_(3).jpg', 5, 5, 27.7473, 86.0319),
(18, 'Dorpatan H. Reserve', '10000-12000', 'Myagdi district and Baglung district', 'The Dhorpatan Hunting Reserve is the single hunting reserve in Nepal. Established in 1987 it covers an area of 1,325 km2 (512 sq mi) in the Dhaulagiri Himal of western Nepal in the Rukum, Myagdi and Baglung Districts. In altitude it ranges from 2,850 to 5,500 m (9,350 to 18,000 ft) with many arrays wildlife reserve, national parks and with majestic highest Himalaya’s areas, adds unbelievable beauty to the world. The most attractive set of hunting reserve that alone compels world to know the beauty of Nepal is Dhorpatan Hunting Reserve. The area is characterized by well – developed mixed- hardwood forest of drier climate to north. We can see the nice view of Mt. Dhaulagiri,Mt. Annapurna, fishtail and Mt. Manaslu range with good sunrise from here.', '../PlaceImages/dhorpatan-hunting-reserve.jpg', 4, 4, 28.5856, 82.9932),
(19, 'Chitwan N. Park', '5000-8000', 'Chitwan Province no.3', 'The Chitwan National Park (CNP) is a world heritage property, and it also contains a Ramsar Site – Beeshazari Tal in its buffer zone. The CNP has a history of over 3 decades in park management and a rich experience in resolving conflicts between the park and the people.\r\n\r\nIt is a rich natural area in the Terai, the subtropical southern part of Nepal. A total of 68 species of mammals, 544 species of birds, 56 species of herpetofauna and 126 species of fish have been recorded in the park. The park is especially renowned for its protection of One Horned Rhinoceros, Royal Bengal Tiger and Gharial Crocodile.', '../PlaceImages/ChitwanNationalpark.jpg', 4, 4, 27.5341, 84.4525),
(20, 'Illam', '5000-6000', 'Mahabharata hilly range of Province No. 1, eastern Nepal.', 'Illam Tea Garden Trek is the marvelous trekking destinations in Nepal which is popular for tea product lies at the Illam District.The district is considered as one of the richest district of Nepal that is situated at the south Himalayan range of Mahabharat and West range of the Shangrila. It is far off and unknown from the Western view points because of its relative unreachable and far away from Kathmandu.\r\n\r\nIllam Tea Garden is located between the Illam and India border mitigation ranging from 140m to 3,636m above the sea level. It is one of the pristine destinations for Tourist because of its popularity in tea production. ', '../PlaceImages/illam.jpg', 4, 4, 26.876, 87.9335);

-- --------------------------------------------------------

--
-- Table structure for table `pocket_translator`
--

CREATE TABLE `pocket_translator` (
  `pocket_translator_id` int(11) NOT NULL,
  `pocket_translator_speech` varchar(100) NOT NULL,
  `pocket_translator_translation` varchar(100) NOT NULL,
  `pocket_translator_audio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pocket_translator`
--

INSERT INTO `pocket_translator` (`pocket_translator_id`, `pocket_translator_speech`, `pocket_translator_translation`, `pocket_translator_audio`) VALUES
(1, 'Greet or say hello', 'Namaste', '../Audio/Namaste.mp3'),
(2, 'Test0', 'Test0', '../Audio/test.mp3'),
(3, 'Test1', 'Test1', '../Audio/test.mp3'),
(4, 'test3', 'test3', '../Audio/5be953bf8d90832916ab1567b950dbb1.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `test_space`
--

CREATE TABLE `test_space` (
  `aid` int(11) NOT NULL,
  `bid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_space`
--

INSERT INTO `test_space` (`aid`, `bid`) VALUES
(1, 1),
(1, 2),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_full_name` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` text NOT NULL,
  `user_gender` varchar(7) NOT NULL,
  `user_country` varchar(50) NOT NULL,
  `user_post` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_full_name`, `user_email`, `user_password`, `user_gender`, `user_country`, `user_post`) VALUES
(1, 'Admin', 'admin@en.com', '$2y$10$ECpnE8ibpHTjtRRM1lf9zujS2tpWQjqZw5XIN6QQ4NBuZbDsjjnam', 'Male', 'Nepal', 'Admin'),
(5, 'John Cena', 'ucantseeme@cena.com', '$2y$10$F.S0yPA5k5lOPvEO7no5UOqqXorWdCt6EsZ.RoIML0.0sOF3.QxEq', 'Male', 'United States', 'Tourist'),
(6, 'TestTourist', 'testtourist@tour.com', '$2y$10$e5il.5Y3/VlqoWTRVZqJFu172zNlCZ2gHgC0ZioPaEVhQw39D2k4O', 'Male', 'Bahamas', 'Tourist'),
(7, 'Test Service Provider', 'testServiceProvider@hotel.com', '$2y$10$v8CaPRC/K0qY9NH3Hf6Rru7.47XdZxbe6xXlq4T0vyyr99NMXrnK.', 'Male', 'Nepal', 'Service Provider'),
(8, 'Red', 'red235@gmail.com', '$2y$10$H8mpg/rygAQJCAN0riTelOz6b5GFUpUmssurIvpPJddE/MRicDQZe', 'Male', 'Nepal', 'Service Provider'),
(9, 'Happy Singh', 'happu9955@gmail.com', '$2y$10$ezHgWwsLHYeKsbd4w8ERk.NWDyC8ph7w7UlDSiTzXK0AhQNCUxg4u', 'Male', 'Nepal', 'Service Provider'),
(10, 'Test', 'test@mail.com', '$2y$10$ms4aSNr4gwZcdC0Ow8pHaO4yHSPbabAVzh/rUWMKR4Ffx/nJymgBm', 'Male', 'Nepal', 'Service Provider');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `place_and_category`
--
ALTER TABLE `place_and_category`
  ADD PRIMARY KEY (`place_id`,`place_category_id`);

--
-- Indexes for table `place_category`
--
ALTER TABLE `place_category`
  ADD PRIMARY KEY (`place_category_id`);

--
-- Indexes for table `place_details`
--
ALTER TABLE `place_details`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `pocket_translator`
--
ALTER TABLE `pocket_translator`
  ADD PRIMARY KEY (`pocket_translator_id`);

--
-- Indexes for table `test_space`
--
ALTER TABLE `test_space`
  ADD PRIMARY KEY (`aid`,`bid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `place_category`
--
ALTER TABLE `place_category`
  MODIFY `place_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `place_details`
--
ALTER TABLE `place_details`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pocket_translator`
--
ALTER TABLE `pocket_translator`
  MODIFY `pocket_translator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
