<?php
//
class form_pessoa_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $formatado = false;
   var $use_100perc_fields = false;
   var $classes_100perc_fields = array();
   var $close_modal_after_insert = false;
   var $NM_ajax_flag    = false;
   var $NM_ajax_opcao   = '';
   var $NM_ajax_retorno = '';
   var $NM_ajax_info    = array('result'            => '',
                                'param'             => array(),
                                'autoComp'          => '',
                                'rsSize'            => '',
                                'msgDisplay'        => '',
                                'errList'           => array(),
                                'fldList'           => array(),
                                'varList'           => array(),
                                'focus'             => '',
                                'navStatus'         => array(),
                                'redir'             => array(),
                                'blockDisplay'      => array(),
                                'fieldDisplay'      => array(),
                                'fieldLabel'        => array(),
                                'readOnly'          => array(),
                                'btnVars'           => array(),
                                'ajaxAlert'         => array(),
                                'ajaxMessage'       => array(),
                                'ajaxJavascript'    => array(),
                                'buttonDisplay'     => array(),
                                'buttonDisplayVert' => array(),
                                'calendarReload'    => false,
                                'quickSearchRes'    => false,
                                'displayMsg'        => false,
                                'displayMsgTxt'     => '',
                                'dyn_search'        => array(),
                                'empty_filter'      => '',
                                'event_field'       => '',
                                'fieldsWithErrors'  => array(),
                               );
   var $NM_ajax_force_values = false;
   var $Nav_permite_ava     = true;
   var $Nav_permite_ret     = true;
   var $Apl_com_erro        = false;
   var $app_is_initializing = false;
   var $Ini;
   var $Erro;
   var $Db;
   var $id_pessoa;
   var $nome_pessoa;
   var $razao_social;
   var $tipo_pessoa;
   var $cnpj;
   var $cpf;
   var $cep;
   var $endereco;
   var $num;
   var $complemento;
   var $bairro;
   var $cidade;
   var $uf;
   var $telefone;
   var $celular;
   var $email;
   var $site;
   var $ie;
   var $ibge;
   var $status;
   var $observacao;
   var $insert_user;
   var $insert_data;
   var $insert_data_hora;
   var $update_user;
   var $update_data;
   var $update_data_hora;
   var $flag_produtor;
   var $flag_representante;
   var $flag_cliente;
   var $flag_transportadora;
   var $login;
   var $login_1;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $nmgp_clone;
   var $nmgp_return_img = array();
   var $nmgp_dados_form = array();
   var $nmgp_dados_select = array();
   var $nm_location;
   var $nm_flag_iframe;
   var $nm_flag_saida_novo;
   var $nmgp_botoes = array();
   var $nmgp_url_saida;
   var $nmgp_form_show;
   var $nmgp_form_empty;
   var $nmgp_cmp_readonly = array();
   var $nmgp_cmp_hidden   = array();
   var $Field_no_validate  = array();
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
   var $Grid_editavel  = false;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
   var $record_insert_ok = false;
   var $record_delete_ok = false;
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['bairro']))
          {
              $this->bairro = $this->NM_ajax_info['param']['bairro'];
          }
          if (isset($this->NM_ajax_info['param']['celular']))
          {
              $this->celular = $this->NM_ajax_info['param']['celular'];
          }
          if (isset($this->NM_ajax_info['param']['cep']))
          {
              $this->cep = $this->NM_ajax_info['param']['cep'];
          }
          if (isset($this->NM_ajax_info['param']['cidade']))
          {
              $this->cidade = $this->NM_ajax_info['param']['cidade'];
          }
          if (isset($this->NM_ajax_info['param']['cnpj']))
          {
              $this->cnpj = $this->NM_ajax_info['param']['cnpj'];
          }
          if (isset($this->NM_ajax_info['param']['complemento']))
          {
              $this->complemento = $this->NM_ajax_info['param']['complemento'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['email']))
          {
              $this->email = $this->NM_ajax_info['param']['email'];
          }
          if (isset($this->NM_ajax_info['param']['endereco']))
          {
              $this->endereco = $this->NM_ajax_info['param']['endereco'];
          }
          if (isset($this->NM_ajax_info['param']['id_pessoa']))
          {
              $this->id_pessoa = $this->NM_ajax_info['param']['id_pessoa'];
          }
          if (isset($this->NM_ajax_info['param']['ie']))
          {
              $this->ie = $this->NM_ajax_info['param']['ie'];
          }
          if (isset($this->NM_ajax_info['param']['login']))
          {
              $this->login = $this->NM_ajax_info['param']['login'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_dyn_search']))
          {
              $this->nmgp_arg_dyn_search = $this->NM_ajax_info['param']['nmgp_arg_dyn_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_num_form']))
          {
              $this->nmgp_num_form = $this->NM_ajax_info['param']['nmgp_num_form'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_opcao']))
          {
              $this->nmgp_opcao = $this->NM_ajax_info['param']['nmgp_opcao'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ordem']))
          {
              $this->nmgp_ordem = $this->NM_ajax_info['param']['nmgp_ordem'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_parms']))
          {
              $this->nmgp_parms = $this->NM_ajax_info['param']['nmgp_parms'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['nome_pessoa']))
          {
              $this->nome_pessoa = $this->NM_ajax_info['param']['nome_pessoa'];
          }
          if (isset($this->NM_ajax_info['param']['num']))
          {
              $this->num = $this->NM_ajax_info['param']['num'];
          }
          if (isset($this->NM_ajax_info['param']['observacao']))
          {
              $this->observacao = $this->NM_ajax_info['param']['observacao'];
          }
          if (isset($this->NM_ajax_info['param']['razao_social']))
          {
              $this->razao_social = $this->NM_ajax_info['param']['razao_social'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['site']))
          {
              $this->site = $this->NM_ajax_info['param']['site'];
          }
          if (isset($this->NM_ajax_info['param']['telefone']))
          {
              $this->telefone = $this->NM_ajax_info['param']['telefone'];
          }
          if (isset($this->NM_ajax_info['param']['uf']))
          {
              $this->uf = $this->NM_ajax_info['param']['uf'];
          }
          if (isset($this->nmgp_refresh_fields))
          {
              $this->nmgp_refresh_fields = explode('_#fld#_', $this->nmgp_refresh_fields);
              $this->nmgp_opcao          = 'recarga';
          }
          if (!isset($this->nmgp_refresh_row))
          {
              $this->nmgp_refresh_row = '';
          }
      }

      $this->scSajaxReservedWords = array('rs', 'rst', 'rsrnd', 'rsargs');
      $this->sc_conv_var = array();
      if (!empty($_FILES))
      {
          foreach ($_FILES as $nmgp_campo => $nmgp_valores)
          {
               if (!in_array(strtolower($nmgp_campo), $this->scSajaxReservedWords)) {
                   if (isset($this->sc_conv_var[$nmgp_campo]))
                   {
                       $nmgp_campo = $this->sc_conv_var[$nmgp_campo];
                   }
                   elseif (isset($this->sc_conv_var[strtolower($nmgp_campo)]))
                   {
                       $nmgp_campo = $this->sc_conv_var[strtolower($nmgp_campo)];
                   }
               }
               $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
               $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
               $this->$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
               $this->$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
               $this->$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
          }
      }
      $Sc_lig_md5 = false;
      if (!empty($_POST))
      {
          foreach ($_POST as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                      $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (!in_array(strtolower($nmgp_var), $this->scSajaxReservedWords)) {
                   if (isset($this->sc_conv_var[$nmgp_var]))
                   {
                       $nmgp_var = $this->sc_conv_var[$nmgp_var];
                   }
                   elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
                   {
                       $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
                   }
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (!empty($_GET))
      {
          foreach ($_GET as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                       $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (!in_array(strtolower($nmgp_var), $this->scSajaxReservedWords)) {
                   if (isset($this->sc_conv_var[$nmgp_var]))
                   {
                       $nmgp_var = $this->sc_conv_var[$nmgp_var];
                   }
                   elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
                   {
                       $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
                   }
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (isset($SC_lig_apl_orig) && !$Sc_lig_md5 && (!isset($nmgp_parms) || ($nmgp_parms != "SC_null" && substr($nmgp_parms, 0, 8) != "OrScLink")))
      {
          $_SESSION['sc_session']['SC_parm_violation'] = true;
      }
      if (isset($nmgp_parms) && $nmgp_parms == "SC_null")
      {
          $nmgp_parms = "";
      }
      if (isset($this->nmgp_opcao) && $this->nmgp_opcao == "reload_novo") {
          $_POST['nmgp_opcao'] = "novo";
          $this->nmgp_opcao    = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_pessoa']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_pessoa']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_pessoa']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_pessoa']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_pessoa']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $nmgp_parms = str_replace("@aspass@", "'", $this->nmgp_parms);
          $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
          $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
          $todox = str_replace("?#?@?@?", "?#?@ ?@?", $nmgp_parms);
          $todo  = explode("?@?", $todox);
          $ix = 0;
          while (!empty($todo[$ix]))
          {
             $cadapar = explode("?#?", $todo[$ix]);
             if (1 < sizeof($cadapar))
             {
                if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                {
                    $cadapar[0] = substr($cadapar[0], 11);
                    $cadapar[1] = $_SESSION[$cadapar[1]];
                }
                 if (isset($this->sc_conv_var[$cadapar[0]]))
                 {
                     $cadapar[0] = $this->sc_conv_var[$cadapar[0]];
                 }
                 elseif (isset($this->sc_conv_var[strtolower($cadapar[0])]))
                 {
                     $cadapar[0] = $this->sc_conv_var[strtolower($cadapar[0])];
                 }
                 nm_limpa_str_form_pessoa($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_pessoa']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_pessoa']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_pessoa']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_pessoa']['sc_redir_insert'] = $this->sc_redir_insert;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_pessoa']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_pessoa']['parms']);
              $todo  = explode("?@?", $todox);
              $ix = 0;
              while (!empty($todo[$ix]))
              {
                 $cadapar = explode("?#?", $todo[$ix]);
                 if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                 {
                     $cadapar[0] = substr($cadapar[0], 11);
                     $cadapar[1] = $_SESSION[$cadapar[1]];
                 }
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if (isset($this->nm_run_menu) && $this->nm_run_menu == 1)
      { 
          $_SESSION['sc_session'][$script_case_init]['form_pessoa']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_pessoa']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_pessoa']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_pessoa']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_pessoa']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_pessoa']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_pessoa']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_pessoa']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_pessoa_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("pt_br");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("pt_br");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_pessoa']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_pessoa']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_pessoa'];
          }
          elseif (isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']]))
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']] as $init => $resto)
              {
                  if ($this->Ini->sc_page == $init)
                  {
                      $this->sc_init_menu = $init;
                      break;
                  }
              }
          }
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_pessoa']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_pessoa']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_pessoa') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_pessoa']['label'] = "Pessoa";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_pessoa")
                  {
                      $achou = true;
                  }
                  elseif ($achou)
                  {
                      unset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu][$apl]);
                      $this->Change_Menu = true;
                  }
              }
          }
      }
      if (!function_exists("nmButtonOutput"))
      {
          include_once($this->Ini->path_lib_php . "nm_gp_config_btn.php");
      }
      include("../_lib/css/" . $this->Ini->str_schema_all . "_form.php");
      $this->Ini->Str_btn_form    = trim($str_button);
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $_SESSION['scriptcase']['css_form_help'] = '../_lib/css/' . $this->Ini->str_schema_all . "_form.css";
      $_SESSION['scriptcase']['css_form_help_dir'] = '../_lib/css/' . $this->Ini->str_schema_all . "_form" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css";
      $this->Db = $this->Ini->Db; 
      $this->Ini->str_google_fonts = isset($str_google_fonts)?$str_google_fonts:'';
      $this->Ini->Img_sep_form    = "/" . trim($str_toolbar_separator);
      $this->Ini->Color_bg_ajax   = !isset($str_ajax_bg)         || "" == trim($str_ajax_bg)         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax   = !isset($str_ajax_border_c)   || "" == trim($str_ajax_border_c)   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax   = !isset($str_ajax_border_s)   || "" == trim($str_ajax_border_s)   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax   = !isset($str_ajax_border_w)   || "" == trim($str_ajax_border_w)   ? ""     : $str_ajax_border_w;
      $this->Ini->Block_img_exp   = !isset($str_block_exp)       || "" == trim($str_block_exp)       ? ""     : $str_block_exp;
      $this->Ini->Block_img_col   = !isset($str_block_col)       || "" == trim($str_block_col)       ? ""     : $str_block_col;
      $this->Ini->Msg_ico_title   = !isset($str_msg_ico_title)   || "" == trim($str_msg_ico_title)   ? ""     : $str_msg_ico_title;
      $this->Ini->Msg_ico_body    = !isset($str_msg_ico_body)    || "" == trim($str_msg_ico_body)    ? ""     : $str_msg_ico_body;
      $this->Ini->Err_ico_title   = !isset($str_err_ico_title)   || "" == trim($str_err_ico_title)   ? ""     : $str_err_ico_title;
      $this->Ini->Err_ico_body    = !isset($str_err_ico_body)    || "" == trim($str_err_ico_body)    ? ""     : $str_err_ico_body;
      $this->Ini->Cal_ico_back    = !isset($str_cal_ico_back)    || "" == trim($str_cal_ico_back)    ? ""     : $str_cal_ico_back;
      $this->Ini->Cal_ico_for     = !isset($str_cal_ico_for)     || "" == trim($str_cal_ico_for)     ? ""     : $str_cal_ico_for;
      $this->Ini->Cal_ico_close   = !isset($str_cal_ico_close)   || "" == trim($str_cal_ico_close)   ? ""     : $str_cal_ico_close;
      $this->Ini->Tab_space       = !isset($str_tab_space)       || "" == trim($str_tab_space)       ? ""     : $str_tab_space;
      $this->Ini->Bubble_tail     = !isset($str_bubble_tail)     || "" == trim($str_bubble_tail)     ? ""     : $str_bubble_tail;
      $this->Ini->Label_sort_pos  = !isset($str_label_sort_pos)  || "" == trim($str_label_sort_pos)  ? ""     : $str_label_sort_pos;
      $this->Ini->Label_sort      = !isset($str_label_sort)      || "" == trim($str_label_sort)      ? ""     : $str_label_sort;
      $this->Ini->Label_sort_asc  = !isset($str_label_sort_asc)  || "" == trim($str_label_sort_asc)  ? ""     : $str_label_sort_asc;
      $this->Ini->Label_sort_desc = !isset($str_label_sort_desc) || "" == trim($str_label_sort_desc) ? ""     : $str_label_sort_desc;
      $this->Ini->Img_status_ok       = !isset($str_img_status_ok)  || "" == trim($str_img_status_ok)   ? ""     : $str_img_status_ok;
      $this->Ini->Img_status_err      = !isset($str_img_status_err) || "" == trim($str_img_status_err)  ? ""     : $str_img_status_err;
      $this->Ini->Css_status          = "scFormInputError";
      $this->Ini->Css_status_pwd_box  = "scFormInputErrorPwdBox";
      $this->Ini->Css_status_pwd_text = "scFormInputErrorPwdText";
      $this->Ini->Error_icon_span      = !isset($str_error_icon_span)  || "" == trim($str_error_icon_span)  ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = !isset($img_qs_search)        || "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = !isset($img_qs_clean)         || "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = !isset($str_qs_image_padding) || "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);
      $this->Ini->form_table_width     = isset($str_form_table_width) && '' != trim($str_form_table_width) ? $str_form_table_width : '';

        $this->classes_100perc_fields['table'] = '';
        $this->classes_100perc_fields['input'] = '';
        $this->classes_100perc_fields['span_input'] = '';
        $this->classes_100perc_fields['span_select'] = '';
        $this->classes_100perc_fields['style_category'] = '';
        $this->classes_100perc_fields['keep_field_size'] = true;



      $_SESSION['scriptcase']['error_icon']['form_pessoa']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_error.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_pessoa'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_call'] : $this->Embutida_call;

      $this->form_3versions_single = false;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "on";
      $this->nmgp_botoes['first'] = "off";
      $this->nmgp_botoes['back'] = "off";
      $this->nmgp_botoes['forward'] = "off";
      $this->nmgp_botoes['last'] = "off";
      $this->nmgp_botoes['summary'] = "off";
      $this->nmgp_botoes['navpage'] = "off";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      $this->nmgp_botoes['reload'] = "off";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pessoa']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_pessoa'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_pessoa'];

              $this->nmgp_botoes['update']     = $tmpDashboardButtons['form_update']    ? 'on' : 'off';
              $this->nmgp_botoes['new']        = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['insert']     = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['delete']     = $tmpDashboardButtons['form_delete']    ? 'on' : 'off';
              $this->nmgp_botoes['copy']       = $tmpDashboardButtons['form_copy']      ? 'on' : 'off';
              $this->nmgp_botoes['first']      = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['back']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['last']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['forward']    = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['navpage']    = $tmpDashboardButtons['form_navpage']   ? 'on' : 'off';
              $this->nmgp_botoes['goto']       = $tmpDashboardButtons['form_goto']      ? 'on' : 'off';
              $this->nmgp_botoes['qtline']     = $tmpDashboardButtons['form_lineqty']   ? 'on' : 'off';
              $this->nmgp_botoes['summary']    = $tmpDashboardButtons['form_summary']   ? 'on' : 'off';
              $this->nmgp_botoes['qsearch']    = $tmpDashboardButtons['form_qsearch']   ? 'on' : 'off';
              $this->nmgp_botoes['dynsearch']  = $tmpDashboardButtons['form_dynsearch'] ? 'on' : 'off';
              $this->nmgp_botoes['reload']     = $tmpDashboardButtons['form_reload']    ? 'on' : 'off';
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dados_form'];
          if (!isset($this->tipo_pessoa)){$this->tipo_pessoa = $this->nmgp_dados_form['tipo_pessoa'];} 
          if (!isset($this->cpf)){$this->cpf = $this->nmgp_dados_form['cpf'];} 
          if (!isset($this->ibge)){$this->ibge = $this->nmgp_dados_form['ibge'];} 
          if (!isset($this->status)){$this->status = $this->nmgp_dados_form['status'];} 
          if (!isset($this->insert_user)){$this->insert_user = $this->nmgp_dados_form['insert_user'];} 
          if (!isset($this->insert_data)){$this->insert_data = $this->nmgp_dados_form['insert_data'];} 
          if (!isset($this->update_user)){$this->update_user = $this->nmgp_dados_form['update_user'];} 
          if (!isset($this->update_data)){$this->update_data = $this->nmgp_dados_form['update_data'];} 
          if (!isset($this->flag_produtor)){$this->flag_produtor = $this->nmgp_dados_form['flag_produtor'];} 
          if (!isset($this->flag_representante)){$this->flag_representante = $this->nmgp_dados_form['flag_representante'];} 
          if (!isset($this->flag_cliente)){$this->flag_cliente = $this->nmgp_dados_form['flag_cliente'];} 
          if (!isset($this->flag_transportadora)){$this->flag_transportadora = $this->nmgp_dados_form['flag_transportadora'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_pessoa", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                      $this->Ini->Nm_lang['lang_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_mnth_june'],
                                      $this->Ini->Nm_lang['lang_mnth_july'],
                                      $this->Ini->Nm_lang['lang_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                      $this->Ini->Nm_lang['lang_days_sund'],
                                      $this->Ini->Nm_lang['lang_days_mond'],
                                      $this->Ini->Nm_lang['lang_days_tued'],
                                      $this->Ini->Nm_lang['lang_days_wend'],
                                      $this->Ini->Nm_lang['lang_days_thud'],
                                      $this->Ini->Nm_lang['lang_days_frid'],
                                      $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                      $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                      $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                      $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                      $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                      $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                      $this->Ini->Nm_lang['lang_shrt_days_satd']);
      nm_gc($this->Ini->path_libs);
      $this->Ini->Gd_missing  = true;
      if(function_exists("getProdVersion"))
      {
         $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
         if(function_exists("gd_info"))
         {
            $this->Ini->Gd_missing = false;
         }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 

      if (is_file($this->Ini->path_aplicacao . 'form_pessoa_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_pessoa_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('form:' == substr($str_link_webhelp, 0, 5))
                  {
                      $arr_link_parts = explode(':', $str_link_webhelp);
                      if ('' != $arr_link_parts[1] && is_file($this->Ini->root . $this->Ini->path_help . $arr_link_parts[1]))
                      {
                          $this->url_webhelp = $this->Ini->path_help . $arr_link_parts[1];
                      }
                  }
              }
          }
      }

      if (is_dir($this->Ini->path_aplicacao . 'img'))
      {
          $Res_dir_img = @opendir($this->Ini->path_aplicacao . 'img');
          if ($Res_dir_img)
          {
              while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
              {
                 if (@is_file($this->Ini->path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $this->Ini->path_aplicacao . 'img/' . $Str_arquivo)
                 {
                     @unlink($this->Ini->path_aplicacao . 'img/' . $Str_arquivo);
                 }
              }
          }
          @closedir($Res_dir_img);
          rmdir($this->Ini->path_aplicacao . 'img');
      }

      if ($this->Embutida_proc)
      { 
          require_once($this->Ini->path_embutida . 'form_pessoa/form_pessoa_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_pessoa_erro.class.php"); 
      }
      $this->Erro      = new form_pessoa_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opcao']))
         { 
             if ($this->id_pessoa != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_pessoa']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->NM_case_insensitive = false;
      $this->sc_evento = $this->nmgp_opcao;
      if (!isset($this->NM_ajax_flag) || ('validate_' != substr($this->NM_ajax_opcao, 0, 9) && 'add_new_line' != $this->NM_ajax_opcao && 'autocomp_' != substr($this->NM_ajax_opcao, 0, 9)))
      {
      $_SESSION['scriptcase']['form_pessoa']['contr_erro'] = 'on';
  ?>
<?php echo $this->css_form(); ?>

<style>
	
	.select2-dropdown{width:340px !important}
	.select2-search--dropdown .select2-search__field{width:340px !important}
	.select2-close-mask{width:340px !important}
	.select2-container--default .select2-selection--multiple .select2-selection__rendered{width:340px !important}
	.select2-container--default .select2-selection {width:340px !important}
	.select2-container .select2-selection--single {width:340px !important}
	.select2-container--default .select2-selection--single {width:340px !important}
	span.select2.select2-container.select2-container--default {width:340px !important}
	
</style>
<?php
$_SESSION['scriptcase']['form_pessoa']['contr_erro'] = 'off'; 
      }
            if ('ajax_check_file' == $this->nmgp_opcao ){
                 ob_start(); 
                 include_once("../_lib/lib/php/nm_api.php"); 
            switch( $_POST['rsargs'] ){
               default:
                   echo 0;exit;
               break;
               }

            $out1_img_cache = $_SESSION['scriptcase']['form_pessoa']['glo_nm_path_imag_temp'] . $file_name;
            $orig_img = $_SESSION['scriptcase']['form_pessoa']['glo_nm_path_imag_temp']. '/sc_'.md5(date('YmdHis').basename($_POST['AjaxCheckImg'])).'.gif';
            copy($__file_download, $_SERVER['DOCUMENT_ROOT'].$orig_img);
            echo $orig_img . '_@@NM@@_';            copy($__file_download, $_SERVER['DOCUMENT_ROOT'].$out1_img_cache);
            $sc_obj_img = new nm_trata_img($_SERVER['DOCUMENT_ROOT'].$out1_img_cache, true);

            if(!empty($img_width) && !empty($img_height)){
                $sc_obj_img->setWidth($img_width);
                $sc_obj_img->setHeight($img_height);
            }
                $sc_obj_img->setManterAspecto(true);
            $sc_obj_img->createImg($_SERVER['DOCUMENT_ROOT'].$out1_img_cache);
            echo $out1_img_cache;
               exit;
            }
      if (isset($this->id_pessoa)) { $this->nm_limpa_alfa($this->id_pessoa); }
      if (isset($this->nome_pessoa)) { $this->nm_limpa_alfa($this->nome_pessoa); }
      if (isset($this->razao_social)) { $this->nm_limpa_alfa($this->razao_social); }
      if (isset($this->cnpj)) { $this->nm_limpa_alfa($this->cnpj); }
      if (isset($this->cep)) { $this->nm_limpa_alfa($this->cep); }
      if (isset($this->endereco)) { $this->nm_limpa_alfa($this->endereco); }
      if (isset($this->num)) { $this->nm_limpa_alfa($this->num); }
      if (isset($this->complemento)) { $this->nm_limpa_alfa($this->complemento); }
      if (isset($this->bairro)) { $this->nm_limpa_alfa($this->bairro); }
      if (isset($this->cidade)) { $this->nm_limpa_alfa($this->cidade); }
      if (isset($this->uf)) { $this->nm_limpa_alfa($this->uf); }
      if (isset($this->telefone)) { $this->nm_limpa_alfa($this->telefone); }
      if (isset($this->celular)) { $this->nm_limpa_alfa($this->celular); }
      if (isset($this->email)) { $this->nm_limpa_alfa($this->email); }
      if (isset($this->site)) { $this->nm_limpa_alfa($this->site); }
      if (isset($this->ie)) { $this->nm_limpa_alfa($this->ie); }
      if (isset($this->observacao)) { $this->nm_limpa_alfa($this->observacao); }
      if (isset($this->login)) { $this->nm_limpa_alfa($this->login); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->Field_no_validate = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Field_no_validate'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Field_no_validate'] : array();
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- id_pessoa
      $this->field_config['id_pessoa']               = array();
      $this->field_config['id_pessoa']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['id_pessoa']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['id_pessoa']['symbol_dec'] = '';
      $this->field_config['id_pessoa']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['id_pessoa']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- insert_data
      $this->field_config['insert_data']                 = array();
      $this->field_config['insert_data']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['insert_data']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['insert_data']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['insert_data']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'insert_data');
      //-- update_data
      $this->field_config['update_data']                 = array();
      $this->field_config['update_data']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['update_data']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['update_data']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['update_data']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'update_data');
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();

      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

      if ($nm_form_submit == 1 && ($this->nmgp_opcao == 'inicio' || $this->nmgp_opcao == 'igual'))
      {
          $this->nm_tira_formatacao();
      }
      if (!$this->NM_ajax_flag || 'alterar' != $this->nmgp_opcao || 'submit_form' != $this->NM_ajax_opcao)
      {
      }
//
//-----> 
//
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('validate_id_pessoa' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_pessoa');
          }
          if ('validate_cnpj' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cnpj');
          }
          if ('validate_nome_pessoa' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nome_pessoa');
          }
          if ('validate_razao_social' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'razao_social');
          }
          if ('validate_cep' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cep');
          }
          if ('validate_endereco' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'endereco');
          }
          if ('validate_num' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'num');
          }
          if ('validate_complemento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'complemento');
          }
          if ('validate_bairro' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'bairro');
          }
          if ('validate_cidade' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cidade');
          }
          if ('validate_uf' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'uf');
          }
          if ('validate_telefone' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'telefone');
          }
          if ('validate_celular' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'celular');
          }
          if ('validate_email' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'email');
          }
          if ('validate_site' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'site');
          }
          if ('validate_ie' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ie');
          }
          if ('validate_observacao' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'observacao');
          }
          if ('validate_login' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'login');
          }
          form_pessoa_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          if ('event_cnpj_onchange' == $this->NM_ajax_opcao)
          {
              $this->cnpj_onChange();
          }
          form_pessoa_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_pessoa_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          $this->nm_gera_html();
          $this->NM_close_db(); 
          $this->nmgp_opcao = ""; 
          exit; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_pessoa']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_pessoa_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, 4);
              $this->Campos_Mens_erro = ""; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $campos_erro, '', true, true); 
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir" && $nm_apl_dependente == 1) 
              { 
                  $this->nm_flag_saida_novo = "S";; 
              }
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
      elseif (isset($nm_form_submit) && 1 == $nm_form_submit && $this->nmgp_opcao != "menu_link" && $this->nmgp_opcao != "recarga_mobile")
      {
      }
//
      if ($this->nmgp_opcao != "nada")
      {
          $this->nm_acessa_banco();
      }
      else
      {
           if ($this->nmgp_opc_ant == "incluir") 
           { 
               $this->nm_proc_onload(false);
           }
           else
           { 
              $this->nm_guardar_campos();
           }
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_evento == "update")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_evento == "delete")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_pessoa_pack_ajax_response();
          exit;
      }
      $this->nm_formatar_campos();
      if ($this->NM_ajax_flag)
      {
          $this->NM_ajax_info['result'] = 'OK';
          if ('alterar' == $this->NM_ajax_info['param']['nmgp_opcao'])
          {
              $this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmu']);
          }
          form_pessoa_pack_ajax_response();
          exit;
      }
      $this->nm_gera_html();
      $this->NM_close_db(); 
      $this->nmgp_opcao = ""; 
      if ($this->Change_Menu)
      {
          $apl_menu  = $_SESSION['scriptcase']['menu_atual'];
          $Arr_rastro = array();
          if (isset($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) && count($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) > 1)
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu] as $menu => $apls)
              {
                 $Arr_rastro[] = "'<a href=\"" . $apls['link'] . "?script_case_init=" . $this->sc_init_menu . "\" target=\"#NMIframe#\">" . $apls['label'] . "</a>'";
              }
              $ult_apl = count($Arr_rastro) - 1;
              unset($Arr_rastro[$ult_apl]);
              $rastro = implode(",", $Arr_rastro);
?>
  <script type="text/javascript">
     link_atual = new Array (<?php echo $rastro ?>);
     parent.writeFastMenu(link_atual);
  </script>
<?php
          }
          else
          {
?>
  <script type="text/javascript">
     parent.clearFastMenu();
  </script>
<?php
          }
      }
   }
  function html_export_print($nm_arquivo_html, $nmgp_password)
  {
      $Html_password = "";
          $Arq_base  = $this->Ini->root . $this->Ini->path_imag_temp . $nm_arquivo_html;
          $Parm_pass = ($Html_password != "") ? " -p" : "";
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_pessoa.zip";
          $Arq_htm = $this->Ini->path_imag_temp . "/" . $Zip_name;
          $Arq_zip = $this->Ini->root . $Arq_htm;
          $Zip_f     = (FALSE !== strpos($Arq_zip, ' ')) ? " \"" . $Arq_zip . "\"" :  $Arq_zip;
          $Arq_input = (FALSE !== strpos($Arq_base, ' ')) ? " \"" . $Arq_base . "\"" :  $Arq_base;
           if (is_file($Arq_zip)) {
               unlink($Arq_zip);
           }
           $str_zip = "";
           if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
           {
               chdir($this->Ini->path_third . "/zip/windows");
               $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j " . $Html_password . " " . $Zip_f . " " . $Arq_input;
           }
           elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
           {
                if (FALSE !== strpos(strtolower(php_uname()), 'i686')) 
                {
                    chdir($this->Ini->path_third . "/zip/linux-i386/bin");
                }
                else
                {
                    chdir($this->Ini->path_third . "/zip/linux-amd64/bin");
                }
               $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $Arq_input;
           }
           elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
           {
               chdir($this->Ini->path_third . "/zip/mac/bin");
               $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $Arq_input;
           }
           if (!empty($str_zip)) {
               exec($str_zip);
           }
           // ----- ZIP log
           $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'w');
           if ($fp)
           {
               @fwrite($fp, $str_zip . "\r\n\r\n");
               @fclose($fp);
           }
           foreach ($this->Ini->Img_export_zip as $cada_img_zip)
           {
               $str_zip      = "";
              $cada_img_zip = '"' . $cada_img_zip . '"';
               if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
               {
                   $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j -u " . $Html_password . " " . $Zip_f . " " . $cada_img_zip;
               }
               elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
               {
                   $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $cada_img_zip;
               }
               elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
               {
                   $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $cada_img_zip;
               }
               if (!empty($str_zip)) {
                   exec($str_zip);
               }
               // ----- ZIP log
               $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'a');
               if ($fp)
               {
                   @fwrite($fp, $str_zip . "\r\n\r\n");
                   @fclose($fp);
               }
           }
           if (is_file($Arq_zip)) {
               unlink($Arq_base);
           } 
          $path_doc_md5 = md5($Arq_htm);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("Pessoa") ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" /> 
  <link rel="shortcut icon" href="../_lib/img/grp__NM__bg__NM__cropped-Logo-SRC-32x32.png">
</HEAD>
<BODY class="scExportPage">
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: top">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">PRINT</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
   <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

   <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

   <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo  $this->form_encode_input($Arq_htm) ?>" target="_self" style="display: none"> 
</form>
<form name="Fdown" method="get" action="form_pessoa_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_pessoa"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="./" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nmgp_opcao" value="<?php echo $this->nmgp_opcao ?>"> 
</form> 
         </BODY>
         </HTML>
<?php
          exit;
  }
//
//--------------------------------------------------------------------------------------
   function NM_has_trans()
   {
       return !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access);
   }
//
//--------------------------------------------------------------------------------------
   function NM_commit_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->CommitTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_rollback_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->RollbackTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_close_db()
   {
       if ($this->Db && !$this->Embutida_proc)
       { 
           $this->Db->Close(); 
       } 
   }
//
//--------------------------------------------------------------------------------------
   function Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, $mode = 3) 
   {
       switch ($mode)
       {
           case 1:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 2:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta, true);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 3:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;

           case 4:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros_SweetAlert($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;
       }
   }

   function Formata_Campos_Falta($Campos_Falta, $table = false) 
   {
       $Campos_Falta = array_unique($Campos_Falta);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_reqd'] . ' ' . implode('; ', $Campos_Falta);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Falta);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Falta as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_reqd'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Crit($Campos_Crit, $table = false) 
   {
       $Campos_Crit = array_unique($Campos_Crit);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . implode('; ', $Campos_Crit);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Crit);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Crit as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_flds'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros($Campos_Erros) 
   {
       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= '<tr>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Recupera_Nome_Campo($campo) . ':</td>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', array_unique($erros)) . '</td>';
           $sError .= '</tr>';
       }

       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros_SweetAlert($Campos_Erros) 
   {
       $sError  = '';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= $this->Recupera_Nome_Campo($campo) . ': ' . implode('<br />', array_unique($erros)) . '<br />';
       }

       return $sError;
   }

   function Recupera_Nome_Campo($campo) 
   {
       switch($campo)
       {
           case 'id_pessoa':
               return "#";
               break;
           case 'cnpj':
               return "CNPJ";
               break;
           case 'nome_pessoa':
               return "Nome";
               break;
           case 'razao_social':
               return "Razão Social";
               break;
           case 'cep':
               return "CEP";
               break;
           case 'endereco':
               return "Endereço";
               break;
           case 'num':
               return "Num";
               break;
           case 'complemento':
               return "Complemento";
               break;
           case 'bairro':
               return "Bairro";
               break;
           case 'cidade':
               return "Cidade";
               break;
           case 'uf':
               return "UF";
               break;
           case 'telefone':
               return "Telefone";
               break;
           case 'celular':
               return "Celular";
               break;
           case 'email':
               return "Email";
               break;
           case 'site':
               return "Site";
               break;
           case 'ie':
               return "IE";
               break;
           case 'observacao':
               return "Observação";
               break;
           case 'login':
               return "Login na Plataforma";
               break;
           case 'tipo_pessoa':
               return "Tipo Pessoa";
               break;
           case 'cpf':
               return "Cpf";
               break;
           case 'ibge':
               return "Ibge";
               break;
           case 'status':
               return "Status";
               break;
           case 'insert_user':
               return "Insert User";
               break;
           case 'insert_data':
               return "Insert Data";
               break;
           case 'update_user':
               return "Update User";
               break;
           case 'update_data':
               return "Update Data";
               break;
           case 'flag_produtor':
               return "Flag Produtor";
               break;
           case 'flag_representante':
               return "Flag Representante";
               break;
           case 'flag_cliente':
               return "Flag Cliente";
               break;
           case 'flag_transportadora':
               return "Flag Transportadora";
               break;
       }

       return $campo;
   }

   function dateDefaultFormat()
   {
       if (isset($this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']))
       {
           $sDate = str_replace('yyyy', 'Y', $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']);
           $sDate = str_replace('mm',   'm', $sDate);
           $sDate = str_replace('dd',   'd', $sDate);
           return substr(chunk_split($sDate, 1, $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_sep']), 0, -1);
       }
       elseif ('en_us' == $this->Ini->str_lang)
       {
           return 'm/d/Y';
       }
       else
       {
           return 'd/m/Y';
       }
   } // dateDefaultFormat

//
//--------------------------------------------------------------------------------------
   function Valida_campos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser, $teste_validade;
     if (is_array($filtro) && empty($filtro)) {
         $filtro = '';
     }
//---------------------------------------------------------
     $this->sc_force_zero = array();

     if (!is_array($filtro) && '' == $filtro && isset($this->nm_form_submit) && '1' == $this->nm_form_submit && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_pessoa']) || !is_array($this->NM_ajax_info['errList']['geral_form_pessoa']))
              {
                  $this->NM_ajax_info['errList']['geral_form_pessoa'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_pessoa'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'id_pessoa' == $filtro)) || (is_array($filtro) && in_array('id_pessoa', $filtro)))
        $this->ValidateField_id_pessoa($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'cnpj' == $filtro)) || (is_array($filtro) && in_array('cnpj', $filtro)))
        $this->ValidateField_cnpj($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nome_pessoa' == $filtro)) || (is_array($filtro) && in_array('nome_pessoa', $filtro)))
        $this->ValidateField_nome_pessoa($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'razao_social' == $filtro)) || (is_array($filtro) && in_array('razao_social', $filtro)))
        $this->ValidateField_razao_social($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'cep' == $filtro)) || (is_array($filtro) && in_array('cep', $filtro)))
        $this->ValidateField_cep($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'endereco' == $filtro)) || (is_array($filtro) && in_array('endereco', $filtro)))
        $this->ValidateField_endereco($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'num' == $filtro)) || (is_array($filtro) && in_array('num', $filtro)))
        $this->ValidateField_num($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'complemento' == $filtro)) || (is_array($filtro) && in_array('complemento', $filtro)))
        $this->ValidateField_complemento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'bairro' == $filtro)) || (is_array($filtro) && in_array('bairro', $filtro)))
        $this->ValidateField_bairro($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'cidade' == $filtro)) || (is_array($filtro) && in_array('cidade', $filtro)))
        $this->ValidateField_cidade($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'uf' == $filtro)) || (is_array($filtro) && in_array('uf', $filtro)))
        $this->ValidateField_uf($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'telefone' == $filtro)) || (is_array($filtro) && in_array('telefone', $filtro)))
        $this->ValidateField_telefone($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'celular' == $filtro)) || (is_array($filtro) && in_array('celular', $filtro)))
        $this->ValidateField_celular($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'email' == $filtro)) || (is_array($filtro) && in_array('email', $filtro)))
        $this->ValidateField_email($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'site' == $filtro)) || (is_array($filtro) && in_array('site', $filtro)))
        $this->ValidateField_site($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'ie' == $filtro)) || (is_array($filtro) && in_array('ie', $filtro)))
        $this->ValidateField_ie($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'observacao' == $filtro)) || (is_array($filtro) && in_array('observacao', $filtro)))
        $this->ValidateField_observacao($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'login' == $filtro)) || (is_array($filtro) && in_array('login', $filtro)))
        $this->ValidateField_login($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!empty($this->sc_force_zero))
          {
              foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
              {
                  eval('$this->' . $sc_force_zero_field . ' = "";');
                  unset($this->sc_force_zero[$i_force_zero]);
              }
          }
      }
   }

    function ValidateField_id_pessoa(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['id_pessoa'])) {
          nm_limpa_numero($this->id_pessoa, $this->field_config['id_pessoa']['symbol_grp']) ; 
          return;
      }
      if ($this->id_pessoa === "" || is_null($this->id_pessoa))  
      { 
          $this->id_pessoa = 0;
      } 
      nm_limpa_numero($this->id_pessoa, $this->field_config['id_pessoa']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->id_pessoa != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->id_pessoa) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "#: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['id_pessoa']))
                  {
                      $Campos_Erros['id_pessoa'] = array();
                  }
                  $Campos_Erros['id_pessoa'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['id_pessoa']) || !is_array($this->NM_ajax_info['errList']['id_pessoa']))
                  {
                      $this->NM_ajax_info['errList']['id_pessoa'] = array();
                  }
                  $this->NM_ajax_info['errList']['id_pessoa'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->id_pessoa, 9, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "#; " ; 
                  if (!isset($Campos_Erros['id_pessoa']))
                  {
                      $Campos_Erros['id_pessoa'] = array();
                  }
                  $Campos_Erros['id_pessoa'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['id_pessoa']) || !is_array($this->NM_ajax_info['errList']['id_pessoa']))
                  {
                      $this->NM_ajax_info['errList']['id_pessoa'] = array();
                  }
                  $this->NM_ajax_info['errList']['id_pessoa'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_pessoa';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_pessoa

    function ValidateField_cnpj(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_ciccnpj($this->cnpj) ; 
      if (isset($this->Field_no_validate['cnpj'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->cnpj) != "")  
          { 
              if ($teste_validade->CNPJ($this->cnpj) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "CNPJ; " ; 
                  if (!isset($Campos_Erros['cnpj']))
                  {
                      $Campos_Erros['cnpj'] = array();
                  }
                  $Campos_Erros['cnpj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['cnpj']) || !is_array($this->NM_ajax_info['errList']['cnpj']))
                  {
                      $this->NM_ajax_info['errList']['cnpj'] = array();
                  }
                  $this->NM_ajax_info['errList']['cnpj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
           } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'cnpj';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_cnpj

    function ValidateField_nome_pessoa(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nome_pessoa'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nome_pessoa) > 80) 
          { 
              $hasError = true;
              $Campos_Crit .= "Nome " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nome_pessoa']))
              {
                  $Campos_Erros['nome_pessoa'] = array();
              }
              $Campos_Erros['nome_pessoa'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nome_pessoa']) || !is_array($this->NM_ajax_info['errList']['nome_pessoa']))
              {
                  $this->NM_ajax_info['errList']['nome_pessoa'] = array();
              }
              $this->NM_ajax_info['errList']['nome_pessoa'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nome_pessoa';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nome_pessoa

    function ValidateField_razao_social(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['razao_social'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->razao_social) > 80) 
          { 
              $hasError = true;
              $Campos_Crit .= "Razão Social " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['razao_social']))
              {
                  $Campos_Erros['razao_social'] = array();
              }
              $Campos_Erros['razao_social'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['razao_social']) || !is_array($this->NM_ajax_info['errList']['razao_social']))
              {
                  $this->NM_ajax_info['errList']['razao_social'] = array();
              }
              $this->NM_ajax_info['errList']['razao_social'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'razao_social';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_razao_social

    function ValidateField_cep(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_cep($this->cep) ; 
      if (isset($this->Field_no_validate['cep'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->cep) != "")  
          { 
              if (strlen($this->cep) != 8  || (int)$this->cep == 0)
              { 
                  $hasError = true;
                  $Campos_Crit .= "CEP; " ; 
                  if (!isset($Campos_Erros['cep']))
                  {
                      $Campos_Erros['cep'] = array();
                  }
                  $Campos_Erros['cep'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['cep']) || !is_array($this->NM_ajax_info['errList']['cep']))
                  {
                      $this->NM_ajax_info['errList']['cep'] = array();
                  }
                  $this->NM_ajax_info['errList']['cep'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'cep';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_cep

    function ValidateField_endereco(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['endereco'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->endereco) > 128) 
          { 
              $hasError = true;
              $Campos_Crit .= "Endereço " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 128 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['endereco']))
              {
                  $Campos_Erros['endereco'] = array();
              }
              $Campos_Erros['endereco'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 128 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['endereco']) || !is_array($this->NM_ajax_info['errList']['endereco']))
              {
                  $this->NM_ajax_info['errList']['endereco'] = array();
              }
              $this->NM_ajax_info['errList']['endereco'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 128 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'endereco';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_endereco

    function ValidateField_num(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['num'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->num) > 30) 
          { 
              $hasError = true;
              $Campos_Crit .= "Num " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['num']))
              {
                  $Campos_Erros['num'] = array();
              }
              $Campos_Erros['num'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['num']) || !is_array($this->NM_ajax_info['errList']['num']))
              {
                  $this->NM_ajax_info['errList']['num'] = array();
              }
              $this->NM_ajax_info['errList']['num'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'num';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_num

    function ValidateField_complemento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['complemento'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->complemento) > 80) 
          { 
              $hasError = true;
              $Campos_Crit .= "Complemento " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['complemento']))
              {
                  $Campos_Erros['complemento'] = array();
              }
              $Campos_Erros['complemento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['complemento']) || !is_array($this->NM_ajax_info['errList']['complemento']))
              {
                  $this->NM_ajax_info['errList']['complemento'] = array();
              }
              $this->NM_ajax_info['errList']['complemento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'complemento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_complemento

    function ValidateField_bairro(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['bairro'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->bairro) > 30) 
          { 
              $hasError = true;
              $Campos_Crit .= "Bairro " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['bairro']))
              {
                  $Campos_Erros['bairro'] = array();
              }
              $Campos_Erros['bairro'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['bairro']) || !is_array($this->NM_ajax_info['errList']['bairro']))
              {
                  $this->NM_ajax_info['errList']['bairro'] = array();
              }
              $this->NM_ajax_info['errList']['bairro'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'bairro';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_bairro

    function ValidateField_cidade(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['cidade'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cidade) > 30) 
          { 
              $hasError = true;
              $Campos_Crit .= "Cidade " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cidade']))
              {
                  $Campos_Erros['cidade'] = array();
              }
              $Campos_Erros['cidade'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cidade']) || !is_array($this->NM_ajax_info['errList']['cidade']))
              {
                  $this->NM_ajax_info['errList']['cidade'] = array();
              }
              $this->NM_ajax_info['errList']['cidade'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'cidade';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_cidade

    function ValidateField_uf(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['uf'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->uf) > 30) 
          { 
              $hasError = true;
              $Campos_Crit .= "UF " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['uf']))
              {
                  $Campos_Erros['uf'] = array();
              }
              $Campos_Erros['uf'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['uf']) || !is_array($this->NM_ajax_info['errList']['uf']))
              {
                  $this->NM_ajax_info['errList']['uf'] = array();
              }
              $this->NM_ajax_info['errList']['uf'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'uf';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_uf

    function ValidateField_telefone(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['telefone'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->telefone) > 30) 
          { 
              $hasError = true;
              $Campos_Crit .= "Telefone " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['telefone']))
              {
                  $Campos_Erros['telefone'] = array();
              }
              $Campos_Erros['telefone'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['telefone']) || !is_array($this->NM_ajax_info['errList']['telefone']))
              {
                  $this->NM_ajax_info['errList']['telefone'] = array();
              }
              $this->NM_ajax_info['errList']['telefone'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'telefone';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_telefone

    function ValidateField_celular(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['celular'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->celular) > 30) 
          { 
              $hasError = true;
              $Campos_Crit .= "Celular " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['celular']))
              {
                  $Campos_Erros['celular'] = array();
              }
              $Campos_Erros['celular'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['celular']) || !is_array($this->NM_ajax_info['errList']['celular']))
              {
                  $this->NM_ajax_info['errList']['celular'] = array();
              }
              $this->NM_ajax_info['errList']['celular'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'celular';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_celular

    function ValidateField_email(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['email'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->email) > 128) 
          { 
              $hasError = true;
              $Campos_Crit .= "Email " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 128 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['email']))
              {
                  $Campos_Erros['email'] = array();
              }
              $Campos_Erros['email'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 128 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['email']) || !is_array($this->NM_ajax_info['errList']['email']))
              {
                  $this->NM_ajax_info['errList']['email'] = array();
              }
              $this->NM_ajax_info['errList']['email'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 128 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'email';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_email

    function ValidateField_site(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['site'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->site) > 80) 
          { 
              $hasError = true;
              $Campos_Crit .= "Site " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['site']))
              {
                  $Campos_Erros['site'] = array();
              }
              $Campos_Erros['site'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['site']) || !is_array($this->NM_ajax_info['errList']['site']))
              {
                  $this->NM_ajax_info['errList']['site'] = array();
              }
              $this->NM_ajax_info['errList']['site'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'site';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_site

    function ValidateField_ie(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['ie'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->ie) > 30) 
          { 
              $hasError = true;
              $Campos_Crit .= "IE " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['ie']))
              {
                  $Campos_Erros['ie'] = array();
              }
              $Campos_Erros['ie'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['ie']) || !is_array($this->NM_ajax_info['errList']['ie']))
              {
                  $this->NM_ajax_info['errList']['ie'] = array();
              }
              $this->NM_ajax_info['errList']['ie'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'ie';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_ie

    function ValidateField_observacao(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['observacao'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->observacao) > 255) 
          { 
              $hasError = true;
              $Campos_Crit .= "Observação " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['observacao']))
              {
                  $Campos_Erros['observacao'] = array();
              }
              $Campos_Erros['observacao'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['observacao']) || !is_array($this->NM_ajax_info['errList']['observacao']))
              {
                  $this->NM_ajax_info['errList']['observacao'] = array();
              }
              $this->NM_ajax_info['errList']['observacao'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'observacao';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_observacao

    function ValidateField_login(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['login'])) {
       return;
   }
               if (!empty($this->login) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Lookup_login']) && !in_array($this->login, $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Lookup_login']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['login']))
                   {
                       $Campos_Erros['login'] = array();
                   }
                   $Campos_Erros['login'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['login']) || !is_array($this->NM_ajax_info['errList']['login']))
                   {
                       $this->NM_ajax_info['errList']['login'] = array();
                   }
                   $this->NM_ajax_info['errList']['login'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'login';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_login

    function removeDuplicateDttmError($aErrDate, &$aErrTime)
    {
        if (empty($aErrDate) || empty($aErrTime))
        {
            return;
        }

        foreach ($aErrDate as $sErrDate)
        {
            foreach ($aErrTime as $iErrTime => $sErrTime)
            {
                if ($sErrDate == $sErrTime)
                {
                    unset($aErrTime[$iErrTime]);
                }
            }
        }
    } // removeDuplicateDttmError

   function nm_guardar_campos()
   {
    global
           $sc_seq_vert;
    $this->nmgp_dados_form['id_pessoa'] = $this->id_pessoa;
    $this->nmgp_dados_form['cnpj'] = $this->cnpj;
    $this->nmgp_dados_form['nome_pessoa'] = $this->nome_pessoa;
    $this->nmgp_dados_form['razao_social'] = $this->razao_social;
    $this->nmgp_dados_form['cep'] = $this->cep;
    $this->nmgp_dados_form['endereco'] = $this->endereco;
    $this->nmgp_dados_form['num'] = $this->num;
    $this->nmgp_dados_form['complemento'] = $this->complemento;
    $this->nmgp_dados_form['bairro'] = $this->bairro;
    $this->nmgp_dados_form['cidade'] = $this->cidade;
    $this->nmgp_dados_form['uf'] = $this->uf;
    $this->nmgp_dados_form['telefone'] = $this->telefone;
    $this->nmgp_dados_form['celular'] = $this->celular;
    $this->nmgp_dados_form['email'] = $this->email;
    $this->nmgp_dados_form['site'] = $this->site;
    $this->nmgp_dados_form['ie'] = $this->ie;
    $this->nmgp_dados_form['observacao'] = $this->observacao;
    $this->nmgp_dados_form['login'] = $this->login;
    $this->nmgp_dados_form['tipo_pessoa'] = $this->tipo_pessoa;
    $this->nmgp_dados_form['cpf'] = $this->cpf;
    $this->nmgp_dados_form['ibge'] = $this->ibge;
    $this->nmgp_dados_form['status'] = $this->status;
    $this->nmgp_dados_form['insert_user'] = $this->insert_user;
    $this->nmgp_dados_form['insert_data'] = $this->insert_data;
    $this->nmgp_dados_form['update_user'] = $this->update_user;
    $this->nmgp_dados_form['update_data'] = $this->update_data;
    $this->nmgp_dados_form['flag_produtor'] = $this->flag_produtor;
    $this->nmgp_dados_form['flag_representante'] = $this->flag_representante;
    $this->nmgp_dados_form['flag_cliente'] = $this->flag_cliente;
    $this->nmgp_dados_form['flag_transportadora'] = $this->flag_transportadora;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['id_pessoa'] = $this->id_pessoa;
      nm_limpa_numero($this->id_pessoa, $this->field_config['id_pessoa']['symbol_grp']) ; 
      $this->Before_unformat['cnpj'] = $this->cnpj;
      nm_limpa_ciccnpj($this->cnpj) ; 
      $this->Before_unformat['cep'] = $this->cep;
      nm_limpa_cep($this->cep) ; 
      $this->Before_unformat['insert_data'] = $this->insert_data;
      $this->Before_unformat['insert_data_hora'] = $this->insert_data_hora;
      nm_limpa_data($this->insert_data, $this->field_config['insert_data']['date_sep']) ; 
      nm_limpa_hora($this->insert_data_hora, $this->field_config['insert_data']['time_sep']) ; 
      $this->Before_unformat['update_data'] = $this->update_data;
      $this->Before_unformat['update_data_hora'] = $this->update_data_hora;
      nm_limpa_data($this->update_data, $this->field_config['update_data']['date_sep']) ; 
      nm_limpa_hora($this->update_data_hora, $this->field_config['update_data']['time_sep']) ; 
   }
   function sc_add_currency(&$value, $symbol, $pos)
   {
       if ('' == $value)
       {
           return;
       }
       $value = (1 == $pos || 3 == $pos) ? $symbol . ' ' . $value : $value . ' ' . $symbol;
   }
   function sc_remove_currency(&$value, $symbol_dec, $symbol_tho, $symbol_mon)
   {
       $value = preg_replace('~&#x0*([0-9a-f]+);~i', '', $value);
       $sNew  = str_replace($symbol_mon, '', $value);
       if ($sNew != $value)
       {
           $value = str_replace(' ', '', $sNew);
           return;
       }
       $aTest = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', $symbol_dec, $symbol_tho);
       $sNew  = '';
       for ($i = 0; $i < strlen($value); $i++)
       {
           if ($this->sc_test_currency_char($value[$i], $aTest))
           {
               $sNew .= $value[$i];
           }
       }
       $value = $sNew;
   }
   function sc_test_currency_char($char, $test)
   {
       $found = false;
       foreach ($test as $test_char)
       {
           if ($char === $test_char)
           {
               $found = true;
           }
       }
       return $found;
   }
   function nm_clear_val($Nome_Campo)
   {
      if ($Nome_Campo == "id_pessoa")
      {
          nm_limpa_numero($this->id_pessoa, $this->field_config['id_pessoa']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "cnpj")
      {
          nm_limpa_ciccnpj($this->cnpj) ; 
      }
      if ($Nome_Campo == "cep")
      {
          nm_limpa_cep($this->cep) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
     if (isset($this->formatado) && $this->formatado)
     {
         return;
     }
     $this->formatado = true;
      if ('' !== $this->id_pessoa || (!empty($format_fields) && isset($format_fields['id_pessoa'])))
      {
          nmgp_Form_Num_Val($this->id_pessoa, $this->field_config['id_pessoa']['symbol_grp'], $this->field_config['id_pessoa']['symbol_dec'], "0", "S", $this->field_config['id_pessoa']['format_neg'], "", "", "-", $this->field_config['id_pessoa']['symbol_fmt']) ; 
      }
      if (!empty($this->cnpj) || (!empty($format_fields) && isset($format_fields['cnpj'])))
      {
          nmgp_Form_CicCnpj($this->cnpj) ; 
      }
      if (!empty($this->cep) || (!empty($format_fields) && isset($format_fields['cep'])))
      {
          nmgp_Form_Cep($this->cep) ; 
      }
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $new_campo = '';
          $a_mask_ord  = array();
          $i_mask_size = -1;

          foreach (explode(';', $nm_mask) as $str_mask)
          {
              $a_mask_ord[ $this->nm_conta_mask_chars($str_mask) ] = $str_mask;
          }
          ksort($a_mask_ord);

          foreach ($a_mask_ord as $i_size => $s_mask)
          {
              if (-1 == $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
              elseif (strlen($nm_campo) >= $i_size && strlen($nm_campo) > $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
          }
          $nm_mask = $a_mask_ord[$i_mask_size];

          for ($i = 0; $i < strlen($nm_mask); $i++)
          {
              $test_mask = substr($nm_mask, $i, 1);
              
              if ('9' == $test_mask || 'a' == $test_mask || '*' == $test_mask)
              {
                  $new_campo .= substr($nm_campo, 0, 1);
                  $nm_campo   = substr($nm_campo, 1);
              }
              else
              {
                  $new_campo .= $test_mask;
              }
          }

                  $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($cont1 < $cont2 && $tam_campo <= $cont2 && $tam_campo > $cont1)
              {
                  $trab_mask = $ver_duas[1];
              }
              elseif ($cont1 > $cont2 && $tam_campo <= $cont2)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $trab_saida;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $trab_saida;
   } 
   function nm_conta_mask_chars($sMask)
   {
       $iLength = 0;

       for ($i = 0; $i < strlen($sMask); $i++)
       {
           if (in_array($sMask[$i], array('9', 'a', '*')))
           {
               $iLength++;
           }
       }

       return $iLength;
   }
   function nm_tira_mask(&$nm_campo, $nm_mask, $nm_chars = '')
   { 
      $mask_dados = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $tam_mask   = strlen($nm_mask);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $raw_campo = $this->sc_clear_mask($nm_campo, $nm_chars);
          $raw_mask  = $this->sc_clear_mask($nm_mask, $nm_chars);
          $new_campo = '';

          $test_mask = substr($raw_mask, 0, 1);
          $raw_mask  = substr($raw_mask, 1);

          while ('' != $raw_campo)
          {
              $test_val  = substr($raw_campo, 0, 1);
              $raw_campo = substr($raw_campo, 1);
              $ord       = ord($test_val);
              $found     = false;

              switch ($test_mask)
              {
                  case '9':
                      if (48 <= $ord && 57 >= $ord)
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case 'a':
                      if ((65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case '*':
                      if ((48 <= $ord && 57 >= $ord) || (65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;
              }

              if ($found)
              {
                  $test_mask = substr($raw_mask, 0, 1);
                  $raw_mask  = substr($raw_mask, 1);
              }
          }

          $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          for ($x=0; $x < strlen($mask_dados); $x++)
          {
              if (is_numeric(substr($mask_dados, $x, 1)))
              {
                  $trab_saida .= substr($mask_dados, $x, 1);
              }
          }
          $nm_campo = $trab_saida;
          return;
      }
      if ($tam_mask > $tam_campo)
      {
         $mask_desfaz = "";
         for ($mask_ind = 0; $tam_mask > $tam_campo; $mask_ind++)
         {
              $mask_char = substr($trab_mask, $mask_ind, 1);
              if ($mask_char == "z")
              {
                  $tam_mask--;
              }
              else
              {
                  $mask_desfaz .= $mask_char;
              }
              if ($mask_ind == $tam_campo)
              {
                  $tam_mask = $tam_campo;
              }
         }
         $trab_mask = $mask_desfaz . substr($trab_mask, $mask_ind);
      }
      $mask_saida = "";
      for ($mask_ind = strlen($trab_mask); $mask_ind > 0; $mask_ind--)
      {
          $mask_char = substr($trab_mask, $mask_ind - 1, 1);
          if ($mask_char == "x" || $mask_char == "z")
          {
              if ($tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
              }
          }
          else
          {
              if ($mask_char != substr($mask_dados, $tam_campo - 1, 1) && $tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
                  $mask_ind--;
              }
          }
          $tam_campo--;
      }
      if ($tam_campo > 0)
      {
         $mask_saida = substr($mask_dados, 0, $tam_campo) . $mask_saida;
      }
      $nm_campo = $mask_saida;
   }

   function sc_clear_mask($value, $chars)
   {
       $new = '';

       for ($i = 0; $i < strlen($value); $i++)
       {
           if (false === strpos($chars, $value[$i]))
           {
               $new .= $value[$i];
           }
       }

       return $new;
   }
//
   function nm_limpa_alfa(&$str)
   {
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out, $replaces = array())
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT") {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT") {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "SC_FORMAT_REGION") {
           $this->nm_data->SetaData($dt_in, strtoupper($form_in));
           $prep_out  = (strpos(strtolower($form_in), "dd") !== false) ? "dd" : "";
           $prep_out .= (strpos(strtolower($form_in), "mm") !== false) ? "mm" : "";
           $prep_out .= (strpos(strtolower($form_in), "aa") !== false) ? "aaaa" : "";
           $prep_out .= (strpos(strtolower($form_in), "yy") !== false) ? "aaaa" : "";
           return $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", $prep_out));
       }
       else {
           nm_conv_form_data($dt_out, $form_in, $form_out, $replaces);
           return $dt_out;
       }
   }

   function returnWhere($aCond, $sOp = 'AND')
   {
       $aWhere = array();
       foreach ($aCond as $sCond)
       {
           $this->handleWhereCond($sCond);
           if ('' != $sCond)
           {
               $aWhere[] = $sCond;
           }
       }
       if (empty($aWhere))
       {
           return '';
       }
       else
       {
           return ' WHERE (' . implode(') ' . $sOp . ' (', $aWhere) . ')';
       }
   } // returnWhere

   function handleWhereCond(&$sCond)
   {
       $sCond = trim($sCond);
       if ('where' == strtolower(substr($sCond, 0, 5)))
       {
           $sCond = trim(substr($sCond, 5));
       }
   } // handleWhereCond

   function ajax_return_values()
   {
          $this->ajax_return_values_id_pessoa();
          $this->ajax_return_values_cnpj();
          $this->ajax_return_values_nome_pessoa();
          $this->ajax_return_values_razao_social();
          $this->ajax_return_values_cep();
          $this->ajax_return_values_endereco();
          $this->ajax_return_values_num();
          $this->ajax_return_values_complemento();
          $this->ajax_return_values_bairro();
          $this->ajax_return_values_cidade();
          $this->ajax_return_values_uf();
          $this->ajax_return_values_telefone();
          $this->ajax_return_values_celular();
          $this->ajax_return_values_email();
          $this->ajax_return_values_site();
          $this->ajax_return_values_ie();
          $this->ajax_return_values_observacao();
          $this->ajax_return_values_login();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['id_pessoa']['keyVal'] = form_pessoa_pack_protect_string($this->nmgp_dados_form['id_pessoa']);
          }
   } // ajax_return_values

          //----- id_pessoa
   function ajax_return_values_id_pessoa($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_pessoa", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_pessoa);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['id_pessoa'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
               'labList' => array($this->form_format_readonly("id_pessoa", $this->form_encode_input($sTmpValue))),
              );
          }
   }

          //----- cnpj
   function ajax_return_values_cnpj($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cnpj", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cnpj);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cnpj'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nome_pessoa
   function ajax_return_values_nome_pessoa($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nome_pessoa", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nome_pessoa);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nome_pessoa'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- razao_social
   function ajax_return_values_razao_social($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("razao_social", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->razao_social);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['razao_social'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cep
   function ajax_return_values_cep($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cep", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cep);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cep'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- endereco
   function ajax_return_values_endereco($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("endereco", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->endereco);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['endereco'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- num
   function ajax_return_values_num($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("num", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->num);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['num'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- complemento
   function ajax_return_values_complemento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("complemento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->complemento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['complemento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- bairro
   function ajax_return_values_bairro($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("bairro", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->bairro);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['bairro'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cidade
   function ajax_return_values_cidade($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cidade", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cidade);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cidade'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- uf
   function ajax_return_values_uf($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("uf", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->uf);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['uf'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- telefone
   function ajax_return_values_telefone($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("telefone", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->telefone);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['telefone'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- celular
   function ajax_return_values_celular($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("celular", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->celular);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['celular'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- email
   function ajax_return_values_email($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("email", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->email);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['email'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- site
   function ajax_return_values_site($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("site", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->site);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['site'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- ie
   function ajax_return_values_ie($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ie", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->ie);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['ie'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- observacao
   function ajax_return_values_observacao($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("observacao", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->observacao);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['observacao'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- login
   function ajax_return_values_login($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("login", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->login);
              $aLookup = array();
              $this->_tmp_lookup_login = $this->login;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Lookup_login']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Lookup_login'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Lookup_login']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Lookup_login'] = array(); 
}
$aLookup[] = array(form_pessoa_pack_protect_string('') => str_replace('<', '&lt;',form_pessoa_pack_protect_string('Selecione...')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Lookup_login'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_pessoa_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_pessoa_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"login\"";
          if (isset($this->NM_ajax_info['select_html']['login']) && !empty($this->NM_ajax_info['select_html']['login']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['login']);
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->login == $sValue)
                  {
                      $this->_tmp_lookup_login = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['login'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['login']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['login']['valList'][$i] = form_pessoa_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['login']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['login']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['login']['labList'] = $aLabel;
          }
   }

    function fetchUniqueUploadName($originalName, $uploadDir, $fieldName)
    {
        $originalName = trim($originalName);
        if ('' == $originalName)
        {
            return $originalName;
        }
        if (!@is_dir($uploadDir))
        {
            return $originalName;
        }
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['upload_dir'][$fieldName][] = $newName;
            return $newName;
        }
    } // fetchUniqueUploadName

    function fetchFileNextName($uniqueName, $uniqueList)
    {
        $aPathinfo     = pathinfo($uniqueName);
        $fileExtension = $aPathinfo['extension'];
        $fileName      = $aPathinfo['filename'];
        $foundName     = false;
        $nameIt        = 1;
        if ('' != $fileExtension)
        {
            $fileExtension = '.' . $fileExtension;
        }
        while (!$foundName)
        {
            $testName = $fileName . '(' . $nameIt . ')' . $fileExtension;
            if (in_array($testName, $uniqueList))
            {
                $nameIt++;
            }
            else
            {
                $foundName = true;
                return $testName;
            }
        }
    } // fetchFileNextName

   function ajax_add_parameters()
   {
   } // ajax_add_parameters
  function nm_proc_onload($bFormat = true)
  {
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['Field_no_validate'] = array();
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//----------- 

   function controle_navegacao()
   {
      global $sc_where;

          if (false && !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['total']))
          {
               $sc_where_pos = " WHERE ((id_pessoa < $this->id_pessoa))";
               if ('' != $sc_where)
               {
                   if ('where ' == strtolower(substr(trim($sc_where), 0, 6)))
                   {
                       $sc_where = substr(trim($sc_where), 6);
                   }
                   if ('and ' == strtolower(substr(trim($sc_where), 0, 4)))
                   {
                       $sc_where = substr(trim($sc_where), 4);
                   }
                   $sc_where_pos .= ' AND (' . $sc_where . ')';
                   $sc_where = ' WHERE ' . $sc_where;
               }
               $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['total'] = $rsc->fields[0];
               $rsc->Close(); 
               if ('' != $this->id_pessoa)
               {
               $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where_pos;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inicio'] = $rsc->fields[0];
               if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inicio'] < 0)
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inicio'] = 0;
               }
               $rsc->Close(); 
               }
               else
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inicio'] = 0;
               }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['qt_reg_grid'] = 1;
          if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inicio']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inicio'] = 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['final']  = 0;
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opcao'] = $this->NM_ajax_info['param']['nmgp_opcao'];
          if (in_array($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opcao'], array('incluir', 'alterar', 'excluir')))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opcao'] = '';
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opcao'] == 'inicio')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inicio'] = 0;
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opcao'] == 'retorna')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inicio'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inicio'] = 0 ;
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opcao'] == 'avanca' && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['total']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['total'] > $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['final']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['final'];
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opcao'] == 'final')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['total'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inicio'] = 0;
              }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['final'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inicio'] + $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['qt_reg_grid'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['final'];
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opcao'] = '';

   }

   function temRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       if ($rsc === false && !$rsc->EOF)
       {
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
           exit; 
       }
       $iTotal = $rsc->fields[0];
       $rsc->Close();
       return 0 < $iTotal;
   } // temRegistros

   function deletaRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'DELETE FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       $bResult = $rsc;
       $rsc->Close();
       return $bResult == true;
   } // deletaRegistros
    function handleDbErrorMessage(&$dbErrorMessage, $dbErrorCode)
    {
        if (1267 == $dbErrorCode) {
            $dbErrorMessage = $this->Ini->Nm_lang['lang_errm_db_invalid_collation'];
        }
    }


   function nm_acessa_banco() 
   { 
      global  $nm_form_submit, $teste_validade, $sc_where;
 
      $NM_val_null = array();
      $NM_val_form = array();
      $this->sc_erro_insert = "";
      $this->sc_erro_update = "";
      $this->sc_erro_delete = "";
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $salva_opcao = $this->nmgp_opcao; 
      if ($this->sc_evento != "novo" && $this->sc_evento != "incluir") 
      { 
          $this->sc_evento = ""; 
      } 
      if ((!isset($this->Ini->nm_bases_access) || !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) && !$this->Ini->sc_tem_trans_banco && in_array($this->nmgp_opcao, array('excluir', 'incluir', 'alterar')))
      { 
          $this->Ini->sc_tem_trans_banco = $this->Db->BeginTrans(); 
      } 
      $NM_val_form['id_pessoa'] = $this->id_pessoa;
      $NM_val_form['cnpj'] = $this->cnpj;
      $NM_val_form['nome_pessoa'] = $this->nome_pessoa;
      $NM_val_form['razao_social'] = $this->razao_social;
      $NM_val_form['cep'] = $this->cep;
      $NM_val_form['endereco'] = $this->endereco;
      $NM_val_form['num'] = $this->num;
      $NM_val_form['complemento'] = $this->complemento;
      $NM_val_form['bairro'] = $this->bairro;
      $NM_val_form['cidade'] = $this->cidade;
      $NM_val_form['uf'] = $this->uf;
      $NM_val_form['telefone'] = $this->telefone;
      $NM_val_form['celular'] = $this->celular;
      $NM_val_form['email'] = $this->email;
      $NM_val_form['site'] = $this->site;
      $NM_val_form['ie'] = $this->ie;
      $NM_val_form['observacao'] = $this->observacao;
      $NM_val_form['login'] = $this->login;
      $NM_val_form['tipo_pessoa'] = $this->tipo_pessoa;
      $NM_val_form['cpf'] = $this->cpf;
      $NM_val_form['ibge'] = $this->ibge;
      $NM_val_form['status'] = $this->status;
      $NM_val_form['insert_user'] = $this->insert_user;
      $NM_val_form['insert_data'] = $this->insert_data;
      $NM_val_form['update_user'] = $this->update_user;
      $NM_val_form['update_data'] = $this->update_data;
      $NM_val_form['flag_produtor'] = $this->flag_produtor;
      $NM_val_form['flag_representante'] = $this->flag_representante;
      $NM_val_form['flag_cliente'] = $this->flag_cliente;
      $NM_val_form['flag_transportadora'] = $this->flag_transportadora;
      if ($this->id_pessoa === "" || is_null($this->id_pessoa))  
      { 
          $this->id_pessoa = 0;
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite, array('pdo_ibm'), array('pdo_sqlsrv'));
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->nome_pessoa_before_qstr = $this->nome_pessoa;
          $this->nome_pessoa = substr($this->Db->qstr($this->nome_pessoa), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->nome_pessoa = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->nome_pessoa);
          }
          if ($this->nome_pessoa == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nome_pessoa = "null"; 
              $NM_val_null[] = "nome_pessoa";
          } 
          $this->razao_social_before_qstr = $this->razao_social;
          $this->razao_social = substr($this->Db->qstr($this->razao_social), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->razao_social = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->razao_social);
          }
          if ($this->razao_social == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->razao_social = "null"; 
              $NM_val_null[] = "razao_social";
          } 
          $this->tipo_pessoa_before_qstr = $this->tipo_pessoa;
          $this->tipo_pessoa = substr($this->Db->qstr($this->tipo_pessoa), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->tipo_pessoa = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->tipo_pessoa);
          }
          if ($this->tipo_pessoa == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->tipo_pessoa = "null"; 
              $NM_val_null[] = "tipo_pessoa";
          } 
          $this->cnpj_before_qstr = $this->cnpj;
          $this->cnpj = substr($this->Db->qstr($this->cnpj), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->cnpj = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->cnpj);
          }
          if ($this->cnpj == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cnpj = "null"; 
              $NM_val_null[] = "cnpj";
          } 
          $this->cpf_before_qstr = $this->cpf;
          $this->cpf = substr($this->Db->qstr($this->cpf), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->cpf = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->cpf);
          }
          if ($this->cpf == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cpf = "null"; 
              $NM_val_null[] = "cpf";
          } 
          $this->cep_before_qstr = $this->cep;
          $this->cep = substr($this->Db->qstr($this->cep), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->cep = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->cep);
          }
          if ($this->cep == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cep = "null"; 
              $NM_val_null[] = "cep";
          } 
          $this->endereco_before_qstr = $this->endereco;
          $this->endereco = substr($this->Db->qstr($this->endereco), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->endereco = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->endereco);
          }
          if ($this->endereco == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->endereco = "null"; 
              $NM_val_null[] = "endereco";
          } 
          $this->num_before_qstr = $this->num;
          $this->num = substr($this->Db->qstr($this->num), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->num = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->num);
          }
          if ($this->num == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->num = "null"; 
              $NM_val_null[] = "num";
          } 
          $this->complemento_before_qstr = $this->complemento;
          $this->complemento = substr($this->Db->qstr($this->complemento), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->complemento = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->complemento);
          }
          if ($this->complemento == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->complemento = "null"; 
              $NM_val_null[] = "complemento";
          } 
          $this->bairro_before_qstr = $this->bairro;
          $this->bairro = substr($this->Db->qstr($this->bairro), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->bairro = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->bairro);
          }
          if ($this->bairro == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->bairro = "null"; 
              $NM_val_null[] = "bairro";
          } 
          $this->cidade_before_qstr = $this->cidade;
          $this->cidade = substr($this->Db->qstr($this->cidade), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->cidade = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->cidade);
          }
          if ($this->cidade == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cidade = "null"; 
              $NM_val_null[] = "cidade";
          } 
          $this->uf_before_qstr = $this->uf;
          $this->uf = substr($this->Db->qstr($this->uf), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->uf = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->uf);
          }
          if ($this->uf == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->uf = "null"; 
              $NM_val_null[] = "uf";
          } 
          $this->telefone_before_qstr = $this->telefone;
          $this->telefone = substr($this->Db->qstr($this->telefone), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->telefone = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->telefone);
          }
          if ($this->telefone == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->telefone = "null"; 
              $NM_val_null[] = "telefone";
          } 
          $this->celular_before_qstr = $this->celular;
          $this->celular = substr($this->Db->qstr($this->celular), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->celular = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->celular);
          }
          if ($this->celular == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->celular = "null"; 
              $NM_val_null[] = "celular";
          } 
          $this->email_before_qstr = $this->email;
          $this->email = substr($this->Db->qstr($this->email), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->email = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->email);
          }
          if ($this->email == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->email = "null"; 
              $NM_val_null[] = "email";
          } 
          $this->site_before_qstr = $this->site;
          $this->site = substr($this->Db->qstr($this->site), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->site = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->site);
          }
          if ($this->site == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->site = "null"; 
              $NM_val_null[] = "site";
          } 
          $this->ie_before_qstr = $this->ie;
          $this->ie = substr($this->Db->qstr($this->ie), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->ie = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->ie);
          }
          if ($this->ie == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->ie = "null"; 
              $NM_val_null[] = "ie";
          } 
          $this->ibge_before_qstr = $this->ibge;
          $this->ibge = substr($this->Db->qstr($this->ibge), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->ibge = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->ibge);
          }
          if ($this->ibge == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->ibge = "null"; 
              $NM_val_null[] = "ibge";
          } 
          $this->status_before_qstr = $this->status;
          $this->status = substr($this->Db->qstr($this->status), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->status = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->status);
          }
          if ($this->status == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->status = "null"; 
              $NM_val_null[] = "status";
          } 
          $this->observacao_before_qstr = $this->observacao;
          $this->observacao = substr($this->Db->qstr($this->observacao), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->observacao = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->observacao);
          }
          if ($this->observacao == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->observacao = "null"; 
              $NM_val_null[] = "observacao";
          } 
          $this->insert_user_before_qstr = $this->insert_user;
          $this->insert_user = substr($this->Db->qstr($this->insert_user), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->insert_user = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->insert_user);
          }
          if ($this->insert_user == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->insert_user = "null"; 
              $NM_val_null[] = "insert_user";
          } 
          if ($this->insert_data == "")  
          { 
              $this->insert_data = "null"; 
              $NM_val_null[] = "insert_data";
          } 
          $this->update_user_before_qstr = $this->update_user;
          $this->update_user = substr($this->Db->qstr($this->update_user), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->update_user = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->update_user);
          }
          if ($this->update_user == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->update_user = "null"; 
              $NM_val_null[] = "update_user";
          } 
          if ($this->update_data == "")  
          { 
              $this->update_data = "null"; 
              $NM_val_null[] = "update_data";
          } 
          $this->flag_produtor_before_qstr = $this->flag_produtor;
          $this->flag_produtor = substr($this->Db->qstr($this->flag_produtor), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->flag_produtor = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->flag_produtor);
          }
          if ($this->flag_produtor == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->flag_produtor = "null"; 
              $NM_val_null[] = "flag_produtor";
          } 
          $this->flag_representante_before_qstr = $this->flag_representante;
          $this->flag_representante = substr($this->Db->qstr($this->flag_representante), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->flag_representante = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->flag_representante);
          }
          if ($this->flag_representante == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->flag_representante = "null"; 
              $NM_val_null[] = "flag_representante";
          } 
          $this->flag_cliente_before_qstr = $this->flag_cliente;
          $this->flag_cliente = substr($this->Db->qstr($this->flag_cliente), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->flag_cliente = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->flag_cliente);
          }
          if ($this->flag_cliente == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->flag_cliente = "null"; 
              $NM_val_null[] = "flag_cliente";
          } 
          $this->flag_transportadora_before_qstr = $this->flag_transportadora;
          $this->flag_transportadora = substr($this->Db->qstr($this->flag_transportadora), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->flag_transportadora = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->flag_transportadora);
          }
          if ($this->flag_transportadora == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->flag_transportadora = "null"; 
              $NM_val_null[] = "flag_transportadora";
          } 
          $this->login_before_qstr = $this->login;
          $this->login = substr($this->Db->qstr($this->login), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->login = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->login);
          }
          if ($this->login == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->login = "null"; 
              $NM_val_null[] = "login";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_pessoa_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $bUpdateOk = false;
              $this->sc_evento = 'update';
          } 
          $aUpdateOk = array();
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              $aDoNotUpdate = array();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nome_pessoa = '$this->nome_pessoa', razao_social = '$this->razao_social', cnpj = '$this->cnpj', cep = '$this->cep', endereco = '$this->endereco', num = '$this->num', complemento = '$this->complemento', bairro = '$this->bairro', cidade = '$this->cidade', uf = '$this->uf', telefone = '$this->telefone', celular = '$this->celular', email = '$this->email', site = '$this->site', ie = '$this->ie', observacao = '$this->observacao', login = '$this->login'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nome_pessoa = '$this->nome_pessoa', razao_social = '$this->razao_social', cnpj = '$this->cnpj', cep = '$this->cep', endereco = '$this->endereco', num = '$this->num', complemento = '$this->complemento', bairro = '$this->bairro', cidade = '$this->cidade', uf = '$this->uf', telefone = '$this->telefone', celular = '$this->celular', email = '$this->email', site = '$this->site', ie = '$this->ie', observacao = '$this->observacao', login = '$this->login'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nome_pessoa = '$this->nome_pessoa', razao_social = '$this->razao_social', cnpj = '$this->cnpj', cep = '$this->cep', endereco = '$this->endereco', num = '$this->num', complemento = '$this->complemento', bairro = '$this->bairro', cidade = '$this->cidade', uf = '$this->uf', telefone = '$this->telefone', celular = '$this->celular', email = '$this->email', site = '$this->site', ie = '$this->ie', observacao = '$this->observacao', login = '$this->login'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nome_pessoa = '$this->nome_pessoa', razao_social = '$this->razao_social', cnpj = '$this->cnpj', cep = '$this->cep', endereco = '$this->endereco', num = '$this->num', complemento = '$this->complemento', bairro = '$this->bairro', cidade = '$this->cidade', uf = '$this->uf', telefone = '$this->telefone', celular = '$this->celular', email = '$this->email', site = '$this->site', ie = '$this->ie', observacao = '$this->observacao', login = '$this->login'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nome_pessoa = '$this->nome_pessoa', razao_social = '$this->razao_social', cnpj = '$this->cnpj', cep = '$this->cep', endereco = '$this->endereco', num = '$this->num', complemento = '$this->complemento', bairro = '$this->bairro', cidade = '$this->cidade', uf = '$this->uf', telefone = '$this->telefone', celular = '$this->celular', email = '$this->email', site = '$this->site', ie = '$this->ie', observacao = '$this->observacao', login = '$this->login'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nome_pessoa = '$this->nome_pessoa', razao_social = '$this->razao_social', cnpj = '$this->cnpj', cep = '$this->cep', endereco = '$this->endereco', num = '$this->num', complemento = '$this->complemento', bairro = '$this->bairro', cidade = '$this->cidade', uf = '$this->uf', telefone = '$this->telefone', celular = '$this->celular', email = '$this->email', site = '$this->site', ie = '$this->ie', observacao = '$this->observacao', login = '$this->login'"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nome_pessoa = '$this->nome_pessoa', razao_social = '$this->razao_social', cnpj = '$this->cnpj', cep = '$this->cep', endereco = '$this->endereco', num = '$this->num', complemento = '$this->complemento', bairro = '$this->bairro', cidade = '$this->cidade', uf = '$this->uf', telefone = '$this->telefone', celular = '$this->celular', email = '$this->email', site = '$this->site', ie = '$this->ie', observacao = '$this->observacao', login = '$this->login'"; 
              } 
              if (isset($NM_val_form['tipo_pessoa']) && $NM_val_form['tipo_pessoa'] != $this->nmgp_dados_select['tipo_pessoa']) 
              { 
                  $SC_fields_update[] = "tipo_pessoa = '$this->tipo_pessoa'"; 
              } 
              if (isset($NM_val_form['cpf']) && $NM_val_form['cpf'] != $this->nmgp_dados_select['cpf']) 
              { 
                  $SC_fields_update[] = "cpf = '$this->cpf'"; 
              } 
              if (isset($NM_val_form['ibge']) && $NM_val_form['ibge'] != $this->nmgp_dados_select['ibge']) 
              { 
                  $SC_fields_update[] = "ibge = '$this->ibge'"; 
              } 
              if (isset($NM_val_form['status']) && $NM_val_form['status'] != $this->nmgp_dados_select['status']) 
              { 
                  $SC_fields_update[] = "status = '$this->status'"; 
              } 
              if (isset($NM_val_form['insert_user']) && $NM_val_form['insert_user'] != $this->nmgp_dados_select['insert_user']) 
              { 
                  $SC_fields_update[] = "insert_user = '$this->insert_user'"; 
              } 
              if (isset($NM_val_form['insert_data']) && $NM_val_form['insert_data'] != $this->nmgp_dados_select['insert_data']) 
              { 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  { 
                      $SC_fields_update[] = "insert_data = #$this->insert_data#"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  { 
                      $SC_fields_update[] = "insert_data = EXTEND('" . $this->insert_data . "', YEAR TO FRACTION)"; 
                  } 
                  else
                  { 
                      $SC_fields_update[] = "insert_data = " . $this->Ini->date_delim . $this->insert_data . $this->Ini->date_delim1 . ""; 
                  } 
              } 
              if (isset($NM_val_form['update_user']) && $NM_val_form['update_user'] != $this->nmgp_dados_select['update_user']) 
              { 
                  $SC_fields_update[] = "update_user = '$this->update_user'"; 
              } 
              if (isset($NM_val_form['update_data']) && $NM_val_form['update_data'] != $this->nmgp_dados_select['update_data']) 
              { 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  { 
                      $SC_fields_update[] = "update_data = #$this->update_data#"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  { 
                      $SC_fields_update[] = "update_data = EXTEND('" . $this->update_data . "', YEAR TO FRACTION)"; 
                  } 
                  else
                  { 
                      $SC_fields_update[] = "update_data = " . $this->Ini->date_delim . $this->update_data . $this->Ini->date_delim1 . ""; 
                  } 
              } 
              if (isset($NM_val_form['flag_produtor']) && $NM_val_form['flag_produtor'] != $this->nmgp_dados_select['flag_produtor']) 
              { 
                  $SC_fields_update[] = "flag_produtor = '$this->flag_produtor'"; 
              } 
              if (isset($NM_val_form['flag_representante']) && $NM_val_form['flag_representante'] != $this->nmgp_dados_select['flag_representante']) 
              { 
                  $SC_fields_update[] = "flag_representante = '$this->flag_representante'"; 
              } 
              if (isset($NM_val_form['flag_cliente']) && $NM_val_form['flag_cliente'] != $this->nmgp_dados_select['flag_cliente']) 
              { 
                  $SC_fields_update[] = "flag_cliente = '$this->flag_cliente'"; 
              } 
              if (isset($NM_val_form['flag_transportadora']) && $NM_val_form['flag_transportadora'] != $this->nmgp_dados_select['flag_transportadora']) 
              { 
                  $SC_fields_update[] = "flag_transportadora = '$this->flag_transportadora'"; 
              } 
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE id_pessoa = $this->id_pessoa ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE id_pessoa = $this->id_pessoa ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE id_pessoa = $this->id_pessoa ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE id_pessoa = $this->id_pessoa ";  
              }  
              else  
              {
                  $comando .= " WHERE id_pessoa = $this->id_pessoa ";  
              }  
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              $useUpdateProcedure = false;
              if (!empty($SC_fields_update) || $useUpdateProcedure)
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
                  $rs = $this->Db->Execute($comando);  
                  if ($rs === false) 
                  { 
                      if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                      {
                          $dbErrorMessage = $this->Db->ErrorMsg();
                          $dbErrorCode = $this->Db->ErrorNo();
                          $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $dbErrorMessage, true);
                          if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                          { 
                              $this->sc_erro_update = $dbErrorMessage;
                              $this->NM_rollback_db(); 
                              if ($this->NM_ajax_flag)
                              {
                                  form_pessoa_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              $this->nome_pessoa = $this->nome_pessoa_before_qstr;
              $this->razao_social = $this->razao_social_before_qstr;
              $this->tipo_pessoa = $this->tipo_pessoa_before_qstr;
              $this->cnpj = $this->cnpj_before_qstr;
              $this->cpf = $this->cpf_before_qstr;
              $this->cep = $this->cep_before_qstr;
              $this->endereco = $this->endereco_before_qstr;
              $this->num = $this->num_before_qstr;
              $this->complemento = $this->complemento_before_qstr;
              $this->bairro = $this->bairro_before_qstr;
              $this->cidade = $this->cidade_before_qstr;
              $this->uf = $this->uf_before_qstr;
              $this->telefone = $this->telefone_before_qstr;
              $this->celular = $this->celular_before_qstr;
              $this->email = $this->email_before_qstr;
              $this->site = $this->site_before_qstr;
              $this->ie = $this->ie_before_qstr;
              $this->ibge = $this->ibge_before_qstr;
              $this->status = $this->status_before_qstr;
              $this->observacao = $this->observacao_before_qstr;
              $this->insert_user = $this->insert_user_before_qstr;
              $this->update_user = $this->update_user_before_qstr;
              $this->flag_produtor = $this->flag_produtor_before_qstr;
              $this->flag_representante = $this->flag_representante_before_qstr;
              $this->flag_cliente = $this->flag_cliente_before_qstr;
              $this->flag_transportadora = $this->flag_transportadora_before_qstr;
              $this->login = $this->login_before_qstr;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
              }   
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
              }


              if     (isset($NM_val_form) && isset($NM_val_form['id_pessoa'])) { $this->id_pessoa = $NM_val_form['id_pessoa']; }
              elseif (isset($this->id_pessoa)) { $this->nm_limpa_alfa($this->id_pessoa); }
              if     (isset($NM_val_form) && isset($NM_val_form['nome_pessoa'])) { $this->nome_pessoa = $NM_val_form['nome_pessoa']; }
              elseif (isset($this->nome_pessoa)) { $this->nm_limpa_alfa($this->nome_pessoa); }
              if     (isset($NM_val_form) && isset($NM_val_form['razao_social'])) { $this->razao_social = $NM_val_form['razao_social']; }
              elseif (isset($this->razao_social)) { $this->nm_limpa_alfa($this->razao_social); }
              if     (isset($NM_val_form) && isset($NM_val_form['cnpj'])) { $this->cnpj = $NM_val_form['cnpj']; }
              elseif (isset($this->cnpj)) { $this->nm_limpa_alfa($this->cnpj); }
              if     (isset($NM_val_form) && isset($NM_val_form['cep'])) { $this->cep = $NM_val_form['cep']; }
              elseif (isset($this->cep)) { $this->nm_limpa_alfa($this->cep); }
              if     (isset($NM_val_form) && isset($NM_val_form['endereco'])) { $this->endereco = $NM_val_form['endereco']; }
              elseif (isset($this->endereco)) { $this->nm_limpa_alfa($this->endereco); }
              if     (isset($NM_val_form) && isset($NM_val_form['num'])) { $this->num = $NM_val_form['num']; }
              elseif (isset($this->num)) { $this->nm_limpa_alfa($this->num); }
              if     (isset($NM_val_form) && isset($NM_val_form['complemento'])) { $this->complemento = $NM_val_form['complemento']; }
              elseif (isset($this->complemento)) { $this->nm_limpa_alfa($this->complemento); }
              if     (isset($NM_val_form) && isset($NM_val_form['bairro'])) { $this->bairro = $NM_val_form['bairro']; }
              elseif (isset($this->bairro)) { $this->nm_limpa_alfa($this->bairro); }
              if     (isset($NM_val_form) && isset($NM_val_form['cidade'])) { $this->cidade = $NM_val_form['cidade']; }
              elseif (isset($this->cidade)) { $this->nm_limpa_alfa($this->cidade); }
              if     (isset($NM_val_form) && isset($NM_val_form['uf'])) { $this->uf = $NM_val_form['uf']; }
              elseif (isset($this->uf)) { $this->nm_limpa_alfa($this->uf); }
              if     (isset($NM_val_form) && isset($NM_val_form['telefone'])) { $this->telefone = $NM_val_form['telefone']; }
              elseif (isset($this->telefone)) { $this->nm_limpa_alfa($this->telefone); }
              if     (isset($NM_val_form) && isset($NM_val_form['celular'])) { $this->celular = $NM_val_form['celular']; }
              elseif (isset($this->celular)) { $this->nm_limpa_alfa($this->celular); }
              if     (isset($NM_val_form) && isset($NM_val_form['email'])) { $this->email = $NM_val_form['email']; }
              elseif (isset($this->email)) { $this->nm_limpa_alfa($this->email); }
              if     (isset($NM_val_form) && isset($NM_val_form['site'])) { $this->site = $NM_val_form['site']; }
              elseif (isset($this->site)) { $this->nm_limpa_alfa($this->site); }
              if     (isset($NM_val_form) && isset($NM_val_form['ie'])) { $this->ie = $NM_val_form['ie']; }
              elseif (isset($this->ie)) { $this->nm_limpa_alfa($this->ie); }
              if     (isset($NM_val_form) && isset($NM_val_form['observacao'])) { $this->observacao = $NM_val_form['observacao']; }
              elseif (isset($this->observacao)) { $this->nm_limpa_alfa($this->observacao); }
              if     (isset($NM_val_form) && isset($NM_val_form['login'])) { $this->login = $NM_val_form['login']; }
              elseif (isset($this->login)) { $this->nm_limpa_alfa($this->login); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('id_pessoa', 'cnpj', 'nome_pessoa', 'razao_social', 'cep', 'endereco', 'num', 'complemento', 'bairro', 'cidade', 'uf', 'telefone', 'celular', 'email', 'site', 'ie', 'observacao', 'login'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              $this->nm_tira_formatacao();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              $NM_seq_auto = "NEXT VALUE FOR pessoa_id_pessoa_seq, ";
              $NM_cmp_auto = "id_pessoa, ";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $NM_seq_auto = "pessoa_id_pessoa_seq.NEXTVAL, ";
              $NM_cmp_auto = "id_pessoa, ";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          { 
              $NM_seq_auto = "nextval('pessoa_id_pessoa_seq'), ";
              $NM_cmp_auto = "id_pessoa, ";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $NM_seq_auto = "gen_id(pessoa_id_pessoa_seq, 1), ";
              $NM_cmp_auto = "id_pessoa, ";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { 
              $NM_seq_auto = "NULL, ";
              $NM_cmp_auto = "id_pessoa, ";
          } 
          $bInsertOk = true;
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_pessoa_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (nome_pessoa, razao_social, tipo_pessoa, cnpj, cpf, cep, endereco, num, complemento, bairro, cidade, uf, telefone, celular, email, site, ie, ibge, status, observacao, insert_user, insert_data, update_user, update_data, flag_produtor, flag_representante, flag_cliente, flag_transportadora, login) VALUES ('$this->nome_pessoa', '$this->razao_social', '$this->tipo_pessoa', '$this->cnpj', '$this->cpf', '$this->cep', '$this->endereco', '$this->num', '$this->complemento', '$this->bairro', '$this->cidade', '$this->uf', '$this->telefone', '$this->celular', '$this->email', '$this->site', '$this->ie', '$this->ibge', '$this->status', '$this->observacao', '$this->insert_user', #$this->insert_data#, '$this->update_user', #$this->update_data#, '$this->flag_produtor', '$this->flag_representante', '$this->flag_cliente', '$this->flag_transportadora', '$this->login')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nome_pessoa, razao_social, tipo_pessoa, cnpj, cpf, cep, endereco, num, complemento, bairro, cidade, uf, telefone, celular, email, site, ie, ibge, status, observacao, insert_user, insert_data, update_user, update_data, flag_produtor, flag_representante, flag_cliente, flag_transportadora, login) VALUES (" . $NM_seq_auto . "'$this->nome_pessoa', '$this->razao_social', '$this->tipo_pessoa', '$this->cnpj', '$this->cpf', '$this->cep', '$this->endereco', '$this->num', '$this->complemento', '$this->bairro', '$this->cidade', '$this->uf', '$this->telefone', '$this->celular', '$this->email', '$this->site', '$this->ie', '$this->ibge', '$this->status', '$this->observacao', '$this->insert_user', " . $this->Ini->date_delim . $this->insert_data . $this->Ini->date_delim1 . ", '$this->update_user', " . $this->Ini->date_delim . $this->update_data . $this->Ini->date_delim1 . ", '$this->flag_produtor', '$this->flag_representante', '$this->flag_cliente', '$this->flag_transportadora', '$this->login')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nome_pessoa, razao_social, tipo_pessoa, cnpj, cpf, cep, endereco, num, complemento, bairro, cidade, uf, telefone, celular, email, site, ie, ibge, status, observacao, insert_user, insert_data, update_user, update_data, flag_produtor, flag_representante, flag_cliente, flag_transportadora, login) VALUES (" . $NM_seq_auto . "'$this->nome_pessoa', '$this->razao_social', '$this->tipo_pessoa', '$this->cnpj', '$this->cpf', '$this->cep', '$this->endereco', '$this->num', '$this->complemento', '$this->bairro', '$this->cidade', '$this->uf', '$this->telefone', '$this->celular', '$this->email', '$this->site', '$this->ie', '$this->ibge', '$this->status', '$this->observacao', '$this->insert_user', " . $this->Ini->date_delim . $this->insert_data . $this->Ini->date_delim1 . ", '$this->update_user', " . $this->Ini->date_delim . $this->update_data . $this->Ini->date_delim1 . ", '$this->flag_produtor', '$this->flag_representante', '$this->flag_cliente', '$this->flag_transportadora', '$this->login')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nome_pessoa, razao_social, tipo_pessoa, cnpj, cpf, cep, endereco, num, complemento, bairro, cidade, uf, telefone, celular, email, site, ie, ibge, status, observacao, insert_user, insert_data, update_user, update_data, flag_produtor, flag_representante, flag_cliente, flag_transportadora, login) VALUES (" . $NM_seq_auto . "'$this->nome_pessoa', '$this->razao_social', '$this->tipo_pessoa', '$this->cnpj', '$this->cpf', '$this->cep', '$this->endereco', '$this->num', '$this->complemento', '$this->bairro', '$this->cidade', '$this->uf', '$this->telefone', '$this->celular', '$this->email', '$this->site', '$this->ie', '$this->ibge', '$this->status', '$this->observacao', '$this->insert_user', " . $this->Ini->date_delim . $this->insert_data . $this->Ini->date_delim1 . ", '$this->update_user', " . $this->Ini->date_delim . $this->update_data . $this->Ini->date_delim1 . ", '$this->flag_produtor', '$this->flag_representante', '$this->flag_cliente', '$this->flag_transportadora', '$this->login')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nome_pessoa, razao_social, tipo_pessoa, cnpj, cpf, cep, endereco, num, complemento, bairro, cidade, uf, telefone, celular, email, site, ie, ibge, status, observacao, insert_user, insert_data, update_user, update_data, flag_produtor, flag_representante, flag_cliente, flag_transportadora, login) VALUES (" . $NM_seq_auto . "'$this->nome_pessoa', '$this->razao_social', '$this->tipo_pessoa', '$this->cnpj', '$this->cpf', '$this->cep', '$this->endereco', '$this->num', '$this->complemento', '$this->bairro', '$this->cidade', '$this->uf', '$this->telefone', '$this->celular', '$this->email', '$this->site', '$this->ie', '$this->ibge', '$this->status', '$this->observacao', '$this->insert_user', EXTEND('$this->insert_data', YEAR TO FRACTION), '$this->update_user', EXTEND('$this->update_data', YEAR TO FRACTION), '$this->flag_produtor', '$this->flag_representante', '$this->flag_cliente', '$this->flag_transportadora', '$this->login')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nome_pessoa, razao_social, tipo_pessoa, cnpj, cpf, cep, endereco, num, complemento, bairro, cidade, uf, telefone, celular, email, site, ie, ibge, status, observacao, insert_user, insert_data, update_user, update_data, flag_produtor, flag_representante, flag_cliente, flag_transportadora, login) VALUES (" . $NM_seq_auto . "'$this->nome_pessoa', '$this->razao_social', '$this->tipo_pessoa', '$this->cnpj', '$this->cpf', '$this->cep', '$this->endereco', '$this->num', '$this->complemento', '$this->bairro', '$this->cidade', '$this->uf', '$this->telefone', '$this->celular', '$this->email', '$this->site', '$this->ie', '$this->ibge', '$this->status', '$this->observacao', '$this->insert_user', " . $this->Ini->date_delim . $this->insert_data . $this->Ini->date_delim1 . ", '$this->update_user', " . $this->Ini->date_delim . $this->update_data . $this->Ini->date_delim1 . ", '$this->flag_produtor', '$this->flag_representante', '$this->flag_cliente', '$this->flag_transportadora', '$this->login')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nome_pessoa, razao_social, tipo_pessoa, cnpj, cpf, cep, endereco, num, complemento, bairro, cidade, uf, telefone, celular, email, site, ie, ibge, status, observacao, insert_user, insert_data, update_user, update_data, flag_produtor, flag_representante, flag_cliente, flag_transportadora, login) VALUES (" . $NM_seq_auto . "'$this->nome_pessoa', '$this->razao_social', '$this->tipo_pessoa', '$this->cnpj', '$this->cpf', '$this->cep', '$this->endereco', '$this->num', '$this->complemento', '$this->bairro', '$this->cidade', '$this->uf', '$this->telefone', '$this->celular', '$this->email', '$this->site', '$this->ie', '$this->ibge', '$this->status', '$this->observacao', '$this->insert_user', " . $this->Ini->date_delim . $this->insert_data . $this->Ini->date_delim1 . ", '$this->update_user', " . $this->Ini->date_delim . $this->update_data . $this->Ini->date_delim1 . ", '$this->flag_produtor', '$this->flag_representante', '$this->flag_cliente', '$this->flag_transportadora', '$this->login')"; 
              }
              elseif ($this->Ini->nm_tpbanco == 'pdo_ibm')
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nome_pessoa, razao_social, tipo_pessoa, cnpj, cpf, cep, endereco, num, complemento, bairro, cidade, uf, telefone, celular, email, site, ie, ibge, status, observacao, insert_user, insert_data, update_user, update_data, flag_produtor, flag_representante, flag_cliente, flag_transportadora, login) VALUES (" . $NM_seq_auto . "'$this->nome_pessoa', '$this->razao_social', '$this->tipo_pessoa', '$this->cnpj', '$this->cpf', '$this->cep', '$this->endereco', '$this->num', '$this->complemento', '$this->bairro', '$this->cidade', '$this->uf', '$this->telefone', '$this->celular', '$this->email', '$this->site', '$this->ie', '$this->ibge', '$this->status', '$this->observacao', '$this->insert_user', " . $this->Ini->date_delim . $this->insert_data . $this->Ini->date_delim1 . ", '$this->update_user', " . $this->Ini->date_delim . $this->update_data . $this->Ini->date_delim1 . ", '$this->flag_produtor', '$this->flag_representante', '$this->flag_cliente', '$this->flag_transportadora', '$this->login')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nome_pessoa, razao_social, tipo_pessoa, cnpj, cpf, cep, endereco, num, complemento, bairro, cidade, uf, telefone, celular, email, site, ie, ibge, status, observacao, insert_user, insert_data, update_user, update_data, flag_produtor, flag_representante, flag_cliente, flag_transportadora, login) VALUES (" . $NM_seq_auto . "'$this->nome_pessoa', '$this->razao_social', '$this->tipo_pessoa', '$this->cnpj', '$this->cpf', '$this->cep', '$this->endereco', '$this->num', '$this->complemento', '$this->bairro', '$this->cidade', '$this->uf', '$this->telefone', '$this->celular', '$this->email', '$this->site', '$this->ie', '$this->ibge', '$this->status', '$this->observacao', '$this->insert_user', " . $this->Ini->date_delim . $this->insert_data . $this->Ini->date_delim1 . ", '$this->update_user', " . $this->Ini->date_delim . $this->update_data . $this->Ini->date_delim1 . ", '$this->flag_produtor', '$this->flag_representante', '$this->flag_cliente', '$this->flag_transportadora', '$this->login')"; 
              }
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
              $rs = $this->Db->Execute($comando); 
              if ($rs === false)  
              { 
                  if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                  {
                      $dbErrorMessage = $this->Db->ErrorMsg();
                      $dbErrorCode = $this->Db->ErrorNo();
                      $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $dbErrorMessage, true);
                      if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
                      { 
                          $this->sc_erro_insert = $dbErrorMessage;
                          $this->nmgp_opcao     = 'refresh_insert';
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_pessoa_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase)) 
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select @@identity"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_pessoa_pack_ajax_response();
                      }
                      exit; 
                  } 
                  $this->id_pessoa =  $rsy->fields[0];
                 $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_id()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_pessoa = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SELECT dbinfo('sqlca.sqlerrd1') FROM " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_pessoa = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select pessoa_id_pessoa_seq.currval from dual"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_pessoa = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "values PREVVAL FOR pessoa_id_pessoa_seq"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_pessoa = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select CURRVAL('pessoa_id_pessoa_seq')"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_pessoa = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select gen_id(pessoa_id_pessoa_seq, 0) from " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_pessoa = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_rowid()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_pessoa = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              $this->nome_pessoa = $this->nome_pessoa_before_qstr;
              $this->razao_social = $this->razao_social_before_qstr;
              $this->tipo_pessoa = $this->tipo_pessoa_before_qstr;
              $this->cnpj = $this->cnpj_before_qstr;
              $this->cpf = $this->cpf_before_qstr;
              $this->cep = $this->cep_before_qstr;
              $this->endereco = $this->endereco_before_qstr;
              $this->num = $this->num_before_qstr;
              $this->complemento = $this->complemento_before_qstr;
              $this->bairro = $this->bairro_before_qstr;
              $this->cidade = $this->cidade_before_qstr;
              $this->uf = $this->uf_before_qstr;
              $this->telefone = $this->telefone_before_qstr;
              $this->celular = $this->celular_before_qstr;
              $this->email = $this->email_before_qstr;
              $this->site = $this->site_before_qstr;
              $this->ie = $this->ie_before_qstr;
              $this->ibge = $this->ibge_before_qstr;
              $this->status = $this->status_before_qstr;
              $this->observacao = $this->observacao_before_qstr;
              $this->insert_user = $this->insert_user_before_qstr;
              $this->update_user = $this->update_user_before_qstr;
              $this->flag_produtor = $this->flag_produtor_before_qstr;
              $this->flag_representante = $this->flag_representante_before_qstr;
              $this->flag_cliente = $this->flag_cliente_before_qstr;
              $this->flag_transportadora = $this->flag_transportadora_before_qstr;
              $this->login = $this->login_before_qstr;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->nome_pessoa = $this->nome_pessoa_before_qstr;
              $this->razao_social = $this->razao_social_before_qstr;
              $this->tipo_pessoa = $this->tipo_pessoa_before_qstr;
              $this->cnpj = $this->cnpj_before_qstr;
              $this->cpf = $this->cpf_before_qstr;
              $this->cep = $this->cep_before_qstr;
              $this->endereco = $this->endereco_before_qstr;
              $this->num = $this->num_before_qstr;
              $this->complemento = $this->complemento_before_qstr;
              $this->bairro = $this->bairro_before_qstr;
              $this->cidade = $this->cidade_before_qstr;
              $this->uf = $this->uf_before_qstr;
              $this->telefone = $this->telefone_before_qstr;
              $this->celular = $this->celular_before_qstr;
              $this->email = $this->email_before_qstr;
              $this->site = $this->site_before_qstr;
              $this->ie = $this->ie_before_qstr;
              $this->ibge = $this->ibge_before_qstr;
              $this->status = $this->status_before_qstr;
              $this->observacao = $this->observacao_before_qstr;
              $this->insert_user = $this->insert_user_before_qstr;
              $this->update_user = $this->update_user_before_qstr;
              $this->flag_produtor = $this->flag_produtor_before_qstr;
              $this->flag_representante = $this->flag_representante_before_qstr;
              $this->flag_cliente = $this->flag_cliente_before_qstr;
              $this->flag_transportadora = $this->flag_transportadora_before_qstr;
              $this->login = $this->login_before_qstr;
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['return_edit'] = "new";
              } 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->id_pessoa = substr($this->Db->qstr($this->id_pessoa), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_dele_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa = $this->id_pessoa "); 
              }  
              if ($rs === false) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dele'], $this->Db->ErrorMsg(), true); 
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                  { 
                      $this->sc_erro_delete = $this->Db->ErrorMsg();  
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_pessoa_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              if (empty($this->sc_erro_delete)) {
                  $this->record_delete_ok = true;
              }
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['total']);
              }

              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
          }

          }
          else
          {
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "igual"; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sMsgErro); 
          }

      }  
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if (!empty($NM_val_null))
      {
          foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
          {
              eval('$this->' . $sc_val_null_field . ' = "";');
          }
      }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['parms'] = "id_pessoa?#?$this->id_pessoa?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->id_pessoa = null === $this->id_pessoa ? null : substr($this->Db->qstr($this->id_pessoa), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_filter'] . ")";
          }
      }
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "inicio")
      { 
          $this->nmgp_opcao = "igual"; 
      } 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT id_pessoa, nome_pessoa, razao_social, tipo_pessoa, cnpj, cpf, cep, endereco, num, complemento, bairro, cidade, uf, telefone, celular, email, site, ie, ibge, status, observacao, insert_user, str_replace (convert(char(10),insert_data,102), '.', '-') + ' ' + convert(char(8),insert_data,20), update_user, str_replace (convert(char(10),update_data,102), '.', '-') + ' ' + convert(char(8),update_data,20), flag_produtor, flag_representante, flag_cliente, flag_transportadora, login from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT id_pessoa, nome_pessoa, razao_social, tipo_pessoa, cnpj, cpf, cep, endereco, num, complemento, bairro, cidade, uf, telefone, celular, email, site, ie, ibge, status, observacao, insert_user, convert(char(23),insert_data,121), update_user, convert(char(23),update_data,121), flag_produtor, flag_representante, flag_cliente, flag_transportadora, login from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT id_pessoa, nome_pessoa, razao_social, tipo_pessoa, cnpj, cpf, cep, endereco, num, complemento, bairro, cidade, uf, telefone, celular, email, site, ie, ibge, status, observacao, insert_user, insert_data, update_user, update_data, flag_produtor, flag_representante, flag_cliente, flag_transportadora, login from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT id_pessoa, nome_pessoa, razao_social, tipo_pessoa, cnpj, cpf, cep, endereco, num, complemento, bairro, cidade, uf, telefone, celular, email, site, ie, ibge, status, observacao, insert_user, EXTEND(insert_data, YEAR TO FRACTION), update_user, EXTEND(update_data, YEAR TO FRACTION), flag_produtor, flag_representante, flag_cliente, flag_transportadora, login from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT id_pessoa, nome_pessoa, razao_social, tipo_pessoa, cnpj, cpf, cep, endereco, num, complemento, bairro, cidade, uf, telefone, celular, email, site, ie, ibge, status, observacao, insert_user, insert_data, update_user, update_data, flag_produtor, flag_representante, flag_cliente, flag_transportadora, login from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "id_pessoa = $this->id_pessoa"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $aWhere[] = "id_pessoa = $this->id_pessoa"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $aWhere[] = "id_pessoa = $this->id_pessoa"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $aWhere[] = "id_pessoa = $this->id_pessoa"; 
              }  
              else  
              {
                  $aWhere[] = "id_pessoa = $this->id_pessoa"; 
              }  
              if (!empty($sc_where_filter))  
              {
                  $teste_select = $nmgp_select . $this->returnWhere($aWhere);
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $teste_select; 
                  $rs = $this->Db->Execute($teste_select); 
                  if ($rs->EOF)
                  {
                     $aWhere = array($sc_where_filter);
                  }  
                  $rs->Close(); 
              }  
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "id_pessoa";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['select'] = ""; 
              } 
          } 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rs = $this->Db->Execute($nmgp_select) ; 
          if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs->EOF) 
          { 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['empty_filter'] = true;
                  return; 
              }
              if ($this->nmgp_botoes['insert'] != "on")
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
              }
              $this->nmgp_opcao = "novo"; 
              $this->nm_flag_saida_novo = "S"; 
              $rs->Close(); 
              if ($this->aba_iframe)
              {
                  $this->NM_ajax_info['buttonDisplay']['exit'] = $this->nmgp_botoes['exit'] = 'off';
              }
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd_extr']); 
              $this->nmgp_opcao = "novo"; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->id_pessoa = $rs->fields[0] ; 
              $this->nmgp_dados_select['id_pessoa'] = $this->id_pessoa;
              $this->nome_pessoa = $rs->fields[1] ; 
              $this->nmgp_dados_select['nome_pessoa'] = $this->nome_pessoa;
              $this->razao_social = $rs->fields[2] ; 
              $this->nmgp_dados_select['razao_social'] = $this->razao_social;
              $this->tipo_pessoa = $rs->fields[3] ; 
              $this->nmgp_dados_select['tipo_pessoa'] = $this->tipo_pessoa;
              $this->cnpj = $rs->fields[4] ; 
              $this->nmgp_dados_select['cnpj'] = $this->cnpj;
              $this->cnpj = trim($this->cnpj);
              if (strlen($this->cnpj) < 14 && !empty($this->cnpj)) 
              { 
                  $this->cnpj = str_repeat(0, 14 - strlen($this->cnpj)) . $this->cnpj; 
              } 
              elseif (strlen($this->cnpj) > 14) 
              { 
                     $this->cnpj = substr($this->cnpj, strlen($this->cnpj) - 14); 
              } 
              $this->cpf = $rs->fields[5] ; 
              $this->nmgp_dados_select['cpf'] = $this->cpf;
              $this->cep = $rs->fields[6] ; 
              $this->nmgp_dados_select['cep'] = $this->cep;
              $this->endereco = $rs->fields[7] ; 
              $this->nmgp_dados_select['endereco'] = $this->endereco;
              $this->num = $rs->fields[8] ; 
              $this->nmgp_dados_select['num'] = $this->num;
              $this->complemento = $rs->fields[9] ; 
              $this->nmgp_dados_select['complemento'] = $this->complemento;
              $this->bairro = $rs->fields[10] ; 
              $this->nmgp_dados_select['bairro'] = $this->bairro;
              $this->cidade = $rs->fields[11] ; 
              $this->nmgp_dados_select['cidade'] = $this->cidade;
              $this->uf = $rs->fields[12] ; 
              $this->nmgp_dados_select['uf'] = $this->uf;
              $this->telefone = $rs->fields[13] ; 
              $this->nmgp_dados_select['telefone'] = $this->telefone;
              $this->celular = $rs->fields[14] ; 
              $this->nmgp_dados_select['celular'] = $this->celular;
              $this->email = $rs->fields[15] ; 
              $this->nmgp_dados_select['email'] = $this->email;
              $this->site = $rs->fields[16] ; 
              $this->nmgp_dados_select['site'] = $this->site;
              $this->ie = $rs->fields[17] ; 
              $this->nmgp_dados_select['ie'] = $this->ie;
              $this->ibge = $rs->fields[18] ; 
              $this->nmgp_dados_select['ibge'] = $this->ibge;
              $this->status = $rs->fields[19] ; 
              $this->nmgp_dados_select['status'] = $this->status;
              $this->observacao = $rs->fields[20] ; 
              $this->nmgp_dados_select['observacao'] = $this->observacao;
              $this->insert_user = $rs->fields[21] ; 
              $this->nmgp_dados_select['insert_user'] = $this->insert_user;
              $this->insert_data = $rs->fields[22] ; 
              if (substr($this->insert_data, 10, 1) == "-") 
              { 
                 $this->insert_data = substr($this->insert_data, 0, 10) . " " . substr($this->insert_data, 11);
              } 
              if (substr($this->insert_data, 13, 1) == ".") 
              { 
                 $this->insert_data = substr($this->insert_data, 0, 13) . ":" . substr($this->insert_data, 14, 2) . ":" . substr($this->insert_data, 17);
              } 
              $this->nmgp_dados_select['insert_data'] = $this->insert_data;
              $this->update_user = $rs->fields[23] ; 
              $this->nmgp_dados_select['update_user'] = $this->update_user;
              $this->update_data = $rs->fields[24] ; 
              if (substr($this->update_data, 10, 1) == "-") 
              { 
                 $this->update_data = substr($this->update_data, 0, 10) . " " . substr($this->update_data, 11);
              } 
              if (substr($this->update_data, 13, 1) == ".") 
              { 
                 $this->update_data = substr($this->update_data, 0, 13) . ":" . substr($this->update_data, 14, 2) . ":" . substr($this->update_data, 17);
              } 
              $this->nmgp_dados_select['update_data'] = $this->update_data;
              $this->flag_produtor = $rs->fields[25] ; 
              $this->nmgp_dados_select['flag_produtor'] = $this->flag_produtor;
              $this->flag_representante = $rs->fields[26] ; 
              $this->nmgp_dados_select['flag_representante'] = $this->flag_representante;
              $this->flag_cliente = $rs->fields[27] ; 
              $this->nmgp_dados_select['flag_cliente'] = $this->flag_cliente;
              $this->flag_transportadora = $rs->fields[28] ; 
              $this->nmgp_dados_select['flag_transportadora'] = $this->flag_transportadora;
              $this->login = $rs->fields[29] ; 
              $this->nmgp_dados_select['login'] = $this->login;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->id_pessoa = (string)$this->id_pessoa; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['parms'] = "id_pessoa?#?$this->id_pessoa?@?";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->controle_navegacao();
          }
      } 
      if ($this->nmgp_opcao == "novo" || $this->nmgp_opcao == "refresh_insert") 
      { 
          $this->sc_evento_old = $this->sc_evento;
          $this->sc_evento = "novo";
          if ('refresh_insert' == $this->nmgp_opcao)
          {
              $this->nmgp_opcao = 'novo';
          }
          else
          {
              $this->nm_formatar_campos();
              $this->id_pessoa = "";  
              $this->nmgp_dados_form["id_pessoa"] = $this->id_pessoa;
              $this->nome_pessoa = "";  
              $this->nmgp_dados_form["nome_pessoa"] = $this->nome_pessoa;
              $this->razao_social = "";  
              $this->nmgp_dados_form["razao_social"] = $this->razao_social;
              $this->tipo_pessoa = "";  
              $this->nmgp_dados_form["tipo_pessoa"] = $this->tipo_pessoa;
              $this->cnpj = "";  
              $this->nmgp_dados_form["cnpj"] = $this->cnpj;
              $this->cpf = "";  
              $this->nmgp_dados_form["cpf"] = $this->cpf;
              $this->cep = "";  
              $this->nmgp_dados_form["cep"] = $this->cep;
              $this->endereco = "";  
              $this->nmgp_dados_form["endereco"] = $this->endereco;
              $this->num = "";  
              $this->nmgp_dados_form["num"] = $this->num;
              $this->complemento = "";  
              $this->nmgp_dados_form["complemento"] = $this->complemento;
              $this->bairro = "";  
              $this->nmgp_dados_form["bairro"] = $this->bairro;
              $this->cidade = "";  
              $this->nmgp_dados_form["cidade"] = $this->cidade;
              $this->uf = "";  
              $this->nmgp_dados_form["uf"] = $this->uf;
              $this->telefone = "";  
              $this->nmgp_dados_form["telefone"] = $this->telefone;
              $this->celular = "";  
              $this->nmgp_dados_form["celular"] = $this->celular;
              $this->email = "";  
              $this->nmgp_dados_form["email"] = $this->email;
              $this->site = "";  
              $this->nmgp_dados_form["site"] = $this->site;
              $this->ie = "";  
              $this->nmgp_dados_form["ie"] = $this->ie;
              $this->ibge = "";  
              $this->nmgp_dados_form["ibge"] = $this->ibge;
              $this->status = "";  
              $this->nmgp_dados_form["status"] = $this->status;
              $this->observacao = "";  
              $this->nmgp_dados_form["observacao"] = $this->observacao;
              $this->insert_user = "";  
              $this->nmgp_dados_form["insert_user"] = $this->insert_user;
              $this->insert_data = "";  
              $this->insert_data_hora = "" ;  
              $this->nmgp_dados_form["insert_data"] = $this->insert_data;
              $this->update_user = "";  
              $this->nmgp_dados_form["update_user"] = $this->update_user;
              $this->update_data = "";  
              $this->update_data_hora = "" ;  
              $this->nmgp_dados_form["update_data"] = $this->update_data;
              $this->flag_produtor = "";  
              $this->nmgp_dados_form["flag_produtor"] = $this->flag_produtor;
              $this->flag_representante = "";  
              $this->nmgp_dados_form["flag_representante"] = $this->flag_representante;
              $this->flag_cliente = "";  
              $this->nmgp_dados_form["flag_cliente"] = $this->flag_cliente;
              $this->flag_transportadora = "";  
              $this->nmgp_dados_form["flag_transportadora"] = $this->flag_transportadora;
              $this->login = "";  
              $this->nmgp_dados_form["login"] = $this->login;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
      }  
//
//
//-- 
      if ($this->nmgp_opcao != "novo") 
      {
      }
      if (!isset($this->nmgp_refresh_fields)) 
      { 
          $this->nm_proc_onload();
      }
  }
        function initializeRecordState() {
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function busca_cnpj()
{
$_SESSION['scriptcase']['form_pessoa']['contr_erro'] = 'on';
  
$this->cnpj = $this->cnpj ;
$webservice = "https://www.receitaws.com.br/v1/cnpj/".$this->cnpj;
$consulta = file_get_contents($webservice);
$retorno = json_decode($consulta,true);

if($retorno["status"] == "OK") {
	if($retorno["situacao"] == "ATIVA") {
		$this->razao_social  = $retorno["nome"];
		$this->nome_pessoa  = $retorno["nome"];
		$this->cep  = str_replace(".", "", str_replace("-", "", $retorno["cep"]));
		$this->endereco  = $retorno["logradouro"];
		$this->num  = $retorno["numero"];
		$this->complemento  = $retorno["complemento"];
		$this->bairro  = $retorno["bairro"];
		$this->cidade  = $retorno["municipio"];
		$this->uf  = $retorno["uf"];
		$this->telefone  = str_replace("(", "", str_replace(")", "", str_replace("-", "", $retorno["telefone"])));
		$this->email  = $retorno["email"];
		$this->status  = 'Ativa';
	} else {
		$this->nm_mens_alert[] = "Empresa inativa!"; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert("Empresa inativa!"); }}
} else {
	$this->nm_mens_alert[] = $retorno["message"]; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert($retorno["message"]); }}
$_SESSION['scriptcase']['form_pessoa']['contr_erro'] = 'off';
}
function cnpj_onChange()
{
$_SESSION['scriptcase']['form_pessoa']['contr_erro'] = 'on';
  
$original_cnpj = $this->cnpj;
$original_razao_social = $this->razao_social;
$original_nome_pessoa = $this->nome_pessoa;
$original_cep = $this->cep;
$original_endereco = $this->endereco;
$original_num = $this->num;
$original_complemento = $this->complemento;
$original_bairro = $this->bairro;
$original_cidade = $this->cidade;
$original_uf = $this->uf;
$original_telefone = $this->telefone;
$original_email = $this->email;

$this->busca_cnpj();

$modificado_cnpj = $this->cnpj;
$modificado_razao_social = $this->razao_social;
$modificado_nome_pessoa = $this->nome_pessoa;
$modificado_cep = $this->cep;
$modificado_endereco = $this->endereco;
$modificado_num = $this->num;
$modificado_complemento = $this->complemento;
$modificado_bairro = $this->bairro;
$modificado_cidade = $this->cidade;
$modificado_uf = $this->uf;
$modificado_telefone = $this->telefone;
$modificado_email = $this->email;
$this->nm_formatar_campos('cnpj', 'razao_social', 'nome_pessoa', 'cep', 'endereco', 'num', 'complemento', 'bairro', 'cidade', 'uf', 'telefone', 'email');
if ($original_cnpj !== $modificado_cnpj || isset($this->nmgp_cmp_readonly['cnpj']) || (isset($bFlagRead_cnpj) && $bFlagRead_cnpj))
{
    $this->ajax_return_values_cnpj(true);
}
if ($original_razao_social !== $modificado_razao_social || isset($this->nmgp_cmp_readonly['razao_social']) || (isset($bFlagRead_razao_social) && $bFlagRead_razao_social))
{
    $this->ajax_return_values_razao_social(true);
}
if ($original_nome_pessoa !== $modificado_nome_pessoa || isset($this->nmgp_cmp_readonly['nome_pessoa']) || (isset($bFlagRead_nome_pessoa) && $bFlagRead_nome_pessoa))
{
    $this->ajax_return_values_nome_pessoa(true);
}
if ($original_cep !== $modificado_cep || isset($this->nmgp_cmp_readonly['cep']) || (isset($bFlagRead_cep) && $bFlagRead_cep))
{
    $this->ajax_return_values_cep(true);
}
if ($original_endereco !== $modificado_endereco || isset($this->nmgp_cmp_readonly['endereco']) || (isset($bFlagRead_endereco) && $bFlagRead_endereco))
{
    $this->ajax_return_values_endereco(true);
}
if ($original_num !== $modificado_num || isset($this->nmgp_cmp_readonly['num']) || (isset($bFlagRead_num) && $bFlagRead_num))
{
    $this->ajax_return_values_num(true);
}
if ($original_complemento !== $modificado_complemento || isset($this->nmgp_cmp_readonly['complemento']) || (isset($bFlagRead_complemento) && $bFlagRead_complemento))
{
    $this->ajax_return_values_complemento(true);
}
if ($original_bairro !== $modificado_bairro || isset($this->nmgp_cmp_readonly['bairro']) || (isset($bFlagRead_bairro) && $bFlagRead_bairro))
{
    $this->ajax_return_values_bairro(true);
}
if ($original_cidade !== $modificado_cidade || isset($this->nmgp_cmp_readonly['cidade']) || (isset($bFlagRead_cidade) && $bFlagRead_cidade))
{
    $this->ajax_return_values_cidade(true);
}
if ($original_uf !== $modificado_uf || isset($this->nmgp_cmp_readonly['uf']) || (isset($bFlagRead_uf) && $bFlagRead_uf))
{
    $this->ajax_return_values_uf(true);
}
if ($original_telefone !== $modificado_telefone || isset($this->nmgp_cmp_readonly['telefone']) || (isset($bFlagRead_telefone) && $bFlagRead_telefone))
{
    $this->ajax_return_values_telefone(true);
}
if ($original_email !== $modificado_email || isset($this->nmgp_cmp_readonly['email']) || (isset($bFlagRead_email) && $bFlagRead_email))
{
    $this->ajax_return_values_email(true);
}
$this->NM_ajax_info['event_field'] = 'cnpj';
form_pessoa_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_pessoa']['contr_erro'] = 'off';
}
function css_form() {
$_SESSION['scriptcase']['form_pessoa']['contr_erro'] = 'on';
  
$aux = "
<style>

.scFormPage{margin: 10px 10px 10px 10px !important; Padding: 0px !important; background-image: none !important; background: #eef0f8 !important;}		
.scFormHeader{background-color: #ffffff!important; border-radius: 10px !important}
.scFormHeaderFont{Padding: 3px 10px !important; color: #252C36!important; font-size: 15px !important; font-weight: bold !important;}
.scFormTable{margin: 0px 8px 0px 8px !important; box-shadow: none !important; width: 98% !important;}
.scFormToolbarPadding{Padding:8px 8px 8px 8px !important;}
.scFormBlock{padding: 3px !important}
.scFormLabelOddMult{Padding: 10px 3px !important; background-color: #ffffff !important; border:1px !important; border-style: solid !important; box-shadow: none  !important; border-color: #ffffff #ffffff #e3eaef #ffffff !important}
.scFormDataOddMult{padding: 3px !important; border:1px !important; border-style: solid !important; box-shadow: none  !important; border-color: #e3eaef #ffffff #e3eaef #ffffff !important}
.scFormBorder{border-radius: 10px !important}

</style>";
return $aux;

$_SESSION['scriptcase']['form_pessoa']['contr_erro'] = 'off';
}
function css_grid() {
$_SESSION['scriptcase']['form_pessoa']['contr_erro'] = 'on';
  
$aux = "
<style>

.scGridPage{margin: 10px 10px 10px 10px !important; Padding: 0px !important; background-image: none !important; background: #eef0f8 !important;}
.scGridHeader{background-color: #ffffff!important; border-radius: 10px !important}
.scGridHeaderFont{Padding: 3px 10px !important; color: #252C36!important; font-size: 15px !important; font-weight: bold !important;}	
.scGridTable{margin: 0px 8px 0px 8px !important; box-shadow: none !important; background-image: none !important; background-color: #ffffff!important;}	
.scGridToolbarPadding{ Padding: 8px 8px 8px 8px !important;}
td#sc_grid_body{Padding: 8px !important;}	
.scGridLabelFont{Padding: 8px !important;background-color: #ffffff !important; border:1px !important; border-style: solid !important; box-shadow: none  !important; border-color: #ffffff #ffffff #e3eaef #ffffff !important}
.scGridToolbar{background-image: none !important; background-color: #ffffff!important; color: #ffffff!important;}



.scGridFieldOddFont{Padding: 8px !important;}
.scGridFieldEvenFont{Padding: 8px !important;}
.scGridBlock{Padding: 8px !important;}
#TB_window{top: 50% !important;} 
.scGridRefinedSearchLabel{background-color: #252C36!important;}
.scGridBlock{padding: 3px !important}
.scGridLabelFont{padding: 3px !important}
.scGridFieldEvenFont{padding: 3px !important}
.scGridFieldOddFont{padding: 3px !important}
.scGridBorder{border-radius: 10px !important}
.scGridSubtotalFont{text-align:right !important; Padding: 3px !important;font-weight: bold !important; color:#8492A6 !important}
.scGridTotalFont{text-align:right !important; Padding: 3px !important}


</style>";
return $aux;

$_SESSION['scriptcase']['form_pessoa']['contr_erro'] = 'off';
}
function css_filter() {
$_SESSION['scriptcase']['form_pessoa']['contr_erro'] = 'on';
  
$aux = "
<style>
.scFilterPage{margin: 0px 0px 0px 0px !important; background-image: none !important;}
.scFilterTable{ box-shadow: none !important; margin: 0px !important}
.scFilterToolbarPadding{ Padding: 8px !important;}
.scFilterBorder{box-shadow:none !important;}
.scFilterHeader{background-color: #252C36!important; border-color: #252C36!important;}
.scFilterHeaderFont{Padding: 3px !important; color: #252C36!important; font-size: 15px !important; font-weight: bold !important;}

</style>";
return $aux;

$_SESSION['scriptcase']['form_pessoa']['contr_erro'] = 'off';
}
//
 function nm_gera_html()
 {
    global
           $nm_url_saida, $nmgp_url_saida, $nm_saida_global, $nm_apl_dependente, $glo_subst, $sc_check_excl, $sc_check_incl, $nmgp_num_form, $NM_run_iframe;
     if ($this->Embutida_proc)
     {
         return;
     }
     if ($this->nmgp_form_show == 'off')
     {
         exit;
     }
      if (isset($NM_run_iframe) && $NM_run_iframe == 1)
      {
          $this->nmgp_botoes['exit'] = "off";
      }
     $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opc_ant'] = $this->nmgp_opcao;
     }
     else
     {
         $this->nmgp_opcao = $this->nmgp_opc_ant;
     }
     if (!empty($this->Campos_Mens_erro)) 
     {
         $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
         $this->Campos_Mens_erro = "";
     }
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_pessoa_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
    include_once("form_pessoa_form0.php");
        $this->hideFormPages();
 }

        function initFormPages() {
        } // initFormPages

        function hideFormPages() {
        } // hideFormPages

    function form_format_readonly($field, $value)
    {
        $result = $value;

        $this->form_highlight_search($result, $field, $value);

        return $result;
    }

    function form_highlight_search(&$result, $field, $value)
    {
        if ($this->proc_fast_search) {
            $this->form_highlight_search_quicksearch($result, $field, $value);
        }
    }

    function form_highlight_search_quicksearch(&$result, $field, $value)
    {
        $searchOk = false;
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array("id_pessoa", "cnpj", "nome_pessoa", "razao_social", "cep", "endereco", "num", "complemento", "bairro", "cidade", "uf", "telefone", "celular", "email", "site", "ie", "observacao", "login"))) {
            $searchOk = true;
        }
        elseif ($field == $this->nmgp_fast_search && in_array($field, array("id_pessoa", "cnpj", "nome_pessoa", "razao_social", "cep", "endereco", "num", "complemento", "bairro", "cidade", "uf", "telefone", "celular", "email", "site", "ie", "observacao", "login"))) {
            $searchOk = true;
        }

        if (!$searchOk || '' == $this->nmgp_arg_fast_search) {
            return;
        }

        $htmlIni = '<div class="highlight" style="background-color: #fafaca; display: inline-block">';
        $htmlFim = '</div>';

        if ('qp' == $this->nmgp_cond_fast_search) {
            $keywords = preg_quote($this->nmgp_arg_fast_search, '/');
            $result = preg_replace('/'. $keywords .'/i', $htmlIni . '$0' . $htmlFim, $result);
        } elseif ('eq' == $this->nmgp_cond_fast_search) {
            if (strcasecmp($this->nmgp_arg_fast_search, $value) == 0) {
                $result = $htmlIni. $result .$htmlFim;
            }
        }
    }


    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input

   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarTimeStart($sFormat)
   {
       $aDateParts = explode(';', $sFormat);

       if (2 == sizeof($aDateParts))
       {
           $sTime = $aDateParts[1];
       }
       else
       {
           $sTime = 'hh:mm:ss';
       }

       return str_replace(array('h', 'm', 'i', 's'), array('0', '0', '0', '0'), $sTime);
   } // jqueryCalendarTimeStart

   function jqueryCalendarWeekInit($sDay)
   {
       switch ($sDay) {
           case 'MO': return 1; break;
           case 'TU': return 2; break;
           case 'WE': return 3; break;
           case 'TH': return 4; break;
           case 'FR': return 5; break;
           case 'SA': return 6; break;
           default  : return 7; break;
       }
   } // jqueryCalendarWeekInit

   function jqueryIconFile($sModule)
   {
       $sImage = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && 'image' == $this->arr_buttons['bcalendario']['type'] && 'only_fontawesomeicon' != $this->arr_buttons['bcalendario']['display'])
           {
               $sImage = $this->arr_buttons['bcalendario']['image'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && 'image' == $this->arr_buttons['bcalculadora']['type'] && 'only_fontawesomeicon' != $this->arr_buttons['bcalculadora']['display'])
           {
               $sImage = $this->arr_buttons['bcalculadora']['image'];
           }
       }

       return '' == $sImage ? '' : $this->Ini->path_icones . '/' . $sImage;
   } // jqueryIconFile

   function jqueryFAFile($sModule)
   {
       $sFA = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && ('image' == $this->arr_buttons['bcalendario']['type'] || 'button' == $this->arr_buttons['bcalendario']['type']) && 'only_fontawesomeicon' == $this->arr_buttons['bcalendario']['display'])
           {
               $sFA = $this->arr_buttons['bcalendario']['fontawesomeicon'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && ('image' == $this->arr_buttons['bcalculadora']['type'] || 'button' == $this->arr_buttons['bcalculadora']['type']) && 'only_fontawesomeicon' == $this->arr_buttons['bcalculadora']['display'])
           {
               $sFA = $this->arr_buttons['bcalculadora']['fontawesomeicon'];
           }
       }

       return '' == $sFA ? '' : "<span class='scButton_fontawesome " . $sFA . "'></span>";
   } // jqueryFAFile

   function jqueryButtonText($sModule)
   {
       $sClass = '';
       $sText  = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && ('image' == $this->arr_buttons['bcalendario']['type'] || 'button' == $this->arr_buttons['bcalendario']['type']))
           {
               if ('only_text' == $this->arr_buttons['bcalendario']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   $sText  = $this->arr_buttons['bcalendario']['value'];
               }
               elseif ('text_fontawesomeicon' == $this->arr_buttons['bcalendario']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   if ('text_right' == $this->arr_buttons['bcalendario']['display_position'])
                   {
                       $sText = "<i class='icon_fa " . $this->arr_buttons['bcalendario']['fontawesomeicon'] . "'></i> " . $this->arr_buttons['bcalendario']['value'];
                   }
                   else
                   {
                       $sText = $this->arr_buttons['bcalendario']['value'] . " <i class='icon_fa " . $this->arr_buttons['bcalendario']['fontawesomeicon'] . "'></i>";
                   }
               }
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && ('image' == $this->arr_buttons['bcalculadora']['type'] || 'button' == $this->arr_buttons['bcalculadora']['type']))
           {
               if ('only_text' == $this->arr_buttons['bcalculadora']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   $sText  = $this->arr_buttons['bcalculadora']['value'];
               }
               elseif ('text_fontawesomeicon' == $this->arr_buttons['bcalculadora']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   if ('text_right' == $this->arr_buttons['bcalendario']['display_position'])
                   {
                       $sText = "<i class='icon_fa " . $this->arr_buttons['bcalculadora']['fontawesomeicon'] . "'></i> " . $this->arr_buttons['bcalculadora']['value'];
                   }
                   else
                   {
                       $sText = $this->arr_buttons['bcalculadora']['value'] . " <i class='icon_fa " . $this->arr_buttons['bcalculadora']['fontawesomeicon'] . "'></i> ";
                   }
               }
           }
       }

       return '' == $sText ? array('', '') : array($sText, $sClass);
   } // jqueryButtonText


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['csrf_token'];
    }

    function scCsrfGenerateToken()
    {
        $aSources = array(
            'abcdefghijklmnopqrstuvwxyz',
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            '1234567890',
            '!@$*()-_[]{},.;:'
        );

        $sRandom = '';

        $aSourcesSizes = array();
        $iSourceSize   = sizeof($aSources) - 1;
        for ($i = 0; $i <= $iSourceSize; $i++)
        {
            $aSourcesSizes[$i] = strlen($aSources[$i]) - 1;
        }

        for ($i = 0; $i < 64; $i++)
        {
            $iSource = $this->scCsrfRandom(0, $iSourceSize);
            $sRandom .= substr($aSources[$iSource], $this->scCsrfRandom(0, $aSourcesSizes[$iSource]), 1);
        }

        return $sRandom;
    }

    function scCsrfRandom($iMin, $iMax)
    {
        return mt_rand($iMin, $iMax);
    }

        function addUrlParam($url, $param, $value) {
                $urlParts  = explode('?', $url);
                $urlParams = isset($urlParts[1]) ? explode('&', $urlParts[1]) : array();
                $objParams = array();
                foreach ($urlParams as $paramInfo) {
                        $paramParts = explode('=', $paramInfo);
                        $objParams[ $paramParts[0] ] = isset($paramParts[1]) ? $paramParts[1] : '';
                }
                $objParams[$param] = $value;
                $urlParams = array();
                foreach ($objParams as $paramName => $paramValue) {
                        $urlParams[] = $paramName . '=' . $paramValue;
                }
                return $urlParts[0] . '?' . implode('&', $urlParams);
        }
 function allowedCharsCharset($charlist)
 {
     if ($_SESSION['scriptcase']['charset'] != 'UTF-8')
     {
         $charlist = NM_conv_charset($charlist, $_SESSION['scriptcase']['charset'], 'UTF-8');
     }
     return str_replace("'", "\'", $charlist);
 }

function sc_file_size($file, $format = false)
{
    if ('' == $file) {
        return '';
    }
    if (!@is_file($file)) {
        return '';
    }
    $fileSize = @filesize($file);
    if ($format) {
        $suffix = '';
        if (1024 >= $fileSize) {
            $fileSize /= 1024;
            $suffix    = ' KB';
        }
        if (1024 >= $fileSize) {
            $fileSize /= 1024;
            $suffix    = ' MB';
        }
        if (1024 >= $fileSize) {
            $fileSize /= 1024;
            $suffix    = ' GB';
        }
        $fileSize = $fileSize . $suffix;
    }
    return $fileSize;
}


 function new_date_format($type, $field)
 {
     $new_date_format_out = '';

     if ('DT' == $type)
     {
         $date_format  = $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = $this->field_config[$field]['date_display'];
         $time_format  = '';
         $time_sep     = '';
         $time_display = '';
     }
     elseif ('DH' == $type)
     {
         $date_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , 0, strpos($this->field_config[$field]['date_format'] , ';')) : $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], 0, strpos($this->field_config[$field]['date_display'], ';')) : $this->field_config[$field]['date_display'];
         $time_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , strpos($this->field_config[$field]['date_format'] , ';') + 1) : '';
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], strpos($this->field_config[$field]['date_display'], ';') + 1) : '';
     }
     elseif ('HH' == $type)
     {
         $date_format  = '';
         $date_sep     = '';
         $date_display = '';
         $time_format  = $this->field_config[$field]['date_format'];
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = $this->field_config[$field]['date_display'];
     }

     if ('DT' == $type || 'DH' == $type)
     {
         $date_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_format); $i++)
         {
             $char = strtolower(substr($date_format, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $date_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $date_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $disp_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_display); $i++)
         {
             $char = strtolower(substr($date_display, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $disp_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $disp_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $date_final = array();
         foreach ($date_array as $date_part)
         {
             if (in_array($date_part, $disp_array))
             {
                 $date_final[] = $date_part;
             }
         }

         $date_format = implode($date_sep, $date_final);
     }
     if ('HH' == $type || 'DH' == $type)
     {
         $time_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_format); $i++)
         {
             $char = strtolower(substr($time_format, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $time_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $time_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $disp_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_display); $i++)
         {
             $char = strtolower(substr($time_display, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $disp_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $disp_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $time_final = array();
         foreach ($time_array as $time_part)
         {
             if (in_array($time_part, $disp_array))
             {
                 $time_final[] = $time_part;
             }
         }

         $time_format = implode($time_sep, $time_final);
     }

     if ('DT' == $type)
     {
         $old_date_format = $date_format;
     }
     elseif ('DH' == $type)
     {
         $old_date_format = $date_format . ';' . $time_format;
     }
     elseif ('HH' == $type)
     {
         $old_date_format = $time_format;
     }

     for ($i = 0; $i < strlen($old_date_format); $i++)
     {
         $char = substr($old_date_format, $i, 1);
         if ('/' == $char)
         {
             $new_date_format_out .= $date_sep;
         }
         elseif (':' == $char)
         {
             $new_date_format_out .= $time_sep;
         }
         else
         {
             $new_date_format_out .= $char;
         }
     }

     $this->field_config[$field]['date_format'] = $new_date_format_out;
     if ('DH' == $type)
     {
         $new_date_format_out                                  = explode(';', $new_date_format_out);
         $this->field_config[$field]['date_format_js']        = $new_date_format_out[0];
         $this->field_config[$field . '_hora']['date_format'] = $new_date_format_out[1];
         $this->field_config[$field . '_hora']['time_sep']    = $this->field_config[$field]['time_sep'];
     }
 } // new_date_format

   function Form_lookup_login()
   {
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function SC_fast_search($in_fields, $arg_search, $data_search)
   {
      $fields = (strpos($in_fields, "SC_all_Cmp") !== false) ? array("SC_all_Cmp") : explode(";", $in_fields);
      $this->NM_case_insensitive = false;
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_pessoa_pack_ajax_response();
              exit;
          }
          return;
      }
      $comando = "";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($data_search))
      {
          $data_search = NM_conv_charset($data_search, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
      $sv_data = $data_search;
      foreach ($fields as $field) {
          if ($field == "SC_all_Cmp" || $field == "id_pessoa") 
          {
              $this->SC_monta_condicao($comando, "id_pessoa", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp" || $field == "cnpj") 
          {
              $this->SC_monta_condicao($comando, "cnpj", $arg_search, $data_search, "BPCHAR", false);
          }
          if ($field == "SC_all_Cmp" || $field == "nome_pessoa") 
          {
              $this->SC_monta_condicao($comando, "nome_pessoa", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp" || $field == "razao_social") 
          {
              $this->SC_monta_condicao($comando, "razao_social", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp" || $field == "cep") 
          {
              $this->SC_monta_condicao($comando, "cep", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp" || $field == "endereco") 
          {
              $this->SC_monta_condicao($comando, "endereco", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp" || $field == "num") 
          {
              $this->SC_monta_condicao($comando, "num", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp" || $field == "complemento") 
          {
              $this->SC_monta_condicao($comando, "complemento", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp" || $field == "bairro") 
          {
              $this->SC_monta_condicao($comando, "bairro", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp" || $field == "cidade") 
          {
              $this->SC_monta_condicao($comando, "cidade", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp" || $field == "uf") 
          {
              $this->SC_monta_condicao($comando, "uf", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp" || $field == "telefone") 
          {
              $this->SC_monta_condicao($comando, "telefone", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp" || $field == "celular") 
          {
              $this->SC_monta_condicao($comando, "celular", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp" || $field == "email") 
          {
              $this->SC_monta_condicao($comando, "email", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp" || $field == "site") 
          {
              $this->SC_monta_condicao($comando, "site", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp" || $field == "ie") 
          {
              $this->SC_monta_condicao($comando, "ie", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp" || $field == "observacao") 
          {
              $this->SC_monta_condicao($comando, "observacao", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp" || $field == "login") 
          {
              $data_lookup = $this->SC_lookup_login($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "login", $arg_search, $data_lookup, "VARCHAR", false);
              }
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_filter_form'] . " and (" . $comando . ")";
      }
      else
      {
         $sc_where = " where " . $comando;
      }
      $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_pessoa = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['total'] = $qt_geral_reg_form_pessoa;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_pessoa_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_pessoa_pack_ajax_response();
          exit;
      }
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="", $tp_unaccent=false)
   {
      $nm_aspas   = "'";
      $nm_aspas1  = "'";
      $nm_numeric = array();
      $Nm_datas   = array();
      $nm_esp_postgres = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = "";
      $nm_fim_lower = "";
      $Nm_accent = $this->Ini->Nm_accent_no;
      if ($tp_unaccent) {
          $Nm_accent = $this->Ini->Nm_accent_yes;
      }
      $nm_numeric[] = "id_pessoa";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['decimal_db'] == ".")
         {
             $nm_aspas  = "";
             $nm_aspas1 = "";
         }
         if (is_array($campo))
         {
             foreach ($campo as $Ind => $Cmp)
             {
                if (!is_numeric($Cmp))
                {
                    return;
                }
                if ($Cmp == "")
                {
                    $campo[$Ind] = 0;
                }
             }
         }
         else
         {
             if (!is_numeric($campo))
             {
                 return;
             }
             if ($campo == "")
             {
                $campo = 0;
             }
         }
      }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_esp_postgres) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS VARCHAR)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS VARCHAR(255))";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
      $Nm_datas["insert_data"] = "datetime";$Nm_datas["update_data"] = "datetime";
         if (isset($Nm_datas[$campo_join]))
         {
             for ($x = 0; $x < strlen($campo); $x++)
             {
                 $tst = substr($campo, $x, 1);
                 if (!is_numeric($tst) && ($tst != "-" && $tst != ":" && $tst != " "))
                 {
                     return;
                 }
             }
         }
          if (isset($Nm_datas[$campo_join]))
          {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
             $nm_aspas  = "#";
             $nm_aspas1 = "#";
          }
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['SC_sep_date1'];
              }
          }
      if (isset($Nm_datas[$campo_join]) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP" || strtoupper($condicao) == "DF"))
      {
          if (strtoupper($condicao) == "DF")
          {
              $condicao = "NP";
          }
          if (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD')";
          }
          elseif ($Nm_datas[$campo_join] == "time" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(10)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(19)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "times" || $Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $nome  = "TO_DATE(TO_CHAR(" . $nome . ", 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "datetime" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO FRACTION)";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO DAY)";
          }
          elseif ($Nm_datas[$campo_join] == "datetime" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD')";
          }
      }
         $comando .= (!empty($comando) ? " or " : "");
         if (is_array($campo))
         {
             $prep = "";
             foreach ($campo as $Ind => $Cmp)
             {
                 $prep .= (!empty($prep)) ? "," : "";
                 $Cmp   = substr($this->Db->qstr($Cmp), 1, -1);
                 $prep .= $nm_ini_lower . $nm_aspas . $Cmp . $nm_aspas1 . $nm_fim_lower;
             }
             $prep .= (empty($prep)) ? $nm_aspas . $nm_aspas1 : "";
             $comando .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $prep . ")";
             return;
         }
         $campo  = substr($this->Db->qstr($campo), 1, -1);
         $cond_tst = strtoupper($condicao);
         if ($cond_tst == "II" || $cond_tst == "QP" || $cond_tst == "NP")
         {
             if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && $this->NM_case_insensitive)
             {
                 $op_like      = " ilike ";
                 $nm_ini_lower = "";
                 $nm_fim_lower = "";
             }
             else
             {
                 $op_like = " like ";
             }
         }
         switch ($cond_tst)
         {
            case "EQ":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " = " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "II":     // 
               $comando        .= $nm_ini_lower . $Nm_accent['cmp_i'] . $nome . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . $op_like . $nm_ini_lower . "'" . $Nm_accent['arg_i'] . $campo . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
            break;
            case "QP":     // 
               $comando        .= $nm_ini_lower . $Nm_accent['cmp_i'] . $nome . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . $op_like . $nm_ini_lower . "'%" . $Nm_accent['arg_i'] . $campo . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
            break;
            case "NP":     // 
               $comando        .= $nm_ini_lower . $Nm_accent['cmp_i'] . $nome . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . " not" . $op_like . $nm_ini_lower . "'%" . $Nm_accent['arg_i'] . $campo . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
            break;
            case "DF":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "GT":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " > " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "GE":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " >= " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "LT":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " < " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "LE":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <= " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
         }
   }
   function SC_lookup_login($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT concat(login,'-',name), login FROM sec_users WHERE (#cmp_iconcat(login,'-',name)#cmp_f#cmp_apos LIKE '%#arg_i" . $campo . "#arg_f%'#arg_apos)" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "LIKE '#arg_i" . $campo . "#arg_f%'", $nm_comando);
       }
       if ($condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "NOT LIKE '%#arg_i" . $campo . "#arg_f%'", $nm_comando);
       }
       if ($condicao == "df")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "<> '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "> '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", ">= '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "< '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "<= '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       $nm_comando = str_replace(array('#cmp_i','#cmp_f','#cmp_apos','#arg_i','#arg_f','#arg_apos'), array('','','','','',''), $nm_comando); 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
function nmgp_redireciona($tipo=0)
{
   global $nm_apl_dependente;
   if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['scriptcase']['sc_tp_saida'] != "D" && $nm_apl_dependente != 1) 
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['nm_sc_retorno'];
   }
   else
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page];
   }
   if ($tipo == 2)
   {
       $nmgp_saida_form = "form_pessoa_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_pessoa_fim.php";
   }
   $diretorio = explode("/", $nmgp_saida_form);
   $cont = count($diretorio);
   $apl = $diretorio[$cont - 1];
   $apl = str_replace(".php", "", $apl);
   $pos = strpos($apl, "?");
   if ($pos !== false)
   {
       $apl = substr($apl, 0, $pos);
   }
   if ($tipo != 1 && $tipo != 2)
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page][$apl]['where_orig']);
   }
   if ($this->NM_ajax_flag)
   {
       $sTarget = '_self';
       $this->NM_ajax_info['redir']['metodo']              = 'post';
       $this->NM_ajax_info['redir']['action']              = $nmgp_saida_form;
       $this->NM_ajax_info['redir']['target']              = $sTarget;
       $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       if (0 == $tipo)
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida'] = $this->nm_location;
       }
       form_pessoa_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
   {
?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
   }

?>
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
    <link rel="shortcut icon" href="../_lib/img/grp__NM__bg__NM__cropped-Logo-SRC-32x32.png">
   </HEAD>
   <BODY>
   <FORM name="form_ok" method="POST" action="<?php echo $this->form_encode_input($nmgp_saida_form); ?>" target="_self">
<?php
   if ($tipo == 0)
   {
?>
     <INPUT type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($this->nm_location); ?>"> 
<?php
   }
?>
     <INPUT type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
   </FORM>
   <SCRIPT type="text/javascript">
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['masterValue']))
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
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
    function sc_ajax_alert($sMessage, $params = array())
    {
        if ($this->NM_ajax_flag)
        {
            $this->NM_ajax_info['ajaxAlert']['message'] = NM_charset_to_utf8($sMessage);
            $this->NM_ajax_info['ajaxAlert']['params']  = $this->sc_ajax_alert_params($params);
        }
    } // sc_ajax_alert

    function sc_ajax_alert_params($params)
    {
        $paramList = array();
        foreach ($params as $paramName => $paramValue)
        {
            if (in_array($paramName, array('title', 'timer', 'confirmButtonText', 'confirmButtonFA', 'confirmButtonFAPos', 'cancelButtonText', 'cancelButtonFA', 'cancelButtonFAPos', 'footer', 'width', 'padding', 'position')))
            {
                $paramList[$paramName] = NM_charset_to_utf8($paramValue);
            }
            elseif (in_array($paramName, array('showConfirmButton', 'showCancelButton', 'toast')) && in_array($paramValue, array(true, false)))
            {
                $paramList[$paramName] = NM_charset_to_utf8($paramValue);
            }
            elseif ('position' == $paramName && in_array($paramValue, array('top', 'top-start', 'top-end', 'center', 'center-start', 'center-end', 'bottom', 'bottom-start', 'bottom-end')))
            {
                $paramList[$paramName] = NM_charset_to_utf8($paramValue);
            }
            elseif ('type' == $paramName && in_array($paramValue, array('warning', 'error', 'success', 'info', 'question')))
            {
                $paramList[$paramName] = NM_charset_to_utf8($paramValue);
            }
            elseif ('background' == $paramName)
            {
                $paramList[$paramName] = $this->sc_ajax_alert_image(NM_charset_to_utf8($paramValue));
            }
        }
        return $paramList;
    } // sc_ajax_alert_params

    function sc_ajax_alert_image($background)
    {
        $image_param = $background;
        preg_match_all('/url\(([\s])?(["|\'])?(.*?)(["|\'])?([\s])?\)/i', $background, $matches, PREG_PATTERN_ORDER);
        if (isset($matches[3])) {
            foreach ($matches[3] as $match) {
                if ('http:' != substr($match, 0, 5) && 'https:' != substr($match, 0, 6) && '/' != substr($match, 0, 1)) {
                    $image_param = str_replace($match, "{$this->Ini->path_img_global}/{$match}", $image_param);
                }
            }
        }
        return $image_param;
    } // sc_ajax_alert_image
    function getButtonIds($buttonName) {
        switch ($buttonName) {
            case "new":
                return array("sc_b_new_t.sc-unique-btn-1");
                break;
            case "insert":
                return array("sc_b_ins_t.sc-unique-btn-2");
                break;
            case "update":
                return array("sc_b_upd_t.sc-unique-btn-3");
                break;
            case "delete":
                return array("sc_b_del_t.sc-unique-btn-4");
                break;
            case "help":
                return array("sc_b_hlp_t");
                break;
            case "exit":
                return array("sc_b_sai_t.sc-unique-btn-5", "sc_b_sai_t.sc-unique-btn-7", "sc_b_sai_t.sc-unique-btn-6");
                break;
        }

        return array($buttonName);
    } // getButtonIds

    function displayAppHeader()
    {
        if ($this->Embutida_call) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['mostra_cab']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['mostra_cab'] == "N") {
            return;
        }
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['under_dashboard'] && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['compact_mode'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['dashboard_info']['maximized']) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['link_info']['compact_mode']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['link_info']['compact_mode']) {
            return;
        }
?>
    <tr><td class="sc-app-header">
<style>
#lin1_col1 { padding-left:9px; padding-top:7px;  height:27px; overflow:hidden; text-align:left;}			 
#lin1_col2 { padding-right:9px; padding-top:7px; height:27px; text-align:right; overflow:hidden;   font-size:12px; font-weight:normal;}
</style>

<div style="width: 100%">
 <div class="scFormHeader" style="height:11px; display: block; border-width:0px; "></div>
 <div style="height:37px; background-color:#FFFFFF; border-width:0px 0px 1px 0px;  border-style: dashed; border-color:#ddd; display: block">
 	<table style="width:100%; border-collapse:collapse; padding:0;">
    	<tr>
        	<td id="lin1_col1" class="scFormHeaderFont"><span><?php if ($this->nmgp_opcao == "novo") { echo "Pessoa"; } else { echo "Pessoa"; } ?></span></td>
            <td id="lin1_col2" class="scFormHeaderFont"><span></span></td>
        </tr>
    </table>		 
 </div>
</div>

    </td></tr>
<?php
    }

    function displayAppFooter()
    {
    }

    function displayAppToolbars()
    {
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['run_iframe'] != "R") {
        } else {
            return false;
        }
        return true;
    } // displayAppToolbars

    function displayTopToolbar()
    {
        if (!$this->displayAppToolbars()) {
            return;
        }
    } // displayTopToolbar

    function displayBottomToolbar()
    {
        if (!$this->displayAppToolbars()) {
            return;
        }
    } // displayBottomToolbar

    function scGetColumnOrderRule($fieldName, &$orderColName, &$orderColOrient, &$orderColRule)
    {
        $sortRule = 'nosort';
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pessoa']['ordem_ord'] == " desc") {
                $orderColOrient = $nome_img = $this->Ini->Label_sort_desc;
                $orderColRule = $sortRule = 'desc';
            } else {
                $orderColOrient = $nome_img = $this->Ini->Label_sort_asc;
                $orderColRule = $sortRule = 'asc';
            }
        }
        return $sortRule;
    }

    function scGetColumnOrderIcon($fieldName, $sortRule)
    {        if ($this->scIsFieldNumeric($fieldName)) {
            $defaultOffIcon = 'asc' == $this->scGetDefaultFieldOrder($fieldName) ? "fas fa-sort-numeric-down" : "fas fa-sort-numeric-down-alt";
            if ('desc' == $sortRule) {
                return "<span class=\"fas fa-sort-numeric-down-alt sc-form-order-icon\"></span>";
            } elseif ('asc' == $sortRule) {
                return "<span class=\"fas fa-sort-numeric-down sc-form-order-icon\"></span>";
            } else {
                return "<span class=\"" . $defaultOffIcon . " sc-form-order-icon sc-form-order-icon-unused\"></span>";
            }
        } else {
            $defaultOffIcon = 'asc' == $this->scGetDefaultFieldOrder($fieldName) ? "fas fa-sort-alpha-down" : "fas fa-sort-alpha-down-alt";
            if ('desc' == $sortRule) {
                return "<span class=\"fas fa-sort-alpha-down-alt sc-form-order-icon\"></span>";
            } elseif ('asc' == $sortRule) {
                return "<span class=\"fas fa-sort-alpha-down sc-form-order-icon\"></span>";
            } else {
                return "<span class=\"" . $defaultOffIcon . " sc-form-order-icon sc-form-order-icon-unused\"></span>";
            }
        }
    }

    function scIsFieldNumeric($fieldName)
    {
        switch ($fieldName) {
            case "id_pessoa":
                return true;
            default:
                return false;
        }
        return false;
    }

    function scGetDefaultFieldOrder($fieldName)
    {
        switch ($fieldName) {
            case "id_pessoa":
                return 'desc';
            case "insert_data":
                return 'desc';
            case "update_data":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>