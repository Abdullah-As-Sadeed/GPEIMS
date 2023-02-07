SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+06:00";
CREATE TABLE `Institution` (
  `Type` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `Content` longtext COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
CREATE TABLE `Students` (
  `ID_Number` int(10) UNSIGNED NOT NULL COMMENT 'ID Number',
  `Student_Name_English` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Student''s Name',
  `Student_Name_Bangla` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'শিক্ষার্থীর নাম',
  `Father_Name_English` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Father''s Name',
  `Father_Name_Bangla` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'পিতার নাম',
  `Mother_Name_English` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Mother''s Name',
  `Mother_Name_Bangla` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'মাতার নাম',
  `Father_Occupation` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Father''s Occupation',
  `Mother_Occupation` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Mother''s Occupation',
  `Father_Income` int(10) UNSIGNED NOT NULL COMMENT 'Father''s Annual Income (BDT)',
  `Father_Phone` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Father''s Mobile Phone Number',
  `Mother_Phone` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Mother''s Mobile Phone Number',
  `Permanent_Address` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Permanent Address',
  `Present_Address` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Present Address',
  `Date_of_Birth` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Date of Birth',
  `Gender` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Gender',
  `Religion` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Religion',
  `Nationality` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Nationality',
  `Guardian_Name` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Guardian''s Name',
  `Guardian_Phone` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Guardian''s Mobile Phone Number',
  `Guardian_Relation` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Relationship with Guardian',
  `Class_Number` text COLLATE utf8mb4_bin NOT NULL COMMENT 'Class',
  `Section` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Section',
  `Group_Name` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Group',
  `Roll_Number` int(10) UNSIGNED NOT NULL COMMENT 'Roll Number',
  `Previous_Institution` mediumtext COLLATE utf8mb4_bin NOT NULL COMMENT 'Previous Institution',
  `Previous_Class` text COLLATE utf8mb4_bin NOT NULL COMMENT 'Previous Class',
  `Status` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
ALTER TABLE `Students`
  ADD PRIMARY KEY (`ID_Number`);
ALTER TABLE `Students`
  MODIFY `ID_Number` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID Number';
