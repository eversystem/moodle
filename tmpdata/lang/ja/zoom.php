<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'zoom', language 'ja', branch 'MOODLE_38_STABLE'
 *
 * @package   zoom
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtocalendar'] = 'カレンダーに追加';
$string['allmeetings'] = '全ミーティング';
$string['alternative_hosts'] = '代替ホスト';
$string['alternative_hosts_help'] = '代替ホストオプションは、ミーティングのスケジュール後に、あなたに代わってミーティングやウェビナーを開始する同一アカウント内の別のProユーザーの指名を可能とします。このユーザーは代替ホストに追加された通知とミーティング開始のリンクが記載された電子メールを受け取ります。複数の電子メールアドレスはカンマ（空白なし）で区切ること。';
$string['apikey'] = 'Zoom API Key';
$string['apisecret'] = 'Zoom API secret';
$string['apiurl'] = 'Zoom API url';
$string['attentiveness_score'] = '注意力スコア*';
$string['attentiveness_score_help'] = '*注意力スコアは誰かが画面を共有している時に30秒以上、ズームインしていない場合に低下します。';
$string['audio_both'] = 'VoIPと電話';
$string['audio_telephony'] = '電話のみ';
$string['audio_voip'] = 'VoIPのみ';
$string['cachedef_sessions'] = 'ユーザーレポートリクエスト要求によりZoomから得た情報';
$string['cachedef_zoomid'] = 'ユーザーのZoomユーザーID';
$string['calendardescriptionintro'] = '\\n記述:\\n{$a}';
$string['calendardescriptionURL'] = 'ミーティング参加URL:{$a}';
$string['calendariconalt'] = 'カレンダーアイコン';
$string['clickjoin'] = 'ミーティング参加ボタンがクリックされた';
$string['connectionfailed'] = 'Connection failed:';
$string['connectionok'] = 'Connection working.';
$string['connectionstatus'] = 'connectionステータス';
$string['defaultsettings'] = 'デフォルトZoom設定';
$string['defaultsettings_help'] = 'これらの設定は全ての新規Zoomミーティングとウェビナーの初期設定を定義する。';
$string['downloadical'] = 'iCalダウンロード';
$string['duration'] = '期間(分)';
$string['endtime'] = '終了時刻';
$string['err_duration_nonpositive'] = '期間は正の値でなくてはならない。';
$string['err_duration_too_long'] = '期間は150時間を越えられない。';
$string['errorwebservice'] = 'Zoom webservice error:{$a}';
$string['err_password'] = 'パスワードは以下の文字のみを含む:[a-z A-Z 0-9 @ - _ *]。最大10文字。';
$string['err_start_time_past'] = '過去を開始日時にすることはできない。';
$string['export'] = 'エクスポート';
$string['firstjoin'] = '最初に参加可能';
$string['firstjoin_desc'] = '最も早いユーザーはスケジュールされたミーティングに参加できる（開始前の分数）。';
$string['getmeetingreports'] = 'Zoomからのミーティングレポートを取得';
$string['invalid_status'] = 'Status invalid, check the database.';
$string['join'] = '参加';
$string['joinbeforehost'] = 'ホストよりも先にミーティングに参加';
$string['join_meeting'] = 'ミーティングに参加';
$string['jointime'] = '参加時刻';
$string['leavetime'] = '退出時刻';
$string['licensesnumber'] = 'ライセンス数';
$string['lowlicenses'] = 'もしあなたのライセンス数がこれらの要求を越える場合、あなたが新しい活動をユーザーとして生成する際に別のユーザーのステータスを下げてPROライセンスを割り当てます。このオプションはアクティブなPROライセンスが5以上の場合に有効です。';
$string['meeting_finished'] = '完了';
$string['meeting_nonexistent_on_zoom'] = 'Zoomに存在しない';
$string['meeting_not_started'] = '開始しなかった';
$string['meetingoptions'] = 'ミーティングオプション';
$string['meetingoptions_help'] = '*ホストよりも先に参加*はホストの参加よりも先に、あるいはホストがミーティングに参加できない時に参加者に参加を認めます。';
$string['meeting_started'] = '進行中';
$string['meeting_time'] = '開始時刻';
$string['modulename'] = 'Zoomミーティング';
$string['modulename_help'] = 'Zoomは承認されたユーザーにオンラインミーティングのホストとなる機能を付与するビデオとWebカンファレンスプラットフォームです。';
$string['modulenameplural'] = 'Zoomミーティング';
$string['newmeetings'] = '新規ミーティング';
$string['nomeetinginstances'] = 'このミーティングのセッションが見当たらない';
$string['noparticipants'] = '今回、このセッションの参加者が見当たらない';
$string['nosessions'] = '既定の時間帯にセッションが見当たらない';
$string['nozooms'] = 'ミーティングなし';
$string['off'] = 'Off';
$string['oldmeetings'] = '終了したミーティング';
$string['on'] = 'On';
$string['option_audio'] = 'オーディオオプション';
$string['option_host_video'] = 'ホストのビデオ';
$string['option_jbh'] = 'ホストよりも先に参加を認める';
$string['option_participants_video'] = '参加者のビデオ';
$string['participants'] = '参加者';
$string['password'] = 'パスワード';
$string['passwordprotected'] = 'Password Protected';
$string['pluginadministration'] = 'Zoomミーティングの管理';
$string['pluginname'] = 'Zoomミーティング';
$string['privacy:metadata:zoom_meeting_details'] = '各ミーティングインスタンスの情報を格納するデータベーステーブル';
$string['privacy:metadata:zoom_meeting_details:topic'] = 'ユーザーが出席したミーティングの名前';
$string['privacy:metadata:zoom_meeting_participants'] = 'ミーティング参加者の情報を格納するデータベーステーブル';
$string['privacy:metadata:zoom_meeting_participants:attentiveness_score'] = '参加者の注意力スコア';
$string['privacy:metadata:zoom_meeting_participants:duration'] = '参加者がミーティングにどれくらい長く在室したか';
$string['privacy:metadata:zoom_meeting_participants:join_time'] = '参加者がミーティングに参加した時刻';
$string['privacy:metadata:zoom_meeting_participants:leave_time'] = '参加者がミーティングを提出した時刻';
$string['privacy:metadata:zoom_meeting_participants:name'] = '参加者の名前';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = '参加者の電子メールアドレス';
$string['recurringmeeting'] = '繰り返し';
$string['recurringmeeting_help'] = '終了日なし';
$string['recurringmeetinglong'] = '繰り返しミーティング（終了日時なしのミーティング）';
$string['redefinelicenses'] = 'ライセンスの再定義';
$string['report'] = 'レポート';
$string['reportapicalls'] = 'レポートAPIコールを使い果たした';
$string['requirepassword'] = 'ミーティングパスワードの要求';
$string['resetapicalls'] = 'APIコールの許可数をリセット';
$string['search:activity'] = 'Zoom - 活動情報';
$string['sessions'] = 'セッション';
$string['start'] = '開始';
$string['starthostjoins'] = 'ホストの参加時にビデオを開始';
$string['start_meeting'] = 'ミーティング開始';
$string['startpartjoins'] = '参加者の参加時にビデオを開始';
$string['starttime'] = '開始時刻';
$string['start_time'] = 'いつ';
$string['status'] = 'ステータス';
$string['title'] = 'タイトル';
$string['topic'] = 'トピック';
$string['unavailable'] = '今回は参加不可';
$string['updatemeetings'] = 'ミーティング設定のZoomからの更新';
$string['usepersonalmeeting'] = 'パーソナルミーティングID {$a} の使用';
$string['webinar'] = 'ウェビナー';
$string['webinar_already_false'] = '<p><b>このモジュールは既にウェビナーではなくミーティングとしてセットされている。あなたはミーティング生成後にこの設定を切り替えることはできない。</b></p>';
$string['webinar_already_true'] = '<p><b>このモジュールは既にミーティングではなくウェビナーとしてセットされている。あなたはウェビナー生成後にこの設定を切り替えることはできない。</b></p>';
$string['webinar_help'] = 'このオプションは未認証のZoomアカウントに対してのみ有効です。';
$string['zoom:addinstance'] = '新規Zoomミーティングの追加';
$string['zoomerr'] = 'An error occured with Zoom.';
$string['zoomerr_apikey_missing'] = 'Zoom API key not found';
$string['zoomerr_apisecret_missing'] = 'Zoom API secret not found';
$string['zoomerr_id_missing'] = 'あなたはコースモジュールIDかインスタンスIDを指定しなければならない。';
$string['zoomerr_licensescount_missing'] = 'Zoom最大限設定を発見したが、ライセンス数設定が見当たらない';
$string['zoomerr_meetingnotfound'] = 'このミーティングはZoom上に存在しない。 You can <a href="{$a->recreate}">recreate it here</a> or <a href="{$a->delete}">delete it completely</a>.';
$string['zoomerr_meetingnotfound_info'] = 'このミーティングはZoom上に存在しない。何か質問があるならばミーティングのホストに連絡してください。';
$string['zoomerr_usernotfound'] = 'Zoom上にあなたのアカウントが見つかりません。 If you are using Zoom for the first time, you must Zoom account by logging into Zoom <a href="{$a}" target="_blank">{$a}</a>. Once you\'ve activated your Zoom account, reload this page and continue setting up your meeting. Else make sure your email on Zoom matches your email on this system.';
$string['zoomurl'] = 'ZoomホームページURL';
$string['zoom:view'] = 'Zoomミーティングを見る';
