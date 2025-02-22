-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2025 at 02:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mssn_nsuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fullname`, `email`, `password`, `is_active`, `date_created`) VALUES
(1, 'Shuraihu Usman', 'shuraih@yahoomail.com', '$2y$10$wEwml9JZN8WeaqsJoIG1z.9rx72.2Q0YckcLQ7OAsKG8D5AtZmMqW', 1, '2024-09-30 11:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(255) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_teaser` varchar(2000) NOT NULL,
  `blog_content` varchar(5000) NOT NULL,
  `blog_date` date NOT NULL,
  `blog_time` time NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `blog_teaser`, `blog_content`, `blog_date`, `blog_time`, `blog_image`, `date_created`) VALUES
(4, 'First Blog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non pulvinar ipsum. Nunc nec faucibus augue. Phasellus gravida, dolor id commodo malesuada, nunc sapien eleifend metus, id suscipit nibh tellus vel nisi. Sed et diam tristique, lobortis dui a, pellentesque ipsum. Ut pellentesque tellus id finibus imperdiet. Donec fermentum augue vitae ultrices sodales. Proin et dui pulvinar, sollicitudin purus vel, aliquet dolor. Proin nec erat id eros ullamcorper dictum eget et erat. Aliquam diam nulla, laoreet id ullamcorper ut, auctor sed neque. Donec rhoncus purus nec sapien tristique, ac lobortis nibh lacinia. Curabitur ut vulputate lectus, in efficitur velit.', '&#60;p&#62;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non pulvinar ipsum. Nunc nec faucibus augue. Phasellus gravida, dolor id commodo malesuada, nunc sapien eleifend metus, id suscipit nibh tellus vel nisi. Sed et diam tristique, lobortis dui a, pellentesque ipsum. Ut pellentesque tellus id finibus imperdiet. Donec fermentum augue vitae ultrices sodales. Proin et dui pulvinar, sollicitudin purus vel, aliquet dolor. Proin nec erat id eros ullamcorper dictum eget et erat. Aliquam diam nulla, laoreet id ullamcorper ut, auctor sed neque. Donec rhoncus purus nec sapien tristique, ac lobortis nibh lacinia. Curabitur ut vulputate lectus, in efficitur velit.&#60;/p&#62;&#60;p&#62;Nulla porttitor ullamcorper porta. Integer scelerisque urna nibh, at vestibulum dolor bibendum ac. Phasellus volutpat urna sit amet neque maximus consectetur. Nullam semper magna vel metus ullamcorper congue. Nulla euismod vel ipsum nec viverra. Aliquam accumsan hendrerit augue, sollicitudin laoreet erat elementum nec. Pellentesque a sem mattis tellus iaculis tincidunt sed eget augue. Fusce elementum aliquet lorem, at tempor tellus tempus eget. Duis euismod dignissim mattis. Maecenas vitae interdum elit, a maximus felis. Ut consequat tortor sed magna ultricies facilisis. Nam elementum risus felis, non tincidunt turpis tincidunt dignissim.&#60;/p&#62;&#60;p&#62;Nunc maximus dui mi, eget bibendum mauris scelerisque in. Cras enim erat, feugiat et nunc eget, facilisis imperdiet leo. Mauris at lectus ac justo blandit aliquam sit amet eget sapien. Nulla nec quam nulla. Mauris aliquet blandit mi, ac tincidunt justo dignissim vitae. Curabitur ac sem a magna volutpat vehicula. Duis dignissim ut massa eget consequat.&#60;/p&#62;&#60;p&#62;Vestibulum congue elementum nulla sed pharetra. Phasellus fermentum tempor quam sit amet lacinia. Nullam at hendrerit sem, sed ultricies sem. Sed cursus ex at sodales eleifend. Fusce feugiat nisi a interdum commodo. Nunc tellus mauris, dictum ac consequat porttitor, tempus quis quam. Nulla in vestibulum urna, sit amet rhoncus est. Nullam mattis finibus lectus, sit amet facilisis est semper id. Vestibulum quis commodo ipsum. Morbi sit amet quam a neque malesuada fringilla maximus in tortor. Integer massa dolor, ornare eu efficitur sed, placerat non metus. Quisque viverra pulvinar arcu, sit amet dapibus leo suscipit ut. Duis quis dictum arcu.&#60;/p&#62;&#60;p&#62;Maecenas sed imperdiet nibh. Nam rhoncus, lacus vel tristique ullamcorper, sapien mi imperdiet leo, non porttitor magna augue at metus. Morbi hendrerit ac dolor sed mattis. Nullam vitae purus a leo tincidunt tincidunt a sodales erat. Donec egestas, eros ac mattis scelerisque, odio odio rhoncus metus, eu imperdiet ligula arcu mattis turpis. Duis vestibulum condimentum cursus. Vivamus porta vitae massa quis posuere. Nam nec purus id dui mattis rhoncus non sit amet est. Aliquam elementum efficitur purus et aliquet. Ut ultricies nibh leo, a lobortis arcu luctus sed.&#60;/p&#62;', '2024-09-30', '00:00:00', 'blog/77621727747667.png', '2024-10-01 01:54:27'),
(5, 'Second Blog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non pulvinar ipsum. Nunc nec faucibus augue. Phasellus gravida, dolor id commodo malesuada, nunc sapien eleifend metus, id suscipit nibh tellus vel nisi. Sed et diam tristique, lobortis dui a, pellentesque ipsum. Ut pellentesque tellus id finibus imperdiet. Donec fermentum augue vitae ultrices sodales. Proin et dui pulvinar, sollicitudin purus vel, aliquet dolor. Proin nec erat id eros ullamcorper dictum eget et erat. Aliquam diam nulla, laoreet id ullamcorper ut, auctor sed neque. Donec rhoncus purus nec sapien tristique, ac lobortis nibh lacinia. Curabitur ut vulputate lectus, in efficitur velit.', '&#60;p&#62;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non pulvinar ipsum. Nunc nec faucibus augue. Phasellus gravida, dolor id commodo malesuada, nunc sapien eleifend metus, id suscipit nibh tellus vel nisi. Sed et diam tristique, lobortis dui a, pellentesque ipsum. Ut pellentesque tellus id finibus imperdiet. Donec fermentum augue vitae ultrices sodales. Proin et dui pulvinar, sollicitudin purus vel, aliquet dolor. Proin nec erat id eros ullamcorper dictum eget et erat. Aliquam diam nulla, laoreet id ullamcorper ut, auctor sed neque. Donec rhoncus purus nec sapien tristique, ac lobortis nibh lacinia. Curabitur ut vulputate lectus, in efficitur velit.&#60;/p&#62;&#60;p&#62;Nulla porttitor ullamcorper porta. Integer scelerisque urna nibh, at vestibulum dolor bibendum ac. Phasellus volutpat urna sit amet neque maximus consectetur. Nullam semper magna vel metus ullamcorper congue. Nulla euismod vel ipsum nec viverra. Aliquam accumsan hendrerit augue, sollicitudin laoreet erat elementum nec. Pellentesque a sem mattis tellus iaculis tincidunt sed eget augue. Fusce elementum aliquet lorem, at tempor tellus tempus eget. Duis euismod dignissim mattis. Maecenas vitae interdum elit, a maximus felis. Ut consequat tortor sed magna ultricies facilisis. Nam elementum risus felis, non tincidunt turpis tincidunt dignissim.&#60;/p&#62;&#60;p&#62;Nunc maximus dui mi, eget bibendum mauris scelerisque in. Cras enim erat, feugiat et nunc eget, facilisis imperdiet leo. Mauris at lectus ac justo blandit aliquam sit amet eget sapien. Nulla nec quam nulla. Mauris aliquet blandit mi, ac tincidunt justo dignissim vitae. Curabitur ac sem a magna volutpat vehicula. Duis dignissim ut massa eget consequat.&#60;/p&#62;&#60;p&#62;Vestibulum congue elementum nulla sed pharetra. Phasellus fermentum tempor quam sit amet lacinia. Nullam at hendrerit sem, sed ultricies sem. Sed cursus ex at sodales eleifend. Fusce feugiat nisi a interdum commodo. Nunc tellus mauris, dictum ac consequat porttitor, tempus quis quam. Nulla in vestibulum urna, sit amet rhoncus est. Nullam mattis finibus lectus, sit amet facilisis est semper id. Vestibulum quis commodo ipsum. Morbi sit amet quam a neque malesuada fringilla maximus in tortor. Integer massa dolor, ornare eu efficitur sed, placerat non metus. Quisque viverra pulvinar arcu, sit amet dapibus leo suscipit ut. Duis quis dictum arcu.&#60;/p&#62;&#60;p&#62;Maecenas sed imperdiet nibh. Nam rhoncus, lacus vel tristique ullamcorper, sapien mi imperdiet leo, non porttitor magna augue at metus. Morbi hendrerit ac dolor sed mattis. Nullam vitae purus a leo tincidunt tincidunt a sodales erat. Donec egestas, eros ac mattis scelerisque, odio odio rhoncus metus, eu imperdiet ligula arcu mattis turpis. Duis vestibulum condimentum cursus. Vivamus porta vitae massa quis posuere. Nam nec purus id dui mattis rhoncus non sit amet est. Aliquam elementum efficitur purus et aliquet. Ut ultricies nibh leo, a lobortis arcu luctus sed.&#60;/p&#62;', '2024-09-30', '00:00:00', 'blog/88151727747723.jpg', '2024-10-01 01:55:23'),
(6, 'Third Blog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non pulvinar ipsum. Nunc nec faucibus augue. Phasellus gravida, dolor id commodo malesuada, nunc sapien eleifend metus, id suscipit nibh tellus vel nisi. Sed et diam tristique, lobortis dui a, pellentesque ipsum. Ut pellentesque tellus id finibus imperdiet. Donec fermentum augue vitae ultrices sodales. Proin et dui pulvinar, sollicitudin purus vel, aliquet dolor. Proin nec erat id eros ullamcorper dictum eget et erat. Aliquam diam nulla, laoreet id ullamcorper ut, auctor sed neque. Donec rhoncus purus nec sapien tristique, ac lobortis nibh lacinia. Curabitur ut vulputate lectus, in efficitur velit.', '&#60;p&#62;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non pulvinar ipsum. Nunc nec faucibus augue. Phasellus gravida, dolor id commodo malesuada, nunc sapien eleifend metus, id suscipit nibh tellus vel nisi. Sed et diam tristique, lobortis dui a, pellentesque ipsum. Ut pellentesque tellus id finibus imperdiet. Donec fermentum augue vitae ultrices sodales. Proin et dui pulvinar, sollicitudin purus vel, aliquet dolor. Proin nec erat id eros ullamcorper dictum eget et erat. Aliquam diam nulla, laoreet id ullamcorper ut, auctor sed neque. Donec rhoncus purus nec sapien tristique, ac lobortis nibh lacinia. Curabitur ut vulputate lectus, in efficitur velit.&#60;/p&#62;&#60;p&#62;Nulla porttitor ullamcorper porta. Integer scelerisque urna nibh, at vestibulum dolor bibendum ac. Phasellus volutpat urna sit amet neque maximus consectetur. Nullam semper magna vel metus ullamcorper congue. Nulla euismod vel ipsum nec viverra. Aliquam accumsan hendrerit augue, sollicitudin laoreet erat elementum nec. Pellentesque a sem mattis tellus iaculis tincidunt sed eget augue. Fusce elementum aliquet lorem, at tempor tellus tempus eget. Duis euismod dignissim mattis. Maecenas vitae interdum elit, a maximus felis. Ut consequat tortor sed magna ultricies facilisis. Nam elementum risus felis, non tincidunt turpis tincidunt dignissim.&#60;/p&#62;&#60;p&#62;Nunc maximus dui mi, eget bibendum mauris scelerisque in. Cras enim erat, feugiat et nunc eget, facilisis imperdiet leo. Mauris at lectus ac justo blandit aliquam sit amet eget sapien. Nulla nec quam nulla. Mauris aliquet blandit mi, ac tincidunt justo dignissim vitae. Curabitur ac sem a magna volutpat vehicula. Duis dignissim ut massa eget consequat.&#60;/p&#62;&#60;p&#62;Vestibulum congue elementum nulla sed pharetra. Phasellus fermentum tempor quam sit amet lacinia. Nullam at hendrerit sem, sed ultricies sem. Sed cursus ex at sodales eleifend. Fusce feugiat nisi a interdum commodo. Nunc tellus mauris, dictum ac consequat porttitor, tempus quis quam. Nulla in vestibulum urna, sit amet rhoncus est. Nullam mattis finibus lectus, sit amet facilisis est semper id. Vestibulum quis commodo ipsum. Morbi sit amet quam a neque malesuada fringilla maximus in tortor. Integer massa dolor, ornare eu efficitur sed, placerat non metus. Quisque viverra pulvinar arcu, sit amet dapibus leo suscipit ut. Duis quis dictum arcu.&#60;/p&#62;&#60;p&#62;Maecenas sed imperdiet nibh. Nam rhoncus, lacus vel tristique ullamcorper, sapien mi imperdiet leo, non porttitor magna augue at metus. Morbi hendrerit ac dolor sed mattis. Nullam vitae purus a leo tincidunt tincidunt a sodales erat. Donec egestas, eros ac mattis scelerisque, odio odio rhoncus metus, eu imperdiet ligula arcu mattis turpis. Duis vestibulum condimentum cursus. Vivamus porta vitae massa quis posuere. Nam nec purus id dui mattis rhoncus non sit amet est. Aliquam elementum efficitur purus et aliquet. Ut ultricies nibh leo, a lobortis arcu luctus sed.&#60;/p&#62;', '2024-09-30', '00:00:00', 'blog/89771727747734.jpg', '2024-10-01 01:55:34'),
(7, 'Fourth Blog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non pulvinar ipsum. Nunc nec faucibus augue. Phasellus gravida, dolor id commodo malesuada, nunc sapien eleifend metus, id suscipit nibh tellus vel nisi. Sed et diam tristique, lobortis dui a, pellentesque ipsum. Ut pellentesque tellus id finibus imperdiet. Donec fermentum augue vitae ultrices sodales. Proin et dui pulvinar, sollicitudin purus vel, aliquet dolor. Proin nec erat id eros ullamcorper dictum eget et erat. Aliquam diam nulla, laoreet id ullamcorper ut, auctor sed neque. Donec rhoncus purus nec sapien tristique, ac lobortis nibh lacinia. Curabitur ut vulputate lectus, in efficitur velit.', '&#60;p&#62;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non pulvinar ipsum. Nunc nec faucibus augue. Phasellus gravida, dolor id commodo malesuada, nunc sapien eleifend metus, id suscipit nibh tellus vel nisi. Sed et diam tristique, lobortis dui a, pellentesque ipsum. Ut pellentesque tellus id finibus imperdiet. Donec fermentum augue vitae ultrices sodales. Proin et dui pulvinar, sollicitudin purus vel, aliquet dolor. Proin nec erat id eros ullamcorper dictum eget et erat. Aliquam diam nulla, laoreet id ullamcorper ut, auctor sed neque. Donec rhoncus purus nec sapien tristique, ac lobortis nibh lacinia. Curabitur ut vulputate lectus, in efficitur velit.&#60;/p&#62;&#60;p&#62;Nulla porttitor ullamcorper porta. Integer scelerisque urna nibh, at vestibulum dolor bibendum ac. Phasellus volutpat urna sit amet neque maximus consectetur. Nullam semper magna vel metus ullamcorper congue. Nulla euismod vel ipsum nec viverra. Aliquam accumsan hendrerit augue, sollicitudin laoreet erat elementum nec. Pellentesque a sem mattis tellus iaculis tincidunt sed eget augue. Fusce elementum aliquet lorem, at tempor tellus tempus eget. Duis euismod dignissim mattis. Maecenas vitae interdum elit, a maximus felis. Ut consequat tortor sed magna ultricies facilisis. Nam elementum risus felis, non tincidunt turpis tincidunt dignissim.&#60;/p&#62;&#60;p&#62;Nunc maximus dui mi, eget bibendum mauris scelerisque in. Cras enim erat, feugiat et nunc eget, facilisis imperdiet leo. Mauris at lectus ac justo blandit aliquam sit amet eget sapien. Nulla nec quam nulla. Mauris aliquet blandit mi, ac tincidunt justo dignissim vitae. Curabitur ac sem a magna volutpat vehicula. Duis dignissim ut massa eget consequat.&#60;/p&#62;&#60;p&#62;Vestibulum congue elementum nulla sed pharetra. Phasellus fermentum tempor quam sit amet lacinia. Nullam at hendrerit sem, sed ultricies sem. Sed cursus ex at sodales eleifend. Fusce feugiat nisi a interdum commodo. Nunc tellus mauris, dictum ac consequat porttitor, tempus quis quam. Nulla in vestibulum urna, sit amet rhoncus est. Nullam mattis finibus lectus, sit amet facilisis est semper id. Vestibulum quis commodo ipsum. Morbi sit amet quam a neque malesuada fringilla maximus in tortor. Integer massa dolor, ornare eu efficitur sed, placerat non metus. Quisque viverra pulvinar arcu, sit amet dapibus leo suscipit ut. Duis quis dictum arcu.&#60;/p&#62;&#60;p&#62;Maecenas sed imperdiet nibh. Nam rhoncus, lacus vel tristique ullamcorper, sapien mi imperdiet leo, non porttitor magna augue at metus. Morbi hendrerit ac dolor sed mattis. Nullam vitae purus a leo tincidunt tincidunt a sodales erat. Donec egestas, eros ac mattis scelerisque, odio odio rhoncus metus, eu imperdiet ligula arcu mattis turpis. Duis vestibulum condimentum cursus. Vivamus porta vitae massa quis posuere. Nam nec purus id dui mattis rhoncus non sit amet est. Aliquam elementum efficitur purus et aliquet. Ut ultricies nibh leo, a lobortis arcu luctus sed.&#60;/p&#62;', '2024-09-30', '00:00:00', 'blog/72141727747743.jpg', '2024-10-01 01:55:43'),
(9, 'Sixth Blog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non pulvinar ipsum. Nunc nec faucibus augue. Phasellus gravida, dolor id commodo malesuada, nunc sapien eleifend metus, id suscipit nibh tellus vel nisi. Sed et diam tristique, lobortis dui a, pellentesque ipsum. Ut pellentesque tellus id finibus imperdiet. Donec fermentum augue vitae ultrices sodales. Proin et dui pulvinar, sollicitudin purus vel, aliquet dolor. Proin nec erat id eros ullamcorper dictum eget et erat. Aliquam diam nulla, laoreet id ullamcorper ut, auctor sed neque. Donec rhoncus purus nec sapien tristique, ac lobortis nibh lacinia. Curabitur ut vulputate lectus, in efficitur velit.', '&#60;p&#62;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non pulvinar ipsum. Nunc nec faucibus augue. Phasellus gravida, dolor id commodo malesuada, nunc sapien eleifend metus, id suscipit nibh tellus vel nisi. Sed et diam tristique, lobortis dui a, pellentesque ipsum. Ut pellentesque tellus id finibus imperdiet. Donec fermentum augue vitae ultrices sodales. Proin et dui pulvinar, sollicitudin purus vel, aliquet dolor. Proin nec erat id eros ullamcorper dictum eget et erat. Aliquam diam nulla, laoreet id ullamcorper ut, auctor sed neque. Donec rhoncus purus nec sapien tristique, ac lobortis nibh lacinia. Curabitur ut vulputate lectus, in efficitur velit.&#60;/p&#62;&#60;p&#62;Nulla porttitor ullamcorper porta. Integer scelerisque urna nibh, at vestibulum dolor bibendum ac. Phasellus volutpat urna sit amet neque maximus consectetur. Nullam semper magna vel metus ullamcorper congue. Nulla euismod vel ipsum nec viverra. Aliquam accumsan hendrerit augue, sollicitudin laoreet erat elementum nec. Pellentesque a sem mattis tellus iaculis tincidunt sed eget augue. Fusce elementum aliquet lorem, at tempor tellus tempus eget. Duis euismod dignissim mattis. Maecenas vitae interdum elit, a maximus felis. Ut consequat tortor sed magna ultricies facilisis. Nam elementum risus felis, non tincidunt turpis tincidunt dignissim.&#60;/p&#62;&#60;p&#62;Nunc maximus dui mi, eget bibendum mauris scelerisque in. Cras enim erat, feugiat et nunc eget, facilisis imperdiet leo. Mauris at lectus ac justo blandit aliquam sit amet eget sapien. Nulla nec quam nulla. Mauris aliquet blandit mi, ac tincidunt justo dignissim vitae. Curabitur ac sem a magna volutpat vehicula. Duis dignissim ut massa eget consequat.&#60;/p&#62;&#60;p&#62;Vestibulum congue elementum nulla sed pharetra. Phasellus fermentum tempor quam sit amet lacinia. Nullam at hendrerit sem, sed ultricies sem. Sed cursus ex at sodales eleifend. Fusce feugiat nisi a interdum commodo. Nunc tellus mauris, dictum ac consequat porttitor, tempus quis quam. Nulla in vestibulum urna, sit amet rhoncus est. Nullam mattis finibus lectus, sit amet facilisis est semper id. Vestibulum quis commodo ipsum. Morbi sit amet quam a neque malesuada fringilla maximus in tortor. Integer massa dolor, ornare eu efficitur sed, placerat non metus. Quisque viverra pulvinar arcu, sit amet dapibus leo suscipit ut. Duis quis dictum arcu.&#60;/p&#62;&#60;p&#62;Maecenas sed imperdiet nibh. Nam rhoncus, lacus vel tristique ullamcorper, sapien mi imperdiet leo, non porttitor magna augue at metus. Morbi hendrerit ac dolor sed mattis. Nullam vitae purus a leo tincidunt tincidunt a sodales erat. Donec egestas, eros ac mattis scelerisque, odio odio rhoncus metus, eu imperdiet ligula arcu mattis turpis. Duis vestibulum condimentum cursus. Vivamus porta vitae massa quis posuere. Nam nec purus id dui mattis rhoncus non sit amet est. Aliquam elementum efficitur purus et aliquet. Ut ultricies nibh leo, a lobortis arcu luctus sed.&#60;/p&#62;', '2024-09-30', '18:54:00', 'blog/31531727747797.jpg', '2024-10-01 01:56:37'),
(10, 'Blog 1', 'sasasasasasasasasasasasasasa', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><h2>Where does it come from?</h2><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '2024-11-29', '07:09:00', 'blog/97621731337533.png', '2024-11-11 15:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(255) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `faculty_id` int(255) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `faculty_id`, `date_created`) VALUES
(3, 'Computer Science', 1, '2024-11-22 10:49:06'),
(4, 'Micro Biology', 1, '2024-11-22 10:49:21');

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE `ebook` (
  `ebook_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_preview` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ebook`
--

INSERT INTO `ebook` (`ebook_id`, `title`, `image_preview`, `file`, `date_created`) VALUES
(2, 'Islamic Nation', 'IMG-20250212-WA0009_2.jpg', 'RASHIN_SANI_by_oum_yasmeen_-1.doc', '2025-02-22 13:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `teaser` varchar(2000) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `title`, `teaser`, `content`, `location`, `date`, `time`, `image`, `date_created`) VALUES
(1, 'Event 1', 'Mazer is a minimalistic Free Bootstrap 5 Template for Admin Dashboard. This theme got no jQuery dependency which will free you from all the excess burden. Instead of working from scratch, you can now save yourself plenty of time and resources with this HTML5 template. It is highly responsive, optimized, and well-suited for the available devices and browsers.', '&#60;p&#62;Mazer is a minimalistic &#60;a href=&#34;https://themewagon.com/theme_tag/free/&#34;&#62;Free Bootstrap 5 Template&#60;/a&#62; for &#60;a href=&#34;https://themewagon.com/theme-categories/admin-dashboard/&#34;&#62;Admin Dashboard&#60;/a&#62;. This theme got no jQuery dependency which will free you from all the excess burden. Instead of working from scratch, you can now save yourself plenty of time and resources with this HTML5 template. It is &#60;strong&#62;highly responsive&#60;/strong&#62;, optimized, and well-suited for the available devices and browsers.&#60;/p&#62;', 'NASSA', '2024-11-21', '04:42:00', 'event/15151732192977.png', '2024-11-21 12:42:57'),
(2, 'Event 2', 'With some easy installation and running steps, you can launch your dashboard absolutely in no time. This template offers you an interface with the widgets and features you need to have, like layouts, tables, charts, chatbox, to-do list, Google Map, JS Vector Map, authentication pages, pre-built error pages, and many others. You will have a blast using Mazer and give your admin dashboard some extra wings.', '<p>Mazer is a minimalistic <a href=\"https://themewagon.com/theme_tag/free/\">Free Bootstrap 5 Template</a> for <a href=\"https://themewagon.com/theme-categories/admin-dashboard/\">Admin Dashboard</a>. This theme got no jQuery dependency which will free you from all the excess burden. Instead of working from scratch, you can now save yourself plenty of time and resources with this HTML5 template. It is <strong>highly responsive</strong>, optimized, and well-suited for the available devices and browsers.</p><h4><strong>Free Bootstrap 5 HTML5 Admin Dashboard Template</strong></h4><p>With some easy installation and running steps, you can launch your dashboard absolutely in no time. This template offers you an interface with the widgets and features you need to have, like <strong>layouts, tables, charts, chatbox, to-do list, Google Map, JS Vector Map, authentication pages, pre-built error pages</strong>, and many others. You will have a blast using Mazer and give your admin dashboard some extra wings.</p>', 'LT2', '2024-11-21', '05:02:00', 'event/34611732194423.png', '2024-11-21 13:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `excos`
--

CREATE TABLE `excos` (
  `exco_id` int(255) NOT NULL,
  `session_id` int(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `excos`
--

INSERT INTO `excos` (`exco_id`, `session_id`, `name`, `position`, `image`, `date_created`) VALUES
(1, 2, 'Shuraihu Usman', 'Central Ameer', '1737664870324.jpg', '2025-01-23 22:21:03'),
(2, 2, 'Shuraihu Usman', 'Central Ameer', '1737664870324-146.jpg', '2025-01-23 22:21:15'),
(3, 6, 'Usman Abdulaziz', 'Secretary General', 'cropped-nsuk_logo-300x300-1.png', '2025-01-23 22:26:04'),
(4, 6, 'Usman Abdulaziz', 'Secretary General', 'cropped-nsuk_logo-300x300-1-667.png', '2025-01-23 22:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(255) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `date_created`, `date_updated`) VALUES
(1, 'Natural and Applied Sciences', '2024-09-30 14:06:46', '2024-09-30 14:06:46'),
(2, 'Agriculture', '2024-09-30 14:07:05', '2024-09-30 14:07:05'),
(3, 'Administrative', '2024-09-30 14:07:13', '2024-09-30 14:07:13'),
(4, 'Education', '2024-09-30 14:08:06', '2024-09-30 14:08:06'),
(5, 'Social Science', '2024-09-30 14:08:17', '2024-09-30 14:08:17'),
(6, 'Law', '2024-09-30 14:08:22', '2024-09-30 14:08:22'),
(7, 'Art', '2024-09-30 14:08:27', '2024-09-30 14:08:27'),
(9, 'Engineering', '2024-09-30 14:12:15', '2024-09-30 14:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `pq`
--

CREATE TABLE `pq` (
  `pq_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `faculty_id` int(255) DEFAULT NULL,
  `department_id` int(255) DEFAULT NULL,
  `level` varchar(255) NOT NULL,
  `file` varchar(300) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pq`
--

INSERT INTO `pq` (`pq_id`, `title`, `faculty_id`, `department_id`, `level`, `file`, `date_created`) VALUES
(22, 'MTH122', 1, 3, '100', 'Yahya_S_Mahmud_Final_Projec_3-82.docx', '2024-11-30 16:18:53'),
(23, 'MCB233', 1, 4, '200', 'Yahya_S_Mahmud_Final_Projec_3-888.docx', '2024-11-30 16:19:03'),
(24, 'MTH23', 1, 4, '200', 'Hon.docx', '2025-01-22 08:52:23');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_id` int(255) NOT NULL,
  `session_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_id`, `session_name`, `date_created`) VALUES
(2, '2021/2022', '2024-09-30 13:17:39'),
(3, '2022/2023', '2024-09-30 13:17:51'),
(4, '2023/2024', '2024-09-30 13:18:02'),
(5, '2024/2025', '2024-09-30 13:18:10'),
(6, '2019/2020', '2024-09-30 13:22:00'),
(7, '2020/2021', '2024-09-30 13:22:15'),
(8, '2018/2019', '2024-09-30 13:22:31'),
(9, '2017/2018', '2024-09-30 13:22:38'),
(10, '2016/2017', '2024-09-30 13:22:43'),
(11, '2015/2016', '2024-09-30 13:22:49'),
(12, '2014/2015', '2024-09-30 13:22:56'),
(13, '2013/2014', '2024-09-30 13:23:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`),
  ADD KEY `join department tbl with faculty tbl` (`faculty_id`);

--
-- Indexes for table `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`ebook_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `excos`
--
ALTER TABLE `excos`
  ADD PRIMARY KEY (`exco_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `pq`
--
ALTER TABLE `pq`
  ADD PRIMARY KEY (`pq_id`),
  ADD KEY `join pq tbl with faculty tbl` (`faculty_id`),
  ADD KEY `join pq tbl with department tbl` (`department_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ebook`
--
ALTER TABLE `ebook`
  MODIFY `ebook_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `excos`
--
ALTER TABLE `excos`
  MODIFY `exco_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pq`
--
ALTER TABLE `pq`
  MODIFY `pq_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `join department tbl with faculty tbl` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE SET NULL;

--
-- Constraints for table `pq`
--
ALTER TABLE `pq`
  ADD CONSTRAINT `join pq tbl with department tbl` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `join pq tbl with faculty tbl` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
