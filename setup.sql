-- Ludvig Liljenberg
-- 04/06/2019
-- CP 5, Section AF
--
-- This file creates a new database colordb, table colors, and populates it
-- with multiple different colors.

CREATE DATABASE IF NOT EXISTS colordb;

USE colordb;

DROP TABLE IF EXISTS colors;

CREATE TABLE colors(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255) NOT NULL,
   red SMALLINT NOT NULL,
   green SMALLINT NOT NULL,
   blue SMALLINT NOT NULL,
   PRIMARY KEY(id)
);

INSERT INTO colors(name, red, green, blue)
VALUES
  ("maroon", 128,0,0),
 	("dark red", 139,0,0),
 	("brown", 165,42,42),
 	("firebrick", 178,34,34),
 	("crimson",220,20,60),
 	("red", 255,0,0),
 	("tomato",255,99,71),
 	("coral", 255,127,80),
 	("indian red", 205,92,92),
 	("light coral", 240,128,128),
 	("dark salmon", 233,150,122),
 	("salmon", 250,128,114),
 	("light salmon", 255,160,122),
 	("orange red", 255,69,0),
 	("dark orange", 255,140,0),
 	("orange", 255,165,0),
 	("gold", 255,215,0),
 	("dark golden rod", 184,134,11),
 	("golden rod", 218,165,32),
 	("pale golden rod", 238,232,170),
 	("dark khaki", 189,183,107),
 	("khaki", 240,230,140),
 	("olive", 128,128,0),
 	("yellow", 255,255,0),
 	("yellow green", 154,205,50),
 	("dark olive green", 85,107,47),
 	("olive drab", 107,142,35),
 	("lawn green", 124,252,0),
 	("chart reuse", 127,255,0),
 	("green yellow", 173,255,47),
 	("dark green", 0,100,0),
 	("green", 0,128,0),
 	("forest green", 34,139,34),
 	("lime", 0,255,0),
 	("lime green", 50,205,50),
 	("light green", 144,238,144),
 	("pale green", 152,251,152),
 	("dark sea green", 143,188,143),
 	("medium spring green", 0,250,154),
 	("spring green", 0,255,127),
 	("sea green", 46,139,87),
 	("medium aqua marine", 102,205,170),
 	("medium sea green", 60,179,113),
 	("light sea green", 32,178,170),
 	("dark slate gray", 47,79,79),
 	("teal", 0,128,128),
 	("dark cyan", 0,139,139),
 	("aqua", 0,255,255),
 	("cyan", 0,255,255),
 	("light cyan", 224,255,255),
 	("dark turquoise", 0,206,209),
 	("turquoise", 64,224,208),
 	("medium turquoise", 72,209,204),
 	("pale turquoise", 175,238,238),
 	("aqua marine", 127,255,212),
 	("powder blue", 176,224,230),
 	("cadet blue", 95,158,160),
 	("steel blue", 70,130,180),
 	("corn flower blue", 100,149,237),
 	("deep sky blue", 0,191,255),
 	("dodger blue", 30,144,255),
  ("light blue", 173,216,230),
 	("sky blue", 135,206,235);
