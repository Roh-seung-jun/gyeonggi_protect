-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 22-07-26 08:34
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
-- 데이터베이스: `chung_buk`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `arts`
--

CREATE TABLE `arts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `art_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `arts`
--

INSERT INTO `arts` (`id`, `name`, `type`, `art_name`, `product_img`, `description`, `price`, `code`) VALUES
(2, '김기', '한국화', '일경매화향운만지반창화영월농사', '1658021965Capture001.png', '한줄기 매화는 향기가 구름처럼 땅에 가득하고 반쯤 열린 꽃그림은 달빛에 은은하구나', 150000, 'KO-2721'),
(4, '김은호', '한국화', '作品 9004', '김은호_이태백 취수.jpg', '준비중', 100000, 'KO-2735'),
(6, '남정 박노수', '한국화', '기마도', '남정_박노수.png', '동정호에서 서쪽을 보면 초강은 나누어 있고, 남쪽을 보면 구름도 보이지 않네. 해 질 무렵 백사장엔 가을빛이 펼쳐지고 어느 곳에서 상군을 조상할까..?', 100000, 'KO-2336'),
(7, '류회민', '한국화', '터널', '류회민_터널.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum porro eligendi odit, illo rem vel alias sint tenetur labore, modi, similique nam eaque quis natus cupiditate esse at cum.', 100000, 'KO-2469'),
(9, '박노수', '한국화', '월하취적도', '박노수_월하취적도1.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum porro eligendi odit, illo rem vel alias sint tenetur labore, modi, similique nam eaque quis natus cupiditate esse at cum.', 100000, 'KO-2818'),
(12, '엄성관', '한국화', '아심비석불가전야', '엄성관 소.jpg', '내 마음이 둘이 아니어서 굴릴 수 없다. 의지가 굳어서 쉽게 굴리지 않는다. 즉 바위는 굴릴 수 있지만 내 마음은 워낙 단단해서 지조를 지겠다. 그 강한 힘을 황소로 비유함.', 100000, 'KO-2481'),
(13, '유천 김화경', '한국화', '연날리기', '유천_김화경.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum porro eligendi odit, illo rem vel alias sint tenetur labore, modi, similique nam eaque quis natus cupiditate esse at cum.', 100000, 'KO-2736'),
(14, '유산 민경갑', '한국화', '향원익청', '민경갑_향원익청1.png', '향기는 멀리까지 가고 맑음은 더하구나', 100000, 'KO-2334'),
(15, '이규옥', '한국화', '소와 목동', '이규옥_소와 목동.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum porro eligendi odit, illo rem vel alias sint tenetur labore, modi, similique nam eaque quis natus cupiditate esse at cum.', 100000, 'KO-2483'),
(16, '이석우', '한국화', '환', '이석우_농악(19한-2815).png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum porro eligendi odit, illo rem vel alias sint tenetur labore, modi, similique nam eaque quis natus cupiditate esse at cum.', 100000, 'KO-2815'),
(17, '이석우', '한국화', '호춘', '이석우_화조도.png', '봄을 노래하다.', 100000, 'KO-2814'),
(18, '이석우', '한국화', '피난길', '이석우-피난길.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum porro eligendi odit, illo rem vel alias sint tenetur labore, modi, similique nam eaque quis natus cupiditate esse at cum.', 100000, 'KO-2843'),
(19, '이양원', '한국화', '풍물놀이', '이양원, 풍물놀이.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum porro eligendi odit, illo rem vel alias sint tenetur labore, modi, similique nam eaque quis natus cupiditate esse at cum.', 100000, 'KO-2816'),
(20, '이유태', '한국화', '미상', '이유태, 미상.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum porro eligendi odit, illo rem vel alias sint tenetur labore, modi, similique nam eaque quis natus cupiditate esse at cum.', 100000, 'KO-28109'),
(21, '장우성', '한국화', '낙조일경', '장우성_낙조일경.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum porro eligendi odit, illo rem vel alias sint tenetur labore, modi, similique nam eaque quis natus cupiditate esse at cum.', 100000, 'KO-2720'),
(22, '정재호', '한국화', '청운동 기념비', '정재호 소용량.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum porro eligendi odit, illo rem vel alias sint tenetur labore, modi, similique nam eaque quis natus cupiditate esse at cum.', 100000, 'KO-2472'),
(23, '최명영', '한국화', 'Conditional Planes 8308', '정재호 소용량.png', '평면조건 8308(Conditional Planes 8308)(1983)은 먹물로 한지 전면을 검게 물들인 뒤, 한지 뒤에서 솔로 두드려 화면 위에 마티에르를 표현한 작품이다.', 100000, 'KO-2437'),
(24, '김남배', '회화', '부산 풍경', '김남배, 부산 풍경(1).png', '<부산 풍경>은 초기 부산화단의 특징인 인상주의와 표현주의적 화풍과 1950년대 말 김남배가 심취한 동양의 수묵화적 화풍을 나타낸다', 100000, 'PA-2918'),
(25, '김동규', '회화', '대안', '김동규, 대안1.png', '천과 염료를 이용한 번지기 기법을 사용했으며 전체 이미지는 인체 형상으로 서로 상호간의 무언의 대화를 상징하는 대안으로 순간 상황내면 표출이다.', 150000, 'PA-2887'),
(26, '김미애', '회화', '게임', '김미애, 게임(1).png', '준비중', 150000, 'PA-2920'),
(27, '김영덕', '회화', '역사의 거울 앞에서', '김영덕, 역사의 거울 앞에서.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum porro eligendi odit, illo rem vel alias sint tenetur labore, modi, similique nam eaque quis natus cupiditate esse at cum.', 100000, 'PA-2896'),
(28, '김은주', '회화', '얼굴', '김은주, 얼굴.png', '인체를 주로 그려온 작가가 그린 자화상이다', 100000, 'PA-2924'),
(29, '김춘자', '회화', '생', '김춘자, 생.png', '식물이나 동물, 곤충들이 경계 없이 혼재된 형상으로 자연의 미분화 지점에서의 원초적 생명력을 표현하고자 했다.', 100000, 'PA-2926'),
(30, '박경인', '회화', '큰 종이호랑이', '박경인, 큰 종이호랑이(3).png', '불화의 시대와 그 땅 위에서 살아가는, 그럼에도 불구하고 강한 생명력으로 살아가는 사람들의 이야기를 형상화 한 작품이다.', 100000, 'PA-2928'),
(31, '박병제', '회화', '40계단', '박병제, 40계단.png', '낡고 오래된 작은 집들, 경사진 골목과 계단은 지정학적 문제를 넘어 도시의 내면 그리고 우리 내면의 문제가 무엇인지 묻는다.', 100000, 'PA-2929'),
(32, '박춘재', '회화', '도시의 이야기1', '박춘재, 도시의 이야기1.png', '강렬한 색으로 건물의 윤곽을 두른 미세하게 굽은 선의 표현이 돋보이는 작품으로 선이 가지는 운율적 조형성을 이용하였다.', 100000, 'PA-2930'),
(33, '예유근', '회화', '갇힌 호랑이', '예유근, 갇힌 호랑이(2).png', '우리 전통적 정신의 기반인 산신령마저도 가두어 버린 시대. 변화하는 서구의 회화 이론과 동시대에 대한 격렬한 고민을 닫힌 창을 통해 들여다보고, 열리기를 기대하는 삶의 표정으로 새로운 기법의 회화적 표현 회복에 집중했다.', 100000, 'PA-2931'),
(34, '오영재', '회화', '영도', '오영재, 영도.png', '자연이 지닌 절대적 통일성을 조형적으로 재구성함으로써 객관적 응시에 대한 자신의 자각을 표현했다.', 100000, 'PA-2932'),
(35, '이건용', '회화', '달팽이 걸음-2019', '이건용.png', '준비중', 100000, ' PA-2886'),
(36, '정복수', '회화', '고독을 소독하는 사람', '정복수, 고독을 소독하는 사람(2).png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum porro eligendi odit, illo rem vel alias sint tenetur labore, modi, similique nam eaque quis natus cupiditate esse at cum.', 100000, 'PA-2935'),
(37, '최석운', '회화', '낮잠', '최석운_낮잠.png', '준비중', 100000, 'PA-2937'),
(38, '최아자', '회화', '희망', '최아자, 희망(2).png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum porro eligendi odit, illo rem vel alias sint tenetur labore, modi, similique nam eaque quis natus cupiditate esse at cum.', 100000, ' PA-2898'),
(39, '하인두', '회화', '해조음', '하인두, 해조음.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum porro eligendi odit, illo rem vel alias sint tenetur labore, modi, similique nam eaque quis natus cupiditate esse at cum.', 100000, 'PA-2939'),
(40, '이석우', '회화', '쌍매듭 (Ed. 2/10)', '한운성, 쌍매듭.png', '준비중', 100000, 'PA-2916'),
(41, '허찬미', '회화', '작은 다윗', '허찬미, 작은 다윗.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum porro eligendi odit, illo rem vel alias sint tenetur labore, modi, similique nam eaque quis natus cupiditate esse at cum.', 100000, 'PA-2940'),
(42, '강창원', '공예', '자개함', '강창원.jpg', '뚜껑과 본체 등 2개의 단위로 분리되는 함으로 뚜껑 전면에 회화적인 느낌의 산수풍경을 자개를 사용하여 배치시킨 작업으로 안정된 구도와 함께 현대적인 미감을 조화시킨 공예작업이다.', 100000, 'CR-0791'),
(43, '권상오', '공예', '주칠석목건칠-호', '권상오.jpg', '준비중', 150000, 'CR-0792'),
(44, '김상호', '공예', '무제', '김상호.png', '세라믹을 중심기법으로 하며 그 표현성만을 고려하여 최대한 자유롭게 접근 시도한 작업이다.', 150000, 'CR-0425'),
(45, '김성수', '공예', '체스트 -2007 공존', '김성수.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum porro eligendi odit, illo rem vel alias sint tenetur labore, modi, similique nam eaque quis natus cupiditate esse at cum.', 100000, 'CR-1745'),
(46, '박무봉', '공예', '도시', '박무봉_도시1.png', '준비중', 100000, 'CR-2054'),
(47, '박수철', '공예', '형성87-2', '박수철.jpg', '사각 프레임 안의 사각, 사각의 중첩과 사각의 병치, 평면과 부조적 입체감을 나타내는 등 그의 작업은 주로 사각 사이의 조형적 배려로 이루어져 있다.', 100000, 'CR-0406'),
(48, '송번수', '공예', '절망과 가능성', '송번수.jpg', '준비중', 100000, 'CR-0404'),
(49, '신상호', '공예', 'Structure & Force-Horse', '신상호-Horse_좌.jpg', '동물의 형상과 건축적인 구조를 결합시킨 작품이다.', 100000, 'CR-2045'),
(50, '오구환', '공예', '生動(생동)', '오구환.jpg', '준비중', 100000, 'CR-1289'),
(51, '오천학', '공예', '陶碑(도비)', '오천학_陶碑(도비).png', '준비중', 100000, 'CR-2369'),
(52, '왕경애', '공예', '즉흥 99-02', '왕경애.jpg', '자연이 지닌 절대적 통일성을 조형적으로 재구성함으로써 객관적 응시에 대한 자신의 자각을 표현했다.', 100000, 'CR-0291'),
(53, '유재구', '공예', '불립문자', '유재구.jpg', '고려닥을 이용해서 작픔이 바탕을 넘나들고 그 위에 다시 염색한 펄프를 올리는 방법으로, 작업의 주 과정을 삼고 있다.', 100000, 'CR-0437'),
(54, '윤필남', '공예', 'beyond', '윤필남_beyond1.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum porro eligendi odit, illo rem vel alias sint tenetur labore, modi, similique nam eaque quis natus cupiditate esse at cum.', 100000, 'CR-2060'),
(55, '이동일', '공예', '과기(菓器)', '이동일_과기(菓器)1.png', '준비중', 100000, 'CR-0794'),
(56, '진영섭', '공예', '밀월여행', '진영섭.jpg', '물고기형상에 성형기법이 이용된 작품이다.', 100000, 'CR-0955'),
(57, '강태훈', '조각', '새들은 더 이상 노래하지 않는다', '강태훈_새들은 더 이상 노래하지 않는다(전체 파노라마)_2010.jpg', '사회에서 일어난 문제적 사건들을 상징적 오브제로 구현한 설치작품이다', 100000, 'SC-2822'),
(58, '김성진', '조각', 'Prototype-107B', '김성진_Prototype-107B.png', '준비중', 150000, 'SC-2788'),
(59, '김인배', '조각', '겐다로크', '김인배_겐다로크.png', '일반적인 기념비 형태의 좌대 위에 흉상이 있다. 흉상의 얼굴이 중심에서 좌우 양쪽으로 분화된 형태를 보여준다', 150000, 'SC-2827'),
(60, '김정명', '조각', '유리창을 통한 프레임만들기', '김정명.png', '초기 실험 작업부터 사용된 액자 프레임은 창문 프레임으로 확장되는데, 세상을 바라보고 관찰하기 위한 특정한 관점을 의미하는 프레임은 기존의 사물이나 현상에 대한 새로운 시각을 의미한다.', 100000, 'SC-2856'),
(61, '김청정', '조각', '거울에 머문 바람', '김정명.png', '철 육면체 틀 안에 비닐 물주머니를 매달고 바닥에 거울을 놓아 사물과 공간과의 유기적인 관계를 개념화시킨 작품이다. ', 100000, 'SC-2850'),
(62, '양혜규', '조각', '솔 르윗 뒤집기- 8배로 축소된, 셋x넷x셋', '양혜규.png', '블라인드 입방체로 모형화된 본 작품은 시시각각 변화하는 빛이 백색 블라인드와 조우하며 생동감 있는 색의 울림과 해방감을 느낄 수 있게 하는 작품이다.', 100000, 'SC-2784'),
(63, '윤석남', '조각', '108', '윤석남.png', '소외된 존재들에 대한 작가의 애정과 관심이 묻어나는 조각 작품이다.', 100000, 'SC-2783'),
(64, '윤희', '조각', 'Spherique', '윤희 소용량.png', '준비중', 100000, 'SC-2786'),
(65, '이병호', '조각', 'Prayer', '이병호_Prayer.png', '에어 컴프레셔의 공기 주입에 따라 수축과 팽창을 반복하는 실리콘으로 제작된다.', 100000, 'SC-2825'),
(66, '이종빈', '조각', '공원', '이종빈.jpg', '준비중', 100000, 'SC-2779'),
(67, '이창운', '조각', '편도여행', '이창운 (1).jpg', '레일 위에는 금방 깨질 것 같으면서도 견고한 달걀이 줄지어 움직인다. 그가 보여주는 특별할것 없는 반복된 달걀의 움직임은 보는 이로 하여금 각자의 일상을 환기한다.', 100000, 'SC-2821'),
(68, '정철교', '조각', '인형-나의 긴 붓으로', '정철교- 인형- 나의 긴 붓으로 (1).png', '준비중', 100000, 'SC-2936'),
(69, '정혜련', '조각', 'Abstract time', '정혜련 소용량.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum porro eligendi odit, illo rem vel alias sint tenetur labore, modi, similique nam eaque quis natus cupiditate esse at cum.', 100000, 'SC-2787'),
(70, '최만린', '조각', '태(placenta) 80-27 (Ed.0)', '최만린 소용량.png', '준비중', 100000, 'SC-2782'),
(71, '최정화', '조각', '공주님의자+메이드인 코리아', '최정화, 공주님의자+메이드인 코리아.png', '흔히 볼 수 있는 플라스틱 의자의 외형을 가진 작품으로, 마치 제프 쿤스의 ‘풍선 강아지’처럼 고혹적인 색상을 띄며 반짝인다.', 100000, 'SC-2938'),
(72, '홍명섭', '조각', '1995~2016년', '홍명섭_탈제.jpeg', '흔히 볼 수 있는 플라스틱 의자의 외형을 가진 작품으로, 마치 제프 쿤스의 ‘풍선 강아지’처럼 고혹적인 색상을 띄며 반짝인다.', 100000, 'SC-2824'),
(73, '(석불)정기호', '서예', '현우현현판,정각', '정기호.jpg', '석불 글, 아들 목불 새김', 100000, 'CA-0278'),
(74, '해암', '서예', '반야심경', '해암.jpg', '준비중', 150000, 'CA-0277');

-- --------------------------------------------------------

--
-- 테이블 구조 `builds`
--

CREATE TABLE `builds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `builds`
--

INSERT INTO `builds` (`id`, `name`) VALUES
(1, '청년관'),
(2, '미래관');

-- --------------------------------------------------------

--
-- 테이블 구조 `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `art_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `build_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `events`
--

INSERT INTO `events` (`id`, `user_id`, `start_date`, `end_date`, `position`, `build_id`) VALUES
(1, 'admin', '2022-07-16', '2022-07-28', '106', '1'),
(2, 'admin', '2022-07-20', '2022-07-28', '107', '1'),
(3, 'admin', '2022-07-16', '2022-07-28', '108', '1'),
(10, 'user1', '2022-07-06', '2022-07-29', '105', '1'),
(11, 'user1', '2022-07-06', '2022-07-29', '115', '1'),
(12, 'user1', '2022-07-06', '2022-07-29', '114', '1'),
(13, 'user1', '2022-07-06', '2022-07-29', '113', '1'),
(14, 'admin', '2022-03-10', '2022-10-21', '101', '2'),
(16, 'admin', '2022-06-01', '2022-08-26', '116', '1'),
(17, 'admin', '2022-06-01', '2022-08-26', '112', '1'),
(18, 'admin', '2022-06-01', '2022-08-26', '111', '1'),
(19, 'admin', '2022-07-15', '2022-07-30', '109', '2'),
(20, 'admin', '2022-07-15', '2022-07-30', '107', '2'),
(21, 'admin', '2022-07-15', '2022-07-30', '108', '2');

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
-- 테이블 구조 `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `art_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buy_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `histories`
--

INSERT INTO `histories` (`id`, `code`, `art_id`, `user_id`, `buy_date`) VALUES
(1, 'EL83', '1', 'admin', '2022-07-15'),
(2, '1JF7', '1', 'admin', '2022-07-15'),
(3, 'S02J', '1', 'admin', '2022-07-15'),
(4, '1A8J', '1', 'admin', '2022-07-15'),
(5, 'C5A9', '1', 'admin', '2022-07-15'),
(6, '9I1C', '2', 'admin', '2022-07-15'),
(7, '86FA', '87', 'admin', '2022-07-26'),
(8, 'PK2G', '2', 'admin', '2022-07-26'),
(9, 'PK2G', '2', 'admin', '2022-07-26');

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
(3, '2022_07_15_065942_create_arts_table', 2),
(4, '2022_07_15_083247_create_histories_table', 3),
(5, '2022_07_15_083320_create_buys_table', 3),
(6, '2022_07_17_043325_create_builds_table', 4),
(7, '2022_07_17_043616_create_positions_table', 4),
(8, '2022_07_17_043646_create_events_table', 4);

-- --------------------------------------------------------

--
-- 테이블 구조 `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `build_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `positions`
--

INSERT INTO `positions` (`id`, `build_id`, `name`) VALUES
(33, '1', '101'),
(34, '1', '102'),
(35, '1', '103'),
(36, '1', '104'),
(37, '1', '105'),
(38, '1', '106'),
(39, '1', '107'),
(40, '1', '108'),
(41, '1', '109'),
(42, '1', '110'),
(43, '1', '120'),
(44, '1', '119'),
(45, '1', '118'),
(46, '1', '117'),
(47, '1', '116'),
(48, '1', '115'),
(49, '1', '114'),
(50, '1', '113'),
(51, '1', '112'),
(52, '1', '111'),
(53, '2', '101'),
(54, '2', '102'),
(55, '2', '103'),
(56, '2', '104'),
(57, '2', '105'),
(58, '2', '106'),
(59, '2', '107'),
(60, '2', '108'),
(61, '2', '109'),
(62, '2', '110'),
(63, '2', '114'),
(64, '2', '113'),
(65, '2', '112'),
(66, '2', '111');

-- --------------------------------------------------------

--
-- 테이블 구조 `users`
--

CREATE TABLE `users` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `color`) VALUES
('admin', '관리자', '1234', '#70ff8b'),
('user1', '회원1', '1234', '#e8f29a'),
('user2', '회원2', '1234', '#8fb0c6'),
('user3', '회원3', '1234', '#ff6146'),
('user4', '회원4', '1234', '#885de5');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `arts`
--
ALTER TABLE `arts`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `builds`
--
ALTER TABLE `builds`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `positions`
--
ALTER TABLE `positions`
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
-- 테이블의 AUTO_INCREMENT `arts`
--
ALTER TABLE `arts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- 테이블의 AUTO_INCREMENT `builds`
--
ALTER TABLE `builds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 테이블의 AUTO_INCREMENT `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 테이블의 AUTO_INCREMENT `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 테이블의 AUTO_INCREMENT `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 테이블의 AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 테이블의 AUTO_INCREMENT `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
