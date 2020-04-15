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
 * Strings for component 'enrol_autoenrol', language 'ja', branch 'MOODLE_38_STABLE'
 *
 * @package   enrol_autoenrol
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysenrol'] = '常に登録する';
$string['alwaysenrol_help'] = 'この設定を有効にした場合、すでに別の方法でコースにアクセスしていたとしても、プラグインは常にユーザを登録します。';
$string['auto'] = '自動';
$string['auto_desc'] = 'このグループは自動登録プラグインにより自動的に作成されました。あなたがコースから自動登録プラグインを削除した場合、このグループも削除されます。';
$string['autoenrol:config'] = '自動登録を設定する';
$string['autoenrol:method'] = 'ログイン時、ユーザはユーザをコースに登録できる';
$string['autoenrol:unenrol'] = 'ユーザは自動登録されたユーザを登録解除できる';
$string['autoenrol:unenrolself'] = 'アクセス時に登録された場合、ユーザは自分を登録解除できる';
$string['config'] = '設定';
$string['countlimit'] = '制限';
$string['countlimit_help'] = 'このインスタンスはコースの登録数をカウントして、一定レベルに達した場合にユーザ登録を中止することができます。デフォルト設定の「0」は制限なしを意味します。';
$string['defaultrole'] = 'デフォルトのロール割り当て';
$string['defaultrole_desc'] = '自動登録時、ユーザに割り当てられるロールを選択してください。';
$string['emptyfield'] = 'No {$a}';
$string['filter'] = '次のみ許可する';
$string['filter_help'] = '「グループ」が選択された場合、あなたがコースに登録したいユーザのタイプをフィルタするため、このフィールドを使用することができます。「認証方法」でグループ化して、「手動登録」ユーザのみにフィルタする場合、あなたのサイトに直接登録されたユーザのみ登録されます。';
$string['filtering'] = 'ユーザフィルタリング';
$string['g_auth'] = '認証方法';
$string['g_dept'] = '部署';
$string['g_email'] = 'メールアドレス';
$string['general'] = '一般';
$string['g_inst'] = 'インスティテューション';
$string['g_lang'] = '言語';
$string['g_none'] = '選択 ...';
$string['groupon'] = 'グループ';
$string['groupon_help'] = 'これらのユーザフィールドをベースに登録された場合、自動登録はユーザを自動的にグループに追加することができます。';
$string['instancename'] = 'カスタムラベル';
$string['instancename_help'] = 'この登録方法が何をするのか明確にするため、あなたはカスタムラベルを追加することができます。このオプションは1つのコースに複数の自動登録のインスタンスがある場合に最も有用です。';
$string['m_course'] = 'コース読み込み中';
$string['method'] = '登録タイミング';
$string['method_help'] = 'コースへのアクセスを待たずにユーザを登録したい場合、パワーユーザはプラグインの動作を変更するためにこの設定を使用することができます。これはデフォルトでユーザの「ダッシュボード (マイコース)」リストにコースが表示される場合に有用です。';
$string['m_site'] = 'サイトログイン中';
$string['pluginname'] = '自動登録';
$string['pluginname_desc'] = '自動登録モジュールではログインユーザがコースに入ることを自動的に許可して、コースに登録されるオプションを提供します。これはゲストアクセスが許可されることに似ていますが、学生は継続的に登録されるため、コース内のフォーラムおよび活動に参加することができます。';
$string['removegroups'] = 'グループを削除する';
$string['removegroups_desc'] = '登録インスタンスが削除された場合、作成されたグループを削除してもよろしいですか?';
$string['role'] = 'ロール';
$string['role_help'] = 'パワーユーザは登録されるユーザのパーミッションを変更するため、この設定を使用することができます。';
$string['softmatch'] = 'ソフトマッチ';
$string['softmatch_help'] = '自動登録が有効にされた場合、「次のみ許可する」の設定値に完全に合致する代わりに一部合致するユーザが登録されます。ソフトマッチでは大文字小文字も区別します。「次のみ許可する」の設定値はグループ名に使用されます。';
$string['unenrolselfconfirm'] = '本当にあなたをコース「 {$a} 」から登録解除してもよろしいですか? あなたはコースを再度訪問して登録することはできますが、評定および課題提出等を失うことになります。';
$string['warning'] = '注意!';
$string['warning_message'] = 'このプラグインをあなたのコースに追加することにより、すべての登録済みMoodleユーザがあなたのコースにアクセスできるようになります。ログインしたユーザがあなたのコースにオープンアクセスすることを許可したい場合のみ、このプラグインをインストールしてください。';
