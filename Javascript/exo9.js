var tabPays =["Afghanistan","Afrique du Sud","Albanie","Algérie","Allemagne","Andorre","Angola","Antigua-et-Barbuda","Arabie Saoudite","Argentine","Arménie","Australie","Autriche","Azerbaïdjan","Bahamas","Bahreïn","Bangladesh","Barbade","Belgique","Belize","Bénin","Bhoutan","Biélorussie","Birmanie","Bolivie","Bosnie-Herzégovine","Botswana","Brésil","Brunei","Bulgarie","Burkina Faso","Burundi","Cambodge","Cameroun","Canada","Cap-Vert","Chili","Chine","Chypre","Colombie","Comores","Congo","Corée du Nord","Corée du Sud","Costa Rica","Côte d'Ivoire","Croatie","Cuba","Danemark","Djibouti","Dominique","Egypte","Emirats Arabes Unis","Equateur","Erythrée","Espagne","Estonie","Etats-Unis","Ethiopie","Fidji","Finlande","France","Gabon","Gambie","Géorgie","Ghana","Grèce","Grenade","Guatemala","Guinée","Guinée équatoriale","Guinée-Bissau","Guyana","Haïti","Honduras","Hongrie","Île Maurice","Inde","Indonésie","Irak","Iran","Irlande","Islande","Israël","Italie","Jamaïque","Japon","Jordanie","Kazakhstan","Kenya","Kirghizistan","Kiribati","Kosovo","Koweït","Laos","Lesotho","Lettonie","Liban","Liberia","Libye","Liechtenstein","Lituanie","Luxembourg","Macédoine","Madagascar","Malaisie","Malawi","Maldives","Mali","Malte","Maroc","Marshall","Mauritanie","Mexique","Micronésie","Moldavie","Monaco","Mongolie","Monténégro","Mozambique","Namibie","Nauru","Népal","Nicaragua","Niger","Nigeria","Norvège","Nouvelle-Zélande","Oman","Ouganda","Ouzbékistan","Pakistan","Palaos","Palestine","Panama","Papouasie-Nouvelle-Guinée","Paraguay","Pays-Bas","Pérou","Philippines","Pologne","Portugal","Qatar","République Centrafricaine","République Démocratique du Congo","République Dominicaine","République Tchèque","Roumanie","Royaume-Uni","Russie","Rwanda","Saint-Kitts-et-Nevis","Saint-Marin","Saint-Vincent-et-les-Grenadines","Sainte-Lucie","Salomon","Salvador","Samoa","São Tomé et Príncipe","Sénégal","Serbie","Seychelles","Sierra Leone","Singapour","Slovaquie","Slovénie","Somalie","Soudan","Soudan du Sud","Sri Lanka","Suède","Suisse","Suriname","Swaziland","Syrie","Tadjikistan","Taïwan","Tanzanie","Tchad","Thaïlande","Timor-Oriental","Togo","Tonga","Trinité-et-Tobago","Tunisie","Turkménistan","Turquie","Tuvalu","Ukraine","Uruguay","Vanuatu","Vatican","Venezuela","Viêt Nam","Yémen","Zambie","Zimbabwe"];





var tabCapitale =["Kaboul","Pretoria","Tirana","Alger","Berlin","Andorre-la-Vieille","Luanda","Saint John's","Riyad","Buenos Aires","Erevan","Canberra","Vienne","Bakou","Nassau","Manama","Dacca","Bridgetown","Bruxelles","Belmopan","Porto-Novo","Thimbu","Minsk","Naypyidaw","Sucre","Sarajevo","Gaborone","Brasilia","Bandar Seri Begawan","Sofia","Ouagadougou","Bujumbura","Phnom Penh","Yaoundé","Ottawa","Praia","Santiago","Pékin","Nicosie","Bogota","Moroni","Brazzaville","Pyongyang","Séoul","San José","Yamoussoukro","Zagreb","La Havane","Copenhague","Djibouti","Roseau","Le Caire","Abu Dhabi","Quito","Asmara","Madrid","Tallinn","Washington","Addis-Abeba","Suva","Helsinki","Paris","Libreville","Banjul","Tbilissi","Accra","Athènes","Saint George's","Guatemala","Conakry","Malabo","Bissau","Georgetown","Port-au-Prince","Tegucigalpa","Budapest","Port Louis","New Delhi","Jakarta","Bagdad","Téhéran","Dublin","Reykjavik","Jérusalem","Rome","Kingston","Tokyo","Amman","Astana","Nairobi","Bichkek","Tarawa","Pristina","Koweït","Vientiane","Maseru","Riga","Beyrouth","Monrovia","Tripoli","Vaduz","Vilnius","Luxembourg","Skopje","Antananarivo","Kuala Lumpur","Lilongwe","Malé","Bamako","La Valette","Rabat","Majuro","Nouakchott","Mexico","Palikir","Chisinau","Monaco","Oulan-Bator","Podgorica","Maputo","Windhoek","Yaren","Katmandou","Managua","Niamey","Abuja","Oslo","Wellington","Mascate","Kampala","Tachkent","Islamabad","Melekeok","Jérusalem-Est","Panama","Port Moresby","Asunción","Amsterdam","Lima","Manille","Varsovie","Lisbonne","Doha","Bangui","Kinshasa","Saint-Domingue","Prague","Bucarest","Londres","Moscou","Kigali","Basseterre","Saint-Marin","Kingstown","Castries","Honiara","San Salvador","Apia","São Tomé","Dakar","Belgrade","Victoria","Freetown","Singapour","Bratislava","Ljubljana","Mogadiscio","Khartoum","Djouba","Sri Jayawardenapura","Stockholm","Berne","Paramaribo","Mbabane","Damas","Douchanbe","Taipei","Dodoma","N'Djamena","Bangkok","Dili","Lomé","Nukualofa","Port of Spain","Tunis","Achgabat","Ankara","Fanafuti","Kiev","Montevideo","Port-Vila","Vatican","Caracas","Hanoi","Sanaa","Lusaka","Harare"];



for(i=0;i<tabPays.length; i++){

document.write("<tr>");
   // document.write("<td>"+tabPays[i]+"</td>");
   
   // document.write("<td>"+tabCapitale[i]+"</td>");
   
   document.write("</tr>");

document.write("<tr><td>"+tabPays[i]+"</td><td>"+tabCapitale[i]+"</td></tr>");

}




//2eme version tableau


/* var liste=[];

liste["Pays"]="Capitale";
liste["Afghanistan"]="Kaboul";
liste["Afrique du Sud"]="Pretoria";
liste["Albanie"]="Tirana";
liste["Algérie"]="Alger";
liste["Allemagne"]="Berlin";
liste["Andorre"]="Andorre-la-Vieille";
liste["Angola"]="Luanda";
liste["Antigua-et-Barbuda"]="Saint John's";
liste["Arabie Saoudite"]="Riyad";
liste["Argentine"]="Buenos Aires";
liste["Arménie"]="Erevan";
liste["Australie"]="Canberra";
liste["Autriche"]="Vienne";
liste["Azerbaïdjan"]="Bakou";
liste["Bahamas"]="Nassau";
liste["Bahreïn"]="Manama";
liste["Bangladesh"]="Dacca";
liste["Barbade"]="Bridgetown";
liste["Belgique"]="Bruxelles";
liste["Belize"]="Belmopan";
liste["Bénin"]="Porto-Novo";
liste["Bhoutan"]="Thimbu";
liste["Biélorussie"]="Minsk";
liste["Birmanie"]="Naypyidaw";
liste["Bolivie"]="Sucre";
liste["Bosnie-Herzégovine"]="Sarajevo";
liste["Botswana"]="Gaborone";
liste["Brésil"]="Brasilia";
liste["Brunei"]="Bandar Seri Begawan";
liste["Bulgarie"]="Sofia";
liste["Burkina Faso"]="Ouagadougou";
liste["Burundi"]="Bujumbura";
liste["Cambodge"]="Phnom Penh";
liste["Cameroun"]="Yaoundé";
liste["Canada"]="Ottawa";
liste["Cap-Vert"]="Praia";
liste["Chili"]="Santiago";
liste["Chine"]="Pékin";
liste["Chypre"]="Nicosie";
liste["Colombie"]="Bogota";
liste["Comores"]="Moroni";
liste["Congo"]="Brazzaville";
liste["Corée du Nord"]="Pyongyang";
liste["Corée du Sud"]="Séoul";
liste["Costa Rica"]="San José";
liste["Côte d'Ivoire"]="Yamoussoukro";
liste["Croatie"]="Zagreb";
liste["Cuba"]="La Havane";
liste["Danemark"]="Copenhague";
liste["Djibouti"]="Djibouti";
liste["Dominique"]="Roseau";
liste["Egypte"]="Le Caire";
liste["Emirats Arabes Unis"]="Abu Dhabi";
liste["Equateur"]="Quito";
liste["Erythrée"]="Asmara";
liste["Espagne"]="Madrid";
liste["Estonie"]="Tallinn";
liste["Etats-Unis"]="Washington";
liste["Ethiopie"]="Addis-Abeba";
liste["Fidji"]="Suva";
liste["Finlande"]="Helsinki";
liste["France"]="Paris";
liste["Gabon"]="Libreville";
liste["Gambie"]="Banjul";
liste["Géorgie"]="Tbilissi";
liste["Ghana"]="Accra";
liste["Grèce"]="Athènes";
liste["Grenade"]="Saint George's";
liste["Guatemala"]="Guatemala";
liste["Guinée"]="Conakry";
liste["Guinée équatoriale"]="Malabo";
liste["Guinée-Bissau"]="Bissau";
liste["Guyana"]="Georgetown";
liste["Haïti"]="Port-au-Prince";
liste["Honduras"]="Tegucigalpa";
liste["Hongrie"]="Budapest";
liste["Île Maurice"]="Port Louis";
liste["Inde"]="New Delhi";
liste["Indonésie"]="Jakarta";
liste["Irak"]="Bagdad";
liste["Iran"]="Téhéran";
liste["Irlande"]="Dublin";
liste["Islande"]="Reykjavik";
liste["Israël"]="Jérusalem";
liste["Italie"]="Rome";
liste["Jamaïque"]="Kingston";
liste["Japon"]="Tokyo";
liste["Jordanie"]="Amman";
liste["Kazakhstan"]="Astana";
liste["Kenya"]="Nairobi";
liste["Kirghizistan"]="Bichkek";
liste["Kiribati"]="Tarawa";
liste["Kosovo"]="Pristina";
liste["Koweït"]="Koweït";
liste["Laos"]="Vientiane";
liste["Lesotho"]="Maseru";
liste["Lettonie"]="Riga";
liste["Liban"]="Beyrouth";
liste["Liberia"]="Monrovia";
liste["Libye"]="Tripoli";
liste["Liechtenstein"]="Vaduz";
liste["Lituanie"]="Vilnius";
liste["Luxembourg"]="Luxembourg";
liste["Macédoine"]="Skopje";
liste["Madagascar"]="Antananarivo";
liste["Malaisie"]="Kuala Lumpur";
liste["Malawi"]="Lilongwe";
liste["Maldives"]="Malé";
liste["Mali"]="Bamako";
liste["Malte"]="La Valette";
liste["Maroc"]="Rabat";
liste["Marshall"]="Majuro";
liste["Mauritanie"]="Nouakchott";
liste["Mexique"]="Mexico";
liste["Micronésie"]="Palikir";
liste["Moldavie"]="Chisinau";
liste["Monaco"]="Monaco";
liste["Mongolie"]="Oulan-Bator";
liste["Monténégro"]="Podgorica";
liste["Mozambique"]="Maputo";
liste["Namibie"]="Windhoek";
liste["Nauru"]="Yaren";
liste["Népal"]="Katmandou";
liste["Nicaragua"]="Managua";
liste["Niger"]="Niamey";
liste["Nigeria"]="Abuja";
liste["Norvège"]="Oslo";
liste["Nouvelle-Zélande"]="Wellington";
liste["Oman"]="Mascate";
liste["Ouganda"]="Kampala";
liste["Ouzbékistan"]="Tachkent";
liste["Pakistan"]="Islamabad";
liste["Palaos"]="Melekeok";
liste["Palestine"]="Jérusalem-Est";
liste["Panama"]="Panama";
liste["Papouasie-Nouvelle-Guinée"]="Port Moresby";
liste["Paraguay"]="Asunción";
liste["Pays-Bas"]="Amsterdam";
liste["Pérou"]="Lima";
liste["Philippines"]="Manille";
liste["Pologne"]="Varsovie";
liste["Portugal"]="Lisbonne";
liste["Qatar"]="Doha";
liste["République Centrafricaine"]="Bangui";
liste["République Démocratique du Congo"]="Kinshasa";
liste["République Dominicaine"]="Saint-Domingue";
liste["République Tchèque"]="Prague";
liste["Roumanie"]="Bucarest";
liste["Royaume-Uni"]="Londres";
liste["Russie"]="Moscou";
liste["Rwanda"]="Kigali";
liste["Saint-Kitts-et-Nevis"]="Basseterre";
liste["Saint-Marin"]="Saint-Marin";
liste["Saint-Vincent-et-les-Grenadines"]="Kingstown";
liste["Sainte-Lucie"]="Castries";
liste["Salomon"]="Honiara";
liste["Salvador"]="San Salvador";
liste["Samoa"]="Apia";
liste["São Tomé et Príncipe"]="São Tomé";
liste["Sénégal"]="Dakar";
liste["Serbie"]="Belgrade";
liste["Seychelles"]="Victoria";
liste["Sierra Leone"]="Freetown";
liste["Singapour"]="Singapour";
liste["Slovaquie"]="Bratislava";
liste["Slovénie"]="Ljubljana";
liste["Somalie"]="Mogadiscio";
liste["Soudan"]="Khartoum";
liste["Soudan du Sud"]="Djouba";
liste["Sri Lanka"]="Sri Jayawardenapura";
liste["Suède"]="Stockholm";
liste["Suisse"]="Berne";
liste["Suriname"]="Paramaribo";
liste["Swaziland"]="Mbabane";
liste["Syrie"]="Damas";
liste["Tadjikistan"]="Douchanbe";
liste["Taïwan"]="Taipei";
liste["Tanzanie"]="Dodoma";
liste["Tchad"]="N'Djamena";
liste["Thaïlande"]="Bangkok";
liste["Timor-Oriental"]="Dili";
liste["Togo"]="Lomé";
liste["Tonga"]="Nukualofa";
liste["Trinité-et-Tobago"]="Port of Spain";
liste["Tunisie"]="Tunis";
liste["Turkménistan"]="Achgabat";
liste["Turquie"]="Ankara";
liste["Tuvalu"]="Fanafuti";
liste["Ukraine"]="Kiev";
liste["Uruguay"]="Montevideo";
liste["Vanuatu"]="Port-Vila";
liste["Vatican"]="Vatican";
liste["Venezuela"]="Caracas";
liste["Viêt Nam"]="Hanoi";
liste["Yémen"]="Sanaa";
liste["Zambie"]="Lusaka";
liste["Zimbabwe"]="Harare";

var nb=1, classe = "";

for(pays in liste){

classe=nb%5==0?"couleur":"";
document.write("<tr class=\""+classe+"\"><td>"+pays+"</td><td>"+liste[pays]+"</td></tr>");

nb++;


} */





