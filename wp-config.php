<?php
/**
 * WordPress基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL设置、数据库表名前缀、密钥、
 * WordPress语言设定以及ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑wp-config.php}Codex页面。MySQL设置具体信息请咨询您的空间提供商。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后填入相关信息。
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'admin');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'A$Hzj%7rgiG*R ^m~~0QZQESOf!HV?.BVQXYIE0i8^i..A_e(9gi9SVms=n-yIr/');
define('SECURE_AUTH_KEY',  '?JB[^8*T.E]B4G3t[e|`=Jm dW]9px$Eur2P/l(d.7VOhMF6qE)(`]0y`n:O$r2D');
define('LOGGED_IN_KEY',    '~4JGg0~r@r,3(v$6.r<B#kcP7&Cr#=[7r/qg}zuc!MCSWJvxHOk:QBz5)@7gw-[{');
define('NONCE_KEY',        'q^Q7lygf^ge=x,f9fVc[gmeL /Jd->=NeY_~WL!#CA$N 5>.8vV,69&:PX3i{ e3');
define('AUTH_SALT',        'kYL&eY2FivO/8$mu!.F:2uIO0$0:f}P|WKOo^F5h* Q[6ks1s|bys~|(QN~@eiTe');
define('SECURE_AUTH_SALT', '9?`K3iZG#mZ66eU9Fwa>A)jJMPoJRBDE}JyGNTY587Z5Zq6PVOJ-G,bs!8ggI1bK');
define('LOGGED_IN_SALT',   '?90.xjO]4o{2eFvQbf_)uS[DRbQ113jVAsleVc4GH1t2xEd;AFT,jR;bJmP1u_Av');
define('NONCE_SALT',       '8i>cdlD%Hnn#HL$6[!zpl[vJ zX1DcgvtPy}a/y!wCf=,a1,9#Z2T!a=y~@b}ZM:');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 */
define('WP_DEBUG', true);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
//define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
