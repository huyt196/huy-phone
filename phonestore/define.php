<?php 
	// ====================== PATHS ===========================
	define ('DS'				, '/');
	define ('ROOT_PATH'			, dirname(__FILE__));						// Định nghĩa đường dẫn đến thư mục gốc
	define ('LIBRARY_PATH'		, ROOT_PATH . DS . 'libs' . DS);			// Định nghĩa đường dẫn đến thư mục thư viện
	define ('LIBRARY_EXT_PATH'	, LIBRARY_PATH . 'extends' . DS);			// Định nghĩa đường dẫn đến thư mục thư viện
	define ('PUBLIC_PATH'		, ROOT_PATH . DS . 'public' . DS);			// Định nghĩa đường dẫn đến thư mục public							
	define ('UPLOAD_PATH'		, PUBLIC_PATH  . 'files' . DS);				// Định nghĩa đường dẫn đến thư mục upload
	define ('SCRIPT_PATH'		, PUBLIC_PATH  . 'scripts' . DS);				// Định nghĩa đường dẫn đến thư mục upload
	define ('APPLICATION_PATH'	, ROOT_PATH . DS . 'application' . DS);		// Định nghĩa đường dẫn đến thư mục application							
	define ('MODULE_PATH'		, APPLICATION_PATH . 'module' . DS);		// Định nghĩa đường dẫn đến thư mục module							
	define ('BLOCK_PATH'		, APPLICATION_PATH . 'block' . DS);			// Định nghĩa đường dẫn đến thư mục block							
	define ('TEMPLATE_PATH'		, PUBLIC_PATH . 'template' . DS);			// Định nghĩa đường dẫn đến thư mục template							
	
	define	('ROOT_URL'			,DS . 'php' . DS . 'off-zend-vn' . DS . '28-11-2023'. DS . 'phonestore' . DS);
	define	('APPLICATION_URL'	, ROOT_URL . 'application' . DS);
	define	('PUBLIC_URL'		, ROOT_URL . 'public' . DS);
	define	('UPLOAD_URL'		, PUBLIC_URL . 'files' . DS);
	define	('TEMPLATE_URL'		, PUBLIC_URL . 'template' . DS);
	
	
	define	('DEFAULT_MODULE'		, 'phone');
	define	('DEFAULT_CONTROLLER'	, 'index');
	define	('DEFAULT_ACTION'		, 'index');

	// ====================== DATABASE ===========================
	define ('DB_HOST'			, 'localhost');
	define ('DB_USER'			, 'root');						
	define ('DB_PASS'			, '');						
	define ('DB_NAME'			, 'bookstore');						
	define ('DB_TABLE'			, 'group');			

	// ====================== DATABASE TABLE===========================
	define ('TBL_GROUP'			, 'group');
	define ('TBL_USER'			, 'user');
	define ('TBL_PRIVELEGE'		, 'privilege');
	define ('TBL_CATEGORY'		, 'category');
	define ('TBL_CATEGORYPHONE'	, 'categoryphone');
	define ('TBL_BOOK'			, 'book');
	define ('TBL_SLIDER'		, 'slider');
	define ('TBL_PHONE'			, 'phone');
	define ('TBL_BLOG'			, 'blog');
	define ('TBL_ORDER'			, 'orders');
	define ('TBL_ORDER_DETAIL'	, 'order_details');
	define ('TBL_ORDER_STATUS'	, 'order_status');
	define ('TBL_RSS'			, 'rss');
	define ('TBL_CART'			, 'cart');
	define ('TBL_CONTACT'		, 'contact');
	define ('TBL_FAQ'			, 'faq');
	define ('TBL_MENU'			, 'menu');
	define ('TBL_EXPERIENCE'	, 'experience');
	// ====================== CONFIG ===========================
	define ('TIME_LOGIN'		, 3600);
?>