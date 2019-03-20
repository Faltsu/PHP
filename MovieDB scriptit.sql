-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema MovieDB
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema MovieDB
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `MovieDB` DEFAULT CHARACTER SET utf8 ;
USE `MovieDB` ;

-- -----------------------------------------------------
-- Table `MovieDB`.`Movie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MovieDB`.`Movie` (
  `idMovie` INT NOT NULL,
  `MName` VARCHAR(45) NULL,
  `MDesc` VARCHAR(300) NULL,
  PRIMARY KEY (`idMovie`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MovieDB`.`Genre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MovieDB`.`Genre` (
  `idGenre` INT NOT NULL,
  `GName` VARCHAR(45) NULL,
  PRIMARY KEY (`idGenre`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MovieDB`.`Rating`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MovieDB`.`Rating` (
  `idRating` INT NOT NULL,
  `RRating` TINYINT(1) NOT NULL,
  `RDesc` VARCHAR(300) NULL,
  `Movie_idMovie` INT NOT NULL,
  PRIMARY KEY (`idRating`),
  CONSTRAINT `fk_Rating_Movie1`
    FOREIGN KEY (`Movie_idMovie`)
    REFERENCES `MovieDB`.`Movie` (`idMovie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MovieDB`.`Movie_has_Genre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MovieDB`.`Movie_has_Genre` (
  `idMovieFK` INT NOT NULL,
  `idGenreFK` INT NOT NULL,
  PRIMARY KEY (`idMovieFK`, `idGenreFK`),
  CONSTRAINT `fk_Movie_has_Genre_Movie1`
    FOREIGN KEY (`idMovieFK`)
    REFERENCES `MovieDB`.`Movie` (`idMovie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Movie_has_Genre_Genre1`
    FOREIGN KEY (`idGenreFK`)
    REFERENCES `MovieDB`.`Genre` (`idGenre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
