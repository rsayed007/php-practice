-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 09:08 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizz`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `header` varchar(50) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `img`, `header`, `description`) VALUES
(1, 'd.jpg', 'Learn about Quiz WhizZ ', 'We can dispense with the cloudy and opt for the clear. To quote E.B. White in the Elements of Style: [T]he proper correction is likely to be not the replacement of one word or set of words by another but the  We can dispense with the cloudy and opt for the clear. To quote E.B. White in the Elements of Style: [T]he proper correction is likely to be not the replacement of one word or set of words by another but the  We can dispense with the cloudy and opt for the clear. To quote E.B. White in the Elements of Style: [T]he proper correction is likely to be not the replacement of one word or set of words by another but the  We can dispense with the cloudy and opt for the clear. To quote E.B. White in the Elements of Style: [T]he proper correction is likely to be not the replacement of one word or set of words by another but the  We can dispense with the cloudy and opt for the clear. To quote E.B. White in the Elements of Style: [T]he proper correction is likely to be not the replacement of one word or set of words by another but the  We can dispense with the cloudy and opt for the clear. To quote E.B. White in the Elements of Style: [T]he proper correction is likely to be not the replacement of one word or set of words by another but the  We can dispense with the cloudy and opt for the clear. To quote E.B. White in the Elements of Style: [T]he proper correction is likely to be not the replacement of one word or set of words by another but the  We can dispense with the cloudy and opt for the clear. To quote E.B. White in the Elements of Style: [T]he proper correction is likely to be not the replacement of one word or set of words by another but the  We can dispense with the cloudy and opt for the clear. To quote E.B. White in the Elements of Style: [T]he proper correction is likely to be not the replacement of one word or set of words by another but the  We can dispense with the cloudy and opt for the clear. To quote E.B. White in the Elements of Style: [T]he proper correction is likely to be not the replacement of one word or set of words by another but the  We can dispense with the cloudy and opt for the clear. To quote E.B. White in the Elements of Style: [T]he proper correction is likely to be not the replacement of one word or set of words by another but the  We can dispense with the cloudy and opt for the clear. To quote E.B. White in the Elements of Style: [T]he proper correction is likely to be not the replacement of one word or set of words by another but the  We can dispense with the cloudy and opt for the clear. To quote E.B. White in the Elements of Style: [T]he proper correction is likely to be not the replacement of one word or set of words by another but the  We can dispense with the cloudy and opt for the clear. To quote E.B. White in the Elements of Style: [T]he proper correction is likely to be not the replacement of one word or set of words by another but the  We can dispense with the cloudy and opt for the clear. To quote E.B. White in the Elements of Style: [T]he proper correction is likely to be not the replacement of one word or set of words by another but the  We can dispense with the cloudy and opt for the clear. To quote E.B. White in the Elements of Style: [T]he proper correction is likely to be not the replacement of one word or set of words by another but the  ');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'roman', '123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'PHP'),
(2, 'CSS'),
(3, 'C++'),
(4, 'Java'),
(8, 'Bangla');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `cName` varchar(50) NOT NULL,
  `cEmail` varchar(50) NOT NULL,
  `cText` text NOT NULL,
  `stats` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `cName`, `cEmail`, `cText`, `stats`, `date`) VALUES
(1, 'dafdsfadsf', 'r@m.v', 'adsf', 0, '2018-09-16 10:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `post` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `post`, `name`, `designation`) VALUES
(1, '  Creative and innovative ready to use learned skill to enhance any production on the Internet television on the big screen or in the video.   Advisor', 'Sajol Ahmed', 'Advisor'),
(2, ' Creative and innovative ready to use learned skill to enhance any production on the Internet television on the big screen or in the video.   Advisor', 'Ramon Chowdhory', 'Advisor'),
(13, ' Creative and innovative ready to use learned skill to enhance any production on the Internet television on the big screen or in the video.   ', 'Anik Ahmed', 'Advisor');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans1` varchar(80) NOT NULL,
  `ans2` varchar(80) NOT NULL,
  `ans3` varchar(80) NOT NULL,
  `ans4` varchar(80) NOT NULL,
  `ans` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
(79, 'What does PHP stand for?', 'PHP: Hypertext Preprocessor', 'Private Home Page', 'Personal Hypertext Process', 'Private Hypertext Process', 2, 1),
(479, 'Which of the following are not considered as Boolean false?', 'FALSE', '0', 'â€œ0â€', 'â€œFALSEâ€', 3, 1),
(480, 'Variables/functions in PHP don&rsquo;t work directly with:', 'echo()', 'isset()', 'print()', 'All of the above', 1, 1),
(481, 'What is the output of the following code?', 'Array ([x]=>9 [y]=>3 [z]=>-7)', 'Array ([x]=>3 [y]=>2 [z]=>5)', 'Error', 'Array ([x]=>12 [y]=>5 [z]=>-2)', 3, 1),
(482, ' Which of the following multithreaded servers allow PHP as a plug-in?', 'Netscape FastTrack', 'Microsoftâ€™s Internet Information Server', 'Oâ€™Reillyâ€™s WebSite Pro', 'All of the above', 3, 1),
(483, 'Which of the following statements is incorrect with regard to interfaces?', 'A class can implement multiple interfaces', 'An abstract class cannot implement multiple interfaces', 'An interface can extend multiple interfaces', 'Methods with same name, arguments and sequences can exist in the different inter', 3, 1),
(484, 'Which of the following type cast is not correct?', 'real', 'double', 'decimal', 'boolean', 2, 1),
(485, 'What will be the output of the following code? $var = 10; function fn () { $var = 20; return $var; } fn (); echo $var;', '10', '20', 'Undefined Variable', 'Syntax Error', 0, 1),
(486, 'which of the following are the valid PHP data types?', 'resource', 'boolean', 'string', 'All of the above', 3, 1),
(487, 'which of the following characters are taken care of by htmlspecialchars?', '< b. >', 'single quote', 'double quote', 'All of the above', 3, 1),
(488, 'What do you infer from the following code?', 'Only first character will be recognised and new line will be inserted.', 'Last will not be recognised and only first two parts will come in new lines.', 'All the will work and text will be printed on respective new lines.', 'All will be printed on one line irrespective of the', 3, 1),
(489, 'which of the following is a correct declaration?', 'static $varb = array(1,â€™valâ€™,3);', 'static $varb = 1+(2*90);', 'static $varb = sqrt(81);', 'static $varb = new Object;', 0, 1),
(490, 'If visibility is not defined for a method/member then it is treated as public static', 'True', 'False', 'True & False', 'Not one of them', 1, 1),
(491, 'what is true regarding $a + $b where both of them are arrays?', 'Duplicated keys are NOT overwritten', ' $b is appended to $a', 'The + operator is overloaded', 'This produces a syntax error', 1, 1),
(492, 'Which of the following is Ternary Operator?', '&', '=', '?:', '+=', 2, 1),
(493, 'Which of the following vairables are supported by &lsquo;str_replace()&rsquo; function?', 'Integer', 'String', 'Boolean', 'NULL', 1, 1),
(494, 'which of the following pair have non-associative equal precedence?', '+,-', '==, !=', '--', '&=, |=', 1, 1),
(495, 'Which of the following attribute is needed for file upload via form?', 'enctype=â€™multipart/form-dataâ€™', 'enctype=â€™singlepart/dataâ€™', 'enctype=â€™fileâ€™', 'enctype=â€™form-data/fileâ€™', 0, 1),
(496, 'Which of the following functions output text?', 'echo()', 'printf()', 'println()', 'display()', 0, 1),
(497, 'Which of the following functions output text?', 'print()', 'printf()', 'println()', 'display()', 0, 1),
(498, 'The inbuilt function to get the number of parameters passed is:', 'arg_num()', 'func_args_count()', 'func_num_args()', 'None of the above', 2, 1),
(499, 'Multiple select/load is possible with:', 'Checkbox', 'Select', 'File', 'All of the above', 1, 1),
(500, 'Which of the following statement is not correct for PHP?', 'It is a server side scripting language', 'A PHP file may contain text, html tags or scripts', 'It can run on windows and Linux systems only', 'It is compatible with most of the common servers used today', 2, 1),
(501, 'Which of the following printing construct/function accpets multiple parameters?', 'echo', 'print', 'printf', 'All of the above', 0, 1),
(502, 'Which of the following is not a predefined constant?', 'TRUE', 'FALSE', 'NULL', '_FILE_', 3, 1),
(503, 'Which of the following vaiables is not related to file uploads?', 'max_file_size', 'max_execution_time', 'post_max_size', 'max_input_time', 3, 1),
(504, 'Which of the following variable names are invalid?', '$var_1', '$var1', '$var-1', '$v1', 2, 1),
(505, 'What will be the output of the following code? function fn (&amp;$var) { $var = $var &ndash; ($var/10*5); return $var; } echo fn(100);', '100', '50', 'Error message', '98', 2, 1),
(506, 'What will be the output of following code? $a = 10; echo â€˜Value of a = $aâ€™;', 'Value of a = 10', 'Value of a = $a', 'Undefined', 'Syntax Error', 0, 1),
(507, 'Which of the following variable declarations within a class is invalid in PHP5?', 'private $type = â€˜moderateâ€™', 'internal $term= 3', 'public $amnt = â€˜500â€™', 'protected $name = â€˜Quantas Private Limitedâ€™', 1, 1),
(508, 'Which of the following is used to maintain the value of a variable over different pages?', 'static', 'global', 'session_register', 'None of the above', 2, 1),
(509, 'How would you store order number (34) in an &lsquo;OrderCookie&rsquo;?', 'setcookie(â€˜OrderCookieâ€™,34);', 'makeCookie(â€˜OrderCookieâ€™,34);', 'Cookie(â€˜OrderCookieâ€™,34);', 'OrderCookie(34);', 0, 1),
(510, 'Which of the following regular expressions can be used to check the validity of an e-mail addresses?', '^[^@ ]+@[^@ ]+.[^@ ]+$', '^[^@ ]+@[^@ ]+.[^@ ]+$', '$[^@ ]+@[^@ ]+.[^@ ]+^', '$[^@ ]+@[^@ ]+.[^@ ]+^', 0, 1),
(511, 'Which of the following is not supported in PHP5?', 'Type Hinting', 'Reflection', 'Magic Methods', 'Multiple Inheritance', 3, 1),
(512, 'What will be the output of the following code? \n echo 30*5 . 7;', '150.7', '1507', '150.7', 'you canâ€™t concatenate integers', 1, 1),
(513, ' In your PHP application you need to open a file. You want the application to issue a warning and continue execution, in case the file is not found. The ideal function to be used is:', 'include()', 'require()', 'nowarn()', 'getFile(false)', 0, 1),
(514, 'What will be the output of the following code?', 'int(3*4)', 'int(12)', '3*4', '12', 1, 1),
(515, 'You need to count the number of parameters given in the URL by a POST operation. The correct way is:', 'count($POST_VARS);', 'count($POST_VARS_PARAM);', 'count($_POST);', 'count($HTTP_POST_PARAM);', 2, 1),
(516, 'Which of the following is correct with regard to echo and print?', 'echo is a construct and print is a function', 'echo is a function and print is a construct', 'Both are functions', ' Both are constructs', 3, 1),
(517, 'How would you start a session?', 'session(start);', 'session();', 'session_start();', 'begin_session();', 2, 1),
(518, 'Which of the following is not true regarding XForms?', 'PHP provides support for XForm', 'It can be used on PDF documents', 'The data is sent in XML format', 'The action and method parameters are defined in the body', 3, 1),
(519, 'You have defined three variables $to, $subject and $body to send an email. Which of the following methods would you use for sending an email?', 'mail($to,$subject,$body)', 'sendmail($to,$subject,$body)', 'mail(to,subject,body)', 'sendmail(to,subject,body)', 0, 1),
(520, 'Which of the following are useful for method overloading?', '__call, __get, __set', '_get,_set,_load', '__get,__set,__load', '__overload', 0, 1),
(533, 'Question', 'option-1', 'option-2', 'option-3', 'option-4', -1, 0),
(534, '2+2?', '1', '2', '3', '4', 3, 1),
(535, '6+6?', '2', '4', '6', '12', 11, 1),
(536, '2+6', '3', '8', '4', '10', 7, 1),
(537, 'Question', 'option-1', 'option-2', 'option-3', 'option-4', -1, 0),
(541, 'Question', 'option-1', 'option-2', 'option-3', 'option-4', -1, 0),
(543, '6+6?', '2', '4', '6', '12', 11, 2),
(545, 'Question', 'option-1', 'option-2', 'option-3', 'option-4', -1, 0),
(554, '6+6', '24', '12', '4', '7', 1, 2),
(555, '22*2', '22', '45', '44', '4', 2, 2),
(558, '2+2', '2', '3', '4', '5', 2, 1),
(559, '6+6', '24', '12', '4', '7', 1, 1),
(560, '22*2', '22', '45', '44', '4', 2, 1),
(561, '2+3', '2', '3', '4', '5', 3, 1),
(562, '2+4', '2', '3', '6', '5', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `sub_cat_id` varchar(100) NOT NULL,
  `cat_id` int(5) NOT NULL,
  `right_ans` int(4) NOT NULL,
  `wrong_ans` int(4) NOT NULL,
  `no_ans` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `student_id`, `sub_cat_id`, `cat_id`, `right_ans`, `wrong_ans`, `no_ans`) VALUES
(1, '123@mail.com', '123@mail.com_1', 1, 2, 45, 4),
(10, '007@123.com', '007@123.com_1', 1, 2, 45, 4);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `phone`, `email`, `pass`, `img`) VALUES
(21, 'Roman Syed', 123456789, '123@mail.com', '123', '1.jpg'),
(31, 'nayeem', 123456789, 'nayeem@gmail.com', '123456', 't1.png'),
(32, 'Roman Syed', 123456789, '007@123.com', '123456', '1.jpg'),
(33, 'Roman Syed', 123456789, 'roma@123.com', '123123', '1.jpg'),
(34, 'roman', 1912644567, 'romansyed007@gmail.com', '123456', '1.jpg'),
(35, 'Roman Syed', 123456789, 'nayeem001@gmail.com', '123456', '31ohjJQ7FHL.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subName`) VALUES
(1, 'programming'),
(2, 'general');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `institute` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `img`, `name`, `designation`, `institute`) VALUES
(1, 't1.png', 'JUBAIR IBN MALIK RIFAT', 'Lecturer', 'Department of CSE'),
(3, 't2.png', 'MD. AHADUR RAHMAN ', 'Lecturer ', 'Department of CSE'),
(12, 't1.png', 'DR. MD. AKHTARUZZAMAN', 'Assistant Professor', ' Department of CSE');

-- --------------------------------------------------------

--
-- Table structure for table `use_question`
--

CREATE TABLE `use_question` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cat_id` (`sub_cat_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `use_question`
--
ALTER TABLE `use_question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=563;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `use_question`
--
ALTER TABLE `use_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
