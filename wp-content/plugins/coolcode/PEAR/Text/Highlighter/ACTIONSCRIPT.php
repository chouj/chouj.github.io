<?php
/**
 * Auto-generated class. ACTIONSCRIPT syntax highlighting 
 *
 * PHP version 4 and 5
 *
 * LICENSE: This source file is subject to version 3.0 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_0.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @copyright  2004 Andrey Demenev
 * @license    http://www.php.net/license/3_0.txt  PHP License
 * @link       http://pear.php.net/package/Text_Highlighter
 * @category   Text
 * @package    Text_Highlighter
 * @version    generated from: : javascript.xml 26 2005-04-21 16:31:33Z andrey 
 * @author Andrey Demenev <demenev@gmail.com>
 *
 */

/**
 * @ignore
 */

require_once 'Text/Highlighter.php';

/**
 * Auto-generated class. ACTIONSCRIPT syntax highlighting
 *
 * @author Andrey Demenev <demenev@gmail.com>
 * @category   Text
 * @package    Text_Highlighter
 * @copyright  2004 Andrey Demenev
 * @license    http://www.php.net/license/3_0.txt  PHP License
 * @version    Release: @package_version@
 * @link       http://pear.php.net/package/Text_Highlighter
 */
class  Text_Highlighter_ACTIONSCRIPT extends Text_Highlighter
{
    var $_language = 'actionscript';

    /**
     * PHP4 Compatible Constructor
     *
     * @param array  $options
     * @access public
     */
    function Text_Highlighter_ACTIONSCRIPT($options=array())
    {
        $this->__construct($options);
    }


    /**
     *  Constructor
     *
     * @param array  $options
     * @access public
     */
    function __construct($options=array())
    {

        $this->_options = $options;
        $this->_regs = array (
            -1 => '/((?i)\\{)|((?i)\\()|((?i)\\[)|((?i)\\/\\*)|((?i)")|((?i)\')|((?i)\\/\\/)|(\\/)|((?i)[a-z_]\\w*)|((?i)\\d*\\.?\\d+)/',
            0 => '/((?i)\\{)|((?i)\\()|((?i)\\[)|((?i)\\/\\*)|((?i)")|((?i)\')|((?i)\\/\\/)|(\\/)|((?i)[a-z_]\\w*)|((?i)\\d*\\.?\\d+)/',
            1 => '/((?i)\\{)|((?i)\\()|((?i)\\[)|((?i)\\/\\*)|((?i)")|((?i)\')|((?i)\\/\\/)|(\\/)|((?i)[a-z_]\\w*)|((?i)\\d*\\.?\\d+)/',
            2 => '/((?i)\\{)|((?i)\\()|((?i)\\[)|((?i)\\/\\*)|((?i)")|((?i)\')|((?i)\\/\\/)|(\\/)|((?i)[a-z_]\\w*)|((?i)\\d*\\.?\\d+)/',
            3 => '/((?i)((https?|ftp):\\/\\/[\\w\\?\\.\\-\\&=\\/%+]+)|(^|[\\s,!?])www\\.\\w+\\.\\w+[\\w\\?\\.\\&=\\/%+]*)|((?i)\\w+[\\.\\w\\-]+@(\\w+[\\.\\w\\-])+)|((?i)\\b(note|fixme):)|((?i)\\$\\w+:.+\\$)/',
            4 => '/((?i)\\\\\\\\|\\\\"|\\\\\'|\\\\`|\\\\t|\\\\n|\\\\r)/',
            5 => '/((?i)\\\\\\\\|\\\\"|\\\\\'|\\\\`)/',
            6 => '/((?i)((https?|ftp):\\/\\/[\\w\\?\\.\\-\\&=\\/%+]+)|(^|[\\s,!?])www\\.\\w+\\.\\w+[\\w\\?\\.\\&=\\/%+]*)|((?i)\\w+[\\.\\w\\-]+@(\\w+[\\.\\w\\-])+)|((?i)\\b(note|fixme):)|((?i)\\$\\w+:.+\\$)/',
            7 => '/((?i)\\\\\\/)/',
        );
        $this->_counts = array (
            -1 => 
            array (
                0 => 0,
                1 => 0,
                2 => 0,
                3 => 0,
                4 => 0,
                5 => 0,
                6 => 0,
                7 => 0,
                8 => 0,
                9 => 0,
            ),
            0 => 
            array (
                0 => 0,
                1 => 0,
                2 => 0,
                3 => 0,
                4 => 0,
                5 => 0,
                6 => 0,
                7 => 0,
                8 => 0,
                9 => 0,
            ),
            1 => 
            array (
                0 => 0,
                1 => 0,
                2 => 0,
                3 => 0,
                4 => 0,
                5 => 0,
                6 => 0,
                7 => 0,
                8 => 0,
                9 => 0,
            ),
            2 => 
            array (
                0 => 0,
                1 => 0,
                2 => 0,
                3 => 0,
                4 => 0,
                5 => 0,
                6 => 0,
                7 => 0,
                8 => 0,
                9 => 0,
            ),
            3 => 
            array (
                0 => 3,
                1 => 1,
                2 => 1,
                3 => 0,
            ),
            4 => 
            array (
                0 => 0,
            ),
            5 => 
            array (
                0 => 0,
            ),
            6 => 
            array (
                0 => 3,
                1 => 1,
                2 => 1,
                3 => 0,
            ),
            7 => 
            array (
                0 => 0,
            ),
        );
        $this->_delim = array (
            -1 => 
            array (
                0 => 'brackets',
                1 => 'brackets',
                2 => 'brackets',
                3 => 'comment',
                4 => 'quotes',
                5 => 'quotes',
                6 => 'comment',
                7 => 'quotes',
                8 => '',
                9 => '',
            ),
            0 => 
            array (
                0 => 'brackets',
                1 => 'brackets',
                2 => 'brackets',
                3 => 'comment',
                4 => 'quotes',
                5 => 'quotes',
                6 => 'comment',
                7 => 'quotes',
                8 => '',
                9 => '',
            ),
            1 => 
            array (
                0 => 'brackets',
                1 => 'brackets',
                2 => 'brackets',
                3 => 'comment',
                4 => 'quotes',
                5 => 'quotes',
                6 => 'comment',
                7 => 'quotes',
                8 => '',
                9 => '',
            ),
            2 => 
            array (
                0 => 'brackets',
                1 => 'brackets',
                2 => 'brackets',
                3 => 'comment',
                4 => 'quotes',
                5 => 'quotes',
                6 => 'comment',
                7 => 'quotes',
                8 => '',
                9 => '',
            ),
            3 => 
            array (
                0 => '',
                1 => '',
                2 => '',
                3 => '',
            ),
            4 => 
            array (
                0 => '',
            ),
            5 => 
            array (
                0 => '',
            ),
            6 => 
            array (
                0 => '',
                1 => '',
                2 => '',
                3 => '',
            ),
            7 => 
            array (
                0 => '',
            ),
        );
        $this->_inner = array (
            -1 => 
            array (
                0 => 'code',
                1 => 'code',
                2 => 'code',
                3 => 'comment',
                4 => 'string',
                5 => 'string',
                6 => 'comment',
                7 => 'string',
                8 => 'identifier',
                9 => 'number',
            ),
            0 => 
            array (
                0 => 'code',
                1 => 'code',
                2 => 'code',
                3 => 'comment',
                4 => 'string',
                5 => 'string',
                6 => 'comment',
                7 => 'string',
                8 => 'identifier',
                9 => 'number',
            ),
            1 => 
            array (
                0 => 'code',
                1 => 'code',
                2 => 'code',
                3 => 'comment',
                4 => 'string',
                5 => 'string',
                6 => 'comment',
                7 => 'string',
                8 => 'identifier',
                9 => 'number',
            ),
            2 => 
            array (
                0 => 'code',
                1 => 'code',
                2 => 'code',
                3 => 'comment',
                4 => 'string',
                5 => 'string',
                6 => 'comment',
                7 => 'string',
                8 => 'identifier',
                9 => 'number',
            ),
            3 => 
            array (
                0 => 'url',
                1 => 'url',
                2 => 'inlinedoc',
                3 => 'inlinedoc',
            ),
            4 => 
            array (
                0 => 'special',
            ),
            5 => 
            array (
                0 => 'special',
            ),
            6 => 
            array (
                0 => 'url',
                1 => 'url',
                2 => 'inlinedoc',
                3 => 'inlinedoc',
            ),
            7 => 
            array (
                0 => 'special',
            ),
        );
        $this->_end = array (
            0 => '/(?i)\\}/',
            1 => '/(?i)\\)/',
            2 => '/(?i)\\]/',
            3 => '/(?i)\\*\\//',
            4 => '/(?i)"/',
            5 => '/(?i)\'/',
            6 => '/(?mi)$/',
            7 => '/\\/g?i?/',
        );
        $this->_states = array (
            -1 => 
            array (
                0 => 0,
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
                6 => 6,
                7 => 7,
                8 => -1,
                9 => -1,
            ),
            0 => 
            array (
                0 => 0,
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
                6 => 6,
                7 => 7,
                8 => -1,
                9 => -1,
            ),
            1 => 
            array (
                0 => 0,
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
                6 => 6,
                7 => 7,
                8 => -1,
                9 => -1,
            ),
            2 => 
            array (
                0 => 0,
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
                6 => 6,
                7 => 7,
                8 => -1,
                9 => -1,
            ),
            3 => 
            array (
                0 => -1,
                1 => -1,
                2 => -1,
                3 => -1,
            ),
            4 => 
            array (
                0 => -1,
            ),
            5 => 
            array (
                0 => -1,
            ),
            6 => 
            array (
                0 => -1,
                1 => -1,
                2 => -1,
                3 => -1,
            ),
            7 => 
            array (
                0 => -1,
            ),
        );
        $this->_keywords = array (
            -1 => 
            array (
                0 => -1,
                1 => -1,
                2 => -1,
                3 => -1,
                4 => -1,
                5 => -1,
                6 => -1,
                7 => -1,
                8 => 
                array (
                    'builtin' => '/^(Infinity|-Infinity|NaN|newline|asfunction|call|chr|clearInterval|escape|eval|fscommand|getProperty|getTimer|geURL|getVersion|gotoAndPlay|gotoAndStop|ifFrameLoaded|int|isFinite|isNaN|length|loadMovie|loadMovieNum|loadVariables|loadVariabledNum|mbchr|mblength|mbord|mbsubstring|MMExecute|nextFrame|nextScene|on|onClipEvent|ord|parseFloat|parseInt|play|prevFrame|prevScene|print|printAsBitmap|printAsBitmapNum|printNum|random|removeMovieClip|setInterval|setProperty|showRedrawRegions|startDrag|stop|stopAllSounds|stopDrag|substring|targetPath|tellTarget|toggleHighQuality|trace|unescape|unloadMovie|unloadMovieNum|updateAfterEvent|Accessibility|ActiveX|AppleScript|Application|Array|AsBroadcaster|BevelFilter|BinaryFile|BitmapData|BitmapFilter|BlurFilter|Boolean|BrowseFile|BrowseFileToSave|BrowseFileUnicode|BrowseFolder|Browser|Button|COMPort|Camera|Clipboard|Color|ColorMatrixFilter|ColorTransform|ComboBox|ContentMenuItem|Context|ContextMenu|ConvolutionFilter|CustomActions|DLL|Data|Database|DebugWindow|Dialogs|DirectX|DisplacementMapFilter|DropShadowFilter|Encryption|Error|Exception|ExternalInterface|FTP|FileExplorer|FileReference|FileReferenceList|FileServer|FileSystem|Flash|Forms|Function|GlowFilter|GradientBevelFilter|GradientGlowFilter|HTTP|HTTPD|IME|Image|Input|Inspectable|JScript|Joystick|Key|Library|ListView|LoadVars|LocalConnection|Locale|MSAccess|MacShell|Mail|Main|Math|Matrix|MediaPlayer6|MediaPlayer9|Menu|Microphone|Mouse|MovieClip|MovieClipLoader|MySQL|NetConnection|NetStream|Network|Number|Object|PDF6|PDF7|Paths|Point|PrintJob|Process|ProxyHTTP|QuickTime|RealMedia|Rectangle|Registry|ScreenCapture|Screensaver|Selection|SharedObject|Shockwave|Socket|Sound|Stage|String|StyleSheet|System|TCP|TFTP|Tablet|TextField|TextFormat|TextRenderer|TextSnapshot|Timer|trace|Transform|Tray|TreeView|Trial|Twain|UDP|VBScript|Video|Void|XML|XMLNode|XMLSocket|XMLUI|arguments|capabilities|display|external|filters|flash|geom|lang|mdm|mx|net|security|text|ALPHANUMERIC_FILL|ALPHANUMERIC_HALF|BACKSPACE|CAPSLOCK|CASEINSENSITIVE|CDDrive|CHINESE|CONTROL|CPUSpeed|DELETEKEY|DESCENDING|DOWN|E|END|ENTER|ESCAPE|HOME|INSERT|IPAddress|JAPANESE_HIRAGANA|JAPANESE_KATAKANA_FULL|JAPANESE_KATAKANA_HALF|KOREAN|LEFT|LN2|LN10|LOG2E|LOG10E|MAX_VALUE|MIN_VALUE|MovieClipLoader|NEGATIVE_INFINITY|NOOP|NUMERIC|NaN|PGDN|PGUP|PI|POSITIVE_INFINITY|RAMSize|RETURNINDEXEDARRAY|RIGHT|SHIFT|SPACE|SQRT1_2|SQRT2|TAB|UNIQUESORT|UNKNOWN|UP|UTC|__proto__|__resolve|_alpha|_currentframe|_droptarget|_focusrect|_framesloaded|_height|_highquality|_listeners|_lockroot|_name|_parent|_quality|_rotation|_soundbuftime|_target|_totalframes|_url|_visible|_width|_x|_xmouse|_xscale|_y|_ymouse|_yscale|a|abort|abs|accept|account|acos|acquire|activate|activityLevel|add|addCallback|addDelayedInstance|addFavourite|addListener|addMask|addMethodParam|addPage|addParameter|addProperty|addRequestHeader|addXMLPath|align|allUsersAppData|allUsersPrograms|allUsersStartMenu|allUsersStartup|allowDomain|allowInsecureDomain|allowMultiple|allowScale|alpha|alphaMultiplier|alphaOffset|alphas|angle|antiAliasType|appData|appendChild|appendData|appendFile|appendFileUnicode|apply|applyFilter|asin|async|atan|atan2|attachAudio|attachBitmap|attachMovie|attachSound|attachVideo|attributes|autoReplace|autoSize|avHardwareDisable|available|b|back|background|backgroundColor|balance|bandwidth|baseURL|beginBitmapFill|beginFill|beginGradientFill|bgcolor|bias|blendMode|blockIndent|blueMultiplier|blueOffset|blueY|blurX|blurY|bmpToJpg|bmpToJpgAdv|bmpToPng|bold|border|borderColor|bottom|bottomRight|bottomScroll|broadcast|broadcastMessage|browse|browser|bufferLength|bufferTime|builtInItems|bullet|buttonText|bytesLoaded|bytesTotal|bytesTransfered|c|cacheAsBitmap|call|callFunction|callFunctionUnicode|callFunctions|callee|caller|canScan|canSeek|cancel|caption|category|ceil|chDir|charAt|charCodeAt|checkConnection|checkConnectionAdv|checkConnectionPing|checkXMLStatus|childNodes|clamp|clear|clone|cloneNode|close|closeCDTray|color|colorTransform|colors|commonAdminTools|commonAppData|commonPrograms|commonStartMenu|commonStartup|compact|compileScript|componentX|componentY|computerCompany|computerName|computerOwner|concat|concatenatedColorTransform|concatenatedMatrix|condenseWhite|connect|connectAbs|connectReadOnly|connectReadOnlyAbs|constraints|contains|containsPoint|containsRectangle|contentType|cookies|copy|copyChannel|copyFile|copyFileUnicode|copyFolder|copyPixels|copyString|cos|create|createBox|createElement|createEmptyMovieClip|createGradientBox|createKey|createShortcut|createTextField|createTextNode|creationDate|creator|creatorCode|currentDir|currentFps|currentFrame|currentMarker|curveTo|customItems|cut|d|data|dblClickExecutes|deblocking|decode|decryptFile|decryptString|defaultDirectory|defaultExtension|defaultFilename|defaultValue|delay|deleteDir|deleteFile|deleteFileUnicode|deleteFolder|deleteFolderUnicode|deleteKey|deleteTree|delta|desktop|dialogText|dirExists|disable|disableHandler|dispose|distance|divisor|dndDisable|dndEnable|doConversion|doEvents|doVerbCustom|doVerbDiscardUndoState|doVerbHide|doVerbInPlaceActivate|doVerbOpen|doVerbPrimary|doVerbShow|doVerbUIActivate|docTypeDecl|domain|download|draw|duplicateMovieClip|duration|embedFonts|enable|enableExitHandler|enableHandler|enabled|encryptFile|encryptString|endFill|equals|errir|error|errorDetails|evaluate|evaluateScript|exactSettings|exec|execStdOut|execUnicdoe|execute|exit|exitCode|exitWithCode|exitWithModalResult|exp|extractAllToDir|extractAllToExecPath|extractToExecPath|extractToFile|extractToVar|fastForward|fastReverse|favorites|favourties|featureAvailable|fileExists|fileList|filename|filenameUnicode|filenameUnix|fileterList|fillRect|filterList|filterText|filters|findFile|findText|firstChild|firstPage|floor|flush|focusEnabled|folderExists|folderExistsUnicode|font|fonts|forward|fps|fromCharCode|fullscreen|gain|generateEvent|generateFilterRect|get|getAscii|getAssociation|getBeginIndex|getBlob|getBounds|getBytesLoaded|getBytesTotal|getCMDParams|getCaretIndex|getCode|getColorBoundsRect|getCompilcationError|getCount|getCurrentDir|getCurrentDirUnicode|getData|getDate|getDay|getDefaultLang|getDepth|getDirAttribs|getDirDateTime|getDisplayModes|getEnabled|getEncVar|getEndIndex|getField|getFile|getFileAttribs|getFileDataTime|getFileDate|getFileList|getFileSize|getFileTime|getFocus|getFolderList|getFolderSize|getFontList|getFreeSpace|getFullYear|getHDSerial|getHTML|getHostbyIP|getHours|getIPbyHost|getInstanceAtDepth|getItems|getJpgSize|getKeyNames|getLastError|getLastInsetedId|getLocal|getLongPathName|getMACAddress|getMasterVolume|getMilliseconds|getMinutes|getMonth|getNamespaceForPrefix|getNewTextFormat|getNextHighestDepth|getPan|getPath|getPixel|getPixel32|getPosition|getPrefixForNamespace|getProgress|getProgressCurrent|getProgressMax|getProperty|getRGB|getRecordCount|getRect|getResolution|getResult|getSWFVersion|getSeconds|getSecureVar|getSelected|getSelectedText|getShortPathName|getSize|getStatus|getString|getStyle|getStyleNames|getSwfHeader|getText|getTextExtent|getTextFormat|getTextRunInfo|getTextSnapshot|getTime|getTimezoneOffset|getTotalSpace|getTransform|getURL|getUTCDate|getUTCDay|getUTCFullYear|getUTCHours|getUTCMilliseconds|getUTCMinutes|getUTCMonth|getUTCSeconds|getUTCYear|getValueNames|getVar|getVarUnicode|getVolume|getWaveBalance|getWaveVolume|getWindowList|getXML|getYear|globalToLocal|goToFrame|goToLabel|goToMovie|goto|gotoAndPlay|gotoAndStop|gotoTarget|greenMultiplier|greenOffset|gridFitType|hasAccessibility|hasAudio|hasAudioEncoder|hasChildNodes|hasEmbeddedVideo|hasIME|hasMP3|hasOwnProperty|hasPrinting|hasScreenBroadcast|hasScreenPlayback|hasStreamingAudio|hasStreamingVideo|hasSubKeys|hasVideoEncoder|height|hibernate|hide|hideBuiltInItems|hideCaption|hideControl|hideHiddenFiles|hideIcon|hideMask|hideObject|hideStatusBar|hideTaskBar|highlightAlpha|highlightColor|history|hitArea|hitTest|hitTestTextNearPos|hscroll|html|htmlText|iconHint|id3|idMap|ignoreWhie|inConnected|inInstalled|indent|indentity|index|indexOf|inflate|inflatePoint|init|initialDTR|initialDir|initialRTS|initialize|inner|insertBefore|insertDivider|insertHeader|insertItem|install|interpolate|intersection|intersects|invert|isAccessible|isActive|isAdmin|isBusy|isConnected|isCreated|isDebugged|isDown|isEmpty|isInstalled|isMaximized|isPresent|isPropertyEnumerable|isPrototypeOf|isRunning|isToggled|italic|itemChecked|itemEnabled|itemVisible|join|jpgToBmp|jpgToSwf|jpgToSwfSlideShow|kerning|keyExists|kill|killById|knockout|language|languageCodeArray|lastChild|lastId|lastIndexOf|lastPage|lastReply|leading|left|leftMargin|length|letterSpacing|lineGradientStyle|lineStyle|lineTo|list|load|loadBitmap|loadBoolean|loadClip|loadFile|loadFileUnicode|loadInteger|loadLanguageXML|loadMovie|loadObject|loadPolicyFile|loadSound|loadString|loadStringEx|loadVariables|loaded|loadmultiSz|localFilterReadDisabled|localName|localTime|localToGlobal|log|logOff|loggerData|login|macVerString|makeDir|makeFolder|makeFolderUnicode|manufacturer|mapBitmap|mapPoint|markerCount|matrix|matrixX|matrixY|max|maxChars|maxLevel|maxhscroll|maximize|maxscroll|mediaHeight|mediaName|mediaWidth|menu|menuType|merge|message|min|minimize|minimizeToTray|mode|modificationDate|motionLevel|motionTimeOut|mouseMoveExits|mouseWheelEnabled|moveFile|moveTo|movieAreaToBmp|movieAreaToBmpAlt|movieToBmp|movieToBmpAlt|multiline|mute|muted|name|names|namespaceURI|network|nextFrame|nextPage|nextSibling|noMenu|nodeName|nodeType|nodeValue|noise|normalSize|normalize|offset|offsetPoint|onAbort|onActivity|onAppChangeFocus|onAppExit|onAppMinimize|onAppRestore|onArrowKeyPress|onBinaryTransferComplete|onBottomHit|onBust|onCOMPortCTSChanged|onCOMPortDSRChanged|onCOMPortData|onCOMPortDataSent|onCOMPortError|onCOMPortSendProgress|onCancel|onChanged|onClose|onComplete|onConnect|onConnected|onContextMenuClick_|onCuePoint|onData|onDirChanged|onDirCreated|onDirDeleted|onDocumentComplete|onDragDrop|onDragOut|onDragOver|onEnterFrame|onError|onFileDeleted|onFileListViewDblClick|onFileReceived|onFileRenamed|onFileSent|onFileTransferer|onFormChangeFocus|onFormClose|onFormMaximize|onFormReposition|onFormResize|onFormRestore|onHTTPError|onHTTPStatus|onID3|onIMEComposition|onIOError|onIndexFileReceived|onJoyStick1ButtonDown|onJoystick1Move|onJoystick2ButtonDown|onJoystick2Move|onKeyDown|onKeyUp|onKillFocus|onLeftHit|onListingDone|onLoad|onLoadComplete|onLoadError|onLoadInit|onLoadProgress|onLoadStart|onLoggedIn|onMDMScriptException|onMDMScriptExceptionOSX|onMPChangeState|onMenuClick_|onMetaData|onMouseDown|onMouseMove|onMouseUp|onMouseWheel|onOpen|onPree|onPress|onProgress|onQuit|onReady|onRelease|onReleaseOutside|onRequest|onResize|onResolvedLinks|onRightHit|onRollOut|onRollOver|onScroller|onSecurityError|onSelect|onSetFocus|onSoundComplete|onSplashClosed|onStatus|onTabletEvent|onTopHit|onTransferComplete|onTrayMenuClick_|onUnload|onWMP9Buffering|onWMP9ChangeState|onWMP9Error|onWMP9PositionChanged|onXML|opaqueBackground|open|openCDTray|orientation|os|output|pageHeight|pageWidth|paletteMap|paperHeight|paperWidth|parentNode|parseCSS|parseXMLsend|passive|password|paste|path|pathUnicode|pathUnix|pause|perlinNoise|personal|pixelAspectRatio|pixelBounds|pixelDissolve|play|playerType|pngToSwf|pngToSwfTransparent|polar|pop|ports|position|postMessage|pow|powerOff|prefix|preserveAlpha|prevFrame|previousPage|previousSibling|print|printAll|printCopies|printFooter|printHTMLHeader|printHeader|printMargins|printOrientation|printPages|printPreview|printVar|printWithDialog|programFiles|programs|prompt|promptAdv|promptAdvUnicode|promptModal|promptModalUnicode|promptUnicode|prototype|push|quality|random|rate|ratios|recent|rectangle|redMultiplier|redOffset|refresh|registerClass|removeHeader|removeItem|removeListener|removeMovieClip|removeNode|removeTextField|renameFile|replace|replaceSel|replaceText|resetHandler|resetTimer|restart|restore|restrict|resume|resumePosition|reverse|rewind|rgb|right|rightMargin|rotate|round|run|runEvent|runMethod|runMethodRet|runQuery|sandboxType|sat|save|saveBoolean|saveDoc|saveFile|saveFileUnicode|saveInteger|saveMultiSz|saveObject|saveString|scale|scale9Grid|scaleMode|scaleX|scaleY|scollRect|screenColor|screenDPI|screenHeight|screenResolutionX|screenResolutionY|screenWidth|scroll|scrollbars|seek|select|selectable|send|sendAndLoad|sendClientSide|sendCommand|sendFile|sendFileContents|sendMessage|sendNoAuth|seperatorBefore|serverString|serverType|servicePack|set|setAdvancedAntialiasingTable|setBlockSize|setBreak|setBuffer|setBufferTime|setClipboard|setCompositionMode|setCompositionString|setCurrentDir|setCurrentDirUnicode|setCurrentPage|setCursor|setDTR|setData|setDate|setDay|setDefaultLang|setEcho|setEmpty|setEnabled|setEnvVar|setFileAttribs|setFocus|setFullYear|setGain|setHours|setIcon|setJpgSize|setKey|setLocalCallback|setMask|setMasterVolume|setMilliseconds|setMinutes|setMode|setMonth|setMotionLevel|setNewTextFormat|setPan|setPath|setPixel|setPixel32|setPosition|setProperty|setProxy|setQuality|setRGB|setRTS|setResolution|setResponse|setSWFDir|setSWFDirAdv|setScript|setSeconds|setSelectColor|setSelected|setSelection|setShowAllMode|setSilenceLevel|setSourceInTarget|setStatusBarText|setString|setStyle|setTextFormat|setTime|setTimeOut|setTimezoneOffset|setTransferMode|setTransform|setUTCDate|setUTCDay|setUTCFullYear|setUTCHours|setUTCMilliseconds|setUTCMinutes|setUTCMonth|setUTCSeconds|setUTCYear|setUseEchoSuppression|setVar|setVarUnicode|setViewStyle|setVolume|setWallPaperAlt|setWallpaper|setWaveBalance|setWaveVolume|setWaveVolumeAdv|setWindowFocus|setXOFF|setXON|setYear|shadowAlpha|shadowColor|shake|sharpness|shift|show|showBalloon|showControl|showCreatorCode|showErrors|showHiddenFiles|showIcon|showInScreen|showMask|showMenu|showModal|showSettings|showStatusBar|showTaskBar|showTips|shutDown|silenceLevel|silenceTimeOut|sin|size|slice|smoothing|sort|sortOn|source|splice|split|sqrt|start|startDrag|startMenu|startServer|startup|status|stop|stopAll|stopDrag|stopServer|strength|stringIDArray|styleSheet|substr|substring|subtract|success|supportsResume|suspend|swAudio|swBackColor|swBanner|swColor|swForeColor|swFrame|swList|swName|swPassword|swPreLoadTime|swSound|swText|swVolume|swapDepths|system|tabChildren|tabEnabled|tabIndex|tabStops|tan|target|taskBarBlink|temp|text|textAreaEnhance|textColor|textHeight|textWidth|thickness|threshold|time|timeout|title|titleUnicode|toBmp|toBmpAlt|toJpg|toLowerCase|toString|toUpperCase|toolbar|top|topLeft|trackAsMenu|transferMode|transferTime|transform|transformPoint|translate|transparent|trapErrors|tx|ty|type|underline|uninstall|union|unloadClip|unloadMovie|unsetBreak|unsetDTR|unsetRTS|unshift|unwatch|updateProperties|upload|url|useCodepage|useEchoSuppression|useHandCursor|useLineMode|useThreshold|userAgent|valueOf|variable|verbose|version|visible|volume|watch|width|winVerString|winVerStringDetial|windowState|windows|wordWrap|writeData|x|xmlDecl|y|activityLevel|bandwidth|currentFps|fps|get|height|index|keyFrameInterval|loopback|motionLevel|motionTimeOut|muted|name|names|onActivity|onStatus|quality|setKeyFrameInterval|setLoopback|setMode|setMotionLevel|setQuality|width|allowDomain|close|connect|domain|onStatus|send|activityLevel|gain|get|index|muted|name|names|onActivity|onStatus|rate|setGain|setRate|setSilenceLevel|setUseEchoSuppression|silenceLevel|silenceTimeout|useEchoSuppression|attachAudio|call|close|connect|isConnected|onStatus|uri|attachAudio|attachVideo|bufferLength|bufferTime|close|currentFps|liveDelay|onStatus|pause|play|publish|receiveAudio|receiveVideo|seek|send|setBufferTime|time|close|connect|data|flush|getLocal|getRemote|getSize|onStatus|onSync|send|setFps|clear|deblocking|smoothing|application|acceptConnection|disconnect|getStats|hostname|name|onAppStart|onAppStop|onConnect|onConnectAccept|onConnectReject|onDisconnect|onStatus|registerClass|registerProxy|rejectConnection|server|Client|agent|getBandwidthLimit|getStats|ip|protocol|ping|readAccess|referrer|__resolve|setBandwidthLimit|writeAccess|addHeader|connect|isConnected|uri|flush|get|getProperty|getPropertyNames|handlerName|lock|onSync|purge|resyncDepth|send|size|unlock|version|Stream|bufferTime|onStatus|record|setBufferTime)$/',
                    'reserved' => '/^(#endinitclip|#include|#initclip|_accProps|_focusrect|_global|_highquality|_level|maxscroll|_parent|_quality|_root|scroll|_soundbuftime|this|break|case|catch|class|continue|default|delete|do|dynamic|else|extends|false|finally|for|function|get|if|implements|import|in|interface|intrinsic|new|null|private|public|return|set|static|super|switch|throw|try|true|typeof|undefined|var|while|with|void)$/',
                ),
                9 => 
                array (
                ),
            ),
            0 => 
            array (
                0 => -1,
                1 => -1,
                2 => -1,
                3 => -1,
                4 => -1,
                5 => -1,
                6 => -1,
                7 => -1,
                8 => 
                array (
                    'builtin' => '/^(Infinity|-Infinity|NaN|newline|asfunction|call|chr|clearInterval|escape|eval|fscommand|getProperty|getTimer|geURL|getVersion|gotoAndPlay|gotoAndStop|ifFrameLoaded|int|isFinite|isNaN|length|loadMovie|loadMovieNum|loadVariables|loadVariabledNum|mbchr|mblength|mbord|mbsubstring|MMExecute|nextFrame|nextScene|on|onClipEvent|ord|parseFloat|parseInt|play|prevFrame|prevScene|print|printAsBitmap|printAsBitmapNum|printNum|random|removeMovieClip|setInterval|setProperty|showRedrawRegions|startDrag|stop|stopAllSounds|stopDrag|substring|targetPath|tellTarget|toggleHighQuality|trace|unescape|unloadMovie|unloadMovieNum|updateAfterEvent|Accessibility|ActiveX|AppleScript|Application|Array|AsBroadcaster|BevelFilter|BinaryFile|BitmapData|BitmapFilter|BlurFilter|Boolean|BrowseFile|BrowseFileToSave|BrowseFileUnicode|BrowseFolder|Browser|Button|COMPort|Camera|Clipboard|Color|ColorMatrixFilter|ColorTransform|ComboBox|ContentMenuItem|Context|ContextMenu|ConvolutionFilter|CustomActions|DLL|Data|Database|DebugWindow|Dialogs|DirectX|DisplacementMapFilter|DropShadowFilter|Encryption|Error|Exception|ExternalInterface|FTP|FileExplorer|FileReference|FileReferenceList|FileServer|FileSystem|Flash|Forms|Function|GlowFilter|GradientBevelFilter|GradientGlowFilter|HTTP|HTTPD|IME|Image|Input|Inspectable|JScript|Joystick|Key|Library|ListView|LoadVars|LocalConnection|Locale|MSAccess|MacShell|Mail|Main|Math|Matrix|MediaPlayer6|MediaPlayer9|Menu|Microphone|Mouse|MovieClip|MovieClipLoader|MySQL|NetConnection|NetStream|Network|Number|Object|PDF6|PDF7|Paths|Point|PrintJob|Process|ProxyHTTP|QuickTime|RealMedia|Rectangle|Registry|ScreenCapture|Screensaver|Selection|SharedObject|Shockwave|Socket|Sound|Stage|String|StyleSheet|System|TCP|TFTP|Tablet|TextField|TextFormat|TextRenderer|TextSnapshot|Timer|trace|Transform|Tray|TreeView|Trial|Twain|UDP|VBScript|Video|Void|XML|XMLNode|XMLSocket|XMLUI|arguments|capabilities|display|external|filters|flash|geom|lang|mdm|mx|net|security|text|ALPHANUMERIC_FILL|ALPHANUMERIC_HALF|BACKSPACE|CAPSLOCK|CASEINSENSITIVE|CDDrive|CHINESE|CONTROL|CPUSpeed|DELETEKEY|DESCENDING|DOWN|E|END|ENTER|ESCAPE|HOME|INSERT|IPAddress|JAPANESE_HIRAGANA|JAPANESE_KATAKANA_FULL|JAPANESE_KATAKANA_HALF|KOREAN|LEFT|LN2|LN10|LOG2E|LOG10E|MAX_VALUE|MIN_VALUE|MovieClipLoader|NEGATIVE_INFINITY|NOOP|NUMERIC|NaN|PGDN|PGUP|PI|POSITIVE_INFINITY|RAMSize|RETURNINDEXEDARRAY|RIGHT|SHIFT|SPACE|SQRT1_2|SQRT2|TAB|UNIQUESORT|UNKNOWN|UP|UTC|__proto__|__resolve|_alpha|_currentframe|_droptarget|_focusrect|_framesloaded|_height|_highquality|_listeners|_lockroot|_name|_parent|_quality|_rotation|_soundbuftime|_target|_totalframes|_url|_visible|_width|_x|_xmouse|_xscale|_y|_ymouse|_yscale|a|abort|abs|accept|account|acos|acquire|activate|activityLevel|add|addCallback|addDelayedInstance|addFavourite|addListener|addMask|addMethodParam|addPage|addParameter|addProperty|addRequestHeader|addXMLPath|align|allUsersAppData|allUsersPrograms|allUsersStartMenu|allUsersStartup|allowDomain|allowInsecureDomain|allowMultiple|allowScale|alpha|alphaMultiplier|alphaOffset|alphas|angle|antiAliasType|appData|appendChild|appendData|appendFile|appendFileUnicode|apply|applyFilter|asin|async|atan|atan2|attachAudio|attachBitmap|attachMovie|attachSound|attachVideo|attributes|autoReplace|autoSize|avHardwareDisable|available|b|back|background|backgroundColor|balance|bandwidth|baseURL|beginBitmapFill|beginFill|beginGradientFill|bgcolor|bias|blendMode|blockIndent|blueMultiplier|blueOffset|blueY|blurX|blurY|bmpToJpg|bmpToJpgAdv|bmpToPng|bold|border|borderColor|bottom|bottomRight|bottomScroll|broadcast|broadcastMessage|browse|browser|bufferLength|bufferTime|builtInItems|bullet|buttonText|bytesLoaded|bytesTotal|bytesTransfered|c|cacheAsBitmap|call|callFunction|callFunctionUnicode|callFunctions|callee|caller|canScan|canSeek|cancel|caption|category|ceil|chDir|charAt|charCodeAt|checkConnection|checkConnectionAdv|checkConnectionPing|checkXMLStatus|childNodes|clamp|clear|clone|cloneNode|close|closeCDTray|color|colorTransform|colors|commonAdminTools|commonAppData|commonPrograms|commonStartMenu|commonStartup|compact|compileScript|componentX|componentY|computerCompany|computerName|computerOwner|concat|concatenatedColorTransform|concatenatedMatrix|condenseWhite|connect|connectAbs|connectReadOnly|connectReadOnlyAbs|constraints|contains|containsPoint|containsRectangle|contentType|cookies|copy|copyChannel|copyFile|copyFileUnicode|copyFolder|copyPixels|copyString|cos|create|createBox|createElement|createEmptyMovieClip|createGradientBox|createKey|createShortcut|createTextField|createTextNode|creationDate|creator|creatorCode|currentDir|currentFps|currentFrame|currentMarker|curveTo|customItems|cut|d|data|dblClickExecutes|deblocking|decode|decryptFile|decryptString|defaultDirectory|defaultExtension|defaultFilename|defaultValue|delay|deleteDir|deleteFile|deleteFileUnicode|deleteFolder|deleteFolderUnicode|deleteKey|deleteTree|delta|desktop|dialogText|dirExists|disable|disableHandler|dispose|distance|divisor|dndDisable|dndEnable|doConversion|doEvents|doVerbCustom|doVerbDiscardUndoState|doVerbHide|doVerbInPlaceActivate|doVerbOpen|doVerbPrimary|doVerbShow|doVerbUIActivate|docTypeDecl|domain|download|draw|duplicateMovieClip|duration|embedFonts|enable|enableExitHandler|enableHandler|enabled|encryptFile|encryptString|endFill|equals|errir|error|errorDetails|evaluate|evaluateScript|exactSettings|exec|execStdOut|execUnicdoe|execute|exit|exitCode|exitWithCode|exitWithModalResult|exp|extractAllToDir|extractAllToExecPath|extractToExecPath|extractToFile|extractToVar|fastForward|fastReverse|favorites|favourties|featureAvailable|fileExists|fileList|filename|filenameUnicode|filenameUnix|fileterList|fillRect|filterList|filterText|filters|findFile|findText|firstChild|firstPage|floor|flush|focusEnabled|folderExists|folderExistsUnicode|font|fonts|forward|fps|fromCharCode|fullscreen|gain|generateEvent|generateFilterRect|get|getAscii|getAssociation|getBeginIndex|getBlob|getBounds|getBytesLoaded|getBytesTotal|getCMDParams|getCaretIndex|getCode|getColorBoundsRect|getCompilcationError|getCount|getCurrentDir|getCurrentDirUnicode|getData|getDate|getDay|getDefaultLang|getDepth|getDirAttribs|getDirDateTime|getDisplayModes|getEnabled|getEncVar|getEndIndex|getField|getFile|getFileAttribs|getFileDataTime|getFileDate|getFileList|getFileSize|getFileTime|getFocus|getFolderList|getFolderSize|getFontList|getFreeSpace|getFullYear|getHDSerial|getHTML|getHostbyIP|getHours|getIPbyHost|getInstanceAtDepth|getItems|getJpgSize|getKeyNames|getLastError|getLastInsetedId|getLocal|getLongPathName|getMACAddress|getMasterVolume|getMilliseconds|getMinutes|getMonth|getNamespaceForPrefix|getNewTextFormat|getNextHighestDepth|getPan|getPath|getPixel|getPixel32|getPosition|getPrefixForNamespace|getProgress|getProgressCurrent|getProgressMax|getProperty|getRGB|getRecordCount|getRect|getResolution|getResult|getSWFVersion|getSeconds|getSecureVar|getSelected|getSelectedText|getShortPathName|getSize|getStatus|getString|getStyle|getStyleNames|getSwfHeader|getText|getTextExtent|getTextFormat|getTextRunInfo|getTextSnapshot|getTime|getTimezoneOffset|getTotalSpace|getTransform|getURL|getUTCDate|getUTCDay|getUTCFullYear|getUTCHours|getUTCMilliseconds|getUTCMinutes|getUTCMonth|getUTCSeconds|getUTCYear|getValueNames|getVar|getVarUnicode|getVolume|getWaveBalance|getWaveVolume|getWindowList|getXML|getYear|globalToLocal|goToFrame|goToLabel|goToMovie|goto|gotoAndPlay|gotoAndStop|gotoTarget|greenMultiplier|greenOffset|gridFitType|hasAccessibility|hasAudio|hasAudioEncoder|hasChildNodes|hasEmbeddedVideo|hasIME|hasMP3|hasOwnProperty|hasPrinting|hasScreenBroadcast|hasScreenPlayback|hasStreamingAudio|hasStreamingVideo|hasSubKeys|hasVideoEncoder|height|hibernate|hide|hideBuiltInItems|hideCaption|hideControl|hideHiddenFiles|hideIcon|hideMask|hideObject|hideStatusBar|hideTaskBar|highlightAlpha|highlightColor|history|hitArea|hitTest|hitTestTextNearPos|hscroll|html|htmlText|iconHint|id3|idMap|ignoreWhie|inConnected|inInstalled|indent|indentity|index|indexOf|inflate|inflatePoint|init|initialDTR|initialDir|initialRTS|initialize|inner|insertBefore|insertDivider|insertHeader|insertItem|install|interpolate|intersection|intersects|invert|isAccessible|isActive|isAdmin|isBusy|isConnected|isCreated|isDebugged|isDown|isEmpty|isInstalled|isMaximized|isPresent|isPropertyEnumerable|isPrototypeOf|isRunning|isToggled|italic|itemChecked|itemEnabled|itemVisible|join|jpgToBmp|jpgToSwf|jpgToSwfSlideShow|kerning|keyExists|kill|killById|knockout|language|languageCodeArray|lastChild|lastId|lastIndexOf|lastPage|lastReply|leading|left|leftMargin|length|letterSpacing|lineGradientStyle|lineStyle|lineTo|list|load|loadBitmap|loadBoolean|loadClip|loadFile|loadFileUnicode|loadInteger|loadLanguageXML|loadMovie|loadObject|loadPolicyFile|loadSound|loadString|loadStringEx|loadVariables|loaded|loadmultiSz|localFilterReadDisabled|localName|localTime|localToGlobal|log|logOff|loggerData|login|macVerString|makeDir|makeFolder|makeFolderUnicode|manufacturer|mapBitmap|mapPoint|markerCount|matrix|matrixX|matrixY|max|maxChars|maxLevel|maxhscroll|maximize|maxscroll|mediaHeight|mediaName|mediaWidth|menu|menuType|merge|message|min|minimize|minimizeToTray|mode|modificationDate|motionLevel|motionTimeOut|mouseMoveExits|mouseWheelEnabled|moveFile|moveTo|movieAreaToBmp|movieAreaToBmpAlt|movieToBmp|movieToBmpAlt|multiline|mute|muted|name|names|namespaceURI|network|nextFrame|nextPage|nextSibling|noMenu|nodeName|nodeType|nodeValue|noise|normalSize|normalize|offset|offsetPoint|onAbort|onActivity|onAppChangeFocus|onAppExit|onAppMinimize|onAppRestore|onArrowKeyPress|onBinaryTransferComplete|onBottomHit|onBust|onCOMPortCTSChanged|onCOMPortDSRChanged|onCOMPortData|onCOMPortDataSent|onCOMPortError|onCOMPortSendProgress|onCancel|onChanged|onClose|onComplete|onConnect|onConnected|onContextMenuClick_|onCuePoint|onData|onDirChanged|onDirCreated|onDirDeleted|onDocumentComplete|onDragDrop|onDragOut|onDragOver|onEnterFrame|onError|onFileDeleted|onFileListViewDblClick|onFileReceived|onFileRenamed|onFileSent|onFileTransferer|onFormChangeFocus|onFormClose|onFormMaximize|onFormReposition|onFormResize|onFormRestore|onHTTPError|onHTTPStatus|onID3|onIMEComposition|onIOError|onIndexFileReceived|onJoyStick1ButtonDown|onJoystick1Move|onJoystick2ButtonDown|onJoystick2Move|onKeyDown|onKeyUp|onKillFocus|onLeftHit|onListingDone|onLoad|onLoadComplete|onLoadError|onLoadInit|onLoadProgress|onLoadStart|onLoggedIn|onMDMScriptException|onMDMScriptExceptionOSX|onMPChangeState|onMenuClick_|onMetaData|onMouseDown|onMouseMove|onMouseUp|onMouseWheel|onOpen|onPree|onPress|onProgress|onQuit|onReady|onRelease|onReleaseOutside|onRequest|onResize|onResolvedLinks|onRightHit|onRollOut|onRollOver|onScroller|onSecurityError|onSelect|onSetFocus|onSoundComplete|onSplashClosed|onStatus|onTabletEvent|onTopHit|onTransferComplete|onTrayMenuClick_|onUnload|onWMP9Buffering|onWMP9ChangeState|onWMP9Error|onWMP9PositionChanged|onXML|opaqueBackground|open|openCDTray|orientation|os|output|pageHeight|pageWidth|paletteMap|paperHeight|paperWidth|parentNode|parseCSS|parseXMLsend|passive|password|paste|path|pathUnicode|pathUnix|pause|perlinNoise|personal|pixelAspectRatio|pixelBounds|pixelDissolve|play|playerType|pngToSwf|pngToSwfTransparent|polar|pop|ports|position|postMessage|pow|powerOff|prefix|preserveAlpha|prevFrame|previousPage|previousSibling|print|printAll|printCopies|printFooter|printHTMLHeader|printHeader|printMargins|printOrientation|printPages|printPreview|printVar|printWithDialog|programFiles|programs|prompt|promptAdv|promptAdvUnicode|promptModal|promptModalUnicode|promptUnicode|prototype|push|quality|random|rate|ratios|recent|rectangle|redMultiplier|redOffset|refresh|registerClass|removeHeader|removeItem|removeListener|removeMovieClip|removeNode|removeTextField|renameFile|replace|replaceSel|replaceText|resetHandler|resetTimer|restart|restore|restrict|resume|resumePosition|reverse|rewind|rgb|right|rightMargin|rotate|round|run|runEvent|runMethod|runMethodRet|runQuery|sandboxType|sat|save|saveBoolean|saveDoc|saveFile|saveFileUnicode|saveInteger|saveMultiSz|saveObject|saveString|scale|scale9Grid|scaleMode|scaleX|scaleY|scollRect|screenColor|screenDPI|screenHeight|screenResolutionX|screenResolutionY|screenWidth|scroll|scrollbars|seek|select|selectable|send|sendAndLoad|sendClientSide|sendCommand|sendFile|sendFileContents|sendMessage|sendNoAuth|seperatorBefore|serverString|serverType|servicePack|set|setAdvancedAntialiasingTable|setBlockSize|setBreak|setBuffer|setBufferTime|setClipboard|setCompositionMode|setCompositionString|setCurrentDir|setCurrentDirUnicode|setCurrentPage|setCursor|setDTR|setData|setDate|setDay|setDefaultLang|setEcho|setEmpty|setEnabled|setEnvVar|setFileAttribs|setFocus|setFullYear|setGain|setHours|setIcon|setJpgSize|setKey|setLocalCallback|setMask|setMasterVolume|setMilliseconds|setMinutes|setMode|setMonth|setMotionLevel|setNewTextFormat|setPan|setPath|setPixel|setPixel32|setPosition|setProperty|setProxy|setQuality|setRGB|setRTS|setResolution|setResponse|setSWFDir|setSWFDirAdv|setScript|setSeconds|setSelectColor|setSelected|setSelection|setShowAllMode|setSilenceLevel|setSourceInTarget|setStatusBarText|setString|setStyle|setTextFormat|setTime|setTimeOut|setTimezoneOffset|setTransferMode|setTransform|setUTCDate|setUTCDay|setUTCFullYear|setUTCHours|setUTCMilliseconds|setUTCMinutes|setUTCMonth|setUTCSeconds|setUTCYear|setUseEchoSuppression|setVar|setVarUnicode|setViewStyle|setVolume|setWallPaperAlt|setWallpaper|setWaveBalance|setWaveVolume|setWaveVolumeAdv|setWindowFocus|setXOFF|setXON|setYear|shadowAlpha|shadowColor|shake|sharpness|shift|show|showBalloon|showControl|showCreatorCode|showErrors|showHiddenFiles|showIcon|showInScreen|showMask|showMenu|showModal|showSettings|showStatusBar|showTaskBar|showTips|shutDown|silenceLevel|silenceTimeOut|sin|size|slice|smoothing|sort|sortOn|source|splice|split|sqrt|start|startDrag|startMenu|startServer|startup|status|stop|stopAll|stopDrag|stopServer|strength|stringIDArray|styleSheet|substr|substring|subtract|success|supportsResume|suspend|swAudio|swBackColor|swBanner|swColor|swForeColor|swFrame|swList|swName|swPassword|swPreLoadTime|swSound|swText|swVolume|swapDepths|system|tabChildren|tabEnabled|tabIndex|tabStops|tan|target|taskBarBlink|temp|text|textAreaEnhance|textColor|textHeight|textWidth|thickness|threshold|time|timeout|title|titleUnicode|toBmp|toBmpAlt|toJpg|toLowerCase|toString|toUpperCase|toolbar|top|topLeft|trackAsMenu|transferMode|transferTime|transform|transformPoint|translate|transparent|trapErrors|tx|ty|type|underline|uninstall|union|unloadClip|unloadMovie|unsetBreak|unsetDTR|unsetRTS|unshift|unwatch|updateProperties|upload|url|useCodepage|useEchoSuppression|useHandCursor|useLineMode|useThreshold|userAgent|valueOf|variable|verbose|version|visible|volume|watch|width|winVerString|winVerStringDetial|windowState|windows|wordWrap|writeData|x|xmlDecl|y|activityLevel|bandwidth|currentFps|fps|get|height|index|keyFrameInterval|loopback|motionLevel|motionTimeOut|muted|name|names|onActivity|onStatus|quality|setKeyFrameInterval|setLoopback|setMode|setMotionLevel|setQuality|width|allowDomain|close|connect|domain|onStatus|send|activityLevel|gain|get|index|muted|name|names|onActivity|onStatus|rate|setGain|setRate|setSilenceLevel|setUseEchoSuppression|silenceLevel|silenceTimeout|useEchoSuppression|attachAudio|call|close|connect|isConnected|onStatus|uri|attachAudio|attachVideo|bufferLength|bufferTime|close|currentFps|liveDelay|onStatus|pause|play|publish|receiveAudio|receiveVideo|seek|send|setBufferTime|time|close|connect|data|flush|getLocal|getRemote|getSize|onStatus|onSync|send|setFps|clear|deblocking|smoothing|application|acceptConnection|disconnect|getStats|hostname|name|onAppStart|onAppStop|onConnect|onConnectAccept|onConnectReject|onDisconnect|onStatus|registerClass|registerProxy|rejectConnection|server|Client|agent|getBandwidthLimit|getStats|ip|protocol|ping|readAccess|referrer|__resolve|setBandwidthLimit|writeAccess|addHeader|connect|isConnected|uri|flush|get|getProperty|getPropertyNames|handlerName|lock|onSync|purge|resyncDepth|send|size|unlock|version|Stream|bufferTime|onStatus|record|setBufferTime)$/',
                    'reserved' => '/^(#endinitclip|#include|#initclip|_accProps|_focusrect|_global|_highquality|_level|maxscroll|_parent|_quality|_root|scroll|_soundbuftime|this|break|case|catch|class|continue|default|delete|do|dynamic|else|extends|false|finally|for|function|get|if|implements|import|in|interface|intrinsic|new|null|private|public|return|set|static|super|switch|throw|try|true|typeof|undefined|var|while|with|void)$/',
                ),
                9 => 
                array (
                ),
            ),
            1 => 
            array (
                0 => -1,
                1 => -1,
                2 => -1,
                3 => -1,
                4 => -1,
                5 => -1,
                6 => -1,
                7 => -1,
                8 => 
                array (
                    'builtin' => '/^(Infinity|-Infinity|NaN|newline|asfunction|call|chr|clearInterval|escape|eval|fscommand|getProperty|getTimer|geURL|getVersion|gotoAndPlay|gotoAndStop|ifFrameLoaded|int|isFinite|isNaN|length|loadMovie|loadMovieNum|loadVariables|loadVariabledNum|mbchr|mblength|mbord|mbsubstring|MMExecute|nextFrame|nextScene|on|onClipEvent|ord|parseFloat|parseInt|play|prevFrame|prevScene|print|printAsBitmap|printAsBitmapNum|printNum|random|removeMovieClip|setInterval|setProperty|showRedrawRegions|startDrag|stop|stopAllSounds|stopDrag|substring|targetPath|tellTarget|toggleHighQuality|trace|unescape|unloadMovie|unloadMovieNum|updateAfterEvent|Accessibility|ActiveX|AppleScript|Application|Array|AsBroadcaster|BevelFilter|BinaryFile|BitmapData|BitmapFilter|BlurFilter|Boolean|BrowseFile|BrowseFileToSave|BrowseFileUnicode|BrowseFolder|Browser|Button|COMPort|Camera|Clipboard|Color|ColorMatrixFilter|ColorTransform|ComboBox|ContentMenuItem|Context|ContextMenu|ConvolutionFilter|CustomActions|DLL|Data|Database|DebugWindow|Dialogs|DirectX|DisplacementMapFilter|DropShadowFilter|Encryption|Error|Exception|ExternalInterface|FTP|FileExplorer|FileReference|FileReferenceList|FileServer|FileSystem|Flash|Forms|Function|GlowFilter|GradientBevelFilter|GradientGlowFilter|HTTP|HTTPD|IME|Image|Input|Inspectable|JScript|Joystick|Key|Library|ListView|LoadVars|LocalConnection|Locale|MSAccess|MacShell|Mail|Main|Math|Matrix|MediaPlayer6|MediaPlayer9|Menu|Microphone|Mouse|MovieClip|MovieClipLoader|MySQL|NetConnection|NetStream|Network|Number|Object|PDF6|PDF7|Paths|Point|PrintJob|Process|ProxyHTTP|QuickTime|RealMedia|Rectangle|Registry|ScreenCapture|Screensaver|Selection|SharedObject|Shockwave|Socket|Sound|Stage|String|StyleSheet|System|TCP|TFTP|Tablet|TextField|TextFormat|TextRenderer|TextSnapshot|Timer|trace|Transform|Tray|TreeView|Trial|Twain|UDP|VBScript|Video|Void|XML|XMLNode|XMLSocket|XMLUI|arguments|capabilities|display|external|filters|flash|geom|lang|mdm|mx|net|security|text|ALPHANUMERIC_FILL|ALPHANUMERIC_HALF|BACKSPACE|CAPSLOCK|CASEINSENSITIVE|CDDrive|CHINESE|CONTROL|CPUSpeed|DELETEKEY|DESCENDING|DOWN|E|END|ENTER|ESCAPE|HOME|INSERT|IPAddress|JAPANESE_HIRAGANA|JAPANESE_KATAKANA_FULL|JAPANESE_KATAKANA_HALF|KOREAN|LEFT|LN2|LN10|LOG2E|LOG10E|MAX_VALUE|MIN_VALUE|MovieClipLoader|NEGATIVE_INFINITY|NOOP|NUMERIC|NaN|PGDN|PGUP|PI|POSITIVE_INFINITY|RAMSize|RETURNINDEXEDARRAY|RIGHT|SHIFT|SPACE|SQRT1_2|SQRT2|TAB|UNIQUESORT|UNKNOWN|UP|UTC|__proto__|__resolve|_alpha|_currentframe|_droptarget|_focusrect|_framesloaded|_height|_highquality|_listeners|_lockroot|_name|_parent|_quality|_rotation|_soundbuftime|_target|_totalframes|_url|_visible|_width|_x|_xmouse|_xscale|_y|_ymouse|_yscale|a|abort|abs|accept|account|acos|acquire|activate|activityLevel|add|addCallback|addDelayedInstance|addFavourite|addListener|addMask|addMethodParam|addPage|addParameter|addProperty|addRequestHeader|addXMLPath|align|allUsersAppData|allUsersPrograms|allUsersStartMenu|allUsersStartup|allowDomain|allowInsecureDomain|allowMultiple|allowScale|alpha|alphaMultiplier|alphaOffset|alphas|angle|antiAliasType|appData|appendChild|appendData|appendFile|appendFileUnicode|apply|applyFilter|asin|async|atan|atan2|attachAudio|attachBitmap|attachMovie|attachSound|attachVideo|attributes|autoReplace|autoSize|avHardwareDisable|available|b|back|background|backgroundColor|balance|bandwidth|baseURL|beginBitmapFill|beginFill|beginGradientFill|bgcolor|bias|blendMode|blockIndent|blueMultiplier|blueOffset|blueY|blurX|blurY|bmpToJpg|bmpToJpgAdv|bmpToPng|bold|border|borderColor|bottom|bottomRight|bottomScroll|broadcast|broadcastMessage|browse|browser|bufferLength|bufferTime|builtInItems|bullet|buttonText|bytesLoaded|bytesTotal|bytesTransfered|c|cacheAsBitmap|call|callFunction|callFunctionUnicode|callFunctions|callee|caller|canScan|canSeek|cancel|caption|category|ceil|chDir|charAt|charCodeAt|checkConnection|checkConnectionAdv|checkConnectionPing|checkXMLStatus|childNodes|clamp|clear|clone|cloneNode|close|closeCDTray|color|colorTransform|colors|commonAdminTools|commonAppData|commonPrograms|commonStartMenu|commonStartup|compact|compileScript|componentX|componentY|computerCompany|computerName|computerOwner|concat|concatenatedColorTransform|concatenatedMatrix|condenseWhite|connect|connectAbs|connectReadOnly|connectReadOnlyAbs|constraints|contains|containsPoint|containsRectangle|contentType|cookies|copy|copyChannel|copyFile|copyFileUnicode|copyFolder|copyPixels|copyString|cos|create|createBox|createElement|createEmptyMovieClip|createGradientBox|createKey|createShortcut|createTextField|createTextNode|creationDate|creator|creatorCode|currentDir|currentFps|currentFrame|currentMarker|curveTo|customItems|cut|d|data|dblClickExecutes|deblocking|decode|decryptFile|decryptString|defaultDirectory|defaultExtension|defaultFilename|defaultValue|delay|deleteDir|deleteFile|deleteFileUnicode|deleteFolder|deleteFolderUnicode|deleteKey|deleteTree|delta|desktop|dialogText|dirExists|disable|disableHandler|dispose|distance|divisor|dndDisable|dndEnable|doConversion|doEvents|doVerbCustom|doVerbDiscardUndoState|doVerbHide|doVerbInPlaceActivate|doVerbOpen|doVerbPrimary|doVerbShow|doVerbUIActivate|docTypeDecl|domain|download|draw|duplicateMovieClip|duration|embedFonts|enable|enableExitHandler|enableHandler|enabled|encryptFile|encryptString|endFill|equals|errir|error|errorDetails|evaluate|evaluateScript|exactSettings|exec|execStdOut|execUnicdoe|execute|exit|exitCode|exitWithCode|exitWithModalResult|exp|extractAllToDir|extractAllToExecPath|extractToExecPath|extractToFile|extractToVar|fastForward|fastReverse|favorites|favourties|featureAvailable|fileExists|fileList|filename|filenameUnicode|filenameUnix|fileterList|fillRect|filterList|filterText|filters|findFile|findText|firstChild|firstPage|floor|flush|focusEnabled|folderExists|folderExistsUnicode|font|fonts|forward|fps|fromCharCode|fullscreen|gain|generateEvent|generateFilterRect|get|getAscii|getAssociation|getBeginIndex|getBlob|getBounds|getBytesLoaded|getBytesTotal|getCMDParams|getCaretIndex|getCode|getColorBoundsRect|getCompilcationError|getCount|getCurrentDir|getCurrentDirUnicode|getData|getDate|getDay|getDefaultLang|getDepth|getDirAttribs|getDirDateTime|getDisplayModes|getEnabled|getEncVar|getEndIndex|getField|getFile|getFileAttribs|getFileDataTime|getFileDate|getFileList|getFileSize|getFileTime|getFocus|getFolderList|getFolderSize|getFontList|getFreeSpace|getFullYear|getHDSerial|getHTML|getHostbyIP|getHours|getIPbyHost|getInstanceAtDepth|getItems|getJpgSize|getKeyNames|getLastError|getLastInsetedId|getLocal|getLongPathName|getMACAddress|getMasterVolume|getMilliseconds|getMinutes|getMonth|getNamespaceForPrefix|getNewTextFormat|getNextHighestDepth|getPan|getPath|getPixel|getPixel32|getPosition|getPrefixForNamespace|getProgress|getProgressCurrent|getProgressMax|getProperty|getRGB|getRecordCount|getRect|getResolution|getResult|getSWFVersion|getSeconds|getSecureVar|getSelected|getSelectedText|getShortPathName|getSize|getStatus|getString|getStyle|getStyleNames|getSwfHeader|getText|getTextExtent|getTextFormat|getTextRunInfo|getTextSnapshot|getTime|getTimezoneOffset|getTotalSpace|getTransform|getURL|getUTCDate|getUTCDay|getUTCFullYear|getUTCHours|getUTCMilliseconds|getUTCMinutes|getUTCMonth|getUTCSeconds|getUTCYear|getValueNames|getVar|getVarUnicode|getVolume|getWaveBalance|getWaveVolume|getWindowList|getXML|getYear|globalToLocal|goToFrame|goToLabel|goToMovie|goto|gotoAndPlay|gotoAndStop|gotoTarget|greenMultiplier|greenOffset|gridFitType|hasAccessibility|hasAudio|hasAudioEncoder|hasChildNodes|hasEmbeddedVideo|hasIME|hasMP3|hasOwnProperty|hasPrinting|hasScreenBroadcast|hasScreenPlayback|hasStreamingAudio|hasStreamingVideo|hasSubKeys|hasVideoEncoder|height|hibernate|hide|hideBuiltInItems|hideCaption|hideControl|hideHiddenFiles|hideIcon|hideMask|hideObject|hideStatusBar|hideTaskBar|highlightAlpha|highlightColor|history|hitArea|hitTest|hitTestTextNearPos|hscroll|html|htmlText|iconHint|id3|idMap|ignoreWhie|inConnected|inInstalled|indent|indentity|index|indexOf|inflate|inflatePoint|init|initialDTR|initialDir|initialRTS|initialize|inner|insertBefore|insertDivider|insertHeader|insertItem|install|interpolate|intersection|intersects|invert|isAccessible|isActive|isAdmin|isBusy|isConnected|isCreated|isDebugged|isDown|isEmpty|isInstalled|isMaximized|isPresent|isPropertyEnumerable|isPrototypeOf|isRunning|isToggled|italic|itemChecked|itemEnabled|itemVisible|join|jpgToBmp|jpgToSwf|jpgToSwfSlideShow|kerning|keyExists|kill|killById|knockout|language|languageCodeArray|lastChild|lastId|lastIndexOf|lastPage|lastReply|leading|left|leftMargin|length|letterSpacing|lineGradientStyle|lineStyle|lineTo|list|load|loadBitmap|loadBoolean|loadClip|loadFile|loadFileUnicode|loadInteger|loadLanguageXML|loadMovie|loadObject|loadPolicyFile|loadSound|loadString|loadStringEx|loadVariables|loaded|loadmultiSz|localFilterReadDisabled|localName|localTime|localToGlobal|log|logOff|loggerData|login|macVerString|makeDir|makeFolder|makeFolderUnicode|manufacturer|mapBitmap|mapPoint|markerCount|matrix|matrixX|matrixY|max|maxChars|maxLevel|maxhscroll|maximize|maxscroll|mediaHeight|mediaName|mediaWidth|menu|menuType|merge|message|min|minimize|minimizeToTray|mode|modificationDate|motionLevel|motionTimeOut|mouseMoveExits|mouseWheelEnabled|moveFile|moveTo|movieAreaToBmp|movieAreaToBmpAlt|movieToBmp|movieToBmpAlt|multiline|mute|muted|name|names|namespaceURI|network|nextFrame|nextPage|nextSibling|noMenu|nodeName|nodeType|nodeValue|noise|normalSize|normalize|offset|offsetPoint|onAbort|onActivity|onAppChangeFocus|onAppExit|onAppMinimize|onAppRestore|onArrowKeyPress|onBinaryTransferComplete|onBottomHit|onBust|onCOMPortCTSChanged|onCOMPortDSRChanged|onCOMPortData|onCOMPortDataSent|onCOMPortError|onCOMPortSendProgress|onCancel|onChanged|onClose|onComplete|onConnect|onConnected|onContextMenuClick_|onCuePoint|onData|onDirChanged|onDirCreated|onDirDeleted|onDocumentComplete|onDragDrop|onDragOut|onDragOver|onEnterFrame|onError|onFileDeleted|onFileListViewDblClick|onFileReceived|onFileRenamed|onFileSent|onFileTransferer|onFormChangeFocus|onFormClose|onFormMaximize|onFormReposition|onFormResize|onFormRestore|onHTTPError|onHTTPStatus|onID3|onIMEComposition|onIOError|onIndexFileReceived|onJoyStick1ButtonDown|onJoystick1Move|onJoystick2ButtonDown|onJoystick2Move|onKeyDown|onKeyUp|onKillFocus|onLeftHit|onListingDone|onLoad|onLoadComplete|onLoadError|onLoadInit|onLoadProgress|onLoadStart|onLoggedIn|onMDMScriptException|onMDMScriptExceptionOSX|onMPChangeState|onMenuClick_|onMetaData|onMouseDown|onMouseMove|onMouseUp|onMouseWheel|onOpen|onPree|onPress|onProgress|onQuit|onReady|onRelease|onReleaseOutside|onRequest|onResize|onResolvedLinks|onRightHit|onRollOut|onRollOver|onScroller|onSecurityError|onSelect|onSetFocus|onSoundComplete|onSplashClosed|onStatus|onTabletEvent|onTopHit|onTransferComplete|onTrayMenuClick_|onUnload|onWMP9Buffering|onWMP9ChangeState|onWMP9Error|onWMP9PositionChanged|onXML|opaqueBackground|open|openCDTray|orientation|os|output|pageHeight|pageWidth|paletteMap|paperHeight|paperWidth|parentNode|parseCSS|parseXMLsend|passive|password|paste|path|pathUnicode|pathUnix|pause|perlinNoise|personal|pixelAspectRatio|pixelBounds|pixelDissolve|play|playerType|pngToSwf|pngToSwfTransparent|polar|pop|ports|position|postMessage|pow|powerOff|prefix|preserveAlpha|prevFrame|previousPage|previousSibling|print|printAll|printCopies|printFooter|printHTMLHeader|printHeader|printMargins|printOrientation|printPages|printPreview|printVar|printWithDialog|programFiles|programs|prompt|promptAdv|promptAdvUnicode|promptModal|promptModalUnicode|promptUnicode|prototype|push|quality|random|rate|ratios|recent|rectangle|redMultiplier|redOffset|refresh|registerClass|removeHeader|removeItem|removeListener|removeMovieClip|removeNode|removeTextField|renameFile|replace|replaceSel|replaceText|resetHandler|resetTimer|restart|restore|restrict|resume|resumePosition|reverse|rewind|rgb|right|rightMargin|rotate|round|run|runEvent|runMethod|runMethodRet|runQuery|sandboxType|sat|save|saveBoolean|saveDoc|saveFile|saveFileUnicode|saveInteger|saveMultiSz|saveObject|saveString|scale|scale9Grid|scaleMode|scaleX|scaleY|scollRect|screenColor|screenDPI|screenHeight|screenResolutionX|screenResolutionY|screenWidth|scroll|scrollbars|seek|select|selectable|send|sendAndLoad|sendClientSide|sendCommand|sendFile|sendFileContents|sendMessage|sendNoAuth|seperatorBefore|serverString|serverType|servicePack|set|setAdvancedAntialiasingTable|setBlockSize|setBreak|setBuffer|setBufferTime|setClipboard|setCompositionMode|setCompositionString|setCurrentDir|setCurrentDirUnicode|setCurrentPage|setCursor|setDTR|setData|setDate|setDay|setDefaultLang|setEcho|setEmpty|setEnabled|setEnvVar|setFileAttribs|setFocus|setFullYear|setGain|setHours|setIcon|setJpgSize|setKey|setLocalCallback|setMask|setMasterVolume|setMilliseconds|setMinutes|setMode|setMonth|setMotionLevel|setNewTextFormat|setPan|setPath|setPixel|setPixel32|setPosition|setProperty|setProxy|setQuality|setRGB|setRTS|setResolution|setResponse|setSWFDir|setSWFDirAdv|setScript|setSeconds|setSelectColor|setSelected|setSelection|setShowAllMode|setSilenceLevel|setSourceInTarget|setStatusBarText|setString|setStyle|setTextFormat|setTime|setTimeOut|setTimezoneOffset|setTransferMode|setTransform|setUTCDate|setUTCDay|setUTCFullYear|setUTCHours|setUTCMilliseconds|setUTCMinutes|setUTCMonth|setUTCSeconds|setUTCYear|setUseEchoSuppression|setVar|setVarUnicode|setViewStyle|setVolume|setWallPaperAlt|setWallpaper|setWaveBalance|setWaveVolume|setWaveVolumeAdv|setWindowFocus|setXOFF|setXON|setYear|shadowAlpha|shadowColor|shake|sharpness|shift|show|showBalloon|showControl|showCreatorCode|showErrors|showHiddenFiles|showIcon|showInScreen|showMask|showMenu|showModal|showSettings|showStatusBar|showTaskBar|showTips|shutDown|silenceLevel|silenceTimeOut|sin|size|slice|smoothing|sort|sortOn|source|splice|split|sqrt|start|startDrag|startMenu|startServer|startup|status|stop|stopAll|stopDrag|stopServer|strength|stringIDArray|styleSheet|substr|substring|subtract|success|supportsResume|suspend|swAudio|swBackColor|swBanner|swColor|swForeColor|swFrame|swList|swName|swPassword|swPreLoadTime|swSound|swText|swVolume|swapDepths|system|tabChildren|tabEnabled|tabIndex|tabStops|tan|target|taskBarBlink|temp|text|textAreaEnhance|textColor|textHeight|textWidth|thickness|threshold|time|timeout|title|titleUnicode|toBmp|toBmpAlt|toJpg|toLowerCase|toString|toUpperCase|toolbar|top|topLeft|trackAsMenu|transferMode|transferTime|transform|transformPoint|translate|transparent|trapErrors|tx|ty|type|underline|uninstall|union|unloadClip|unloadMovie|unsetBreak|unsetDTR|unsetRTS|unshift|unwatch|updateProperties|upload|url|useCodepage|useEchoSuppression|useHandCursor|useLineMode|useThreshold|userAgent|valueOf|variable|verbose|version|visible|volume|watch|width|winVerString|winVerStringDetial|windowState|windows|wordWrap|writeData|x|xmlDecl|y|activityLevel|bandwidth|currentFps|fps|get|height|index|keyFrameInterval|loopback|motionLevel|motionTimeOut|muted|name|names|onActivity|onStatus|quality|setKeyFrameInterval|setLoopback|setMode|setMotionLevel|setQuality|width|allowDomain|close|connect|domain|onStatus|send|activityLevel|gain|get|index|muted|name|names|onActivity|onStatus|rate|setGain|setRate|setSilenceLevel|setUseEchoSuppression|silenceLevel|silenceTimeout|useEchoSuppression|attachAudio|call|close|connect|isConnected|onStatus|uri|attachAudio|attachVideo|bufferLength|bufferTime|close|currentFps|liveDelay|onStatus|pause|play|publish|receiveAudio|receiveVideo|seek|send|setBufferTime|time|close|connect|data|flush|getLocal|getRemote|getSize|onStatus|onSync|send|setFps|clear|deblocking|smoothing|application|acceptConnection|disconnect|getStats|hostname|name|onAppStart|onAppStop|onConnect|onConnectAccept|onConnectReject|onDisconnect|onStatus|registerClass|registerProxy|rejectConnection|server|Client|agent|getBandwidthLimit|getStats|ip|protocol|ping|readAccess|referrer|__resolve|setBandwidthLimit|writeAccess|addHeader|connect|isConnected|uri|flush|get|getProperty|getPropertyNames|handlerName|lock|onSync|purge|resyncDepth|send|size|unlock|version|Stream|bufferTime|onStatus|record|setBufferTime)$/',
                    'reserved' => '/^(#endinitclip|#include|#initclip|_accProps|_focusrect|_global|_highquality|_level|maxscroll|_parent|_quality|_root|scroll|_soundbuftime|this|break|case|catch|class|continue|default|delete|do|dynamic|else|extends|false|finally|for|function|get|if|implements|import|in|interface|intrinsic|new|null|private|public|return|set|static|super|switch|throw|try|true|typeof|undefined|var|while|with|void)$/',
                ),
                9 => 
                array (
                ),
            ),
            2 => 
            array (
                0 => -1,
                1 => -1,
                2 => -1,
                3 => -1,
                4 => -1,
                5 => -1,
                6 => -1,
                7 => -1,
                8 => 
                array (
                    'builtin' => '/^(Infinity|-Infinity|NaN|newline|asfunction|call|chr|clearInterval|escape|eval|fscommand|getProperty|getTimer|geURL|getVersion|gotoAndPlay|gotoAndStop|ifFrameLoaded|int|isFinite|isNaN|length|loadMovie|loadMovieNum|loadVariables|loadVariabledNum|mbchr|mblength|mbord|mbsubstring|MMExecute|nextFrame|nextScene|on|onClipEvent|ord|parseFloat|parseInt|play|prevFrame|prevScene|print|printAsBitmap|printAsBitmapNum|printNum|random|removeMovieClip|setInterval|setProperty|showRedrawRegions|startDrag|stop|stopAllSounds|stopDrag|substring|targetPath|tellTarget|toggleHighQuality|trace|unescape|unloadMovie|unloadMovieNum|updateAfterEvent|Accessibility|ActiveX|AppleScript|Application|Array|AsBroadcaster|BevelFilter|BinaryFile|BitmapData|BitmapFilter|BlurFilter|Boolean|BrowseFile|BrowseFileToSave|BrowseFileUnicode|BrowseFolder|Browser|Button|COMPort|Camera|Clipboard|Color|ColorMatrixFilter|ColorTransform|ComboBox|ContentMenuItem|Context|ContextMenu|ConvolutionFilter|CustomActions|DLL|Data|Database|DebugWindow|Dialogs|DirectX|DisplacementMapFilter|DropShadowFilter|Encryption|Error|Exception|ExternalInterface|FTP|FileExplorer|FileReference|FileReferenceList|FileServer|FileSystem|Flash|Forms|Function|GlowFilter|GradientBevelFilter|GradientGlowFilter|HTTP|HTTPD|IME|Image|Input|Inspectable|JScript|Joystick|Key|Library|ListView|LoadVars|LocalConnection|Locale|MSAccess|MacShell|Mail|Main|Math|Matrix|MediaPlayer6|MediaPlayer9|Menu|Microphone|Mouse|MovieClip|MovieClipLoader|MySQL|NetConnection|NetStream|Network|Number|Object|PDF6|PDF7|Paths|Point|PrintJob|Process|ProxyHTTP|QuickTime|RealMedia|Rectangle|Registry|ScreenCapture|Screensaver|Selection|SharedObject|Shockwave|Socket|Sound|Stage|String|StyleSheet|System|TCP|TFTP|Tablet|TextField|TextFormat|TextRenderer|TextSnapshot|Timer|trace|Transform|Tray|TreeView|Trial|Twain|UDP|VBScript|Video|Void|XML|XMLNode|XMLSocket|XMLUI|arguments|capabilities|display|external|filters|flash|geom|lang|mdm|mx|net|security|text|ALPHANUMERIC_FILL|ALPHANUMERIC_HALF|BACKSPACE|CAPSLOCK|CASEINSENSITIVE|CDDrive|CHINESE|CONTROL|CPUSpeed|DELETEKEY|DESCENDING|DOWN|E|END|ENTER|ESCAPE|HOME|INSERT|IPAddress|JAPANESE_HIRAGANA|JAPANESE_KATAKANA_FULL|JAPANESE_KATAKANA_HALF|KOREAN|LEFT|LN2|LN10|LOG2E|LOG10E|MAX_VALUE|MIN_VALUE|MovieClipLoader|NEGATIVE_INFINITY|NOOP|NUMERIC|NaN|PGDN|PGUP|PI|POSITIVE_INFINITY|RAMSize|RETURNINDEXEDARRAY|RIGHT|SHIFT|SPACE|SQRT1_2|SQRT2|TAB|UNIQUESORT|UNKNOWN|UP|UTC|__proto__|__resolve|_alpha|_currentframe|_droptarget|_focusrect|_framesloaded|_height|_highquality|_listeners|_lockroot|_name|_parent|_quality|_rotation|_soundbuftime|_target|_totalframes|_url|_visible|_width|_x|_xmouse|_xscale|_y|_ymouse|_yscale|a|abort|abs|accept|account|acos|acquire|activate|activityLevel|add|addCallback|addDelayedInstance|addFavourite|addListener|addMask|addMethodParam|addPage|addParameter|addProperty|addRequestHeader|addXMLPath|align|allUsersAppData|allUsersPrograms|allUsersStartMenu|allUsersStartup|allowDomain|allowInsecureDomain|allowMultiple|allowScale|alpha|alphaMultiplier|alphaOffset|alphas|angle|antiAliasType|appData|appendChild|appendData|appendFile|appendFileUnicode|apply|applyFilter|asin|async|atan|atan2|attachAudio|attachBitmap|attachMovie|attachSound|attachVideo|attributes|autoReplace|autoSize|avHardwareDisable|available|b|back|background|backgroundColor|balance|bandwidth|baseURL|beginBitmapFill|beginFill|beginGradientFill|bgcolor|bias|blendMode|blockIndent|blueMultiplier|blueOffset|blueY|blurX|blurY|bmpToJpg|bmpToJpgAdv|bmpToPng|bold|border|borderColor|bottom|bottomRight|bottomScroll|broadcast|broadcastMessage|browse|browser|bufferLength|bufferTime|builtInItems|bullet|buttonText|bytesLoaded|bytesTotal|bytesTransfered|c|cacheAsBitmap|call|callFunction|callFunctionUnicode|callFunctions|callee|caller|canScan|canSeek|cancel|caption|category|ceil|chDir|charAt|charCodeAt|checkConnection|checkConnectionAdv|checkConnectionPing|checkXMLStatus|childNodes|clamp|clear|clone|cloneNode|close|closeCDTray|color|colorTransform|colors|commonAdminTools|commonAppData|commonPrograms|commonStartMenu|commonStartup|compact|compileScript|componentX|componentY|computerCompany|computerName|computerOwner|concat|concatenatedColorTransform|concatenatedMatrix|condenseWhite|connect|connectAbs|connectReadOnly|connectReadOnlyAbs|constraints|contains|containsPoint|containsRectangle|contentType|cookies|copy|copyChannel|copyFile|copyFileUnicode|copyFolder|copyPixels|copyString|cos|create|createBox|createElement|createEmptyMovieClip|createGradientBox|createKey|createShortcut|createTextField|createTextNode|creationDate|creator|creatorCode|currentDir|currentFps|currentFrame|currentMarker|curveTo|customItems|cut|d|data|dblClickExecutes|deblocking|decode|decryptFile|decryptString|defaultDirectory|defaultExtension|defaultFilename|defaultValue|delay|deleteDir|deleteFile|deleteFileUnicode|deleteFolder|deleteFolderUnicode|deleteKey|deleteTree|delta|desktop|dialogText|dirExists|disable|disableHandler|dispose|distance|divisor|dndDisable|dndEnable|doConversion|doEvents|doVerbCustom|doVerbDiscardUndoState|doVerbHide|doVerbInPlaceActivate|doVerbOpen|doVerbPrimary|doVerbShow|doVerbUIActivate|docTypeDecl|domain|download|draw|duplicateMovieClip|duration|embedFonts|enable|enableExitHandler|enableHandler|enabled|encryptFile|encryptString|endFill|equals|errir|error|errorDetails|evaluate|evaluateScript|exactSettings|exec|execStdOut|execUnicdoe|execute|exit|exitCode|exitWithCode|exitWithModalResult|exp|extractAllToDir|extractAllToExecPath|extractToExecPath|extractToFile|extractToVar|fastForward|fastReverse|favorites|favourties|featureAvailable|fileExists|fileList|filename|filenameUnicode|filenameUnix|fileterList|fillRect|filterList|filterText|filters|findFile|findText|firstChild|firstPage|floor|flush|focusEnabled|folderExists|folderExistsUnicode|font|fonts|forward|fps|fromCharCode|fullscreen|gain|generateEvent|generateFilterRect|get|getAscii|getAssociation|getBeginIndex|getBlob|getBounds|getBytesLoaded|getBytesTotal|getCMDParams|getCaretIndex|getCode|getColorBoundsRect|getCompilcationError|getCount|getCurrentDir|getCurrentDirUnicode|getData|getDate|getDay|getDefaultLang|getDepth|getDirAttribs|getDirDateTime|getDisplayModes|getEnabled|getEncVar|getEndIndex|getField|getFile|getFileAttribs|getFileDataTime|getFileDate|getFileList|getFileSize|getFileTime|getFocus|getFolderList|getFolderSize|getFontList|getFreeSpace|getFullYear|getHDSerial|getHTML|getHostbyIP|getHours|getIPbyHost|getInstanceAtDepth|getItems|getJpgSize|getKeyNames|getLastError|getLastInsetedId|getLocal|getLongPathName|getMACAddress|getMasterVolume|getMilliseconds|getMinutes|getMonth|getNamespaceForPrefix|getNewTextFormat|getNextHighestDepth|getPan|getPath|getPixel|getPixel32|getPosition|getPrefixForNamespace|getProgress|getProgressCurrent|getProgressMax|getProperty|getRGB|getRecordCount|getRect|getResolution|getResult|getSWFVersion|getSeconds|getSecureVar|getSelected|getSelectedText|getShortPathName|getSize|getStatus|getString|getStyle|getStyleNames|getSwfHeader|getText|getTextExtent|getTextFormat|getTextRunInfo|getTextSnapshot|getTime|getTimezoneOffset|getTotalSpace|getTransform|getURL|getUTCDate|getUTCDay|getUTCFullYear|getUTCHours|getUTCMilliseconds|getUTCMinutes|getUTCMonth|getUTCSeconds|getUTCYear|getValueNames|getVar|getVarUnicode|getVolume|getWaveBalance|getWaveVolume|getWindowList|getXML|getYear|globalToLocal|goToFrame|goToLabel|goToMovie|goto|gotoAndPlay|gotoAndStop|gotoTarget|greenMultiplier|greenOffset|gridFitType|hasAccessibility|hasAudio|hasAudioEncoder|hasChildNodes|hasEmbeddedVideo|hasIME|hasMP3|hasOwnProperty|hasPrinting|hasScreenBroadcast|hasScreenPlayback|hasStreamingAudio|hasStreamingVideo|hasSubKeys|hasVideoEncoder|height|hibernate|hide|hideBuiltInItems|hideCaption|hideControl|hideHiddenFiles|hideIcon|hideMask|hideObject|hideStatusBar|hideTaskBar|highlightAlpha|highlightColor|history|hitArea|hitTest|hitTestTextNearPos|hscroll|html|htmlText|iconHint|id3|idMap|ignoreWhie|inConnected|inInstalled|indent|indentity|index|indexOf|inflate|inflatePoint|init|initialDTR|initialDir|initialRTS|initialize|inner|insertBefore|insertDivider|insertHeader|insertItem|install|interpolate|intersection|intersects|invert|isAccessible|isActive|isAdmin|isBusy|isConnected|isCreated|isDebugged|isDown|isEmpty|isInstalled|isMaximized|isPresent|isPropertyEnumerable|isPrototypeOf|isRunning|isToggled|italic|itemChecked|itemEnabled|itemVisible|join|jpgToBmp|jpgToSwf|jpgToSwfSlideShow|kerning|keyExists|kill|killById|knockout|language|languageCodeArray|lastChild|lastId|lastIndexOf|lastPage|lastReply|leading|left|leftMargin|length|letterSpacing|lineGradientStyle|lineStyle|lineTo|list|load|loadBitmap|loadBoolean|loadClip|loadFile|loadFileUnicode|loadInteger|loadLanguageXML|loadMovie|loadObject|loadPolicyFile|loadSound|loadString|loadStringEx|loadVariables|loaded|loadmultiSz|localFilterReadDisabled|localName|localTime|localToGlobal|log|logOff|loggerData|login|macVerString|makeDir|makeFolder|makeFolderUnicode|manufacturer|mapBitmap|mapPoint|markerCount|matrix|matrixX|matrixY|max|maxChars|maxLevel|maxhscroll|maximize|maxscroll|mediaHeight|mediaName|mediaWidth|menu|menuType|merge|message|min|minimize|minimizeToTray|mode|modificationDate|motionLevel|motionTimeOut|mouseMoveExits|mouseWheelEnabled|moveFile|moveTo|movieAreaToBmp|movieAreaToBmpAlt|movieToBmp|movieToBmpAlt|multiline|mute|muted|name|names|namespaceURI|network|nextFrame|nextPage|nextSibling|noMenu|nodeName|nodeType|nodeValue|noise|normalSize|normalize|offset|offsetPoint|onAbort|onActivity|onAppChangeFocus|onAppExit|onAppMinimize|onAppRestore|onArrowKeyPress|onBinaryTransferComplete|onBottomHit|onBust|onCOMPortCTSChanged|onCOMPortDSRChanged|onCOMPortData|onCOMPortDataSent|onCOMPortError|onCOMPortSendProgress|onCancel|onChanged|onClose|onComplete|onConnect|onConnected|onContextMenuClick_|onCuePoint|onData|onDirChanged|onDirCreated|onDirDeleted|onDocumentComplete|onDragDrop|onDragOut|onDragOver|onEnterFrame|onError|onFileDeleted|onFileListViewDblClick|onFileReceived|onFileRenamed|onFileSent|onFileTransferer|onFormChangeFocus|onFormClose|onFormMaximize|onFormReposition|onFormResize|onFormRestore|onHTTPError|onHTTPStatus|onID3|onIMEComposition|onIOError|onIndexFileReceived|onJoyStick1ButtonDown|onJoystick1Move|onJoystick2ButtonDown|onJoystick2Move|onKeyDown|onKeyUp|onKillFocus|onLeftHit|onListingDone|onLoad|onLoadComplete|onLoadError|onLoadInit|onLoadProgress|onLoadStart|onLoggedIn|onMDMScriptException|onMDMScriptExceptionOSX|onMPChangeState|onMenuClick_|onMetaData|onMouseDown|onMouseMove|onMouseUp|onMouseWheel|onOpen|onPree|onPress|onProgress|onQuit|onReady|onRelease|onReleaseOutside|onRequest|onResize|onResolvedLinks|onRightHit|onRollOut|onRollOver|onScroller|onSecurityError|onSelect|onSetFocus|onSoundComplete|onSplashClosed|onStatus|onTabletEvent|onTopHit|onTransferComplete|onTrayMenuClick_|onUnload|onWMP9Buffering|onWMP9ChangeState|onWMP9Error|onWMP9PositionChanged|onXML|opaqueBackground|open|openCDTray|orientation|os|output|pageHeight|pageWidth|paletteMap|paperHeight|paperWidth|parentNode|parseCSS|parseXMLsend|passive|password|paste|path|pathUnicode|pathUnix|pause|perlinNoise|personal|pixelAspectRatio|pixelBounds|pixelDissolve|play|playerType|pngToSwf|pngToSwfTransparent|polar|pop|ports|position|postMessage|pow|powerOff|prefix|preserveAlpha|prevFrame|previousPage|previousSibling|print|printAll|printCopies|printFooter|printHTMLHeader|printHeader|printMargins|printOrientation|printPages|printPreview|printVar|printWithDialog|programFiles|programs|prompt|promptAdv|promptAdvUnicode|promptModal|promptModalUnicode|promptUnicode|prototype|push|quality|random|rate|ratios|recent|rectangle|redMultiplier|redOffset|refresh|registerClass|removeHeader|removeItem|removeListener|removeMovieClip|removeNode|removeTextField|renameFile|replace|replaceSel|replaceText|resetHandler|resetTimer|restart|restore|restrict|resume|resumePosition|reverse|rewind|rgb|right|rightMargin|rotate|round|run|runEvent|runMethod|runMethodRet|runQuery|sandboxType|sat|save|saveBoolean|saveDoc|saveFile|saveFileUnicode|saveInteger|saveMultiSz|saveObject|saveString|scale|scale9Grid|scaleMode|scaleX|scaleY|scollRect|screenColor|screenDPI|screenHeight|screenResolutionX|screenResolutionY|screenWidth|scroll|scrollbars|seek|select|selectable|send|sendAndLoad|sendClientSide|sendCommand|sendFile|sendFileContents|sendMessage|sendNoAuth|seperatorBefore|serverString|serverType|servicePack|set|setAdvancedAntialiasingTable|setBlockSize|setBreak|setBuffer|setBufferTime|setClipboard|setCompositionMode|setCompositionString|setCurrentDir|setCurrentDirUnicode|setCurrentPage|setCursor|setDTR|setData|setDate|setDay|setDefaultLang|setEcho|setEmpty|setEnabled|setEnvVar|setFileAttribs|setFocus|setFullYear|setGain|setHours|setIcon|setJpgSize|setKey|setLocalCallback|setMask|setMasterVolume|setMilliseconds|setMinutes|setMode|setMonth|setMotionLevel|setNewTextFormat|setPan|setPath|setPixel|setPixel32|setPosition|setProperty|setProxy|setQuality|setRGB|setRTS|setResolution|setResponse|setSWFDir|setSWFDirAdv|setScript|setSeconds|setSelectColor|setSelected|setSelection|setShowAllMode|setSilenceLevel|setSourceInTarget|setStatusBarText|setString|setStyle|setTextFormat|setTime|setTimeOut|setTimezoneOffset|setTransferMode|setTransform|setUTCDate|setUTCDay|setUTCFullYear|setUTCHours|setUTCMilliseconds|setUTCMinutes|setUTCMonth|setUTCSeconds|setUTCYear|setUseEchoSuppression|setVar|setVarUnicode|setViewStyle|setVolume|setWallPaperAlt|setWallpaper|setWaveBalance|setWaveVolume|setWaveVolumeAdv|setWindowFocus|setXOFF|setXON|setYear|shadowAlpha|shadowColor|shake|sharpness|shift|show|showBalloon|showControl|showCreatorCode|showErrors|showHiddenFiles|showIcon|showInScreen|showMask|showMenu|showModal|showSettings|showStatusBar|showTaskBar|showTips|shutDown|silenceLevel|silenceTimeOut|sin|size|slice|smoothing|sort|sortOn|source|splice|split|sqrt|start|startDrag|startMenu|startServer|startup|status|stop|stopAll|stopDrag|stopServer|strength|stringIDArray|styleSheet|substr|substring|subtract|success|supportsResume|suspend|swAudio|swBackColor|swBanner|swColor|swForeColor|swFrame|swList|swName|swPassword|swPreLoadTime|swSound|swText|swVolume|swapDepths|system|tabChildren|tabEnabled|tabIndex|tabStops|tan|target|taskBarBlink|temp|text|textAreaEnhance|textColor|textHeight|textWidth|thickness|threshold|time|timeout|title|titleUnicode|toBmp|toBmpAlt|toJpg|toLowerCase|toString|toUpperCase|toolbar|top|topLeft|trackAsMenu|transferMode|transferTime|transform|transformPoint|translate|transparent|trapErrors|tx|ty|type|underline|uninstall|union|unloadClip|unloadMovie|unsetBreak|unsetDTR|unsetRTS|unshift|unwatch|updateProperties|upload|url|useCodepage|useEchoSuppression|useHandCursor|useLineMode|useThreshold|userAgent|valueOf|variable|verbose|version|visible|volume|watch|width|winVerString|winVerStringDetial|windowState|windows|wordWrap|writeData|x|xmlDecl|y|activityLevel|bandwidth|currentFps|fps|get|height|index|keyFrameInterval|loopback|motionLevel|motionTimeOut|muted|name|names|onActivity|onStatus|quality|setKeyFrameInterval|setLoopback|setMode|setMotionLevel|setQuality|width|allowDomain|close|connect|domain|onStatus|send|activityLevel|gain|get|index|muted|name|names|onActivity|onStatus|rate|setGain|setRate|setSilenceLevel|setUseEchoSuppression|silenceLevel|silenceTimeout|useEchoSuppression|attachAudio|call|close|connect|isConnected|onStatus|uri|attachAudio|attachVideo|bufferLength|bufferTime|close|currentFps|liveDelay|onStatus|pause|play|publish|receiveAudio|receiveVideo|seek|send|setBufferTime|time|close|connect|data|flush|getLocal|getRemote|getSize|onStatus|onSync|send|setFps|clear|deblocking|smoothing|application|acceptConnection|disconnect|getStats|hostname|name|onAppStart|onAppStop|onConnect|onConnectAccept|onConnectReject|onDisconnect|onStatus|registerClass|registerProxy|rejectConnection|server|Client|agent|getBandwidthLimit|getStats|ip|protocol|ping|readAccess|referrer|__resolve|setBandwidthLimit|writeAccess|addHeader|connect|isConnected|uri|flush|get|getProperty|getPropertyNames|handlerName|lock|onSync|purge|resyncDepth|send|size|unlock|version|Stream|bufferTime|onStatus|record|setBufferTime)$/',
                    'reserved' => '/^(#endinitclip|#include|#initclip|_accProps|_focusrect|_global|_highquality|_level|maxscroll|_parent|_quality|_root|scroll|_soundbuftime|this|break|case|catch|class|continue|default|delete|do|dynamic|else|extends|false|finally|for|function|get|if|implements|import|in|interface|intrinsic|new|null|private|public|return|set|static|super|switch|throw|try|true|typeof|undefined|var|while|with|void)$/',
                ),
                9 => 
                array (
                ),
            ),
            3 => 
            array (
                0 => 
                array (
                ),
                1 => 
                array (
                ),
                2 => 
                array (
                ),
                3 => 
                array (
                ),
            ),
            4 => 
            array (
                0 => 
                array (
                ),
            ),
            5 => 
            array (
                0 => 
                array (
                ),
            ),
            6 => 
            array (
                0 => 
                array (
                ),
                1 => 
                array (
                ),
                2 => 
                array (
                ),
                3 => 
                array (
                ),
            ),
            7 => 
            array (
                0 => 
                array (
                ),
            ),
        );
        $this->_parts = array (
            0 => 
            array (
                0 => NULL,
                1 => NULL,
                2 => NULL,
                3 => NULL,
                4 => NULL,
                5 => NULL,
                6 => NULL,
                7 => NULL,
                8 => NULL,
                9 => NULL,
            ),
            1 => 
            array (
                0 => NULL,
                1 => NULL,
                2 => NULL,
                3 => NULL,
                4 => NULL,
                5 => NULL,
                6 => NULL,
                7 => NULL,
                8 => NULL,
                9 => NULL,
            ),
            2 => 
            array (
                0 => NULL,
                1 => NULL,
                2 => NULL,
                3 => NULL,
                4 => NULL,
                5 => NULL,
                6 => NULL,
                7 => NULL,
                8 => NULL,
                9 => NULL,
            ),
            3 => 
            array (
                0 => NULL,
                1 => NULL,
                2 => NULL,
                3 => NULL,
            ),
            4 => 
            array (
                0 => NULL,
            ),
            5 => 
            array (
                0 => NULL,
            ),
            6 => 
            array (
                0 => NULL,
                1 => NULL,
                2 => NULL,
                3 => NULL,
            ),
            7 => 
            array (
                0 => NULL,
            ),
        );
        $this->_subst = array (
            -1 => 
            array (
                0 => false,
                1 => false,
                2 => false,
                3 => false,
                4 => false,
                5 => false,
                6 => false,
                7 => false,
                8 => false,
                9 => false,
            ),
            0 => 
            array (
                0 => false,
                1 => false,
                2 => false,
                3 => false,
                4 => false,
                5 => false,
                6 => false,
                7 => false,
                8 => false,
                9 => false,
            ),
            1 => 
            array (
                0 => false,
                1 => false,
                2 => false,
                3 => false,
                4 => false,
                5 => false,
                6 => false,
                7 => false,
                8 => false,
                9 => false,
            ),
            2 => 
            array (
                0 => false,
                1 => false,
                2 => false,
                3 => false,
                4 => false,
                5 => false,
                6 => false,
                7 => false,
                8 => false,
                9 => false,
            ),
            3 => 
            array (
                0 => false,
                1 => false,
                2 => false,
                3 => false,
            ),
            4 => 
            array (
                0 => false,
            ),
            5 => 
            array (
                0 => false,
            ),
            6 => 
            array (
                0 => false,
                1 => false,
                2 => false,
                3 => false,
            ),
            7 => 
            array (
                0 => false,
            ),
        );
        $this->_conditions = array (
        );
        $this->_kwmap = array (
            'builtin' => 'builtin',
            'reserved' => 'reserved',
        );
        $this->_defClass = 'code';
        $this->_checkDefines();
    }
    
}