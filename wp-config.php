<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Xtj>1mB[+WEX=s;4=Smvh~H_8+CtJIbV+xr8sp-$V#2^zH+8Uq&H:!,3Pr^] Q0j' );
define( 'SECURE_AUTH_KEY',  'E`(n;BpTw,hVvp8_T.:9nEA?z:/T*<zl+<^ak&~_lj*J)}3`%`OHeA1Q<xq]5#41' );
define( 'LOGGED_IN_KEY',    'M7/c&,]_0pq]vB4$_FluYn<rXQv.XxC_37]=tg}r/?EcennYxYF,C!F69yBYpjhg' );
define( 'NONCE_KEY',        '@w81P_U^K#$AyK2lb*,GeHB:r@arsjALMj1J.S!9lypm2F!#RBUTK9PZ9eeN=eAJ' );
define( 'AUTH_SALT',        '<)&:D>W+-61UY` pP@[?!ClwlbY`A<-.D%Ksoc3D!=cz9[psSp%sj 8xohxMymQl' );
define( 'SECURE_AUTH_SALT', '`gP%DfdYw.z47<BSjzqloB*]*#7MMO^Ic_*[Iu,0`]G7NT9k,D4gkGO *$iKN}SW' );
define( 'LOGGED_IN_SALT',   '.&)%y2+:/`@j.D7e:R 7@i1EKMZ=>l m2P}unrXzL)%!O5I(~~|/>7D@(la@o,:>' );
define( 'NONCE_SALT',       'TmfGXcOEH>VFBOM>`npz[~m.&yz cpne82Rp(1[OC2{Q/*1u^[[#1KI8tOxwm/|R' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
