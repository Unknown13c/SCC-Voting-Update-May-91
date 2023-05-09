-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 04:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scc_votingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activitylogs`
--

CREATE TABLE `tbl_activitylogs` (
  `logs_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `login_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_activitylogs`
--

INSERT INTO `tbl_activitylogs` (`logs_id`, `username`, `action`, `login_time`) VALUES
(1912, 'admin', 'logout', '2022-04-09 23:21:24'),
(1913, 'admin', 'login', '2022-04-09 23:21:39'),
(1914, 'admin', 'New voters added', '2022-04-09 23:22:09'),
(1915, 'admin', 'Deleted', '2022-04-09 23:22:36'),
(1916, 'admin', 'Voting Disable', '2022-04-09 23:22:43'),
(1917, 'admin', 'New partylist added', '2022-04-10 00:09:35'),
(1918, 'admin', 'Deleted partylist', '2022-04-10 00:09:43'),
(1919, 'admin', 'Deleted partylist', '2022-04-10 00:21:29'),
(1920, '', 'New partylist added', '2022-04-10 00:23:45'),
(1921, 'admin', 'Deleted partylist', '2022-04-10 00:24:52'),
(1922, '', 'New partylist added', '2022-04-10 00:25:00'),
(1923, '', 'New partylist added', '2022-04-10 01:48:08'),
(1924, 'admin', 'Deleted partylist', '2022-04-10 01:48:16'),
(1925, 'admin', 'logout', '2022-04-10 01:49:23'),
(1926, 'admin', 'login', '2022-04-10 01:50:02'),
(1927, 'admin', 'login', '2022-04-10 16:45:02'),
(1928, 'admin', 'Voting Enable', '2022-04-10 17:48:39'),
(1929, 'admin', 'login', '2022-04-10 18:18:02'),
(1930, 'admin', 'login', '2022-04-11 21:32:56'),
(1931, 'admin', 'login', '2022-04-14 19:11:00'),
(1932, 'admin', 'logout', '2022-04-14 19:11:14'),
(1933, 'admin', 'login', '2022-04-23 09:36:39'),
(1934, '', 'New voters added', '2022-04-23 09:37:59'),
(1935, 'admin', 'login', '2022-04-25 16:20:19'),
(1936, 'admin', 'login', '2022-04-25 17:15:30'),
(1937, 'admin', 'login', '2022-04-29 09:48:52'),
(1938, 'admin', 'login', '2022-04-29 15:59:39'),
(1939, 'admin', 'logout', '2022-04-29 16:15:50'),
(1940, 'admin', 'login', '2022-05-09 23:22:48'),
(1941, 'admin', 'login', '2022-05-16 18:57:18'),
(1942, 'admin', 'login', '2022-05-29 23:04:14'),
(1943, 'admin', 'login', '2022-09-20 14:25:57'),
(1944, 'admin', 'login', '2022-09-20 14:29:15'),
(1945, 'admin', 'logout', '2022-09-20 14:30:36'),
(1946, 'admin', 'File Import', '2022-09-20 14:34:56'),
(1947, 'admin', 'Deleted partylist', '2022-09-20 14:35:36'),
(1948, 'admin', 'Deleted partylist', '2022-09-20 14:35:40'),
(1949, 'admin', 'Deleted partylist', '2022-09-20 14:35:42'),
(1950, '', 'New partylist added', '2022-09-20 14:36:15'),
(1951, '', 'New partylist added', '2022-09-20 14:36:54'),
(1952, '', 'New partylist added', '2022-09-20 14:37:33'),
(1953, 'admin', 'login', '2022-09-20 14:56:10'),
(1954, 'admin', 'Approved', '2022-09-20 14:56:28'),
(1955, 'admin', 'Approved', '2022-09-20 14:56:32'),
(1956, 'admin', 'Approved', '2022-09-20 14:56:37'),
(1957, 'admin', 'Approved', '2022-09-20 14:56:40'),
(1958, 'admin', 'Approved', '2022-09-20 14:56:47'),
(1959, 'admin', 'Approved', '2022-09-20 14:56:50'),
(1960, 'admin', 'Approved', '2022-09-20 14:57:00'),
(1961, 'admin', 'Candidate Delete', '2022-09-20 14:58:31'),
(1962, 'admin', 'logout', '2022-09-20 15:02:07'),
(1963, 'admin', 'login', '2022-09-20 15:37:55'),
(1964, 'admin', 'login', '2022-09-20 15:38:17'),
(1965, 'admin', 'Rejected candidate', '2022-09-20 15:40:25'),
(1966, 'admin', 'logout', '2022-09-20 15:40:47'),
(1967, 'admin', 'login', '2022-09-20 15:41:13'),
(1968, 'admin', 'Voting Enable', '2022-09-20 15:41:19'),
(1969, 'admin', 'Voting Disable', '2022-09-20 15:56:33'),
(1970, 'admin', 'login', '2022-09-21 12:58:28'),
(1971, 'admin', 'login', '2022-09-21 13:15:37'),
(1972, 'admin', 'login', '2022-09-21 13:28:08'),
(1973, 'admin', 'login', '2022-09-21 13:30:08'),
(1974, 'admin', 'Voting Enable', '2022-09-21 13:30:16'),
(1975, 'admin', 'Voting Disable', '2022-09-21 13:30:22'),
(1976, 'admin', 'logout', '2022-09-21 13:32:18'),
(1977, 'admin', 'login', '2022-09-21 13:42:50'),
(1978, 'admin', 'logout', '2022-09-21 13:43:32'),
(1979, 'admin', 'login', '2022-09-21 13:48:06'),
(1980, 'admin', 'Approved', '2022-09-21 13:56:01'),
(1981, 'admin', 'Voting Enable', '2022-09-21 13:58:20'),
(1982, 'admin', 'Voting Disable', '2022-09-21 13:58:22'),
(1983, 'admin', 'Voting Enable', '2022-09-21 14:12:21'),
(1984, 'admin', 'Voting Disable', '2022-09-21 14:24:52'),
(1985, 'admin', 'Approved', '2022-09-21 14:28:55'),
(1986, 'admin', 'Approved', '2022-09-21 14:28:57'),
(1987, 'admin', 'Approved', '2022-09-21 14:29:00'),
(1988, 'admin', 'Approved', '2022-09-21 14:31:57'),
(1989, 'admin', 'Approved', '2022-09-21 14:32:00'),
(1990, 'admin', 'Approved', '2022-09-21 14:32:03'),
(1991, 'admin', 'Approved', '2022-09-21 14:32:05'),
(1992, 'admin', 'Approved', '2022-09-21 14:32:08'),
(1993, 'admin', 'Approved', '2022-09-21 14:32:11'),
(1994, 'admin', 'Approved', '2022-09-21 14:32:14'),
(1995, 'admin', 'Approved', '2022-09-21 14:32:20'),
(1996, 'admin', 'Approved', '2022-09-21 14:32:23'),
(1997, 'admin', 'Approved', '2022-09-21 14:36:11'),
(1998, 'admin', 'Approved', '2022-09-21 14:36:14'),
(1999, 'admin', 'Approved', '2022-09-21 14:36:17'),
(2000, 'admin', 'Approved', '2022-09-21 14:36:20'),
(2001, 'admin', 'Approved', '2022-09-21 14:36:23'),
(2002, 'admin', 'Approved', '2022-09-21 14:36:25'),
(2003, 'admin', 'Approved', '2022-09-21 14:36:28'),
(2004, 'admin', 'Approved', '2022-09-21 14:36:34'),
(2005, 'admin', 'Approved', '2022-09-21 14:36:37'),
(2006, 'admin', 'Approved', '2022-09-21 14:36:39'),
(2007, 'admin', 'Approved', '2022-09-21 14:36:41'),
(2008, 'admin', 'Approved', '2022-09-21 14:36:48'),
(2009, 'admin', 'Approved', '2022-09-21 14:36:50'),
(2010, 'admin', 'Approved', '2022-09-21 14:36:56'),
(2011, 'admin', 'Approved', '2022-09-21 14:40:09'),
(2012, 'admin', 'Approved', '2022-09-21 14:40:11'),
(2013, 'admin', 'Approved', '2022-09-21 14:40:14'),
(2014, 'admin', 'Approved', '2022-09-21 14:40:16'),
(2015, 'admin', 'Approved', '2022-09-21 14:40:19'),
(2016, 'admin', 'Approved', '2022-09-21 14:40:21'),
(2017, 'admin', 'Approved', '2022-09-21 14:40:24'),
(2018, 'admin', 'Approved', '2022-09-21 14:40:27'),
(2019, 'admin', 'Approved', '2022-09-21 14:40:29'),
(2020, 'admin', 'Approved', '2022-09-21 14:40:32'),
(2021, 'admin', 'Approved', '2022-09-21 14:40:35'),
(2022, 'admin', 'Approved', '2022-09-21 14:40:38'),
(2023, 'admin', 'Approved', '2022-09-21 14:40:41'),
(2024, 'admin', 'Approved', '2022-09-21 14:40:43'),
(2025, 'admin', 'Approved', '2022-09-21 14:42:41'),
(2026, 'admin', 'Approved', '2022-09-21 14:42:44'),
(2027, 'admin', 'Approved', '2022-09-21 14:42:47'),
(2028, 'admin', 'Approved', '2022-09-21 14:42:50'),
(2029, 'admin', 'Approved', '2022-09-21 14:42:53'),
(2030, 'admin', 'Approved', '2022-09-21 14:42:55'),
(2031, 'admin', 'Voting Enable', '2022-09-21 14:43:32'),
(2032, 'admin', 'Voting Disable', '2022-09-21 15:19:16'),
(2033, 'admin', 'Voting Enable', '2022-09-21 15:26:18'),
(2034, 'admin', 'login', '2022-09-21 16:18:44'),
(2035, 'admin', 'login', '2022-09-21 17:47:09'),
(2036, 'admin', 'login', '2022-09-21 17:52:13'),
(2037, 'admin', 'login', '2022-09-21 17:56:31'),
(2038, 'admin', 'login', '2022-09-21 18:00:38'),
(2039, 'admin', 'login', '2022-09-21 18:09:39'),
(2040, 'admin', 'login', '2022-09-21 18:42:50'),
(2041, 'admin', 'logout', '2022-09-21 18:46:33'),
(2042, 'admin', 'login', '2022-09-21 18:54:22'),
(2043, 'admin', 'Approved', '2022-09-21 18:56:34'),
(2044, 'admin', 'Approved', '2022-09-21 18:56:37'),
(2045, 'admin', 'Approved', '2022-09-21 18:56:42'),
(2046, 'admin', 'Approved', '2022-09-21 18:56:45'),
(2047, 'admin', 'Approved', '2022-09-21 18:56:48'),
(2048, 'admin', 'Approved', '2022-09-21 18:56:51'),
(2049, 'admin', 'Approved', '2022-09-21 18:56:54'),
(2050, 'admin', 'Approved', '2022-09-21 18:56:57'),
(2051, 'admin', 'Approved', '2022-09-21 18:57:00'),
(2052, 'admin', 'Approved', '2022-09-21 18:57:03'),
(2053, 'admin', 'Approved', '2022-09-21 18:57:06'),
(2054, 'admin', 'Approved', '2022-09-21 18:57:09'),
(2055, 'admin', 'Approved', '2022-09-21 18:57:12'),
(2056, 'admin', 'Approved', '2022-09-21 18:57:15'),
(2057, 'admin', 'Approved', '2022-09-21 18:57:18'),
(2058, 'admin', 'Approved', '2022-09-21 18:57:21'),
(2059, 'admin', 'Approved', '2022-09-21 18:57:24'),
(2060, 'admin', 'Approved', '2022-09-21 18:57:37'),
(2061, 'admin', 'Approved', '2022-09-21 18:57:40'),
(2062, 'admin', 'Voting Disable', '2022-09-21 18:58:11'),
(2063, 'admin', 'Approved', '2022-09-21 18:58:17'),
(2064, 'admin', 'Approved', '2022-09-21 18:58:20'),
(2065, 'admin', 'Approved', '2022-09-21 18:58:23'),
(2066, 'admin', 'Approved', '2022-09-21 18:58:26'),
(2067, 'admin', 'Approved', '2022-09-21 18:58:29'),
(2068, 'admin', 'Approved', '2022-09-21 18:58:31'),
(2069, 'admin', 'Approved', '2022-09-21 18:58:34'),
(2070, 'admin', 'Approved', '2022-09-21 18:58:37'),
(2071, 'admin', 'Approved', '2022-09-21 18:58:40'),
(2072, 'admin', 'Approved', '2022-09-21 18:58:43'),
(2073, 'admin', 'Approved', '2022-09-21 18:58:45'),
(2074, 'admin', 'Approved', '2022-09-21 18:58:48'),
(2075, 'admin', 'Approved', '2022-09-21 18:58:51'),
(2076, 'admin', 'Approved', '2022-09-21 18:58:55'),
(2077, 'admin', 'Approved', '2022-09-21 18:58:57'),
(2078, 'admin', 'Approved', '2022-09-21 18:59:00'),
(2079, 'admin', 'Approved', '2022-09-21 18:59:03'),
(2080, 'admin', 'Approved', '2022-09-21 18:59:06'),
(2081, 'admin', 'Approved', '2022-09-21 18:59:09'),
(2082, 'admin', 'Approved', '2022-09-21 18:59:11'),
(2083, 'admin', 'Approved', '2022-09-21 18:59:17'),
(2084, 'admin', 'Voting Enable', '2022-09-21 19:02:04'),
(2085, 'admin', 'login', '2022-09-21 19:06:56'),
(2086, 'admin', 'logout', '2022-09-21 19:10:15'),
(2087, 'admin', 'login', '2022-09-22 07:58:50'),
(2088, 'admin', 'Voting Disable', '2022-09-22 08:08:25'),
(2089, 'admin', 'login', '2022-09-22 08:10:45'),
(2090, 'admin', 'logout', '2022-09-22 08:12:24'),
(2091, 'admin', 'login', '2022-09-22 08:15:01'),
(2092, 'admin', 'logout', '2022-09-22 08:21:05'),
(2093, 'admin', 'login', '2022-09-22 08:22:27'),
(2094, 'admin', 'Approved', '2022-09-22 08:22:35'),
(2095, 'admin', 'Voting Enable', '2022-09-22 08:29:22'),
(2096, 'admin', 'logout', '2022-09-22 08:33:03'),
(2097, 'admin', 'login', '2022-09-22 08:33:10'),
(2098, 'admin', 'logout', '2022-09-22 09:09:04'),
(2099, 'admin', 'login', '2022-09-22 09:17:54'),
(2100, 'ADMIN', 'login', '2022-09-22 09:41:42'),
(2101, 'admin', 'login', '2022-09-22 09:41:51'),
(2102, '', 'New voters added', '2022-09-22 09:43:09'),
(2103, 'Admin', 'login', '2022-09-22 10:25:20'),
(2104, 'admin', 'logout', '2022-09-22 10:52:11'),
(2105, 'admin', 'login', '2023-02-20 12:46:04'),
(2106, 'admin', 'logout', '2023-02-20 12:46:46'),
(2107, 'admin', 'login', '2023-02-20 12:55:59'),
(2108, 'admin', 'login', '2023-02-20 13:30:29'),
(2109, 'admin', 'logout', '2023-02-20 13:46:03'),
(2110, 'admin', 'login', '2023-02-20 13:46:06'),
(2111, 'admin', 'Voting Disable', '2023-02-20 14:13:16'),
(2112, 'admin', 'logout', '2023-02-20 14:22:24'),
(2113, 'admin', 'login', '2023-02-20 14:37:59'),
(2114, 'admin', 'logout', '2023-02-20 14:38:03'),
(2115, 'admin', 'login', '2023-02-20 14:41:50'),
(2116, 'admin', 'logout', '2023-02-20 14:41:53'),
(2117, 'admin', 'login', '2023-02-20 15:00:58'),
(2118, 'admin', 'logout', '2023-02-20 15:05:17'),
(2119, 'admin', 'login', '2023-02-20 15:23:08'),
(2120, 'admin', 'logout', '2023-02-20 15:28:53'),
(2121, 'admin', 'login', '2023-02-20 15:29:11'),
(2122, 'admin', 'Voting Enable', '2023-02-20 15:29:14'),
(2123, 'admin', 'logout', '2023-02-20 15:29:16'),
(2124, 'admin', 'login', '2023-02-20 16:50:19'),
(2125, 'admin', 'logout', '2023-02-20 16:50:50'),
(2126, 'admin', 'login', '2023-02-20 16:51:03'),
(2127, 'admin', 'logout', '2023-02-20 16:51:24'),
(2128, 'admin', 'login', '2023-02-21 08:54:20'),
(2129, 'admin', 'logout', '2023-02-21 08:54:27'),
(2130, 'admin', 'login', '2023-02-21 11:18:06'),
(2131, 'admin', 'logout', '2023-02-21 11:18:35'),
(2132, 'admin', 'login', '2023-02-21 11:20:47'),
(2133, 'admin', 'logout', '2023-02-21 13:16:22'),
(2134, 'admin', 'login', '2023-02-21 14:01:22'),
(2135, 'admin', 'logout', '2023-02-21 14:02:41'),
(2136, 'admin', 'login', '2023-02-21 15:42:52'),
(2137, 'admin', 'logout', '2023-02-21 15:52:18'),
(2138, 'admin', 'login', '2023-02-22 08:51:07'),
(2139, 'admin', 'logout', '2023-02-22 08:52:09'),
(2140, 'admin', 'login', '2023-02-22 11:49:00'),
(2141, '', 'New partylist added', '2023-02-22 11:49:51'),
(2142, 'admin', 'logout', '2023-02-22 11:50:20'),
(2143, 'admin', 'login', '2023-02-22 11:51:14'),
(2144, 'admin', 'Approved', '2023-02-22 11:51:20'),
(2145, 'admin', 'logout', '2023-02-22 11:51:26'),
(2146, 'admin', 'login', '2023-02-22 11:53:13'),
(2147, 'admin', 'Deleted partylist', '2023-02-22 11:53:18'),
(2148, 'admin', 'logout', '2023-02-22 11:53:23'),
(2149, 'admin', 'login', '2023-02-22 14:55:25'),
(2150, 'admin', 'logout', '2023-02-22 14:55:46'),
(2151, 'admin', 'login', '2023-02-22 16:20:36'),
(2152, 'admin', 'logout', '2023-02-22 16:25:08'),
(2153, 'admin', 'login', '2023-02-23 08:46:24'),
(2154, 'admin', 'logout', '2023-02-23 08:47:00'),
(2155, 'admin', 'login', '2023-02-23 11:05:19'),
(2156, 'admin', 'logout', '2023-02-23 11:41:38'),
(2157, 'admin', 'login', '2023-02-23 11:41:42'),
(2158, 'admin', 'logout', '2023-02-23 11:51:13'),
(2159, 'admin', 'login', '2023-02-26 17:13:21'),
(2160, 'admin', 'login', '2023-02-26 17:14:58'),
(2161, 'admin', 'logout', '2023-02-26 17:18:43'),
(2162, 'admin', 'login', '2023-02-26 17:58:50'),
(2163, 'admin', 'login', '2023-02-26 18:03:40'),
(2164, 'admin', 'logout', '2023-02-26 19:52:23'),
(2165, 'admin', 'login', '2023-02-26 22:05:11'),
(2166, 'admin', 'logout', '2023-02-26 22:08:48'),
(2167, 'admin', 'login', '2023-02-26 22:09:11'),
(2168, 'admin', 'logout', '2023-02-26 22:13:57'),
(2169, 'admin', 'login', '2023-02-26 22:14:02'),
(2170, 'admin', 'logout', '2023-02-26 22:21:24'),
(2171, 'admin', 'login', '2023-02-27 00:12:04'),
(2172, 'admin', 'logout', '2023-02-27 00:15:47'),
(2173, 'admin', 'login', '2023-02-27 16:35:49'),
(2174, 'admin', 'logout', '2023-02-27 16:36:10'),
(2175, 'admin', 'login', '2023-02-27 16:41:22'),
(2176, 'admin', 'logout', '2023-02-27 17:16:14'),
(2177, 'admin', 'login', '2023-02-27 17:23:05'),
(2178, 'admin', 'login', '2023-02-27 18:40:22'),
(2179, 'admin', 'login', '2023-02-27 18:43:13'),
(2180, 'admin', 'login', '2023-02-27 18:48:44'),
(2181, 'admin', 'login', '2023-02-27 18:49:46'),
(2182, 'admin', 'login', '2023-02-27 19:04:05'),
(2183, 'admin', 'login', '2023-02-27 19:06:36'),
(2184, 'admin', 'logout', '2023-02-27 19:34:58'),
(2185, 'admin', 'login', '2023-02-27 19:35:38'),
(2186, 'admin', 'login', '2023-02-27 19:49:23'),
(2187, 'admin', 'login', '2023-02-27 19:51:17'),
(2188, 'admin', 'login', '2023-02-27 19:54:02'),
(2189, 'admin', 'login', '2023-02-27 21:03:21'),
(2190, 'admin', 'login', '2023-02-27 21:07:24'),
(2191, 'admin', 'login', '2023-02-27 21:34:26'),
(2192, 'admin', 'login', '2023-02-27 22:00:25'),
(2193, 'admin', 'login', '2023-02-27 22:07:42'),
(2194, 'admin', 'logout', '2023-02-28 00:12:44'),
(2195, 'admin', 'login', '2023-02-28 00:14:24'),
(2196, 'admin', 'login', '2023-02-28 17:02:34'),
(2197, 'admin', 'logout', '2023-02-28 17:06:30'),
(2198, 'admin', 'login', '2023-02-28 17:06:36'),
(2199, 'admin', 'login', '2023-02-28 17:08:24'),
(2200, 'admin', 'login', '2023-02-28 17:52:18'),
(2201, 'admin', 'login', '2023-02-28 18:04:25'),
(2202, 'admin', 'logout', '2023-02-28 18:43:46'),
(2203, 'admin', 'login', '2023-02-28 18:45:18'),
(2204, 'admin', 'logout', '2023-02-28 18:55:47'),
(2205, 'admin', 'login', '2023-02-28 19:21:24'),
(2206, 'admin', 'logout', '2023-02-28 19:31:10'),
(2207, 'admin', 'login', '2023-02-28 19:31:18'),
(2208, 'admin', 'logout', '2023-02-28 19:33:23'),
(2209, 'admin', 'login', '2023-02-28 19:33:27'),
(2210, 'admin', 'login', '2023-02-28 19:42:53'),
(2211, 'admin', 'logout', '2023-02-28 19:45:49'),
(2212, 'admin', 'login', '2023-02-28 19:45:53'),
(2213, 'admin', 'login', '2023-02-28 21:11:42'),
(2214, 'admin', 'Candidate file exported', '2023-02-28 21:47:40'),
(2215, 'admin', 'logout', '2023-02-28 21:49:12'),
(2216, 'admin', 'login', '2023-02-28 21:49:48'),
(2217, 'admin', 'login', '2023-02-28 22:06:10'),
(2218, 'admin', 'logout', '2023-02-28 22:09:27'),
(2219, 'admin', 'login', '2023-02-28 22:09:41'),
(2220, 'admin', 'login', '2023-02-28 22:10:37'),
(2221, 'admin', 'logout', '2023-02-28 22:10:53'),
(2222, 'admin', 'login', '2023-02-28 22:11:00'),
(2223, 'admin', 'logout', '2023-02-28 22:17:21'),
(2224, 'admin', 'login', '2023-02-28 22:17:29'),
(2225, 'admin', 'login', '2023-02-28 22:19:59'),
(2226, 'admin', 'login', '2023-02-28 22:22:11'),
(2227, 'admin', 'login', '2023-02-28 22:34:43'),
(2228, 'admin', 'login', '2023-02-28 22:45:22'),
(2229, 'admin', 'login', '2023-02-28 22:48:17'),
(2230, 'admin', 'logout', '2023-02-28 22:52:35'),
(2231, 'admin', 'login', '2023-02-28 22:52:38'),
(2232, 'admin', 'logout', '2023-02-28 22:59:07'),
(2233, 'admin', 'login', '2023-02-28 22:59:22'),
(2234, 'admin', 'logout', '2023-02-28 23:08:54'),
(2235, 'admin', 'login', '2023-02-28 23:09:08'),
(2236, 'admin', 'logout', '2023-02-28 23:14:03'),
(2237, 'admin', 'login', '2023-02-28 23:14:17'),
(2238, 'admin', 'logout', '2023-02-28 23:20:17'),
(2239, 'admin', 'login', '2023-02-28 23:21:16'),
(2240, 'admin', 'logout', '2023-02-28 23:28:13'),
(2241, 'admin', 'login', '2023-02-28 23:28:16'),
(2242, 'admin', 'logout', '2023-02-28 23:30:29'),
(2243, 'admin', 'login', '2023-02-28 23:30:33'),
(2244, 'admin', 'logout', '2023-02-28 23:34:21'),
(2245, 'admin', 'login', '2023-02-28 23:34:44'),
(2246, 'admin', 'logout', '2023-02-28 23:48:26'),
(2247, 'admin', 'login', '2023-02-28 23:48:30'),
(2248, 'admin', 'logout', '2023-02-28 23:53:24'),
(2249, 'admin', 'login', '2023-02-28 23:54:13'),
(2250, 'admin', 'logout', '2023-03-01 00:07:45'),
(2251, 'admin', 'login', '2023-03-01 00:08:13'),
(2252, 'admin', 'login', '2023-03-01 00:16:44'),
(2253, 'admin', 'logout', '2023-03-01 00:42:49'),
(2254, 'admin', 'login', '2023-03-01 00:43:45'),
(2255, 'admin', 'logout', '2023-03-01 00:55:08'),
(2256, 'admin', 'login', '2023-03-01 00:55:13'),
(2257, 'admin', 'login', '2023-03-01 02:22:21'),
(2258, 'admin', 'logout', '2023-03-01 02:27:51'),
(2259, 'admin', 'login', '2023-03-01 02:27:57'),
(2260, 'admin', 'login', '2023-03-01 02:28:43'),
(2261, 'admin', 'logout', '2023-03-01 02:32:11'),
(2262, 'admin', 'login', '2023-03-01 02:32:16'),
(2263, 'admin', 'logout', '2023-03-01 02:45:25'),
(2264, 'admin', 'login', '2023-03-01 02:45:30'),
(2265, 'admin', 'logout', '2023-03-01 02:45:37'),
(2266, 'admin', 'login', '2023-03-01 02:46:15'),
(2267, 'admin', 'logout', '2023-03-01 02:48:06'),
(2268, 'admin', 'login', '2023-03-01 02:48:10'),
(2269, 'admin', 'logout', '2023-03-01 02:48:33'),
(2270, 'admin', 'login', '2023-03-01 02:49:11'),
(2271, 'admin', 'logout', '2023-03-01 02:49:47'),
(2272, 'admin', 'login', '2023-03-01 02:49:51'),
(2273, 'admin', 'login', '2023-03-01 02:50:36'),
(2274, 'admin', 'logout', '2023-03-01 02:50:59'),
(2275, 'admin', 'login', '2023-03-01 02:51:13'),
(2276, 'admin', 'logout', '2023-03-01 02:55:36'),
(2277, 'admin', 'login', '2023-03-01 02:55:50'),
(2278, 'admin', 'login', '2023-03-01 02:59:30'),
(2279, 'admin', 'login', '2023-03-01 03:08:54'),
(2280, 'admin', 'login', '2023-03-01 16:45:23'),
(2281, 'admin', 'logout', '2023-03-01 17:03:48'),
(2282, 'admin', 'login', '2023-03-01 17:04:13'),
(2283, 'admin', 'login', '2023-03-01 17:12:22'),
(2284, 'admin', 'logout', '2023-03-01 17:46:21'),
(2285, 'admin', 'login', '2023-03-01 17:46:25'),
(2286, 'admin', 'logout', '2023-03-01 17:55:28'),
(2287, 'admin', 'login', '2023-03-01 20:28:29'),
(2288, 'admin', 'logout', '2023-03-01 20:30:06'),
(2289, 'admin', 'login', '2023-03-01 20:54:03'),
(2290, 'admin', 'logout', '2023-03-01 20:57:49'),
(2291, 'admin', 'login', '2023-03-01 21:44:28'),
(2292, 'admin', 'logout', '2023-03-01 23:02:22'),
(2293, 'admin', 'login', '2023-03-01 23:02:26'),
(2294, 'admin', 'logout', '2023-03-01 23:06:48'),
(2295, 'admin', 'login', '2023-03-01 23:17:39'),
(2296, 'admin', 'logout', '2023-03-01 23:38:25'),
(2297, 'admin', 'login', '2023-03-02 00:18:35'),
(2298, 'admin', 'login', '2023-03-02 00:29:37'),
(2299, 'admin', 'logout', '2023-03-02 00:29:49'),
(2300, 'admin', 'login', '2023-03-02 00:29:54'),
(2301, 'admin', 'logout', '2023-03-02 00:30:18'),
(2302, 'admin', 'login', '2023-03-02 17:16:16'),
(2303, 'admin', 'logout', '2023-03-02 17:16:27'),
(2304, 'admin', 'login', '2023-03-02 17:22:14'),
(2305, 'admin', 'login', '2023-03-02 17:27:08'),
(2306, 'admin', 'login', '2023-03-02 20:00:00'),
(2307, 'admin', 'login', '2023-03-06 17:06:03'),
(2308, 'admin', 'logout', '2023-03-06 17:06:08'),
(2309, 'admin', 'login', '2023-03-06 17:06:14'),
(2310, 'admin', 'login', '2023-03-06 17:09:47'),
(2311, 'admin', 'login', '2023-03-07 16:46:43'),
(2312, 'admin', 'login', '2023-03-07 17:56:56'),
(2313, 'admin', 'logout', '2023-03-07 22:48:39'),
(2314, 'admin', 'login', '2023-03-07 22:49:28'),
(2315, 'admin', 'login', '2023-03-08 16:47:25'),
(2316, 'admin', 'logout', '2023-03-08 17:13:51'),
(2317, 'admin', 'login', '2023-03-08 17:14:39'),
(2318, 'admin', 'logout', '2023-03-08 17:29:59'),
(2319, 'admin', 'login', '2023-03-08 18:55:01'),
(2320, 'admin', 'logout', '2023-03-08 18:59:10'),
(2321, 'admin', 'login', '2023-03-08 23:12:17'),
(2322, 'admin', 'logout', '2023-03-08 23:16:30'),
(2323, 'admin', 'login', '2023-03-08 23:41:14'),
(2324, 'admin', 'logout', '2023-03-08 23:45:17'),
(2325, 'admin', 'login', '2023-03-09 16:42:08'),
(2326, 'admin', 'logout', '2023-03-09 16:42:27'),
(2327, 'admin', 'login', '2023-03-09 16:55:45'),
(2328, 'admin', 'logout', '2023-03-09 17:02:52'),
(2329, 'admin', 'login', '2023-03-09 22:17:17'),
(2330, 'admin', 'login', '2023-04-15 19:05:55'),
(2331, 'admin', 'login', '2023-04-17 08:49:29'),
(2332, 'admin', 'login', '2023-04-17 08:57:24'),
(2333, 'admin', 'logout', '2023-04-17 08:59:07'),
(2334, 'admin', 'login', '2023-04-17 09:06:24'),
(2335, 'admin', 'logout', '2023-04-17 09:31:22'),
(2336, 'admin', 'login', '2023-04-17 09:36:48'),
(2337, 'admin', 'login', '2023-04-17 11:33:37'),
(2338, 'admin', 'Approved', '2023-04-17 12:50:20'),
(2339, 'admin', 'Approved', '2023-04-17 12:54:54'),
(2340, 'admin', 'Approved', '2023-04-17 12:55:51'),
(2341, 'admin', 'Approved', '2023-04-17 13:08:02'),
(2342, 'admin', 'Approved', '2023-04-17 13:18:53'),
(2343, 'admin', 'Rejected candidate', '2023-04-17 13:18:57'),
(2344, 'admin', 'Approved', '2023-04-17 13:19:53'),
(2345, 'admin', 'Approved', '2023-04-17 13:21:16'),
(2346, 'admin', 'Approved', '2023-04-17 13:24:05'),
(2347, 'admin', 'Approved', '2023-04-17 13:24:07'),
(2348, 'admin', 'Approved', '2023-04-17 13:26:44'),
(2349, 'admin', 'Approved', '2023-04-17 13:28:37'),
(2350, 'admin', 'Approved', '2023-04-17 13:28:38'),
(2351, 'admin', 'Approved', '2023-04-17 13:29:50'),
(2352, 'admin', 'Approved', '2023-04-17 13:32:07'),
(2353, 'admin', 'Approved', '2023-04-17 13:32:09'),
(2354, 'admin', 'Approved', '2023-04-17 13:54:56'),
(2355, 'admin', 'Approved', '2023-04-17 13:54:59'),
(2356, 'admin', 'Approved', '2023-04-17 13:55:01'),
(2357, 'admin', 'Approved', '2023-04-16 23:09:47'),
(2358, 'admin', 'Approved', '2023-04-16 23:09:49'),
(2359, 'admin', 'Approved', '2023-04-16 23:09:51'),
(2360, 'admin', 'Approved', '2023-04-16 23:09:53'),
(2361, 'admin', 'Approved', '2023-04-16 23:13:00'),
(2362, 'admin', 'Approved', '2023-04-16 23:13:02'),
(2363, 'admin', 'Approved', '2023-04-16 23:13:04'),
(2364, 'admin', 'Approved', '2023-04-16 23:13:06'),
(2365, 'admin', 'login', '2023-04-17 00:44:53'),
(2366, 'admin', 'login', '2023-04-17 01:32:19'),
(2367, 'admin', 'login', '2023-04-19 13:31:13'),
(2368, 'admin', 'login', '2023-04-20 09:08:40'),
(2369, 'admin', 'login', '2023-04-20 11:44:16'),
(2370, 'admin', 'login', '2023-04-20 14:49:53'),
(2371, 'admin', 'login', '2023-04-24 10:01:35'),
(2372, 'admin', 'logout', '2023-04-24 10:23:29'),
(2373, 'admin', 'login', '2023-04-24 10:37:43'),
(2374, 'admin', 'Voters deleted', '2023-04-24 10:54:24'),
(2375, 'admin', 'logout', '2023-04-24 11:26:43'),
(2376, 'admin', 'login', '2023-04-24 11:27:01'),
(2377, 'admin', 'logout', '2023-04-24 13:07:28'),
(2378, 'admin', 'login', '2023-04-24 13:07:39'),
(2379, 'admin', 'login', '2023-04-25 08:59:05'),
(2380, 'admin', 'logout', '2023-04-25 09:17:52'),
(2381, 'admin', 'login', '2023-04-25 09:18:25'),
(2382, 'admin', 'logout', '2023-04-25 09:35:03'),
(2383, 'admin', 'login', '2023-04-25 09:35:07'),
(2384, 'admin', 'Voters deleted', '2023-04-25 10:06:25'),
(2385, 'admin', 'Voters deleted', '2023-04-25 10:06:31'),
(2386, 'admin', 'File Import', '2023-04-25 10:10:25'),
(2387, 'admin', 'File Import', '2023-04-25 10:14:34'),
(2388, 'admin', 'File Import', '2023-04-25 10:27:27'),
(2389, '', 'Voters deleted', '2023-04-25 10:29:13'),
(2390, 'admin', 'login', '2023-04-25 10:29:19'),
(2391, 'admin', 'File Import', '2023-04-25 10:35:44'),
(2392, 'admin', 'logout', '2023-04-25 10:56:45'),
(2393, 'admin', 'login', '2023-04-25 10:56:48'),
(2394, 'admin', 'logout', '2023-04-25 11:32:33'),
(2395, 'admin', 'login', '2023-04-25 11:32:36'),
(2396, 'admin', 'File Import', '2023-04-25 11:43:23'),
(2397, 'admin', 'Voters deleted', '2023-04-25 11:43:32'),
(2398, 'admin', 'File Import', '2023-04-25 12:47:19'),
(2399, 'admin', 'Voters deleted', '2023-04-25 12:57:41'),
(2400, 'admin', 'File Import', '2023-04-25 13:14:05'),
(2401, 'admin', 'File Import', '2023-04-25 13:18:50'),
(2402, 'admin', 'File Import', '2023-04-25 13:40:24'),
(2403, 'admin', 'File Import', '2023-04-25 13:48:29'),
(2404, 'admin', 'File Import', '2023-04-25 13:54:00'),
(2405, 'admin', 'File Import', '2023-04-25 13:55:27'),
(2406, 'admin', 'File Import', '2023-04-25 14:05:14'),
(2407, 'admin', 'File Import', '2023-04-25 14:53:41'),
(2408, 'admin', 'File Import', '2023-04-25 15:08:11'),
(2409, 'admin', 'File Import', '2023-04-25 15:09:43'),
(2410, 'admin', 'File Import', '2023-04-25 15:16:18'),
(2411, 'admin', 'login', '2023-04-25 15:18:16'),
(2412, 'admin', 'File Import', '2023-04-25 15:20:46'),
(2413, 'admin', 'File Import', '2023-04-25 15:27:45'),
(2414, 'admin', 'File Import', '2023-04-25 15:32:39'),
(2415, 'admin', 'login', '2023-04-25 15:34:33'),
(2416, 'admin', 'File Import', '2023-04-25 15:35:26'),
(2417, 'admin', 'File Import', '2023-04-25 15:43:54'),
(2418, 'admin', 'login', '2023-04-25 15:49:32'),
(2419, 'admin', 'File Import', '2023-04-25 15:49:51'),
(2420, 'admin', 'File Import', '2023-04-25 15:55:56'),
(2421, 'admin', 'login', '2023-04-25 15:58:18'),
(2422, 'admin', 'File Import', '2023-04-25 15:58:43'),
(2423, 'admin', 'Voters deleted', '2023-04-25 15:58:52'),
(2424, 'admin', 'File Import', '2023-04-25 16:06:27'),
(2425, 'admin', 'Voters deleted', '2023-04-25 16:09:39'),
(2426, 'admin', 'login', '2023-04-25 16:12:01'),
(2427, 'admin', 'logout', '2023-04-25 16:13:22'),
(2428, 'admin', 'login', '2023-04-26 09:32:58'),
(2429, 'admin', 'Voting Enable', '2023-04-26 09:34:51'),
(2430, 'admin', 'logout', '2023-04-26 09:34:56'),
(2431, 'admin', 'login', '2023-04-26 09:37:24'),
(2432, 'admin', 'Restored Candidate', '2023-04-26 10:28:26'),
(2433, 'admin', 'Rejected candidate', '2023-04-26 10:28:55'),
(2434, 'admin', 'Restored Candidate', '2023-04-26 10:46:24'),
(2435, 'admin', 'Rejected candidate', '2023-04-26 10:46:32'),
(2436, 'admin', 'Candidate file exported', '2023-04-26 10:50:06'),
(2437, 'admin', 'Restored Candidate', '2023-04-26 11:04:07'),
(2438, 'admin', 'Rejected candidate', '2023-04-26 11:04:22'),
(2439, 'admin', 'logout', '2023-04-26 11:09:46'),
(2440, 'admin', 'login', '2023-04-26 11:09:50'),
(2441, 'admin', 'logout', '2023-04-26 11:11:37'),
(2442, 'admin', 'login', '2023-04-26 11:14:57'),
(2443, 'admin', 'logout', '2023-04-26 13:09:20'),
(2444, 'admin', 'login', '2023-04-27 15:42:17'),
(2445, 'admin', 'logout', '2023-04-27 15:46:57'),
(2446, 'admin', 'login', '2023-04-27 15:49:52'),
(2447, 'admin', 'logout', '2023-04-27 15:55:49'),
(2448, 'admin', 'login', '2023-04-28 11:47:16'),
(2449, 'admin', 'login', '2023-05-03 09:26:32'),
(2450, 'admin', 'Restored Candidate', '2023-05-03 09:27:03'),
(2451, 'admin', 'Rejected candidate', '2023-05-03 09:27:17'),
(2452, 'admin', 'login', '2023-05-03 11:12:00'),
(2453, 'admin', 'login', '2023-05-03 13:55:03'),
(2454, 'admin', 'login', '2023-05-03 16:45:57'),
(2455, 'admin', 'login', '2023-05-04 11:21:01'),
(2456, 'admin', 'login', '2023-05-05 10:33:23'),
(2457, 'admin', 'login', '2023-05-05 10:35:20'),
(2458, 'admin', 'login', '2023-05-05 10:41:16'),
(2459, 'admin', 'File Import', '2023-05-05 14:22:09'),
(2460, 'admin', 'File Import', '2023-05-05 14:35:38'),
(2461, 'admin', 'File Import', '2023-05-05 14:35:58'),
(2462, 'admin', 'File Import', '2023-05-05 15:35:02'),
(2463, 'admin', 'File Import', '2023-05-05 15:42:00'),
(2464, 'admin', 'File Import', '2023-05-05 15:42:57'),
(2465, 'admin', 'File Import', '2023-05-05 15:43:43'),
(2466, 'admin', 'File Import', '2023-05-05 15:44:25'),
(2467, 'admin', 'File Import', '2023-05-05 15:47:43'),
(2468, 'admin', 'File Import', '2023-05-05 15:48:56'),
(2469, 'admin', 'File Import', '2023-05-05 15:49:47'),
(2470, 'admin', 'login', '2023-05-07 21:45:35'),
(2471, 'admin', 'Voting Enable', '2023-05-07 21:47:03'),
(2472, 'admin', 'login', '2023-05-07 21:49:18'),
(2473, 'admin', 'Voting Disable', '2023-05-07 21:50:43'),
(2474, 'admin', 'login', '2023-05-08 09:27:56'),
(2475, 'admin', 'login', '2023-05-08 09:32:59'),
(2476, 'admin', 'logout', '2023-05-08 09:33:03'),
(2477, 'ADMIN', 'login', '2023-05-08 09:33:07'),
(2478, 'admin', 'Voting Enable', '2023-05-08 09:33:13'),
(2479, 'admin', 'login', '2023-05-08 09:36:42'),
(2480, 'admin', 'login', '2023-05-08 09:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`user_id`, `username`, `password`, `firstname`, `lastname`, `email`) VALUES
(23, 'admin', 'admin', 'Reymart', 'Racoma', 'Mr.MENISKI@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidate`
--

CREATE TABLE `tbl_candidate` (
  `candidate_id` int(11) NOT NULL,
  `platform` varchar(400) NOT NULL,
  `image_grade` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `partylist_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_candidate`
--

INSERT INTO `tbl_candidate` (`candidate_id`, `platform`, `image_grade`, `img`, `position`, `partylist_id`, `firstname`, `lastname`, `email`, `department`, `year_level`, `gender`, `status`) VALUES
(83, '1. Online Symposium\r\n2. Skill Capacity\r\n3. Cleanliness\r\n4. Announcements', '', 'uploads/lozaon.png', 'Liaison 3rd year', 1020, 'Chriciel', 'Lozano', 'chrisylozano12@gmail.com', 'BSIT', '3rd Year', 'Female', 'approved'),
(84, 'Platform 1 - Online Symposium\r\nPlatform 2 - Skill Capacity\r\nPlatform 3 - Cleanliness\r\nPlatform 4 - Announcement ', '', '../admin/uploads/received_524856949359416.webp', 'Peace Officer', 1020, 'Faith Paul', 'Bonghanoy', 'faithpaulbonghanoy@gmail.com', 'BSIT', '4th Year', 'Male', 'approved'),
(85, '1. Group Study\r\n2. Programming Tournament\r\n3.Online Games Tournament\r\n4. To Remain Cleanliness', '', '../admin/uploads/Jhennymae.jpg', 'Liaison 3rd year', 1018, 'Jhennymae', 'Canonigo', 'jhennycanonigo19@gmail.com', 'BSIT', '3rd Year', '', 'approved'),
(86, 'Platform 1 - Online Symposium\r\nPlatform 2 - Skill Capacity\r\nPlatform 3 - Cleanliness\r\nPlatform 4 - Announcement', '', '../admin/uploads/302049949_501931261277413_7570231202733385024_n.png', 'Activity Coordinator', 1020, 'Bernard', 'Alferez', 'alferezbernard3@gmail.com', 'BSIT', '4th Year', 'Male', 'approved'),
(87, 'Learning and Friendship Services.', '', '../admin/uploads/received_1125487941417251.jpeg', 'Activity Coordinator', 1019, 'Mary Rose', 'Cabusas', 'maryrosecabusas11@gmail.com', 'BSIT', '3rd Year', 'Female', 'approved'),
(88, '1.GROUP STUDY\r\n2. PROGRAMMING TOURNAMENT\r\n3. ONLINE GAMES TOURNAMENT\r\n4. TO REMAIN CLEANLINESS', '', 'uploads/307422920_461454209334147_8278968121820591030_n.jpg', 'Auditor', 1018, 'Marc Gerard ', 'Repuesto', 'wipplesnit13@gmail.com', 'BSIT', '1st Year', 'Male', 'approved'),
(89, 'Learning and Friendship Services', '', '../admin/uploads/received_1151057889162359.jpeg', 'Liaison 3rd year', 1019, 'Myrnalen ', 'Deiparine ', 'deiparine1234@gmail.com', 'BSIT', '3rd Year', 'Female', 'approved'),
(90, 'Learning and Friendship Services and I promise to work the main objective of this position, To analyze and prepare financial reports of each events will happen in this school.', '', '../admin/uploads/307089970_1348199949048444_6606148262702666847_n.jpg', 'Auditor', 1019, 'Shenny ', 'Plameran ', 'shenplameran1@gmail.com', 'BSIT', '2nd Year', 'Female', 'approved'),
(91, 'Learning and Friendship Services', '', '../admin/uploads/307336227_1735073216868016_8065435245112767295_n.jpg', 'Peace Officer', 1019, 'Ernest James', 'Quines', 'quinesernestjames@gmail.com', 'BSIT', '2nd Year', 'Male', 'approved'),
(92, '1.GROUP STUDY\r\n2.PROGRAMMING TOURNAMENT\r\n3.ONLINE GAMES TOURNAMENT\r\n4.TO REMAIN CLEANLINESS', '', '../admin/uploads/fk.jpg', 'Activity Coordinator', 1018, 'Fritz Kalil', 'Saramosing', 'fritzsaramosing@gmail.com', 'BSIT', '1st Year', 'Male', 'approved'),
(93, '1. GROUP STUDY\r\n2. PROGRAMMING TOURNAMENT\r\n3. ONLINE GAMES TOURNAMENT\r\n4. TO REMAIN CLEANLINESS', '', '../admin/uploads/1ST.jpg', 'Liaison 1st year', 1018, 'Rochiel', 'Toradio', 'toradiorochiel@gmail.com', 'BSIT', '1st Year', 'Female', 'approved'),
(94, '1. GROUP STUDY\r\n2. PROGRAMMING TOURNAMENT\r\n3. ONLINE/OFFLINE GAMES TOURNAMENT \r\n4. TO REMAIN CLEANLINESS ', '', '../admin/uploads/received_1905094079693054.jpeg', 'Liaison 4th year', 1018, 'Rodney', 'Tradio', 'rodneytradio@gmail.com', 'BSIT', '4th Year', 'Male', 'approved'),
(95, '1. Group study\r\n2.Programming tournament \r\n3. Online games tournament\r\n4. To maintain cleanliness ', '', '../admin/uploads/eee.jpg', 'President', 1018, 'Carl Jake', 'Tumampo', 'jaketumampo@gmail.com', 'BSIT', '2nd Year', 'Male', 'approved'),
(96, 'Platform 1 - Online Symposium\r\nPlatform 2 - Skill Capacity\r\nPlatform 3 - Cleanliness\r\nPlatform 4 - Announcement', '', '../admin/uploads/received_1256863581782286.webp', 'Mass Media Officer', 1020, 'Christian James', 'Abendan', 'chrisbend2004@gmail.com', 'BSIT', '1st Year', 'Male', 'approved'),
(97, 'Learning and Frienship Services', '', '../admin/uploads/received_449590833808047.jpeg', 'Secretary', 1019, 'Maria Ana', 'Lapiz', 'lapizmariaana6@gmail.com', 'BSIT', '2nd Year', 'Female', 'approved'),
(98, 'Learning and Friendship Services', '', '../admin/uploads/PicsArt_09-21-08.24.04.jpg', 'Vice President', 1019, 'Arnel', 'Wamilda', 'pandaarnelwamild@gmail.com', 'BSIT', '2nd Year', 'Male', 'approved'),
(99, 'Platform 1 - Online Symposium\r\nPlatform 2 - Skill Capacity\r\nPlatform 3 - Cleanliness\r\nPlatform 4 - Announcement', '', '../admin/uploads/received_1139901030288518.webp', 'Liaison 4th year', 1020, 'Lira Mae', 'Paradero ', 'paraderolira17@gmail.com', 'BSIT', '4th Year', 'Female', 'approved'),
(100, '1. GROUP STUDY\r\n2. PROGRAMMING TOURNAMENT\r\n3 ONLINE GAMES TOURNAMENT\r\n4. TO REMAIN CLEANLINESS', '', 'uploads/307361798_1133944117213675_289535146245946499_n.jpg', 'Activity Coordinator', 1018, 'Jun Carlo', 'Azarcon', 'azarconjuncarlo@gmail.com', 'BSIT', '1st Year', 'Male', 'approved'),
(101, '1. GROUP STUDY                                                             2. PROGRAMMING TOURNAMENT                                3.ONLINE GAMES TOURNAMENT \r\n4.TO REMAIN CLEANLINESS ', '', '../admin/uploads/dasig.jpg', 'Liaison 2nd year', 1018, 'Mary Claire ', 'Paran', 'maryclaire0932@gmail.com', 'BSIT', '2nd Year', 'Female', 'approved'),
(102, 'Learning and friendship services', '', '../admin/uploads/IMG_20220921_184056.jpg', 'Activity Coordinator', 1019, 'Welin', 'Bacacao ', 'welinbacacao@gmail.com', 'BSIT', '2nd Year', 'Female', 'approved'),
(103, 'Platform 1 - Online Symposium\r\nPlatform 2 - Skill Capacity\r\nPlatform 3 - Cleanliness\r\nPlatform 4 - Announcement', '', '../admin/uploads/received_387261150288980.webp', 'Secretary', 1020, 'Mike Justine', 'Lipon', 'mikelipon.18@gmail.com', 'BSIT', '1st Year', 'Male', 'approved'),
(104, 'Learning And Friendship Services', '', '../admin/uploads/IMG_20220921_184103.jpg', 'Liaison 2nd year', 1019, 'Charlene ', 'Lastimoso ', 'lastimosocharlene03@gmail.com', 'BSIT', '2nd Year', 'Female', 'approved'),
(105, 'Learning and Friendship Services', '', '../admin/uploads/EF3FA024-BC28-4A5A-90F5-7A11837336C5.jpeg', 'Liaison 1st year', 1019, 'Jeralyn', 'Peritos', 'Jeralynperitos@gmail.com', 'BSIT', '1st Year', 'Female', 'approved'),
(106, '1.Group study\r\n2.Program tournament\r\n3.Online game tournament\r\n4.Maintain cleanliness', '', '../admin/uploads/james pic.jpg', 'Peace Officer', 1018, 'James', 'Arpilang', 'jamesarpilang04@gmail.com', 'BSIT', '1st Year', 'Male', 'approved'),
(107, 'Platform 1 - Online Symposium\r\nPlatform 2 - Skill Capacity\r\nPlatform 3 - Cleanliness\r\nPlatform 4 - Announcement ', '', '../admin/uploads/Screenshot_2022-09-21-18-41-53-21.jpg', 'Vice President', 1020, 'Anthony Josh B.', 'Derecho', 'anthonyjosh1400@gmail.com', 'BSIT', '1st Year', 'Male', 'approved'),
(108, 'Platform 1 - Online Symposium\r\nPlatform 2 - Skill Capacity\r\nPlatform 3 - Cleanliness\r\nPlatform 4 - Announcement', '', '../admin/uploads/Cheryl.png', 'President', 1020, 'Cheryl', 'Bongato', 'bongatocheryl02@gmail.com', 'BSIT', '2nd Year', 'Female', 'approved'),
(109, '1. GROUP STUDY\r\n2. PROGRAMMING TOURNAMENT\r\n3.ONLINE GAMES TOURNAMENT\r\n4.TO REMAIN CLEANLINESS', '', '../admin/uploads/received_1631942927203010.jpeg', 'Treasurer', 1018, 'Krystel Mae C. ', 'Abogada', 'maekrystelabogada@gmail.com', 'BSIT', '1st Year', 'Female', 'approved'),
(110, 'Platform 1: ONLINE SYMPOSIUM\r\nPlatform 2: SKILL CAPACITY\r\nPlatform 3: CLEANLINESS\r\nPlatform 4: ANNOUNCEMENT ', '', '../admin/uploads/received_460271659361224.webp', 'Liaison 2nd year', 1020, 'ZielCar', 'Belarma', 'belarmazielcar@gmail.com', 'BSIT', '2nd Year', 'Male', 'approved'),
(111, 'PLATFORM1: Online Symposium\r\nPLATFORM2: Skill Capacity\r\nPLATFORM3: Cleanliness\r\nPLATFORM4: Announcement', '', '../admin/uploads/296854683_3394314754190930_54314509732087549_n.png', 'Liaison 1st year', 1020, 'Elmer', 'Rapon', 'raponelmer15@gmail.com', 'BSIT', '1st Year', 'Male', 'approved'),
(112, 'Platform 1 - Online Symposium\r\nPlatform 2 - Skill Capacity\r\nPlatform 3 - Cleanliness\r\nPlatform 4 - Announcement', '', '../admin/uploads/304943893_494825492430935_3225688946552704238_n.png', 'Activity Coordinator', 1020, 'Joma Lay', 'Tormis', 'jomalaytormis9@gmail.com', 'BSIT', '2nd Year', 'Female', 'approved'),
(113, 'Learning and Friendship Services', '', '../admin/uploads/03ECAC42-B51F-4BEE-84B0-EED99D50617C.jpeg', 'Treasurer', 1019, 'Angel', ' Cañete', 'caneteangel187@gmail.com', 'BSIT', '1st Year', 'Female', 'approved'),
(114, '1. GROUP STUDY\r\n2. PROGRAMMING TOURNAMENT\r\n3. ONLINE GAMES TOURNAMENT\r\n4. TO MAINTAIN CLEANLINESS', '', '../admin/uploads/306617028_544034257488596_5127054203608095493_n.jpg', 'Vice President', 1018, 'RUFFA  MAE ', 'LABID', 'labidruffamae11@gmail.com', 'BSIT', '2nd Year', 'Female', 'approved'),
(115, '1. Group study\r\n2. Programming tournament\r\n3. Online games tournament\r\n4. To remain cleanliness', '', '../admin/uploads/545.jpg', 'Secretary', 1018, 'Leonora', 'Cantos', 'cantosleonora010@gmail.com', 'BSIT', '2nd Year', 'Female', 'approved'),
(116, 'Platform 1 - Online Symposium\r\nPlatform 2 - Skill Capacity\r\nPlatform 3 - Cleanliness\r\nPlatform 4 - Announcement', '', '../admin/uploads/received_1127332374883864.webp', 'Treasurer', 1020, 'Jaymar', 'Aguilar', 'Jaymaraguilar10@gmail.com', 'BSIT', '3rd Year', 'Male', 'approved'),
(117, '1.GROUP STUDY\r\n2. PROGRAMMING TOURNAMENT\r\n3. ONLINE GAMES TOURNAMENT\r\n4. TO REMAIN CLEANLINESS', '', '../admin/uploads/302651545_1064548137590895_5863454877931947035_n.jpg', 'Mass Media Officer', 1018, 'Jamaica', 'Anuba', 'jamaicaanuba5@yahoo.com', 'BSIT', '1st Year', 'Female', 'approved'),
(118, 'Learning and Friendship Services', '', '../admin/uploads/daisy.jpg', 'Mass Media Officer', 1019, 'Daisy Rey', 'Gondao', 'daisyrey_vergara@gmail.com', 'BSIT', '1st Year', 'Female', 'approved'),
(119, 'Platform 1: ONLINE SYMPOSIUM\r\nPlatform 2: SKILL CAPACITY\r\nPlatform 3: CLEANLINESS\r\nPlatform 4: ANNOUNCEMENT', '', '../admin/uploads/received_1098017364157678.webp', 'Auditor', 1020, 'Harfeil', 'Salmeron', 'harfeilsalmeron1@gmail.com', 'BSIT', '2nd Year', 'Male', 'approved'),
(120, '1. Group study\r\n2. Programming tournament\r\n3. Online games tournament\r\n4. To remain cleanliness', '', '../admin/uploads/299691148_624428962624030_4224927536833842272_n.jpg', 'Mass Media Officer', 1018, 'Shernan', 'Misa', 'shernan.misa66@gmail.com', 'BSIT', '1st Year', 'Male', 'approved'),
(121, '1.ONLNE SYMPOSIUM\r\n2.SKILL CAPACITY\r\n3.CLEANLINESS\r\n4.ANNOUNCEMENT', '', 'uploads/barro.png', 'Mass Media Officer', 1020, 'Princess', 'Barro', 'barroprincess287@gmail.com', 'BSIT', '1st Year', 'Female', 'approved'),
(122, 'Platform 1 - Online Symposium\r\nPlatform 2 - Skill Capacity\r\nPlatform 3 - Cleanliness\r\nPlatform 4 - Announcement', '', '../admin/uploads/Baby boy.png', 'Peace Officer', 1020, 'Baby Boy', 'Padriga', 'Beboypadriga11@gmail.com', 'BSIT', '1st Year', 'Male', 'approved'),
(123, 'Dasig platform', '', '../admin/uploads/307961320_1092244105017847_970197272306763559_n.jpg', 'Peace Officer', 1018, 'Brylle Justin', 'Herminio', 'mikaelee.john@gmail.com', 'BSIT', '1st Year', 'Male', 'approved'),
(127, 'wefwfwefwef', '', '../admin/uploads/Sample1.jfif', 'Senator', 1019, 'girly', 'girlsm', 'girl@gmail.com', 'BSIT', '3rd Year', 'Female', 'approved'),
(128, 'qeqweqweqeqweqw', '', '../admin/uploads/Sample1.jfif', 'Senator', 1020, 'momo', 'meme', 'momo@gmail.com', 'BSIT', '1st Year', 'Female', 'approved'),
(129, 'qwqweqweqwe', '', '../admin/uploads/Sample.jfif', 'Senator', 1019, 'mimi', 'nini', 'nini@gmail.com', 'BSIT', '1st Year', 'Female', 'delete'),
(130, 'NOthing Special', '', '../admin/uploads/sample2.jpg', 'Senator', 1018, 'Ann', 'Mercedes', 'Ann@gmail.com', 'BSIT', '1st Year', 'Female', 'approved'),
(131, 'Honest', '', '../admin/uploads/sample3.jfif', 'Senator', 1018, 'Arthur', 'Gregorio', 'Arthur@gmail.com', 'BSIT', '1st Year', 'Male', 'approved'),
(132, 'Truth is Best', '', '../admin/uploads/sample4.jpg', 'Senator', 1019, 'John Michael', 'Colonel', 'John@gmail.com', 'BSIT', '1st Year', 'Male', 'approved'),
(133, 'Good Be GOOD', '', '../admin/uploads/sample5.jpg', 'Senator', 1019, 'Anthony', 'Walker', 'Alan@gmail.com', 'BSIT', '2nd Year', 'Male', 'approved'),
(134, 'God Is GOOD', '', '../admin/uploads/sample6.jpg', 'Senator', 1020, 'Kristine', 'Martinez', 'Kristine@gmail.com', 'BSIT', '2nd Year', 'Female', 'approved'),
(135, 'Dont Give up', '', '../admin/uploads/sample7.jpeg', 'Senator', 1019, 'Jeissel', 'Clorens', 'Jeissel@gmail.com', 'BSIT', '2nd Year', 'Female', 'approved'),
(136, 'trust the Proccess', '', '../admin/uploads/sample8.jpg', 'Senator', 1020, 'Joey', 'Zakerberg', 'Joey@gmail.com', 'BSIT', '1st Year', 'Female', 'approved'),
(137, 'its Gonna Be GOOOD', '', '../admin/uploads/sample9.jpg', 'Senator', 1019, 'Antonitte', 'Ford', 'Antonitte@gmail.com', 'BSIT', '2nd Year', 'Female', 'approved'),
(138, 'Have Faith in GOD', '', '../admin/uploads/sample10.jfif', 'Senator', 1020, 'Vergiel', 'Fernandez', 'Vergiel@gmail.com', 'BSIT', '2nd Year', 'Female', 'approved'),
(139, 'Always Faith in Jesus', '', '../admin/uploads/sample11.jfif', 'Senator', 1019, 'Maria Clara', 'bargenio', 'Mariaclara@gmail.com', 'BSIT', '1st Year', 'Female', 'approved'),
(140, 'Concern In You', '', '../admin/uploads/sample12.jpg', 'Senator', 1019, 'Heziel', 'Zackerberg', 'Heziel@gmail.com', 'BSIT', '1st Year', 'Female', 'approved'),
(141, 'God is Good All the Time', '', '../admin/uploads/sample13.jpg', 'Senator', 1018, 'Crisha', 'Borlington', 'Crisha@gmail.com', 'BSIT', '2nd Year', 'Female', 'approved'),
(142, 'Never say never', '', '../admin/uploads/sample14.jpg', 'Senator', 1019, 'Antonio', 'Borlington', 'Antonio@gmail.com', 'BSIT', '4th Year', 'Male', 'approved'),
(143, 'Nothing is impossible', '', '../admin/uploads/sample15.jpg', 'Senator', 1020, 'Luis', 'Xford', 'Luis@gmail.com', 'BSIT', '2nd Year', 'Male', 'approved'),
(144, 'DASIG SUGBO', '', '../admin/uploads/sample16.jpg', 'Senator', 1018, 'Bernard', 'Fernandez', 'Bernard@gmail.com', 'BSIT', '3rd Year', 'Male', 'approved'),
(145, 'God is GOOD', '', '../admin/uploads/sample17.jfif', 'Senator', 1020, 'Faith joy', 'MakClarens', 'Faith@gmail.com', 'BSIT', '2nd Year', 'Female', 'approved'),
(146, 'God is Good All the Time', '', '../admin/uploads/sample18.jfif', 'Senator', 1018, 'Grace', 'kim', 'Grace@gmail.com', 'BSIT', '4th Year', 'Female', 'approved'),
(147, 'Have The Glory', '', '../admin/uploads/sample19.jpg', 'Senator', 1019, 'Samantha ', 'Collins', 'Samantha@gmail.com', 'BSIT', '2nd Year', 'Female', 'approved'),
(148, 'Gorgeous', '', '../admin/uploads/sample20.jpg', 'Senator', 1020, 'Isabella', 'Davis', 'Isabella@gmail.com', 'BSIT', '2nd Year', 'Female', 'approved'),
(149, 'very Talented', '', '../admin/uploads/sample21.jfif', 'Senator', 1020, 'Gabriella', 'Gonzalez', 'Gabriella@gmail.com', 'BSIT', '2nd Year', 'Female', 'approved'),
(150, 'Prayer is a Must', '', '../admin/uploads/sample22.jpg', 'Senator', 1019, 'Hailey', 'Carter', 'Hailey@gmail.com', 'BSIT', '4th Year', 'Female', 'approved'),
(151, 'Secretly Talented', '', '../admin/uploads/sample23.jpg', 'Senator', 1018, 'Alyssa', 'Turner', 'Alyssa@gmail.com', 'BSIT', '3rd Year', 'Female', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_messages`
--

CREATE TABLE `tbl_messages` (
  `m_id` int(11) NOT NULL,
  `v_name` varchar(100) NOT NULL,
  `v_message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_messages`
--

INSERT INTO `tbl_messages` (`m_id`, `v_name`, `v_message`) VALUES
(4, 'James Javeluna', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partylist`
--

CREATE TABLE `tbl_partylist` (
  `partylist_id` int(11) NOT NULL,
  `party` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_partylist`
--

INSERT INTO `tbl_partylist` (`partylist_id`, `party`, `year`, `date`) VALUES
(1018, 'Dasig Partylist', '2022-2023', '2022-09-20'),
(1019, 'METS Partylist', '2022-2023', '2022-09-20'),
(1020, 'LITE Partylist', '2022-2023', '2022-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sy`
--

CREATE TABLE `tbl_sy` (
  `sy_id` int(30) NOT NULL,
  `sy_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sy`
--

INSERT INTO `tbl_sy` (`sy_id`, `sy_desc`) VALUES
(1, '2022-2023');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `voters_id` int(11) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year_level` text NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `school_year` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status1` varchar(100) NOT NULL,
  `a_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `vote_id` int(11) NOT NULL,
  `candidate_id` int(50) NOT NULL,
  `voters_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_activitylogs`
--
ALTER TABLE `tbl_activitylogs`
  ADD PRIMARY KEY (`logs_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_candidate`
--
ALTER TABLE `tbl_candidate`
  ADD PRIMARY KEY (`candidate_id`),
  ADD KEY `partylist_id` (`partylist_id`);

--
-- Indexes for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_partylist`
--
ALTER TABLE `tbl_partylist`
  ADD PRIMARY KEY (`partylist_id`);

--
-- Indexes for table `tbl_sy`
--
ALTER TABLE `tbl_sy`
  ADD PRIMARY KEY (`sy_id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`voters_id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`vote_id`),
  ADD KEY `candidate_id` (`candidate_id`),
  ADD KEY `voters_id` (`voters_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_activitylogs`
--
ALTER TABLE `tbl_activitylogs`
  MODIFY `logs_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2481;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_candidate`
--
ALTER TABLE `tbl_candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_partylist`
--
ALTER TABLE `tbl_partylist`
  MODIFY `partylist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1022;

--
-- AUTO_INCREMENT for table `tbl_sy`
--
ALTER TABLE `tbl_sy`
  MODIFY `sy_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `voters_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15416;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `vote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4199;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
