create database test;

use test;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `year` int(4) NOT NULL,
  `score` int(10) NOT NULL,
  `rank` int(20) NOT NULL,
  PRIMARY KEY  (`id`)
);


CREATE TABLE `placement` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);

CREATE TABLE `rtu` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `convo` varchar(100) NOT NULL,
   `year` int(4) NOT NULL,
   `list` int(20) NOT NULL,
   `percent` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
);