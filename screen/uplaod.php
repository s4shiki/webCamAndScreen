<?php

if (is_uploaded_file($_FILES["my_img"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["my_img"]["tmp_name"], "data/" . $_FILES["my_img"]["name"])) {
    chmod("data/" . $_FILES["my_img"]["name"], 0644);
    echo $_FILES["my_img"]["name"] . "���A�b�v���[�h���܂����B";
  } else {
    echo "�t�@�C�����A�b�v���[�h�ł��܂���B";
  }
} else {
  echo "�t�@�C�����I������Ă��܂���B";
}

?>