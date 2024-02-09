<!DOCTYPE html>
<html lang="pt_br">
	<head>
		<META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
		<title>AgrIG</title>
        <link rel="stylesheet" href="../_lib/libraries/grp/ShowRural/login/css/login04.css">
        <link rel="stylesheet" type="text/css" href="../_lib/libraries/grp/ShowRural/libs/bootstrap/css/bootstrap.min.css" />   
        <link rel="stylesheet" type="text/css" href="../_lib/libraries/grp/ShowRural/libs/css/styles.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php
			if(isset($_GET['lang']) && !empty($_GET['lang'])) {
				$idioma = $_GET['lang'];
			} else {
				$idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);
			}
		?>
		
		<style>
			.flags {
				border: 1px solid white;
				padding: 0px!important;
				display: inline-block!important;
				height: 22px!important;				
			}
			
			.flags:hover {
				border-color: #ddd!important;
				filter: grayscale(80%);
			}

			.flag-<?php echo $idioma ?>,
			.flag-<?php echo $idioma ?>:hover {
				border-color: #439894!important;
    			background: #f1f1f1;
    			cursor: default;
			}
		</style>
		
	</head>
	<body class="page-sidebar page-background">
		<div class="opacity">
		<div class="page">
			<div class="container">
              <div class="card card-container">
                  <img id="profile-img" class="profile-img-card" src="../_lib/libraries/grp/ShowRural/login/img/login.png" />
                  <p id="profile-name" class="profile-name-card">Login</p>
                  <form class="form-signin"  name="F1" method="post" 
               action="./" 
               target="_self">
                  <input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($nmgp_url_saida); ?>">
<input type="hidden" name="bok" value="OK">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />

                      <span id="reauth-email" class="reauth-email"></span>
                      <input type="text" id="inputEmail" class="form-control  sc-js-input "  name="login" id="id_sc_field_login" value="<?php echo $this->form_encode_input($login) ?>"  alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: true, autoTab: false, selectOnFocus: false, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"  placeholder="Username" required autofocus>
                      <input type="password" id="inputPassword" class="form-control  sc-js-input "  name="pswd" id="id_sc_field_pswd" value="<?php echo $this->form_encode_input($pswd) ?>"  alt="{datatype: 'text', maxLength: 32, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: true, autoTab: false, selectOnFocus: false, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"  placeholder="Password" required>
						<!--SC_REQUIRED_MSG-->
						<!--SC_CAPTCHA-->
                      <input class="btn btn-lg btn-primary btn-block btn-signin" type="button" value="Login"  onclick="nm_atualiza('alterar');"  />
					  <br>
                  <div class="class-links"><input type="hidden" name="links" value = "">
<input type="hidden" name="links_sc_target_name" value = "">
<div id="id-links-1" class="class-links ">
 <a href="javascript:nm_menu_link_links('sec_retrieve_pswd', '_self')"><?php echo $this->Ini->Nm_lang['lang_subject_mail'] ?></a>
</div></div>
					  	  
					 
                  </form><!-- /form -->
              </div><!-- /card-container -->
          </div><!-- /container -->
         
            <div class="alert-message negative">
                <span class="message"></span>
                <span class="close">&times;</span>
            </div>
            
             <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_userSweetAlertDisplayed = false;
 </SCRIPT>
        <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_third; ?>jquery/js/jquery.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" />

<script>
var scFocusFirstErrorField = true;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("sec_Login_sajax_js.php");
?>
<script type="text/javascript">
var Nm_Proc_Atualiz = false;
</script>
<script type="text/javascript">
<?php

include_once('sec_Login_jquery.php');

?>
</script>
<script type="text/javascript">
 $(function() {
  scJQElementsAdd('');
  scJQGeneralAdd();
<?php
if (!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName)
{
?>
  scFocusField('login');

<?php
}
?>
 });

</script>
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
 include_once("sec_Login_js0.php");
?>
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
<script type='text/javascript'>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['sec_Login']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['sec_Login']['sc_modal'])
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
$sIconTitle = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
$sErrorIcon = (isset($_SESSION['scriptcase']['error_icon']['app_Login']) && '' != $_SESSION['scriptcase']['error_icon']['app_Login']) ? $_SESSION['scriptcase']['error_icon']['app_Login']  : "";
$sCloseIcon = (isset($_SESSION['scriptcase']['error_close']['app_Login']) && '' != trim($_SESSION['scriptcase']['error_close']['app_Login'])) ? $_SESSION['scriptcase']['error_close']['app_Login'] : "<td><input class=\"scButton_default\" type=\"button\" onClick=\"document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false\" value=\"X\" /></td>";
if ('' != $sIconTitle && '' != $sErrorIcon) {
    $sErrorIcon = '';
}
?>
<script type="text/javascript">
$(function() {
    $(document.F1).on("submit", function (e) {
        e.preventDefault();
    });
});

if (typeof scDisplayUserError === "undefined") {
    function scDisplayUserError(errorMessage) {
        scJs_alert("ERROR:\r\n" + errorMessage.replace(/<br \/>/gi, "<!--SC_NL-->"), function() {}, {type: "error"});
    }
}
if (typeof scDisplayUserDebug === "undefined") {
    function scDisplayUserDebug(debugMessage) {
        scJs_alert("DEBUG:\r\n" + debugMessage.replace(/<br \/>/gi, "<!--SC_NL-->"), function() {}, {type: "warning"});
    }
}
if (typeof scDisplayUserMessage === "undefined") {
    function scDisplayUserMessage(userMessage) {
        scJs_alert("MESSAGE:\r\n" + userMessage.replace(/<br \/>/gi, "<!--SC_NL-->"), function() {}, {type: "info"});
    }
}
</script>

<script>
$(function() {
<?php
if (isset($this->nmgp_cmp_hidden) && !empty($this->nmgp_cmp_hidden)) {
    foreach($this->nmgp_cmp_hidden as $fieldDisplayFieldName => $fieldDisplayFieldStatus) {
        if ('on' == $fieldDisplayFieldStatus) {
?>
if (typeof scShowUserField === "function") {
    scShowUserField("<?php echo $fieldDisplayFieldName ?>");
}
<?php
        }
        if ('off' == $fieldDisplayFieldStatus) {
?>
if (typeof scHideUserField === "function") {
    scHideUserField("<?php echo $fieldDisplayFieldName ?>");
}
<?php
        }
    }
}
?>
<?php
?>
});
</script>

            <script type="text/javascript" src="../_lib/libraries/grp/ShowRural/libs/js/error.js"></script>
		</div>
      </body>
</html>