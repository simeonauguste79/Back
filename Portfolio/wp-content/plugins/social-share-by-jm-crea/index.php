<?php
/**
 * Plugin Name: Social share par JM Créa
 * Plugin URI: http://www.jm-crea.com
 * Description: Intégrez des boutons de partage sur les réseaux sociaux sur pages et sur vos posts.
 * Version: 2.2.1
 * Author: JM Créa
 * Author URI: http://www.jm-crea.com
 */
function creer_table_ss() {
	global $wpdb;
    $table_ss = $wpdb->prefix . 'social_share';
    $sql = "CREATE TABLE $table_ss (
      id_ss int(11) NOT NULL AUTO_INCREMENT,
      facebook text DEFAULT NULL,
	  twitter text DEFAULT NULL,
	  linkedin text DEFAULT NULL,
	  googleplus text DEFAULT NULL,
	  pos_haut text DEFAULT NULL,
	  pos_bas text DEFAULT NULL,
	  param_pages text DEFAULT NULL,
	  param_posts text DEFAULT NULL,
	  style text DEFAULT NULL,
      UNIQUE KEY id (id_ss)
    );";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}
//On insere les infos dans la table
function insert_table_ss() {
   global $wpdb;
   $table_ss = $wpdb->prefix . 'social_share';
   $wpdb->insert( 
        $table_ss, 
        array( 'facebook'=>'ON','twitter'=>'ON','linkedin'=>'ON','googleplus'=>'ON','pos_haut'=>'ON','pos_bas'=>'ON','param_pages'=>'ON','param_posts'=>'ON','style'=>'H'), 
        array('%s','%s','%s','%s','%s','%s','%s','%s')
		);
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
 dbDelta( $sql );
}
register_activation_hook( __FILE__, 'creer_table_ss' );
register_activation_hook( __FILE__, 'insert_table_ss' );


add_action( 'admin_enqueue_scripts', 'style_ss_jm_crea' );
//Appel du css
function style_ss_jm_crea() {
wp_register_style('css_ss_jm_crea', plugins_url( 'css/style.css', __FILE__ ));
wp_enqueue_style('css_ss_jm_crea');	
}


//Paramètres depuis wp-admin
function sh() {
global $wpdb;
$table_ss = $wpdb->prefix . "social_share";
$voir_ss = $wpdb->get_row("SELECT * FROM $table_ss WHERE id_ss='1'");


echo "<h1>Social share</h1>
<h2>Partagez sur les réseaux sociaux</h2>";
echo '<p>Veuillez activer ou désactiver les réseaux sociaux sur lesquels vous souhaitez partager vos articles.</p>';
echo '<p>Shortcode pour aficher les boutons à un endroit précis : <code>[ss_by_jm_crea]</code></p>';
echo '<p color="red"><strong>Social Share est à présent replacé par <a href="https://wordpress.org/plugins/count-share-by-jm-crea/">Count Share by JM Créa</a></strong></p>';
if (isset($_GET['action'])&&($_GET['action'] == 'maj-ok')) {
echo '<div class="updated"><p>Paramètres mis à jour avec succès !</p></div>';		
}


echo '<div class="wrap">
<h2 class="nav-tab-wrapper">';

if ( (isset($_GET['tab']))&&($_GET['tab'] == 'reseaux-sociaux') ) {
echo '<a class="nav-tab nav-tab-active" href="' . admin_url() . 'admin.php?page=sh&tab=reseaux-sociaux">Réseaux sociaux</a>';
}
else {
echo '<a class="nav-tab" href="' . admin_url() . 'admin.php?page=sh&tab=reseaux-sociaux">Réseaux sociaux</a>';
}

if ( (isset($_GET['tab']))&&($_GET['tab'] == 'autres_plugins') ) {
echo '<a class="nav-tab nav-tab-active" href="' . admin_url() . 'admin.php?page=sh&tab=autres_plugins">Nos autres plugins</a>';
}
else {
echo '<a class="nav-tab" href="' . admin_url() . 'admin.php?page=sh&tab=autres_plugins">Nos autres plugins</a>';	
}

echo '</h2></div>';



/* TABS PARAMETRES */
if ( (isset($_GET['tab']))&&($_GET['tab'] == 'reseaux-sociaux') ) {
echo "<h3>Les réseaux sociaux</h3>";

//On vérifie les champs du formulaire
if ($voir_ss->facebook == 'ON') {
	$ss_facebook = '<input type="radio" name="facebook" id="radio" value="ON" checked="checked" /> ON <input type="radio" name="facebook" id="radio" value="OFF" /> OFF';
}
else {
	$ss_facebook = '<input type="radio" name="facebook" id="radio" value="ON" /> ON <input type="radio" name="facebook" id="radio" value="OFF" checked="checked" /> OFF';
}
if ($voir_ss->twitter == 'ON') {
	$ss_twitter = '<input type="radio" name="twitter" id="radio" value="ON" checked="checked" /> ON <input type="radio" name="twitter" id="radio" value="OFF" /> OFF';
}
else {
	$ss_twitter = '<input type="radio" name="twitter" id="radio" value="ON" /> ON <input type="radio" name="twitter" id="radio" value="OFF" checked="checked" /> OFF';
}
if ($voir_ss->linkedin == 'ON') {
	$ss_linkedin = '<input type="radio" name="linkedin" id="radio" value="ON" checked="checked" /> ON <input type="radio" name="linkedin" id="radio" value="OFF" /> OFF';
}
else {
	$ss_linkedin = '<input type="radio" name="linkedin" id="radio" value="ON" /> ON <input type="radio" name="linkedin" id="radio" value="OFF" checked="checked" /> OFF';
}
if ($voir_ss->googleplus == 'ON') {
	$ss_googleplus= '<input type="radio" name="googleplus" id="radio" value="ON" checked="checked" /> ON <input type="radio" name="googleplus" id="radio" value="OFF" /> OFF';
}
else {
	$ss_googleplus = '<input type="radio" name="googleplus" id="radio" value="ON" /> ON <input type="radio" name="googleplus" id="radio" value="OFF" checked="checked" /> OFF';
}
if ($voir_ss->pos_haut == 'ON') {
	$ss_pos_haut = '<input type="radio" name="pos_haut" id="radio" value="ON" checked="checked" /> ON <input type="radio" name="pos_haut" id="radio" value="OFF" /> OFF';
}
else {
	$ss_pos_haut = '<input type="radio" name="pos_haut" id="radio" value="ON" /> ON <input type="radio" name="pos_haut" id="radio" value="OFF" checked="checked" /> OFF';
}
if ($voir_ss->pos_bas == 'ON') {
	$ss_pos_bas = '<input type="radio" name="pos_bas" id="radio" value="ON" checked="checked" /> ON <input type="radio" name="pos_bas" id="radio" value="OFF" /> OFF';
}
else {
	$ss_pos_bas = '<input type="radio" name="pos_bas" id="radio" value="ON" /> ON <input type="radio" name="pos_bas" id="radio" value="OFF" checked="checked" /> OFF';
}
if ($voir_ss->param_pages == 'ON') {
	$ss_param_pages = '<input type="radio" name="param_pages" id="radio" value="ON" checked="checked" /> ON <input type="radio" name="param_pages" id="radio" value="OFF" /> OFF';
}
else {
	$ss_param_pages = '<input type="radio" name="param_pages" id="radio" value="ON" /> ON <input type="radio" name="param_pages" id="radio" value="OFF" checked="checked" /> OFF';
}
if ($voir_ss->param_posts == 'ON') {
	$ss_param_posts = '<input type="radio" name="param_posts" id="radio" value="ON" checked="checked" /> ON <input type="radio" name="param_posts" id="radio" value="OFF" /> OFF';
}
else {
	$ss_param_posts = '<input type="radio" name="param_posts" id="radio" value="ON" /> ON <input type="radio" name="param_posts" id="radio" value="OFF" checked="checked" /> OFF';
}
if ($voir_ss->style == 'H') {
	$ss_style = '<input type="radio" name="style" id="radio" value="H" checked="checked" /> Horizontal <input type="radio" name="style" id="radio" value="V" /> Vertical';
}
else {
	$ss_style = '<input type="radio" name="style" id="radio" value="H" /> Horizontal <input type="radio" name="style" id="radio" value="V" checked="checked" /> Vertical';
}

//On affiche le formulaire
echo '<div id="note_ss"><p align="center"><a href="https://wordpress.org/plugins/social-share-by-jm-crea/" target="_blank"><strong>NOTEZ-MOI<br>RATE ME</strong></a></p>

<img src="' . plugins_url( 'images/star.png', __FILE__ ) . '" alt="Notez-moi - Rate Me" />

<br><br><a href="https://wordpress.org/plugins/social-share-by-jm-crea/" target="_blank"><strong>SUR WORDPRESS.ORG</strong></a> </div>';

echo '<div id="cadre_blanc">';
echo '<form id="form1" name="form1" method="post" action="">
  <table border="0" cellspacing="8" cellpadding="0">
  <tr>
  <td colspan="2"><h3>Sélectionnez vos réseaux sociaux</h3></td>
  </tr>
    <tr>
      <td>Facebook : </td>
      <td>' . $ss_facebook . '</td>
    </tr>
    <tr>
      <td>Twitter :</td>
      <td>' . $ss_twitter . '</td>
    </tr>
    <tr>
      <td>Linkedin :</td>
      <td>' . $ss_linkedin . '</td>
    </tr>
	<tr>
      <td>Google + :</td>
      <td>' . $ss_googleplus . '</td>
    </tr>
	<tr>
	<td colspan="2"><h3>Paramètres</h3></td>
	</tr>
	<tr>
      <td>Afficher en haut du contenu :</td>
      <td>' . $ss_pos_haut . '</td>
    </tr>
	<tr>
      <td>Afficher en bas du contenu :</td>
      <td>' . $ss_pos_bas . '</td>
    </tr>
	<tr>
      <td>Afficher sur les pages :</td>
      <td>' . $ss_param_pages . '</td>
    </tr>
	<tr>
      <td>Afficher sur les posts :</td>
      <td>' . $ss_param_posts . '</td>
    </tr>
	
	<tr>
      <td>Style de bouton :</td>
      <td>' . $ss_style . '</td>
    </tr>
	<tr>
	<td colspan="2">&nbsp;</td>
	</tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" name="maj" id="maj" value="Mettre à jour" class="button button-primary" /></td>
    </tr>
  </table>
</form>';
echo '</div>';
}

/* TABS AUTRES PLUGINS */
if ( (isset($_GET['tab']))&&($_GET['tab'] == 'autres_plugins') ) {
	echo '
	<div id="listing_plugins">
	<h3>Social Share</h3>
	<img src="' . plugins_url( 'autres-plugins-jm-crea/social-share-par-jm-crea.jpg', __FILE__ ) . '" alt="Social Share par JM Créa" />
	<p>Social Share par JM Créa vous permet de partager votre contenu sur les réseaux sociaux.</p>
	<div align="center"><a href="https://fr.wordpress.org/plugins/social-share-by-jm-crea/" target="_blank"><button class="button button-primary">Télécharger</button></a></div>
	</div>
	
    <div id="listing_plugins">
	<h3>Search box Google</h3>
	<img src="' . plugins_url( 'autres-plugins-jm-crea/search-box-google-par-jm-crea.jpg', __FILE__ ) . '" alt="Search Box Google par JM Créa" />
	<p>Search Box Google permet d’intégrer le mini moteur de recherche de votre site dans les résultats Google.</p>
	<div align="center"><a href="https://fr.wordpress.org/plugins/search-box-google-par-jm-crea/" target="_blank"><button class="button button-primary">Télécharger</button></a></div>
	</div>
	
	<div id="listing_plugins">
	<h3>Notify Update</h3>
	<img src="' . plugins_url( 'autres-plugins-jm-crea/notify-update-par-jm-crea.jpg', __FILE__ ) . '" alt="Notify Update par JM Créa" />
	<p> Notify Update par JM Créa vous notifie par email et sms (pour les abonnés freemobile) lors d’une mise à jour de votre WordPress.</p>
	<div align="center"><a href="https://fr.wordpress.org/plugins/notify-update-par-jm-crea/" target="_blank"><button class="button button-primary">Télécharger</button></a></div>
	</div>
	
	
	<div id="listing_plugins">
	<h3>Notify Connect</h3>
	<img src="' . plugins_url( 'autres-plugins-jm-crea/notify-connect-par-jm-crea.jpg', __FILE__ ) . '" alt="Notify Connect par JM Créa" />
	<p>Notify connect créé par JM Créa permet d’être notifié par email et sms (pour les abonnés freemobile) lorsqu’un admin se connecte sur l\'admin.</p>
	<div align="center"><a href="https://fr.wordpress.org/plugins/notify-connect-par-jm-crea/" target="_blank"><button class="button button-primary">Télécharger</button></a></div>
	</div>
	
	
	<div id="listing_plugins">
	<h3>Simple Google Adsense</h3>
	<img src="' . plugins_url( 'autres-plugins-jm-crea/simple-google-adsense-par-jm-crea.jpg', __FILE__ ) . '" alt="Simple Google Adsense par JM Créa" />
	<p>Simple Google Adsense par JM Créa permet d’afficher vos publicités Google Adsense avec de simples shortcodes.</p>
	<div align="center"><a href="https://fr.wordpress.org/plugins/simple-google-adsense-par-jm-crea/" target="_blank"><button class="button button-primary">Télécharger</button></a></div>
	</div>
	
	<div id="listing_plugins">
	<h3>Scan Upload</h3>
	<img src="' . plugins_url( 'autres-plugins-jm-crea/scan-upload-par-jm-crea.jpg', __FILE__ ) . '" alt="Scan Upload par JM Créa" />
	<p>Scan Upload par JM Créa détecte les fichiers suspects de votre wp-upload et permet de les supprimer en 1 clic.</p>
	<div align="center"><a href="https://fr.wordpress.org/plugins/scan-upload-par-jm-crea/" target="_blank"><button class="button button-primary">Télécharger</button></a></div>
	</div>
	
	
	<div id="listing_plugins">
	<h3>Knowledge Google</h3>
	<img src="' . plugins_url( 'autres-plugins-jm-crea/knowledge-google-par-jm-crea.jpg', __FILE__ ) . '" alt="Knowledge Google par JM Créa" />
	<p>Knowledge Google par JM Créa permet d\'afficher les liens de vos réseaux sociaux directement dans les résultats Google.</p>
	<div align="center"><a href="https://wordpress.org/plugins/knowledge-google-par-jm-crea/" target="_blank"><button class="button button-primary">Télécharger</button></a></div>
	</div>';
}

elseif (!isset($_GET['tab'])) {
echo '<script>document.location.href="admin.php?page=sh&tab=reseaux-sociaux"</script>';
}
echo '</h2></div>';


//On met à jour la table
if (isset($_POST['maj'])) {
$facebook = mysql_real_escape_string($_POST['facebook']);
$twitter = mysql_real_escape_string($_POST['twitter']);
$linkedin = mysql_real_escape_string($_POST['linkedin']);
$googleplus = mysql_real_escape_string($_POST['googleplus']);
$pos_haut = mysql_real_escape_string($_POST['pos_haut']);
$pos_bas = mysql_real_escape_string($_POST['pos_bas']);
$param_pages = mysql_real_escape_string($_POST['param_pages']);
$param_posts = mysql_real_escape_string($_POST['param_posts']);
$style = mysql_real_escape_string($_POST['style']);

$table_ss = $wpdb->prefix . "social_share";
$wpdb->query($wpdb->prepare("UPDATE $table_ss SET facebook='$facebook',twitter='$twitter',linkedin='$linkedin',googleplus='$googleplus',pos_haut='$pos_haut',pos_bas='$pos_bas',param_pages='$param_pages',param_posts='$param_posts',style='$style'",APP_POST_TYPE));
echo '<script>document.location.href="tools.php?page=sh&action=maj-ok&tab=reseaux-sociaux"</script>';
}

}

//On appel les boutons share sur les pages en créant une fonction
function affichage_ss($content) {

//On créé la requete
global $wpdb;  
$table_ss = $wpdb->prefix . "social_share";
$voir_ss = $wpdb->get_row("SELECT * FROM $table_ss WHERE id_ss='1'");



//Si le style est horizontal
if ($voir_ss->style == 'H') {

//On créé les boutons
$lien_ss = get_permalink($post->ID);
$titre_ss = get_the_title($post->ID);	
	
//Facebook
$ss_afficher_facebook = '
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/' . get_locale() . '/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>';
$ss_afficher_facebook .= '<style type="text/css">.fb-share-button { top:-6px; padding-right:7px; } </style>';
$ss_afficher_facebook .= '<div class="fb-share-button" data-href="' . $lien_ss . '" data-layout="button_count"></div>';
	
	
//Twitter
$ss_afficher_twitter =  '<a href="https://twitter.com/share" class="twitter-share-button" data-url="' . $lien_ss . '">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\'://platform.twitter.com/widgets.js\';fjs.parentNode.insertBefore(js,fjs);}}(document, \'script\', \'twitter-wjs\');</script>';
	
//Linkedin
$ss_afficher_linkedin = '<script src="http://platform.linkedin.com/in.js" type="text/javascript"> lang: ' . get_locale() . '</script>
<script type="IN/Share" data-url="' . $lien_ss . '" data-counter="right"></script>';

//Google+
$ss_afficher_googleplus = '<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: \'' . get_locale() . '\'}
</script>
<div class="g-plus" data-action="share" data-annotation="bubble" data-href="' . $lien_ss . '"></div>';
}

//Si le style est vertical
else {
//On créé les boutons
$lien_ss = get_permalink($post->ID);
$titre_ss = get_the_title($post->ID);	
	
//Facebook
$ss_afficher_facebook = '
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/' . get_locale() . '/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>';
$ss_afficher_facebook .= '<style type="text/css">.fb-share-button { top:-6px; padding-right:7px; } </style>';
$ss_afficher_facebook .= '<div class="fb-share-button" data-href="' . $lien_ss . '" data-layout="box_count"></div>';
	
	
//Twitter
$ss_afficher_twitter =  '<a href="https://twitter.com/share" class="twitter-share-button" data-url="' . $lien_ss . '" data-count="vertical">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\'://platform.twitter.com/widgets.js\';fjs.parentNode.insertBefore(js,fjs);}}(document, \'script\', \'twitter-wjs\');</script>';
	
//Linkedin
$ss_afficher_linkedin = '<script src="http://platform.linkedin.com/in.js" type="text/javascript"> lang: ' . get_locale() . '</script>
<script type="IN/Share" data-url="' . $lien_ss . '" data-counter="top"></script>';

//Google+
$ss_afficher_googleplus = '
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: \'' . get_locale() . '\'}
</script>
<div class="g-plus" data-action="share" data-annotation="vertical-bubble" data-href="' . $lien_ss . '"></div>';
}

//Si on affiche sur les posts
if ( ($voir_ss->param_posts == 'ON')&&(is_single()) )  {

//Affichage des boutons en haut
if ($voir_ss->pos_haut == 'ON') {
global $post;
$pos_haut = $content;
if ($voir_ss->facebook == 'ON') {
$ss_facebook = $ss_afficher_facebook;
}
if ($voir_ss->twitter == 'ON') {
$ss_twitter = $ss_afficher_twitter;
}
if ($voir_ss->googleplus == 'ON') {
$ss_googleplus = $ss_afficher_googleplus;
}
if ($voir_ss->linkedin == 'ON') {
$ss_linkedin = $ss_afficher_linkedin;
}
$content = $ss_facebook . $ss_twitter . $ss_googleplus . $ss_linkedin;
$content .= $pos_haut;
}


//Affichage des boutons en bas
if ($voir_ss->pos_bas == 'ON') {
global $post;
$pos_bas = $content;

if ($voir_ss->facebook == 'ON') {
$ss_facebook = $ss_afficher_facebook;
}
if ($voir_ss->twitter == 'ON') {
$ss_twitter = $ss_afficher_twitter;
}
if ($voir_ss->googleplus == 'ON') {
$ss_googleplus = $ss_afficher_googleplus;
}
if ($voir_ss->linkedin == 'ON') {
$ss_linkedin = $ss_afficher_linkedin;
}
$content .= $ss_facebook . $ss_twitter . $ss_googleplus . $ss_linkedin;
}
}


//Si on affiche sur les pages
if ( ($voir_ss->param_pages == 'ON')&&(is_page()) )  {

//Affichage des boutons en haut
if ($voir_ss->pos_haut == 'ON') {
global $post;
$pos_haut = $content;

if ($voir_ss->facebook == 'ON') {
$ss_facebook = $ss_afficher_facebook;
}
if ($voir_ss->twitter == 'ON') {
$ss_twitter = $ss_afficher_twitter;
}
if ($voir_ss->googleplus == 'ON') {
$ss_googleplus = $ss_afficher_googleplus;
}
if ($voir_ss->linkedin == 'ON') {
$ss_linkedin = $ss_afficher_linkedin;
}
$ss_div = '<div style="float:left;">';
$content = $ss_div . $ss_facebook . $ss_twitter . $ss_googleplus . $ss_linkedin . '</div>';
$content .= $pos_haut;
}


//Affichage des boutons en bas
if ($voir_ss->pos_bas == 'ON') {
global $post;
$pos_bas = $content;

if ($voir_ss->facebook == 'ON') {
$ss_facebook = $ss_afficher_facebook;
}
if ($voir_ss->twitter == 'ON') {
$ss_twitter = $ss_afficher_twitter;
}
if ($voir_ss->googleplus == 'ON') {
$ss_googleplus = $ss_afficher_googleplus;
}
if ($voir_ss->linkedin == 'ON') {
$ss_linkedin = $ss_afficher_linkedin;
}
$content .= $ss_facebook . $ss_twitter . $ss_googleplus . $ss_linkedin;
}
}

return $content;
}

//On créé le menu
function menu_sh_jmcrea() {
	add_submenu_page( 'tools.php', 'Social Share', 'Social Share', 'manage_options', 'sh', 'sh' ); 
}


function sc_ss($ss_shortcode) {
	
//On créé la requete
global $wpdb;  
$table_ss = $wpdb->prefix . "social_share";
$voir_ss = $wpdb->get_row("SELECT * FROM $table_ss WHERE id_ss='1'");

//Si le style est horizontal
if ($voir_ss->style == 'H') {

//On créé les boutons
$lien_ss = get_permalink($post->ID);
$titre_ss = get_the_title($post->ID);	
	
//Facebook
$ss_afficher_facebook = '
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/' . get_locale() . '/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>';
$ss_afficher_facebook .= '<style type="text/css">.fb-share-button { top:-6px; padding-right:7px; } </style>';
$ss_afficher_facebook .= '<div class="fb-share-button" data-href="' . $lien_ss . '" data-layout="button_count"></div>';
	
	
//Twitter
$ss_afficher_twitter =  '<a href="https://twitter.com/share" class="twitter-share-button" data-url="' . $lien_ss . '">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\'://platform.twitter.com/widgets.js\';fjs.parentNode.insertBefore(js,fjs);}}(document, \'script\', \'twitter-wjs\');</script>';
	
//Linkedin
$ss_afficher_linkedin = '<script src="http://platform.linkedin.com/in.js" type="text/javascript"> lang: ' . get_locale() . '</script>
<script type="IN/Share" data-url="' . $lien_ss . '" data-counter="right"></script>';

//Google+
$ss_afficher_googleplus = '<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: \'' . get_locale() . '\'}
</script>
<div class="g-plus" data-action="share" data-annotation="bubble" data-href="' . $lien_ss . '"></div>';
}

//Si le style est vertical
else {
//On créé les boutons
$lien_ss = get_permalink($post->ID);
$titre_ss = get_the_title($post->ID);	
	
//Facebook
$ss_afficher_facebook = '
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/' . get_locale() . '/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>';
$ss_afficher_facebook .= '<style type="text/css">.fb-share-button { top:-6px; padding-right:7px; } </style>';
$ss_afficher_facebook .= '<div class="fb-share-button" data-href="' . $lien_ss . '" data-layout="box_count"></div>';
	
	
//Twitter
$ss_afficher_twitter =  '<a href="https://twitter.com/share" class="twitter-share-button" data-url="' . $lien_ss . '" data-count="vertical">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\'://platform.twitter.com/widgets.js\';fjs.parentNode.insertBefore(js,fjs);}}(document, \'script\', \'twitter-wjs\');</script>';
	
//Linkedin
$ss_afficher_linkedin = '<script src="http://platform.linkedin.com/in.js" type="text/javascript"> lang: ' . get_locale() . '</script>
<script type="IN/Share" data-url="' . $lien_ss . '" data-counter="top"></script>';

//Google+
$ss_afficher_googleplus = '
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: \'' . get_locale() . '\'}
</script>
<div class="g-plus" data-action="share" data-annotation="vertical-bubble" data-href="' . $lien_ss . '"></div>';
}

global $post;


if ($voir_ss->facebook == 'ON') {
$ss_facebook = $ss_afficher_facebook;
}
if ($voir_ss->twitter == 'ON') {
$ss_twitter = $ss_afficher_twitter;
}
if ($voir_ss->googleplus == 'ON') {
$ss_googleplus = $ss_afficher_googleplus;
}
if ($voir_ss->linkedin == 'ON') {
$ss_linkedin = $ss_afficher_linkedin;
}

$ss_shortcode .= $ss_facebook . $ss_twitter . $ss_googleplus . $ss_linkedin;
return $ss_shortcode;
}

add_action('admin_menu', 'menu_sh_jmcrea');
add_filter( 'the_content', 'affichage_ss' );
add_action( 'the_content', 'affichage_ss' );
add_shortcode( 'ss_by_jm_crea', 'sc_ss' );


function head_meta_ss_jm_crea() {
echo("<meta name='Social Share By JM Créa' content='2.2.1' />\n");
}
add_action('wp_head', 'head_meta_ss_jm_crea');
?>