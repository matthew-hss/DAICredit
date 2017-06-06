/*
SQLyog - Free MySQL GUI v5.11
Host - 5.6.17 : Database - daicredit
*********************************************************************
Server version : 5.6.17
*/

SET NAMES utf8;

SET SQL_MODE='';

create database if not exists `daicredit`;

USE `daicredit`;

/*Table structure for table `comuna` */

DROP TABLE IF EXISTS `comuna`;

CREATE TABLE `comuna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `estado_civil` */

DROP TABLE IF EXISTS `estado_civil`;

CREATE TABLE `estado_civil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `estado_solicitud` */

DROP TABLE IF EXISTS `estado_solicitud`;

CREATE TABLE `estado_solicitud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(32) NOT NULL,
  `descripcion` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `funcionario` */

DROP TABLE IF EXISTS `funcionario`;

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `apellido_paterno` varchar(64) NOT NULL,
  `apellido_materno` varchar(64) NOT NULL,
  `rut` int(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rut` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `apellido_paterno` varchar(64) NOT NULL,
  `apellido_materno` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `apellido_paterno` varchar(64) NOT NULL,
  `apellido_materno` varchar(64) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `hijo` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `direccion` varchar(128) NOT NULL,
  `estado_civil_id` int(11) NOT NULL,
  `comuna_id` int(11) NOT NULL,
  `educacion` varchar(64) NOT NULL,
  `renta` int(11) NOT NULL,
  `sueldo_liquido` int(11) NOT NULL,
  `enfermedad_cronica` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_cliente_comuna` (`comuna_id`),
  KEY `FK_cliente_estado_civil` (`estado_civil_id`),
  CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`estado_civil_id`) REFERENCES `estado_civil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`comuna_id`) REFERENCES `comuna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `solicitud` */

DROP TABLE IF EXISTS `solicitud`;

CREATE TABLE `solicitud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) NOT NULL,
  `estado_solicitud_id` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_solicitud_estado_solicitud` (`estado_solicitud_id`),
  KEY `FK_solicitud_cliente` (`cliente_id`),
  CONSTRAINT `solicitud_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`),
  CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`estado_solicitud_id`) REFERENCES `estado_solicitud` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
