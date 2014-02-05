<?php

if (is_uploaded_file($_FILES["my_img"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["my_img"]["tmp_name"], "data/" . $_FILES["my_img"]["name"])) {
    chmod("data/" . $_FILES["my_img"]["name"], 0644);
    echo $_FILES["my_img"]["name"] . "をアップロードしました。";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "ファイルが選択されていません。";
}

?>