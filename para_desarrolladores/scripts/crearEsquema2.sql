-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema instituciones
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `instituciones` ;

-- -----------------------------------------------------
-- Schema instituciones
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `instituciones` DEFAULT CHARACTER SET utf8 ;
USE `instituciones` ;

-- -----------------------------------------------------
-- Table `instituciones`.`areaswebok`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `instituciones`.`areaswebok` ;

CREATE TABLE IF NOT EXISTS `instituciones`.`areaswebok` (
  `id_area` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_area`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `instituciones`.`pais`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `instituciones`.`pais` ;

CREATE TABLE IF NOT EXISTS `instituciones`.`pais` (
  `id_pais` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_pais`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `instituciones`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `instituciones`.`usuario` ;

CREATE TABLE IF NOT EXISTS `instituciones`.`usuario` (
  `id_usuario` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `contrasenna` VARCHAR(45) NOT NULL,
  `es_administrador` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `instituciones`.`institucion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `instituciones`.`institucion` ;

CREATE TABLE IF NOT EXISTS `instituciones`.`institucion` (
  `id_institucion` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `telefono` VARCHAR(20) NULL,
  `correo` VARCHAR(45) NULL,
  `area` INT NOT NULL COMMENT 'area, campo o materia con la que tiene relación.',
  `url_pagina` VARCHAR(45) NOT NULL COMMENT 'dirección de la pagina de internet',
  `descripcion` VARCHAR(400) NULL,
  `url_imagen` VARCHAR(45) NULL COMMENT 'url del logo o imagen representativa de la institutción. ',
  `pais` INT NOT NULL COMMENT 'país en el que se encuentra o de origen\n',
  `autorizado` TINYINT(1) NOT NULL COMMENT 'Si el registro está autorizado para ser mostrado en la página.',
  `ultima_actualizacion` TIMESTAMP(2) NOT NULL DEFAULT NOW,
  `ultimo_en_actualizar` INT NOT NULL,
  PRIMARY KEY (`id_institucion`),
  INDEX `fk_area_idx` (`area` ASC),
  INDEX `fk_pais_idx` (`pais` ASC),
  INDEX `fk_personaactualizo_idx` (`ultimo_en_actualizar` ASC),
  CONSTRAINT `fk_area`
    FOREIGN KEY (`area`)
    REFERENCES `instituciones`.`areaswebok` (`id_area`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pais`
    FOREIGN KEY (`pais`)
    REFERENCES `instituciones`.`pais` (`id_pais`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_personaactualizo`
    FOREIGN KEY (`ultimo_en_actualizar`)
    REFERENCES `instituciones`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `instituciones`.`materia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `instituciones`.`materia` ;

CREATE TABLE IF NOT EXISTS `instituciones`.`materia` (
  `id_materia` INT NOT NULL,
  `nombre` VARCHAR(45) BINARY NOT NULL,
  `semestre` INT NOT NULL,
  `descripcion` VARCHAR(200) NULL,
  PRIMARY KEY (`id_materia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `instituciones`.`institucion_materia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `instituciones`.`institucion_materia` ;

CREATE TABLE IF NOT EXISTS `instituciones`.`institucion_materia` (
  `institucion` INT NOT NULL,
  `materia` INT NOT NULL,
  PRIMARY KEY (`institucion`, `materia`),
  INDEX `fk_institucion_idx` (`institucion` ASC),
  INDEX `fk_materia_idx` (`materia` ASC),
  CONSTRAINT `fk_institucion`
    FOREIGN KEY (`institucion`)
    REFERENCES `instituciones`.`institucion` (`id_institucion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_materia`
    FOREIGN KEY (`materia`)
    REFERENCES `instituciones`.`materia` (`id_materia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
