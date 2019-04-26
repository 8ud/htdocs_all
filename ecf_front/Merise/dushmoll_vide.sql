#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: abonnement
#------------------------------------------------------------

CREATE TABLE abonnement(
        abo_id     Int  Auto_increment  NOT NULL ,
        abonnement Varchar (10) NOT NULL ,
        prix       Int NOT NULL
	,CONSTRAINT abonnement_Idx INDEX (abonnement,prix)
	,CONSTRAINT abonnement_PK PRIMARY KEY (abo_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: utilisateurs
#------------------------------------------------------------

CREATE TABLE utilisateurs(
        user_id    Int  Auto_increment  NOT NULL ,
        login      Varchar (20) NOT NULL ,
        motdepasse Varchar (20) NOT NULL ,
        abo_id     Int NOT NULL
	,CONSTRAINT utilisateurs_Idx INDEX (login,motdepasse)
	,CONSTRAINT utilisateurs_PK PRIMARY KEY (user_id)

	,CONSTRAINT utilisateurs_abonnement_FK FOREIGN KEY (abo_id) REFERENCES abonnement(abo_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: catégories
#------------------------------------------------------------

CREATE TABLE categories(
        cat_id  Int  Auto_increment  NOT NULL ,
        nom_cat Varchar (15) NOT NULL
	,CONSTRAINT categories_Idx INDEX (nom_cat)
	,CONSTRAINT categories_PK PRIMARY KEY (cat_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: groupes
#------------------------------------------------------------

CREATE TABLE groupes(
        groupe_id  Int  Auto_increment  NOT NULL ,
        nom_groupe Varchar (15) NOT NULL ,
        cat_id     Int NOT NULL
	,CONSTRAINT groupes_Idx INDEX (nom_groupe)
	,CONSTRAINT groupes_PK PRIMARY KEY (groupe_id)

	,CONSTRAINT groupes_categories_FK FOREIGN KEY (cat_id) REFERENCES categories(cat_id)
	,CONSTRAINT groupes_categories_AK UNIQUE (cat_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Appartenir
#------------------------------------------------------------

CREATE TABLE Appartenir(
        groupe_id Int NOT NULL ,
        user_id   Int NOT NULL
	,CONSTRAINT Appartenir_PK PRIMARY KEY (groupe_id,user_id)

	,CONSTRAINT Appartenir_groupes_FK FOREIGN KEY (groupe_id) REFERENCES groupes(groupe_id)
	,CONSTRAINT Appartenir_utilisateurs0_FK FOREIGN KEY (user_id) REFERENCES utilisateurs(user_id)
)ENGINE=InnoDB;

