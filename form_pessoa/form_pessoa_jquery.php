
function scJQGeneralAdd() {
  scLoadScInput('input:text.sc-js-input');
  scLoadScInput('input:password.sc-js-input');
  scLoadScInput('input:checkbox.sc-js-input');
  scLoadScInput('input:radio.sc-js-input');
  scLoadScInput('select.sc-js-input');
  scLoadScInput('textarea.sc-js-input');

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if ($("#id_ac_" + sField).length > 0) {
    if ($oField.hasClass("select2-hidden-accessible")) {
      if (false == scSetFocusOnField($oField)) {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
    else {
      if (false == scSetFocusOnField($oField)) {
        if (false == scSetFocusOnField($("#id_ac_" + sField))) {
          setTimeout(function() { scSetFocusOnField($("#id_ac_" + sField)); }, 500);
        }
      }
      else {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
  }
  else {
    setTimeout(function() { scSetFocusOnField($oField); }, 500);
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["id_pessoa" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cnpj" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nome_pessoa" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["razao_social" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cep" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["endereco" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["num" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["complemento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["bairro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cidade" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["uf" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["telefone" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["celular" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["site" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ie" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["observacao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["login" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["id_pessoa" + iSeqRow] && scEventControl_data["id_pessoa" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_pessoa" + iSeqRow] && scEventControl_data["id_pessoa" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cnpj" + iSeqRow] && scEventControl_data["cnpj" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cnpj" + iSeqRow] && scEventControl_data["cnpj" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nome_pessoa" + iSeqRow] && scEventControl_data["nome_pessoa" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nome_pessoa" + iSeqRow] && scEventControl_data["nome_pessoa" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["razao_social" + iSeqRow] && scEventControl_data["razao_social" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["razao_social" + iSeqRow] && scEventControl_data["razao_social" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cep" + iSeqRow] && scEventControl_data["cep" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cep" + iSeqRow] && scEventControl_data["cep" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["endereco" + iSeqRow] && scEventControl_data["endereco" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["endereco" + iSeqRow] && scEventControl_data["endereco" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["num" + iSeqRow] && scEventControl_data["num" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["num" + iSeqRow] && scEventControl_data["num" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["complemento" + iSeqRow] && scEventControl_data["complemento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["complemento" + iSeqRow] && scEventControl_data["complemento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["bairro" + iSeqRow] && scEventControl_data["bairro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["bairro" + iSeqRow] && scEventControl_data["bairro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cidade" + iSeqRow] && scEventControl_data["cidade" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cidade" + iSeqRow] && scEventControl_data["cidade" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["uf" + iSeqRow] && scEventControl_data["uf" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["uf" + iSeqRow] && scEventControl_data["uf" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["telefone" + iSeqRow] && scEventControl_data["telefone" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["telefone" + iSeqRow] && scEventControl_data["telefone" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["celular" + iSeqRow] && scEventControl_data["celular" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["celular" + iSeqRow] && scEventControl_data["celular" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["email" + iSeqRow] && scEventControl_data["email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["email" + iSeqRow] && scEventControl_data["email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["site" + iSeqRow] && scEventControl_data["site" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["site" + iSeqRow] && scEventControl_data["site" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ie" + iSeqRow] && scEventControl_data["ie" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ie" + iSeqRow] && scEventControl_data["ie" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["observacao" + iSeqRow] && scEventControl_data["observacao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["observacao" + iSeqRow] && scEventControl_data["observacao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["login" + iSeqRow] && scEventControl_data["login" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["login" + iSeqRow] && scEventControl_data["login" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("login" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("cnpj" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val() || scEventControl_data[sFieldName]["calculated"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_id_pessoa' + iSeqRow).bind('blur', function() { sc_form_pessoa_id_pessoa_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_pessoa_id_pessoa_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_pessoa_id_pessoa_onfocus(this, iSeqRow) });
  $('#id_sc_field_nome_pessoa' + iSeqRow).bind('blur', function() { sc_form_pessoa_nome_pessoa_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_pessoa_nome_pessoa_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_pessoa_nome_pessoa_onfocus(this, iSeqRow) });
  $('#id_sc_field_razao_social' + iSeqRow).bind('blur', function() { sc_form_pessoa_razao_social_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_pessoa_razao_social_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_pessoa_razao_social_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipo_pessoa' + iSeqRow).bind('change', function() { sc_form_pessoa_tipo_pessoa_onchange(this, iSeqRow) });
  $('#id_sc_field_cnpj' + iSeqRow).bind('blur', function() { sc_form_pessoa_cnpj_onblur(this, iSeqRow) })
                                  .bind('change', function() { sc_form_pessoa_cnpj_onchange(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_pessoa_cnpj_onfocus(this, iSeqRow) });
  $('#id_sc_field_cpf' + iSeqRow).bind('change', function() { sc_form_pessoa_cpf_onchange(this, iSeqRow) });
  $('#id_sc_field_cep' + iSeqRow).bind('blur', function() { sc_form_pessoa_cep_onblur(this, iSeqRow) })
                                 .bind('change', function() { sc_form_pessoa_cep_onchange(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_pessoa_cep_onfocus(this, iSeqRow) });
  $('#id_sc_field_endereco' + iSeqRow).bind('blur', function() { sc_form_pessoa_endereco_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_pessoa_endereco_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_pessoa_endereco_onfocus(this, iSeqRow) });
  $('#id_sc_field_num' + iSeqRow).bind('blur', function() { sc_form_pessoa_num_onblur(this, iSeqRow) })
                                 .bind('change', function() { sc_form_pessoa_num_onchange(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_pessoa_num_onfocus(this, iSeqRow) });
  $('#id_sc_field_complemento' + iSeqRow).bind('blur', function() { sc_form_pessoa_complemento_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_pessoa_complemento_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_pessoa_complemento_onfocus(this, iSeqRow) });
  $('#id_sc_field_bairro' + iSeqRow).bind('blur', function() { sc_form_pessoa_bairro_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_pessoa_bairro_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_pessoa_bairro_onfocus(this, iSeqRow) });
  $('#id_sc_field_cidade' + iSeqRow).bind('blur', function() { sc_form_pessoa_cidade_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_pessoa_cidade_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_pessoa_cidade_onfocus(this, iSeqRow) });
  $('#id_sc_field_uf' + iSeqRow).bind('blur', function() { sc_form_pessoa_uf_onblur(this, iSeqRow) })
                                .bind('change', function() { sc_form_pessoa_uf_onchange(this, iSeqRow) })
                                .bind('focus', function() { sc_form_pessoa_uf_onfocus(this, iSeqRow) });
  $('#id_sc_field_telefone' + iSeqRow).bind('blur', function() { sc_form_pessoa_telefone_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_pessoa_telefone_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_pessoa_telefone_onfocus(this, iSeqRow) });
  $('#id_sc_field_celular' + iSeqRow).bind('blur', function() { sc_form_pessoa_celular_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_pessoa_celular_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_pessoa_celular_onfocus(this, iSeqRow) });
  $('#id_sc_field_email' + iSeqRow).bind('blur', function() { sc_form_pessoa_email_onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_pessoa_email_onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_pessoa_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_site' + iSeqRow).bind('blur', function() { sc_form_pessoa_site_onblur(this, iSeqRow) })
                                  .bind('change', function() { sc_form_pessoa_site_onchange(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_pessoa_site_onfocus(this, iSeqRow) });
  $('#id_sc_field_ie' + iSeqRow).bind('blur', function() { sc_form_pessoa_ie_onblur(this, iSeqRow) })
                                .bind('change', function() { sc_form_pessoa_ie_onchange(this, iSeqRow) })
                                .bind('focus', function() { sc_form_pessoa_ie_onfocus(this, iSeqRow) });
  $('#id_sc_field_ibge' + iSeqRow).bind('change', function() { sc_form_pessoa_ibge_onchange(this, iSeqRow) });
  $('#id_sc_field_status' + iSeqRow).bind('change', function() { sc_form_pessoa_status_onchange(this, iSeqRow) });
  $('#id_sc_field_observacao' + iSeqRow).bind('blur', function() { sc_form_pessoa_observacao_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_pessoa_observacao_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_pessoa_observacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_insert_user' + iSeqRow).bind('change', function() { sc_form_pessoa_insert_user_onchange(this, iSeqRow) });
  $('#id_sc_field_insert_data' + iSeqRow).bind('change', function() { sc_form_pessoa_insert_data_onchange(this, iSeqRow) });
  $('#id_sc_field_insert_data_hora' + iSeqRow).bind('change', function() { sc_form_pessoa_insert_data_hora_onchange(this, iSeqRow) });
  $('#id_sc_field_update_user' + iSeqRow).bind('change', function() { sc_form_pessoa_update_user_onchange(this, iSeqRow) });
  $('#id_sc_field_update_data' + iSeqRow).bind('change', function() { sc_form_pessoa_update_data_onchange(this, iSeqRow) });
  $('#id_sc_field_update_data_hora' + iSeqRow).bind('change', function() { sc_form_pessoa_update_data_hora_onchange(this, iSeqRow) });
  $('#id_sc_field_flag_produtor' + iSeqRow).bind('change', function() { sc_form_pessoa_flag_produtor_onchange(this, iSeqRow) });
  $('#id_sc_field_flag_representante' + iSeqRow).bind('change', function() { sc_form_pessoa_flag_representante_onchange(this, iSeqRow) });
  $('#id_sc_field_flag_cliente' + iSeqRow).bind('change', function() { sc_form_pessoa_flag_cliente_onchange(this, iSeqRow) });
  $('#id_sc_field_flag_transportadora' + iSeqRow).bind('change', function() { sc_form_pessoa_flag_transportadora_onchange(this, iSeqRow) });
  $('#id_sc_field_login' + iSeqRow).bind('blur', function() { sc_form_pessoa_login_onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_pessoa_login_onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_pessoa_login_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_pessoa_id_pessoa_onblur(oThis, iSeqRow) {
  do_ajax_form_pessoa_validate_id_pessoa();
  scCssBlur(oThis);
}

function sc_form_pessoa_id_pessoa_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_id_pessoa_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pessoa_nome_pessoa_onblur(oThis, iSeqRow) {
  do_ajax_form_pessoa_validate_nome_pessoa();
  scCssBlur(oThis);
}

function sc_form_pessoa_nome_pessoa_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_nome_pessoa_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pessoa_razao_social_onblur(oThis, iSeqRow) {
  do_ajax_form_pessoa_validate_razao_social();
  scCssBlur(oThis);
}

function sc_form_pessoa_razao_social_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_razao_social_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pessoa_tipo_pessoa_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_cnpj_onblur(oThis, iSeqRow) {
  do_ajax_form_pessoa_validate_cnpj();
  scCssBlur(oThis);
}

function sc_form_pessoa_cnpj_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_pessoa_event_cnpj_onchange();
}

function sc_form_pessoa_cnpj_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pessoa_cpf_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_cep_onblur(oThis, iSeqRow) {
  do_ajax_form_pessoa_validate_cep();
  scCssBlur(oThis);
}

function sc_form_pessoa_cep_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_cep_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pessoa_endereco_onblur(oThis, iSeqRow) {
  do_ajax_form_pessoa_validate_endereco();
  scCssBlur(oThis);
}

function sc_form_pessoa_endereco_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_endereco_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pessoa_num_onblur(oThis, iSeqRow) {
  do_ajax_form_pessoa_validate_num();
  scCssBlur(oThis);
}

function sc_form_pessoa_num_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_num_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pessoa_complemento_onblur(oThis, iSeqRow) {
  do_ajax_form_pessoa_validate_complemento();
  scCssBlur(oThis);
}

function sc_form_pessoa_complemento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_complemento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pessoa_bairro_onblur(oThis, iSeqRow) {
  do_ajax_form_pessoa_validate_bairro();
  scCssBlur(oThis);
}

function sc_form_pessoa_bairro_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_bairro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pessoa_cidade_onblur(oThis, iSeqRow) {
  do_ajax_form_pessoa_validate_cidade();
  scCssBlur(oThis);
}

function sc_form_pessoa_cidade_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_cidade_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pessoa_uf_onblur(oThis, iSeqRow) {
  do_ajax_form_pessoa_validate_uf();
  scCssBlur(oThis);
}

function sc_form_pessoa_uf_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_uf_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pessoa_telefone_onblur(oThis, iSeqRow) {
  do_ajax_form_pessoa_validate_telefone();
  scCssBlur(oThis);
}

function sc_form_pessoa_telefone_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_telefone_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pessoa_celular_onblur(oThis, iSeqRow) {
  do_ajax_form_pessoa_validate_celular();
  scCssBlur(oThis);
}

function sc_form_pessoa_celular_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_celular_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pessoa_email_onblur(oThis, iSeqRow) {
  do_ajax_form_pessoa_validate_email();
  scCssBlur(oThis);
}

function sc_form_pessoa_email_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pessoa_site_onblur(oThis, iSeqRow) {
  do_ajax_form_pessoa_validate_site();
  scCssBlur(oThis);
}

function sc_form_pessoa_site_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_site_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pessoa_ie_onblur(oThis, iSeqRow) {
  do_ajax_form_pessoa_validate_ie();
  scCssBlur(oThis);
}

function sc_form_pessoa_ie_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_ie_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pessoa_ibge_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_status_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_observacao_onblur(oThis, iSeqRow) {
  do_ajax_form_pessoa_validate_observacao();
  scCssBlur(oThis);
}

function sc_form_pessoa_observacao_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_observacao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pessoa_insert_user_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_insert_data_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_insert_data_hora_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_update_user_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_update_data_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_update_data_hora_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_flag_produtor_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_flag_representante_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_flag_cliente_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_flag_transportadora_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_login_onblur(oThis, iSeqRow) {
  do_ajax_form_pessoa_validate_login();
  scCssBlur(oThis);
}

function sc_form_pessoa_login_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pessoa_login_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("id_pessoa", "", status);
	displayChange_field("cnpj", "", status);
	displayChange_field("nome_pessoa", "", status);
	displayChange_field("razao_social", "", status);
	displayChange_field("cep", "", status);
	displayChange_field("endereco", "", status);
	displayChange_field("num", "", status);
	displayChange_field("complemento", "", status);
	displayChange_field("bairro", "", status);
	displayChange_field("cidade", "", status);
	displayChange_field("uf", "", status);
	displayChange_field("telefone", "", status);
	displayChange_field("celular", "", status);
	displayChange_field("email", "", status);
	displayChange_field("site", "", status);
	displayChange_field("ie", "", status);
	displayChange_field("observacao", "", status);
	displayChange_field("login", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_id_pessoa(row, status);
	displayChange_field_cnpj(row, status);
	displayChange_field_nome_pessoa(row, status);
	displayChange_field_razao_social(row, status);
	displayChange_field_cep(row, status);
	displayChange_field_endereco(row, status);
	displayChange_field_num(row, status);
	displayChange_field_complemento(row, status);
	displayChange_field_bairro(row, status);
	displayChange_field_cidade(row, status);
	displayChange_field_uf(row, status);
	displayChange_field_telefone(row, status);
	displayChange_field_celular(row, status);
	displayChange_field_email(row, status);
	displayChange_field_site(row, status);
	displayChange_field_ie(row, status);
	displayChange_field_observacao(row, status);
	displayChange_field_login(row, status);
}

function displayChange_field(field, row, status) {
	if ("id_pessoa" == field) {
		displayChange_field_id_pessoa(row, status);
	}
	if ("cnpj" == field) {
		displayChange_field_cnpj(row, status);
	}
	if ("nome_pessoa" == field) {
		displayChange_field_nome_pessoa(row, status);
	}
	if ("razao_social" == field) {
		displayChange_field_razao_social(row, status);
	}
	if ("cep" == field) {
		displayChange_field_cep(row, status);
	}
	if ("endereco" == field) {
		displayChange_field_endereco(row, status);
	}
	if ("num" == field) {
		displayChange_field_num(row, status);
	}
	if ("complemento" == field) {
		displayChange_field_complemento(row, status);
	}
	if ("bairro" == field) {
		displayChange_field_bairro(row, status);
	}
	if ("cidade" == field) {
		displayChange_field_cidade(row, status);
	}
	if ("uf" == field) {
		displayChange_field_uf(row, status);
	}
	if ("telefone" == field) {
		displayChange_field_telefone(row, status);
	}
	if ("celular" == field) {
		displayChange_field_celular(row, status);
	}
	if ("email" == field) {
		displayChange_field_email(row, status);
	}
	if ("site" == field) {
		displayChange_field_site(row, status);
	}
	if ("ie" == field) {
		displayChange_field_ie(row, status);
	}
	if ("observacao" == field) {
		displayChange_field_observacao(row, status);
	}
	if ("login" == field) {
		displayChange_field_login(row, status);
	}
}

function displayChange_field_id_pessoa(row, status) {
    var fieldId;
}

function displayChange_field_cnpj(row, status) {
    var fieldId;
}

function displayChange_field_nome_pessoa(row, status) {
    var fieldId;
}

function displayChange_field_razao_social(row, status) {
    var fieldId;
}

function displayChange_field_cep(row, status) {
    var fieldId;
}

function displayChange_field_endereco(row, status) {
    var fieldId;
}

function displayChange_field_num(row, status) {
    var fieldId;
}

function displayChange_field_complemento(row, status) {
    var fieldId;
}

function displayChange_field_bairro(row, status) {
    var fieldId;
}

function displayChange_field_cidade(row, status) {
    var fieldId;
}

function displayChange_field_uf(row, status) {
    var fieldId;
}

function displayChange_field_telefone(row, status) {
    var fieldId;
}

function displayChange_field_celular(row, status) {
    var fieldId;
}

function displayChange_field_email(row, status) {
    var fieldId;
}

function displayChange_field_site(row, status) {
    var fieldId;
}

function displayChange_field_ie(row, status) {
    var fieldId;
}

function displayChange_field_observacao(row, status) {
    var fieldId;
}

function displayChange_field_login(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_login__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_login" + row).select2("destroy");
		}
		scJQSelect2Add(row, "login");
	}
}

function scRecreateSelect2() {
	displayChange_field_login("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_pessoa_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(19);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_insert_data" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_insert_data" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['insert_data']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['insert_data']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime)
<?php
if ('' != $miniCalendarFA) {
?>
    .next('button').append("<?php echo $miniCalendarFA; ?>")
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    .next('button').append("<?php echo $miniCalendarButton[0]; ?>")
<?php
}
?>
    },
    onClose: function(dateText, inst) {
      do_ajax_form_pessoa_validate_insert_data(iSeqRow);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['insert_data']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  })
<?php
if ('' != $miniCalendarFA) {
?>
    .next('button').append("<?php echo $miniCalendarFA; ?>")
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    .next('button').append("<?php echo $miniCalendarButton[0]; ?>")
<?php
}
?>
  $("#id_sc_field_update_data" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_update_data" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['update_data']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['update_data']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime)
<?php
if ('' != $miniCalendarFA) {
?>
    .next('button').append("<?php echo $miniCalendarFA; ?>")
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    .next('button').append("<?php echo $miniCalendarButton[0]; ?>")
<?php
}
?>
    },
    onClose: function(dateText, inst) {
      do_ajax_form_pessoa_validate_update_data(iSeqRow);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['update_data']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  })
<?php
if ('' != $miniCalendarFA) {
?>
    .next('button').append("<?php echo $miniCalendarFA; ?>")
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    .next('button').append("<?php echo $miniCalendarButton[0]; ?>")
<?php
}
?>
} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd

var api_cache_requests = [];
function ajax_check_file(img_name, field  ,t, p, p_cache, iSeqRow, hasRun, img_before){
    setTimeout(function(){
        if(img_name == '') return;
        iSeqRow= iSeqRow !== undefined && iSeqRow !== null ? iSeqRow : '';
        var hasVar = p.indexOf('_@NM@_') > -1 || p_cache.indexOf('_@NM@_') > -1 ? true : false;

        p = p.split('_@NM@_');
        $.each(p, function(i,v){
            try{
                p[i] = $('[name='+v+iSeqRow+']').val();
            }
            catch(err){
                p[i] = v;
            }
        });
        p = p.join('');

        p_cache = p_cache.split('_@NM@_');
        $.each(p_cache, function(i,v){
            try{
                p_cache[i] = $('[name='+v+iSeqRow+']').val();
            }
            catch(err){
                p_cache[i] = v;
            }
        });
        p_cache = p_cache.join('');

        img_before = img_before !== undefined ? img_before : $(t).attr('src');
        var str_key_cache = '<?php echo $this->Ini->sc_page; ?>' + img_name+field+p+p_cache;
        if(api_cache_requests[ str_key_cache ] !== undefined && api_cache_requests[ str_key_cache ] !== null){
            if(api_cache_requests[ str_key_cache ] != false){
                do_ajax_check_file(api_cache_requests[ str_key_cache ], field  ,t, iSeqRow);
            }
            return;
        }
        //scAjaxProcOn();
        $(t).attr('src', '<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif');
        api_cache_requests[ str_key_cache ] = false;
        var rs =$.ajax({
                    type: "POST",
                    url: 'index.php?script_case_init=<?php echo $this->Ini->sc_page; ?>',
                    async: true,
                    data:'nmgp_opcao=ajax_check_file&AjaxCheckImg=' + encodeURI(img_name) +'&rsargs='+ field + '&p=' + p + '&p_cache=' + p_cache,
                    success: function (rs) {
                        if(rs.indexOf('</span>') != -1){
                            rs = rs.substr(rs.indexOf('</span>') + 7);
                        }
                        if(rs.indexOf('/') != -1 && rs.indexOf('/') != 0){
                            rs = rs.substr(rs.indexOf('/'));
                        }
                        rs = sc_trim(rs);

                        // if(rs == 0 && hasVar && hasRun === undefined){
                        //     delete window.api_cache_requests[ str_key_cache ];
                        //     ajax_check_file(img_name, field  ,t, p, p_cache, iSeqRow, 1, img_before);
                        //     return;
                        // }
                        window.api_cache_requests[ str_key_cache ] = rs;
                        do_ajax_check_file(rs, field  ,t, iSeqRow)
                        if(rs == 0){
                            delete window.api_cache_requests[ str_key_cache ];

                           // $(t).attr('src',img_before);
                            do_ajax_check_file(img_before+'_@@NM@@_' + img_before, field  ,t, iSeqRow)

                        }


                    }
        });
    },100);
}

function do_ajax_check_file(rs, field  ,t, iSeqRow){
    if (rs != 0) {
        rs_split = rs.split('_@@NM@@_');
        rs_orig = rs_split[0];
        rs2 = rs_split[1];
        try{
            if(!$(t).is('img')){

                if($('#id_read_on_'+field+iSeqRow).length > 0 ){
                                    var usa_read_only = false;

                switch(field){

                }
                     if(usa_read_only && $('a',$('#id_read_on_'+field+iSeqRow)).length == 0){
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_pessoa')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
                     }
                }
                if($('#id_ajax_doc_'+field+iSeqRow+' a').length > 0){
                    var target = $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href').split(',');
                    target[1] = "'"+rs2+"'";
                    $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href', target.join(','));
                }else{
                    var target = $(t).attr('href').split(',');
                     target[1] = "'"+rs2+"'";
                     $(t).attr('href', target.join(','));
                }
            }else{
                $(t).attr('src', rs2);
                $(t).css('display', '');
                if($('#id_ajax_doc_'+field+iSeqRow+' a').length > 0){
                    var target = $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href').split(',');
                    target[1] = "'"+rs2+"'";
                    $(t).attr('href', target.join(','));
                }else{
                     var t_link = $(t).parent('a');
                     var target = $(t_link).attr('href').split(',');
                     target[0] = "javascript:nm_mostra_img('"+rs_orig+"'";
                     $(t_link).attr('href', target.join(','));
                }

            }
            eval("window.var_ajax_img_"+field+iSeqRow+" = '"+rs_orig+"';");

        } catch(err){
                        eval("window.var_ajax_img_"+field+iSeqRow+" = '"+rs_orig+"';");

        }
    }
   /* hasFalseCacheRequest = false;
    $.each(api_cache_requests, function(i,v){
        if(v == false){
            hasFalseCacheRequest = true;
        }
    });
    if(hasFalseCacheRequest == false){
        scAjaxProcOff();
    }*/
}

$(document).ready(function(){
});

function scJQPasswordToggleAdd(seqRow) {
  $(".sc-ui-pwd-toggle-icon" + seqRow).on("click", function() {
    var fieldName = $(this).attr("id").substr(17), fieldObj = $("#id_sc_field_" + fieldName), fieldFA = $("#id_pwd_fa_" + fieldName);
    if ("text" == fieldObj.attr("type")) {
      fieldObj.attr("type", "password");
      fieldFA.attr("class", "fa fa-eye sc-ui-pwd-eye");
    } else {
      fieldObj.attr("type", "text");
      fieldFA.attr("class", "fa fa-eye-slash sc-ui-pwd-eye");
    }
  });
} // scJQPasswordToggleAdd

function scJQSelect2Add(seqRow, specificField) {
  if (null == specificField || "login" == specificField) {
    scJQSelect2Add_login(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_login(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_login_obj" : "#id_sc_field_login" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_login_obj',
      dropdownCssClass: 'css_login_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
  scJQPasswordToggleAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_login) { displayChange_field_login(iLine, "on"); } }, 150);
} // scJQElementsAdd

function scGetFileExtension(fileName)
{
    fileNameParts = fileName.split(".");

    if (1 === fileNameParts.length || (2 === fileNameParts.length && "" == fileNameParts[0])) {
        return "";
    }

    return fileNameParts.pop().toLowerCase();
}

function scFormatExtensionSizeErrorMsg(errorMsg)
{
    var msgInfo = errorMsg.split("||"), returnMsg = "";

    if ("err_size" == msgInfo[0]) {
        returnMsg = "<?php echo $this->Ini->Nm_lang['lang_errm_file_size'] ?>. <?php echo $this->Ini->Nm_lang['lang_errm_file_size_extension'] ?>".replace("{SC_EXTENSION}", msgInfo[1]).replace("{SC_LIMIT}", msgInfo[2]);
    } else if ("err_extension" == msgInfo[0]) {
        returnMsg = "<?php echo $this->Ini->Nm_lang['lang_errm_file_invl'] ?>";
    }

    return returnMsg;
}

