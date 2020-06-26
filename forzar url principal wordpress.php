
/**
poner en wp-config.php para  obligar a  wordpress  funcionar con esta url
 */

define( 'WP_HOME', 'http://dominio.com' );
define( 'WP_SITEURL', 'http://dominio.com' );


/** por ultimo agregar esta linea en el functions.php  del tema activado  */

update_option( 'siteurl', 'http://dominio.com' );
update_option( 'home', 'http://dominio.com' );
