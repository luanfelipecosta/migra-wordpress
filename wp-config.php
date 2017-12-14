<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'migra');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'leQc!sjuQ:+ITxzgFuP{!|E?|hBS2}`@b8L3n.[!Dz3|j~=};lo:L,5yZKEDJ(#`');
define('SECURE_AUTH_KEY',  '50Fu%~P!jg>~O$AORGZv]W /tc`T)hesj[QR&o#Z}4_tSPk3tIP0G+%SA}FRvn]A');
define('LOGGED_IN_KEY',    'A_$`RE%QE>%nF-S<^HAj0-E)=a;JjxzZK#TbN|DMJ_j2D)RM@{{rny#6ZEsFpvXU');
define('NONCE_KEY',        '+7o-.lTuF@l:if>GPge)V!]~6ANO@GdtW9by:F_dE|umtyJ@}3WX!?.Oix#O8:TX');
define('AUTH_SALT',        '[w?F:?41^+.HK0rt{ESbDe?8}|Ar8bCzYT^lK46a<y3RfO4uu,)=>HKs^>-Ca/Yf');
define('SECURE_AUTH_SALT', '2M{D3xBO2q+i-Ew@Vrz9+8H-s*iiUPm9-+?.-tb+(LXo,|lEg,S&rH1#e`^mQuS|');
define('LOGGED_IN_SALT',   '{nisiio9Kx1N6EqBcmE+{b9aL.ID4-{_RoG^Oy@?eU}~Uo}pK)QxhiY.4f2,tz<l');
define('NONCE_SALT',       '@k>b9K(_-KAmLO)XDqay16v*k[`Yy9z(;1ka!TT<%0NfD;|[*Ns&&3sdLR7/sD}0');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
