-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 10:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(1) NOT NULL,
  `meet_our_team` longtext NOT NULL,
  `vision` longtext NOT NULL,
  `mission` longtext NOT NULL,
  `goal` longtext NOT NULL,
  `our_services` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `meet_our_team`, `vision`, `mission`, `goal`, `our_services`) VALUES
(1, 'We are Melham Construction Corporation interns who want to create a website for available jobs online. The traditional method of applying for jobs has been innovated, and on this page we offer a minimalist, clean, and simple to use website for both job seekers and employers. Tech-Ployment is a combination of technology and employment in which employability is now empowered by our modern technology.', 'To establish a career portal that can help both job seekers and employees in a healthy community.', 'To assist seekers and employers achieve their employment objectives. With creativity and skill, the agency collaborates with community partners to adapt to changing needs and possibilities.', 'Are you sick of standing in endless line? Today, technology gives you an advantage in the job market by allowing you to apply with a single click and from the comfort of your home. Now is the time to apply! Use Tech-Ployment and get your first online job!', 'We serve individuals by connecting employers with workers who are looking for jobs. We want to instill confidence in everyone&amp;amp;amp;amp;amp;amp;amp;amp;amp;#039;s outsourcing experience.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `email` varchar(80) NOT NULL,
  `mobile_number` varchar(13) NOT NULL,
  `profile_pic` varchar(80) DEFAULT NULL,
  `otp_code` int(6) DEFAULT NULL,
  `password` varchar(80) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fullname`, `email`, `mobile_number`, `profile_pic`, `otp_code`, `password`, `date_created`) VALUES
(1, 'Justine Guillermo', 'TPAdmin1@gmail.com', '09123456789', 'd391463db6da4701e2bdb19590186e69.jpg', NULL, '$2y$10$ivjf7H6FGIL07qJmxwk9Su4QwVuBYCPIYRd5l0Q44HpU0J.lPIcSi', '2022-05-19 16:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `applied_jobs`
--

CREATE TABLE `applied_jobs` (
  `apply_id` int(11) NOT NULL,
  `post_id` int(50) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `jobseeker_id` int(10) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_applied` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applied_jobs`
--

INSERT INTO `applied_jobs` (`apply_id`, `post_id`, `employer_id`, `jobseeker_id`, `job_title`, `fullname`, `resume`, `status`, `date_applied`) VALUES
(16, 77, 45, 51, 'dasdsa', 'Sakura Miko', '482e538b75f2079efb9f18e5191b3f96.pdf', 'Pending', '2022-09-12 17:11:21');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `job_title`, `date_created`) VALUES
(2, 'Virtual Assistant', '2022-06-09 09:00:04'),
(3, 'Graphic and Multimedia', '2022-06-09 09:00:12'),
(4, 'Project Management', '2022-06-09 09:00:24'),
(5, 'Web Development', '2022-06-09 09:18:07'),
(6, 'Web Development', '2022-06-15 11:57:44'),
(8, 'fadasd', '2022-08-24 13:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `employer_id` int(10) NOT NULL,
  `employer_name` varchar(80) NOT NULL,
  `employer_position` varchar(100) NOT NULL,
  `company_name` varchar(80) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_ceo` varchar(80) NOT NULL,
  `company_size` int(10) NOT NULL,
  `company_revenue` int(10) NOT NULL,
  `industry` varchar(100) NOT NULL,
  `company_description` longtext NOT NULL,
  `contact_number` varchar(13) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_logo_name` varchar(100) NOT NULL,
  `permit_new_name` varchar(100) NOT NULL,
  `permit_original_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `otp_code` int(6) DEFAULT NULL,
  `is_verified` varchar(10) NOT NULL,
  `date_created` datetime NOT NULL,
  `qr_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`employer_id`, `employer_name`, `employer_position`, `company_name`, `company_address`, `company_ceo`, `company_size`, `company_revenue`, `industry`, `company_description`, `contact_number`, `company_email`, `company_logo_name`, `permit_new_name`, `permit_original_name`, `email`, `password`, `otp_code`, `is_verified`, `date_created`, `qr_code`) VALUES
(39, 'Kim Taehyung', 'Hiring Manager', 'Python Bite INC', 'Rm. 308 Plaza Towers, 1175 L. Guerrero Street, Ermita', '  Jones Cabrera', 30, 8000000, 'BPO', 'Python Python Python Python Python Python Python Python Python', '09151241242', 'pythonINC@gmail.com', '19ad7396be6fb8e06d8c43e6508b10ee.png', '75f49d08af6b2066bebd26a1d7dbd98e.pdf', 'DTI Permit.pdf', 'pythonINC@gmail.com', '$2y$10$sNjPWKCCIXiDO2y0GFVuGevfsSLFEX2Kgn1nuNNhBQooCMBFDNSY2', 0, '0', '2022-06-06 15:26:00', ''),
(45, 'Yuji Itadorikano', 'Web Developer', 'Jujutsu High', '2302 Chino Roces Avenue 1200 Makati City', 'Yuta Okkotsu', 50, 1700000, 'BPO', 'testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing testing', '09874957263', 'jujutsuhigh@gmail.com', 'Yuji Itadorikano - 2022.09.06 - 11.05.57am.png', '92d3d1c9124823320d6fba7438fd09bb.pdf', 'Weekly Report#2 - PANDAN, MARK ANTHONY S.pdf', 'jujutsuhigh@gmail.com', '$2y$10$sNjPWKCCIXiDO2y0GFVuGevfsSLFEX2Kgn1nuNNhBQooCMBFDNSY2', NULL, '0', '2022-07-01 01:28:27', '17d9e0c0657be3bb9b9aa45aea8a2e17.'),
(46, 'Hinata Shoyo', 'Middle Blocker', 'Karasuno', 'Iwatate, Miyagi, Japan', '  Tobio Kageyama', 1000, 1700000, 'Web Design', 'testing testing testing testing testing testing testing testing testing testing testing testing testing', '09876546371', 'karasunoteam@gmail.com', '45748d8034de966e7e2a2ebd145239ec.jpg', '45001b956e76f6d481e1f57b030594bc.pdf', 'DTI Permit Sample.pdf', 'karasunoteam@gmail.com', '$2y$10$jabg5Q9JpxQZBidcYL88feilQJw/qAG3RgkC/7kkvwoOmMb85Uw1W', 0, '0', '2022-08-05 10:43:05', '');

-- --------------------------------------------------------

--
-- Table structure for table `employer_bookmark`
--

CREATE TABLE `employer_bookmark` (
  `bookmark_id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `fullname` varchar(80) NOT NULL,
  `resume` varchar(70) NOT NULL,
  `date_applied` datetime NOT NULL,
  `date_bookmarked` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employer_recycle`
--

CREATE TABLE `employer_recycle` (
  `id` int(10) NOT NULL,
  `employer_id` int(10) NOT NULL,
  `employer_name` varchar(80) NOT NULL,
  `employer_position` varchar(100) NOT NULL,
  `company_name` varchar(80) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_ceo` varchar(80) NOT NULL,
  `company_size` int(10) NOT NULL,
  `company_revenue` int(10) NOT NULL,
  `industry` varchar(100) NOT NULL,
  `company_description` longtext NOT NULL,
  `contact_number` varchar(13) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_logo_name` varchar(100) NOT NULL,
  `permit_new_name` varchar(100) NOT NULL,
  `permit_original_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `otp_code` int(6) DEFAULT NULL,
  `is_verified` int(10) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_recycle`
--

INSERT INTO `employer_recycle` (`id`, `employer_id`, `employer_name`, `employer_position`, `company_name`, `company_address`, `company_ceo`, `company_size`, `company_revenue`, `industry`, `company_description`, `contact_number`, `company_email`, `company_logo_name`, `permit_new_name`, `permit_original_name`, `email`, `password`, `otp_code`, `is_verified`, `date_created`) VALUES
(13, 40, 'Kim Namjoon', 'CEO Secretary', 'C Sharp', 'G/F Office Warehouse Building B13, L1 E. Rodriguez Jr. Avenue, Corner Titan', ' James Bondaid', 50, 1800000, 'BPO', 'CSharp CSharp CSharp CSharp CSharp CSharp CSharp CSharp', '09151241242', 'CSharp@gmail.com', 'a28a5859e0e9f390174fd91db60e44d5.png', '0d84572ab989487ec7a2050fe462126c.pdf', 'DTI Permit.pdf', 'CSharp@gmail.com', '$2y$10$GjldgcasGydS3/dZaD1qI.2yWUR//f06uLJBQ1a4sZQH9SggCp6jS', 0, 1, '2022-06-06 15:28:37'),
(19, 36, 'Marc John Castillo', 'Main Developer', 'BTech', '18 General Capinpin Street, Barangay San Antonio, Manila', ' June Presley', 500, 160000000, 'Charity', 'Just testing, finally this part was finished Testing testing testing', '09153284124', 'Btech@gmail.com', '135a5e3b0a34a3aedb95ceab21e19bf3.png', 'fc63397f4f808ec5bc3e5856cd2daff2.pdf', 'DTI Permit.pdf', 'btechINC@gmail.com', '$2y$10$sNjPWKCCIXiDO2y0GFVuGevfsSLFEX2Kgn1nuNNhBQooCMBFDNSY2', 0, 0, '2022-06-06 15:19:03');

-- --------------------------------------------------------

--
-- Table structure for table `faq_settings`
--

CREATE TABLE `faq_settings` (
  `id` int(10) NOT NULL,
  `category` varchar(255) NOT NULL,
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq_settings`
--

INSERT INTO `faq_settings` (`id`, `category`, `question`, `answer`) VALUES
(1, 'systems', 'What is Tech-Ployment?', 'Tech-ployment is a Job Advertising platform that offers job vacancies around the country. This platform encourages people/job seekers to find job in an easy and affordable environment and strives to empower employers by making them connect to their future employees easily.'),
(2, 'application process', 'Do I need a good CV to land a job?', 'Yes, having a CV is the only method for employers to notice you. How can companies know you have the skills and abilities to accomplish the job if you don\'t have a CV? Of all, without a CV, you can\'t go about telling employers that you\'re a good fit.'),
(3, 'systems', 'What does Tech-Ployment do?', 'Tech-Ployment helps businesses and employers around the country to locate the people who seeks job find the right one that they think they are best suitable for. With the help of industry digital technology and data-driven approach, this made the platform achievable and possible.'),
(4, 'systems', 'Is searching for a job online the best job search method?', 'Because the world has progressed and anybody you could need to interact with is available online, the internet has become a key tool in today\'s employment market. Yes, looking for a job online is an effective job search approach when used in conjunction with other methods.'),
(5, 'systems', 'Does company/employers offers remote jobs?', 'Yes, company/employers offers hundreds of remote jobs across the country. You can find jobs suitable for you here in the Philippines.'),
(6, 'systems', 'How do I search jobs in TechPloyment?', 'Here is a simple way to find and search jobs in TechPloyement: - In search bar/engine - type a job title and company you want to work with -You can also type the location on which you would like to get a job in. -Click on the search button to see job offering that matches what you searched.'),
(7, 'systems', 'Is Tech-Ployment free to use?', 'Yes, it is 100% free to users such as employers and jobseekers.'),
(8, 'systems', 'Can I search Job from outside of my country?', 'Unfortunately, no. But, we are open to suggestion and very eager to upgrade the system based on the review of our users.'),
(9, 'systems', 'How can I improve my Job search results?', 'Here’s some way to improve your job search results: -Writing precise and accurate job you want to find -Ensuring that your spelling is correct and there are no typographical error -Avoid using abbreviations (e.g. Curriculum Vitae instead of CV) -Apply jobs only in your area of expertise'),
(10, 'systems', 'Do I need to pay in able to apply for jobs in Tech-Ployment?', 'No, as we have mentioned in previous FAQ, applying job here in Tech-Ployment is 100% free.'),
(11, 'systems', 'Is it possible to apply jobs without getting registered in TechPloyment?', 'Unfortunately we need you to register in able to keep tracks on your documents and for employers to process it easily'),
(12, 'systems', 'Can I apply for multiple jobs at the same time here in Tech-Ployment?', 'Yes, Tech-Ployment offers hundreds of jobs across the country and there is no problem applying multiple jobs at the same time.'),
(13, 'systems', 'Is there a limit on how many jobs I can apply for in a day or month?', 'No, there is no limit on how many jobs you can apply to but it is in the best of interest of the employers to know what you are capable of and so applying of the job suited to your skills is the best way to go.'),
(14, 'systems', 'Does Tech-Ployment have job alerts?', 'Yes, one of the main feature that Tech-Ployment offers is that it has job alerts.'),
(15, 'systems', 'What is job alerts?', 'Job alerts notify the users about job vacancies or openings depending on your field of interest'),
(16, 'systems', 'What are the benefits of job alerts? How can I receive it?', 'The biggest advantage of job alerts is that most relevant jobs based on your said expertise that are vacant or opened will be delivered right into your inbox. Which basically informs you about the job openings as soon as they are posted. You can receive it by registering and by the time you have your own account, you can choose to whether receive job alerts or not'),
(17, 'systems', 'When is the best time to look for a job?', 'Based on our recruitment knowledge and experience hosting a job board, we can tell you that the greatest time to look for work is when there aren\'t many people looking. Because many businesses are restructuring, growing, and so on, there are more job openings in January. At this time of year, there is usually a lot of competition for open positions. During the holidays, the greatest time to look for work is. Holidays, such as Christmas, are ideal times to look for work because many individuals are relaxed and eager to start looking when the new year begins.'),
(18, 'systems', 'Can I access the Tech-Ployment website in tablet or phone? (not quite sure yet)', 'Yes, Tech-Ployment is a responsive website and can be accessed with other devices as long as it has internet connection'),
(19, 'systems', 'I have more questions that are not in FAQ, how can I contact you?', 'You may contact us in ‘contact us page’ and we will answer your questions as soon as possible (Link of contact us page here!)'),
(20, 'application process', 'Can I get a job with no work experience?', 'Employers frequently seek applicants with work experience because they can do tasks quickly and efficiently. Even if you have no prior work experience, you can still find work.'),
(21, 'application process', 'Should I apply for a job if I don’t have the experience?', 'Yes, you can apply for a job even if you lack the required number of years of experience, but do so with caution. It means that if the job requires a candidate with four years of experience and you have two years of experience with the required skills, you are eligible to apply.'),
(22, 'interview', 'How do I respond to questions about salary expectations?', 'The question regarding your wage expectations will almost certainly come up during your interview, so you must be careful how you respond. Employers do not ask this question just because they want to. They ask this question to see if your salary expectations are in line with the amount they plan to pay for the role.'),
(23, 'interview', 'Should I follow up after an interview?', 'Yes, you can contact the recruiter after your interview, but be careful not to go overboard. Recruiters and employers are frequently busy, so they will not appreciate being hemmed in. Following up after the interview demonstrates your interest in the position, but don\'t bombard your potential employer with mails and phone calls. Sending daily texts and calling the recruiter can irritate the recruiter.'),
(24, 'general questions', 'How long will it take me to land a job after graduation?', 'The time it will take you to find work after graduation is uncertain because several factors influence how quickly you will find work. The earlier you receive the correct information and tools (CV, cover letter) to land a job, the better'),
(25, 'general questions', 'How much will I likely earn in my first job?', 'Gone are the days when firms published their compensation structures and when a university diploma guaranteed a high salary. The employment market nowadays is more skill-based, which implies that the more in-demand abilities you have, the more money you can make.'),
(26, 'application process', 'Can I get a job without having connections?', 'Yes, you certainly can. Even if having the correct connections can help you find a job, you can get a decent job without knowing anyone or having connections.'),
(27, 'application process', 'Can I get a job even if I don’t know the kind of job I want?', 'Yes, you can find work even if you have no idea what type of employment you want. We\'ve met numerous job searchers who don\'t know what kind of job they want to do based on our recruitment expertise over the years. If you haven\'t yet figured out what kind of work you want to pursue and you need to find one, the greatest thing you can do is volunteer or intern. To get an internship, you don\'t need require employment experience. An internship will help you to learn on the job while also allowing you to identify the type of work that you want to undertake (long term).'),
(28, 'application process', 'Can I apply for a job in person?', 'Yes, you can apply for a job in person, although this method does not work for all types of jobs. Companies now publish their positions online or hire a recruitment agency. Gone are the days when you could apply for a job in person. Many businesses conduct their hiring processes online since it allows them to streamline the process and reduce paperwork.'),
(29, 'application process', 'I have more questions that are not in FAQ, how can I contact you?', 'You may contact us in ‘contact us page’ and we will answer your questions as soon as possible (Link of contact us page here!)'),
(30, 'application process', 'How can I build a robust CV without working for a long time?', 'To have a strong CV, you don\'t have to work for years. Even if you haven\'t worked in a long time, you can still put up a strong CV that highlights why you are the best candidate for the job.'),
(31, 'application process', 'How can I make employers search for me?', 'Instead of searching for employers, you can make employers search for you. To get employers to look for you, you must make yourself visible so that you can be found readily when they are looking'),
(32, 'application process', 'How can I get only freelance/remote jobs?', 'How can I get only freelance/remote jobs?'),
(33, 'application process', 'What recruitment agency can I work with to get a job?', 'Working with a recruitment agency might also be an option when it comes to finding jobs. Using a recruiting agency can sometimes make your job hunt easier, but you must be careful which recruitment firm you select.'),
(34, 'application process', 'When should I stop searching for a job after many disappointments?', 'We understand how frustrating it can be when you try your hardest to obtain a job but nothing seems to work out. Taking a break and returning refreshed is the best thing to do at this point, given the aggravation you may be feeling. Taking a break does not imply that you must stop looking. It\'s giving yourself some space to consider your options and adjust your strategy.'),
(35, 'application process', 'How often should I update my CV?', '-If you are actively looking for work, you may need to modify your CV to the position you are applying for. This may necessitate making some minor changes to your CV. Customizing your CV for a specific job boosts your chances of landing the position. -Many people feel that if you are employed, you must update your CV at least twice a year. This will enable you to add any new talents or certificates you have obtained. -If you are unemployed and actively looking for work, you should update your CV as regularly as possible to improve your chances of being hired.'),
(36, 'application process', 'Must I follow the company I want to work for on social media?', 'No, you do not need to follow the firm you want to work for on social media; instead, you can apply for the position you want with a solid CV and cover letter. Following them on social media, on the other hand, allows you to discover more about them while also keeping you informed about career chances.'),
(37, 'application process', 'Should I use a different CV for each job application?', 'You don\'t have to use a fresh CV for each job application, especially if your CV is good. By updating what you currently have, you may easily adapt your CV to meet the job description for the position you\'re hoping to fill. If your CV isn\'t up to par, you may need to start from scratch to apply for the job you desire.'),
(38, 'application process', 'How long should my CV be?', '-The length of your CV should usually be between two and three pages. Even if there is no formal limit on the length of a CV, you don\'t want to bore your potential employer with a lengthy CV. -Making your CV two to three pages long gives you adequate room to tell your prospective employer about your work experience. -If you\'re a recent graduate with little work experience, you can condense your CV into one page. Always review the job description to build a list of the skills and experiences that are most relevant to the position.'),
(39, 'application process', 'How can I stay motivated when searching for a job?', 'We understand that looking for work may be difficult, especially when your job search results don\'t match your efforts. Even after doing everything you\'ve learnt, you still haven\'t gotten a job interview, let alone a job. A string of disappointments can make you want to give up, but you must stay motivated in order to land the job you want.'),
(40, 'application process', 'How can I track my Job applications?', 'Many job searchers continue to apply for jobs without tracking their progress. You can maintain track of your job search activity by tracking your applications. Keeping track of your job search activity will help you avoid being a victim of employment fraud.'),
(41, 'application process', 'Can I contact an employer to follow up my job application? (Interview)', 'You can only contact the employer if they have provider contact information details. If they have none or they have not provided one, you would not be able to contact them.'),
(42, 'application process', 'How soon can I expect a response once I applied for a job? (interview)', 'That depends on the employer, we are only a platform that helps job seekers find different job offerings. But, rest assured that employers will respond as soon as possible.'),
(43, 'application process', 'What are job scams? And how can I identify one?', 'Job scams are mostly: -On the spot hiring -You are asked to provide personal information -When they required you to pay in able to get the job'),
(44, 'application process', 'How can I protect myself from job scams?', 'You can protect yourself from job scams by: -Doing a research about the company -Avoid giving personal information especially you credit/debit card -Look for the reviews by other applicant about the company (Depends if we have a review feature)'),
(45, 'application process', 'How can I deal with job search frustrations?', 'Job scams are mostly: -On the spot hiring -You are asked to provide personal information -When they required you to pay in able to get the job'),
(46, 'application process', 'Why do I get rejected for a job offer?', 'When it comes to job hunting, rejection is almost always a given. The truth is that for every job interview invitation you receive, you will most likely be rejected for several more. If you\'ve been looking for a job for a long time, you might be wondering why you were turned down. Many times, you will apply for a job and not hear back. You may apply for 100 jobs and not receive a response from any of them.'),
(47, 'application process', 'How can I cope when I get rejected?', 'When it comes to job hunting, one of the baggage that comes with it is rejection. Employers may reject you even if you believe you are the ideal applicant for the job. Don\'t get discouraged or assume you\'re not good enough if you\'re rejected by an employment. It could simply mean that you need to adjust your job search strategy to appeal to the recruiter or employer with whom you want to work.'),
(48, 'interview', 'How can I be more confident during the interview?', 'It\'s reassuring to know that you\'re not the only one that gets scared during an interview. When you are outside of your comfort zone, almost everyone feels uneasy. No one is at ease during an interview. Preparing for the interview by practicing interview questions and responses is one guaranteed way to feel more at ease during the interview. You will gain confidence by practicing with your friends/family or simply in front of the mirror.'),
(49, 'interview', 'Can I take note during the interview?', '-Yes, you are permitted to take notes throughout your interview. Taking notes during the interview demonstrates that you are fascinated by some aspects of the work. Taking notes during the interview, particularly when the interviewer discusses the organization, can help you stand out. -Before you bring out your notepad or IPad to take notes during the interview, make sure you ask the interviewer if it is okay with him or her. -You are cautious if you ask for their permission before taking notes. In the sake of taking notes, you should also avoid writing down replies to interview questions. You are attempting to cheat your way through the procedure if you do so.'),
(50, 'interview', 'Does HR make the hiring decision?', 'Because firms approach recruitment in different ways, it can be difficult to tell who makes the final decision in the hiring process. Although, in most cases, recruiting choices are not made by HR managers and recruiters. They assist in the selection of the top candidates to meet with the CEO, MD, or board of directors, depending on the situation. Even if the HR manager or recruiter does not make the hiring choice, they might have an impact on the process because the CEO or MD will most likely follow their advice. This means they have the power to help or impede you gaining the job. If the CEO or Board of Directors trusts the HR manager to do a good job based on previous success, the HR manager may be able to make recruiting decisions.'),
(51, 'interview', 'How long does it take to get a job offer after the interview?', '-In terms of the time it takes to fill a vacant position, each company\'s hiring process may differ. While a small company may make an offer following an interview in a matter of hours, a larger corporation may take several days or even weeks to recruit you, depending on the number of job hopefuls that qualified for the position. -According to several company studies, it is estimated that a job offer will be made 2 to 4 weeks after the interview. -Knowing how long it will take for the employer to make you an offer will help you make better career choices. You might just ask the interviewer how soon they are willing to fill the post during your interview. -When you ask this question, you\'ll have an idea of when you\'ll hear back from the interviewer.'),
(52, 'interview', 'How can I make a great impression during the interview?', 'You must prepare ahead of time for the interview in order to make a fantastic first impression. Start preparing as soon as you receive an invitation to impress your prospective employer, rather than waiting until the day of the interview.'),
(53, 'general questions', 'How can I earn a good salary in my first job?', 'Obtaining in-demand talents that businesses seek in job prospects is one approach to earn a good wage in your first job. When it comes to negotiating a job\'s wage, learning in-demand talents like programming or video editing will give you a leg up. Targeting multi-national corporations is another way to get a decent income in your first job. If you want to work for one of these companies, you may follow them on social media to be notified when a position becomes available.'),
(54, 'general questions', 'What skills do I need to get a 6- figure job?', 'Your ability is a key determining element in obtaining a high-paying job. There are numerous in-demand abilities that might help you earn well. Acquiring a skill does not always imply good compensation; your value in a given function is determined by your proficiency.'),
(55, 'general questions', 'What skill are employers looking for in job seekers?', 'Many people think of hard talents when we discuss abilities. Employers like to hire people with specific hard talents, which is why they post job openings. Many eligible people apply for a job after it is advertised.'),
(56, 'general questions', 'What do employers want from job seekers?', 'What an employer looks for in job candidates differs depending on the type of work the job seeker seeks and who the employer deems an ideal prospect. Aside from the work requirements, there are a few characteristics that employers look for in job applicants.'),
(57, 'general questions', 'Can I get a job by sending a cold email to employers?', 'Yes, you can acquire a job by sending employers cold emails. Even though many people believe that sending cold emails to the wrong person is a dangerous job search approach, you can still obtain good employment prospects by doing so (HR manager, CEO, etc.). While some businesses frown upon job seekers sending cold emails, others view it as a sign of interest and readiness to work.');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `post_id` int(50) NOT NULL,
  `company_name` text NOT NULL,
  `job_title` text NOT NULL,
  `employment_type` text NOT NULL,
  `job_category` text NOT NULL,
  `job_description` text NOT NULL,
  `salary` varchar(255) NOT NULL,
  `employer_email` varchar(255) NOT NULL,
  `primary_skill` text NOT NULL,
  `secondary_skill` text NOT NULL,
  `postedby_uid` int(10) NOT NULL,
  `date_posted` varchar(50) NOT NULL,
  `bookmark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`post_id`, `company_name`, `job_title`, `employment_type`, `job_category`, `job_description`, `salary`, `employer_email`, `primary_skill`, `secondary_skill`, `postedby_uid`, `date_posted`, `bookmark`) VALUES
(77, 'Polytechnic University of the Philippines', 'dasdsa', 'Freelancer', 'comshop', 'dasdasdasdasdasfrger ', '15000', 'm.a.pandan26@gmail.com', '2', '3', 45, '2022-09-08 09:08:33', ''),
(78, 'Python Industries', 'Taga luto ng pancit canton', 'Full-Time', 'dasdasdsa', 'dadasdsfds ', '19000', 'pythonINC@gmail.com', '1', '3', 39, '2022-09-08 09:09:22', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost_bookmark`
--

CREATE TABLE `jobpost_bookmark` (
  `bookmark_id` int(10) NOT NULL,
  `jobpost_id` int(10) NOT NULL,
  `jobseeker_id` int(10) NOT NULL,
  `employer_id` int(10) NOT NULL,
  `job_title` text NOT NULL,
  `company_name` text NOT NULL,
  `job_description` text NOT NULL,
  `date_bookmarked` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobpost_recycler`
--

CREATE TABLE `jobpost_recycler` (
  `post_id` int(50) NOT NULL,
  `company_name` text NOT NULL,
  `job_title` text NOT NULL,
  `employment_type` text NOT NULL,
  `job_category` text NOT NULL,
  `job_description` text NOT NULL,
  `salary` varchar(255) NOT NULL,
  `employer_email` varchar(255) NOT NULL,
  `primary_skill` text NOT NULL,
  `secondary_skill` text NOT NULL,
  `postedby_uid` int(10) NOT NULL,
  `date_posted` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobpost_recycler`
--

INSERT INTO `jobpost_recycler` (`post_id`, `company_name`, `job_title`, `employment_type`, `job_category`, `job_description`, `salary`, `employer_email`, `primary_skill`, `secondary_skill`, `postedby_uid`, `date_posted`) VALUES
(18, 'Patatas', 'Peeler', 'fullTime', 'Web Development', 'Tagaluto french fries', 'PHP 1,000,000', 'patatas@potato.com', '2', '1', 36, 'Jul 08, 2022, 04:18 PM'),
(19, 'Jujutsu High', 'Coach', 'fullTime', 'Graphic and Multimedia', 'dassgsrgvsrwreghrweghrweghrwehgwe', 'PHP 1,000', 'jujutsuhigh@gmail.com', '1', '2', 45, 'Aug 02, 2022, 03:07 PM'),
(20, 'Patatas', 'Web Dev', 'fullTime', 'Virtual Assistant', 'jaja', 'PHP 4,000', 'asda@das', '2', '3', 45, 'Aug 01, 2022, 09:21 AM'),
(21, 'Jujutsu High', 'Web Developer', 'freelance', 'Web Development', 'Backend Developer', 'PHP 4,000', 'jujutsuhigh@gmail.com', '2', '3', 45, 'Jul 19, 2022, 01:44 PM'),
(22, 'Jujutsu', 'asfdsaf', 'Part-Time', 'asdfsdafsdaf', 'sdfasdfasdfsdsdafasd', '100000', 'm.a.pandan26@gmail.com', '1', '2', 45, 'Aug 24, 2022, 01:58 PM'),
(23, 'Jujutsu', 'nice tar', 'Full-Time', 'afsdafsda', 'afsdafasd', '500000', 'adasdas@gmail.com', '2', '1', 45, 'Aug 29, 2022, 11:08 AM'),
(24, 'dasdasdasd', 'Janitor', 'Full-Time', 'test test', 'Lumipat ka na ng bahay', '50000', 'markanthonypandan26@gmail.com', '1', '2', 45, 'Aug 30, 2022, 10:57 AM'),
(25, 'sad', 'asde', 'Full-Time', 'Project Management', 'Bjn', '8000', 'asda@das.his', '2', '2', 45, 'Jul 13, 2022, 03:01 PM'),
(26, '', '', '', '', '', '', '', '', '', 0, 'Jan 01, 1970, 01:00 AM'),
(27, '', '', '', '', '', '', '', '', '', 0, 'Jan 01, 1970, 01:00 AM'),
(28, 'Jujutsu High', 'Sorcerer ', 'Full-Time', 'Graphic and Multimedia', 'To kill Special Grade Curse Object', '7000', 'jujutsuhigh@gmail.com', '3', '2', 45, 'Jul 12, 2022, 10:18 AM'),
(29, 'Melham Construction Corporation', 'WE need you', 'Part-Time', 'Janitor Professor', 'adsdasdas', '10000', 'markanthonypandan26@gmail.com', '2', '1', 45, 'Aug 30, 2022, 01:13 PM'),
(30, '', '', '', '', '', '', '', '', '', 0, 'Jan 01, 1970, 01:00 AM'),
(31, '', '', '', '', '', '', '', '', '', 0, 'Jan 01, 1970, 01:00 AM'),
(32, 'Polytechnic University of the Philippines', 'TEst freelancer', 'Freelancer', 'comshop', 'dasdasdas', '15000', 'm.a.pandan26@gmail.com', '1', '1', 45, 'Aug 30, 2022, 01:14 PM'),
(33, '', '', '', '', '', '', '', '', '', 0, 'Jan 01, 1970, 01:00 AM'),
(34, '', '', '', '', '', '', '', '', '', 0, 'Jan 01, 1970, 01:00 AM'),
(35, '', '', '', '', '', '', '', '', '', 0, 'Jan 01, 1970, 01:00 AM'),
(36, 'Jujutsu High', 'Philippines', 'Full-Time', 'comshop bantay', 'fsagdfgdfgdfgdfgdfgdfgfdgdfg', '60000', 'TPAdmin1@gmail.com', '2', '3', 45, 'Sep 01, 2022, 04:06 PM'),
(37, '', '', '', '', '', '', '', '', '', 0, 'Jan 01, 1970, 01:00 AM'),
(38, '', '', '', '', '', '', '', '', '', 0, 'Jan 01, 1970, 01:00 AM'),
(39, 'Melham Construction Corporation', 'Melham Construction Corporation', 'Part-Time', 'Janitor', 'fvsafsdafasdfsadfsadfasdfasdfsadfasdfadsf', '50000', 'markanthonypandan26@gmail.com', '1', '2', 45, 'Sep 06, 2022, 10:09 AM'),
(40, '', '', '', '', '', '', '', '', '', 0, 'Jan 01, 1970, 01:00 AM'),
(41, '', '', '', '', '', '', '', '', '', 0, 'Jan 01, 1970, 01:00 AM'),
(42, 'Melham Construction Corporation', 'Testing na Melham', 'Part-Time', 'comshop bantay', 'dasdasdasdsa', '50000', 'markanthonypandan26@gmail.com', '1', '3', 45, 'Sep 06, 2022, 10:53 AM'),
(43, 'Melham Construction Corporation', 'Melham dsadasdCorporation', 'Part-Time', 'dasdasdsa', 'dasdasdasdas', '590098', 'markanthonypandan26@gmail.com', '2', '1', 39, 'Sep 06, 2022, 11:26 AM'),
(44, '', '', '', '', '', '', '', '', '', 0, 'Jan 01, 1970, 01:00 AM'),
(45, '', '', '', '', '', '', '', '', '', 0, 'Jan 01, 1970, 01:00 AM'),
(46, '', '', '', '', '', '', '', '', '', 0, 'Jan 01, 1970, 01:00 AM'),
(47, '', '', '', '', '', '', '', '', '', 0, 'Jan 01, 1970, 01:00 AM');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `jobseeker_id` int(10) NOT NULL,
  `fullname` varchar(80) NOT NULL,
  `mobile_number` varchar(13) NOT NULL,
  `profile_picture` varchar(70) DEFAULT NULL,
  `resume` varchar(70) DEFAULT NULL,
  `otp_code` int(6) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `salary` varchar(50) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `attainment` text NOT NULL,
  `hours` varchar(10) NOT NULL,
  `html` varchar(50) NOT NULL,
  `js` varchar(50) NOT NULL,
  `py` varchar(50) NOT NULL,
  `csharp` varchar(50) NOT NULL,
  `cpp` varchar(50) NOT NULL,
  `php` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL,
  `bookmarked` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`jobseeker_id`, `fullname`, `mobile_number`, `profile_picture`, `resume`, `otp_code`, `email`, `password`, `address`, `birthday`, `salary`, `experience`, `attainment`, `hours`, `html`, `js`, `py`, `csharp`, `cpp`, `php`, `date_created`, `bookmarked`) VALUES
(28, 'Kyla M. Cabantac', '09324835196', 'yes.png', 'dasdasdasdsad', 737525, 'kcm@gmail.com', '$2y$10$eHRKFNq3F7ZPt3snCbl.vubJTIrTDcCrcrr9acBZ7kjfNVkl4gkZS', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '2022-05-25 15:54:31', ''),
(29, 'Justine Guillermo', '09324835196', '', '', 737525, 'kcm@gmail.com', '$2y$10$eHRKFNq3F7ZPt3snCbl.vubJTIrTDcCrcrr9acBZ7kjfNVkl4gkZS', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '2022-05-25 15:54:31', ''),
(31, 'Ocean Frank', '09324835196', '', '', 737525, 'kcm@gmail.com', '$2y$10$eHRKFNq3F7ZPt3snCbl.vubJTIrTDcCrcrr9acBZ7kjfNVkl4gkZS', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '2022-05-25 15:54:31', ''),
(42, 'Ishigami Senku', '09123456789', NULL, NULL, 0, 'senku@gmail.com', '$2y$10$/CimPKv25bO0CXj9U6HT/eRsl86pooQ2qNQCEfeGzmHZJqrpFQ.Vy', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '2022-07-22 09:49:01', 'false'),
(43, 'Ishigami Senku', '09123456789', NULL, NULL, 0, 'senku123@gmail.com', '$2y$10$.pFfz6hDyN3X6BYIRPw4aOZOwwTSQ4OzyyA8mTw2sOaioOjgyKCGO', 'Ishigami Village', '2004-01-04', '10000', 'Scientist ', 'High School ', '8', '', '', '', '', '', '', '2022-07-25 10:05:02', ''),
(45, 'Pepe Sadge', '09123456789', '444f5d78f6e3a844109918f210755f08.png', '363e413d53bdfa07e2ba2340767dc9bb.pdf', 0, 'sadge@gmail.com', '$2y$10$2HWcAolvAR.6vDyYQGjfIu4DEeTlvTJnx4dfR86.qUEL5THwv7iNm', 'Sadgeness', '1987-12-31', '10000000', 'qwe', 'College', '20', '', '', '', '', '', '', '2022-07-27 10:57:59', ''),
(46, 'Yuuho Kitazawa', '0912345678', '80f4288d8a69f2424718b0ee85af8910.jpg', '25658e0d3f658c538833f6fe3cefa103.pdf', 0, 'yuyuuho@gmail.com', '$2y$10$5JPfWDy9aVOva7FPv1/Yy.tBVk833X8CTAiYzPfRHTPfET6hTj/eK', 'Tokyo, Japan', '1995-12-02', '1000000', 'Vocalist of thepeggies', 'College yata', '20', '', '', '', '', '', '', '2022-07-27 11:48:16', 'false'),
(51, 'Sakura Miko', '09123456789', '531a685c0630bad57340b1498a19cc86.jpeg', '482e538b75f2079efb9f18e5191b3f96.pdf', 0, 'miko@gmail.com', '$2y$10$eHRKFNq3F7ZPt3snCbl.vubJTIrTDcCrcrr9acBZ7kjfNVkl4gkZS', 'Tokyo, Japan', '2004-12-20', '1000000', 'Elite Mikochi', 'College ', '12345', 'true', 'true', 'true', 'false', 'true', 'true', '2022-07-28 11:14:15', 'true'),
(52, 'Roi Guiao', '09323243278', '585be74ede9bd2c4e4cd66a6be409158.jpg', '2fcdaf8b6ebfbec543299af0aab7ac46.pdf', 0, 'realrobert66@gmail.com', '$2y$10$GZjeDn.mQZUxF35NwhdcPej5FVoo9WJJm6J.jnHkkOqr9U3wpFC4C', 'Japan, Japan', '2000-03-22', '10000', 'testing testing testing testing testing testing testing testing testing testing testing testing ', 'Tambay', '20', 'true', 'true', 'false', 'false', 'false', 'true', '2022-08-02 14:59:56', 'false'),
(56, 'Mark Anthony S. Pandan', '09989363413', '003ce2807238dc028ac141d9ef9e8132.jpg', '4cf9ab28bccf2b6bde656aedec4b2fca.pdf', 0, 'm.a.pandan26@gmail.com', '$2y$10$JM5990xMffm7hQerqwXxtOJ6rbVLpXx8N0.LgbXmq/o8/Abstd.8y', '#155 Agosto St. Purok II, Silverio Compound', '0000-00-00', '120000', 'dsafasdfasd', 'gsdfgdf', '140', 'true', 'true', 'true', 'true', 'true', 'true', '2022-08-29 12:20:38', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_recyclebin`
--

CREATE TABLE `jobseeker_recyclebin` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(10) NOT NULL,
  `fullname` varchar(80) NOT NULL,
  `mobile_number` varchar(13) NOT NULL,
  `profile_picture` varchar(70) DEFAULT NULL,
  `resume` varchar(70) DEFAULT NULL,
  `otp_code` int(6) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobseeker_recyclebin`
--

INSERT INTO `jobseeker_recyclebin` (`id`, `jobseeker_id`, `fullname`, `mobile_number`, `profile_picture`, `resume`, `otp_code`, `email`, `password`, `date_created`) VALUES
(3, 30, 'Paul Pierce', '09324835196', '', '', 737525, 'kcm@gmail.com', '$2y$10$eHRKFNq3F7ZPt3snCbl.vubJTIrTDcCrcrr9acBZ7kjfNVkl4gkZS', '2022-05-25 15:54:31'),
(7, 41, 'Ronaldo Lagasca', '09323243278', '', '', 0, 'ronronaldo@gmail.com', '$2y$10$C/hDlD209QSiShte1ZHTAux6fk5byfpD27tPjUJSUK1moFqy5jryG', '2022-07-01 01:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `manage_resume`
--

CREATE TABLE `manage_resume` (
  `id` int(10) NOT NULL,
  `Full_name` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `Resume` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_resume`
--

INSERT INTO `manage_resume` (`id`, `Full_name`, `Email`, `Resume`) VALUES
(7, 'Roi Guiao', 'realrobert66@gmail.com', '2fcdaf8b6ebfbec543299af0aab7ac46.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(11) NOT NULL,
  `system_picture` varchar(255) NOT NULL,
  `system_name` varchar(255) NOT NULL,
  `system_tagline` longtext NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `system_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `system_picture`, `system_name`, `system_tagline`, `contact_number`, `email`, `system_description`) VALUES
(1, '80bf19dd45646d15bf97807a2771473e.png', 'Techployment', 'Employment powered by Technology.', '09898232323', 'concerns.techploymentph@gmail.com', 'Are you sick of standing in endless lines? Today, technology gives you an advantage in the job market by allowing you to apply with a single click and from the comfort of your home. Now is the time to apply! Use <strong class=\"tech\"> Tech-Ployment </strong>and get your first online job!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  ADD PRIMARY KEY (`apply_id`),
  ADD KEY `jobseeker_id3` (`jobseeker_id`),
  ADD KEY `employer_id3` (`employer_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`employer_id`);

--
-- Indexes for table `employer_bookmark`
--
ALTER TABLE `employer_bookmark`
  ADD PRIMARY KEY (`bookmark_id`),
  ADD KEY `jobseeker_id2` (`jobseeker_id`),
  ADD KEY `emploer_id2` (`employer_id`);

--
-- Indexes for table `employer_recycle`
--
ALTER TABLE `employer_recycle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_settings`
--
ALTER TABLE `faq_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `jobpost_bookmark`
--
ALTER TABLE `jobpost_bookmark`
  ADD PRIMARY KEY (`bookmark_id`),
  ADD KEY `jobseeker_id` (`jobseeker_id`),
  ADD KEY `jobpost_id` (`jobpost_id`),
  ADD KEY `employer_id` (`employer_id`);

--
-- Indexes for table `jobpost_recycler`
--
ALTER TABLE `jobpost_recycler`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`jobseeker_id`);

--
-- Indexes for table `jobseeker_recyclebin`
--
ALTER TABLE `jobseeker_recyclebin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_resume`
--
ALTER TABLE `manage_resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  MODIFY `apply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `employer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `employer_bookmark`
--
ALTER TABLE `employer_bookmark`
  MODIFY `bookmark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employer_recycle`
--
ALTER TABLE `employer_recycle`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `faq_settings`
--
ALTER TABLE `faq_settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `post_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `jobpost_bookmark`
--
ALTER TABLE `jobpost_bookmark`
  MODIFY `bookmark_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `jobpost_recycler`
--
ALTER TABLE `jobpost_recycler`
  MODIFY `post_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `jobseeker_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `jobseeker_recyclebin`
--
ALTER TABLE `jobseeker_recyclebin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manage_resume`
--
ALTER TABLE `manage_resume`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  ADD CONSTRAINT `employer_id3` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`employer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jobseeker_id3` FOREIGN KEY (`jobseeker_id`) REFERENCES `jobseeker` (`jobseeker_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_id` FOREIGN KEY (`post_id`) REFERENCES `jobpost` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employer_bookmark`
--
ALTER TABLE `employer_bookmark`
  ADD CONSTRAINT `emploer_id2` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`employer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jobseeker_id2` FOREIGN KEY (`jobseeker_id`) REFERENCES `jobseeker` (`jobseeker_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobpost_bookmark`
--
ALTER TABLE `jobpost_bookmark`
  ADD CONSTRAINT `employer_id` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`employer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jobpost_id` FOREIGN KEY (`jobpost_id`) REFERENCES `jobpost` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jobseeker_id` FOREIGN KEY (`jobseeker_id`) REFERENCES `jobseeker` (`jobseeker_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
