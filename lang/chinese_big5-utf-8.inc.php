<?php
/* $Id$ */

/**
 * Last translation by: Siu Sun <siusun@best-view.net>
 * Follow by the original translation of Taiyen Hung 洪泰元<yen789@pchome.com.tw>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'helvetica, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y, %I:%M %p';

$timespanfmt = '%s 日, %s 小時, %s 分鐘 %s 秒';

$strAPrimaryKey = '主鍵已經新增到 %s';
$strAbortedClients = '取消';
$strAbsolutePathToDocSqlDir = '請輸入 docSQL 目錄於網頁伺服器的絕對路徑';
$strAccessDenied = '拒絕存取';
$strAccessDeniedExplanation = 'phpMyAdmin 嘗試連線到 MySQL 伺服器, 但伺服器拒絕了連線. 您應於 config.inc.php 內檢查主機名稱, 登入名稱及密碼及確保這些資料是與系統管理人員所提供的 MySQL 伺服器資料相同';
$strAction = '執行';
$strAddAutoIncrement = "新增 AUTO_INCREMENT 數值";
$strAddConstraints = '加入限制';
$strAddDeleteColumn = '新增/減少 選擇欄';
$strAddDeleteRow = '新增/減少 篩選列';
$strAddDropDatabase = '加入 \'刪除資料表\' 語法';
$strAddIntoComments = '加入註解文字';
$strAddNewField = '增加新欄位';
$strAddPriv = '增加新權限';
$strAddPrivMessage = '您已經為下面這位使用者增加了新權限.';
$strAddPrivilegesOnDb = '於以下資料庫加入權限';
$strAddPrivilegesOnTbl = '於以下資料表加入權限';
$strAddSearchConditions = '增加檢索條件 ("where" 子句的主體)';
$strAddToIndex = '新增 &nbsp;%s&nbsp; 組索引欄';
$strAddUser = '新增使用者';
$strAddUserMessage = '您已新增了一個新使用者.';
$strAddedColumnComment = '於以下欄位加入註解文字';
$strAddedColumnRelation = '於以下欄位加入關聯';
$strAdministration = '系統管理';
$strAffectedRows = '影響列數: ';
$strAfter = '在 %s 之後';
$strAfterInsertBack = '返回';
$strAfterInsertNewInsert = '新增一筆記錄';
$strAll = '全部';
$strAllTableSameWidth = '以相同寬度顯示所有資料表?';
$strAlterOrderBy = '根據欄位內容排序記錄';
$strAnIndex = '索引已經新增到 %s';
$strAnalyzeTable = '分析資料表';
$strAnd = '與';
$strAny = '任何';
$strAnyColumn = '任何欄位';
$strAnyDatabase = '任何資料庫';
$strAnyHost = '任何主機';
$strAnyTable = '任何資料表';
$strAnyUser = '任何使用者';
$strArabic = '阿拉伯文';
$strArmenian = '美式英文'; 
$strAscending = '遞增';
$strAtBeginningOfTable = '於資料表開頭';
$strAtEndOfTable = '於資料表尾端';
$strAttr = '屬性';
$strAutodetect = '自動偵測';
$strAutomaticLayout = '自動格式';

$strBack = '回上一頁';
$strBaltic = '波羅的海文';
$strBeginCut = '開始 剪取';
$strBeginRaw = '開始 原始資料';
$strBinary = '二進制碼';
$strBinaryDoNotEdit = '二進制碼 - 不能編輯';
$strBookmarkAllUsers = '所有用者可讀取此書籤';
$strBookmarkDeleted = '書籤已經刪除.';
$strBookmarkLabel = '書籤名稱';
$strBookmarkOptions = '書籤選項';
$strBookmarkQuery = 'SQL 語法書籤';
$strBookmarkThis = '將此 SQL 語法加入書籤';
$strBookmarkView = '查看';
$strBrowse = '瀏覽';
$strBrowseForeignValues = '瀏覽外來值';
$strBulgarian = '保加利亞文';
$strBzError = 'phpMyAdmin 無法壓縮因於這個 php 版本的 Bz2 模組錯誤. 強列要求於 phpMyAdmin 設定檔設定 <code>$cfg[\'BZipDump\']</code> 為<code>FALSE</code>. 如果想使用 Bz2 壓縮功能,請更新 php 到最新版本. 詳情請參看 php 錯誤報報 %s .';
$strBzip = '"bzipped"';

$strCSVOptions = 'CSV 選項';
$strCannotLogin = '無法登入 MySQL 伺服器';
$strCantLoad = '無法讀取 %s 模組,<br />請檢查 PHP 設定';
$strCantLoadMySQL = '不能載入 MySQL 模組,<br />請檢查 PHP 的組態設定';
$strCantLoadRecodeIconv = '未能讀取 iconv 或重新編碼程式來作文字編碼轉換, 請設定 php 來啟動這些模組或取消 phpMyAdmin 使用文字編碼轉換功能.';
$strCantRenameIdxToPrimary = '無法將索引更名為 PRIMARY!';
$strCantUseRecodeIconv = '當文編碼模組讀取後,未能使用 iconv, libiconv 或 recode_string 功能. 請檢查您的 php 設定.';
$strCardinality = '組別';
$strCarriage = '歸位: \\r';
$strCaseInsensitive = '大小寫不相符';
$strCaseSensitive = '大小寫相符';
$strCentralEuropean = '中歐語文';
$strChange = '修改';
$strChangeCopyMode = '建立新使用者及使用相同之權限, 及 ...';
$strChangeCopyModeCopy = '... 保留舊使用者.';
$strChangeCopyModeDeleteAndReload = ' ... 刪除舊使用者及重新讀取權限資料表.';
$strChangeCopyModeJustDelete = ' ... 刪除舊使用者.';
$strChangeCopyModeRevoke = ' ... 廢除所有舊使用者有效之權限並刪除.';
$strChangeCopyUser = '更改登入資訊 / 複製使用者';
$strChangeDisplay = '選擇顯示之欄位';
$strChangePassword = '更改密碼';
$strCharset = '文字格式 (Charset)';
$strCharsetOfFile = '字元表檔案:';
$strCharsets = '字元集';
$strCharsetsAndCollations = '字元集及校對';
$strCheckAll = '全選';
$strCheckDbPriv = '檢查資料庫權限';
$strCheckOverhead = '檢查額外記錄 (overheaded)'; // nor sure yet.
$strCheckPrivs = '查詢權限';
$strCheckPrivsLong = '查詢資料庫 &quot;%s&quot; 之權限.';
$strCheckTable = '檢查資料表';
$strChoosePage = '請選擇需要編輯的頁碼';
$strColComFeat = '顯示欄位註解';
$strCollation = '校對';
$strColumn = '欄位';
$strColumnNames = '欄位名稱';
$strColumnPrivileges = '指定欄位權限';
$strCommand = '指令';
$strComments = '註解';
$strCompleteInserts = '使用完整新增指令';
$strCompression = '壓縮';
$strConfigFileError = 'phpMyAdmin 未能讀取您的設定檔! 這可能是因為 php 找到語法上的錯誤或 php 未能找到檔案而成.<br />請嘗試直接按下下方的連結開啟並查看 php 的錯誤信息. 通常的錯誤都來自某處漏了引號或分別.<br />如果按下連結後出現空白頁, 即代表沒有任何問題.';
$strConfigureTableCoord = '請設定表格 %s 內的坐標';
$strConfirm = '您確定要這樣做？';
$strConnections = '連線';
$strConstraintsForDumped = '備份資料表限制';
$strConstraintsForTable = '資料表限制';
$strCookiesRequired = 'Cookies 必須啟動才能登入.';
$strCopyTable = '複製資料表到： (格式為 資料庫名稱<b>.</b>資料表名稱):';
$strCopyTableOK = '已經將資料表 %s 複製為 %s.';
$strCopyTableSameNames = '無法複製到相同資料表!';
$strCouldNotKill = 'phpMyAdmin 無法中斷指令 %s. 可能這指令已經結束.';
$strCreate = '建立';
$strCreateIndex = '新增 &nbsp;%s&nbsp; 組索引欄';
$strCreateIndexTopic = '新增一組索引';
$strCreateNewDatabase = '建立新資料庫';
$strCreateNewTable = '建立新資料表於資料庫 %s';
$strCreatePage = '建立新一頁';
$strCreatePdfFeat = '建立 PDF';
$strCreationDates = '建立/更新/檢查 日期';
$strCriteria = '篩選';
$strCroatian = '克羅西亞文';
$strCyrillic = '西里爾文';
$strCzech = '捷克文';

$strDBComment = '資料庫註解文字: ';
$strDBGContext = '本文 (Context)';
$strDBGContextID = '本文 (Context) ID';
$strDBGHits = '次數';
$strDBGLine = '行';
$strDBGMaxTimeMs = '最大時間, ms';
$strDBGMinTimeMs = '最小時間, ms';
$strDBGModule = '模組';
$strDBGTimePerHitMs = '時間/次, ms';
$strDBGTotalTimeMs = '總時間, ms';
$strDanish = '丹麥文';
$strData = '資料';
$strDataDict = '數據字典';
$strDataOnly = '只有資料';
$strDatabase = '資料庫';
$strDatabaseExportOptions = '資料庫輸出選項';
$strDatabaseHasBeenDropped = '資料庫 %s 已被刪除';
$strDatabaseNoTable = '這資料庫沒有資料表!';
$strDatabaseWildcard = '資料庫 (允許使用萬用字元):';
$strDatabases = '資料庫';
$strDatabasesDropped = '%s 個資料庫已成功刪除.';
$strDatabasesStats = '資料庫統計';
$strDatabasesStatsDisable = '停止統計數據';
$strDatabasesStatsEnable = '啟動統計數據';
$strDatabasesStatsHeavyTraffic = '註: 啟動資料庫統計數據可能會產生大量由 Web 伺服器及 MySQL 之間的流量.';
$strDbPrivileges = '指定資料庫權限';
$strDbSpecific = '指定資料庫';
$strDefault = '預設值';
$strDefaultValueHelp = '預設值: 請只輸入該預設值, 無需加上任何反斜線或引號';
$strDelOld = '本頁的參考到資料表已不存在. 您希望刪除這些參考嗎?';
$strDelayedInserts = '使用延遲式新增';
$strDelete = '刪除';
$strDeleteAndFlush = '刪除使用者及重新讀取權限.';
$strDeleteAndFlushDescr = '這是一個最清潔的做法,但重新讀取權限需一段時間.';
$strDeleteFailed = '刪除失敗!';
$strDeleteUserMessage = '您已經將使用者 %s 刪除.';
$strDeleted = '記錄已被刪除';
$strDeletedRows = '已刪除欄數:';
$strDeleting = '刪除 %s';
$strDescending = '遞減';
$strDescription = '說明';
$strDictionary = '字典';
$strDisabled = '未啟動';
$strDisplay = '顯示';
$strDisplayFeat = '功能顯示';
$strDisplayOrder = '顯示次序';
$strDisplayPDF = '顯示 PDF 概要';
$strDoAQuery = '以範例查詢 (萬用字元 : "%")';
$strDoYouReally = '您確定要 ';
$strDocu = '說明文件';
$strDrop = '刪除';
$strDropDB = '刪除資料庫 %s';
$strDropSelectedDatabases = '刪除已選擇之資料庫';
$strDropTable = '刪除資料表';
$strDropUsersDb = '刪除與使用者相同名稱之資料庫.';
$strDumpComments = '加入欄位註解作為內建 SQL-註解';
$strDumpSaved = '備份已儲到檔案 %s.';
$strDumpXRows = '備份 %s 行, 由 %s 行開始.';
$strDumpingData = '列出以下資料庫的數據：';
$strDynamic = '動態';

$strEdit = '編輯';
$strEditPDFPages = '編輯 PDF 頁碼';
$strEditPrivileges = '編輯權限';
$strEffective = '實際';
$strEmpty = '清空';
$strEmptyResultSet = 'MySQL 傳回的查詢結果為空 (原因可能為：沒有找到符合條件的記錄)';
$strEnabled = '啟動';
$strEnd = '最後一頁';
$strEndCut = '結束 剪取';
$strEndRaw = '結束 原始資料';
$strEnglish = '英文';
$strEnglishPrivileges = '注意: MySQL 權限名稱會以英語顯示';
$strError = '錯誤';
$strEstonian = '愛沙尼亞文';
$strExcelEdition = 'Excel 版本';
$strExcelOptions = 'Excel 選項';
$strExecuteBookmarked = '執行書籤查詢';
$strExplain = '說明 SQL';
$strExport = '輸出';
$strExportToXML = '輸出為 XML 格式';
$strExtendedInserts = '伸延新增模式';
$strExtra = '附加';

$strFailedAttempts = '嘗試失敗';
$strField = '欄位';
$strFieldHasBeenDropped = '資料表 %s 已被刪除';
$strFields = '欄位';
$strFieldsEmpty = ' 欄位總數是空的! ';
$strFieldsEnclosedBy = '「欄位」使用字元：';
$strFieldsEscapedBy = '「ESCAPE」使用字元：';
$strFieldsTerminatedBy = '「欄位分隔」使用字元：';
$strFileAlreadyExists = '檔案 %s 已存在,請更改檔案名稱或選擇「覆寫己存在檔案」選項.';
$strFileCouldNotBeRead = '讀案無法讀取';
$strFileNameTemplate = '檔案名稱樣式';
$strFileNameTemplateHelp = '使用 __DB__ 作為資料庫名稱, __TABLE__ 為資料表名稱. %s任何 strftime%s 內關於時間及附加選項會自動加入. 其他文字將會保留.';
$strFileNameTemplateRemember = '保留樣式名稱';
$strFixed = '固定';
$strFlushPrivilegesNote = '註: phpMyAdmin 直接由 MySQL 權限資料表取得使用者權限. 如果使用者自行更改資料表, 資料表內容將可能與實際使用者情況有異. 在這情況下, 您應在繼續前 %s重新載入%s 權限資料表.';
$strFlushTable = '強迫更新資料表 ("FLUSH")';
$strFormEmpty = '表格內漏填一些資料!';
$strFormat = '格式';
$strFullText = '顯示完整文字';
$strFunction = '函數';

$strGenBy = '建立';
$strGenTime = '建立日期';
$strGeneralRelationFeat = '一般關聯功能';
$strGerman = '德語';
$strGlobal = '整體';
$strGlobalPrivileges = '整體權限';
$strGlobalValue = '整體值';
$strGo = '執行';
$strGrantOption = '授權';
$strGrants = 'Grants'; //should expressed in English
$strGreek = '希臘文';
$strGzip = '"gzipped"';

$strHasBeenAltered = '已經修改';
$strHasBeenCreated = '已經建立';
$strHaveToShow = '您需要選擇最少顯示一行欄位';
$strHebrew = '希伯來文';
$strHome = '主目錄';
$strHomepageOfficial = 'phpMyAdmin 官方網站';
$strHomepageSourceforge = 'phpMyAdmin 下載網頁';
$strHost = '主機';
$strHostEmpty = '請輸入主機名稱!';
$strHungarian = '匈牙利文';

$strId = 'ID'; // use eng
$strIdxFulltext = '全文檢索';
$strIfYouWish = '如果您要指定資料匯入的欄位，請輸入用逗號隔開的欄位名稱';
$strIgnore = '忽略';
$strIgnoringFile = '忽略檔案 %s';
$strImportDocSQL = '讀取 docSQL 檔案';
$strImportFiles = '輸入檔案';
$strImportFinished = '輸入完成';
$strInUse = '使用中';
$strIndex = '索引';
$strIndexHasBeenDropped = '索引 %s 已被刪除';
$strIndexName = '索引名稱&nbsp;:';
$strIndexType = '索引類型&nbsp;:';
$strIndexes = '索引';
$strInnodbStat = 'InnoDB 狀態';
$strInsecureMySQL = '設定檔內有關設定 (root登入及沒有密碼) 與預設的 MySQL 權限戶口相同。 MySQL 伺服器在這預設的設定運行的話會很容易被入侵，您應更改有關設定去防止安全漏洞。';
$strInsert = '新增';
$strInsertAsNewRow = '儲存為新記錄';
$strInsertNewRow = '新增一筆記錄';
$strInsertTextfiles = '將文字檔資料匯入資料表';
$strInsertedRowId = '新增資料列 id:';
$strInsertedRows = '新增列數:';
$strInstructions = '指令';
$strInternalNotNecessary = '* 當內部關聯在 InnoDB 已存在時是無需要的.';
$strInternalRelations = '內部關聯';
$strInvalidName = '"%s" 是一個保留字,您不能將保留字使用為 資料庫/資料表/欄位 名稱.';

$strJapanese = '日文';
$strJumpToDB = '跳到資料庫 &quot;%s&quot;.';
$strJustDelete = '只從權限資料庫刪除使用者.';
$strJustDeleteDescr = ' &quot;刪除&quot; 的使用者仍然能夠登入資料庫直至重新載入資料庫為止.';

$strKeepPass = '請不要更改密碼';
$strKeyname = '鍵名';
$strKill = 'Kill'; //should expressed in English
$strKorean = '韓文';

$strLaTeX = 'LaTeX';  // use eng
$strLaTeXOptions = 'LaTeX 選項';
$strLandscape = '橫向';
$strLatexCaption = '資料表標題';
$strLatexContent = '資料表 __TABLE__ 內容';
$strLatexContinued = '(連續)';
$strLatexContinuedCaption = '連續資料表標題';
$strLatexIncludeCaption = '包括資料表標題';
$strLatexLabel = '標記鍵名';
$strLatexStructure = '資料表 __TABLE__ 結構';
$strLength = '長度';
$strLengthSet = '長度/集合*';
$strLimitNumRows = '筆記錄/每頁';
$strLineFeed = '換行: \\n';
$strLines = '行數';
$strLinesTerminatedBy = '「下一行」使用字元：';
$strLinkNotFound = '找不到連結';
$strLinksTo = '連結到';
$strLithuanian = '立陶宛文';
$strLoadExplanation = '最佳模式是由系統自動檢查, 如果錯誤, 您可自由更改.';
$strLoadMethod = 'LOAD 模式';
$strLocalhost = '本地';
$strLocationTextfile = '文字檔案的位置';
$strLogPassword = '密碼:';
$strLogServer = '伺服器';
$strLogUsername = '登入名稱:';
$strLogin = '登入';
$strLoginInformation = '登入資訊';
$strLogout = '登出系統';

$strMIME_MIMEtype = 'MIME 類型';
$strMIME_available_mime = '可使用 MIME 類型';
$strMIME_available_transform = '可使用轉換方式';
$strMIME_description = '說明';
$strMIME_file = '檔案名稱';
$strMIME_nodescription = '這個轉換方式沒有說明.<br />請向作者查詢 %s 是甚麼用途.';
$strMIME_transformation = '瀏覽器轉換方式';
$strMIME_transformation_note = '有關可使用之轉換方式選項及 MINE 類型轉換選項, 請查看 %s轉換方式說明%s';
$strMIME_transformation_options = '轉換方式選項';
$strMIME_transformation_options_note = '請用以下的格式輸入轉換選項值: \'a\',\'b\',\'c\'...<br />如您需要輸入反斜線 ("\") 或單引號 ("\'") 請再加上反斜線 (例如 \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_without = 'MIME 類型以斜體顯示是沒有分隔轉換功能';
$strMissingBracket = '找不到括號';
$strModifications = '修改已儲存';
$strModify = '修改';
$strModifyIndexTopic = '修改索引';
$strMoreStatusVars = '更多狀況資訊';
$strMoveTable = '移動資料表到：(格式為 資料庫名稱<b>.</b>資料表名稱)';
$strMoveTableOK = '資料表 %s 已經移動到 %s.';
$strMoveTableSameNames = '無法移動到相同資料表!';
$strMultilingual = '多語言';
$strMustSelectFile = '您應選擇需要新增的檔案.';
$strMySQLCharset = 'MySQL 文字編碼';
$strMySQLReloaded = 'MySQL 重新載入完成';
$strMySQLSaid = 'MySQL 傳回： ';
$strMySQLServerProcess = 'MySQL 版本 %pma_s1% 在 %pma_s2% 執行，登入者為 %pma_s3%';
$strMySQLShowProcess = '顯示程序 (Process)';
$strMySQLShowStatus = '顯示 MySQL 執行狀態';
$strMySQLShowVars = '顯示 MySQL 系統變數';

$strName = '名稱';
$strNext = '下一個';
$strNo = ' 否 ';
$strNoDatabases = '沒有資料庫';
$strNoDatabasesSelected = '沒有資料庫選擇.';
$strNoDescription = '沒有說明';
$strNoDropDatabases = '"DROP DATABASE" 指令已經停用.';
$strNoExplain = '略過說明 SQL';
$strNoFrames = 'phpMyAdmin 較為適合使用在支援<b>頁框</b>的瀏覽器.';
$strNoIndex = '沒有已定義的索引!';
$strNoIndexPartsDefined = '部份索引資料還未定義!';
$strNoModification = '沒有變更';
$strNoOptions = '這種格式並無選項';
$strNoPassword = '不用密碼';
$strNoPermission = 'Web 伺服器沒有權限儲存檔案 %s.';
$strNoPhp = '移除 PHP 程式碼';
$strNoPrivileges = '沒有權限';
$strNoQuery = '沒有 SQL 語法!';
$strNoRights = '您現在沒有足夠的權限!';
$strNoSpace = '空間不足儲存檔案 %s.';
$strNoTablesFound = '資料庫中沒有資料表';
$strNoUsersFound = '找不到使用者';
$strNoUsersSelected = '沒有選擇使用者.';
$strNoValidateSQL = '略過檢查 SQL';
$strNone = '不適用';
$strNotNumber = '這不是一個數字!';
$strNotOK = '未能確定';
$strNotSet = '<b>%s</b> 資料表找不到或還未在 %s 設定';
$strNotValidNumber = '不是有效的列數!';
$strNull = 'Null'; //should expressed in English
$strNumSearchResultsInTable = '%s 項資料符合 - 於資料表 <i>%s</i>';
$strNumSearchResultsTotal = '<b>總計:</b> <i>%s</i> 項資料符合';
$strNumTables = '個資料表';

$strOK = '確定';
$strOftenQuotation = '最常用的是引號，「非必須」表示只有 char 和 varchar 欄位會被包括起來';
$strOperations = '管理';
$strOptimizeTable = '最佳化資料表';
$strOptionalControls = '非必要選項，用來讀寫特殊字元';
$strOptionally = '非必須';
$strOptions = '選項';
$strOr = '或';
$strOverhead = '多餘';
$strOverwriteExisting = '覆寫已存在檔案';

$strPHP40203 = '您正使用 PHP 版本 4.2.3, 這版本有一個雙字節字元的嚴重錯誤(mbstring). 請參閱 PHP 臭蟲報告編號 19404. phpMyAdmin 並不建議使用這個版本的 PHP .';
$strPHPVersion = 'PHP 版本';
$strPageNumber = '頁碼:';
$strPaperSize = '紙張大小';
$strPartialText = '顯示部份文字';
$strPassword = '密碼';
$strPasswordChanged = '%s 的密碼已成功更改.';
$strPasswordEmpty = '請輸入密碼!';
$strPasswordNotSame = '第二次輸入的密碼不同!';
$strPdfDbSchema = '"%s" 資料庫概要 - 第 %s 頁';
$strPdfInvalidPageNum = 'PDF 頁碼沒有設定!';
$strPdfInvalidTblName = '資料表 "%s" 不存在!';
$strPdfNoTables = '沒有資料表';
$strPerHour = '每小時';
$strPerMinute = '每分鐘';
$strPerSecond = '每秒';
$strPhoneBook = '電話簿';
$strPhp = '建立 PHP 程式碼';
$strPmaDocumentation = 'phpMyAdmin 說明文件';
$strPmaUriError = ' 必須設定 <tt>$cfg[\'PmaAbsoluteUri\']</tt> 在設定檔內!';
$strPortrait = '直向';
$strPos1 = '第一頁';
$strPrevious = '前一頁';
$strPrimary = '主鍵';
$strPrimaryKey = '主鍵';
$strPrimaryKeyHasBeenDropped = '主鍵已被刪除';
$strPrimaryKeyName = '主鍵的名稱必須稱為 PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>必須</b>是主鍵的名稱以及是<b>唯一</b>一組主鍵!)';
$strPrint = '列印';
$strPrintView = '列印檢視';
$strPrintViewFull = '列印檢視 (顯示完整文字)';
$strPrivDescAllPrivileges = '包括所有權限除了授權 (GRNANT).';
$strPrivDescAlter = '容許修改現有資料表的結構.';
$strPrivDescCreateDb = '容許建立新資料庫及資料表.';
$strPrivDescCreateTbl = '容許建立新資料表.';
$strPrivDescCreateTmpTable = '容許建立暫時性資料表.';
$strPrivDescDelete = '容許刪除記錄.';
$strPrivDescDropDb = '容許刪除資料庫及資料表.';
$strPrivDescDropTbl = '容許刪除資料表.';
$strPrivDescExecute = '容許 執行預先儲存之程式. 於本 MySQL 版本無效.';
$strPrivDescFile = '容許輸入及輸出數據到檔案.';
$strPrivDescGrant = '容許新增使用者及權限而無需重新讀取權限資料表.';
$strPrivDescIndex = '容許建立及刪除索引.';
$strPrivDescInsert = '容許新增及取代數據.';
$strPrivDescLockTables = '容許鎖上現時連線之資料表.';
$strPrivDescMaxConnections = '限制每小時使用者開啟新連線的數目.';
$strPrivDescMaxQuestions = '限制每小時使用者查詢的數目.';
$strPrivDescMaxUpdates = '限制每小時使用者更改資料表及數據表之指令的數目.';
$strPrivDescProcess3 = '容許中止其他使用者之程序.';
$strPrivDescProcess4 = '容許檢視系統執行清單完整之查詢.';
$strPrivDescReferences = '於本 MySQL 版本無效.';
$strPrivDescReload = '容許重新讀取伺服器設定及強行更新伺服器快取記憶.';
$strPrivDescReplClient = '容許用戶查詢 slaves / masters 在何處.';
$strPrivDescReplSlave = '需要複製的 slaves.';
$strPrivDescSelect = '容許讀取數據.';
$strPrivDescShowDb = '可讀取整個資料庫清單.';
$strPrivDescShutdown = '容許停止伺服器.';
$strPrivDescSuper = '容許連線, 就算超過了最大連線限制; 用於最高系統管理如設定整體權限或中止其他使用者指令.';
$strPrivDescUpdate = '容許更新數據.';
$strPrivDescUsage = '沒有權限.';
$strPrivileges = '權限';
$strPrivilegesReloaded = '權限已成功重新讀取.';
$strProcesslist = '系統執行清單';
$strProperties = '屬性';
$strPutColNames = '將欄位名稱放在首行';

$strQBE = '依範例查詢 (QBE)';
$strQBEDel = '移除';
$strQBEIns = '新增';
$strQueryFrame = '查詢視窗';
$strQueryFrameDebug = '除錯資訊';
$strQueryFrameDebugBox = '即時變數來自 :\n資料庫: %s\n資料表: %s\n伺服器: %s\n\n現時查詢內的變數來自:\n資料庫: %s\n資料表: %s\n伺服器: %s\n\n開啟地址: %s\n頁框來自: %s.';
$strQueryOnDb = '在資料庫 <b>%s</b> 執行 SQL 語法:';
$strQuerySQLHistory = 'SQL 歷程';
$strQueryStatistics = '<b>查詣統計</b>: 當統計啟動後, 共有 %s 個查詢傳送到此伺服器.';
$strQueryTime = '查詢需時 %01.4f 秒';
$strQueryType = '查詢方式';
$strQueryWindowLock = '不要將這語法覆蓋到本視窗外的SQL語法';

$strReType = '確認密碼';
$strReceived = '接收';
$strRecords = '記錄';
$strReferentialIntegrity = '檢查指示完整性:';
$strRelationNotWorking = '關聯資料表的附加功能未能啟動, %s請按此%s 查出問題原因.';
$strRelationView = '關聯檢視';
$strRelationalSchema = '關聯概要';
$strRelations = '關聯';
$strReloadFailed = '重新載入MySQL失敗';
$strReloadMySQL = '重新載入 MySQL';
$strReloadingThePrivileges = '重新讀取權限';
$strRememberReload = '請記著重新啟動伺服器.';
$strRemoveSelectedUsers = '移除已選擇使用者';
$strRenameTable = '將資料表改名為';
$strRenameTableOK = '已經將資料表 %s 改名成 %s';
$strRepairTable = '修復資料表';
$strReplace = '取代';
$strReplaceNULLBy = '將 NULL 取代為';
$strReplaceTable = '以檔案取代資料表資料';
$strReset = '重置';
$strResourceLimits = '資源限制';
$strRevoke = '移除';
$strRevokeAndDelete = '廢除使用者所有有效之權限並刪除.';
$strRevokeAndDeleteDescr = '使用者仍然有 USAGE 權限直至權限資料表更新讀取.';
$strRevokeGrant = '移除 Grant 權限';
$strRevokeGrantMessage = '您已移除這位使用者的 Grant 權限: %s';
$strRevokeMessage = '您已移除這位使用者的權限: %s';
$strRevokePriv = '移除權限';
$strRowLength = '資料列長度';
$strRowSize = '資料列大小';
$strRows = '資料列列數';
$strRowsFrom = '筆記錄，開始列數:';
$strRowsModeFlippedHorizontal = '垂直 (旋轉標題)';
$strRowsModeHorizontal = '水平';
$strRowsModeOptions = '顯示為 %s 方式 及 每隔 %s 行顯示欄名';
$strRowsModeVertical = '垂直';
$strRowsStatistic = '資料列統計數值';
$strRunQuery = '執行語法';
$strRunSQLQuery = '在資料庫 %s 執行以下指令';
$strRunning = '在 %s 執行';
$strRussian = '俄文'; 

$strSQL = 'SQL'; // should express in english
$strSQLExportType = '輸出方式';
$strSQLOptions = 'SQL 選項';
$strSQLParserBugMessage = '這可能是您找到了 SQL 分析程式的一些程式錯誤，請細心查看您的語法，檢查一下引號是正確及沒有遺漏，其他可能出錯的原因可能來自您上載檔案時在引號外的地方使用了二進制碼。您可以嘗試在 MySQL 命令列介面執行該語法。如 MySQL 伺服器發出錯誤信息，這可能幫助您去找出問題所在。如您仍然未能解決問題，或在分析程式出現錯誤，但在命令列模式能正常執行，請將該句出現錯誤的 SQL 語法抽出，並將以下的"剪取"部份一同提交到臭虫區:';
$strSQLParserUserError = '可能是您的 SQL 語法出現錯誤，如 MySQL 伺服器發出錯誤信息，這可能幫助您去找出問題所在。';
$strSQLQuery = 'SQL 語法';
$strSQLResult = 'SQL 查詢結果';
$strSQPBugInvalidIdentifer = '無效的識別碼 (Invalid Identifer)';
$strSQPBugUnclosedQuote = '未完結的引號 (Unclosed quote)';
$strSQPBugUnknownPunctuation = '不知明的標點符號 (Unknown Punctuation String)';
$strSave = '儲存';
$strSaveOnServer = '儲存到伺服器於 %s 目錄';
$strScaleFactorSmall = '比例倍數太細, 無法將圖表放在一頁內';
$strSearch = '搜索';
$strSearchFormTitle = '搜索資料庫';
$strSearchInTables = '於以下資料表:';
$strSearchNeedle = '尋找之文字或數值 (萬用字元: "%"):';
$strSearchOption1 = '任何一組文字';
$strSearchOption2 = '所有文字';
$strSearchOption3 = '完整詞語';
$strSearchOption4 = '以規則表示法 (regular expression) 搜索';
$strSearchResultsFor = '搜索 "<i>%s</i>" 的結果 %s:';
$strSearchType = '尋找:';
$strSecretRequired = '設定檔案現在需要密碼 (passphrase) (blowfish_secret).';
$strSelect = '選擇';
$strSelectADb = '請選擇資料庫';
$strSelectAll = '全選';
$strSelectFields = '選擇欄位 (至少一個)';
$strSelectNumRows = '查詢中';
$strSelectTables = '選擇資料表';
$strSend = '下載儲存';
$strSent = '送出';
$strServer = '伺服器 %s';
$strServerChoice = '選擇伺服器';
$strServerStatus = '運行資訊';
$strServerStatusUptime = '這 MySQL 伺服器已啟動了 %s. 伺服器於 %s 啟動.';
$strServerTabProcesslist = '處理';
$strServerTabVariables = '資訊';
$strServerTrafficNotes = '<b>伺服器流量</b>: 這些表顯示了此 MySQL 伺服器自啟動以來的網絡流量統計。';
$strServerVars = '伺服器資訊及設定';
$strServerVersion = '伺服器版本';
$strSessionValue = '程序數值';
$strSetEnumVal = '如欄位格式是 "enum" 或 "set", 請使用以下的格式輸入: \'a\',\'b\',\'c\'...<br />如在數值上需要輸入反斜線 (\) 或單引號 (\') , 請再加上反斜線 (例如 \'\\\\xyz\' or \'a\\\'b\').';
$strShow = '顯示';
$strShowAll = '顯示全部';
$strShowColor = '顯示顏色';
$strShowCols = '顯示欄';
$strShowDatadictAs = '數據字典格式';
$strShowFullQueries = '顯示完整查詢';
$strShowGrid = '顯示框格';
$strShowPHPInfo = '顯示 PHP 資訊';
$strShowTableDimension = '顯示表格大小';
$strShowTables = '顯示資料表';
$strShowThisQuery = '重新顯示 SQL 語法 ';
$strShowingRecords = '顯示記錄';
$strSimplifiedChinese = '簡體中文';
$strSingly = '(只會排序現時的記錄)';
$strSize = '大小';
$strSort = '排序';
$strSortByKey = '依鍵名排序';
$strSpaceUsage = '已使用空間';
$strSplitWordsWithSpace = '每組文字以空格 (" ") 分隔.';
$strStatCheckTime = '最後檢查';
$strStatCreateTime = '建立';
$strStatUpdateTime = '最後更新';
$strStatement = '敘述';
$strStatus = '狀態';
$strStrucCSV = 'CSV 資料';
$strStrucData = '結構與資料';
$strStrucDrop = '加入 \'刪除資料表\' 語法';
$strStrucExcelCSV = 'Ms Excel 的 CSV 格式';
$strStrucOnly = '只有結構';
$strStructPropose = '分析資料表結構';
$strStructure = '結構';
$strSubmit = '送出';
$strSuccess = '您的SQL語法已順利執行';
$strSum = '總計';
$strSwedish = '瑞典文';
$strSwitchToTable = '跳到已複製之資料表';

$strTable = '資料表';
$strTableComments = '資料表註解文字';
$strTableEmpty = '請輸入資料表名稱!';
$strTableHasBeenDropped = '資料表 %s 已被刪除';
$strTableHasBeenEmptied = '資料表 %s 已被清空';
$strTableHasBeenFlushed = '資料表 %s 已被強迫更新';
$strTableMaintenance = '資料表維護';
$strTableOfContents = '目錄';
$strTableOptions = '資料表選項';
$strTableStructure = '資料表格式：';
$strTableType = '資料表類型';
$strTables = '%s 資料表';
$strTblPrivileges = '指定資料表權限';
$strTextAreaLength = ' 由於長度限制<br /> 此欄位不能編輯 ';
$strThai = '泰文'; 
$strTheContent = '檔案內容已經匯入資料表';
$strTheContents = '檔案內容將會取代選定的資料表中具有相同主鍵或唯一鍵的記錄';
$strTheTerminator = '分隔欄位的字元';
$strThisHost = '指定主機';
$strThisNotDirectory = '這並不是一個目錄';
$strThreadSuccessfullyKilled = '指令 %s 已成功中止.';
$strTime = '時間';
$strToggleScratchboard = '轉換便條';
$strTotal = '總計';
$strTotalUC = '總共';
$strTraditionalChinese = '繁體中文';
$strTraffic = '流量';
$strTransformation_image_jpeg__inline = '顯示可按式圖像; 選項; 寬度,高度[以像素為單位] (保時原有比例)';
$strTransformation_image_jpeg__link = '顯示圖像的連線 (直接下載).';
$strTransformation_image_png__inline = '參看 image/jpeg: 內建';
$strTransformation_text_plain__dateformat = '使用 TIME, TIMESTAMP 或 DATETIME 並以本地時區時間顯示. 第一個選項是修正 (以小時為單位) 來調整顯示之時間 (預設: 0). 第二個選項是日期格式 [跟據 PHPs strftime() 的參數].';
$strTransformation_text_plain__external = '只限於 LINUX : 執行外部程式及將內容以標準輸入模式輸入. 輸出程式之標準輸出. 預設是整齊的, 方便顯示 HTML 碼. 由於保安理由, 您需要自行編輯 libraries/transformations/text_plain__external.inc.php 及加入需要使用工具作為執行. 第一個選項為有多少個程式需要使用, 第二個選項為這式程式的參數, 第三個選項, 如設定為 1 將會使用 htmlspecialchars() 轉換輸出 (預設: 1). 第四個選項, 如設定為 1 將會加入 NOWRAP 於內容的表格內, 令輸出之所有內容都不會重新排位 (預設: 1)';
$strTransformation_text_plain__formatted = '保存原本內容之格式. 不進行任何 Escaping 處理.';
$strTransformation_text_plain__imagelink = '顯示圖像及連結, 數據內容是檔案名稱; 第一個選項是網址前段 (例 "http://domain.com/" ), 第二個選項是寬度的像素,第三個選項是高度的像素.';
$strTransformation_text_plain__link = '顯示連結, 數據內容是檔案名稱; 第一個選項是網址前段 (例 "http://domain.com/" ), 第二選項是連結的標題.';
$strTransformation_text_plain__substr = '只顯示部份的字串. 第一個選項為字串開始輸出的位置 (offset)  (預設: 0). 第二個選項為多少個字串輸出. 留空為輸出餘下所有字串. 第三個選項為當部份字串取回後顯示什麼字串於結尾 (預設: ...) .';
$strTransformation_text_plain__unformatted = '以 HTML 碼顯示 HTML 實體. 不會顯示任何 HTML 格式.';
$strTruncateQueries = '刪除已顯示查詢';
$strTurkish = '土耳其文';
$strType = '型態';

$strUkrainian = '烏克蘭文';
$strUncheckAll = '全部取消';
$strUnicode = '統一碼 (Unicode)';
$strUnique = '唯一';
$strUnknown = '不詳';
$strUnselectAll = '全部取消';
$strUpdComTab = '請參看說明文件查詢如何更新 Column_comments 資料表';
$strUpdatePrivMessage = '您已經更新了 %s 的權限.';
$strUpdateProfile = '更新資料:';
$strUpdateProfileMessage = '資料己經更新.';
$strUpdateQuery = '更新語法';
$strUpgrade = '您應該更新到 %s %s 或之後.';
$strUsage = '使用';
$strUseBackquotes = '在資料表及欄位使用引號';
$strUseHostTable = '使用主機資料表';
$strUseTables = '使用資料表';
$strUseTextField = '文字輸入';
$strUseThisValue = '使用此值';
$strUser = '使用者';
$strUserAlreadyExists = '使用者 %s 己存在!';
$strUserEmpty = '請輸入使用者名稱!';
$strUserName = '使用者名稱';
$strUserNotFound = '選擇的使用者在權限資料表內找不到.';
$strUserOverview = '使用者一覽';
$strUsers = '使用者';
$strUsersDeleted = '選擇的使用者已成功刪除.';
$strUsersHavingAccessToDb = '可讀取 &quot;%s&quot; 之使用者';

$strValidateSQL = '檢查 SQL';
$strValidatorError = 'SQL 分析程式未能啟動，請檢查是否已將 %s文件%s 內的 PHP 檔案安裝。';
$strValue = '值';
$strVar = '資訊';
$strViewDump = '檢視資料表的備份概要 (dump schema)';
$strViewDumpDB = '檢視資料庫的備份概要 (dump schema)';
$strViewDumpDatabases = '顯示資料庫概要 (schema)';

$strWebServerUploadDirectory = 'Web 伺服器上載目錄';
$strWebServerUploadDirectoryError = '設定之上載目錄錯誤，未能使用';
$strWelcome = '歡迎使用 %s';
$strWestEuropean = '西歐語文';
$strWildcard = '萬用字元';
$strWindowNotFound = '目地的視窗無法更新. 可能你已關閉此視窗或你的瀏覽器於安全設定內啟動了無法跨視窗更新';
$strWithChecked = '選擇的資料表：';
$strWritingCommentNotPossible = '無法儲存註解文字';
$strWritingRelationNotPossible = '無法儲存關聯';
$strWrongUser = '錯誤的使用者名稱或密碼，拒絕存取';

$strXML = 'XML'; //USE ENG

$strYes = ' 是 ';

$strZeroRemovesTheLimit = '註: 設定這些選項為 0 (零) 可解除限制.';
$strZip = '"zipped"';

?>
