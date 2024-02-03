-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 10:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `av_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `sectionOneTitle` text NOT NULL,
  `sectionOneSpan` text NOT NULL,
  `sectionOneParagraph` text NOT NULL,
  `sectionTwoFirstParagraph` text NOT NULL,
  `sectionTwoFirstTitle` text NOT NULL,
  `sectionTwoFirstSpan` text NOT NULL,
  `sectionTwoBigParagraph` text NOT NULL,
  `workingHoursText` text NOT NULL,
  `workingHoursSet` text NOT NULL,
  `sectionThreeFirstTitle` text NOT NULL,
  `sectionThreeFirstSpan` text NOT NULL,
  `sectionThreeFirstParagraph` text NOT NULL,
  `sectionThreeSecondParagraph` text NOT NULL,
  `sectionThreeThirdParagraph` text NOT NULL,
  `sectionThreeFourthParagraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`sectionOneTitle`, `sectionOneSpan`, `sectionOneParagraph`, `sectionTwoFirstParagraph`, `sectionTwoFirstTitle`, `sectionTwoFirstSpan`, `sectionTwoBigParagraph`, `workingHoursText`, `workingHoursSet`, `sectionThreeFirstTitle`, `sectionThreeFirstSpan`, `sectionThreeFirstParagraph`, `sectionThreeSecondParagraph`, `sectionThreeThirdParagraph`, `sectionThreeFourthParagraph`) VALUES
('We value', 'your skin', 'Unveiling the timeless elegance of<br>natural beauty, one skin at a time', 'ABOUT US', 'Developed by professional', 'dermatologists', 'At AV, we understand the importance of healthy, radiant skin.\r\n                        Thats why our skincare products stand out; they are not just products; they are\r\n                        the result of meticulous care and expertise provided by our team of professional\r\n                        dermatologists.\r\n                        Each formulation is a testament to years of research, dedication, and the highest\r\n                        standards of skincare excellence. Our dermatologists, with their deep understanding\r\n                        of skin health, have carefully crafted each product to address specific concerns and\r\n                        deliver visible, long lasting results.', 'Working hours:', 'Mon – Fri: 08:30 – 20:00 <br>\r\n                        Sat – Sun: 09:30 – 21:30', 'Highly performing', 'beauty formula', 'Unleash the potential of your skin with our highly performing\r\n                        beauty formula – a manifestation of innovation and excellence in the realm of\r\n                        skincare. Elevate your daily ritual and unlock the secret to radiant,\r\n                        age-defying beauty. Enriched with a synergistic combination of clinically\r\n                        proven ingredients, our beauty elixir is dedicated to addressing diverse\r\n                        skincare concerns, from fine lines and wrinkles to uneven skin tone.', 'Reach us:', 'info@avproducts.com', '+1 234 567 890');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `lastname`, `email`, `phone`, `message`) VALUES
(7, 'test123', 'asda', 'adsj@aoijd', 123456, 'jdaisodajodaijda'),
(8, 'test123', 'asda', 'adsj@aoijd', 123456, 'jdaisodajodaijda'),
(9, '1111', '1111', '111@222', 12345, 'sjdaoidjadajdao'),
(10, '222222', '22223', '333@oadijsod', 12345678, 'doijsadaoisjdoiajdoa'),
(11, 'dsaio', 'oisajd', 'oiad@jdaoi', 123456, 'ijsadoiajdsoiasjdaosjdoajd'),
(12, '123456123', '123456', '123@sijsada', 1234567, 'djisaodoiaojdasd'),
(13, 'sdaohdu', 'uisadiua', 'husaid@hdiusadhiua', 123456, 'jioasjdoiaoidaoidoidasijd'),
(14, 'zzz', 'zzz', 'zzz@zzz', 12345, 'zzzzzzzzzzzzzzz'),
(15, 'Muli', 'Selmanaj', 'flamur@selmanaj', 2147483647, 'shum palidhje qfar produkteve fort fort palidhje'),
(16, 'test', 'teste', '123asdajhn@asdijaoda', 1238974198, 'sjiodaijodadijo'),
(17, 'tes', 'hudsa', 'huiasda@duasd', 0, 'huidasadhu');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `firstSectionFirstTitle` text NOT NULL,
  `firstSectionFirstSpan` text NOT NULL,
  `firstSectionFirstParagraph` text NOT NULL,
  `firstSectionSecondTitle` text NOT NULL,
  `firstSectionSecondSpan` text NOT NULL,
  `firstSectionSecondParagraph` text NOT NULL,
  `sectionTwoFirstTitle` text NOT NULL,
  `sectionTwoFirstParagraph` text NOT NULL,
  `sectionTwoSecondTitle` text NOT NULL,
  `sectionTwoSecondParagraph` text NOT NULL,
  `sectionTwoThirdTitle` text NOT NULL,
  `sectionTwoThirdParagraph` text NOT NULL,
  `sectionTwoFourthTitle` text NOT NULL,
  `sectionTwoFourthParagraph` text NOT NULL,
  `sectionThreeFirstParagraph` text NOT NULL,
  `sectionThreeFirstTitle` text NOT NULL,
  `sectionThreeFirstSpan` text NOT NULL,
  `sectionThreeSecondParagraph` text NOT NULL,
  `sectionThreeThirdParagraph` text NOT NULL,
  `sectionThreeFourthParagraph` text NOT NULL,
  `sectionThreeFifthParagraph` text NOT NULL,
  `sectionThreeSixthParagraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`firstSectionFirstTitle`, `firstSectionFirstSpan`, `firstSectionFirstParagraph`, `firstSectionSecondTitle`, `firstSectionSecondSpan`, `firstSectionSecondParagraph`, `sectionTwoFirstTitle`, `sectionTwoFirstParagraph`, `sectionTwoSecondTitle`, `sectionTwoSecondParagraph`, `sectionTwoThirdTitle`, `sectionTwoThirdParagraph`, `sectionTwoFourthTitle`, `sectionTwoFourthParagraph`, `sectionThreeFirstParagraph`, `sectionThreeFirstTitle`, `sectionThreeFirstSpan`, `sectionThreeSecondParagraph`, `sectionThreeThirdParagraph`, `sectionThreeFourthParagraph`, `sectionThreeFifthParagraph`, `sectionThreeSixthParagraph`) VALUES
('Unlock your <br>skins radiance,', 'naturally', 'Unveiling the timeless elegance of<br>natural beauty, one skin at a time', 'Embrace your <br>natural beauty', 'through', 'It\'s like giving your skin a daily dose <br>of pure nourishment and care.', 'Natural Ingredients', 'From soothing botanical extracts to nourishing oils, each\r\n                ingredient is chosen for its skin loving properties', 'Flagrance Free', 'Enjoy skincare that is gentle and free from synthetic scents,\r\n                perfect for even the most sensitive skin.', 'Allergy Tested', 'Our products ensure they are gentle for all skin types,\r\n                giving you the confidence to embrace your beauty worry free.', 'Paraben Free', 'Your skin deserves only the best, which is why our products are free from parabens.\r\n                We believe in clean, healthy skincare without compromise.', 'NEWEST ARRIVAL', 'Deeply Nourishing<br>Serum For Glowing,', 'Healthy Skin', 'Our vegan serum is a cruelty free, plant powered\r\n                    elixir designed to nurture your locks with the goodness of nature.\r\n                    Say goodbye to harsh chemicals and hello to vibrant, luscious skin\r\n                    that is as kind to the planet as it is to you.', 'Strong and Smooth', 'Purely Vegan', 'Paraben free', 'Sulfate free');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` varchar(90) NOT NULL,
  `title` varchar(40) NOT NULL,
  `price` int(11) NOT NULL,
  `decription` text NOT NULL,
  `category` varchar(30) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `title`, `price`, `decription`, `category`, `created_by`) VALUES
(1, './resources/images/moisturizerDrySkin.png', 'Moisturizer For Dry Skin', 15, 'Moisturizer for dry skin is a silky rescue for thirsty complexions. Infused with rich hydrators like hyaluronic acid, shea butter, and oils like argan or jojoba, it\'s a drink of moisture for your skin. This lush formula locks in hydration, soothes dry patches, and restores suppleness, leaving your skin soft, smooth, and beautifully nourished all day long.', 'Moisturizers', 0),
(2, './resources/images/moisturizerOilySkin.png', 'Moisturizer For Oily Skin', 13, 'A moisturizer tailored for oily skin is a balancing act in a bottle. Light, oil-free, and often infused with ingredients like hyaluronic acid, niacinamide, and non-comedogenic elements, it hydrates without adding excess shine. It regulates oil production, mattifies the skin, and provides just the right level of moisturizer.', 'Moisturizers', 0),
(3, './resources/images/TonerForDrySkin.png', 'Toner For Oily Skin', 12, 'This toner for oily skin helps to remove excess oil and visibly reduce the look of pores.\r\n                    Formulated with micro-exfoliating lipo-hydroxy acid, this oily skin toner refines skin texture,\r\n                    and unblocks and tightens pores.', 'Toners', 0),
(4, './resources/images/TonerForOilySkin.png', 'Toner For Dry Skin', 12, ' Toner for dry skin is like a hydrating oasis in a bottle. Formulated with nourishing ingredients\r\n                    like hyaluronic acid, glycerin, and antioxidants,\r\n                    it replenishes moisture, soothes parched skin, and preps it to better absorb subsequent\r\n                    skincare.\r\n                    It gently tones without stripping natural oils, leaving your skin refreshed, plump, and ready to\r\n                    glow.', 'Toners', 0),
(5, './resources/images/AcneToner.png', 'Acne Toner', 12, 'A toner designed for acne-prone skin is a powerhouse against breakouts.\r\n                    Packed with ingredients like salicylic acid, witch hazel, and tea tree oil, it targets excess\r\n                    oil, unclogs pores, and fights acne-causing bacteria.\r\n                    It balances the skin\'s pH, reducing inflammation and preventing new blemishes, resulting in\r\n                    clearer, smoother, and healthier-looking skin.', 'Toners', 0),
(6, './resources/images/FaceWashForAcneOilySkin.png', 'Face Wash For Acne Oily Skin', 15, 'A face wash designed for acne-prone, oily skin is a superhero against breakouts.\r\n                    Infused with ingredients like salicylic acid, tea tree oil, and witch hazel, it purifies pores,\r\n                    banishes excess oil, and fights acne-causing bacteria.', 'FaceWashes', 0),
(7, './resources/images/LipikarAP+CreamWash.png', 'AP+ Cream Wash', 16, 'AP+ Cream Wash is a nurturing cleanser like no other.\r\n                    Specially crafted for sensitive, dry, and eczema-prone skin, this cream wash is a soothing\r\n                    embrace.\r\n                    Enriched with nourishing shea butter and niacinamide,\r\n                    it gently cleanses while replenishing the skin\'s moisture barrier.', 'FaceWashes', 0),
(8, './resources/images/MakeUpRemoverMilkForSensitiveSkin.png', 'Milk MakeUp Remover For Sentsitive Skin', 10, 'A makeup remover milk for sensitive skin is a gentle yet effective elixir. Crafted with calming\r\n                    ingredients like chamomile extract and aloe vera,\r\n                    it delicately dissolves makeup while soothing even the most reactive skin.', 'FaceWashes', 0),
(9, './resources/images/UltraGentleFreeCreamWash.png', 'Ultra Gentle Cream Wash', 11, 'The Ultra Gentle Free Cream Wash is a nurturing embrace for sensitive skin.\r\n                    Formulated without common irritants, it’s a gentle,\r\n                    fragrance-free cleanser designed to cleanse without disrupting the skin\'s natural balance.', 'FaceWashes', 0),
(10, './resources/images/ClayFaceMaskOilySkin.png', 'Clay Face Mask For Oily Skin', 8, ' A clay face mask for oily skin is a purifying ritual in a jar.\r\n                    Infused with natural clays like kaolin or bentonite,\r\n                    along with ingredients like charcoal or salicylic acid, it\'s a detox for your pores.', 'FaceWashes', 0),
(11, './resources/images/WaterMist.png', 'Water Mist', 7, 'A water mist for skin is a hydrating oasis in a bottle.\r\n                    Packed with soothing botanicals, vitamins, and sometimes minerals,\r\n                    it’s a refreshing spritz that instantly revitalizes and hydrates your skin.', 'FaceWashes', 0),
(12, './resources/images/BodyLotionDrySkin.png', 'Body Lotion For Dry Skin', 15, ' A body lotion for dry skin is like a silky blanket for your body.\r\n                        Enriched with nourishing ingredients like shea butter, glycerin, and oils such as almond or\r\n                        coconut,\r\n                        it\'s a luxurious drink of moisture.', 'BodyCare', 0),
(13, './resources/images/BodyWashForEczema.png', 'Body Wash For Eczema', 16, 'A body wash for eczema is a gentle embrace for sensitive skin.\r\n                    Formulated with soothing colloidal oatmeal, ceramides, and calming botanicals,\r\n                    it\'s a nurturing cleanse that gently soothes irritation, relieves itching, and replenishes the\r\n                    skin\'s natural moisture barrier.', 'BodyCare', 0),
(14, './resources/images/HandCream.png', 'Hand Cream', 10, 'A hand cream is like a silky glove of hydration.\r\n                    Packed with moisturizing agents like shea butter, glycerin, and vitamin E,\r\n                    it\'s a nurturing treat for your hardworking hands. This cream absorbs quickly, banishing\r\n                    dryness, softening rough skin.', 'BodyCare', 0),
(15, './resources/images/HandSanitizier.png', 'Hand Sanitizier', 8, 'Hand sanitizer is a portable shield against germs.\r\n                    Formulated with antiseptic ingredients like alcohol or benzalkonium chloride,\r\n                    it swiftly disinfects your hands, killing bacteria and viruses.', 'BodyCare', 0),
(16, './resources/images/LipikarLotion.png', 'Lipikar Lotion', 12, 'Lipikar Lotion by La Roche-Posay is a nurturing elixir for dry, sensitive skin. Enriched with\r\n                    shea butter and niacinamide,\r\n                    it\'s a lightweight yet deeply hydrating formula that replenishes moisture, soothes irritation,\r\n                    and fortifies the skin barrier.', 'BodyCare', 0),
(17, './resources/images/LipikarLotionAP+M.png', 'LotionAP and M', 16, 'Lotion AP and M from La Roche-Posay is a powerhouse for extremely dry, sensitive skin.\r\n                    Infused with shea butter, niacinamide, and Aqua Posae Filiformis,\r\n                    it\'s a deeply nourishing, non-greasy formula that restores the skin\'s barrier, soothes\r\n                    irritation, and replenishes moisture.', 'BodyCare', 0),
(18, './resources/images/SkinCareSetForOilySkin.png', 'SkinCare Set For Oily Skin', 25, 'This serum,balm and sunscreen set is designed for people that have oily to combination skin.\r\n                    It helps with pores,oil and other unwanted effects for your skin.', 'SkinCareSets', 0),
(19, './resources/images/moisturizerSetDrySkin.png', 'Moisturizer Set For Dry Skin', 30, 'This cleanser,balm and moistures is designed for people with dry skin.\r\n                    it helps to hydrate the dry skin,unclog pores,and give you a glowy finish.', 'SkinCareSets', 0),
(20, './resources/images/SunProtectorForDrySkin50.png', 'Sun Protector For Dry Skin 50', 12, 'Sun protector for dry skin with SPF 50 is like a shield against UV damage and dehydration.\r\n                    Infused with hydrating ingredients like hyaluronic acid and glycerin,\r\n                    it not only defends your skin against harmful rays but also locks in moisture, preventing\r\n                    dryness and keeping your skin nourished.', 'Sunscreen', 0),
(21, './resources/images/SunProtectorForDrySkin60.png', 'Sun Protector For Dry Skin 60', 16, 'Sun protector with SPF 60 for dry skin is a robust defense system against UV rays.\r\n                    With enhanced sun-shielding capabilities, it\'s fortified with hydrating agents like\r\n                    hyaluronic acid and vitamin E to lock in moisture and shield against dryness.', 'Sunscreen', 0),
(22, './resources/images/SunScreen100.png', 'Sunscreen 100', 15, 'Effaclar Clarifying Solution Acne Toner formulated with salicylic acid and glycolic acid.\r\n                    This toner for acne helps to remove pore-clogging debris and help clear blackheads, whiteheads,\r\n                    and acne blemishes.', 'Sunscreen', 0),
(23, './resources/images/SunscreenSpray60.png', 'Sunscreen Spray 60', 15, 'Effaclar Clarifying Solution Acne Toner formulated with salicylic acid and glycolic acid.\r\n                    This toner for acne helps to remove pore-clogging debris and help clear blackheads, whiteheads,\r\n                    and acne blemishes.', 'Sunscreen', 0),
(24, './resources/images/TintedSunScreen.png', 'Tinted Sunscreen', 12, 'Sunscreen with SPF 100 is a powerhouse defender against the sun\'s rays.\r\n                    Providing the highest level of broad-spectrum protection, it acts as a robust shield against UVA\r\n                    and UVB rays.\r\n                    Ideal for intense sun exposure, it offers maximum protection to help prevent sunburn and\r\n                    long-term skin damage', 'Sunscreen', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(18) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`, `role`) VALUES
(1, 'vesa', 'password', 'vesahasanaj@gmail.com', 12345678, 'admin'),
(3, 'aurora', 'password', 'auroraselmanaj@gmail.com', 12345678, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
