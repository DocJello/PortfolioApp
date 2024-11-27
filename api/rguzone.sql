-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2024 at 08:43 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rguzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobileno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `fullname`, `email`, `mobileno`) VALUES
(1, '', 'angeloarguson@yahoo.com', '09060679503');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `ID` int(20) UNSIGNED NOT NULL,
  `title` tinytext NOT NULL,
  `publisher` varchar(200) NOT NULL,
  `venue` varchar(150) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `level` varchar(50) NOT NULL,
  `role` varchar(30) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`ID`, `title`, `publisher`, `venue`, `type`, `date`, `level`, `role`, `link`) VALUES
(1, 'Investigating the Acceptability of Students on Generative AI Tools: A Correlation Analysis among Selected Tertiary Schools in Metro Manila, Philippines', 'Journal of Artificial Intelligence, Machine Learning and Neural Network (JAIMLNN)', '', 'journal', '2024-08-01', 'International', 'Main Author', 'https://doi.org/10.55529/jaimlnn.45.7.18'),
(2, 'Visualizing Ocular Trauma Causes in the Philippines: A Heatmap Analysis', 'Journal of Prevention, Diagnosis and Management of Human Diseases (JPDMHD)', '', 'journal', '2024-08-03', 'International', 'Main Author', 'https://doi.org/10.55529/jpdmhd.45.36.48'),
(3, 'A scrutiny study between Shopee and Lazada user Experience and Satisfaction among Filipino Customers', 'RSP Science Hub', '', 'journal', '2023-12-30', 'International', 'Co-Author', 'https://www.rspsciencehub.com/article_24050_b8d7aaf0997f9630b8ff45a007774802.pdf'),
(4, 'IT Employment in Metro Manila: An Investigation between Certification and Degrees in Information Technology Company', 'International Journal of Information Technology and Computer Engineering (IJITC)', '', 'journal', '2024-08-03', 'International', 'Main Author', 'https://doi.org/10.55529/ijitc.36.8.19'),
(5, '3D Filipino Tactical Role-playing game with modified A* algorithm: An acceptance study among selected Collegiate gamers in Manila ', 'Magnification of Research: Advanced Research in Social Sciences and Humanities: Innovative Approache', '', 'book article', '2023-10-14', 'International', 'Main Author', 'https://www.amazon.com/Magnification-Research-Humanities-Innovative-Approaches/dp/B0CL2K8J34'),
(6, 'Advanced Computer Applications', 'St. Dominic College of Asia', '', 'lab manual', '2024-06-01', 'Institution', 'Main Author', ''),
(7, 'Web Development', 'St. Dominic College of Asia', '', 'lab manual', '2018-06-01', 'Institution', 'Main Author', ''),
(8, 'Object-Oriented Programming', 'St. Dominic College of Asia', '', 'lab manual', '2024-06-01', 'Institution', 'Main Author', ''),
(9, 'IT Elective 2: Visual BASIC.Net', 'St. Dominic College of Asia', '', 'lab manual', '2018-06-01', 'Institution', 'Main Author', ''),
(10, 'Free Elective 1: E-Business', 'St. Dominic College of Asia', '', 'lab manual', '2014-06-01', 'Institution', 'Main Author', ''),
(11, 'SE1N22C: Software Engineering 1', 'Lyceum of the Philippines University Manila', '', 'courseware', '2021-11-22', 'Institution', 'Main Author', ''),
(12, 'SE2N31C: Software Engineering 2', 'Lyceum of the Philippines University Manila', '', 'courseware', '2021-09-16', 'Institution', 'Main Author', ''),
(13, 'Analysis of C Programming Performance: A correlational study of novice programmers\' compiler error logs', '14th International Conference on HNICEM (IEEE)', 'Philippines', 'conference', '2022-12-03', 'International', 'Main Author', 'https://ieeexplore.ieee.org/abstract/document/10109537/'),
(14, 'Data analysis and Constraint-based modeling of novice C programming error logs: An input for developing intelligent tutoring system', '14th International Conference on HNICEM (IEEE)', 'Philippines', 'conference', '2022-12-04', 'International', 'Main Author', 'https://ieeexplore.ieee.org/abstract/document/10109576/'),
(15, 'Tinkering behavior detector using Multiple Linear Regression: Development of Intelligent tutoring system for Novice C programmers', '15th International Conference on HNICEM (IEEE)', 'Philippines', 'conference', '2023-11-20', 'International', 'Main Author', 'https://ieeexplore.ieee.org/abstract/document/10589157/'),
(16, 'Analyzing Machine Learning Algorithm Performance in Predicting Student Academic Performance in Data Structures and Algorithms based on Lifestyles', '15th International Conference on HNICEM (IEEE)', 'Philippines', 'conference', '2023-11-20', 'International', 'Main Author', 'https://ieeexplore.ieee.org/abstract/document/10589068/'),
(17, 'ITCL11C: Introduction to Computing', 'Lyceum of the Philippines University Manila', '', 'courseware', '2021-09-16', 'Institution', 'Main Author', ''),
(18, 'IPTL22C: Integrative Programming and Technologies', 'Lyceum of the Philippines University Manila', '', 'courseware', '2021-09-29', 'Institution', 'Main Author', ''),
(19, ' IPRL12C: Intermediate Programming', 'Lyceum of the Philippines University Manila', '', 'courseware', '2021-09-16', 'Institution', 'Main Author', ''),
(20, 'Constraint-based modeling from Error logs: C programming focusing on assignment statement among selected BSIT and BSCS freshmen AY 2021-2022', '7th UEKaMAYNILAAN Virtual National Research Conference', 'University of the East via Zoom', 'conference', '2022-03-28', 'National', 'Main Author', 'https://www.facebook.com/UniversityoftheEastUE/photos/a.134261453292816/4544610445591206/?type=3'),
(21, 'Performance Analysis of Machine Learning Algorithms on Predicting Grades of State Universities and Colleges (SUC) Students of Cagayan Valley Region, Philippines, Based on Lifestyle Attributes', 'International Conference on Emerging Technologies (ICET)', 'Han Nam University, Daejeon City, South Korea', 'conference', '2019-11-15', 'International', 'Main Author', 'http://www.hannam-icet.org/'),
(22, 'Performance Analysis of Decision Tree on Titanic Dataset', '5th ueKAMAYNILAAN National Research Conference ', 'University of the East Caloocan', 'conference', '2019-09-28', 'National', 'Main Author', 'https://www.pressreader.com/philippines/the-philippine-star/20190927/282200832647498?srsltid=AfmBOoo8xsBQXof0lfqqBLPT47JE3f8DUWN34xfOmoRE9O1rd_h9nC6X'),
(23, 'Learning Management System Adoption by Faculty Members of selected Higher Education Institutions of Luzon, Philippines: A Heirarchical Regression Analysis', 'Fourth Biennial CAMANAVA Studies’ International Conference on Quality Education for Sustainable Development', 'University of the East Caloocan', 'conference', '2019-02-09', 'International', 'Main Author', 'https://www.facebook.com/UniversityoftheEastUE/photos/a.134261453292816/2178617482190526/?type=3'),
(24, 'Development of Encantasya: War of the Four Kingdoms', 'ICSCA 2017: 2017 6th International Conference on Software and Computer Applications', 'Bangkok Thailand', 'conference', '2017-02-28', 'International', 'Main Author', 'https://dl.acm.org/doi/10.1145/3056662.3056684'),
(25, 'Assessing the career plans: Basis for career development of ABMMA 2015-2016 job placement', 'International Conference on Law, Business, Education and Corporate Social Responsibility (LBECSR-17)', 'Hotel Benilde Maison De La Salle', 'conference', '2017-01-23', 'International', 'Main Author', 'https://eventsget.com/events/international-conference-on-law-business-education-corporate-social-responsibility-lbecsr-17-389');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `type` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`ID`, `title`, `description`, `type`, `date`, `image`) VALUES
(1, 'Intelligent tutoring System for C novice programmers with tinkering detector', 'A web-based application named “ITPLTCS” features prediction of tinkering behavior and uses constraint-based modeling on cognitive analysis to provide relevant feedback. The system was used to help students solve introductory programming problems in C and to reduce the workload of the computing teacher in handling programming lab sessions. The web-based application has professor-curated exercises focusing on assignment statements as its domain and interactive development environment (IDE) as working environment in developing an answer. ', 'artificial intelligence', '2023-07-15', 'ITS.gif'),
(2, 'Computer-Aided Instruction (CAI) for computer concepts and fundamentals', 'A local network-based CAI application that caters learning through visual presentations and assessments. The said application will require the student to register an account using their student identification number and their password. It covered three chapters suitable for discussing and assessing the learning for preliminary term. The application was developed using Microsoft Visual Basic 2015 Community Edition as the programming language and Microsoft Excel 2013 for creating the flat-file database, Adobe Photoshop for graphic design, and Microsoft PowerPoint 2013. This application was tested by ten (10) BS in Pharmacy students and ten (10) BS in Computer Science students under my class for IT 111 - Computer concepts and fundamentals course.', 'educational technology', '2014-08-23', 'CAI.gif'),
(3, 'Academic Record Management & Faculty Loading System (ARMFLS)', 'An application intended for Registrar, Faculty and Program Coordinators functions such as generations of transcripts, grading system, certificate of grades, course advising, and curriculum preparations. The said application was developed to help my former co-faculty to finish her thesis in Master of Information Technology. It was developed using Microsoft Visual Basic 6.0 as programming language and MySQL for defining and managing database queries. ARMFLS could be operated by both the Faculty members (who would input the grades)  and the Administrative staff (who would be the recipient of the grades). Another user is the program chair who will be assigning instructors  for a specific subject as part of faculty loading. The grades, provided by the instructor, are inputted to the system at the computer laboratory. The system has the ability to track the records of the student whether the grade is passed or failed. This system includes the ready to print Transcript of Record and Certificate of Grades. ARMFLS  can handle both the records of the regular students and irregular students. The system follows the course checklist, which has prerequisites. The system is also capable of assigning the subject load to a particular schedule thus making it easier for the program chairs to just extract the loading for the faculty members under their supervision. ', 'educational technology', '2012-05-14', 'ARMFLS.gif'),
(4, 'Personal Information and Payroll System (PIPS)', 'This is a prototype Payroll system and a remastered version of the legacy system PIMPS (2010) software that was powered by VB6 and MS Access. This new payroll system was written in C# using MS Visual Studio 2019 and XAMPP for MySQL database.', 'business', '2020-12-31', 'PIPS.gif'),
(5, 'Multimedia equipment lease management system with RFID', 'This system I developed to help my former co-faculty for his Thesis in Master of Science in Information Technology (MSIT) in the year 2017. The said system has modules for inventory, job/event, logistics, warehouse profiles, and configuration. The Inventory module allows user to manage equipment according to its category and subcategory. Job/Event modules allows user to manage jobs/event by specifying the job summary, equipment listing, crew list, and transportation list. Profiles module allows user to management venue, client, and the supplier. Logistics module allow user to view the confirmed events with the aim to dispatch an equipment through RFID scanner. Other modules not mentioned are still under development phase. This prototype was developed using Visual BASIC.NET 2015 Professional Edition as the programming language, MySQL for defining and manipulating database, and Report Viewer for generating reports.', 'business', '2017-07-17', 'RFID.gif'),
(6, 'Personal Information Management Payroll System (PIMPS)', 'This ERP system tailored for a client company integrates DTR encoding, project monitoring, employee information management, and payroll functions. Developed using Microsoft Visual Basic 6.0, Microsoft Access 2007, and Microsoft Excel 2007, it offers custom solutions beyond standard COTS software.\r\n\r\nThe system comprises three modules: Human Resources, Accounting and Development, and Administration. Each module operates independently but follows client-specific configurations. Users, categorized as Administrators, HROs, and Accountants, need to log in with their unique credentials, with permissions tailored to their roles.\r\n\r\nKey benefits include streamlined HR processes and precise accounting functions. The HR module significantly reduces the time HR officers spend scanning personal records. It also provides accurate data for accounting officers to perform specific deductions. The security features of each module ensure safe access and account management, enabling administrators to monitor users and activities. Moreover, the system supports database backups for data security and retrieval.\r\n\r\nOverall, this interactive network-based ERP enhances operational efficiency, bolsters security, and provides a customizable framework that addresses specific company needs unmet by standard accounting software.', 'business', '2010-09-23', 'PIMPS.gif'),
(7, 'Encantasya: War of the four Kingdoms', 'A tactical role playing game for desktop PC that aimed to raise awareness for Filipino core values and culture by including them in the game. The game is inspired by Encantadia, consisting of few places in the Philippines and Mythological Characters such as Bathala, Apo Laki, Anitun Tabu, and Aman Sinaya. The prototype could serve as an innovative tool to convey information though role-playing and be added to the collection of Filipino video games. The game software was developed using the Unity game engine, C# programming language, GIMP, Autodesk Maya 3D animator, and Audacity sound editor. The game can run in Windows 7 in both 32-bit and 64-bit operating systems, with at least 2GB RAM, 1GB Hard disk space, a graphics card with DirectX 9 level capabilities, and a 2.4GHz Intel Core i3 CPU. Furthermore, the study focuses on the core engine of the battle system routines: 1.) The utilization of Charge Time (CT) meters, wherein meters are expected to be filled up to 100 to allow each character to take different actions such as move, attack, defend and wait/end turn; 2.) Healing of injured parties can be done during battles. 3.) The use of original Filipino Gods and custom-made job classes to replace the typical Final Fantasy job classes such as knight, priest, mage, monk, ninja, thief, samurai, archer, lancer, and the likes; 4.) Filipino tourist spots and foods replaced the use of places and names of the items. 5.) Originally-made stories and quests that can bring life to the game; and 6.) Saving points to save the game progress, which can be done when the battle or the story ends.', 'game development', '2015-03-20', 'Encantasya.gif');

-- --------------------------------------------------------

--
-- Table structure for table `vlog`
--

CREATE TABLE `vlog` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `type` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `link` varchar(200) NOT NULL,
  `thumbnail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vlog`
--

INSERT INTO `vlog` (`ID`, `title`, `description`, `type`, `date`, `link`, `thumbnail`) VALUES
(1, 'CSharp Programming 3: Apply auto-increment feature using previous database record', 'This vlog features how you can programmatically implement auto-increment on your C# application. The video will demonstrate practical use of MAX() operation from the MySQL command and call it in the program.', 'software development', '2021-02-07', 'https://www.youtube.com/watch?v=SdI_JYgNTzI&list=PLq2jjsGDJWgCPb7vt4wcIGAkuaBJIISll', 'SdI_JYgNTzI'),
(2, 'C# Programming 2: MenuStrip and StatusStrip', 'This vlog features how you can create awesome menus and cool status on a C# form. Follow through this video on things that you have to prepare in order to develop visually appealing and organized way of presenting information on your desktop applications.', 'software development', '2021-01-26', 'https://www.youtube.com/watch?v=tUFIYTdpxCg&list=PLq2jjsGDJWgCPb7vt4wcIGAkuaBJIISll&index=2', 'tUFIYTdpxCg'),
(3, 'C# Programming Vlog: Remastering a legacy system', 'My year-ender vlog featuring C# programming and MySQL database administration in action, this time I will demonstrate how translation from a high level programming language to another by reviewing source codes in accordance to system design of previous legacy system.', 'software development', '2020-12-31', 'https://www.youtube.com/watch?v=d1Ot10M6EeM&list=PLq2jjsGDJWgCPb7vt4wcIGAkuaBJIISll&index=3', 'd1Ot10M6EeM'),
(4, 'Software Deployment', 'This vlog includes a tutorial on Software Deployment for Java applications.\r\nThe video will demonstrate how to deploy Java programs by exporting them as runnable JAR files using the Eclipse IDE.\r\nThe video tutorial is intended for Software Engineering students, professors, and hobbyists.\r\nPlease LIKE this video and SUBSCRIBE to my channel if you want to see more programming video tutorials.', 'software development', '2021-09-21', 'https://www.youtube.com/watch?v=8effPIiVQKQ&list=PLq2jjsGDJWgANpdHZTzaBVqquQXFepHTS', '8effPIiVQKQ'),
(5, 'Activity 1 HTML Elements', 'This video tutorial will teach you how to write HTML file structure.', 'educational', '2019-02-18', 'https://www.youtube.com/watch?v=v7JONc0rNjo&list=PLq2jjsGDJWgB8Le43K0fzLo4B8kpuD8KN&index=3', 'v7JONc0rNjo'),
(6, 'Activity 2 Adding a title and heading', 'This video tutorial will teach you how to add a title and a heading to your web page.', 'educational', '2019-02-18', 'https://www.youtube.com/watch?v=37Zk8a3Ziv0&list=PLq2jjsGDJWgB8Le43K0fzLo4B8kpuD8KN&index=1', '37Zk8a3Ziv0'),
(7, 'Activity 3 Changing the background color and font style setup', 'This video will teach you how to setup a background color and preferred font face to user interface of the look of the webpage.', 'educational', '2019-02-18', 'https://www.youtube.com/watch?v=wW9F_x-bMmk&list=PLq2jjsGDJWgB8Le43K0fzLo4B8kpuD8KN&index=2', 'wW9F_x-bMmk'),
(8, 'Activity 4 Adding an Image and a paragraph', 'This video will teach you on how to add  image/photo to your web page.', 'educational', '2019-02-25', 'https://www.youtube.com/watch?v=TG6q7XWiKqw&list=PLq2jjsGDJWgB8Le43K0fzLo4B8kpuD8KN&index=4', 'TG6q7XWiKqw'),
(9, 'Activity 5 Creating an unordered list and links', 'This video will teach you on how to create an unordered list and link to your web page.', 'educational', '2019-02-25', 'https://www.youtube.com/watch?v=w2XmPmRvAJc&list=PLq2jjsGDJWgB8Le43K0fzLo4B8kpuD8KN&index=5', 'w2XmPmRvAJc'),
(10, 'Activity 6 Adding a Table and Marquee', 'This video will teach you on how to add table on a web page and apply marquee effect on texts.', 'educational', '2019-03-03', 'https://www.youtube.com/watch?v=-siJFG7Hyh0&list=PLq2jjsGDJWgB8Le43K0fzLo4B8kpuD8KN&index=6', '-siJFG7Hyh0'),
(11, 'CS0023 - Automata Pushdown Automata', 'This video was an advanced topic in Automata Theory and Formal Language course intended for enrolled students of the said course.', 'educational', '2023-06-28', 'https://www.youtube.com/watch?v=XpIg66uETwc&t=43s', 'XpIg66uETwc'),
(12, 'C++ Graph and Bubble Sort Demo in Data Structure', 'This video features the program demonstrations of graph and bubble sort in C++. Programs are written with their ADTs along with their respective main program and implementation (for Graph demo).', 'educational', '2022-07-10', 'https://www.youtube.com/watch?v=MaLrZHwu_7Y&t=5s', 'MaLrZHwu_7Y'),
(13, 'FA3 Question 2 Demonstration', 'Dear students, please follow the instructions in this video tutorial and make sure not to skip it as it has steps that needed to be performed before reaching the next step. Good luck in taking your Summative Assessment 3.', 'educational', '2022-06-29', 'https://www.youtube.com/watch?v=dZcH2ZXdJEE', 'dZcH2ZXdJEE'),
(14, 'PHP Update and Delete operations on database record', 'This video demonstrates how you will be able to write PHP pages to display database table records, update and delete existing records in MySQL database. This video tutorial also includes practical application of bootstrap and require file scripting.', 'educational', '2022-07-10', 'https://www.youtube.com/watch?v=z8FCb-QxyNs', 'z8FCb-QxyNs'),
(15, 'NBA 2K Mod Poland Jersey Demo', 'Presenting my created Jersey mod both for NBA 2K21 and NBA 2K22 versions. Please support the content creator. Like and subscribe to watch future videogame and computer-related topics.', 'game modding', '2022-04-27', 'https://www.youtube.com/watch?v=Oudzyk7Fp30&t=18s', 'Oudzyk7Fp30'),
(16, 'Python Data Analysis', 'This video features the program demonstrations of exploratory data analysis (EDA) on a dataset. The programs shown were written in Python notebook.', 'data science', '2024-06-23', 'https://www.youtube.com/watch?v=Remf5FpTkN4&t=1241s', 'Remf5FpTkN4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `vlog`
--
ALTER TABLE `vlog`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `ID` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vlog`
--
ALTER TABLE `vlog`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
