=== Custom Mega Menu ===
Contributors: Philippe Lavocat
Tags: mega menu, navigation, menu, responsive
Requires at least: 5.0
Tested up to: 5.7
Requires PHP: 7.0
Stable tag: 1.0

== Description ==
This plugin allows you to easily add a custom mega menu to your WordPress theme. Simply register the menu and style it using the included CSS.

== Installation ==
1. Download the plugin zip file.
2. In your WordPress admin panel, go to Plugins > Add New > Upload Plugin.
3. Upload the zip file and activate the plugin.
4. After activation, go to Appearance > Menus and create a menu for the 'Mega Menu' location.
5. Enjoy the mega menu directly in your header.

== Changelog ==
= 1.0 =
* Initial release [31/03/2025]

== Commentaire relatif à l'exercice d'intégration Smartfire/WordPress ==
Veuillez trouver ici mon tout premier plugin développé pour WordPress, c'est je pense le plus pratique pour vous, et aussi pour moi une bonne occasion d'expérimenter sous WordPress.

Le but de l'exercice étant de montrer ses compétences en Html, Css et Javascript j'ai pris la décision d'afficher ma structure Html en dure.
Je voulais gagner du temps pour ne pas avoir à algoter pour faire un affichage dynamique (en fonction de menu configuré sous WordPress).

* Ma V2 (à venir) sera surement donc une version en affichage dynamique et sera utiliser sans doute pour mon futur portfolio/website. *

Autre concession, c'est l'utilisation d'image (dans le fichier images du plugin) pour représenter rapidement des parti du sous sous menu.
Notez que malgré cela, la responsiveness est bien effective, et va même jusque très bas en largeur d'écran (suite à des commit ce 03/04/2025)

J'ai donc réaliser un plugin WordPress pour que vous puissiez voir ma réalisation sur le site de votre choix simplement en installant et en configurant le plugin.
Pour les détails, à partir de la maquette j'ai donc réaliser un mega menu responsive avec Html, Css et JavaScript (natif).

Je n'ai pas utiliser de librairie extérieure sauf Fontawesome pour notamment réaliser les icon chevron ou de menu list (en responsive).
J'apprècie le fontawesome pour la capacité qu'ils ont d'être "stylé" via Css comme une simple police (taille, couleur & disposition).

J'étais partis pour utiliser un système de grid à la bootstrap, mais propre à WordPress mais pour une raison qui pour le moment m'échappe "col-md-3"
n'était pas dispo j'ai donc du faire le mien, mais il est très largement adapaté aux besoins spécifique ici.

J'ai aussi via JS & CSS réaliser des transition d'opacité & de hauteur pour certaine ouverture de menu.

En transparence j'ai utilisé l'IA mais seulement pour avoir la structure minimum nécessaire pour mon plugin sous WordPress, faire de la relecture de "coquille" et aussi connaitre les commande WordPress nécessaire pour faire fonctionner mon plugin.
