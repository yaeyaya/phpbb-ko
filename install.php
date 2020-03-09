<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> '설치 패널',
	'SELECT_LANG'	=> '언어 선택',

	'STAGE_INSTALL'	=> 'phpBB 설치중',

	// Introduction page
	'INTRODUCTION_TITLE'	=> '소개',
	'INTRODUCTION_BODY'		=> 'phpBB3 사용하는 것을 감사합니다!<br /><br />phpBB®는 전세계에서 유행하는 포럼 시스템입니다. phpBB3은 2000년에 출시된 최신 설치 패키지입니다. phpBB3은 전작과 같은 풍부한 기능, 편리한 사용 제험, 완벽한 기술 지원 등 다 제공합니다. phpBB3은 phpBB2에서 유명한 기능들을 강화하고 사용자들이 요구한 새 기능들도 추가합니다. 사용자의 선호를 맞으면 좋겠습니다.<br /><br />이 설치 시스템은 새로운 설치하거나 최신 버전으로 업데이트하기를 인도하겠습니다. 또, 다른 포럼 시스템(phpBB2포함)에서 phpBB3으로 전환하기도 인도할 수 있습니다. 상제정보를 참조하려면<a href="../docs/INSTALL.html">설치 가이드</a>에 이도하세요.<br /><br />phpBB3 라이선스를 보거나 기술지원을 받으려면 측면 메뉴을 선택하세요. 계속하려면 위의 정확한 탭을 선택하세요.',

	// Support page
	'SUPPORT_TITLE'		=> '지원',
	'SUPPORT_BODY'		=> '전면적인 무료 지원은 현재의 안정적인 phpBB3 버전 대상으로 제공합니다. 아래와 같은 내용을 포함:</p><ul><li>설치</li><li>환경설정</li><li>기술 문의</li><li>시스템에서 잼재적인 버그에 관한 질문</li><li>Release Candidate (RC) 버전에서 최신 안정적인 버전으로 업데이트</li><li>phpBB 2.0.x에서 phpBB3으로 업그레이드</li><li>다른 포럼 시스템에서 phpBB3으로 전환 (<a href="https://www.phpbb.com/community/viewforum.php?f=486">전환기 포럼</a>을 참조하세요)</li></ul><p>베타 버전사용자들이 최신 버전으로 업데이트하는 것을 권장합니다.</p><h2>확장기능/스타일</h2><p>확장기능에 관한 질문을 <a href="https://www.phpbb.com/community/viewforum.php?f=451">확장기능 포럼</a>에서 제출하세요.<br />스타일에 관한 질문을 <a href="https://www.phpbb.com/community/viewforum.php?f=471">스타일 포럼</a>에서 제출하세요.<br /><br />특정 패키지에 관한 질문을 배키지 해당하는 주제에서 제출하세요.</p><h2>지원 받기</h2><p><a href="https://www.phpbb.com/support/">지원 총람</a><br /><a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/">빠른 시작 가이드</a><br /><br />최신 뉴스와 버전을 알아보려면 <a href="https://www.twitter.com/phpbb/">Twitter</a>와 <a href="https://www.facebook.com/phpbb/">Facebook</a>에서 phpBB를 팔로우하세요.<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'			=> '설치하기 환영합니다',
	'INSTALL_INTRO_BODY'	=> '이 서버에서 phpBB3을 설치할 수 있습니다.</p><p>계속하려면 데이터베이스 정보를 꼭 필요해서 모르면 서버 제공자에게 문의하세요. 아래와 같은 정보를 필요:</p>

	<ul>
		<li>데이터베이스 유형 - 사용할 데이터베이스.</li>
		<li>데이터베이스 서버나 DSN - 데이터베이스 서버 주소.</li>
		<li>데이터베이스 서버 포트 - 데이터베이스 서버 사용중인 포트(대부분 상황에 필요 없음).</li>
		<li>데이터베이스 이름 - 사용할 데이터베이스의 이름.</li>
		<li>데이터베이스 사용자 이름과 비밀번호 - 데이터베이스 로그인 정보.</li>
	</ul>

	<p><strong>주의:</strong>SQLite를 사용하려면 DSN 필드에서 데이터베이스의 전체 경로를 입력하고 사용자 이름과 비밀번호 필드들을 공백으로 남겨주세요. 안전 확보 위해 데이터베이스 파일을 반드시 웹에서 접속하지 못하는 곳에 저장하세요.</p>

	<p>phpBB3 지원되는 데이터베이스:</p>
	<ul>
		<li>MySQL 4.1.3이나 이후 버전(MySQLi필요)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000이나 이후 버전(직접이나 ODBC로)</li>
		<li>MS SQL Server 2005나 이후 버전(native)</li>
		<li>Oracle</li>
	</ul>

	<p>해당 서버가 지원된 데이터베이스만 표시됩니다.',

	'ACP_LINK'	=> '<a href="%1$s">ACP</a>로 이동',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB 이미 설치됩니다.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB 설치되지 않습니다.',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> '파일 존재하지 않습니다.',
	'FILE_NOT_EXISTS_EXPLAIN'				=> '%1$s 파일 존재해야 phpBB3 설치할 수 있습니다.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> '%1$s 파일 존재해야 더 좋은 사용자 제험을 제공할 수 있습니다.',
	'FILE_NOT_WRITABLE'						=> '파일 쓰기 불가합니다.',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> '%1$s 파일 쓰기 권한이 있어야 phpBB3 설치할 수 있습니다.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> '%1$s 파일 쓰기 권한이 있어야 더 좋은 사용자 제험을 제공할 수 있습니다.',

	'DIRECTORY_NOT_EXISTS'						=> '경로 존재하지 않습니다.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> '%1$s 경로 존재해야 phpBB3 설치할 수 있습니다.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> '%1$s 경로 존재해야 더 좋은 사용자 제험을 제공할 수 있습니다.',
	'DIRECTORY_NOT_WRITABLE'					=> '경로 쓰기 불가합니다.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> '%1$s 경로 쓰기 권한이 있어야 phpBB3 설치할 수 있습니다.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> '%1$s 경로 쓰기 권한이 있어야 더 좋은 사용자 제험을 제공할 수 있습니다.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP버전',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB가 PHP 7.1.3이나 이후 버전을 필요합니다.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP getimagesize()함수 필요합니다.',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'getimagesize 함수 사용가능 해야 phpBB가 정확하게 작동할 수 있습니다.',
	'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8 지원',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'PHP 설치가 PCRE 확장기능에서 UTF-8 지원되지 않음으로 컴파일되면 phpBB가 실행할 수 없습니다.',
	'PHP_JSON_SUPPORT'					=> 'PHP JSON 지원',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'PHP JSON 확장기능 사용가능 해야 phpBB가 정확하게 작동할 수 있습니다.',
	'PHP_XML_SUPPORT'					=> 'PHP XML/DOM 지원',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'PHP XML/DOM 확장기능 사용가능 해야 phpBB가 정확하게 작동할 수 있습니다.',
	'PHP_SUPPORTED_DB'					=> '지원된 데이터베이스',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'PHP에서 최소 한개의 지원된 데이터베이스를 있어야합니다. 표시된 데이터베이스 모듈이 없으면 서버 제공자에게 문의하거나 PHP 설치 자료를 참조하세요.',

	'RETEST_REQUIREMENTS'	=> '필요사항 재검사',

	'STAGE_REQUIREMENTS'	=> '필요사항 검사',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> '이 불록의 모든 필드를 입력 해야합니다.',

	'TIMEOUT_DETECTED_TITLE'	=> '설치 타임아웃 감지 됩니다',
	'TIMEOUT_DETECTED_MESSAGE'	=> '설치 타임아웃 감지 되어 페이지 새로고침 해야합니다. 이렇면 데이터 손실 발생할 수 있습니다. 타임아웃 시간 높이거나 CLI사용하는 게 권장합니다.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> '설치 데이터 설정',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> '관리자 상세정보',

	// Form labels
	'ADMIN_CONFIG'				=> '관리자 환경설정',
	'ADMIN_PASSWORD'			=> '관리자 비밀번호',
	'ADMIN_PASSWORD_CONFIRM'	=> '관리자 비밀번호 확인',
	'ADMIN_PASSWORD_EXPLAIN'	=> '6-30자리 길이의 비밀번호를 입력하세요.',
	'ADMIN_USERNAME'			=> '관리자 사용자명',
	'ADMIN_USERNAME_EXPLAIN'	=> '3-20자리 길이의 사용자명을 입력하세요.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> '입력된 이메일 주소는 유효하지 않습니다.',
	'INST_ERR_PASSWORD_MISMATCH'	=> '입력된 비밀번호는 일치하지 않습니다.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> '입력된 비밀번호 최대 길이 초과합니다. 최대 길이는 30자리입니다.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> '입력된 비밀번호 최소 길이 부족합니다. 최소 길이는 6자리입니다.',
	'INST_ERR_USER_TOO_LONG'		=> '입력된 사용자명 최대 길이 초과합니다. 최대 길이는 20자리입니다.',
	'INST_ERR_USER_TOO_SHORT'		=> '입력된 사용자명 최소 길이 부족합니다. 최소 길이는 3자리입니다.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> '게시판 환경설정',
	'DEFAULT_LANGUAGE'	=> '기본 언어',
	'BOARD_NAME'		=> '게시판 체목',
	'BOARD_DESCRIPTION'	=> '게시판 간단 소개',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> '데이터베이스 설정',

	// Form labels
	'DB_CONFIG'				=> '데이터베이스 환경설정',
	'DBMS'					=> '데이터베이스 유형',
	'DB_HOST'				=> '데이터베이스 서버 호스트 이름이나 DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN는 Data Source Name의 줄임말이고 ODBC 방식으로 설치만 필요합니다. PostgreSQL일 경우, UNIX domain socket를 통해 localhost를 사용해서 로컬 서버에 연결하고 TCP를 통해 127.0.0.1을 사용해서 연결합니다. SQLite일 경우, 데이터베이스 전체 경로를 입력합니다.',
	'DB_PORT'				=> '데이터베이스 서버 포트',
	'DB_PORT_EXPLAIN'		=> '해당 서버가 비표준 포트를 사용하지 않는 경우 외에는 공백으로 남겨주세요.',
	'DB_PASSWORD'			=> '데이터베이스 비밀번호',
	'DB_NAME'				=> '데이터베이스 이름',
	'DB_USERNAME'			=> '데이터베이스 사용자명',
	'DATABASE_VERSION'		=> '데이터베이스 버전',
	'TABLE_PREFIX'			=> '데이터베이스 테이블 이름의 접두사',
	'TABLE_PREFIX_EXPLAIN'	=> '접두사가 자모, 숫자와 밑줄 표지 만 포함할 수 있고 자모로 시작 해야합니다.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQLI'		=> 'MySQL 와 MySQLi 확장기능',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> '데이터베이스 설치 에러',
	'INST_ERR_NO_DB'				=> '선택된 데이터베이스 유형과 해당하는 PHP 모율을 로드할 수 있습니다.',
	'INST_ERR_DB_INVALID_PREFIX'	=> '입력된 접두사가 무효합니다. 접두사가 자모, 숫자와 밑줄 표지 만 포함할 수 있고 자모로 시작 해야합니다.',
	'INST_ERR_PREFIX_TOO_LONG'		=> '입력된 테이블 접두사가 최대 길이 초과합니다. 최대 길이는 %d자리입니다.',
	'INST_ERR_DB_NO_NAME'			=> '데이터베이스 이름을 정의되지 않습니다.',
	'INST_ERR_DB_FORUM_PATH'		=> '정의된 데이터베이스 파일이 포럼 디렉토리 트리에서 포함되어 있습니다. 이 파일을 웹에서 접속하지 못하는 곳에 저장 해야합니다.',
	'INST_ERR_DB_CONNECT'			=> '데이터베이스에 연결할 수 없습니다. 아래와 같은 에러 메시지를 확인하세요.',
	'INST_ERR_DB_NO_WRITABLE'		=> '그를 포함한 데이터베이스와 경로가 쓰기 권한이 있어야합니다.',
	'INST_ERR_DB_NO_ERROR'			=> '주는 에러 메시지 없습니다.',
	'INST_ERR_PREFIX'				=> '입력된 테이블 접두사가 이미 존재해서 다른 접두사를 입력하세요.',
	'INST_ERR_DB_NO_MYSQLI'			=> '해당 서버에서 설치된 MySQL 버전이 선택된 “MySQL와 MySQLi 확장기능”과 효환할 수 없습니다. "MySQL"으로 바꿔보세요.',
	'INST_ERR_DB_NO_SQLITE3'		=> '설치된 SQLite 확장기능 버전이 예상보다 낮아서 최소 3.6.15버전으로 업그레이드 해야합니다.',
	'INST_ERR_DB_NO_ORACLE'			=> '설치된 Oracle가 파라미터 <var>NLS_CHARACTERSET</var> 값을 <var>UTF8</var>로 설정 해야합니다.안그러면 9.2+ 버전으로 업그레이드하세요.',
	'INST_ERR_DB_NO_POSTGRES'		=> '선택된 데이터베이스가 <var>UNICODE</var>나 <var>UTF8</var> 언코딩으로 만든 것이 아입니다. <var>UNICODE</var>나 <var>UTF8</var> 언코딩되는 데이터베이스로 설치하세요.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> '스키마 파일 쓰기 권한 없습니다',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> '이메일 환경설정',

	// Package info
	'PACKAGE_VERSION'					=> '설치된 패키지 버전',
	'UPDATE_INCOMPLETE'				=> 'phpBB 설치 업데이트되지 않습니다.',
	'UPDATE_INCOMPLETE_MORE'		=> '아래의 정보를 알아보고 에러 고쳐주세요.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>엡데이트 완성되지 않음</h1>
	
	
		<p>최근의 phpBB 설치 업데이트가 완성되지 않습니다. <a href="%1$s" title="%1$s">database updater</a>에 가서 <em>데이터베이스만 업데이트</em>를 선택된 상태를 확인하고 <strong>확인</strong>을 클릭하세요. 데이터베이스 업데이트 성공 후에 반드시 "install" 경로를 삭제해야합니다.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> '새기능 버전 <strong>%1$s</strong> 있습니다. <a href="%2$s" title="%2$s"><strong>버전 공지</strong></a>를 참조해서 업데이트 내용과 가이드를 알아보세요.',
	'SERVER_CONFIG'				=> '서버 환경설정',
	'SCRIPT_PATH'				=> '스크리프트 경로',
	'SCRIPT_PATH_EXPLAIN'		=> 'phpBB 설치된 경로는 도메인 이름과 상태적입니다. 예:<samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> '감사합니다. 관리자 드림.',
	'CONFIG_SITE_DESC'				=> '포럼의 간단 소개',
	'CONFIG_SITENAME'				=> 'yourdomain.com',

	'DEFAULT_INSTALL_POST'			=> 'phpBB3 샘플 포스트입니다. 모든 것이 정상적으로 실행중입니다. 필요하시면 이 포스트를 삭제하고 게시판을 계속 설장하면됩니다. 설치 과정중에 첫 카테고리와 첫 게시판에서 미리 정하는 사용자 구룹 관리자, 봇, 글로벌 게시판 관리자, 게스트, 회원과 COPPA 회원에 맞는 권한을 부여되었습니다. 첫 카테고리와 첫 게시판을 삭제하면 새 카테고리와 게시판에서 모든 사용자 구룹에 권한을 부여 해야합니다. 첫 카테고리와 첫 게시판 이름을 바꿔서 새 카테고리와 게시판에서 권한을 복사하는 게 권장합니다. 잘 즐기세요. 잘 즐기세요.',

	'FORUMS_FIRST_CATEGORY'			=> '첫 카테고리',
	'FORUMS_TEST_FORUM_DESC'		=> '포럼의 간단 소개.',
	'FORUMS_TEST_FORUM_TITLE'		=> '첫 게시판',

	'RANKS_SITE_ADMIN_TITLE'		=> '사이트 관리자',
	'REPORT_WAREZ'					=> '이 포스트가 불법이나 해적인 소프트웨어 포함합니다.',
	'REPORT_SPAM'					=> '신고한 포스트가 웹사이트나 기타 제품의 광고 목적만 있습니다.',
	'REPORT_OFF_TOPIC'				=> '신고한 포스트가 주제과 관련성 없습니다.',
	'REPORT_OTHER'					=> '신고한 포스트가 모든 카테고리에 불류할 수 없습니다. 추가정보 필드를 사용하세요.',

	'SMILIES_ARROW'					=> '화살표',
	'SMILIES_CONFUSED'				=> '혼란스럽다',
	'SMILIES_COOL'					=> '쿨',
	'SMILIES_CRYING'				=> '너무 슬퍼서 울다',
	'SMILIES_EMARRASSED'			=> '어색하다',
	'SMILIES_EVIL'					=> '사악이나 너무 화나는 모양',
	'SMILIES_EXCLAMATION'			=> '느낌표',
	'SMILIES_GEEK'					=> '괴짜',
	'SMILIES_IDEA'					=> '영감',
	'SMILIES_LAUGHING'				=> '웃음',
	'SMILIES_MAD'					=> '미치다',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> '중립하다',
	'SMILIES_QUESTION'				=> '질문',
	'SMILIES_RAZZ'					=> '장난치다',
	'SMILIES_ROLLING_EYES'			=> '롤링 눈',
	'SMILIES_SAD'					=> '슬프다',
	'SMILIES_SHOCKED'				=> '충격 받음',
	'SMILIES_SMILE'					=> '미소',
	'SMILIES_SURPRISED'				=> '놀라다',
	'SMILIES_TWISTED_EVIL'			=> '뒤틀린 악마',
	'SMILIES_UBER_GEEK'				=> 'Uber 괴짜',
	'SMILIES_VERY_HAPPY'			=> '너무 행복하다',
	'SMILIES_WINK'					=> '눈 깜작하다',

	'TOPICS_TOPIC_TITLE'			=> 'phpBB3 사용하는 것을 환영합니다.',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> '개요',
	'MENU_INTRO'		=> '소개',
	'MENU_LICENSE'		=> '라이선스',
	'MENU_SUPPORT'		=> '지원',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> '환경설정 파일 생성',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> '환경설정 설정 추가',
	'TASK_ADD_DEFAULT_DATA'				=> '데이터베이스 기본 설정 추가',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> '데이터베이스 스키마 파일 생성 중',
	'TASK_SETUP_DATABASE'				=> '데이터베이스 설정 중',
	'TASK_CREATE_TABLES'				=> '테이블 생성 중',

	// Install data
	'TASK_ADD_BOTS'				=> '봇을 등록하는 중',
	'TASK_ADD_LANGUAGES'		=> '사용 가능한 언어를 설치 중',
	'TASK_ADD_MODULES'			=> '모듈 설치 중',
	'TASK_CREATE_SEARCH_INDEX'	=> '검색 인덱스 생성 중',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> '확장기능을 설치 중',
	'TASK_NOTIFY_USER'			=> '알림 이메일 보내는 중',
	'TASK_POPULATE_MIGRATIONS'	=> '마이그레이션 증가 중',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> '설치가 성공적으로 완료됩니다.',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> '모듈 찾을 수 없습니다',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> '%s 서비스가 정의되지 않아서 한 개의 모듈을 찾을 수 없습니다.',

	'TASK_NOT_FOUND'				=> '타스크 찾을 수 없습니다.',
	'TASK_NOT_FOUND_DESCRIPTION'	=> '%s 서비스가 정의되지 않아서 한 개의 타스크를 찾을 수 없습니다.',

	'SKIP_MODULE'	=> '“%s” 모듈을 건어뛰기',
	'SKIP_TASK'		=> '“%s” 타스크를 건어뛰기',

	'TASK_SERVICE_INSTALLER_MISSING'	=> '모든 설치 타스크 서비스가 "설치"과 동시에 실행 해야합니다.',
	'TASK_CLASS_NOT_FOUND'				=> '설치 타스크 서비스 정의가 무효합니다. 주는 "%1$s" 서비스 이름에 예상과 맞는 클래스 네임스페이스가 "%2$s"입니다. 상제정보는 가이드에 task_interface를 참조하세요.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> '설치 config 파일의 쓰기 권한이 없습니다.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'phpBB 설치',
	'CLI_UPDATE_BOARD'				=> 'phpBB 업데이트',
	'CLI_INSTALL_SHOW_CONFIG'		=> '사용할 환경설정을 표시',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> '환경설정 파일 유효성 검사',
	'CLI_CONFIG_FILE'				=> '사용할 Config 파일',
	'MISSING_FILE'					=> '%1$s 파일에 접속하지 못합니다',
	'MISSING_DATA'					=> 'Config 파일이 없거나 잘못된 설정 값을 포함하고 있습니다.',
	'INVALID_YAML_FILE'				=> '%1$s YAML 파일을 전환할 수 없습니다.',
	'CONFIGURATION_VALID'			=> '환경설정 파일이 유효합니다',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'phpBB 설치 업데이트',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'phpBB 설치를 최신 버전으로 업데이트할 수 있습니다. <br />  이  과정중에는 모든 파일의 완전성을 검사할겁니다. 업데이트 진행하기 전에 모든 차이점과 파일을 리뷰할 수 있습니다.<br /><br />두가지 방법으로 파일을 업데이트할 수 있습니다.</p><h2>수동 업데이트</h2><p>이 방법을 사용하면 이미 수정된 파일들을 놓치지 않기 위해서 변경된 파일들을 미리 다운로드 해야합니다. 다운로드 완료한 후에 그들을 phpBB 루트 디렉터리 아래의 정확인 위치에 업로드 해야합니다. 그 다음에 파일 검사를 다시 실행해서 파일들을 그대로 이동되는지 확인할 수 있습니다.</p><h2>FTP로 자동 업데이트</h2><p>이 방법이 수동 방법과 비슷하며 수동으로 수정된 파일 다운로드와 업로도하기 필요 없을 뿐입니다. 이 방법을 사용하려면 FTP 로그인 정보를 필요 때문에 미리 알아야합니다. 마치면 파일 검사 페이지에 리다이렉트해서 업데이트 결과를 확인합니다.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>버전 공지</h1>

		<p>유용한 정보를 보함될 수 있어서 업데이트하기 전에 이 버전 공지를 반드시 알아봐야합니다. 전체 다운로드 린크도 이 공지에서 보함됩니다.</p>

		<br />

		<h1>어떻게 전체 패키지로 설치를 업데이트합니까?</h1>

		<p>전체 패키지로 설치를 업데이트하는 것이 권장합니다. phpBB 핵심 파일을 수정된 상태였으면 수정점을 유지하기 위해서는 자동 업데이트 패키지를 사용할 가능성도 있습니다. 그리고 INSTALL.html 파일에 제공된 다른 방법도 사용할 수 있습니다. 전체 패키지로 phpBB3을 업데이트하는 가이드는:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">모든 포럼 파일과 데이터베이스를 백업합니다.</strong></li>
			<li><a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com 다운로드 페이지</a>에 가서 최신의 "전체 패키지" 압축된 파일을 다운로드합니다.</li>
			<li>압축된 파일을 압축 해제합니다.</li>
			<li><em>패키지(사이트 아님)에서</em><code class="inline">config.php</code> 파일과 <code class="inline">/images</code>, <code class="inline">/store</code>, <code class="inline">/files</code> 폴더를 삭제합니다.</li>
			<li>ACP, 포럼 설정에 가서 prosilver이 기본 스타일여는지 확인합니다. 아니면 prosilver로 설정하세요.</li>
			<li>서버 루트 폴더에서 <code class="inline">/vendor</code>과 <code class="inline">/cache</code> 폴더를 삭제합니다.</li>
			<li>FTP나 SSH를 사용해서 남은 파일들과 폴더들을 서버에서의 포럼 설치 루트 디렉토리에 기존 파일 겹쳐쓰기 모드로 업로드합니다.(주의: 업로드할 때 <code class="inline">/ext</code> 폴더에서 확장기능을 삭제하지 마세요. )</li>
			<li><strong><a href="%1$s" title="%1$s">설치 폴더에 가서 업데이트 시작합시다</a>.</strong></li>
			<li>가이드를 따라 데이터베이스 업데이트 완료될 때까지 기라립니다.</li>
			<li>FTP나 SSH를 사용해서 포럼 설치 루트 디렉토리에어 <code class="inline">/install</code> 폴더를 삭제합니다.<br><br></li>
		</ol>

		<p>포럼 업데이트 완료됩니다. 모든 사용자들과 주제들이 원래 그대로 있습니다. 다음의 타스크를 완성하세요:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>언어 패키지 업데이트</li>
			<li>스타일 업데이트<br><br></li>
		</ul>

		<h1>어떻게 자동 업데이트 패키지로 설치를 업데이트합니까?</h1>

		<p>phpBB 핵심 파일을 수정된 경우에만 자동 업데이트 패키지 방법을 추천합니다. INSTALL.html 파일에 제공된 다른 방법도 사용할 수 있습니다. 자동 업데이트 패키지로 phpBB3을 업데이트하는 가이드는:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com 다운로드 페이지</a>가서 "자동 업데이트 패지
			" 압축된 파일을 다운로드하세요.</li>
			<li>압축 해제된 "install"과 "vendor" 폴더들을 phpBB 루트 디렉토리(config.php 파일이 있는 위치)에 업로드합니다.<br><br></li>
		</ol>

		<p>업로드되면 지금 업로드된 install 디렉토리 존재 있기 때문에 일반 사용자가 포럼에 접속하지 못하게 됩니다.<br /><br />
		<strong><a href="%1$s" title="%1$s">브라우저에서 install 경로에 가서 업데이트 시작합니다</a>.</strong><br />
		<br />
		You will then be guided through the update process. You will be notified once the update is complete.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> '실행할 업데이트 유형',

	'UPDATE_TYPE_ALL'		=> '파일 시스템과 데이터베이스 업데이트',
	'UPDATE_TYPE_DB_ONLY'	=> '데이터베이스만 업데이트',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> '파일 업데이트 방법',

	'UPDATE_FILE_METHOD'			=> '파일 업데이트 방법',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> '수정된 파일들을 압축된 패키지로 일괄 다운로드',
	'UPDATE_FILE_METHOD_FTP'		=> 'FTP로 파일 업데이트(자동)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> '직접 파일 접속해서 업데이트(자동)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> '다운로드할 압축된 패키지 형식을 선택합니다',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP 설정',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> '업데이트 디렉토리를 찾을 수 없어서 모든 관련 파일들을 업로드되는지 확인하세요.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> '이미 최신 버전이고 업데이트 툴 실행할 필요 없습니다. 파일 완전성 검사하려면 정확한 파일을 업로도되는지 확인하세요.',
	'OLD_UPDATE_FILES'				=> '업데이트 파일이 최신 버전 아닙니다. 발견된 업데이트 파일은 phpBB %1$s에서 phpBB %2$s 버전으로 업데이트하는 것이는데 최신 버전은 phpBB %3$s입니다.',
	'INCOMPATIBLE_UPDATE_FILES'		=> '업데이트 파일이 설치된 버전에 적용할 수 없습니다. 설치된 버전은 phpBB %1$s 버전이었는데 업데이트 파일은 phpBB %2$s에서 %3$s 버전으로 업데이트하는 것입니다.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> '업데이트 파일',

	// Check files
	'UPDATE_CHECK_FILES'	=> '업데이트 파일 검사',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> '파일 참이점 검사기가 %s 파일을 열기 실패합니다.',

	'UPDATE_FILE_DIFF'		=> '수정된 파일들의 차이점을 검사 중',
	'ALL_FILES_DIFFED'		=> '모든 수정된 파일들을 검사 완료됩니다.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> '업데이트 파일',

	'DOWNLOAD'							=> '다운로드',
	'DOWNLOAD_CONFLICTS'				=> '압축된 병합 충돌 파일을 다운로드',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> '&lt;&lt;&lt(을)를 검색하고 충돌을 표시',
	'DOWNLOAD_UPDATE_METHOD'			=> '수정된 파일들을 압축된 파일로 다운로드',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> '다운로드 완료한 후에 압축된 파일을 압축 해제하고 phpBB 루트 디렉토리 아래의 정확한 위치에 업로드 해야합니다. 모든 파일들을 업로드된 후에 업데이트 과정을 계속 진행할 수 있습니다.',

	'FILE_ALREADY_UP_TO_DATE'		=> '파일이 이미 최신 버전입니다.',
	'FILE_DIFF_NOT_ALLOWED'			=> '파일이 참이 비교 허용되지 않습니다.',
	'FILE_USED'						=> '정보 출처',			// Single file
	'FILES_CONFLICT'				=> '충돌 파일',
	'FILES_CONFLICT_EXPLAIN'		=> '아래의 수정된 파일은 원본이 아니여서그들을 병합하려면 phpBB가 충돌로 반정합니다. 수동으로 충돌을 검토해서 해결하거나 선호하는 병합 방법을 선택해서 업데이트를 계속 진행합니다. 수동으로 충돌을 해결하면 수정 완료한 후에 다시 파일 검사 해야합니다. 그리고 각각 파일의 선호 병합 방법을 선택할 수 있습니다. 첫째는 구 버전 파일의 변경점을 잃어버려는데 둘째는 새 버전의 변경점을 잃어버릴겁니다.',
	'FILES_DELETED'					=> '사작된 파일',
	'FILES_DELETED_EXPLAIN'			=> '아래의 파일들이 새 버전에서 존재하지 않아 삭제 해야합니다.',
	'FILES_MODIFIED'				=> '수정된 파일',
	'FILES_MODIFIED_EXPLAIN'		=> '아래의 파일들이 수정되어서 구 버전의 원본이 아닙니다. 업데이트된 파일이 수정점과 새 파일 간의 병합된 결과 파일입니다.',
	'FILES_NEW'						=> '새 파일',
	'FILES_NEW_EXPLAIN'				=> '아래의 파일들은 현재 버전에서 존재하지 않아 추가할 겁니다.',
	'FILES_NEW_CONFLICT'			=> '새 충돌 파일',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> '아래의 파일들은 최신 버전의 새 파일이지만 같은 위치에서 같은 이름을 갖고 있는 파일이 이미 존재 때문에 새 파일로 구 파일을 겹쳐쓰기를 진행할겁니다.',
	'FILES_NOT_MODIFIED'			=> '수정되지 않는 파일',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> '아래의 파일들이 구 버전 파일을 유지하고 수정점이 업습니다.',
	'FILES_UP_TO_DATE'				=> '업데이트된 파일',
	'FILES_UP_TO_DATE_EXPLAIN'		=> '아래의 파일들은 이미 최신 버전이고 업데이트할 필요 없습니다.',
	'FILES_VERSION'					=> '파일 버전',
	'TOGGLE_DISPLAY'				=> '파일 리스트 표시거나 표시하지 않기',

	// File updater
	'UPDATE_UPDATING_FILES'	=> '파일 업데이트 중',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> '"%1$s" 파일 업데이트가 실패해서 "%2$s"(으)로 폴백 시도할겁니다.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> '파일 업데이트가 실패합니다. 폴백 방법이 없습니다.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> '계속 업데이트 진행하기',
	'UPDATE_RECHECK_UPDATE_FILES'		=> '파일 재검사',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> '데이터베이스 업데이트',

	'INLINE_UPDATE_SUCCESSFUL'		=> '데이터베이스 업데이트 완료.',

	'TASK_UPDATE_EXTENSIONS'	=> '확장기능 업데이트 중',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> '지정된 전환기 존재하지 않습니다.',
	'DEV_NO_TEST_FILE'			=> '전환기의 test_file 변수가 지정된 값을 없습니다.전환기 사용자일 경우 이 에러 표시되지 않아야해서 전환기 개발자에게 문의하세요. 전환기 개발자일 경우 경로 확인하기 위해 소스 보드에서 존재하는 파일 이름을 반드시 지정 해야합니다.',
	'COULD_NOT_FIND_PATH'		=> '이전 포럼의 경로를 찾을 수 없어서 설정을 확인후 다시 시도하세요.<br />» 지정된 소스 경로는: %s.',
	'CONFIG_PHPBB_EMPTY'		=> 'phpBB3 환경설정 변수 "%s"의 값이 없습니다.',

	'MAKE_FOLDER_WRITABLE'		=> '이 폴더가 존재하는지, 서버가 그의 쓰기 권한이 있는지 확인해서 다시 시도하세요:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> '이 폴더들이 존해하는지, 서버가 그들의 쓰기 권한이 있는지 확인해서 다시 시도하세요:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> '재 테스트',

	'NO_TABLES_FOUND'			=> '테이블이 없습니다..',
	'TABLES_MISSING'			=> '테이블들이 찾을 수 없습니다.<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> '테이블 접두사를 확인해서 다시 시도하세요.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> '전환 계속',
	'CONTINUE_CONVERT_BODY'		=> '이전의 전환 임무 있습니다. 새로 진행하거나 이전 임무을 계속 진행하기를 선택할 수 있습니다.',
	'CONVERT_NEW_CONVERSION'	=> '새로 전환하기',
	'CONTINUE_OLD_CONVERSION'	=> '이전 전환하기 계속하기',

	// Start conversion
	'SUB_INTRO'					=> '소개',
	'CONVERT_INTRO'				=> 'phpBB 통합 전환 프레임워크를 사용해서 감사합니다',
	'CONVERT_INTRO_BODY'		=> '여기에 다른(설치된) 포럼에서 데이터를 도입할 수 있으면 아래의 리스트에서 사용 가능한 모든 전환 모듈을 표시됩니다. 원하는 포럼 시스템 옵션이 없으면 저희 사이트에 가서 새로나온 전환 모듈이 있는지 확인하세요.',
	'AVAILABLE_CONVERTORS'		=> '사용 가능한 전환기',
	'NO_CONVERTORS'				=> '사용 가능한 전환기 없습니다.',
	'CONVERT_OPTIONS'			=> '옵션',
	'SOFTWARE'					=> '포럼 시스템',
	'VERSION'					=> '버전',
	'CONVERT'					=> '전환',

	// Settings
	'STAGE_SETTINGS'			=> '설정',
	'TABLE_PREFIX_SAME'			=> '전환할 포럼 시스템의 테이블의 접두사를 입력 해야합니다.<br />» 지정된 테이블 접두사: %s.',
	'DEFAULT_PREFIX_IS'			=> '지정된 테이블 접두사를 찾을 수 없어서 전환할 포럼 시스템의 테이블 접두사를 정확하게 입력했는지 확인하세요. %1$s의 기본 테이블 접두사는 <strong>%2$s</strong>입니다.',
	'SPECIFY_OPTIONS'			=> '전환 옵션 지정',
	'FORUM_PATH'				=> '포럼 경로',
	'FORUM_PATH_EXPLAIN'		=> '이 경로는 <strong>현재 설치하는 phpBB3의 루트 경로</strong>와 이전 포럼의 <strong>상태적인</strong> 디스크의 경로입니다.(통역자 주석: 이해하기 어려워서 일단 이렇게 번역해 둡니다. 잘못 번역하거나 이해 못하면 phpBB 공식 지원을 요청하세요.)',
	'REFRESH_PAGE'				=> '페이지 새로고침해서 계속 전환하기',
	'REFRESH_PAGE_EXPLAIN'		=> '"예"로 설정되면 전환기가 한개의 작업을 완료된 후에 자동으로 페이지를 새로고침해서 계속 전환할 겁니다.첫 번째 전환기능을 테스트하고 사전 에러를 탐색하면 "아님"으로 설정하는 것을 권장합니다.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> '전환 중',

	'AUTHOR_NOTES'				=> '개발자 노트:<br />» %s',
	'STARTING_CONVERT'			=> '전환 시작 중',
	'CONFIG_CONVERT'			=> '환경설정 전환 중',
	'DONE'						=> '완료',
	'PREPROCESS_STEP'			=> '함수와 쿼리 전처리 중',
	'FILLING_TABLE'				=> '테이블 <strong>%s</strong>에 데이터 삽입 중',
	'FILLING_TABLES'			=> '테이블들에 데이터 삽입 중',
	'DB_ERR_INSERT'				=> '<code>INSERT</code> 쿼리 실행 시 에러 발생합니다.',
	'DB_ERR_LAST'				=> '<var>query_last</var> 실행 시 에러 발생합니다.',
	'DB_ERR_QUERY_FIRST'		=> '<var>query_first</var> 실행 시 에러 발생합니다.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> '<var>query_first</var> 실행 시 에러 발생합니다. %s (“%s”)',
	'DB_ERR_SELECT'				=> '<code>SELECT</code> 쿼리 실행 시 에러 발생합니다..',
	'STEP_PERCENT_COMPLETED'	=> '<strong>%d</strong> / <strong>%d</strong>',
	'FINAL_STEP'				=> '마지작 프로세스하는 중',
	'SYNC_FORUMS'				=> '포럼 동기화 시작 중',
	'SYNC_POST_COUNT'			=> 'post_counts 동기화 중',
	'SYNC_POST_COUNT_ID'		=> '<var>entry</var> %1$s에서 %2$s(으)로 post_counts 동기화 중.',
	'SYNC_TOPICS'				=> '주제 동기화 시작 중',
	'SYNC_TOPIC_ID'				=> '<var>topic_id</var> %1$s에서 %2$s로 주제 동기화 중.',
	'PROCESS_LAST'					=> '마지막 명령 프로세스하는 중',
	'UPDATE_TOPICS_POSTED'		=> '주제 정보 생성 중',
	'UPDATE_TOPICS_POSTED_ERR'	=> '주제 정보 생성 시 에러 발생합니다.전환 완료 후 ACP에서 이 작업을 다시 진행할 수 있습니다.',
	'CONTINUE_LAST'				=> '마지막 명령 계속 프로세스하기',
	'CLEAN_VERIFY'				=> '마무리하고 최종 구조를 확인 중',
	'NOT_UNDERSTAND'			=> '테이블 이해 안 됨: %s #%d, 테이블 %s (“%s”)',
	'NAMING_CONFLICT'			=> '이름 충돌: %s & %s 둘이 다 별명입니다<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> '전환 완료',
	'CONVERT_COMPLETE_EXPLAIN'	=> '포럼 시스템을 phpBB 3.3으로 전환 완료됩니다. 지금 로그인하고 <a href="../">포럼에 방문</a>할 수 있습니다. install 디렉토리를 삭제해서 포럼을 개최 전에 모든 설정을 제대로 전환되는지 확인하세요. phpBB 온라인 도움을 잊지 마세요.<a href="https://www.phpbb.com/support/docs/en/3.3/ug/">가이드</a>와 <a href="https://www.phpbb.com/community/viewforum.php?f=661">지원 포럼</a>에 오신 것을 환영합니다.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> '이전 포럼이 FTP로 첨부 파일 업로드 기능을 허용됩니다. FTP 업로드 기능을 사용 금지하고 사용 가능한 업로드 디렉토리를 지정한 다음에 모든 첨부 파일을 그 웹에서 접속가능한 디렉토리에 복사하세요. 북사 완료 후에 전환기를 재시작하세요.',
	'CONV_ERROR_CONFIG_EMPTY'			=> '전환하기 위해 사용할 수 있는 환경설정 정보 없습니다.',
	'CONV_ERROR_FORUM_ACCESS'			=> '포럼의 방문 정보를 가져올 수 없습니다.',
	'CONV_ERROR_GET_CATEGORIES'			=> '카테고리 정보를 가져올 수 없습니다.',
	'CONV_ERROR_GET_CONFIG'				=> '포럼 환경설정 정보를 구할 수 없습니다.',
	'CONV_ERROR_COULD_NOT_READ'			=> '"%s" 방문이나 읽기 실패합니다.',
	'CONV_ERROR_GROUP_ACCESS'			=> '구룹 인증 정보를 가져올 수 없습니다.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'add_bots()에서 구룹 테이블 불일치를 발결됩니다. 수동 설정이 있으면 모든 특별 구룹을 추가 해야합니다.',
	'CONV_ERROR_INSERT_BOT'				=> '사용자 테이블에 bot를 삽입할 수 없습니다.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'bots 테이블에 bot를 삽입할 수 없습니다.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'user_group 테이블에 user를 삽입할 수 없습니다.',
	'CONV_ERROR_MESSAGE_PARSER'			=> '메시지 전환 에러',
	'CONV_ERROR_NO_AVATAR_PATH'			=> '개발자 주의: $convertor[\'avatar_path\'] 지정해야 %s 사용 가능합니다.',
	'CONV_ERROR_NO_FORUM_PATH'			=> '소스 포럼의 상대적인 경로를 지정되지 않습니다.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> '개잘자 주의: $convertor[\'avatar_gallery_path\'] 지정해야 %s 사용 가능합니다.',
	'CONV_ERROR_NO_GROUP'				=> '"%1$s" 구룹을 %2$s에서 찾을 숭 없습니다.',
	'CONV_ERROR_NO_RANKS_PATH'			=> '개발자 주의: $convertor[\'ranks_path\'] 지정해야 %s 사용 가능합니다.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> '개발자 주의: $convertor[\'smilies_path\'] 지정해야 %s 사용 가능합니다.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> '개잘자 주의: $convertor[\'upload_path\'] 지정해야 %s 사용 가능합니다.',
	'CONV_ERROR_PERM_SETTING'			=> '권한 설정 삽입/업데이트 실패합니다.',
	'CONV_ERROR_PM_COUNT'				=> '폴더 메시지 수 선택 실패합니다.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> '새 포럼을 삽입해서 구 카테고리를 바꾸기 실패합니다.',
	'CONV_ERROR_REPLACE_FORUM'			=> '새 포럼을 삽입해서 구 포럼을 바꾸기 실패합니다.',
	'CONV_ERROR_USER_ACCESS'			=> '사용자 인정 정보를 가져올 수 없습니다.',
	'CONV_ERROR_WRONG_GROUP'			=> '%2$s에서 잘못된 "%1$s" 사용자 구룹을 정의됩니다.',
	'CONV_OPTIONS_BODY'					=> '이 페이지에서 소스 포럼에 방문 시 필요한 벙보를 수집합니다. 전환기가 이전 포럼 데이터베이스에 아무 변경도 진행하기 않아서 편안하게 이전 포럼의 데이터베이스 정보를 입력하세요. 그리고 일치적인 전환을 위해 소스 포럼을 샷다운 해야합니다.',
	'CONV_SAVED_MESSAGES'				=> '저장된 메시지',

	'PRE_CONVERT_COMPLETE'			=> '모든 전환 준비가 완료됩니다. 지금 실제 전환 프로세스를 시작할 수 있습니다. 수동으로 몇 개의 설정을 진행해야할 가능성 있고 전환 완료 후에 권한 부여 결과 확인하기, 검색 인덱스 다시하기, 파일(아바타와 에모지 이미지 등) 복사 결과 확인하기 등을 해야합니다.',
));
