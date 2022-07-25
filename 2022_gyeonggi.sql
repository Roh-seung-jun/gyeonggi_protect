-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 22-07-25 13:16
-- 서버 버전: 10.4.22-MariaDB
-- PHP 버전: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `2022_gyeonggi`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `disables`
--

CREATE TABLE `disables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `garden_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `disables`
--

INSERT INTO `disables` (`id`, `garden_id`, `date`) VALUES
(1, '1', '2022-07-27'),
(4, '1', '2022-07-30');

-- --------------------------------------------------------

--
-- 테이블 구조 `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `gardens`
--

CREATE TABLE `gardens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `management` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `gardens`
--

INSERT INTO `gardens` (`id`, `name`, `latitude`, `longitude`, `management`, `phone`, `address`, `user_id`) VALUES
(1, '나폴리농원', '34.8022', '128.4242', '나폴리농원', '010-3117-9030', '경상남도 통영시 산양읍 미륵산길 152', 'user_0'),
(2, '사천식물랜드', '34.9954', '128.0653', '사천식물랜드', '010-4590-8718', '경상남도 사천시 용현면 덕곡리 82-4 일원', 'user_1'),
(3, '해솔찬정원', '34.8992', '128.3076', '해솔찬정원', '055-643-0564', '경상남도 통영시 도산면 저산리 572-1', 'user_2'),
(4, '통영동백커피식물원', '34.9358', '128.3565', '통영동백커피식물원', '010-3557-9634', '경상남도 통영시 도산면 원산리 920 일원', 'user_3'),
(5, '물빛소리정원', '34.9358', '128.3565', '물빛소리정원', '010-3588-6453', '경상남도 통영시 도산면 수월리 655-3', 'user_4'),
(6, '춘화의 정원', '34.9027', '128.3591', '춘화의 정원', '010-2596-6344', '경상남도 통영시 도산면 도산일주로 56', 'user_5'),
(7, '농부가그린정원', '35.3086', '128.7089', '농부가그린정원', '010-3832-8430', '경상남도 김해시 진영읍 좌곤리 765-1', 'user_6'),
(8, '엄마의정원', '35.4071', '128.7317', '엄마의정원', '010-3884-1100', '경상남도 밀양시 하남읍 남전7길 41-19', 'user_7'),
(9, '녹색교육정원', '35.3508', '129.1226', '녹색교육정원', '010-5574-7176', '경상남도 양산시 동면 개곡로77번길', 'user_8'),
(10, '옥동힐링가든', '34.8703', '128.5461', '옥동힐링가든', '055-636-8988', '경상남도 거제시 둔덕면 청마로 665-13', 'user_9'),
(11, '새미골정원', '35.3542', '129.1178', '새미골정원', '010-3885-1567', '경상남도 양산시 동면 개곡리 564', 'user_10'),
(12, '느티나무의 사랑', '35.3075', '129.1066', '느티나무의 사랑', '055-912-5551', '경상남도 양산시 동면 여락리 103 일원', 'user_11'),
(13, '만년교정원', '35.453', '128.5296', '만년교정원', '010-9431-2277', '경상남도 창녕군 영산면 원다리길 17', 'user_12'),
(14, '그레이스정원', '34.975', '128.168', '그레이스정원', '055-673-1803', '경상남도 고성군 상리면 삼상로 1312-71', 'user_13'),
(15, '만화방초정원', '34.9607', '128.3854', '만화방초', '010-3870-1041', '경상남도 고성군 거류면 은황길 82-91', 'user_14'),
(16, '섬이정원', '34.7527', '127.8608', '섬이정원', '010-2255-3577', '경상남도 남해군 남면 평산리 888-4번지', 'user_15'),
(17, '화계리정원', '34.7778', '127.9401', '화계리정원', '010-4074-6444', '경상남도 남해군 이동면 화계리 292-6', 'user_16'),
(18, '토피어리정원', '34.8455', '127.9818', '토피어리정원', '010-2851-2978', '경상남도 남해군 창선면 서부로 270-106', 'user_17'),
(19, '하미앙정원', '35.47', '127.6718', '하미앙정원', '055-964-2500', '경남 함양군 함양읍 삼봉로 442-14', 'user_18'),
(20, '이수미팜베리정원', '35.7104', '127.8861', '이수미팜베리정원', '055-945-1789', '경상남도 거창군 거창읍 가지리 산250-3', 'user_19'),
(21, '이한메미술관', '35.8209', '127.8111', '이한메미술관', '010-3227-0345', '경상남도 거창군 북상면 송계로 1243-15', 'user_20'),
(22, '자연의소리정원', '35.8311', '128.0783', '자연의소리정원', '055-262-2729', '경상남도 거창군 가북면 용암리 산62 일원', 'user_21');

-- --------------------------------------------------------

--
-- 테이블 구조 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2022_07_25_061019_create_gardens_table', 2),
(4, '2022_07_25_061924_create_types_table', 2),
(5, '2022_07_25_071259_create_disables_table', 3),
(6, '2022_07_25_073416_create_promises_table', 4),
(7, '2022_07_25_092752_create_reviews_table', 5),
(8, '2022_07_25_093225_create_review_files_table', 5);

-- --------------------------------------------------------

--
-- 테이블 구조 `promises`
--

CREATE TABLE `promises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `people` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `garden_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `promises`
--

INSERT INTO `promises` (`id`, `people`, `start_date`, `end_date`, `price`, `user_id`, `garden_id`, `state`) VALUES
(1, '123', '2022-07-13', '2022-07-15', '246000', 'admin', '1', 'cancel'),
(2, '112321', '2022-07-30', '2022-07-31', '112321000', 'user_22', '1', 'cancel'),
(4, '3122', '2022-07-05', '2022-07-08', '9366000', 'user_22', '1', NULL),
(5, '1298739', '2022-07-01', '2022-07-02', '1298739000', 'user_22', '1', NULL);

-- --------------------------------------------------------

--
-- 테이블 구조 `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` int(11) NOT NULL,
  `promise_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `contents`, `score`, `promise_id`) VALUES
(5, 'user_22', 'ㅁㄴㅇㅁㄴㅇ', 9, '4');

-- --------------------------------------------------------

--
-- 테이블 구조 `review_files`
--

CREATE TABLE `review_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `review_files`
--

INSERT INTO `review_files` (`id`, `file_name`, `review_id`) VALUES
(5, '1658742983_php328B.tmp.jpeg', '5'),
(6, '1658742983_php328C.tmp.jpeg', '5'),
(7, '1658742983_php328D.tmp.jpeg', '5');

-- --------------------------------------------------------

--
-- 테이블 구조 `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `garden_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `types`
--

INSERT INTO `types` (`id`, `garden_id`, `type`) VALUES
(1, '1', '등산길'),
(2, '1', '자연적'),
(3, '1', '휴양지'),
(4, '1', '시원'),
(5, '2', '꽃길'),
(6, '2', '관광지'),
(7, '2', '광활'),
(8, '3', '체험학습'),
(9, '3', '초원'),
(10, '3', '식물원'),
(11, '4', '식물원'),
(12, '4', '과수원'),
(13, '4', '촉촉'),
(14, '5', '꽃길'),
(15, '5', '관광지'),
(16, '5', '광활'),
(17, '6', '체험학습'),
(18, '6', '산책로'),
(19, '7', '식물원'),
(20, '8', '광활'),
(21, '8', '식물원'),
(22, '9', '체험학습'),
(23, '9', '빈티지'),
(24, '9', '자연적'),
(25, '10', '공원'),
(26, '10', '체험학습'),
(27, '10', '폭포'),
(28, '10', '추억'),
(29, '11', '공원'),
(30, '11', '산'),
(31, '11', '시원'),
(32, '12', '나무'),
(33, '12', '광활'),
(34, '12', '공원'),
(35, '13', '농촌'),
(36, '13', '대형'),
(37, '13', '자연적'),
(38, '14', '자연적'),
(39, '14', '휴양지'),
(40, '14', '산림욕'),
(41, '14', '광활'),
(42, '15', '산책로'),
(43, '15', '시원'),
(44, '15', '자연적'),
(45, '16', '나무'),
(46, '16', '산책로'),
(47, '16', '빈티지'),
(48, '17', '친근'),
(49, '17', '빈티지'),
(50, '17', '나무'),
(51, '18', '체험학습'),
(52, '18', '초원'),
(53, '18', '산'),
(54, '18', '꽃길'),
(55, '18', '동화'),
(56, '19', '공원'),
(57, '19', '휴식'),
(58, '19', '광활'),
(59, '20', '음식점'),
(60, '20', '산책로'),
(61, '20', '아늑'),
(62, '21', '공원'),
(63, '21', '광활'),
(64, '21', '시원'),
(65, '22', '산'),
(66, '22', '산책로'),
(67, '22', '연못'),
(68, '22', '예술');

-- --------------------------------------------------------

--
-- 테이블 구조 `users`
--

CREATE TABLE `users` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `type`) VALUES
('admin', '관리자', '1234', '관리자'),
('user_0', 'user_0', '1234', 'management'),
('user_1', 'user_1', '1234', 'management'),
('user_10', 'user_10', '1234', 'management'),
('user_11', 'user_11', '1234', 'management'),
('user_12', 'user_12', '1234', 'management'),
('user_13', 'user_13', '1234', 'management'),
('user_14', 'user_14', '1234', 'management'),
('user_15', 'user_15', '1234', 'management'),
('user_16', 'user_16', '1234', 'management'),
('user_17', 'user_17', '1234', 'management'),
('user_18', 'user_18', '1234', 'management'),
('user_19', 'user_19', '1234', 'management'),
('user_2', 'user_2', '1234', 'management'),
('user_20', 'user_20', '1234', 'management'),
('user_21', 'user_21', '1234', 'management'),
('user_22', 'user_22', '1234', 'normal'),
('user_3', 'user_3', '1234', 'management'),
('user_4', 'user_4', '1234', 'management'),
('user_5', 'user_5', '1234', 'management'),
('user_6', 'user_6', '1234', 'management'),
('user_7', 'user_7', '1234', 'management'),
('user_8', 'user_8', '1234', 'management'),
('user_9', 'user_9', '1234', 'management');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `disables`
--
ALTER TABLE `disables`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `gardens`
--
ALTER TABLE `gardens`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `promises`
--
ALTER TABLE `promises`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `review_files`
--
ALTER TABLE `review_files`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `disables`
--
ALTER TABLE `disables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 테이블의 AUTO_INCREMENT `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `gardens`
--
ALTER TABLE `gardens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 테이블의 AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 테이블의 AUTO_INCREMENT `promises`
--
ALTER TABLE `promises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 테이블의 AUTO_INCREMENT `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 테이블의 AUTO_INCREMENT `review_files`
--
ALTER TABLE `review_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 테이블의 AUTO_INCREMENT `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
