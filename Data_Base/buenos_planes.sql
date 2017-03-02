/*==============================================================*/
/* DBMS name:      Sybase SQL Anywhere 12                       */
/* Created on:     1/03/2017 9:59:21 p. m.                      */
/*==============================================================*/
/*==============================================================*/
/* Table: CALIFICATIONS                                         */
/*==============================================================*/
create table CALIFICATIONS
(
   id_calification      integer                        not null,
   id_site              integer                        not null,
   calification         smallint                       not null default '1',
   constraint PK_CALIFICATIONS primary key (id_calification)
);

/*==============================================================*/
/* Index: CALIFICATIONS_PK                                      */
/*==============================================================*/
create unique index CALIFICATIONS_PK on CALIFICATIONS (
id_calification ASC
);

/*==============================================================*/
/* Index: RATINGS_FK                                            */
/*==============================================================*/
create index RATINGS_FK on CALIFICATIONS (
id_site ASC
);

/*==============================================================*/
/* Table: PLACES                                                */
/*==============================================================*/
create table PLACES
(
   id_place             integer                        not null,
   pla_id_place         integer                        null,
   name_place           char(15)                       not null,
   constraint PK_PLACES primary key (id_place)
);

/*==============================================================*/
/* Index: PLACES_PK                                             */
/*==============================================================*/
create unique index PLACES_PK on PLACES (
id_place ASC
);

/*==============================================================*/
/* Index: LOCATE_FK                                             */
/*==============================================================*/
create index LOCATE_FK on PLACES (
pla_id_place ASC
);

/*==============================================================*/
/* Table: SITES                                                 */
/*==============================================================*/
create table SITES
(
   id_site              integer                        not null,
   id_place             integer                        null,
   id_type_site         integer                        not null,
   name_site            char(20)                       not null,
   address_site         char(20)                       not null,
   constraint PK_SITES primary key (id_site)
);

/*==============================================================*/
/* Index: SITES_PK                                              */
/*==============================================================*/
create unique index SITES_PK on SITES (
id_site ASC
);

/*==============================================================*/
/* Index: RESIDE_FK                                             */
/*==============================================================*/
create index RESIDE_FK on SITES (
id_place ASC
);

/*==============================================================*/
/* Index: TYPE_FK                                               */
/*==============================================================*/
create index TYPE_FK on SITES (
id_type_site ASC
);

/*==============================================================*/
/* Table: TYPE_SITE                                             */
/*==============================================================*/
create table TYPE_SITE
(
   id_type_site         integer                        not null,
   name_type_site       char(10)                       not null,
   constraint PK_TYPE_SITE primary key (id_type_site)
);

/*==============================================================*/
/* Index: TYPE_SITE_PK                                          */
/*==============================================================*/
create unique index TYPE_SITE_PK on TYPE_SITE (
id_type_site ASC
);

ALTER TABLE CALIFICATIONS
  MODIFY id_calification integer NOT NULL AUTO_INCREMENT;
ALTER TABLE PLACES
  MODIFY id_place integer NOT NULL AUTO_INCREMENT;
ALTER TABLE SITES
  MODIFY id_site integer NOT NULL AUTO_INCREMENT;
ALTER TABLE TYPE_SITE
  MODIFY id_type_site integer NOT NULL AUTO_INCREMENT;

alter table CALIFICATIONS
   add constraint FK_CALIFICA_RATINGS_SITES foreign key (id_site)
      references SITES (id_site)
      on update restrict
      on delete restrict;

alter table PLACES
   add constraint FK_PLACES_LOCATE_PLACES foreign key (pla_id_place)
      references PLACES (id_place)
      on update restrict
      on delete restrict;

alter table SITES
   add constraint FK_SITES_RESIDE_PLACES foreign key (id_place)
      references PLACES (id_place)
      on update restrict
      on delete restrict;

alter table SITES
   add constraint FK_SITES_TYPE_TYPE_SIT foreign key (id_type_site)
      references TYPE_SITE (id_type_site)
      on update restrict
      on delete restrict;
