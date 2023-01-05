drop database if exists mlr4;

create database if not exists mlr4;
use mlr4;
# -----------------------------------------------------------------------------
#       table : matiere
# -----------------------------------------------------------------------------

create table if not exists matiere
 (
   id_matiere integer(2) auto_increment  ,
   intitule varchar(128) null  
   , primary key (id_matiere) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : specialite
# -----------------------------------------------------------------------------

create table if not exists specialite
 (
   id_specialite integer(2) auto_increment  ,
   id_filiere integer(2) not null  ,
   intitule varchar(128) null  
   , primary key (id_specialite) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       index de la table specialite
# -----------------------------------------------------------------------------


create  index i_fk_specialite_filiere
     on specialite (id_filiere asc);

# -----------------------------------------------------------------------------
#       table : classe
# -----------------------------------------------------------------------------

create table if not exists classe
 (
   id_classe integer(2) auto_increment  ,
   id_niveau integer(2) not null  ,
   id_specialite integer(2) not null  ,
   intitule varchar(128) null  
   , primary key (id_classe) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       index de la table classe
# -----------------------------------------------------------------------------


create  index i_fk_classe_niveau
     on classe (id_niveau asc);

create  index i_fk_classe_specialite
     on classe (id_specialite asc);

# -----------------------------------------------------------------------------
#       table : salle
# -----------------------------------------------------------------------------

create table if not exists salle
 (
   id_salle integer(2) auto_increment  ,
   intitule varchar(128) null  
   , primary key (id_salle) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : emploi
# -----------------------------------------------------------------------------

create table if not exists emploi
 (
   id_emploi integer(2) auto_increment  ,
   id_matiere integer(2) not null  ,
   id_salle integer(2) not null  ,
   id_users integer(2) not null  ,
   semaine varchar(128) null  ,
   jour varchar(128) null  ,
   horaire varchar(128) null  
   , primary key (id_emploi) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       index de la table emploi
# -----------------------------------------------------------------------------


create  index i_fk_emploi_matiere
     on emploi (id_matiere asc);

create  index i_fk_emploi_salle
     on emploi (id_salle asc);

create  index i_fk_emploi_users
     on emploi (id_users asc);

# -----------------------------------------------------------------------------
#       table : niveau
# -----------------------------------------------------------------------------

create table if not exists niveau
 (
   id_niveau integer(2) auto_increment  ,
   intitule varchar(128) null  
   , primary key (id_niveau) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : users
# -----------------------------------------------------------------------------

create table if not exists users
 (
   id_users integer(2) auto_increment  ,
   nom varchar(128) null  ,
   prenom varchar(128) null  ,
   login varchar(128) null  ,
   password varchar(128) null  ,
   role varchar(128) null  
   , primary key (id_users) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : filiere
# -----------------------------------------------------------------------------

create table if not exists filiere
 (
   id_filiere integer(2) auto_increment  ,
   intitule varchar(128) null  
   , primary key (id_filiere) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : enseignant
# -----------------------------------------------------------------------------

create table if not exists enseignant
 (
   id_enseignant integer(2) auto_increment  ,
   nom varchar(128) null  ,
   prenom varchar(128) null  ,
   sexe varchar(128) null  ,
   telephone varchar(128) null  ,
   email varchar(128) null  
   , primary key (id_enseignant) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       table : annee_scolaire
# -----------------------------------------------------------------------------

create table if not exists annee_scolaire
 (
   id_matiere integer(2) auto_increment  ,
   id_enseignant integer(2) not null  ,
   id_annee integer(2) null  ,
   intitule varchar(128) null  
   , primary key (id_matiere,id_enseignant) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       index de la table annee_scolaire
# -----------------------------------------------------------------------------


create  index i_fk_annee_scolaire_matiere
     on annee_scolaire (id_matiere asc);

create  index i_fk_annee_scolaire_enseignant
     on annee_scolaire (id_enseignant asc);

# -----------------------------------------------------------------------------
#       table : contenir
# -----------------------------------------------------------------------------

create table if not exists contenir
 (
   id_classe integer(2) auto_increment  ,
   id_matiere integer(2) not null  
   , primary key (id_classe,id_matiere) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       index de la table contenir
# -----------------------------------------------------------------------------


create  index i_fk_contenir_classe
     on contenir (id_classe asc);

create  index i_fk_contenir_matiere
     on contenir (id_matiere asc);


# -----------------------------------------------------------------------------
#       creation des references de table
# -----------------------------------------------------------------------------


alter table specialite 
  add foreign key fk_specialite_filiere (id_filiere)
      references filiere (id_filiere) ;


alter table classe 
  add foreign key fk_classe_niveau (id_niveau)
      references niveau (id_niveau) ;


alter table classe 
  add foreign key fk_classe_specialite (id_specialite)
      references specialite (id_specialite) ;


alter table emploi 
  add foreign key fk_emploi_matiere (id_matiere)
      references matiere (id_matiere) ;


alter table emploi 
  add foreign key fk_emploi_salle (id_salle)
      references salle (id_salle) ;


alter table emploi 
  add foreign key fk_emploi_users (id_users)
      references users (id_users) ;


alter table annee_scolaire 
  add foreign key fk_annee_scolaire_matiere (id_matiere)
      references matiere (id_matiere) ;


alter table annee_scolaire 
  add foreign key fk_annee_scolaire_enseignant (id_enseignant)
      references enseignant (id_enseignant) ;


alter table contenir 
  add foreign key fk_contenir_classe (id_classe)
      references classe (id_classe) ;


alter table contenir 
  add foreign key fk_contenir_matiere (id_matiere)
      references matiere (id_matiere) ;

