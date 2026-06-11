# marktplaatsD1C

## README - Marktplaats voor de $up€r Rich 💰 ✨
Dit is de officiële en uitgebreide repository van Groep 4 voor het onderwijsproject "Marktplaats voor de $up€r Rich" (p. 1). In opdracht van de fictieve enterprise Wealth Creators realiseren wij een uiterst exclusief, dynamisch webplatform dat specifiek is ontworpen voor de absolute wereldtop: de Super Rich (p. 1).
Het platform fungeert als een high-end, zwaar beveiligde etalage en veilingsite voor zeldzame activa zoals op maat gemaakte megajachten, hypercars, minimalistische designvilla's, gepersonaliseerde helikopters en haute joaillerie (p. 1). Omdat de doelgroep extreme eisen stelt aan esthetiek, privacy en exclusiviteit, weerspiegelt dit project de absolute standaarden van modern responsive design, vlekkeloze database-architectuur en waterdichte validatie.
------------------------------
## 👥 Uitgebreide Teamstructuur & Rolverdeling (Groep 4)
Ons team bestaat uit vier specialisten die nauw samenwerken volgens de Agile/Scrum-methodiek om de voortgang strak te bewaken conform de kerndoelen van de opleiding (pp. 7, 10).

* Justin — Lead Backend Developer & Database Architect
* Verantwoordelijkheden: Ontwerpen van het Entity Relationship Diagram (ERD), opstellen van de Data Dictionary, opzetten en beheren van de SQLite-databaseomgeving, schrijven van complexe SQL-queries voor data-extractie en het bouwen van de server-side logica voor het authenticatiesysteem (pp. 7-8).
* Gijs — Lead Frontend Developer & UI/UX Designer
* Verantwoordelijkheden: Vertalen van de high-end moodboards naar interactieve prototypes, bewaken van de visuele identiteit (geïnspireerd op merken als Apple, Omega en Bugatti), realiseren van een volledig responsive CSS/SASS-architectuur en het bouwen van de geavanceerde productshowcases (pp. 1, 6-7).
* Brayston — Security Specialist & Form Validation Engineer
* Verantwoordelijkheden: Beveiligen van het bied- en contactformulier tegen SQL-injecties, Cross-Site Scripting (XSS) en frauduleuze invoer, implementeren van server-side checks voor de minimale bod-limieten en het opstellen van het uiteindelijke testrapport (p. 7).
* Kyano — Full-stack Developer, QA Engineer & Git Master
* Verantwoordelijkheden: Beheren van de Git-repository (branching-strategie, merge requests), integreren van frontend-componenten met de SQLite-backend, uitvoeren van code-reviews, bijhouden van het projectlogboek en bewaken van de codekwaliteit (pp. 7, 10).

------------------------------
## 📖 Uitgebreide Projectomschrijving & Strategische Doelen
Het bedrijf Wealth Creators is gespecialiseerd in het hogere segment van de luxemarkt (p. 1). De eigenaar heeft de uitdrukkelijke wens neergelegd om een dynamische website te laten bouwen die fungeert als hét centrale handelskanaal voor multimiljardairs (p. 1).
Binnen dit project staat het begrip "dynamisch" centraal: alle getoonde productdata, gebruikersaccounts, unieke producteigenschappen, berichten en uitgebrachte biedingen worden in real-time verwerkt via een relationele SQLite-database (pp. 1, 7). Statische placeholder-HTML of handmatig 'gefeekte' content is binnen deze applicatie strikt verboden (p. 7).
## Strategische Hoofddoelen:

   1. Visuele Superioriteit: De website moet direct de sfeer van extreme luxe en minimalisme uitstralen (pp. 7-8). Er wordt gebruikgemaakt van royale witruimtes, hoogwaardige cinematografische media en vloeiende interactieve overgangen (pp. 2-3).
   2. Transactiebeveiliging: Aangezien er met astronomische bedragen wordt gewerkt, moet de integriteit van elk uitgebracht bod 100% gegarandeerd zijn (p. 7).
   3. Gebruikerservaring (UX): De interface moet intuïtief en frictieloos zijn, zodat potentiële kopers moeiteloos door categorieën navigeren, showcases bekijken en direct in contact treden met de aanbieder (pp. 1, 7).

------------------------------
## 🛠️ Technische Stack & Architectuurkeuzes
Om een performante en lichtgewicht applicatie te bouwen die perfect aansluit op de projectvoorwaarden, is gekozen voor de volgende technologieën:

* Frontend-laag:
* HTML5 & SASS/CSS3: Opgebouwd volgens een modulaire structuur (BEM-methodiek) om een volledig responsive gedrag te garanderen op zowel Ultra-Wide monitors, laptops, tablets als smartphones (p. 7).
   * Vanilla JavaScript (ES6+): Voor het realiseren van asynchrone interacties (AJAX/Fetch API) bij het indienen van biedingen en het inladen van dynamische showcase-elementen zonder pagina-reloads.
* Backend-laag:
* Server-side runtime: Een robuuste serveromgeving die verantwoordelijk is voor de sessiebeveiliging, routing, invoervalidatie en de communicatie met de database.
* Databaselaag:
* SQLite3: Gekozen vanwege zijn bestandgebaseerde efficiëntie, betrouwbaarheid en naadloze integratie. SQLite fungeert als de Single Source of Truth voor alle entiteiten binnen de applicatie (gebruikers, producten, biedingen en conversaties) (pp. 1, 7).

------------------------------
## 🌟 Diepgaande Functionele Specificaties
De applicatie is modulair opgebouwd en bevat de volgende functionele kerncomponenten die direct gekoppeld zijn aan de SQLite-database (p. 7):
## 1. Robust Authenticatie- en Autorisatiesysteem (Login)

* Gebruikersregistratie: Nieuwe gebruikers kunnen een account aanmaken. Wachtwoorden worden via een veilig hashing-algoritme versleuteld voordat ze in de database worden opgeslagen.
* Sessiebeheer: Alleen ingelogde gebruikers hebben het recht om daadwerkelijk gecertificeerde biedingen te plaatsen en hun persoonlijke berichtengeschiedenis in te zien (pp. 1, 7).
* Gebruikersrollen: Onderscheid in de database tussen reguliere potentiële kopers en beheerders/eigenaren van de producten.

## 2. Dynamische Productcatalogus (Overzichtspagina)

* Categorie-filtering: Producten worden overzichtelijk gecategoriseerd (o.a. Mansions, Timepieces, Marine, Aviation, Jewelry, Hypercars) (pp. 1, 7).
* Real-time Data Retrieval: De catalogus genereert de productkaarten dynamisch op basis van de actuele voorraadstatus en prijzen in de SQLite-database.
* Deep Linking: Elke productkaart linkt direct door naar een unieke, dynamisch gegenereerde showcasepagina via unieke ID-parameters (p. 1).

## 3. High-End Interactieve Showcasepagina's

* Visuele Tour: Geïnspireerd op de productpagina's van Apple en Omega bevat elke showcasepagina een interactieve sectie (zoals een virtuele tour of scroll-triggered animaties) waarin de unieke, exclusieve eigenschappen van het specifieke luxeproduct worden uitgelicht (p. 1).
* Productspecificaties: Gedetailleerde weergave van technische data, herkomst en de huidige status van het object, rechtstreeks uitgelezen uit de data dictionary-tabellen (p. 7).

## 4. Zwaar Beveiligd Bied- & Contactformulier

* Server-side Validatie: Elk product heeft in de database een specifiek minimal_bid (minimaal bod) (p. 7). Het systeem weigert elk bod dat onder deze drempelwaarde ligt onmiddellijk met een duidelijke foutmelding (p. 7).
* Anti-Fraude & Sanitization: Alle invoervelden worden aan de serverzijde geschoond (sanitization) om kwaadaardige code of onzinnige tekstuele invoer te blokkeren (p. 7).
* Verplicht Bericht: Elk bod moet verplicht worden voorzien van een motivatie of persoonlijke opmerking gericht aan de verkoper (bijvoorbeeld: "Beste K4nye, is de gouden Applewatch nog te koop?") (p. 1).

## 5. Gepersonaliseerd Berichten- en Biedingenoverzicht

* User Dashboard: Een afgeschermde overzichtspagina waar de ingelogde koper in één oogopslag al zijn uitgebrachte biedingen en de status daarvan kan inzien (pp. 1, 7).
* Berichtengeschiedenis: Toont de realtime verzonden berichten en eventuele antwoorden van de producteigenaar, live opgehaald uit de SQLite-relatietabellen (pp. 1, 7).

------------------------------
## 🗄️ Database Architectuur (SQLite Relational Design)
Het Technisch Ontwerp bevat een volledig uitgewerkt Entity Relationship Diagram (ERD) en een bijbehorende Data Dictionary (p. 7). De database is genormaliseerd en maakt gebruik van referentiële integriteit met vreemde sleutels (Foreign Keys):

* users (Tabel)
* Slaat de unieke gebruikersgegevens op.
   * Velden: user_id (PK), username, email, password_hash, role, created_at.
* products (Tabel)
* Beheert de exclusieve luxeproducten in de verkoop.
   * Velden: product_id (PK), title, description, category, image_url, showcase_data, minimal_bid, status, owner_id (FK -> users).
* bids (Tabel)
* Registreert de dynamische interactie tussen kopers en de producten.
   * Velden: bid_id (PK), product_id (FK -> products), user_id (FK -> users), bid_amount, message_text, timestamp (p. 1).

------------------------------
## 🗓️ Projectfasering & Strategische Planning
Het project is strak ingedeeld over een tijdlijn van 7 weken, opgebouwd uit vijf kritieke fasen om een vlekkeloze oplevering te garanderen (pp. 8-9):
## Fase 1: Onderzoek & Ontwerp (Doorlooptijd: 1 week)

* Activiteiten: Grondig marktonderzoek naar bestaande luxemerken en hun web-opbouw (moodboard-creatie) (pp. 8-9). Opstellen van de functionele wireframes voor desktop en mobiel (p. 8). Technisch ontwerpen van de database (ERD en Data Dictionary) (p. 8). Toepassen van de MoSCoW-methode voor scope-bepaling en het schrijven van de User Stories (pp. 7-8).
* Resultaat: Een volledig, door de docent goedgekeurd Projectplan inclusief alle deliverables (pp. 7-9).

## Fase 2: Prototyping (Doorlooptijd: 1 week)

* Activiteiten: Het vertalen van de wireframes naar een high-fidelity visueel UI-ontwerp (p. 8). Definiëren van micro-interacties, transities en animatiestijlen (p. 8).
* Resultaat: Presentatie van de interactieve prototypes aan de docent/opdrachtgever ter accordering (pp. 8-9).

## Fase 3: Creatie & Ontwikkeling (Doorlooptijd: 3 weken)

* Activiteiten: Het daadwerkelijk opzetten en programmeren van de applicatie (p. 8). Dit omvat het inrichten van de SQLite-database, het bouwen van de responsive frontend-sjablonen en het implementeren van de server-side validatielogica en security-checks (pp. 7-8).
* Resultaat: Een volledig functionerende, onderscheidende en dynamische webapplicatie (pp. 7, 9).

## Fase 4: Implementatie & Oplevering (Doorlooptijd: 1 week)

* Activiteiten: Grondig testen van alle functionaliteiten (inloggen, registreren, foutieve biedingen plaatsen) en het vastleggen van de resultaten in het Testrapport (pp. 7-8). De applicatie live uploaden naar de toegewezen FTP-serveromgeving (pp. 8-9).
* Resultaat: Eindpresentatie van het werkende product aan de opdrachtgever (pp. 8-9).

## Fase 5: Feedback & Evaluatie (Doorlooptijd: 1 week)

* Activiteiten: Verwerken van de ontvangen feedback van de docenten en de opdrachtgever (pp. 8-9). Het opstellen van een individueel en groepsbreed reflectieverslag en het sluiten van het projectlogboek (pp. 7-8).
* Resultaat: Een definitief Evaluatieverslag (pp. 8-9).

------------------------------
## 🎯 Onderwijskundige Normering & Werkprocessen
Dit project is direct gekoppeld aan de officiële beoordelingscriteria van de opleiding en toont onze bekwaamheid aan binnen de volgende werkprocessen (p. 10):

   1. B1-K1-W1: Plant werkzaamheden en bewaakt de voortgang
   * Bewijs: Onze strakke planning in het projectplan, de MoSCoW-analyse en de wekelijkse sprints (pp. 7, 10).
   2. B1-K1-W2: Ontwerpt software
   * Bewijs: De aanwezigheid van functionele wireframes, een doordacht ERD en een sluitende data dictionary (pp. 7, 10).
   3. B1-K1-W3: Realiseert (onderdelen van) software
   * Bewijs: De schone, veilige broncode van de responsive website en de dynamische SQLite-koppeling (pp. 7, 10).
   4. B1-K2-W1: Voert overleg
   * Bewijs: Regelmatige stand-ups binnen Groep 4 en actieve afstemming met de docenten/opdrachtgever (pp. 7, 10).
   5. B1-K2-W3: Reflecteert op werk
   * Bewijs: Het individuele reflectieverslag en het gedetailleerde logboek per teamlid (pp. 7, 10).
   
Als je wilt, kan ik nu specifieke SQL-code schrijven om de tabellen in SQLite aan te maken of de JavaScript-code voor de formuliervalidatie voor je uitwerken. Wat heeft op dit moment de hoogste prioriteit voor jullie project?

