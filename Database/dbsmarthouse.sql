-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 06-08-2015 a las 15:18:31
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `dbsmarthouse`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `casas`
-- 

CREATE TABLE `casas` (
  `IDCasa` int(11) NOT NULL auto_increment,
  `NombreCasa` varchar(80) NOT NULL,
  `Direccion` varchar(512) NOT NULL,
  `Pais` varchar(40) NOT NULL,
  `mail` varchar(60) NOT NULL,
  PRIMARY KEY  (`IDCasa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `casas`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `casasusers`
-- 

CREATE TABLE `casasusers` (
  `mail` varchar(60) NOT NULL,
  `IDCasa` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `casasusers`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `datos`
-- 

CREATE TABLE `datos` (
  `IDDato` int(11) NOT NULL auto_increment,
  `Datos` varchar(512) NOT NULL,
  `LastUpdateTime` varchar(8) NOT NULL,
  `IDModulo` int(2) NOT NULL,
  PRIMARY KEY  (`IDDato`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `datos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `modulos`
-- 

CREATE TABLE `modulos` (
  `IDModulo` int(13) NOT NULL auto_increment,
  `Tipo` varchar(40) NOT NULL,
  `IDCasa` int(11) NOT NULL,
  `Numero` int(2) NOT NULL,
  PRIMARY KEY  (`IDModulo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `modulos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `mail` varchar(60) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `apellido` varchar(70) NOT NULL,
  PRIMARY KEY  (`mail`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

