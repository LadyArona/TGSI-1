SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Turma`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Turma` (
  `tur_codigo` INT NOT NULL ,
  `tur_ano` DATE NULL ,
  `tur_semestre` TINYINT(1)  NULL ,
  `tur_descricao` VARCHAR(150) NULL ,
  `tur_situacao` TINYINT(1)  NULL ,
  `tur_data_proposta` DATE NULL ,
  PRIMARY KEY (`tur_codigo`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Usuario` (
  `usu_codigo` INT NOT NULL ,
  `usu_tipo` INT NOT NULL ,
  `usu_login` VARCHAR(100) NOT NULL ,
  `usu_senha` VARCHAR(150) NOT NULL ,
  `usu_nome` VARCHAR(150) NOT NULL ,
  `usu_email` VARCHAR(150) NOT NULL ,
  `usu_matricula` VARCHAR(100) NOT NULL ,
  `usu_situacao` TINYINT(1)  NULL ,
  PRIMARY KEY (`usu_codigo`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Categoria`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Categoria` (
  `cat_codigo` INT NOT NULL AUTO_INCREMENT ,
  `cat_descricao` VARCHAR(150) NOT NULL ,
  PRIMARY KEY (`cat_codigo`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Usuario_has_Categoria`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Usuario_has_Categoria` (
  `Usuario_idUsuario` INT NOT NULL ,
  `Categoria_idCategoria` INT NOT NULL ,
  PRIMARY KEY (`Usuario_idUsuario`, `Categoria_idCategoria`) ,
  INDEX `fk_Usuario_has_Categoria_Categoria1` (`Categoria_idCategoria` ASC) ,
  CONSTRAINT `fk_Usuario_has_Categoria_Usuario`
    FOREIGN KEY (`Usuario_idUsuario` )
    REFERENCES `mydb`.`Usuario` (`usu_codigo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_has_Categoria_Categoria1`
    FOREIGN KEY (`Categoria_idCategoria` )
    REFERENCES `mydb`.`Categoria` (`cat_codigo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`PropostaTGSI`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`PropostaTGSI` (
  `pro_codigo` INT NOT NULL ,
  `usu_aluno` INT NULL ,
  `tur_codigo` INT NULL ,
  `pro_data` DATE NULL ,
  `pro_hora` TIME NULL ,
  `pro_obs` VARCHAR(5000) NULL ,
  `pro_arquivo_nome` VARCHAR(100) NULL ,
  `pro_arquivo` LONGBLOB NULL ,
  `pro_situacao` CHAR NULL ,
  `pro_tipo` CHAR NULL COMMENT 'pro_tipo = 1, 2, 3...\nSituacao = 1, 2, 3' ,
  PRIMARY KEY (`pro_codigo`) ,
  INDEX `usu_aluno` (`usu_aluno` ASC) ,
  INDEX `tur_codigo` (`tur_codigo` ASC) ,
  CONSTRAINT `usu_aluno`
    FOREIGN KEY (`usu_aluno` )
    REFERENCES `mydb`.`Usuario` (`usu_codigo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `tur_codigo`
    FOREIGN KEY (`tur_codigo` )
    REFERENCES `mydb`.`Turma` (`tur_codigo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Banca`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Banca` (
  `ban_codigo` INT NOT NULL ,
  `ban_descricao` VARCHAR(150) NULL ,
  `Usuario_usu_codigo` INT NOT NULL ,
  PRIMARY KEY (`ban_codigo`) ,
  INDEX `fk_Banca_Usuario1` (`Usuario_usu_codigo` ASC) ,
  CONSTRAINT `fk_Banca_Usuario1`
    FOREIGN KEY (`Usuario_usu_codigo` )
    REFERENCES `mydb`.`Usuario` (`usu_codigo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Turma_Detalhe`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Turma_Detalhe` (
  `tud_codigo` INT NOT NULL ,
  `tur_codigo` INT NULL ,
  `usu_aluno` INT NULL ,
  `usu_orientador` INT NULL ,
  `usu_coorientador` INT NULL ,
  PRIMARY KEY (`tud_codigo`) ,
  INDEX `tur_codigo` (`tur_codigo` ASC) ,
  INDEX `usu_orientador` (`usu_orientador` ASC) ,
  INDEX `usu_coorientador` (`usu_coorientador` ASC) ,
  INDEX `usu_aluno` (`usu_aluno` ASC) ,
  CONSTRAINT `tur_codigo`
    FOREIGN KEY (`tur_codigo` )
    REFERENCES `mydb`.`Turma` (`tur_codigo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `usu_orientador`
    FOREIGN KEY (`usu_orientador` )
    REFERENCES `mydb`.`Usuario` (`usu_codigo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `usu_coorientador`
    FOREIGN KEY (`usu_coorientador` )
    REFERENCES `mydb`.`Usuario` (`usu_codigo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `usu_aluno`
    FOREIGN KEY (`usu_aluno` )
    REFERENCES `mydb`.`Usuario` (`usu_codigo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Banca_has_PropostaTGSI`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Banca_has_PropostaTGSI` (
  `Banca_ban_codigo` INT NOT NULL ,
  `PropostaTGSI_pro_codigo` INT NOT NULL ,
  `ban_pro_nota` DECIMAL NULL ,
  `ban_pro_descricao` VARCHAR(1000) NULL ,
  `ban_pro_local` VARCHAR(100) NULL ,
  `ban_pro_data` DATE NULL ,
  `ban_pro_hora` TIME NULL ,
  PRIMARY KEY (`Banca_ban_codigo`, `PropostaTGSI_pro_codigo`) ,
  INDEX `fk_Banca_has_PropostaTGSI_PropostaTGSI1` (`PropostaTGSI_pro_codigo` ASC) ,
  CONSTRAINT `fk_Banca_has_PropostaTGSI_Banca1`
    FOREIGN KEY (`Banca_ban_codigo` )
    REFERENCES `mydb`.`Banca` (`ban_codigo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Banca_has_PropostaTGSI_PropostaTGSI1`
    FOREIGN KEY (`PropostaTGSI_pro_codigo` )
    REFERENCES `mydb`.`PropostaTGSI` (`pro_codigo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
