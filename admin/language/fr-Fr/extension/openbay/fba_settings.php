<?php

// Headings

$_['heading_title']        	   = 'Paramètres';
$_['text_openbay']             = 'OpenBay Pro';
$_['text_fba']                 = 'Fulfillment par Amazon';


// Text

$_['text_success']     		   = 'Vos réglages ont été sauvegardés';
$_['text_status']         	   = 'Statut';
$_['text_account_ok']  		   = 'Connexion à la réalisation par Amazon OK';
$_['text_api_ok']       	   = 'Connexion API OK';
$_['text_api_status']          = 'Connexion API';
$_['text_edit']           	   = 'Modifier l`exécution par les paramètres Amazon';
$_['text_standard']            = 'la norme';
$_['text_expedited']           = 'Expedited';
$_['text_priority']            = 'Priorité';
$_['text_fillorkill']          = 'Remplir ou tuer';
$_['text_fillall']             = 'Remplir tout';
$_['text_fillallavailable']    = 'Remplissez tous disponibles';
$_['text_prefix_warning']      = 'Ne modifiez pas ce paramètre après l`envoi des commandes à Amazon, définissez-le uniquement lors de la première installation.';
$_['text_disabled_cancel']     = 'Désactivé - n`annule pas automatiquement les exécutions';
$_['text_validate_success']    = 'Les détails de votre API fonctionnent correctement! .';
$_['text_register_banner']     = 'Cliquez ici si vous devez vous inscrire pour un compte';


// Entry

$_['entry_api_key']            = 'Clé API';
$_['entry_account_id']         = 'identifiant de compte';
$_['entry_send_orders']        = 'Envoyer des ordres automatiquement';
$_['entry_fulfill_policy']     = 'Politique de réalisation';
$_['entry_shipping_speed']     = 'Vitesse d`expédition par défaut';
$_['entry_debug_log']          = 'Activer la journalisation du débogage';
$_['entry_new_order_status']   = 'Nouveau déclencheur d`exécution';
$_['entry_order_id_prefix']    = 'Préfixe d`ID de commande';
$_['entry_only_fill_complete'] = 'Tous les articles doivent être FBA';


// Help

$_['help_api_key']             = 'Voici votre clé API, récupérez-la dans votre compte OpenBay Pro';
$_['help_account_id']          = 'C`est l`identifiant de compte qui correspond au compte Amazon enregistré pour OpenBay Pro, obtenez-le à partir de votre compte OpenBay Pro';
$_['help_send_orders']  	   = 'Les commandes contenant des produits Fulfillment par Amazon seront automatiquement envoyées à Amazon';
$_['help_fulfill_policy']  	   = 'le défaut accomplissement politique ( FillAll - Tout réalisable articles dans la accomplissement commande sont Expédié. le accomplissement commande restes dans une En traitement Etat jusqu`à tout articles sont non plus Expédié par Amazone ou annulé par la vendeur. FillAllAvailable - Tout réalisable articles dans la accomplissement commande sont Expédié. Tout insatisfiable articles dans la commande sont annulé par Amazone. FillOrKill.  - Si un article dans une accomplissement commande est déterminé à être insatisfiable avant tout expédition dans la commande se déplace à la en attendant statut ( la processus de cueillette unités de inventaire a commencé ) puis la tout commande est pris en considération insatisfiable. toutefois si un article dans une accomplissement commande est déterminé à être insatisfiable après une expédition dans la commande se déplace à la en attendant statut Amazone annule comme beaucoup de la accomplissement commande comme possible. ). ';
$_['help_shipping_speed']  	   = 'Il s`agit de la catégorie de vitesse d`expédition par défaut à appliquer aux nouvelles commandes, différents niveaux de service pouvant entraîner des coûts différents';
$_['help_debug_log']  		   = 'Les journaux de débogage enregistrent des informations dans un fichier journal sur les actions que le module effectue. Cela devrait être laissé activé pour aider à trouver la cause de tous les problèmes.';
$_['help_new_order_status']    = 'C`est le statut de la commande qui va déclencher la commande à créer pour l`exécution. Assurez-vous que vous utilisez un statut uniquement après avoir reçu le paiement.';
$_['help_order_id_prefix']     = 'Avoir un préfixe de commande aidera à identifier les commandes qui proviennent de votre magasin et non d`autres intégrations. Ceci est très utile lorsque les commerçants vendent sur de nombreux marchés et utilisent FBA. ';
$_['help_only_fill_complete']  = 'Cela permettra uniquement d`envoyer des commandes pour l`exécution si TOUS les articles de la commande sont associés à un article de Fulfillment by Amazon. Si un article ne l`est pas alors la commande entière restera non remplie.';


// Error

$_['error_api_connect']        = 'Échec de la connexion à l`API';
$_['error_account_info']       = 'Impossible de vérifier la connexion de l`API à Fulfillment by Amazon';
$_['error_api_key']    		   = 'La clé de l`API est invalide';
$_['error_api_account_id']     = 'L`identifiant du compte est invalide';
$_['error_validation']    	   = 'Une erreur s`est produite lors de la validation de vos informations';


// Tabs

$_['tab_api_info']             = 'Détails de l`API';


// Buttons

$_['button_verify']            = 'Vérifier les détails';




					/* 
					  Copyright (C) 2016-2017 Apptiko.
					  Created by Apptiko - http://extension.apptiko.com.
					  Time-stamp-code:Sat1117070523					  
					*/