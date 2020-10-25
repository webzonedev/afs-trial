<?php
namespace Deployer;
desc('Symlink Laravel public To public_html');
task('app:symlink_public_html', function () {
run('ln -s /home/webzfcjz/source/current/public /home/webzfcjz/clients.webzone.dev');
});
