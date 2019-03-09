#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: admin
#------------------------------------------------------------

CREATE TABLE admin(
                    id       Int  Auto_increment  NOT NULL ,
                    password Varchar (250) NOT NULL ,
                    url_img  Varchar (250) ,
                    pseudo   Varchar (50) NOT NULL
  ,CONSTRAINT admin_AK UNIQUE (pseudo)
  ,CONSTRAINT admin_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: site_contain_text
#------------------------------------------------------------

CREATE TABLE site_contain_text(
                                title       Varchar (250) NOT NULL ,
                                text_pres_1 Longtext NOT NULL ,
                                text_pres_2 Longtext NOT NULL ,
                                text_pres_3 Longtext NOT NULL ,
                                contact_us  Longtext NOT NULL ,
                                bio         Longtext NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: site_contain_img
#------------------------------------------------------------

CREATE TABLE site_contain_img(
                               parallax_1  Varchar (250) NOT NULL ,
                               parallax_2  Varchar (250) NOT NULL ,
                               parallax_3  Varchar (250) NOT NULL ,
                               logo        Varchar (250) NOT NULL ,
                               icon_pres_1 Varchar (250) NOT NULL ,
                               icon_pres_2 Varchar (250) NOT NULL ,
                               icon_pres_3 Varchar (250) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: site_active_block
#------------------------------------------------------------

CREATE TABLE site_active_block(
                                block_pres_1 Bool NOT NULL ,
                                block_pres_2 Bool NOT NULL ,
                                block_pres_3 Bool NOT NULL
)ENGINE=InnoDB;

