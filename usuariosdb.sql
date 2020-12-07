CREATE DATABASE usuariosdb;

/*CREATE TABLE*/
CREATE TABLE `usuariosdb`.`usuarios` ( 
    `ID_User` INT(11) NOT NULL AUTO_INCREMENT , 
    `nombre` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , `ap_pat` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , `ap_mat` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , `username` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL, `password` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL, PRIMARY KEY (`ID_User`), UNIQUE (`username`)) 
    ENGINE = MyISAM CHARSET=utf8 COLLATE utf8_unicode_ci;
