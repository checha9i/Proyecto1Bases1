-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema basesproyecto1
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `basesproyecto1` ;

-- -----------------------------------------------------
-- Schema basesproyecto1
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `basesproyecto1` DEFAULT CHARACTER SET utf8 ;
USE `basesproyecto1` ;

-- -----------------------------------------------------
-- Table `basesproyecto1`.`cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `basesproyecto1`.`cliente` ;

CREATE TABLE IF NOT EXISTS `basesproyecto1`.`cliente` (
  `cliente_id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NULL DEFAULT NULL,
  `edad` INT(11) NULL DEFAULT NULL,
  `direccion` VARCHAR(100) NULL DEFAULT NULL,
  `telefono` INT(11) NULL DEFAULT NULL,
  `correo_e` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`cliente_id`),
  UNIQUE INDEX `cliente_id` (`cliente_id` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 21
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `basesproyecto1`.`flujo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `basesproyecto1`.`flujo` ;

CREATE TABLE IF NOT EXISTS `basesproyecto1`.`flujo` (
  `id_flujo` INT(11) NOT NULL,
  `tipo` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`id_flujo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `basesproyecto1`.`atender_cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `basesproyecto1`.`atender_cliente` ;

CREATE TABLE IF NOT EXISTS `basesproyecto1`.`atender_cliente` (
  `id_cliente` INT(11) NOT NULL,
  `flujo_id_flujo` INT(11) NOT NULL,
  `cliente_cliente_id` INT(11) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  INDEX `atender_cliente_cliente_fk` (`cliente_cliente_id` ASC),
  INDEX `atender_cliente_flujo_fk` (`flujo_id_flujo` ASC),
  CONSTRAINT `atender_cliente_cliente_fk`
    FOREIGN KEY (`cliente_cliente_id`)
    REFERENCES `basesproyecto1`.`cliente` (`cliente_id`),
  CONSTRAINT `atender_cliente_flujo_fk`
    FOREIGN KEY (`flujo_id_flujo`)
    REFERENCES `basesproyecto1`.`flujo` (`id_flujo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `basesproyecto1`.`bitacora`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `basesproyecto1`.`bitacora` ;

CREATE TABLE IF NOT EXISTS `basesproyecto1`.`bitacora` (
  `fecha` DATE NULL DEFAULT NULL,
  `detalle` VARCHAR(150) NULL DEFAULT NULL,
  `nombreUsu` VARCHAR(45) NULL DEFAULT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `basesproyecto1`.`formulario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `basesproyecto1`.`formulario` ;

CREATE TABLE IF NOT EXISTS `basesproyecto1`.`formulario` (
  `id_examen` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha` DATE NULL DEFAULT NULL,
  `NombreF` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_examen`),
  UNIQUE INDEX `id_examen` (`id_examen` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 58
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `basesproyecto1`.`pregunta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `basesproyecto1`.`pregunta` ;

CREATE TABLE IF NOT EXISTS `basesproyecto1`.`pregunta` (
  `idpregunta` INT(11) NOT NULL AUTO_INCREMENT,
  `pregunta` VARCHAR(100) NULL DEFAULT NULL,
  `respuesta` VARCHAR(100) NULL DEFAULT NULL,
  `SigPregunta` INT(11) NOT NULL,
  `SigPregunta_Mala` INT(11) NOT NULL,
  `TipoPregunta` INT(11) NOT NULL,
  `respuesta2` VARCHAR(100) NULL DEFAULT NULL,
  `respuesta3` VARCHAR(100) NULL DEFAULT NULL,
  `respuesta4` VARCHAR(100) NULL DEFAULT NULL,
  `respuesta1` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`idpregunta`),
  UNIQUE INDEX `idpregunta` (`idpregunta` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 154
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `basesproyecto1`.`detall_formulario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `basesproyecto1`.`detall_formulario` ;

CREATE TABLE IF NOT EXISTS `basesproyecto1`.`detall_formulario` (
  `formulario_id_examen` INT(11) NOT NULL AUTO_INCREMENT,
  `respuesta_id_respuesta` INT(11) NOT NULL,
  `pregunta_idpregunta` INT(11) NOT NULL,
  `nota` FLOAT NULL DEFAULT NULL,
  `cliente_cliente_id` INT(11) NOT NULL,
  UNIQUE INDEX `formulario_id_examen` (`formulario_id_examen` ASC),
  INDEX `detall_formulario_cliente_fk` (`cliente_cliente_id` ASC),
  INDEX `detall_formulario_pregunta_fk` (`pregunta_idpregunta` ASC),
  CONSTRAINT `detall_formulario_cliente_fk`
    FOREIGN KEY (`cliente_cliente_id`)
    REFERENCES `basesproyecto1`.`cliente` (`cliente_id`),
  CONSTRAINT `detall_formulario_fk`
    FOREIGN KEY (`formulario_id_examen`)
    REFERENCES `basesproyecto1`.`formulario` (`id_examen`),
  CONSTRAINT `detall_formulario_pregunta_fk`
    FOREIGN KEY (`pregunta_idpregunta`)
    REFERENCES `basesproyecto1`.`pregunta` (`idpregunta`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `basesproyecto1`.`detalle_fo_flu`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `basesproyecto1`.`detalle_fo_flu` ;

CREATE TABLE IF NOT EXISTS `basesproyecto1`.`detalle_fo_flu` (
  `formulario_id_examen` INT(11) NOT NULL,
  `flujo_id_flujo` INT(11) NOT NULL,
  INDEX `detalle_fo_flu_flujo_fk` (`flujo_id_flujo` ASC),
  INDEX `detalle_fo_flu_formulario_fk` (`formulario_id_examen` ASC),
  CONSTRAINT `detalle_fo_flu_flujo_fk`
    FOREIGN KEY (`flujo_id_flujo`)
    REFERENCES `basesproyecto1`.`flujo` (`id_flujo`),
  CONSTRAINT `detalle_fo_flu_formulario_fk`
    FOREIGN KEY (`formulario_id_examen`)
    REFERENCES `basesproyecto1`.`formulario` (`id_examen`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `basesproyecto1`.`estadocliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `basesproyecto1`.`estadocliente` ;

CREATE TABLE IF NOT EXISTS `basesproyecto1`.`estadocliente` (
  `idEstadoCliente` INT(11) NOT NULL AUTO_INCREMENT,
  `Estado` INT(11) NULL DEFAULT NULL,
  `formulario` INT(11) NULL DEFAULT NULL,
  `cliente` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idEstadoCliente`),
  INDEX `formulario_idx` (`formulario` ASC),
  CONSTRAINT `cliente`
    FOREIGN KEY (`idEstadoCliente`)
    REFERENCES `basesproyecto1`.`cliente` (`cliente_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `formulario`
    FOREIGN KEY (`formulario`)
    REFERENCES `basesproyecto1`.`formulario` (`id_examen`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `basesproyecto1`.`preguntaformulario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `basesproyecto1`.`preguntaformulario` ;

CREATE TABLE IF NOT EXISTS `basesproyecto1`.`preguntaformulario` (
  `idpreguntaformulario` INT(11) NOT NULL AUTO_INCREMENT,
  `numemro` INT(11) NOT NULL,
  `formulario_id_examen` INT(11) NOT NULL,
  `pregunta_idpregunta` INT(11) NOT NULL,
  PRIMARY KEY (`idpreguntaformulario`),
  INDEX `fk_preguntaformulario_formulario1_idx` (`formulario_id_examen` ASC),
  INDEX `fk_preguntaformulario_pregunta1_idx` (`pregunta_idpregunta` ASC),
  CONSTRAINT `fk_preguntaformulario_formulario1`
    FOREIGN KEY (`formulario_id_examen`)
    REFERENCES `basesproyecto1`.`formulario` (`id_examen`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_preguntaformulario_pregunta1`
    FOREIGN KEY (`pregunta_idpregunta`)
    REFERENCES `basesproyecto1`.`pregunta` (`idpregunta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 21
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `basesproyecto1`.`respuestacliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `basesproyecto1`.`respuestacliente` ;

CREATE TABLE IF NOT EXISTS `basesproyecto1`.`respuestacliente` (
  `Respuesta` VARCHAR(100) NOT NULL,
  `idres` INT(11) NOT NULL AUTO_INCREMENT,
  `cliente_cliente_id` INT(11) NOT NULL,
  `preguntaformulario_idpreguntaformulario` INT(11) NOT NULL,
  PRIMARY KEY (`idres`),
  INDEX `fk_respuestacliente_cliente1_idx` (`cliente_cliente_id` ASC),
  INDEX `fk_respuestacliente_preguntaformulario1_idx` (`preguntaformulario_idpreguntaformulario` ASC),
  CONSTRAINT `fk_respuestacliente_cliente1`
    FOREIGN KEY (`cliente_cliente_id`)
    REFERENCES `basesproyecto1`.`cliente` (`cliente_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_respuestacliente_preguntaformulario1`
    FOREIGN KEY (`preguntaformulario_idpreguntaformulario`)
    REFERENCES `basesproyecto1`.`preguntaformulario` (`idpreguntaformulario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 28
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `basesproyecto1`.`tipo_puesto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `basesproyecto1`.`tipo_puesto` ;

CREATE TABLE IF NOT EXISTS `basesproyecto1`.`tipo_puesto` (
  `id_puesto` INT(11) NOT NULL,
  `nombre` VARCHAR(50) NULL DEFAULT NULL,
  `tipo` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`id_puesto`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `basesproyecto1`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `basesproyecto1`.`usuario` ;

CREATE TABLE IF NOT EXISTS `basesproyecto1`.`usuario` (
  `id_usu` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NULL DEFAULT NULL,
  `dpi` INT(11) NULL DEFAULT NULL,
  `telefono` INT(11) NULL DEFAULT NULL,
  `salario` FLOAT NULL DEFAULT NULL,
  `tipo_puesto_id_puesto` INT(11) NOT NULL,
  `email` VARCHAR(50) NULL DEFAULT NULL,
  `contrasenia` VARCHAR(50) NULL DEFAULT NULL,
  `Apellido` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`id_usu`),
  UNIQUE INDEX `id_usu` (`id_usu` ASC),
  INDEX `usuario_tipo_puesto_fk` (`tipo_puesto_id_puesto` ASC),
  CONSTRAINT `usuario_tipo_puesto_fk`
    FOREIGN KEY (`tipo_puesto_id_puesto`)
    REFERENCES `basesproyecto1`.`tipo_puesto` (`id_puesto`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
