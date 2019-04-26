!#17 --- [04/02/2019 à 14:41:37]#µselect count(distinct (realisateur)) from films;µ
!#18 --- [04/02/2019 à 14:44:06]#µselect count("films") from films where realisateur like "%disney%"µ
!#19 --- [04/02/2019 à 14:52:33]#µselect sum(nb) as "nbr dvds" from filmsµ
!#9 --- [04/02/2019 à 14:53:16]#µshow columns from filmsµ
!#10 --- [04/02/2019 à 14:54:16]#µselect titre from films where an = 1999µ
!#12 --- [04/02/2019 à 14:55:22]#µselect titre from films where an between 1999 and 2001 and realisateur like "nig%"µ
!#13 --- [04/02/2019 à 14:57:56]#µselect an, titre from films where an between 1950 and 1955 or an between 1960 and 1965 order by titre asc;µ
!#14 --- [04/02/2019 à 14:59:10]#µselect an, titre from films where an between 1950 and 1955 or an between 1960 and 1965 order by an desc;µ
!#15 --- [04/02/2019 à 15:01:46]#µselect count(*) from cinema.filmsµ
!#20 --- [04/02/2019 à 15:04:38]#µselect avg(prix) as "prix moyen" from filmsµ
!#21 --- [04/02/2019 à 15:24:00]#µselect prix as "ht", (prix*1.196) as "ttc", titre from films where genre like "sf%"µ
!#22 --- [04/02/2019 à 15:27:23]#µselect sum(prix*nb) as "montant stock" from filmsµ
!#23 --- [04/02/2019 à 15:40:23]#µselect titre from films where prix = (select max(prix) from films)µ
!#24 --- [04/02/2019 à 15:41:11]#µselect nb from films where prix = (select max(prix) from films)µ
!#25 --- [04/02/2019 à 15:44:56]#µselect titre, prix from films where prix order by prix desc limit 5µ
!#26 --- [04/02/2019 à 15:46:07]#µselect count(*) from films where prix = 27µ
!#27 --- [04/02/2019 à 15:49:04]#µselect count(*) from films where prix = 27 and an between "1980" and "2000"µ
!#28 --- [04/02/2019 à 15:50:09]#µselect titre from films where nb = 0µ
!#29 --- [04/02/2019 à 15:57:40]#µselect an, titre, realisateur from films where prix order by prix limit 10µ
!#30 --- [04/02/2019 à 16:16:44]#µselect titre, an, realisateur from films where nb like (select max(nb) from films)µ
!#31 --- [04/02/2019 à 16:18:25]#µselect count(distinct genre) as "nb genres" from filmsµ
!#32 --- [04/02/2019 à 16:20:18]#µselect count(*) as "prix>moy" from films where prix>(select avg(prix) from films)µ
!#34 --- [04/02/2019 à 16:32:27]#µselect avg(duree) as "duree moyenne" from filmsµ
!#35 --- [04/02/2019 à 16:34:31]#µselect sum(duree/1440) from filmsµ
!#35 --- [04/02/2019 à 16:35:03]#µselect sum(duree/1440) as "duree en jours" from filmsµ
!#36 --- [04/02/2019 à 16:41:02]#µselect (select avg(duree)  from films where an between "1950" and "1959") as "50s",  (select avg(duree) from films where an between "1980" and "1989") as "80s"µ
!#37 --- [04/02/2019 à 17:00:21]#µselect genre, count(*) as nb from films group by genre order by nb descµ
!#38 --- [04/02/2019 à 17:01:49]#µselect genre, sum(duree) as nb from films group by genre order by nb ascµ
!#39 --- [05/02/2019 à 11:19:42]#µselect count(titre) from movies<br />inner join realisateurs on fk_realid = real_id <br />inner join genre on fk_genreid = genre_id<br />where real_nom like "%disney%" or real_prenom like "%walt%" µ
!#40 --- [05/02/2019 à 11:22:09]#µselect titre from movies<br />inner join realisateurs on fk_realid = real_id where real_prenom like "yves"µ
!#41 --- [05/02/2019 à 11:27:22]#µselect genre_lib from movies<br />inner join genre on fk_genreid = genre_id where filmid =168µ
!#42 --- [05/02/2019 à 11:30:39]#µselect sum(nb) from movies<br />inner join genre on fk_genreid = genre_id where genre_lib like "jeunes"µ
!#44 --- [05/02/2019 à 12:45:51]#µselect count(titre) as qte, real_nom from movies<br />inner join realisateurs on fk_realid = real_id group by real_nom order by qte desc limit 5 µ
!#43 --- [05/02/2019 à 12:48:50]#µselect count(titre) as qte, real_nom as nom from movies<br />inner join realisateurs on fk_realid = real_id group by real_nom order by qte asc, real_nom desc limit 3µ
!#45 --- [05/02/2019 à 12:53:44]#µselect  distinct genre_lib from movies<br />inner join genre on fk_genreid = genre_id <br />inner join realisateurs on fk_realid = real_id<br />where real_nom like "%lautner%"µ
!#46 --- [05/02/2019 à 13:00:27]#µselect count(titre) as qte, real_nom from movies <br />inner join genre on fk_genreid = genre_id<br />inner join realisateurs on fk_realid = real_id where genre_lib like "horreur" group by real_nom order by qte desc limit 1µ
!#46 --- [05/02/2019 à 14:32:01]#µselect count(titre) as qte, real_nom from movies <br />inner join genre on fk_genreid = genre_id<br />inner join realisateurs on fk_realid = real_id where genre_lib like "horreur" group by real_nom order by qte desc limit 1µ
