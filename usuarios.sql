/*CREATE DB*/
CREATE DATABASE usuarios;

/*CREATE TABLE*/
CREATE TABLE 'usuarios' (
    ID_User int(11) NOT NULL auto_increment,
    nombre VARCHAR(32) COLLATION utf8_unicode_ci NOT NULL,
    ap_pat VARCHAR(32) collate utf8_unicode_ci NOT NULL,
    ap_mat VARCHAR(32) collate utf8_unicode_ci NOT NULL,
    username VARCHAR(32) collate utf8_unicode_ci NOT NULL DEFAULT,
    password VARCHAR(32) collate utf8_unicode_ci NOT NULL DEFAULT,
    PRIMARY KEY('ID_User'),
    UNIQUE KEY 'username' ('username')
) ENGINE=MyISAM DEFAULT CHARSET=utf8'COLLATE=utf8_unicode_ci';