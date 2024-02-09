<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

header("X-XSS-Protection: 1; mode=block");
header("X-Frame-Options: SAMEORIGIN");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("Pessoa"); } else { echo strip_tags("Pessoa"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT" />
 <META http-equiv="Last-Modified" content="<?php echo gmdate('D, d M Y H:i:s') ?> GMT" />
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
 <META http-equiv="Pragma" content="no-cache" />
 <link rel="shortcut icon" href="../_lib/img/grp__NM__bg__NM__cropped-Logo-SRC-32x32.png">
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
            <meta name="viewport" content="minimal-ui, width=300, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
            <meta name="mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="apple-touch-icon"   sizes="57x57" href="">
            <link rel="apple-touch-icon"   sizes="60x60" href="">
            <link rel="apple-touch-icon"   sizes="72x72" href="">
            <link rel="apple-touch-icon"   sizes="76x76" href="">
            <link rel="apple-touch-icon" sizes="114x114" href="">
            <link rel="apple-touch-icon" sizes="120x120" href="">
            <link rel="apple-touch-icon" sizes="144x144" href="">
            <link rel="apple-touch-icon" sizes="152x152" href="">
            <link rel="apple-touch-icon" sizes="180x180" href="">
            <link rel="icon" type="image/png" sizes="192x192" href="">
            <link rel="icon" type="image/png"   sizes="32x32" href="">
            <link rel="icon" type="image/png"   sizes="96x96" href="">
            <link rel="icon" type="image/png"   sizes="16x16" href="">
            <meta name="msapplication-TileColor" content="___">
            <meta name="msapplication-TileImage" content="">
            <meta name="theme-color" content="___">
            <meta name="apple-mobile-web-app-status-bar-style" content="___">
            <link rel="shortcut icon" href=""> <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_userSweetAlertDisplayed = false;
 </SCRIPT>
 <SCRIPT type="text/javascript">
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
  var sc_css_status_pwd_box = '<?php echo $this->Ini->Css_status_pwd_box; ?>';
  var sc_css_status_pwd_text = '<?php echo $this->Ini->Css_status_pwd_text; ?>';
 </SCRIPT>
        <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_third; ?>jquery/js/jquery.js"></SCRIPT>
            <?php
               if ($_SESSION['scriptcase']['display_mobile'] && $_SESSION['scriptcase']['device_mobile']) {
                   $forced_mobile = (isset($_SESSION['scriptcase']['force_mobile']) && $_SESSION['scriptcase']['force_mobile']) ? 'true' : 'false';
                   $sc_app_data   = json_encode([
                       'forceMobile' => $forced_mobile,
                       'appType' => 'form',
                       'improvements' => true,
                       'displayOptionsButton' => false,
                       'displayScrollUp' => true,
                       'scrollUpPosition' => 'A',
                       'toolbarOrientation' => 'H',
                       'mobilePanes' => 'true',
                       'navigationBarButtons' => unserialize('a:3:{i:0;s:2:"NP";i:1;s:2:"FL";i:2;s:2:"RC";}'),
                       'mobileSimpleToolbar' => true,
                       'bottomToolbarFixed' => true
                   ]); ?>
            <input type="hidden" id="sc-mobile-app-data" value='<?php echo $sc_app_data; ?>' />
            <script type="text/javascript" src="../_lib/lib/js/nm_modal_panes.jquery.js"></script>
            <script type="text/javascript" src="../_lib/lib/js/nm_form_mobile.js"></script>
            <link rel='stylesheet' href='../_lib/lib/css/nm_form_mobile.css' type='text/css'/>
            <script>
                $(document).ready(function(){

                    bootstrapMobile();

                });
            </script>
            <?php } ?> <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
<style type="text/css">
.ui-datepicker { z-index: 6 !important }
</style>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/viewerjs/viewer.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/viewerjs/viewer.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
    <style type="text/css">
        .sc-form-order-icon {
            padding: 0 2px;
        }
    </style>
<?php
           $formOrderUnusedVisivility = $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'] ? 'visible' : 'hidden';
           $formOrderUnusedOpacity = $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'] ? '0.5' : '1';
?>
    <style>
        .sc-form-order-icon-unused {
            visibility: <?php echo $formOrderUnusedVisivility ?>;
            opacity: 0.5;
        }
        .scFormLabelOddMult:hover .sc-form-order-icon-unused {
            visibility: visible;
            opacity: <?php echo $formOrderUnusedOpacity ?>;
        }
    </style>
<style type="text/css">
.sc-button-image.disabled {
	opacity: 0.25
}
.sc-button-image.disabled img {
	cursor: default !important
}
</style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
<?php
$miniCalendarFA = $this->jqueryFAFile('calendar');
if ('' != $miniCalendarFA) {
?>
<style type="text/css">
.css_read_off_insert_data button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_update_data button {
	background-color: transparent;
	border: 0;
	padding: 0
}
</style>
<?php
}
?>
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_pessoa/form_pessoa_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_pessoa_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['last'] : 'off'); ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if (isset($this->nmgp_botoes['first']) && $this->nmgp_botoes['first'] == "on")
    {
?>
       if ("off" == Nav_binicio_macro_disabled) { $("#sc_b_ini_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
    if (isset($this->nmgp_botoes['back']) && $this->nmgp_botoes['back'] == "on")
    {
?>
       if ("off" == Nav_bretorna_macro_disabled) { $("#sc_b_ret_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
?>
 }
 else
 {
<?php
    if (isset($this->nmgp_botoes['first']) && $this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if (isset($this->nmgp_botoes['back']) && $this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if (isset($this->nmgp_botoes['last']) && $this->nmgp_botoes['last'] == "on")
    {
?>
       if ("off" == Nav_bfinal_macro_disabled) { $("#sc_b_fim_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
    if (isset($this->nmgp_botoes['forward']) && $this->nmgp_botoes['forward'] == "on")
    {
?>
       if ("off" == Nav_bavanca_macro_disabled) { $("#sc_b_avc_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
?>
 }
 else
 {
<?php
    if (isset($this->nmgp_botoes['last']) && $this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if (isset($this->nmgp_botoes['forward']) && $this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
<?php

include_once('form_pessoa_jquery.php');

?>
var applicationKeys = "";
applicationKeys += "ctrl+shift+right";
applicationKeys += ",";
applicationKeys += "ctrl+shift+left";
applicationKeys += ",";
applicationKeys += "ctrl+right";
applicationKeys += ",";
applicationKeys += "ctrl+left";
applicationKeys += ",";
applicationKeys += "alt+q";
applicationKeys += ",";
applicationKeys += "escape";
applicationKeys += ",";
applicationKeys += "ctrl+enter";
applicationKeys += ",";
applicationKeys += "ctrl+s";
applicationKeys += ",";
applicationKeys += "ctrl+delete";
applicationKeys += ",";
applicationKeys += "f1";
applicationKeys += ",";
applicationKeys += "ctrl+shift+c";

var hotkeyList = "";

function execHotKey(e, h) {
    var hotkey_fired = false;
  switch (true) {
    case (["ctrl+shift+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_fim");
      break;
    case (["ctrl+shift+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ini");
      break;
    case (["ctrl+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ava");
      break;
    case (["ctrl+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ret");
      break;
    case (["alt+q"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_sai");
      break;
    case (["escape"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_cnl");
      break;
    case (["ctrl+enter"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_inc");
      break;
    case (["ctrl+s"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_alt");
      break;
    case (["ctrl+delete"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_exc");
      break;
    case (["f1"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_webh");
      break;
    case (["ctrl+shift+c"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_copy");
      break;
    default:
      return true;
  }
  if (hotkey_fired) {
        e.preventDefault();
        return false;
    } else {
        return true;
    }
}
</script>

<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>hotkeys.inc.js"></script>
<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>hotkeys_setup.js"></script>
<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
<script type="text/javascript">

function process_hotkeys(hotkey)
{
  if (hotkey == "sys_format_fim") {
    if (typeof scBtnFn_sys_format_fim !== "undefined" && typeof scBtnFn_sys_format_fim === "function") {
      scBtnFn_sys_format_fim();
        return true;
    }
  }
  if (hotkey == "sys_format_ini") {
    if (typeof scBtnFn_sys_format_ini !== "undefined" && typeof scBtnFn_sys_format_ini === "function") {
      scBtnFn_sys_format_ini();
        return true;
    }
  }
  if (hotkey == "sys_format_ava") {
    if (typeof scBtnFn_sys_format_ava !== "undefined" && typeof scBtnFn_sys_format_ava === "function") {
      scBtnFn_sys_format_ava();
        return true;
    }
  }
  if (hotkey == "sys_format_ret") {
    if (typeof scBtnFn_sys_format_ret !== "undefined" && typeof scBtnFn_sys_format_ret === "function") {
      scBtnFn_sys_format_ret();
        return true;
    }
  }
  if (hotkey == "sys_format_sai") {
    if (typeof scBtnFn_sys_format_sai !== "undefined" && typeof scBtnFn_sys_format_sai === "function") {
      scBtnFn_sys_format_sai();
        return true;
    }
  }
  if (hotkey == "sys_format_cnl") {
    if (typeof scBtnFn_sys_format_cnl !== "undefined" && typeof scBtnFn_sys_format_cnl === "function") {
      scBtnFn_sys_format_cnl();
        return true;
    }
  }
  if (hotkey == "sys_format_inc") {
    if (typeof scBtnFn_sys_format_inc !== "undefined" && typeof scBtnFn_sys_format_inc === "function") {
      scBtnFn_sys_format_inc();
        return true;
    }
  }
  if (hotkey == "sys_format_alt") {
    if (typeof scBtnFn_sys_format_alt !== "undefined" && typeof scBtnFn_sys_format_alt === "function") {
      scBtnFn_sys_format_alt();
        return true;
    }
  }
  if (hotkey == "sys_format_exc") {
    if (typeof scBtnFn_sys_format_exc !== "undefined" && typeof scBtnFn_sys_format_exc === "function") {
      scBtnFn_sys_format_exc();
        return true;
    }
  }
  if (hotkey == "sys_format_webh") {
    if (typeof scBtnFn_sys_format_webh !== "undefined" && typeof scBtnFn_sys_format_webh === "function") {
      scBtnFn_sys_format_webh();
        return true;
    }
  }
  if (hotkey == "sys_format_copy") {
    if (typeof scBtnFn_sys_format_copy !== "undefined" && typeof scBtnFn_sys_format_copy === "function") {
      scBtnFn_sys_format_copy();
        return true;
    }
  }
    return false;
}

 var Dyn_Ini  = true;
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).on('load', function() {
   });
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<script type="text/javascript" src="<?php  echo $this->Ini->path_js . "/jsrsClient.js" ?>"> 
</script> 
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_pessoa_js0.php");
?>
<script type="text/javascript" src="<?php  echo $this->Ini->path_js . "/jsrsClient.js" ?>"> 
</script> 
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
var scInsertFieldWithErrors = new Array();
<?php
foreach ($this->NM_ajax_info['fieldsWithErrors'] as $insertFieldName) {
?>
scInsertFieldWithErrors.push("<?php echo $insertFieldName; ?>");
<?php
}
?>
$(function() {
	scAjaxError_markFieldList(scInsertFieldWithErrors);
});
 </script>
<form  name="F1" method="post" 
               action="./" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_pessoa'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_pessoa'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable scFormToastTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle scFormToastTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage scFormToastMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<?php
$msgDefClose = isset($this->arr_buttons['bmessageclose']) ? $this->arr_buttons['bmessageclose']['value'] : 'Ok';
?>
<script type="text/javascript">
var scMsgDefTitle = "<?php if (isset($this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl'])) {echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl'];} ?>";
var scMsgDefButton = "Ok";
var scMsgDefClose = "<?php echo $msgDefClose; ?>";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->sc_page; ?>";
</script>
<?php
if ($this->record_insert_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmi']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
if ($this->record_delete_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmd']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
?>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0  width="100%">
 <tr>
  <td>
  <div class="scFormBorder" style="<?php echo (isset($remove_border) ? $remove_border : ''); ?>">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
$this->displayAppHeader();
?>
<tr><td>
<?php
$this->displayTopToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] != "R")
{
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-1';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['new'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-2';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['insert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['insert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['insert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['insert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['insert'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-3';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-4';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['delete']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['delete']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['delete']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['delete']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['delete'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Delete)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-5';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-6';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-7';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['id_pessoa']))
           {
               $this->nmgp_cmp_readonly['id_pessoa'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['id_pessoa']))
    {
        $this->nm_new_label['id_pessoa'] = "#";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_pessoa = $this->id_pessoa;
   $sStyleHidden_id_pessoa = '';
   if (isset($this->nmgp_cmp_hidden['id_pessoa']) && $this->nmgp_cmp_hidden['id_pessoa'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_pessoa']);
       $sStyleHidden_id_pessoa = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_pessoa = 'display: none;';
   $sStyleReadInp_id_pessoa = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["id_pessoa"]) &&  $this->nmgp_cmp_readonly["id_pessoa"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_pessoa']);
       $sStyleReadLab_id_pessoa = '';
       $sStyleReadInp_id_pessoa = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_pessoa']) && $this->nmgp_cmp_hidden['id_pessoa'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="id_pessoa" value="<?php echo $this->form_encode_input($id_pessoa) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_pessoa_line" id="hidden_field_data_id_pessoa" style="<?php echo $sStyleHidden_id_pessoa; ?>"> <span class="scFormLabelOddFormat css_id_pessoa_label" style=""><span id="id_label_id_pessoa"><?php echo $this->nm_new_label['id_pessoa']; ?></span></span><br>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { 
 ?>
<span id="id_read_on_id_pessoa" css_id_pessoa_line" style="<?php echo $sStyleReadLab_id_pessoa; ?>"><?php echo $this->form_format_readonly("id_pessoa", $this->form_encode_input($this->id_pessoa)); ?></span><span id="id_read_off_id_pessoa" class="css_read_off_id_pessoa" style="<?php echo $sStyleReadInp_id_pessoa; ?>"><input type="hidden" name="id_pessoa" value="<?php echo $this->form_encode_input($id_pessoa) . "\">"?><span id="id_ajax_label_id_pessoa"><?php echo nl2br($id_pessoa); ?></span>
</span><?php } else { ?>
&nbsp;
<?php } ?>
</span> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['cnpj']))
    {
        $this->nm_new_label['cnpj'] = "CNPJ";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cnpj = $this->cnpj;
   $sStyleHidden_cnpj = '';
   if (isset($this->nmgp_cmp_hidden['cnpj']) && $this->nmgp_cmp_hidden['cnpj'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cnpj']);
       $sStyleHidden_cnpj = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cnpj = 'display: none;';
   $sStyleReadInp_cnpj = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cnpj']) && $this->nmgp_cmp_readonly['cnpj'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cnpj']);
       $sStyleReadLab_cnpj = '';
       $sStyleReadInp_cnpj = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cnpj']) && $this->nmgp_cmp_hidden['cnpj'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cnpj" value="<?php echo $this->form_encode_input($cnpj) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cnpj_line" id="hidden_field_data_cnpj" style="<?php echo $sStyleHidden_cnpj; ?>"> <span class="scFormLabelOddFormat css_cnpj_label" style=""><span id="id_label_cnpj"><?php echo $this->nm_new_label['cnpj']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cnpj"]) &&  $this->nmgp_cmp_readonly["cnpj"] == "on") { 

 ?>
<input type="hidden" name="cnpj" value="<?php echo $this->form_encode_input($cnpj) . "\">" . $cnpj . ""; ?>
<?php } else { ?>
<span id="id_read_on_cnpj" class="sc-ui-readonly-cnpj css_cnpj_line" style="<?php echo $sStyleReadLab_cnpj; ?>"><?php echo $this->form_format_readonly("cnpj", $this->form_encode_input($this->cnpj)); ?></span><span id="id_read_off_cnpj" class="css_read_off_cnpj<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cnpj; ?>">
 <input class="sc-js-input scFormObjectOdd css_cnpj_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_cnpj" type=text name="cnpj" value="<?php echo $this->form_encode_input($cnpj) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=16"; } ?> alt="{datatype: 'cnpj', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['nome_pessoa']))
    {
        $this->nm_new_label['nome_pessoa'] = "Nome";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nome_pessoa = $this->nome_pessoa;
   $sStyleHidden_nome_pessoa = '';
   if (isset($this->nmgp_cmp_hidden['nome_pessoa']) && $this->nmgp_cmp_hidden['nome_pessoa'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nome_pessoa']);
       $sStyleHidden_nome_pessoa = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nome_pessoa = 'display: none;';
   $sStyleReadInp_nome_pessoa = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nome_pessoa']) && $this->nmgp_cmp_readonly['nome_pessoa'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nome_pessoa']);
       $sStyleReadLab_nome_pessoa = '';
       $sStyleReadInp_nome_pessoa = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nome_pessoa']) && $this->nmgp_cmp_hidden['nome_pessoa'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nome_pessoa" value="<?php echo $this->form_encode_input($nome_pessoa) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nome_pessoa_line" id="hidden_field_data_nome_pessoa" style="<?php echo $sStyleHidden_nome_pessoa; ?>"> <span class="scFormLabelOddFormat css_nome_pessoa_label" style=""><span id="id_label_nome_pessoa"><?php echo $this->nm_new_label['nome_pessoa']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nome_pessoa"]) &&  $this->nmgp_cmp_readonly["nome_pessoa"] == "on") { 

 ?>
<input type="hidden" name="nome_pessoa" value="<?php echo $this->form_encode_input($nome_pessoa) . "\">" . $nome_pessoa . ""; ?>
<?php } else { ?>
<span id="id_read_on_nome_pessoa" class="sc-ui-readonly-nome_pessoa css_nome_pessoa_line" style="<?php echo $sStyleReadLab_nome_pessoa; ?>"><?php echo $this->form_format_readonly("nome_pessoa", $this->form_encode_input($this->nome_pessoa)); ?></span><span id="id_read_off_nome_pessoa" class="css_read_off_nome_pessoa<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nome_pessoa; ?>">
 <input class="sc-js-input scFormObjectOdd css_nome_pessoa_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nome_pessoa" type=text name="nome_pessoa" value="<?php echo $this->form_encode_input($nome_pessoa) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=80 alt="{datatype: 'text', maxLength: 80, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['razao_social']))
    {
        $this->nm_new_label['razao_social'] = "Razão Social";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $razao_social = $this->razao_social;
   $sStyleHidden_razao_social = '';
   if (isset($this->nmgp_cmp_hidden['razao_social']) && $this->nmgp_cmp_hidden['razao_social'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['razao_social']);
       $sStyleHidden_razao_social = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_razao_social = 'display: none;';
   $sStyleReadInp_razao_social = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['razao_social']) && $this->nmgp_cmp_readonly['razao_social'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['razao_social']);
       $sStyleReadLab_razao_social = '';
       $sStyleReadInp_razao_social = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['razao_social']) && $this->nmgp_cmp_hidden['razao_social'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="razao_social" value="<?php echo $this->form_encode_input($razao_social) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_razao_social_line" id="hidden_field_data_razao_social" style="<?php echo $sStyleHidden_razao_social; ?>"> <span class="scFormLabelOddFormat css_razao_social_label" style=""><span id="id_label_razao_social"><?php echo $this->nm_new_label['razao_social']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["razao_social"]) &&  $this->nmgp_cmp_readonly["razao_social"] == "on") { 

 ?>
<input type="hidden" name="razao_social" value="<?php echo $this->form_encode_input($razao_social) . "\">" . $razao_social . ""; ?>
<?php } else { ?>
<span id="id_read_on_razao_social" class="sc-ui-readonly-razao_social css_razao_social_line" style="<?php echo $sStyleReadLab_razao_social; ?>"><?php echo $this->form_format_readonly("razao_social", $this->form_encode_input($this->razao_social)); ?></span><span id="id_read_off_razao_social" class="css_read_off_razao_social<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_razao_social; ?>">
 <input class="sc-js-input scFormObjectOdd css_razao_social_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_razao_social" type=text name="razao_social" value="<?php echo $this->form_encode_input($razao_social) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=80 alt="{datatype: 'text', maxLength: 80, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_id_pessoa_dumb = ('' == $sStyleHidden_id_pessoa) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_id_pessoa_dumb" style="<?php echo $sStyleHidden_id_pessoa_dumb; ?>"></TD>
<?php $sStyleHidden_cnpj_dumb = ('' == $sStyleHidden_cnpj) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cnpj_dumb" style="<?php echo $sStyleHidden_cnpj_dumb; ?>"></TD>
<?php $sStyleHidden_nome_pessoa_dumb = ('' == $sStyleHidden_nome_pessoa) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_nome_pessoa_dumb" style="<?php echo $sStyleHidden_nome_pessoa_dumb; ?>"></TD>
<?php $sStyleHidden_razao_social_dumb = ('' == $sStyleHidden_razao_social) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_razao_social_dumb" style="<?php echo $sStyleHidden_razao_social_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cep']))
    {
        $this->nm_new_label['cep'] = "CEP";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cep = $this->cep;
   $sStyleHidden_cep = '';
   if (isset($this->nmgp_cmp_hidden['cep']) && $this->nmgp_cmp_hidden['cep'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cep']);
       $sStyleHidden_cep = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cep = 'display: none;';
   $sStyleReadInp_cep = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cep']) && $this->nmgp_cmp_readonly['cep'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cep']);
       $sStyleReadLab_cep = '';
       $sStyleReadInp_cep = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cep']) && $this->nmgp_cmp_hidden['cep'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cep" value="<?php echo $this->form_encode_input($cep) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cep_line" id="hidden_field_data_cep" style="<?php echo $sStyleHidden_cep; ?>"> <span class="scFormLabelOddFormat css_cep_label" style=""><span id="id_label_cep"><?php echo $this->nm_new_label['cep']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cep"]) &&  $this->nmgp_cmp_readonly["cep"] == "on") { 

 ?>
<input type="hidden" name="cep" value="<?php echo $this->form_encode_input($cep) . "\">" . $cep . ""; ?>
<?php } else { ?>
<span id="id_read_on_cep" class="sc-ui-readonly-cep css_cep_line" style="<?php echo $sStyleReadLab_cep; ?>"><?php echo $this->form_format_readonly("cep", $this->form_encode_input($this->cep)); ?></span><span id="id_read_off_cep" class="css_read_off_cep<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cep; ?>">
 <input class="sc-js-input scFormObjectOdd css_cep_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_cep" type=text name="cep" value="<?php echo $this->form_encode_input($cep) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=8"; } ?> alt="{datatype: 'cep', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >&nbsp;<?php echo nmButtonOutput($this->arr_buttons, "bzipcode", "tb_show('', '" . $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . SC_dir_app_name('form_pessoa'). "/form_pessoa_cep.php?cep=' + document.F1.cep.value + '&form_origem=F1;CEP,cep&TB_iframe=true&height=350&width=420&modal=true', '')", "tb_show('', '" . $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . SC_dir_app_name('form_pessoa'). "/form_pessoa_cep.php?cep=' + document.F1.cep.value + '&form_origem=F1;CEP,cep&TB_iframe=true&height=350&width=420&modal=true', '')", "cep_cep", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>

</span><?php } ?>
 </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['endereco']))
    {
        $this->nm_new_label['endereco'] = "Endereço";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $endereco = $this->endereco;
   $sStyleHidden_endereco = '';
   if (isset($this->nmgp_cmp_hidden['endereco']) && $this->nmgp_cmp_hidden['endereco'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['endereco']);
       $sStyleHidden_endereco = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_endereco = 'display: none;';
   $sStyleReadInp_endereco = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['endereco']) && $this->nmgp_cmp_readonly['endereco'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['endereco']);
       $sStyleReadLab_endereco = '';
       $sStyleReadInp_endereco = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['endereco']) && $this->nmgp_cmp_hidden['endereco'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="endereco" value="<?php echo $this->form_encode_input($endereco) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_endereco_line" id="hidden_field_data_endereco" style="<?php echo $sStyleHidden_endereco; ?>"> <span class="scFormLabelOddFormat css_endereco_label" style=""><span id="id_label_endereco"><?php echo $this->nm_new_label['endereco']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["endereco"]) &&  $this->nmgp_cmp_readonly["endereco"] == "on") { 

 ?>
<input type="hidden" name="endereco" value="<?php echo $this->form_encode_input($endereco) . "\">" . $endereco . ""; ?>
<?php } else { ?>
<span id="id_read_on_endereco" class="sc-ui-readonly-endereco css_endereco_line" style="<?php echo $sStyleReadLab_endereco; ?>"><?php echo $this->form_format_readonly("endereco", $this->form_encode_input($this->endereco)); ?></span><span id="id_read_off_endereco" class="css_read_off_endereco<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_endereco; ?>">
 <input class="sc-js-input scFormObjectOdd css_endereco_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_endereco" type=text name="endereco" value="<?php echo $this->form_encode_input($endereco) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=128 alt="{datatype: 'text', maxLength: 128, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['num']))
    {
        $this->nm_new_label['num'] = "Num";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $num = $this->num;
   $sStyleHidden_num = '';
   if (isset($this->nmgp_cmp_hidden['num']) && $this->nmgp_cmp_hidden['num'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['num']);
       $sStyleHidden_num = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_num = 'display: none;';
   $sStyleReadInp_num = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['num']) && $this->nmgp_cmp_readonly['num'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['num']);
       $sStyleReadLab_num = '';
       $sStyleReadInp_num = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['num']) && $this->nmgp_cmp_hidden['num'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="num" value="<?php echo $this->form_encode_input($num) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_num_line" id="hidden_field_data_num" style="<?php echo $sStyleHidden_num; ?>"> <span class="scFormLabelOddFormat css_num_label" style=""><span id="id_label_num"><?php echo $this->nm_new_label['num']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["num"]) &&  $this->nmgp_cmp_readonly["num"] == "on") { 

 ?>
<input type="hidden" name="num" value="<?php echo $this->form_encode_input($num) . "\">" . $num . ""; ?>
<?php } else { ?>
<span id="id_read_on_num" class="sc-ui-readonly-num css_num_line" style="<?php echo $sStyleReadLab_num; ?>"><?php echo $this->form_format_readonly("num", $this->form_encode_input($this->num)); ?></span><span id="id_read_off_num" class="css_read_off_num<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_num; ?>">
 <input class="sc-js-input scFormObjectOdd css_num_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_num" type=text name="num" value="<?php echo $this->form_encode_input($num) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=30"; } ?> maxlength=30 alt="{datatype: 'text', maxLength: 30, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['complemento']))
    {
        $this->nm_new_label['complemento'] = "Complemento";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $complemento = $this->complemento;
   $sStyleHidden_complemento = '';
   if (isset($this->nmgp_cmp_hidden['complemento']) && $this->nmgp_cmp_hidden['complemento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['complemento']);
       $sStyleHidden_complemento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_complemento = 'display: none;';
   $sStyleReadInp_complemento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['complemento']) && $this->nmgp_cmp_readonly['complemento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['complemento']);
       $sStyleReadLab_complemento = '';
       $sStyleReadInp_complemento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['complemento']) && $this->nmgp_cmp_hidden['complemento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="complemento" value="<?php echo $this->form_encode_input($complemento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_complemento_line" id="hidden_field_data_complemento" style="<?php echo $sStyleHidden_complemento; ?>"> <span class="scFormLabelOddFormat css_complemento_label" style=""><span id="id_label_complemento"><?php echo $this->nm_new_label['complemento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["complemento"]) &&  $this->nmgp_cmp_readonly["complemento"] == "on") { 

 ?>
<input type="hidden" name="complemento" value="<?php echo $this->form_encode_input($complemento) . "\">" . $complemento . ""; ?>
<?php } else { ?>
<span id="id_read_on_complemento" class="sc-ui-readonly-complemento css_complemento_line" style="<?php echo $sStyleReadLab_complemento; ?>"><?php echo $this->form_format_readonly("complemento", $this->form_encode_input($this->complemento)); ?></span><span id="id_read_off_complemento" class="css_read_off_complemento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_complemento; ?>">
 <input class="sc-js-input scFormObjectOdd css_complemento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_complemento" type=text name="complemento" value="<?php echo $this->form_encode_input($complemento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=80 alt="{datatype: 'text', maxLength: 80, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_cep_dumb = ('' == $sStyleHidden_cep) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cep_dumb" style="<?php echo $sStyleHidden_cep_dumb; ?>"></TD>
<?php $sStyleHidden_endereco_dumb = ('' == $sStyleHidden_endereco) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_endereco_dumb" style="<?php echo $sStyleHidden_endereco_dumb; ?>"></TD>
<?php $sStyleHidden_num_dumb = ('' == $sStyleHidden_num) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_num_dumb" style="<?php echo $sStyleHidden_num_dumb; ?>"></TD>
<?php $sStyleHidden_complemento_dumb = ('' == $sStyleHidden_complemento) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_complemento_dumb" style="<?php echo $sStyleHidden_complemento_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['bairro']))
    {
        $this->nm_new_label['bairro'] = "Bairro";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $bairro = $this->bairro;
   $sStyleHidden_bairro = '';
   if (isset($this->nmgp_cmp_hidden['bairro']) && $this->nmgp_cmp_hidden['bairro'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['bairro']);
       $sStyleHidden_bairro = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_bairro = 'display: none;';
   $sStyleReadInp_bairro = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['bairro']) && $this->nmgp_cmp_readonly['bairro'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['bairro']);
       $sStyleReadLab_bairro = '';
       $sStyleReadInp_bairro = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['bairro']) && $this->nmgp_cmp_hidden['bairro'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="bairro" value="<?php echo $this->form_encode_input($bairro) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_bairro_line" id="hidden_field_data_bairro" style="<?php echo $sStyleHidden_bairro; ?>"> <span class="scFormLabelOddFormat css_bairro_label" style=""><span id="id_label_bairro"><?php echo $this->nm_new_label['bairro']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["bairro"]) &&  $this->nmgp_cmp_readonly["bairro"] == "on") { 

 ?>
<input type="hidden" name="bairro" value="<?php echo $this->form_encode_input($bairro) . "\">" . $bairro . ""; ?>
<?php } else { ?>
<span id="id_read_on_bairro" class="sc-ui-readonly-bairro css_bairro_line" style="<?php echo $sStyleReadLab_bairro; ?>"><?php echo $this->form_format_readonly("bairro", $this->form_encode_input($this->bairro)); ?></span><span id="id_read_off_bairro" class="css_read_off_bairro<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_bairro; ?>">
 <input class="sc-js-input scFormObjectOdd css_bairro_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_bairro" type=text name="bairro" value="<?php echo $this->form_encode_input($bairro) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=30"; } ?> maxlength=30 alt="{datatype: 'text', maxLength: 30, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['cidade']))
    {
        $this->nm_new_label['cidade'] = "Cidade";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cidade = $this->cidade;
   $sStyleHidden_cidade = '';
   if (isset($this->nmgp_cmp_hidden['cidade']) && $this->nmgp_cmp_hidden['cidade'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cidade']);
       $sStyleHidden_cidade = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cidade = 'display: none;';
   $sStyleReadInp_cidade = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cidade']) && $this->nmgp_cmp_readonly['cidade'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cidade']);
       $sStyleReadLab_cidade = '';
       $sStyleReadInp_cidade = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cidade']) && $this->nmgp_cmp_hidden['cidade'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cidade" value="<?php echo $this->form_encode_input($cidade) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cidade_line" id="hidden_field_data_cidade" style="<?php echo $sStyleHidden_cidade; ?>"> <span class="scFormLabelOddFormat css_cidade_label" style=""><span id="id_label_cidade"><?php echo $this->nm_new_label['cidade']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cidade"]) &&  $this->nmgp_cmp_readonly["cidade"] == "on") { 

 ?>
<input type="hidden" name="cidade" value="<?php echo $this->form_encode_input($cidade) . "\">" . $cidade . ""; ?>
<?php } else { ?>
<span id="id_read_on_cidade" class="sc-ui-readonly-cidade css_cidade_line" style="<?php echo $sStyleReadLab_cidade; ?>"><?php echo $this->form_format_readonly("cidade", $this->form_encode_input($this->cidade)); ?></span><span id="id_read_off_cidade" class="css_read_off_cidade<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cidade; ?>">
 <input class="sc-js-input scFormObjectOdd css_cidade_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_cidade" type=text name="cidade" value="<?php echo $this->form_encode_input($cidade) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=30"; } ?> maxlength=30 alt="{datatype: 'text', maxLength: 30, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['uf']))
    {
        $this->nm_new_label['uf'] = "UF";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $uf = $this->uf;
   $sStyleHidden_uf = '';
   if (isset($this->nmgp_cmp_hidden['uf']) && $this->nmgp_cmp_hidden['uf'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['uf']);
       $sStyleHidden_uf = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_uf = 'display: none;';
   $sStyleReadInp_uf = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['uf']) && $this->nmgp_cmp_readonly['uf'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['uf']);
       $sStyleReadLab_uf = '';
       $sStyleReadInp_uf = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['uf']) && $this->nmgp_cmp_hidden['uf'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="uf" value="<?php echo $this->form_encode_input($uf) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_uf_line" id="hidden_field_data_uf" style="<?php echo $sStyleHidden_uf; ?>"> <span class="scFormLabelOddFormat css_uf_label" style=""><span id="id_label_uf"><?php echo $this->nm_new_label['uf']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["uf"]) &&  $this->nmgp_cmp_readonly["uf"] == "on") { 

 ?>
<input type="hidden" name="uf" value="<?php echo $this->form_encode_input($uf) . "\">" . $uf . ""; ?>
<?php } else { ?>
<span id="id_read_on_uf" class="sc-ui-readonly-uf css_uf_line" style="<?php echo $sStyleReadLab_uf; ?>"><?php echo $this->form_format_readonly("uf", $this->form_encode_input($this->uf)); ?></span><span id="id_read_off_uf" class="css_read_off_uf<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_uf; ?>">
 <input class="sc-js-input scFormObjectOdd css_uf_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_uf" type=text name="uf" value="<?php echo $this->form_encode_input($uf) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=30"; } ?> maxlength=30 alt="{datatype: 'text', maxLength: 30, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['telefone']))
    {
        $this->nm_new_label['telefone'] = "Telefone";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $telefone = $this->telefone;
   $sStyleHidden_telefone = '';
   if (isset($this->nmgp_cmp_hidden['telefone']) && $this->nmgp_cmp_hidden['telefone'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['telefone']);
       $sStyleHidden_telefone = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_telefone = 'display: none;';
   $sStyleReadInp_telefone = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['telefone']) && $this->nmgp_cmp_readonly['telefone'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['telefone']);
       $sStyleReadLab_telefone = '';
       $sStyleReadInp_telefone = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['telefone']) && $this->nmgp_cmp_hidden['telefone'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="telefone" value="<?php echo $this->form_encode_input($telefone) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_telefone_line" id="hidden_field_data_telefone" style="<?php echo $sStyleHidden_telefone; ?>"> <span class="scFormLabelOddFormat css_telefone_label" style=""><span id="id_label_telefone"><?php echo $this->nm_new_label['telefone']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["telefone"]) &&  $this->nmgp_cmp_readonly["telefone"] == "on") { 

 ?>
<input type="hidden" name="telefone" value="<?php echo $this->form_encode_input($telefone) . "\">" . $telefone . ""; ?>
<?php } else { ?>
<span id="id_read_on_telefone" class="sc-ui-readonly-telefone css_telefone_line" style="<?php echo $sStyleReadLab_telefone; ?>"><?php echo $this->form_format_readonly("telefone", $this->form_encode_input($this->telefone)); ?></span><span id="id_read_off_telefone" class="css_read_off_telefone<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_telefone; ?>">
 <input class="sc-js-input scFormObjectOdd css_telefone_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_telefone" type=text name="telefone" value="<?php echo $this->form_encode_input($telefone) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=30"; } ?> maxlength=30 alt="{datatype: 'text', maxLength: 30, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_bairro_dumb = ('' == $sStyleHidden_bairro) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_bairro_dumb" style="<?php echo $sStyleHidden_bairro_dumb; ?>"></TD>
<?php $sStyleHidden_cidade_dumb = ('' == $sStyleHidden_cidade) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cidade_dumb" style="<?php echo $sStyleHidden_cidade_dumb; ?>"></TD>
<?php $sStyleHidden_uf_dumb = ('' == $sStyleHidden_uf) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_uf_dumb" style="<?php echo $sStyleHidden_uf_dumb; ?>"></TD>
<?php $sStyleHidden_telefone_dumb = ('' == $sStyleHidden_telefone) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_telefone_dumb" style="<?php echo $sStyleHidden_telefone_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['celular']))
    {
        $this->nm_new_label['celular'] = "Celular";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $celular = $this->celular;
   $sStyleHidden_celular = '';
   if (isset($this->nmgp_cmp_hidden['celular']) && $this->nmgp_cmp_hidden['celular'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['celular']);
       $sStyleHidden_celular = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_celular = 'display: none;';
   $sStyleReadInp_celular = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['celular']) && $this->nmgp_cmp_readonly['celular'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['celular']);
       $sStyleReadLab_celular = '';
       $sStyleReadInp_celular = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['celular']) && $this->nmgp_cmp_hidden['celular'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="celular" value="<?php echo $this->form_encode_input($celular) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_celular_line" id="hidden_field_data_celular" style="<?php echo $sStyleHidden_celular; ?>"> <span class="scFormLabelOddFormat css_celular_label" style=""><span id="id_label_celular"><?php echo $this->nm_new_label['celular']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["celular"]) &&  $this->nmgp_cmp_readonly["celular"] == "on") { 

 ?>
<input type="hidden" name="celular" value="<?php echo $this->form_encode_input($celular) . "\">" . $celular . ""; ?>
<?php } else { ?>
<span id="id_read_on_celular" class="sc-ui-readonly-celular css_celular_line" style="<?php echo $sStyleReadLab_celular; ?>"><?php echo $this->form_format_readonly("celular", $this->form_encode_input($this->celular)); ?></span><span id="id_read_off_celular" class="css_read_off_celular<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_celular; ?>">
 <input class="sc-js-input scFormObjectOdd css_celular_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_celular" type=text name="celular" value="<?php echo $this->form_encode_input($celular) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=30"; } ?> maxlength=30 alt="{datatype: 'text', maxLength: 30, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['email']))
    {
        $this->nm_new_label['email'] = "Email";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $email = $this->email;
   $sStyleHidden_email = '';
   if (isset($this->nmgp_cmp_hidden['email']) && $this->nmgp_cmp_hidden['email'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['email']);
       $sStyleHidden_email = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_email = 'display: none;';
   $sStyleReadInp_email = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['email']) && $this->nmgp_cmp_readonly['email'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['email']);
       $sStyleReadLab_email = '';
       $sStyleReadInp_email = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['email']) && $this->nmgp_cmp_hidden['email'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="email" value="<?php echo $this->form_encode_input($email) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_email_line" id="hidden_field_data_email" style="<?php echo $sStyleHidden_email; ?>"> <span class="scFormLabelOddFormat css_email_label" style=""><span id="id_label_email"><?php echo $this->nm_new_label['email']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["email"]) &&  $this->nmgp_cmp_readonly["email"] == "on") { 

 ?>
<input type="hidden" name="email" value="<?php echo $this->form_encode_input($email) . "\">" . $email . ""; ?>
<?php } else { ?>
<span id="id_read_on_email" class="sc-ui-readonly-email css_email_line" style="<?php echo $sStyleReadLab_email; ?>"><?php echo $this->form_format_readonly("email", $this->form_encode_input($this->email)); ?></span><span id="id_read_off_email" class="css_read_off_email<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_email; ?>">
 <input class="sc-js-input scFormObjectOdd css_email_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_email" type=text name="email" value="<?php echo $this->form_encode_input($email) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=128 alt="{datatype: 'text', maxLength: 128, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['site']))
    {
        $this->nm_new_label['site'] = "Site";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $site = $this->site;
   $sStyleHidden_site = '';
   if (isset($this->nmgp_cmp_hidden['site']) && $this->nmgp_cmp_hidden['site'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['site']);
       $sStyleHidden_site = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_site = 'display: none;';
   $sStyleReadInp_site = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['site']) && $this->nmgp_cmp_readonly['site'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['site']);
       $sStyleReadLab_site = '';
       $sStyleReadInp_site = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['site']) && $this->nmgp_cmp_hidden['site'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="site" value="<?php echo $this->form_encode_input($site) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_site_line" id="hidden_field_data_site" style="<?php echo $sStyleHidden_site; ?>"> <span class="scFormLabelOddFormat css_site_label" style=""><span id="id_label_site"><?php echo $this->nm_new_label['site']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["site"]) &&  $this->nmgp_cmp_readonly["site"] == "on") { 

 ?>
<input type="hidden" name="site" value="<?php echo $this->form_encode_input($site) . "\">" . $site . ""; ?>
<?php } else { ?>
<span id="id_read_on_site" class="sc-ui-readonly-site css_site_line" style="<?php echo $sStyleReadLab_site; ?>"><?php echo $this->form_format_readonly("site", $this->form_encode_input($this->site)); ?></span><span id="id_read_off_site" class="css_read_off_site<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_site; ?>">
 <input class="sc-js-input scFormObjectOdd css_site_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_site" type=text name="site" value="<?php echo $this->form_encode_input($site) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=80 alt="{datatype: 'text', maxLength: 80, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ie']))
    {
        $this->nm_new_label['ie'] = "IE";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ie = $this->ie;
   $sStyleHidden_ie = '';
   if (isset($this->nmgp_cmp_hidden['ie']) && $this->nmgp_cmp_hidden['ie'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ie']);
       $sStyleHidden_ie = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ie = 'display: none;';
   $sStyleReadInp_ie = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ie']) && $this->nmgp_cmp_readonly['ie'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ie']);
       $sStyleReadLab_ie = '';
       $sStyleReadInp_ie = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ie']) && $this->nmgp_cmp_hidden['ie'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ie" value="<?php echo $this->form_encode_input($ie) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ie_line" id="hidden_field_data_ie" style="<?php echo $sStyleHidden_ie; ?>"> <span class="scFormLabelOddFormat css_ie_label" style=""><span id="id_label_ie"><?php echo $this->nm_new_label['ie']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ie"]) &&  $this->nmgp_cmp_readonly["ie"] == "on") { 

 ?>
<input type="hidden" name="ie" value="<?php echo $this->form_encode_input($ie) . "\">" . $ie . ""; ?>
<?php } else { ?>
<span id="id_read_on_ie" class="sc-ui-readonly-ie css_ie_line" style="<?php echo $sStyleReadLab_ie; ?>"><?php echo $this->form_format_readonly("ie", $this->form_encode_input($this->ie)); ?></span><span id="id_read_off_ie" class="css_read_off_ie<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ie; ?>">
 <input class="sc-js-input scFormObjectOdd css_ie_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ie" type=text name="ie" value="<?php echo $this->form_encode_input($ie) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=30"; } ?> maxlength=30 alt="{datatype: 'text', maxLength: 30, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_celular_dumb = ('' == $sStyleHidden_celular) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_celular_dumb" style="<?php echo $sStyleHidden_celular_dumb; ?>"></TD>
<?php $sStyleHidden_email_dumb = ('' == $sStyleHidden_email) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_email_dumb" style="<?php echo $sStyleHidden_email_dumb; ?>"></TD>
<?php $sStyleHidden_site_dumb = ('' == $sStyleHidden_site) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_site_dumb" style="<?php echo $sStyleHidden_site_dumb; ?>"></TD>
<?php $sStyleHidden_ie_dumb = ('' == $sStyleHidden_ie) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ie_dumb" style="<?php echo $sStyleHidden_ie_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['observacao']))
    {
        $this->nm_new_label['observacao'] = "Observação";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $observacao = $this->observacao;
   $sStyleHidden_observacao = '';
   if (isset($this->nmgp_cmp_hidden['observacao']) && $this->nmgp_cmp_hidden['observacao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['observacao']);
       $sStyleHidden_observacao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_observacao = 'display: none;';
   $sStyleReadInp_observacao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['observacao']) && $this->nmgp_cmp_readonly['observacao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['observacao']);
       $sStyleReadLab_observacao = '';
       $sStyleReadInp_observacao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['observacao']) && $this->nmgp_cmp_hidden['observacao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="observacao" value="<?php echo $this->form_encode_input($observacao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_observacao_line" id="hidden_field_data_observacao" style="<?php echo $sStyleHidden_observacao; ?>"> <span class="scFormLabelOddFormat css_observacao_label" style=""><span id="id_label_observacao"><?php echo $this->nm_new_label['observacao']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["observacao"]) &&  $this->nmgp_cmp_readonly["observacao"] == "on") { 

 ?>
<input type="hidden" name="observacao" value="<?php echo $this->form_encode_input($observacao) . "\">" . $observacao . ""; ?>
<?php } else { ?>
<span id="id_read_on_observacao" class="sc-ui-readonly-observacao css_observacao_line" style="<?php echo $sStyleReadLab_observacao; ?>"><?php echo $this->form_format_readonly("observacao", $this->form_encode_input($this->observacao)); ?></span><span id="id_read_off_observacao" class="css_read_off_observacao<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_observacao; ?>">
 <input class="sc-js-input scFormObjectOdd css_observacao_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_observacao" type=text name="observacao" value="<?php echo $this->form_encode_input($observacao) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=255 alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['login']))
   {
       $this->nm_new_label['login'] = "Login na Plataforma";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $login = $this->login;
   $sStyleHidden_login = '';
   if (isset($this->nmgp_cmp_hidden['login']) && $this->nmgp_cmp_hidden['login'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['login']);
       $sStyleHidden_login = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_login = 'display: none;';
   $sStyleReadInp_login = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['login']) && $this->nmgp_cmp_readonly['login'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['login']);
       $sStyleReadLab_login = '';
       $sStyleReadInp_login = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['login']) && $this->nmgp_cmp_hidden['login'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="login" value="<?php echo $this->form_encode_input($this->login) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_login_line" id="hidden_field_data_login" style="<?php echo $sStyleHidden_login; ?>"> <span class="scFormLabelOddFormat css_login_label" style=""><span id="id_label_login"><?php echo $this->nm_new_label['login']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["login"]) &&  $this->nmgp_cmp_readonly["login"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Lookup_login']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Lookup_login'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Lookup_login']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Lookup_login'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Lookup_login']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Lookup_login'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Lookup_login']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Lookup_login'] = array(); 
    }

   $old_value_id_pessoa = $this->id_pessoa;
   $old_value_cnpj = $this->cnpj;
   $old_value_cep = $this->cep;
   $this->nm_tira_formatacao();


   $unformatted_value_id_pessoa = $this->id_pessoa;
   $unformatted_value_cnpj = $this->cnpj;
   $unformatted_value_cep = $this->cep;

   $nm_comando = "SELECT login, concat(login, '-', name)   FROM sec_users";

   $this->id_pessoa = $old_value_id_pessoa;
   $this->cnpj = $old_value_cnpj;
   $this->cep = $old_value_cep;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Lookup_login'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $login_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->login_1))
          {
              foreach ($this->login_1 as $tmp_login)
              {
                  if (trim($tmp_login) === trim($cadaselect[1])) {$login_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->login) && trim($this->login) === trim($cadaselect[1])) {$login_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="login" value="<?php echo $this->form_encode_input($login) . "\">" . $login_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_login();
   $x = 0 ; 
   $login_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->login_1))
          {
              foreach ($this->login_1 as $tmp_login)
              {
                  if (trim($tmp_login) === trim($cadaselect[1])) {$login_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->login) && trim($this->login) === trim($cadaselect[1])) { $login_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($login_look))
          {
              $login_look = $this->login;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_login\" class=\"css_login_line\" style=\"" .  $sStyleReadLab_login . "\">" . $this->form_format_readonly("login", $this->form_encode_input($login_look)) . "</span><span id=\"id_read_off_login\" class=\"css_read_off_login" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_login . "\">";
   echo " <span id=\"idAjaxSelect_login\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_login_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_login\" name=\"login\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Lookup_login'][] = ''; 
   echo "  <option value=\"\">" . str_replace("<", "&lt;","Selecione...") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->login) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->login)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
 </TD>
   <?php }?>

    <TD class="scFormDataOdd" colspan="2" >&nbsp;</TD>




<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } ?>
   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none;" class='scDebugWindow'><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['masterValue']);
?>
}
<?php
    }
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_pessoa");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_pessoa");
 parent.scAjaxDetailHeight("form_pessoa", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_pessoa", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_pessoa", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
    }
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
    $isToast   = isset($this->NM_ajax_info['displayMsgToast']) && $this->NM_ajax_info['displayMsgToast'] ? 'true' : 'false';
    $toastType = $isToast && isset($this->NM_ajax_info['displayMsgToastType']) ? $this->NM_ajax_info['displayMsgToastType'] : '';
?>
<script type="text/javascript">
_scAjaxShowMessage({title: scMsgDefTitle, message: "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: <?php echo $isToast ?>, toastPos: "", type: "<?php echo $toastType ?>"});
</script>
<?php
}
?>
<?php
if (isset($this->scFormFocusErrorName) && '' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script type='text/javascript'>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<?php
if ($this->nmgp_form_empty) {
?>
<script type="text/javascript">
scAjax_displayEmptyForm();
</script>
<?php
}
?>
<script type="text/javascript">
	function scBtnFn_sys_format_inc() {
		if ($("#sc_b_new_t.sc-unique-btn-1").length && $("#sc_b_new_t.sc-unique-btn-1").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-2").length && $("#sc_b_ins_t.sc-unique-btn-2").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-3").length && $("#sc_b_upd_t.sc-unique-btn-3").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_format_exc() {
		if ($("#sc_b_del_t.sc-unique-btn-4").length && $("#sc_b_del_t.sc-unique-btn-4").is(":visible")) {
		    if ($("#sc_b_del_t.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('excluir');
			 return;
		}
	}
	function scBtnFn_sys_format_hlp() {
		if ($("#sc_b_hlp_t").length && $("#sc_b_hlp_t").is(":visible")) {
		    if ($("#sc_b_hlp_t").hasClass("disabled")) {
		        return;
		    }
			window.open('<?php echo $this->url_webhelp; ?>', '', 'resizable, scrollbars'); 
			 return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_t.sc-unique-btn-5").length && $("#sc_b_sai_t.sc-unique-btn-5").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-5").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-6").length && $("#sc_b_sai_t.sc-unique-btn-6").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-7").length && $("#sc_b_sai_t.sc-unique-btn-7").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-7").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
	}
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-in"><?php echo $this->Ini->Nm_lang['lang_version_mobile']; ?></span>
<?php
       }
?>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['buttonStatus'] = $this->nmgp_botoes;
?>
<script type="text/javascript">
   function sc_session_redir(url_redir)
   {
       if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')
       {
           window.parent.sc_session_redir(url_redir);
       }
       else
       {
           if (window.opener && typeof window.opener.sc_session_redir === 'function')
           {
               window.close();
               window.opener.sc_session_redir(url_redir);
           }
           else
           {
               window.location = url_redir;
           }
       }
   }
</script>
</body> 
</html> 
