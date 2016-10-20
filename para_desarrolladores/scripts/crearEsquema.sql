-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`areaswebok`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`areaswebok` (
  `id_area` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_area`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pais` (
  `id_pais` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_pais`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `id_usuario` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `contrasenna` VARCHAR(45) NOT NULL,
  `es_administrador` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`institucion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`institucion` (
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
    REFERENCES `mydb`.`areaswebok` (`id_area`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pais`
    FOREIGN KEY (`pais`)
    REFERENCES `mydb`.`pais` (`id_pais`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_personaactualizo`
    FOREIGN KEY (`ultimo_en_actualizar`)
    REFERENCES `mydb`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`materia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`materia` (
  `id_materia` INT NOT NULL,
  `nombre` VARCHAR(45) BINARY NOT NULL,
  `semestre` INT NOT NULL,
  `descripcion` VARCHAR(200) NULL,
  PRIMARY KEY (`id_materia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`institucion_materia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`institucion_materia` (
  `institucion` INT NOT NULL,
  `materia` INT NOT NULL,
  PRIMARY KEY (`institucion`, `materia`),
  INDEX `fk_institucion_idx` (`institucion` ASC),
  INDEX `fk_materia_idx` (`materia` ASC),
  CONSTRAINT `fk_institucion`
    FOREIGN KEY (`institucion`)
    REFERENCES `mydb`.`institucion` (`id_institucion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_materia`
    FOREIGN KEY (`materia`)
    REFERENCES `mydb`.`materia` (`id_materia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
