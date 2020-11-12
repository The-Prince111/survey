/*
SQLyog Community Edition- MySQL GUI v5.22a
Host - 5.5.5-10.4.6-MariaDB : Database - survey_db
*********************************************************************
Server version : 5.5.5-10.4.6-MariaDB
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `survey_db`;

USE `survey_db`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `tbl_activity` */

DROP TABLE IF EXISTS `tbl_activity`;

CREATE TABLE `tbl_activity` (
  `act_id` int(5) NOT NULL AUTO_INCREMENT,
  `act_name` varchar(100) DEFAULT NULL,
  `act_description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`act_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_activity` */

insert  into `tbl_activity`(`act_id`,`act_name`,`act_description`) values (1,'eat','eat out'),(2,'movies','watch movies'),(3,'TV','watch TV'),(4,'radio','listen to the radio');

/*Table structure for table `tbl_favourite` */

DROP TABLE IF EXISTS `tbl_favourite`;

CREATE TABLE `tbl_favourite` (
  `fav_id` int(5) NOT NULL AUTO_INCREMENT,
  `per_no` int(5) NOT NULL,
  `food_id` int(5) NOT NULL,
  PRIMARY KEY (`fav_id`,`per_no`,`food_id`),
  KEY `person_ref_favourite` (`per_no`),
  KEY `food_ref_favourite` (`food_id`),
  CONSTRAINT `food_ref_favourite` FOREIGN KEY (`food_id`) REFERENCES `tbl_food` (`food_id`),
  CONSTRAINT `person_ref_favourite` FOREIGN KEY (`per_no`) REFERENCES `tbl_favourite` (`fav_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_favourite` */

insert  into `tbl_favourite`(`fav_id`,`per_no`,`food_id`) values (1,1,2),(2,1,5),(3,2,5),(4,2,6);

/*Table structure for table `tbl_food` */

DROP TABLE IF EXISTS `tbl_food`;

CREATE TABLE `tbl_food` (
  `food_id` int(5) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`food_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_food` */

insert  into `tbl_food`(`food_id`,`food_name`) values (1,'Pizza'),(2,'Pasta'),(3,'Pap and Wors'),(4,'Chicken stir fry'),(5,'Beef stir fry'),(6,'Other');

/*Table structure for table `tbl_person` */

DROP TABLE IF EXISTS `tbl_person`;

CREATE TABLE `tbl_person` (
  `per_no` int(5) NOT NULL AUTO_INCREMENT,
  `per_surname` varchar(100) DEFAULT NULL,
  `per_fullname` varchar(100) DEFAULT NULL,
  `per_contact` varchar(12) DEFAULT NULL,
  `per_date` datetime DEFAULT NULL,
  `per_age` int(3) DEFAULT NULL,
  PRIMARY KEY (`per_no`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_person` */

insert  into `tbl_person`(`per_no`,`per_surname`,`per_fullname`,`per_contact`,`per_date`,`per_age`) values (1,'Motha','Lindo Sajarr','0714606959','2020-11-05 00:00:00',23),(2,'Nkosi','Philani Fabio','0846377269','2020-11-05 00:00:00',18),(3,'Zulu','Herold','0645656890','2020-11-15 00:00:00',56),(4,'king','shez','0845626354','2020-11-16 00:00:00',12),(5,'king','shez','0845626354','2020-11-16 00:00:00',12),(6,'sipho','thwala','0714524605','2020-11-15 00:00:00',12),(7,'sipho','thwala','0714524605','2020-11-15 00:00:00',12),(8,'trazio','motha','0642515032','2020-11-16 00:00:00',9),(9,'trazio','motha','0642515032','2020-11-16 00:00:00',9),(10,'trazio','motha','0642515032','2020-11-16 00:00:00',9),(11,'trazio','motha','0642515032','2020-11-16 00:00:00',9),(12,'fabio','hessie','0719128554','2020-12-23 00:00:00',36),(13,'fabio','hessie','0719128554','2020-12-23 00:00:00',36),(14,'fabio','hessie','0719128554','2020-12-23 00:00:00',36),(15,'joel','hosan','07412501255','2020-11-15 00:00:00',35),(16,'John','Vuligate','0879076788','2020-12-12 00:00:00',35);

/*Table structure for table `tbl_preference` */

DROP TABLE IF EXISTS `tbl_preference`;

CREATE TABLE `tbl_preference` (
  `pre_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `per_no` int(5) DEFAULT NULL,
  `act_id` int(5) DEFAULT NULL,
  `pre_scale` char(2) DEFAULT NULL,
  PRIMARY KEY (`pre_id`),
  KEY `person_ref_preference` (`per_no`),
  KEY `ativity_ref_preference` (`act_id`),
  CONSTRAINT `ativity_ref_preference` FOREIGN KEY (`act_id`) REFERENCES `tbl_activity` (`act_id`),
  CONSTRAINT `person_ref_preference` FOREIGN KEY (`per_no`) REFERENCES `tbl_person` (`per_no`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_preference` */

insert  into `tbl_preference`(`pre_id`,`per_no`,`act_id`,`pre_scale`) values (1,1,1,'A'),(2,1,2,'N'),(3,1,3,'D'),(4,1,4,'SD'),(5,2,1,'SA'),(6,2,2,'SA'),(7,2,3,'N'),(8,2,4,'N');

/* Procedure structure for procedure `p_SurveyReport` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_SurveyReport` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_SurveyReport`()
BEGIN
	
	declare numSurveys int default 0;
	declare avgAge dec(10, 2) default 0;
	declare maxAge int default 0;
	declare minAge int default 0;
	declare percPizza dec(10, 2) default 0;
	declare percPasta dec(10, 2) default 0;
	declare percPapAndWors dec(10, 2) default 0;
	
	declare avgEatOut dec(10, 2) default 0;
	declare avgWatchMovies dec(10, 2)default 0;
	declare avgWatchTv dec(10, 2) default 0;
	declare avgListenToRadio dec(10, 2) default 0;
	declare totalFavs int default 0;
	select count(*) into numSurveys from tbl_person;
	/*select sum(per_age) * 1.00 / numSurveys, min(per_age), max(per_age) */
	select avg(per_age), min(per_age), max(per_age) 
	into avgAge, minAge, maxAge
	from tbl_person;	
	select count(*) into totalFavs from tbl_favourite;
	select (count(*) / totalFavs) * 100
	into percPizza
	from tbl_favourite a
	join tbl_food b
	on a.food_id = b.food_id
	where food_name = 'Pizza';
	select (count(*) / totalFavs) * 100
	into percPasta
	from tbl_favourite a
	join tbl_food b
	on a.food_id = b.food_id
	where food_name = 'Pasta';
	select (count(*) / totalFavs) * 100
	into percPapAndWors
	from tbl_favourite a
	join tbl_food b
	on a.food_id = b.food_id
	where food_name = 'Pap and Wors';
	select count(*) / 4
	into avgEatOut
	from tbl_preference a
	join tbl_activity b
	on a.act_id = b.act_id
	where act_description = 'eat out'
	and pre_scale in ('A', 'SA');
	select count(*) / 4
	into avgWatchMovies
	from tbl_preference a
	join tbl_activity b
	on a.act_id = b.act_id
	where act_description = 'watch movies'
	and pre_scale in ('A', 'SA');
	select count(*) / 4
	into avgWatchTv
	from tbl_preference a
	join tbl_activity b
	on a.act_id = b.act_id
	where act_description = 'watch TV'
	and pre_scale in ('A', 'SA');
	select count(*) / 4
	into avgListenToRadio
	from tbl_preference a
	join tbl_activity b
	on a.act_id = b.act_id
	where act_description = 'listen to the radio'
	and pre_scale in ('A', 'SA');
	
/*
select * from tbl_food
select * from tbl_favourite
select * from tbl_preference
select * from tbl_activity
*/
	select 	numSurveys as numSurveys,
		avgAge as AvgAges,
		minAge as minAge,
		maxAge as maxAge,
		percPizza as percPizza,
		percPasta as percPasta,
		percPapAndWors as percPapAndWors,
	
		avgEatOut as avgEatOut,
		avgWatchMovies as avgWatchMovies,
		avgWatchTv as avgWatchTv,
		avgListenToRadio as avgListenToRadio;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `save_survey` */

/*!50003 DROP PROCEDURE IF EXISTS  `save_survey` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `save_survey`(
 IN psnme VARCHAR(100),
 IN pfnme VARCHAR(100),
 IN pcon VARCHAR(12),
 IN pdate DATETIME,
 IN page INT(3),
 IN pfood VARCHAR(10),
 IN pnumfoo INT(3),
 IN peo CHAR(2),
 IN pwm CHAR(2),
 IN pwt CHAR(2),
 IN plr CHAR(2)
 )
BEGIN
 
 DECLARE v_per_id INT(3);
 DECLARE v_i  INT(3) DEFAULT 1;
 DECLARE v_toadd INT(3);
 
 INSERT INTO tbl_person(per_surname,per_fullname,per_contact,per_date,per_age)
 VALUES(psnme,pfnme,pcon,pdate,page);
SELECT * FROM tbl_person;
 
 SELECT MAX(per_no) INTO v_per_id FROM tbl_person;
 
 WHILE v_i <= (pnumfoo) DO
 SET v_toadd = SUBSTR(pfood,v_i,1);
 INSERT INTO tbl_favourite(per_no,food_id)
 VALUES(v_per_id,v_toadd);
 SET v_i = v_i + 1;
 END WHILE;
 
 INSERT INTO tbl_preference(per_no,act_id,pre_scale)
 VALUES(v_per_id,1,peo),(v_per_id,2,pwm),(v_per_id,3,pwt),(v_per_id,4,plr);
    
 END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
