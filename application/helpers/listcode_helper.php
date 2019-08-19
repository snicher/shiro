<?php

function getPekerjaan($name, $value = null, $class = null, $id = null, $required = 0, $readonly = 0, $disabled = null, $where = null) {

    $r = $required != 0 ? 'required ' : '';
    $ro = $readonly != 0 ? 'readonly ' : '';
    $d = $disabled != null ? 'disabled="true" ' : '';
    $str_class = $class != null ? 'class="' . $class . '"' : '';
    $str_id = $id != null ? 'id="' . $id . '"' : '';
    $str = '<select ' . $str_class . ' ' . $str_id . ' name="' . $name . '" ' . $r . $ro . $d . '>'
            . '<option value="">- pilih -</option>'
            . '<option value="Karyawan Swasta">Karyawan Swasta</option>'
            . '<option value="Pegawai Negeri">Pegawai Negeri</option>'
            . '<option value="Belum Bekerja">Belum Bekerja</option>';
    $str .= '</select>';
    return $str;
}