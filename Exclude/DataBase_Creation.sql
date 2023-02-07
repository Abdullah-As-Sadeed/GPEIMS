SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+06:00";

CREATE TABLE `Institution` (
  `Type` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `Content` longtext COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

INSERT INTO `Institution` (`Type`, `Content`) VALUES
('Name', 'MACS School and College'),
('Confidential', 'specialist'),
('Domain_Name', 'macsschoolandcollege.com.bd');

CREATE TABLE `Students` (
  `ID_Number` int(10) UNSIGNED NOT NULL,
  `Student_Name_English` text COLLATE utf8mb4_bin NOT NULL,
  `Student_Name_Bangla` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `Father_Name_English` text COLLATE utf8mb4_bin NOT NULL,
  `Father_Name_Bangla` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `Mother_Name_English` text COLLATE utf8mb4_bin NOT NULL,
  `Mother_Name_Bangla` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `Father_Occupation` text COLLATE utf8mb4_bin NOT NULL,
  `Mother_Occupation` text COLLATE utf8mb4_bin NOT NULL,
  `Father_Income` int(10) UNSIGNED NOT NULL,
  `Father_Phone` text COLLATE utf8mb4_bin NOT NULL,
  `Mother_Phone` text COLLATE utf8mb4_bin NOT NULL,
  `Email_Address` text COLLATE utf8mb4_bin NOT NULL,
  `Permanent_Address` longtext COLLATE utf8mb4_bin NOT NULL,
  `Present_Address` longtext COLLATE utf8mb4_bin NOT NULL,
  `Date_of_Birth` text COLLATE utf8mb4_bin NOT NULL,
  `Blood_Group` text COLLATE utf8mb4_bin NOT NULL,
  `Gender` text COLLATE utf8mb4_bin NOT NULL,
  `Religion` text COLLATE utf8mb4_bin NOT NULL,
  `Nationality` text COLLATE utf8mb4_bin NOT NULL,
  `Guardian_Name` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `Guardian_Phone` text COLLATE utf8mb4_bin NOT NULL,
  `Guardian_Relation` text COLLATE utf8mb4_bin NOT NULL,
  `Class_Number` text COLLATE utf8mb4_bin NOT NULL,
  `Section` text COLLATE utf8mb4_bin NOT NULL,
  `Group_Name` text COLLATE utf8mb4_bin NOT NULL,
  `Roll_Number` int(3) UNSIGNED NOT NULL,
  `Date_of_Admission` text COLLATE utf8mb4_bin NOT NULL,
  `Previous_Institution` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `Previous_Class` text COLLATE utf8mb4_bin NOT NULL,
  `Status` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE `Teachers` (
  `ID_Number` int(10) UNSIGNED NOT NULL,
  `Teacher_Name_English` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `Teacher_Name_Bangla` longtext COLLATE utf8mb4_bin NOT NULL,
  `Father_Name` longtext COLLATE utf8mb4_bin NOT NULL,
  `Mother_Name` longtext COLLATE utf8mb4_bin NOT NULL,
  `Mobile_Number` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `Email_Address` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `Permanent_Address` longtext COLLATE utf8mb4_bin NOT NULL,
  `Present_Address` longtext COLLATE utf8mb4_bin NOT NULL,
  `Date_of_Birth` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `Blood_Group` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `Gender` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `Religion` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `Nationality` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `NID_Number` int(30) UNSIGNED NOT NULL,
  `Date_of_Joining` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `Department` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `Title` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `Previous_Institution` longtext COLLATE utf8mb4_bin NOT NULL,
  `Status` mediumtext COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


ALTER TABLE `Students`
  ADD PRIMARY KEY (`ID_Number`);

ALTER TABLE `Teachers`
  ADD PRIMARY KEY (`ID_Number`);


ALTER TABLE `Students`
  MODIFY `ID_Number` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `Teachers`
  MODIFY `ID_Number` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

