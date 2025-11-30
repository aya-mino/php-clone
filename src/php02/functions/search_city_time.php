<?php // php02/functions/search_city_time.php
function search_city_time(string $city, array $CITIES): array {
  if ($city === '' || !isset($CITIES[$city])) {
    return [false, '都市が選択されていません。'];
  }
  $tz = $CITIES[$city];
  try {
    $dt = new DateTime('now', new DateTimeZone($tz));
    $timeStr = $dt->format('Y-m-d H:i:s');
    return [true, "{$city} の現在時刻は {$timeStr} ({$tz}) です。"];
  } catch (Throwable $e) {
    return [false, '時刻の取得に失敗しました。'];
  }
}
