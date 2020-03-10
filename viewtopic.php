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

$lang = array_merge($lang, array(
	'APPROVE'								=> '동의',
	'ATTACHMENT'						=> '첨부 파일',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> '첨부 파일 기능을 비활성화됩니다.',

	'BOOKMARK_ADDED'		=> '주제를 북마크에 추가 완료됩니다.',
	'BOOKMARK_ERR'			=> '주제를 북마크에 추가 되지 않습니다. 다시 시도하세요.',
	'BOOKMARK_REMOVED'		=> '주제를 북마크에 삭제 완료됩니다.',
	'BOOKMARK_TOPIC'		=> '주제를 북마크에 추가',
	'BOOKMARK_TOPIC_REMOVE'	=> '주제를 북마크에 삭제',
	'BUMPED_BY'				=> '%1$s님이 %2$s에 마지막으로 범프했습니다.',
	'BUMP_TOPIC'			=> '주제를 범프',

	'CODE'					=> '코드',

	'DELETE_TOPIC'			=> '주제를 삭제',
	'DELETED_INFORMATION'	=> '%1$s님이 %2$s에 삭제했습니다.',
	'DISAPPROVE'					=> '반대',
	'DOWNLOAD_NOTICE'		=> '이 포스트의 첨부 파일 보기 권한이 없습니다.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> '%2$s님이 %3$s에 마지막으로 편집했고 총 %1$d번 편집 기록이 있습니다.',
	),
	'EMAIL_TOPIC'			=> '이메일 주제',
	'ERROR_NO_ATTACHMENT'	=> '선택된 첨부 파일이 더 이상 존재하지 않습니다.',

	'FILE_NOT_FOUND_404'	=> '<strong>%s</strong> 파일이 존재하지 않습니다.',
	'FORK_TOPIC'			=> '주제를 복사',
	'FULL_EDITOR'			=> '전체 편집기 &amp; 미리보기',

	'LINKAGE_FORBIDDEN'		=> '당신이 사이트 보기, 다운로드나 린크 기능을 제한됩니다.',
	'LOGIN_NOTIFY_TOPIC'	=> '이 주제에 관한 알림이 있으니 로그인해서 보세요.',
	'LOGIN_VIEWTOPIC'		=> '회원가입하고 로그인만해서 이 주제를 볼 수 있습니다.',

	'MAKE_ANNOUNCE'				=> '"공지"로 변경',
	'MAKE_GLOBAL'				=> '"글로벌"로 변경',
	'MAKE_NORMAL'				=> '"일반 제주"로 변경',
	'MAKE_STICKY'				=> '"고정"으로 변경',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> '<strong>%d</strong>개의 옵션을 선택했습니다',
	),
	'MISSING_INLINE_ATTACHMENT'	=> '<strong>%s</strong> 첨부 파일이 더 이상 사용할 수 없습니다.',
	'MOVE_TOPIC'				=> '제주를 이동',

	'NO_ATTACHMENT_SELECTED'=> '보기나 다운로드할 첨부 파일을 선택되지 않습니다.',
	'NO_NEWER_TOPICS'		=> '이 포럼에 보다 더 새로운 주제가 없습니다.',
	'NO_OLDER_TOPICS'		=> '이 포럼에 보다 더 이전의 주제가 없습니다.',
	'NO_UNREAD_POSTS'		=> '이 주제에 대한 읽지 않는 새 포스트가 없습니다.',
	'NO_VOTE_OPTION'		=> '투표할 때 최소 한 개의 옵션을 정의 해야합니다.',
	'NO_VOTES'				=> '투표 없습니다',
	'NO_AUTH_PRINT_TOPIC'	=> '주제 인쇄 권한이 없습니다.',

	'POLL_ENDED_AT'			=> '%s에 마감됐습니다.',
	'POLL_RUN_TILL'			=> '%s에 마감될 예정입니다.',
	'POLL_VOTED_OPTION'		=> '이 옵션에 투표했음',
	'POST_DELETED_RESTORE'	=> '이 포스트가 삭제되며 복원할 수 있습니다.',
	'PRINT_TOPIC'			=> '인쇄 보기',

	'QUICK_MOD'				=> '빠른 관리 도구',
	'QUICKREPLY'			=> '빠른 답장',
	'QUOTE'					=> '인용',

	'REPLY_TO_TOPIC'		=> '제주에 답당하기',
	'RESTORE'				=> '복원',
	'RESTORE_TOPIC'			=> '제주 북원',
	'RETURN_POST'			=> '%s포스트에 돌아가기%s',

	'SUBMIT_VOTE'			=> '투표 발표',

	'TOPIC_TOOLS'			=> '주제 도구',
	'TOTAL_VOTES'			=> '모든 푸표',

	'UNLOCK_TOPIC'			=> '제주를 잠금 해제하기',

	'VIEW_INFO'				=> '포스트 상세정보',
	'VIEW_NEXT_TOPIC'		=> '다음의 주제',
	'VIEW_PREVIOUS_TOPIC'	=> '이전의 주제',
	'VIEW_RESULTS'			=> '결과 보기',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d개의 포스트',
	),
	'VIEW_UNREAD_POST'		=> '첫 번째 읽지 않는 포스트',
	'VOTE_SUBMITTED'		=> '당신의 투표를 송부하였습니다.',
	'VOTE_CONVERTED'		=> '변환된 투표에는 투표 변경이 지원되지 않습니다.',

));
