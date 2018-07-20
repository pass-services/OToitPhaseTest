<?php
/**
 * PayZen V2-Payment Module version 3.0.0 for OpenCart 2.3.x. Support contact : support@payzen.eu.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @category  payment
 * @package   payzen
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2017 Lyra Network and contributors
 * @license   http://www.gnu.org/licenses/gpl.html  GNU General Public License (GPL v3)
 */

// Headings
$_['heading_title'] = 'PayZen - Paiement par carte bancaire';
$_['text_edit'] = 'Editer PayZen - Paiement par carte bancaire';

// Text
$_['text_payment'] = 'Paiement';
$_['text_update_success'] = 'F&eacute;licitations, vous avez modifi&eacute; les d&eacute;tails du paiement <b>PayZen - Paiement par carte bancaire</b> avec succ&egrave;s !';
$_['text_payzen'] = '<a href="http://www.lyra-network.com" target="_blank"><img src="view/image/payment/payzen.png" alt="PayZen" title="PayZen - Paiement par carte bancaire" style="border: 1px solid #EEEEEE; width: 90px;" /></a>';

// Errors
$_['error_permission'] = 'Attention, vous n&#39;&#39;avez pas la permission de modifier le module de paiement <b>PayZen</b> !';

// PayZen backend tabs & sections
$_['tab_payzen_general'] ='G&Eacute;N&Eacute;RAL';
$_['tab_payzen_specific'] ='PAIEMENT EN UNE FOIS';
$_['tab_payzen_Commandes'] ='COMMANDES';

$_['section_payzen_module_info'] = 'INFORMATIONS SUR LE MODULE';

$_['section_payzen_payment_access'] = 'ACC&Egrave;S &Agrave; LA PLATEFORME';
$_['section_payzen_payment_page'] = 'PAGE DE PAIEMENT';
$_['section_payzen_selective_3ds'] = '3DS S&Eacute;LECTIF';
$_['section_payzen_return_to_shop'] = 'RETOUR &Agrave; LA BOUTIQUE';
$_['section_payzen_module_setting'] = 'PARAM&Egrave;TRES DE BASE';
$_['section_payzen_amount_restrictions'] = 'RESTRICTIONS SUR LE MONTANT';
$_['section_payzen_Commandes'] ='&Eacute;TAT DES COMMANDES';

// PayZen administration interface entries
$_['entry_payzen_developed_by']  = 'D&eacute;velopp&eacute; par: ';
$_['entry_payzen_contact_email'] = 'Courriel de contact: ';
$_['entry_payzen_contrib_version'] = 'Version du module : ';
$_['entry_payzen_gateway_version'] = 'Version de la plateforme : ';

$_['entry_payzen_status']= 'Activation';
$_['entry_payzen_sort_order'] = 'Ordre d&#39;affichage';
$_['entry_payzen_geo_zone'] = 'Zone de paiement';
$_['entry_payzen_enable_logs'] = 'Logs';

$_['entry_payzen_site_id'] = 'Identifiant de la boutique';
$_['entry_payzen_key_test'] = 'Certificat en mode test';
$_['entry_payzen_key_prod'] = 'Certificat en mode production';
$_['entry_payzen_ctx_mode'] = 'Mode';
$_['entry_payzen_platform_url'] = 'URL de la plateforme';
$_['entry_payzen_url_check'] = 'URL de notification &Agrave; copier dans le Back Office PayZen:';

$_['entry_payzen_language'] = 'Langue par d&eacute;faut';
$_['entry_payzen_available_languages'] = 'Langues disponibles';
$_['entry_payzen_capture_delay'] = 'D&eacute;lai avant remise en banque';
$_['entry_payzen_validation_mode'] = 'Mode de validation';
$_['entry_payzen_payment_cards'] = 'Types de carte';
$_['entry_payzen_3ds_min_amount'] = 'Montant minimum pour lequel activer 3-DS';

$_['entry_payzen_min_amount'] = 'Montant minimum';
$_['entry_payzen_max_amount'] = 'Montant maximum';

$_['entry_payzen_redirect_enabled'] = 'Redirection automatique';
$_['entry_payzen_redirect_success_timeout'] = 'D&eacute;lai avant redirection (succ&egrave;s)';
$_['entry_payzen_redirect_success_message'] = 'Message avant redirection (succ&egrave;s)';
$_['entry_payzen_redirect_error_timeout'] = 'D&eacute;lai avant redirection (&eacute;chec)';
$_['entry_payzen_redirect_error_message'] = 'Message avant redirection (&eacute;chec)';
$_['entry_payzen_return_mode'] = 'Mode de retour';

$_['entry_payzen_order_status_failed'] = '&Eacute;tat de la commande en cas d&#39;&eacute;chec';
$_['entry_payzen_order_status_success'] = '&Eacute;tat de la commande en cas de succ&egrave;s';
$_['entry_payzen_order_status_canceled'] = '&Eacute;tat de la commande en cas d&#39;annulation';
$_['entry_payzen_notify_failed'] = 'Notifier l&#39;acheteur en cas de paiement refus&eacute;';
$_['entry_payzen_notify_canceled'] = 'Notifier l&#39;acheteur en cas d&#39;annulation';

$_['desc_payzen_status'] = 'Activer / d&eacute;sactiver le module de paiement PayZen.';
$_['desc_payzen_sort_order']= 'Le plus petit indice est affich&eacute; en premier.';
$_['desc_payzen_geo_zone'] = 'Si une zone est choisie, ce mode de paiement ne sera effectif que pour celle-ci.';
$_['desc_payzen_enable_logs'] = 'Activer / d&eacute;sactiver les logs du module.';

$_['desc_payzen_site_id'] = 'Identifiant fourni par PayZen.';
$_['desc_payzen_key_test'] = 'Certificat fourni par PayZen pour le mode test (disponible sur le Back Office de votre boutique).';
$_['desc_payzen_key_prod'] = 'Certificat fourni par PayZen (disponible sur le Back Office de votre boutique apr&egrave;s passage en production).';
$_['desc_payzen_ctx_mode'] = 'Mode de fonctionnement du module.';
$_['desc_payzen_platform_url'] = 'URL vers laquelle l&#39;acheteur sera redirig&eacute; pour le paiement.';

$_['desc_payzen_language'] = 'S&eacute;lectionner la langue par d&eacute;faut &agrave; utiliser sur la page de paiement.';
$_['desc_payzen_available_languages'] = 'S&eacute;lectionner les langues &agrave; proposer sur la page de paiement.';
$_['desc_payzen_capture_delay'] = 'Le nombre de jours avant la remise en banque (param&eacute;trable sur votre Back Office PayZen).';
$_['desc_payzen_validation_mode'] = 'En mode manuel, vous devrez confirmer les paiements dans le Back Office PayZen.';
$_['desc_payzen_payment_cards'] = 'Le(s) type(s) de carte pouvant être utilis&eacute;(s) pour le paiement. Ne rien s&eacute;lectionner pour utiliser la configuration de la plateforme.';
$_['desc_payzen_3ds_min_amount'] = 'N&eacute;cessite la souscription &agrave; l&#39;option 3-D Secure s&eacute;lectif.';

$_['desc_payzen_min_amount'] = 'Montant minimum pour lequel ce mode de paiement est disponible.';
$_['desc_payzen_max_amount'] = 'Montant maximum pour lequel ce mode de paiement est disponible.';

$_['desc_payzen_redirect_enabled'] = 'Si activ&eacute;e, l&#39;acheteur sera redirig&eacute; automatiquement vers votre site &agrave; la fin du processus de paiement.';
$_['desc_payzen_redirect_success_timeout'] = 'Temps en secondes (0-300) avant que l&#39;acheteur ne soit redirig&eacute; automatiquement vers votre site lorsque le paiement a r&eacute;ussi.';
$_['desc_payzen_redirect_success_message'] = 'Message affich&eacute; sur la plateforme de paiement avant redirection lorsque le paiement a r&eacute;ussi.';
$_['desc_payzen_redirect_error_timeout'] = 'Temps en secondes (0-300) avant que l&#39;acheteur ne soit redirig&eacute; automatiquement vers votre site lorsque le paiement a &eacute;chou&eacute;.';
$_['desc_payzen_redirect_error_message'] = 'Message affich&eacute; sur la plateforme de paiement avant redirection lorsque le paiement a &eacute;chou&eacute;.';
$_['desc_payzen_return_mode'] = 'Fa&ccedil;on dont l&#39;acheteur transmettra le r&eacute;sultat du paiement lors de son retour &agrave; la boutique.';

// PayZen backend misc texts
$_['text_payzen_chinese'] = 'Chinois';
$_['text_payzen_dutch'] = 'N&eacute;erlandais';
$_['text_payzen_english'] = 'Anglais';
$_['text_payzen_french'] = 'Fran&ccedil;ais';
$_['text_payzen_german'] = 'Allemand';
$_['text_payzen_italian'] = 'Italien';
$_['text_payzen_japanese'] = 'Japonais';
$_['text_payzen_polish'] = 'Polonais';
$_['text_payzen_portuguese'] = 'Portugais';
$_['text_payzen_russian'] = 'Russe';
$_['text_payzen_spanish'] = 'Espagnol';
$_['text_payzen_swedish'] = 'Su&eacute;dois';
$_['text_payzen_turkish'] = 'Turc';

$_['text_payzen_test'] = 'TEST';
$_['text_payzen_production'] = 'PRODUCTION';

$_['text_payzen_default'] = 'Configuration Back Office';
$_['text_payzen_automatic'] = 'Automatique';
$_['text_payzen_manual'] = 'Manuel';

$_['text_payzen_yes'] = 'Oui';
$_['text_payzen_no'] = 'Non';
