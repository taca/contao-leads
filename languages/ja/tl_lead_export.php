<?php

/**
 * leads Extension for Contao Open Source CMS
 *
 * @copyright  Copyright (c) 2011-2015, terminal42 gmbh
 * @author     terminal42 gmbh <info@terminal42.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html LGPL
 * @link       http://github.com/terminal42/contao-leads
 */


/**
 * Load forms language
 */
\System::loadLanguageFile('tl_form');
\System::loadLanguageFile('tl_form_field');


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_lead_export']['name']                     = array('構成名', '構成の名前を入力してください。');
$GLOBALS['TL_LANG']['tl_lead_export']['type']                     = array('データ型', 'データ型を選択してください。');
$GLOBALS['TL_LANG']['tl_lead_export']['filename']                 = array('独自のファイル名', '独自のファイル名を指定できます。ワイルドカード(例: ##date##)を使用できます。詳細はヘルプのウィザードを参照してください。');
$GLOBALS['TL_LANG']['tl_lead_export']['useTemplate']              = array('テンプレートを使用', 'このチェックボックスを選択すると、テンプレートに基づいてデータをエクスポートします。');
$GLOBALS['TL_LANG']['tl_lead_export']['startIndex']               = array('開始のインデックス', 'どの行からリードがデータの「貼り付け」を開始するか指定できます。行の番号は(0ではなく)1からです!');
$GLOBALS['TL_LANG']['tl_lead_export']['sheetIndex']               = array('シートのインデックス', 'どのシートからリードがデータの「貼り付け」を開始するか指定できます。シートの番号は(0ではなく)1からです!');
$GLOBALS['TL_LANG']['tl_lead_export']['template']                 = array('テンプレート', 'テンプレートを選択してください。');
$GLOBALS['TL_LANG']['tl_lead_export']['headerFields']             = array('ヘッダーの項目', 'ファイルにヘッダーの欄を含めます。');
$GLOBALS['TL_LANG']['tl_lead_export']['export']                   = array('エクスポートする型', 'エクスポートするデータを選択してください。');
$GLOBALS['TL_LANG']['tl_lead_export']['fields']                   = array('項目', 'エクスポートしたい項目を選択してください。');
$GLOBALS['TL_LANG']['tl_lead_export']['fields_field']             = array('項目');
$GLOBALS['TL_LANG']['tl_lead_export']['fields_name']              = array('ヘッダー名');
$GLOBALS['TL_LANG']['tl_lead_export']['fields_value']             = array('値');
$GLOBALS['TL_LANG']['tl_lead_export']['fields_format']            = array('書式');
$GLOBALS['TL_LANG']['tl_lead_export']['tokenFields']              = array('列', 'エクスポートの構成を選択してください。');
$GLOBALS['TL_LANG']['tl_lead_export']['tokenFields_targetColumn'] = array('列');
$GLOBALS['TL_LANG']['tl_lead_export']['tokenFields_tokensValue']  = array('シンプルトークン(と挿入タグ)');
$GLOBALS['TL_LANG']['tl_lead_export']['lastRun']                  = array('最終エクスポート日時', 'エクスポートを実行したときに自動更新します。');
$GLOBALS['TL_LANG']['tl_lead_export']['skipLastRun']              = array('最終エクスポート日時より新しいリードだけエクスポート', '最終エクスポート日時より新しいリードのデータだけをエクスポートしたい場合に選択してください。');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_lead_export']['name_legend']   = '名前と型';
$GLOBALS['TL_LANG']['tl_lead_export']['config_legend'] = '構成';
$GLOBALS['TL_LANG']['tl_lead_export']['date_legend']   = 'エクスポート日';


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_lead_export']['export']['all']                      = 'すべてのデータをエクスポート';
$GLOBALS['TL_LANG']['tl_lead_export']['export']['fields']                   = '独自のエクスポート';
$GLOBALS['TL_LANG']['tl_lead_export']['export']['tokens']                   = 'シンプルトークンのある独自のエクスポート';
$GLOBALS['TL_LANG']['tl_lead_export']['fields_value']['all']                = 'ラベルと値';
$GLOBALS['TL_LANG']['tl_lead_export']['fields_value']['label']              = 'ラベルだけ(利用できる場合は値で代替)';
$GLOBALS['TL_LANG']['tl_lead_export']['fields_value']['value']              = '値だけ';
$GLOBALS['TL_LANG']['tl_lead_export']['fields_format']['raw']               = &$GLOBALS['TL_LANG']['tl_form']['raw'][0];
$GLOBALS['TL_LANG']['tl_lead_export']['fields_format']['date']              = &$GLOBALS['TL_LANG']['tl_form_field']['date'][0];
$GLOBALS['TL_LANG']['tl_lead_export']['fields_format']['datim']             = &$GLOBALS['TL_LANG']['tl_form_field']['datim'][0];
$GLOBALS['TL_LANG']['tl_lead_export']['fields_format']['time']              = &$GLOBALS['TL_LANG']['tl_form_field']['time'][0];
$GLOBALS['TL_LANG']['tl_lead_export']['fields_format']['uuidToFilePath']    = 'ファイルのUUID → Fileのパス';
$GLOBALS['TL_LANG']['tl_lead_export']['field_form']                         = 'フォーム';
$GLOBALS['TL_LANG']['tl_lead_export']['field_created']                      = '作成日時';
$GLOBALS['TL_LANG']['tl_lead_export']['field_member']                       = 'メンバー';
$GLOBALS['TL_LANG']['tl_lead_export']['field_skip']                         = '列を無視';



/**
 * Export types
 */
$GLOBALS['TL_LANG']['tl_lead_export']['type']['csv']  = 'CSV (.csv)';
$GLOBALS['TL_LANG']['tl_lead_export']['type']['xls']  = 'Excel 97/2000/2003 (.xls)';
$GLOBALS['TL_LANG']['tl_lead_export']['type']['xlsx'] = 'Excel 2007/2010 (.xlsx)';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_lead_export']['new']    = array('新しい構成', '新規作成');
$GLOBALS['TL_LANG']['tl_lead_export']['show']   = array('構成の詳細', 'ID %sの構成を表示');
$GLOBALS['TL_LANG']['tl_lead_export']['edit']   = array('構成を編集', 'ID %sの構成を編集');
$GLOBALS['TL_LANG']['tl_lead_export']['cut']    = array('構成を移動', 'ID %sの構成を移動');
$GLOBALS['TL_LANG']['tl_lead_export']['copy']   = array('構成を複製', 'ID %sの構成を複製');
$GLOBALS['TL_LANG']['tl_lead_export']['delete'] = array('構成を削除', 'ID %sの構成を削除');


/**
 * Errors
 */
$GLOBALS['TL_LANG']['tl_lead_export']['exportError']['general'] = '一般的なエラーが発生しました。システム管理者に知らせてください。';
$GLOBALS['TL_LANG']['tl_lead_export']['exportError']['noRows']  = 'この構成にはエクスポートするデータがありません。';
