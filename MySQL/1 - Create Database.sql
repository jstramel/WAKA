/* Create 'music' database and related tables */

CREATE DATABASE music;

USE music;

CREATE TABLE artists
	(
	id int unsigned auto_increment primary key,
	name varchar(255),
	hometown varchar(255),
    country enum('US', 'UK')
	);


CREATE TABLE albums
	(
	id int unsigned auto_increment primary key,
	artist_id int,
	name varchar(255),
	released date
	);

CREATE TABLE songs
	(
	id int unsigned auto_increment primary key,
	album_id int,
	name varchar(255),
	mp3_file_location varchar(255),
	listen_count int
	);
