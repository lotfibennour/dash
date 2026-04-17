<?php
if (!file_exists("data.json")) {
  echo "null";
  exit;
}
echo file_get_contents("data.json");