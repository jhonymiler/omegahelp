@ECHO OFF 
setlocal DISABLEDELAYEDEXPANSION 
SET BIN_TARGET=%~dp0/../squizlabs/php_codesniffer/bin/phpcs 
"c:\xampp\php\php.exe" "../squizlabs/php_codesniffer/bin/phpcs" %*
