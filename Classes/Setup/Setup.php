<?php
declare(strict_types=1);

namespace T3G\MainzificRim\Setup;
/*
 * This file is part of TYPO3 GmbHs software toolkit.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Database\Connection;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class Setup
{
    public function addBeUsers(string $extensionName)
    {
        if ($extensionName !== 'mainzific_rim') {
            return;
        }

        $beUsers = [
            [
                'username' => 'bob.bernsteiner',
                'password' => '$pbkdf2-sha256$25000$jxNk.nRXeY.9Ds2nVoKuew$AlJjKfXUDjOtDaDTrwiTqBl3GtgTtWHtvdXhzwdqMLQ',
                'usergroup' => '2,3',
                'options' => 3,
                'realName' => 'Bob Bernsteiner',
                'file_permissions' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
            ],
            [
                'username' => 'news_editor',
                'password' => '$pbkdf2-sha256$25000$PFUVWjXxHOAJNrlAsgZjuQ$CBikMaO4Vf47XzdfNbybSbmtKqbVcztDJlRudOgcwfk',
                'usergroup' => '3',
                'options' => 3,
                'realName' => 'News Editor',
                'file_permissions' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
            ],
            [
                'username' => 'editor',
                'password' => '$pbkdf2-sha256$25000$F2wGjHDmTuvUakzn1eaEiw$cPkfokNtJYUespFnE918y33pKJY.4pTEf01/5OKpIs4',
                'usergroup' => '2',
                'options' => 3,
                'realName' => 'Editor',
                'file_permissions' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
            ],
            [
                'username' => 'root',
                'password' => '$pbkdf2-sha256$25000$cgZYrMWlKKaQ5M7J1pegvA$qE157Bd/XPvtwQTWsTLqwlWFdT6xsKYquE0FZ8IUloc',
                'admin' => 1,
                'usergroup' => '1',
                'options' => 3,
                'realName' => 'Root',
                'file_permissions' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
            ],
        ];

        /** @var Connection $connection */
        $connection = GeneralUtility::makeInstance(ConnectionPool::class)
            ->getConnectionForTable('be_users');
        foreach ($beUsers as $beUser) {
            $connection->insert('be_users', $beUser);
        }
    }
}