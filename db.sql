CREATE DATABASE DndWebsite;

CREATE TABLE baseinfo (
  BaseId int(11) NOT NULL,
  CharName varchar(30) NOT NULL,
  Class varchar(20) NOT NULL,
  Lvl int(2) NOT NULL,
  backg varchar(30) NOT NULL,
  PlayerName varchar(30) DEFAULT NULL,
  Race varchar(30) NOT NULL,
  Align varchar(2) NOT NULL,
  XP int(7) NOT NULL,
  AC int(2) NOT NULL,
  Ini int(2) NOT NULL,
  Sp int(3) NOT NULL,
  MaxHP int(4) NOT NULL,
  CurHP int(4) NOT NULL,
  HitDice varchar(5) NOT NULL,
  PassPerc int(2) NOT NULL,
  Weapons tinytext,
  Spells text,
  Extra text NOT NULL,
  CurGold int(11) NOT NULL,
  UserId int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE logindata (
  UserId int(11) NOT NULL,
  Username varchar(60) NOT NULL,
  Pwd text NOT NULL,
  PName varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE stats (
  StatId int(11) NOT NULL,
  Stre int(2) NOT NULL,
  Dex int(2) NOT NULL,
  Con int(2) NOT NULL,
  Inte int(2) NOT NULL,
  Wis int(2) NOT NULL,
  Cha int(2) NOT NULL,
  SvStr varchar(1) DEFAULT NULL,
  SvDex varchar(1) DEFAULT NULL,
  SvCon varchar(1) DEFAULT NULL,
  SvInt varchar(1) DEFAULT NULL,
  SvWis varchar(1) DEFAULT NULL,
  SvCha varchar(1) DEFAULT NULL,
  Acro varchar(2) DEFAULT NULL,
  AnHa varchar(2) DEFAULT NULL,
  Arc varchar(2) DEFAULT NULL,
  Ath varchar(2) DEFAULT NULL,
  Dece varchar(2) DEFAULT NULL,
  His varchar(2) DEFAULT NULL,
  Ins varchar(2) DEFAULT NULL,
  Intim varchar(2) DEFAULT NULL,
  Inv varchar(2) DEFAULT NULL,
  Med varchar(2) DEFAULT NULL,
  Nat varchar(2) DEFAULT NULL,
  Perc varchar(2) DEFAULT NULL,
  Perf varchar(2) DEFAULT NULL,
  Pers varchar(2) DEFAULT NULL,
  Rel varchar(2) DEFAULT NULL,
  Sli varchar(2) DEFAULT NULL,
  Ste varchar(2) DEFAULT NULL,
  Sur varchar(2) DEFAULT NULL,
  UserId int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
