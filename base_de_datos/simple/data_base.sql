/*==============================================================*/
/* dbms name:      sybase sql anywhere 12                       */
/* created on:     5/03/2017 11:28:48 a. m.                     */
/*==============================================================*/
/*==============================================================*/
/* table: places                                                */
/*==============================================================*/
create table places
(
   id_place             integer                        not null,
   id_ubicated          integer                        null,
   name_place           char(15)                       not null,
   constraint pk_places primary key (id_place)
);

/*==============================================================*/
/* index: places_pk                                             */
/*==============================================================*/
create unique index places_pk on places (
id_place asc
);

/*==============================================================*/
/* index: locate_fk                                             */
/*==============================================================*/
create index locate_fk on places (
id_ubicated asc
);

/*==============================================================*/
/* table: sites                                                 */
/*==============================================================*/
create table sites
(
  id_site              integer                        not null,
  id_ubicated          integer                        null,
  name_site            char(20)                       not null,
  cost_site            integer                        not null,
  description_site     char(250)                      not null,
  link_image_site      char(300)                      not null,
  constraint pk_sites primary key (id_site)
);

/*==============================================================*/
/* index: sites_pk                                              */
/*==============================================================*/
create unique index sites_pk on sites (
id_site asc
);

/*==============================================================*/
/* index: reside_fk                                             */
/*==============================================================*/
create index reside_fk on sites (
id_ubicated asc
);

alter table places
  modify id_place integer not null auto_increment;
alter table sites
  modify id_site integer not null auto_increment;

alter table places
   add constraint fk_places_locate_places foreign key (id_ubicated)
      references places (id_place)
      on update restrict
      on delete restrict;

alter table sites
   add constraint fk_sites_reside_places foreign key (id_ubicated)
      references places (id_place)
      on update restrict
      on delete restrict;
